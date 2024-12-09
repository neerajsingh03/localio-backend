<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductKeyFeature;
use Illuminate\Support\Str;
class AdminProductController extends Controller
{
    
    public function products()
    {
        $products = Product::with('keyFeatures','categories')->get();
        // dd($products);
       return view('Admin.products.index',compact('products'));
    }

    public function productAdd()
    {
        $categories = Category::all();
        return view('Admin.products.add_product',compact('categories'));
    }

    public function productAddProccess(Request $request)
    {
        $keyFeatures = array_filter($request->input('key_features'), function ($value) {
            return !empty($value);
        });
        // Validate the filtered key_features array
        $request->merge(['key_features' => $keyFeatures]);
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'product_category' => 'required',  // Ensures category is selected and exists in categories table
            'product_price' => 'required|numeric',
            'product_icon' => 'nullable|file|mimes:jpeg,png,jpg,svg,webp|max:2048',
            'product_image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
            'product_link' => 'required|url',
            'key_features' => 'required|array|min:1',
        ]);
   
        $product = isset($request->id) ?  product::find($request->id) : new Product;

        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->description = $request->description;

        $product->product_price = $request->product_price;
        if($request->hasFile('product_icon'))
        {   
            $productIcon = $request->file('product_icon');
         
            $iconName = $product->slug . '-' . rand(0, 1000) . time() . '.' . $productIcon->getClientOriginalExtension();
            // Store the icon in the public storage folder
            $productIcon->move(public_path().'/ProductIcon/',$iconName);
            $product->product_icon = $iconName;
        }
        if($request->hasFile('product_image'))
        {
            $productImage = $request->file('product_image');
            $imageName = $product->slug.'-'.rand(0,999).time().'.'.$productImage->getClientOriginalExtension();
            $productImage->move(public_path().'/ProductImage/',$imageName);
            $product->product_image = $imageName;
        }
        $product->product_link = $request->product_link;
        $product->save();

        $productCategorys = $request->product_category;

        if (!empty($productCategorys) && is_array($productCategorys)) {
            // If there are categories, sync them with the product
            $product->categories()->sync($productCategorys);
        } elseif (!empty($request->selected_categories)) {
            // If selected_categories is passed, sync with those categories
            $product->categories()->sync($request->selected_categories);
        } else {
            // If no categories are provided, you may want to remove all categories
            $product->categories()->sync([]);
        }

        $product->keyFeatures()->delete(); // Delete existing key features to avoid duplicates
        foreach ($keyFeatures as $feature) {
            ProductKeyFeature::create([
                'product_id' => $product->id,
                'feature' => $feature,
            ]);
        }
        $message = isset($request->id) ? 'Product updated successfully' : 'Product added successfully';
        return redirect()->route('products')->with('success', $message);
    }
    public function productEdit($id)

    {   $categories = Category::all();
        $product = Product::with('keyFeatures','categories')->find($id);
        return view('Admin.products.add_product',compact('product','categories'));
    }
    public function removeProduct($id)
    {
        $product = Product::find($id);
        if(!$product)
        {
            return redirect()->back()->with('error','product not found');
        }
        $product->delete();
        return redirect()->back()->with('success','product remove successfully');
    }
}
