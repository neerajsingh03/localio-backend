@extends('admin_layout.master')
@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head d-flex justify-content-between">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">Add Product</h4>
        </div>
    </div>
    <?php $lang = getCurrentLocale();?>
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="nk-block">
                <form action="{{url('admin-dashboard/product-add-procc')}}" class="form-validate"
                    novalidate="novalidate" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{isset($product) ? $product->id : ''}}">
                    <div class="row g-3">
                        <!-- Product Name -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="name">Product Name</label>
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <input type="text" class="form-control" name="name" id="name" value="{{isset($product) ? $product->name  : '' }}">
                                    </div>
                                </div>
                                @error('name')
                                    <div class="error text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Product Description -->
                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <label class="form-label" for="description">Product Description</label>
                                <div class="form-control-wrap">
                                    <textarea class="description" name="description" id="description" rows="4"
                                        cols="50">{{isset($product) ? $product->description  : '' }}</textarea>
                                    @error('description')
                                        <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <!-- New Input Fields -->
                    <div class="row g-3 mt-2">
                        @if(!isset($product))
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="product-category">Product Category</label>
                                <select class="form-control" name="product_category[]" id="product-category" multiple>
                                    <option value="" disabled>Select Categories</option>
                                    @if($categories->isNotEmpty())
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            @error('product_category')
                                <div class="error text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @endif
                        @if(isset($product))
                            <div class="col-md-6">
                                @if($lang == 'en')
                                <div class="form-group">
                                    <label class="form-label" for="product-category">Product Category</label>
                                    <select class="form-control" name="product_category[]" id="product-category" multiple>
                                        <option value="" disabled>Select Categories</option>
                                        @if($categories->isNotEmpty())
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" 
                                                    @if($product->categories->contains($category->id)) selected @endif>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                @elseif($lang !== 'en')
                                    <div class="form-group">
                                        <label class="form-label" for="product-category">Product Category</label>
                                        <input type="text" class="form-control" name="product_category_display" id="product-category-display" 
                                            value="{{ $product->categories->pluck('name')->join(', ') }}" readonly>
                                        <input type="hidden" name="product_category[]" id="product-category" value="{{ implode(',', $product->categories->pluck('id')->toArray()) }}">
                                    </div>
                                @endif    
                            </div>
                        @endif
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="product-price">Product Price</label>
                                <input type="text" class="form-control" name="product_price" id="product-price" min="1" value="{{ isset($product) ? $product->product_price : ''}}">
                            </div>
                            @error('product_price')
                                <div class="error text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div id="selected-category-ids-container"></div>
                    <div id="selected-categories"></div>
                    <!-- Product Icon (File Input) -->
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label class="form-label" for="product-icon">Product Icon</label>
                            @if($lang == 'en')
                                <input type="file" class="form-control" name="product_icon" id="product-icon">
                            @endif
                            @if(isset($product))
                                <img src="{{ asset('ProductIcon/' . $product->product_icon) }}" alt="{{ $product->name }}" style="width: 50px; height: auto;">
                            @else
                                <span>No Image</span>
                            @endif
                        </div>
                        @error('product_icon')
                        <div class="error text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Product Image -->
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label class="form-label" for="product-image">Product Image</label>
                            @if($lang == 'en')
                                <input type="file" class="form-control" name="product_image" id="product-image">
                            @endif
                            @if(isset($product))
                                <img src="{{ asset('ProductImage/' . $product->product_image) }}" alt="{{ $product->name }}" style="width: 50px; height: auto;">
                            @else
                                <span>No Image</span>
                            @endif
                        </div>
                        @error('product_image')
                            <div class="error text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Product Link -->
                    <div class="col-md-12 mt-3">
                        <div class="form-group">
                            <label class="form-label" for="product-link">Product Link</label>
                            <input type="url" class="form-control" name="product_link" id="product-link" value="{{ isset($product) ? $product->product_link : '' }}">
                        </div>
                        @error('product_link')
                        <div class="error text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 feature-group">
                        <div class="form-group">
                            <label class="form-label" for="name">Key Features</label>
                            <div class="d-flex flex-column">
                                @if(!isset($product))
                                <input type="text" class="form-control" name="key_features[]" id="keyFeatures">
                                @elseif(isset($product))
                                    @foreach($product->keyFeatures as $feature)
                                        <input type="text" class="form-control" name="key_features[]" id="keyFeatures" value="{{$feature->feature}}">
                                    @endforeach

                                @endif
                                @if ($errors->has('key_features'))
                                    <div class="error text-danger">{{ $errors->first('key_features') }}</div>
                                @endif
                                <div class="mt-1 text-center original-feature-controls"> <!-- Add Feature Icon -->
                                    <button class="add-more-features btn btn-icon" type="button">
                                        <i class="fa fa-plus-circle text-success" style="font-size: 1.5rem; cursor: pointer;"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="col-md-12 mt-4">
                        <div class="form-group">
                            <button class="addCategory btn btn-primary text-center"><em
                                    class="icon ni ni-plus"></em><span>Add Product</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('#product-category').on('change', function() {
        let selectedCategories = $(this).val(); 

        selectedCategories.forEach(function(categoryId) {

            if ($('#selected-category-ids-container input[value="' + categoryId + '"]').length === 0) {
                
                let hiddenInput = $('<input>', {
                    type: 'hidden',
                    name: 'selected_categories[]', 
                    value: categoryId
                });

                $('#selected-category-ids-container').append(hiddenInput);

                let categoryName = $('#product-category option[value="' + categoryId + '"]').text();

                let categoryDiv = $('<div>', {
                    'class': 'selected-category',
                    'data-id': categoryId
                }).append(
                    $('<span>', {
                        'class': 'category-name',
                        'text': categoryName
                    }),
                    $('<button>', {
                        'type': 'button',
                        'class': 'remove-category',
                        'data-id': categoryId,
                        'html': '&times;'
                    })
                );

                $('#selected-categories').append(categoryDiv);
            }
        });

        if (selectedCategories.length === 0) {
            $('#selected-category-ids-container').empty();
            $('#selected-categories').empty(); 
        }
    });

    $(document).on('click', '.remove-category', function() {
        let categoryId = $(this).data('id');

        $('#product-category option[value="' + categoryId + '"]').prop('selected', false);

        $('.selected-category[data-id="' + categoryId + '"]').remove();

        $('#selected-category-ids-container input[value="' + categoryId + '"]').remove();
    });
});

$(document).ready(function () {
    // Add more input fields
    $(document).on('click', '.add-more-features', function () {
        let originalDiv = $(this).closest('.feature-group'); // Original input group
        let clonedDiv = originalDiv.clone(); // Clone the entire input group

        // Clear values in the cloned input and remove error messages
        clonedDiv.find('input').val('');
        clonedDiv.find('.error').remove();

        // Remove the add feature button in the cloned input
        clonedDiv.find('.original-feature-controls').remove();

        // Add a remove button to the cloned input
        clonedDiv.append(`
            <div class="mt-1 text-center cloned-feature-controls">
                <button class="remove-feature btn btn-icon" type="button">
                    <i class="fa fa-minus-circle text-danger" style="font-size: 1.5rem; cursor: pointer;"></i>
                </button>
            </div>
        `);

        // Insert the cloned input after the original
        originalDiv.after(clonedDiv);
    });

    // Remove cloned input field
    $(document).on('click', '.remove-feature', function () {
        $(this).closest('.feature-group').remove();
    });
});



// $(document).ready(function () {
//     $('.addCategory').click(function (e) {
//         e.preventDefault(); // Prevent form submission

//         let valid = true;
//         let errorMessages = [];

//         // Validate Key Features
//         $('input[name="key_features[]"]').each(function () {
//             let value = $(this).val().trim();
//             if (value === '') {
//                 valid = false;
//                 errorMessages.push('Key Features cannot be empty.');
//                 $(this).next('.error').remove(); // Remove existing error message
//                 $(this).after('<div class="error text-danger">This field is required.</div>');
//             } else {
//                 $(this).next('.error').remove(); // Clear error if valid
//             }
//         });

//         if (valid) {
//             $('#registerForm').submit(); // Submit the form if valid
//         } else {
//             console.log(errorMessages); // Debug or display messages as needed
//         }
//     });
// });

</script>


@endsection