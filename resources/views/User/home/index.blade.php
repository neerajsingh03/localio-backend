
@extends('user_layout.master')
@section('content')
<section class="banner_sec dark" style="background-color: #003F7D;">
   <div class="bubble-wrp">
      <img src="{{asset('front/img/bnnr-bg.png') }}" alt="">
   </div>
   <div class="banner_content">
      <div class="container">
         <div class="banner_row" data-aos="fade-up" data-aos-duration="1000">
            <div class="banner_text_col">
               <div class="banner_content_inner">
                  <!-- <h1>Find the Best Deals and Save on Your Next Purchase!</h1> -->
                  <h1>{{ __('home.heading') }}</h1>
                  <!-- <p>Get free, unbiased product comparisons, read real customer reviews, and track prices at Localio
                     to score the best offers. </p> -->
                     <p> {{ __('home.sub_heading') }} </p>
                  <div class="search-bar-wrp">
                     <div class="search-box">
                        <input type="text" placeholder="Enter a product, category, or what you’d like to compare...">
                        <i class="fa fa-search"></i>
                     </div>
                  </div>
               </div>
            </div>
            <div class="banner_image_col">
               <div class="banner_image">
                  <img src="{{asset('front/img/banner_image.png') }}" class="banner_top_image">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
   <!-- section trusted brands marquee -->
<section class="trusted-brands">
   <div class="container">
      <div class="trst-brnd-wrp">
         <div class="brnd-wrp-lft">
            <p class="m-0 brnd-p-txt">Trusted Brands, Unbeatable Choices</p>
         </div>
         <div class="trust-brnd-marque">
            <div class="marq-innr"><img src="{{ asset('front/img/marq-img1.svg') }}" alt=""></div>
            <div class="marq-innr"><img src="{{ asset('front/img/marq-img2.svg') }}" alt=""></div>
            <div class="marq-innr"><img src="{{ asset('front/img/marq-img3.svg') }}" alt=""></div>
            <div class="marq-innr"><img src="{{ asset('front/img/marq-img4.svg') }}" alt=""></div>
            <div class="marq-innr"><img src="{{ asset('front/img/marq-img5.svg') }}" alt=""></div>
            <div class="marq-innr"><img src="{{ asset('front/img/marq-img6.svg') }}" alt=""></div>
            <div class="marq-innr"><img src="{{ asset('front/img/marq-img7.svg') }}" alt=""></div>
            <div class="marq-innr"><img src="{{ asset('front/img/marq-img8.svg') }}" alt=""></div>
            <div class="marq-innr"><img src="{{ asset('front/img/marq-img9.svg') }}" alt=""></div>
            <div class="marq-innr"><img src="{{ asset('front/img/marq-img10.svg') }}" alt=""></div>
            <div class="marq-innr"><img src="{{ asset('front/img/marq-img11.svg') }}" alt=""></div>
         </div>
      </div>
   </div>
</section>
   <!-- section most-popular -->
<section class="most-populr-sec light p_120 pb-0">
   <div class="container">
      <div class="most-popular-wrp" data-aos="fade-up" data-aos-duration="1000">
         <div class="most_hed">
            <h2 class="text-center">Most Popular</h2>
         </div>
         <div class="popular-accordion-wrp">
            <div class="accordion" id="accordionExample">
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <div class="accor-img">
                           <img src="{{ asset('front/img/accordion-img1.png') }}" alt="">
                        </div> Business Software
                     </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                     data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <div class="accordion-bdy-wrp">
                           <div class="accor-bdy-hd">
                              <div class="row align-items-center">
                                 <div class="col-lg-6 col-md-6">
                                    <div class="accor-lft-img">
                                       <img src="{{asset('front/img/accor-bdy-img.png') }}" alt="">
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6">
                                    <div class="accor-txt-contnt">
                                       <h3>Lorem Ipsum has been the industry's standard dummy</h3>
                                       <p>Lorem Ipsum has been the industry's standard dummy text ever since the
                                          1500s, when an unknown printer took a galley of type and scrambled it to
                                          make a type specimen book, It has survived not only five centuries, but
                                          also the leap into electronic typesetting. </p>
                                       <div class="accor-btn">
                                          <a href="" class="cta cta_white">Compare Business Software</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="accor-bdy-btm">
                              <div class="row accor-bdy-row">
                                 <div class="col-lg-4">
                                    <div class="review_card light top-rate-card">
                                       <div class="inner_box_silder  top-rate-innr ">
                                          <div class="inn_sl_hed mst_hdn">
                                             <div class="sli_img">
                                                <img class="slider_img" src="{{asset('front/img/slider1_img.svg') }}" alt="">
                                             </div>
                                             <div class="sl_h">
                                                <div class="inn_h">
                                                   <div class="sl_main">
                                                      <h6 class="head">Xero</h6>
                                                      <div class="wishlist">
                                                         <a href="#" class="heart-container">
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tp-btm d-flex">
                                                   <div class="inn_ul">
                                                      <li>5.0</li>
                                                      <li><img src="{{asset('front/img/rew_star.png') }}" alt=""></li>
                                                      <li><i class="fa-solid fa-angle-down"></i>
                                                      </li>
                                                   </div>
                                                   <div class="rate_box"> 124 ratings </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="slider_content_sec">
                                             <div class="content_para"> Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s, when an unknown printer took a
                                                galley of type and scrambled it to make a type specimen book. </div>
                                             <div class="view-more-btn">
                                                <a href="" class="">Read More</a>
                                             </div>
                                          </div>
                                          <div class="top-pro-box">
                                             <div class="top-pro-btn ">
                                                <a href="" class="cta cta_orange d-flex align-items-center"> Visit
                                                   Website <div class="right-arw">
                                                      <i class="fa-solid fa-arrow-right"></i>
                                                   </div>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="review_card light top-rate-card center-card-pack">
                                       <div class="inner_box_silder  top-rate-innr ">
                                          <div class="best-value">
                                             <p> <img src="img/star.png" alt="">BEST VALUE</p>
                                          </div>
                                          <div class="inn_sl_hed mst_hdn mt-4">
                                             <div class="sli_img">
                                                <img class="slider_img" src="{{asset('front/img/slider2_img.svg') }}" alt="">
                                             </div>
                                             <div class="sl_h">
                                                <div class="inn_h">
                                                   <div class="sl_main">
                                                      <h6 class="head">Xero</h6>
                                                      <div class="wishlist">
                                                         <a href="#" class="heart-container">
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tp-btm d-flex">
                                                   <div class="inn_ul">
                                                      <li>5.0</li>
                                                      <li><img src="{{asset('front/img/rew_star.png') }}" alt=""></li>
                                                      <li><i class="fa-solid fa-angle-down"></i>
                                                      </li>
                                                   </div>
                                                   <div class="rate_box"> 124 ratings </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="slider_content_sec">
                                             <div class="content_para"> Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s, when an unknown printer took a
                                                galley of type and scrambled it to make a type specimen book. </div>
                                             <div class="view-more-btn">
                                                <a href="" class="">Read More</a>
                                             </div>
                                          </div>
                                          <div class="top-pro-box">
                                             <div class="top-pro-btn ">
                                                <a href="" class="cta cta_orange d-flex align-items-center"> Visit
                                                   Website <div class="right-arw">
                                                      <i class="fa-solid fa-arrow-right"></i>
                                                   </div>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="review_card light top-rate-card">
                                       <div class="inner_box_silder  top-rate-innr ">
                                          <div class="inn_sl_hed mst_hdn">
                                             <div class="sli_img">
                                                <img class="slider_img" src="{{asset('front/img/slider3_img.svg') }}" alt="">
                                             </div>
                                             <div class="sl_h">
                                                <div class="inn_h">
                                                   <div class="sl_main">
                                                      <h6 class="head">Xero</h6>
                                                      <div class="wishlist">
                                                         <a href="#" class="heart-container">
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tp-btm d-flex">
                                                   <div class="inn_ul">
                                                      <li>5.0</li>
                                                      <li><img src="{{asset('front/img/rew_star.png') }}" alt=""></li>
                                                      <li><i class="fa-solid fa-angle-down"></i>
                                                      </li>
                                                   </div>
                                                   <div class="rate_box"> 124 ratings </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="slider_content_sec">
                                             <div class="content_para"> Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s, when an unknown printer took a
                                                galley of type and scrambled it to make a type specimen book. </div>
                                             <div class="view-more-btn">
                                                <a href="" class="">Read More</a>
                                             </div>
                                          </div>
                                          <div class="top-pro-box">
                                             <div class="top-pro-btn ">
                                                <a href="" class="cta cta_orange d-flex align-items-center"> Visit
                                                   Website <div class="right-arw">
                                                      <i class="fa-solid fa-arrow-right"></i>
                                                   </div>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="accor-img">
                           <img src="{{asset('front/img/accordion-img2.png') }}" alt="">
                        </div> Marketing & Sales
                     </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                     data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <div class="accordion-bdy-wrp">
                           <div class="accor-bdy-hd">
                              <div class="row align-items-center">
                                 <div class="col-lg-6 col-md-6">
                                    <div class="accor-lft-img">
                                       <img src="{{asset('front/img/accor-bdy-img.png') }}" alt="">
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6">
                                    <div class="accor-txt-contnt">
                                       <h3>Lorem Ipsum has been the industry's standard dummy</h3>
                                       <p>Lorem Ipsum has been the industry's standard dummy text ever since the
                                          1500s, when an unknown printer took a galley of type and scrambled it to
                                          make a type specimen book, It has survived not only five centuries, but
                                          also the leap into electronic typesetting. </p>
                                       <div class="accor-btn">
                                          <a href="" class="cta cta_white">Compare Business Software</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="accor-bdy-btm">
                              <div class="row accor-bdy-row">
                                 <div class="col-lg-4">
                                    <div class="review_card light top-rate-card">
                                       <div class="inner_box_silder  top-rate-innr ">
                                          <div class="inn_sl_hed mst_hdn">
                                             <div class="sli_img">
                                                <img class="slider_img" src="{{asset('front/img/slider1_img.png') }}" alt="">
                                             </div>
                                             <div class="sl_h">
                                                <div class="inn_h">
                                                   <div class="sl_main">
                                                      <h6 class="head">Xero</h6>
                                                      <div class="wishlist">
                                                         <a href="#" class="heart-container">
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tp-btm d-flex">
                                                   <div class="inn_ul">
                                                      <li>5.0</li>
                                                      <li><img src="{{asset('front/img/rew_star.png') }}" alt=""></li>
                                                      <li><i class="fa-solid fa-angle-down"></i>
                                                      </li>
                                                   </div>
                                                   <div class="rate_box"> 124 ratings </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="slider_content_sec">
                                             <div class="content_para"> Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s, when an unknown printer took a
                                                galley of type and scrambled it to make a type specimen book. </div>
                                             <div class="view-more-btn">
                                                <a href="" class="">Read More</a>
                                             </div>
                                          </div>
                                          <div class="top-pro-box">
                                             <div class="top-pro-btn ">
                                                <a href="" class="cta cta_orange d-flex align-items-center"> Visit
                                                   Website <div class="right-arw">
                                                      <i class="fa-solid fa-arrow-right"></i>
                                                   </div>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="review_card light top-rate-card center-card-pack">
                                       <div class="inner_box_silder  top-rate-innr ">
                                          <div class="best-value">
                                             <p> <img src="{{asset('front/img/star.png') }}" alt="">BEST VALUE</p>
                                          </div>
                                          <div class="inn_sl_hed mst_hdn mt-4">
                                             <div class="sli_img">
                                                <img class="slider_img" src="{{asset('front/img/slider2_img.svg') }}" alt="">
                                             </div>
                                             <div class="sl_h">
                                                <div class="inn_h">
                                                   <div class="sl_main">
                                                      <h6 class="head">Xero</h6>
                                                      <div class="wishlist">
                                                         <a href="#" class="heart-container">
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tp-btm d-flex">
                                                   <div class="inn_ul">
                                                      <li>5.0</li>
                                                      <li><img src="{{asset('front/img/rew_star.png') }}" alt=""></li>
                                                      <li><i class="fa-solid fa-angle-down"></i>
                                                      </li>
                                                   </div>
                                                   <div class="rate_box"> 124 ratings </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="slider_content_sec">
                                             <div class="content_para"> Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s, when an unknown printer took a
                                                galley of type and scrambled it to make a type specimen book. </div>
                                             <div class="view-more-btn">
                                                <a href="" class="">Read More</a>
                                             </div>
                                          </div>
                                          <div class="top-pro-box">
                                             <div class="top-pro-btn ">
                                                <a href="" class="cta cta_orange d-flex align-items-center"> Visit
                                                   Website <div class="right-arw">
                                                      <i class="fa-solid fa-arrow-right"></i>
                                                   </div>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="review_card light top-rate-card">
                                       <div class="inner_box_silder  top-rate-innr ">
                                          <div class="inn_sl_hed mst_hdn">
                                             <div class="sli_img">
                                                <img class="slider_img" src="{{asset('front/img/slider3_img.png') }}" alt="">
                                             </div>
                                             <div class="sl_h">
                                                <div class="inn_h">
                                                   <div class="sl_main">
                                                      <h6 class="head">Xero</h6>
                                                      <div class="wishlist">
                                                         <a href="#" class="heart-container">
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tp-btm d-flex">
                                                   <div class="inn_ul">
                                                      <li>5.0</li>
                                                      <li><img src="{{asset('front/img/rew_star.png') }}" alt=""></li>
                                                      <li><i class="fa-solid fa-angle-down"></i>
                                                      </li>
                                                   </div>
                                                   <div class="rate_box"> 124 ratings </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="slider_content_sec">
                                             <div class="content_para"> Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s, when an unknown printer took a
                                                galley of type and scrambled it to make a type specimen book. </div>
                                             <div class="view-more-btn">
                                                <a href="" class="">Read More</a>
                                             </div>
                                          </div>
                                          <div class="top-pro-box">
                                             <div class="top-pro-btn ">
                                                <a href="" class="cta cta_orange d-flex align-items-center"> Visit
                                                   Website <div class="right-arw">
                                                      <i class="fa-solid fa-arrow-right"></i>
                                                   </div>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <div class="accor-img">
                           <img src="{{asset('front/img/accordion-img3.png') }}" alt="">
                        </div> Finance & Accounting
                     </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                     data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <div class="accordion-bdy-wrp">
                           <div class="accor-bdy-hd">
                              <div class="row align-items-center">
                                 <div class="col-lg-6 col-md-6">
                                    <div class="accor-lft-img">
                                       <img src="{{asset('front/img/accor-bdy-img.png') }}" alt="">
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6">
                                    <div class="accor-txt-contnt">
                                       <h3>Lorem Ipsum has been the industry's standard dummy</h3>
                                       <p>Lorem Ipsum has been the industry's standard dummy text ever since the
                                          1500s, when an unknown printer took a galley of type and scrambled it to
                                          make a type specimen book, It has survived not only five centuries, but
                                          also the leap into electronic typesetting. </p>
                                       <div class="accor-btn">
                                          <a href="" class="cta cta_white">Compare Business Software</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="accor-bdy-btm">
                              <div class="row accor-bdy-row">
                                 <div class="col-lg-4">
                                    <div class="review_card light top-rate-card">
                                       <div class="inner_box_silder  top-rate-innr ">
                                          <div class="inn_sl_hed mst_hdn">
                                             <div class="sli_img">
                                                <img class="slider_img" src="{{asset('front/img/slider1_img.png') }}" alt="">
                                             </div>
                                             <div class="sl_h">
                                                <div class="inn_h">
                                                   <div class="sl_main">
                                                      <h6 class="head">Xero</h6>
                                                      <div class="wishlist">
                                                         <a href="#" class="heart-container">
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tp-btm d-flex">
                                                   <div class="inn_ul">
                                                      <li>5.0</li>
                                                      <li><img src="{{asset('front/img/rew_star.png') }}" alt=""></li>
                                                      <li><i class="fa-solid fa-angle-down"></i>
                                                      </li>
                                                   </div>
                                                   <div class="rate_box"> 124 ratings </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="slider_content_sec">
                                             <div class="content_para"> Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s, when an unknown printer took a
                                                galley of type and scrambled it to make a type specimen book. </div>
                                             <div class="view-more-btn">
                                                <a href="" class="">Read More</a>
                                             </div>
                                          </div>
                                          <div class="top-pro-box">
                                             <div class="top-pro-btn ">
                                                <a href="" class="cta cta_orange d-flex align-items-center"> Visit
                                                   Website <div class="right-arw">
                                                      <i class="fa-solid fa-arrow-right"></i>
                                                   </div>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="review_card light top-rate-card center-card-pack">
                                       <div class="inner_box_silder  top-rate-innr ">
                                          <div class="best-value">
                                             <p> <img src="{{asset('front/img/star.png') }}" alt="">BEST VALUE</p>
                                          </div>
                                          <div class="inn_sl_hed mst_hdn mt-4">
                                             <div class="sli_img">
                                                <img class="slider_img" src="{{asset('front/img/slider2_img.png') }}" alt="">
                                             </div>
                                             <div class="sl_h">
                                                <div class="inn_h">
                                                   <div class="sl_main">
                                                      <h6 class="head">Xero</h6>
                                                      <div class="wishlist">
                                                         <a href="#" class="heart-container">
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tp-btm d-flex">
                                                   <div class="inn_ul">
                                                      <li>5.0</li>
                                                      <li><img src="{{asset('front/img/rew_star.png') }}" alt=""></li>
                                                      <li><i class="fa-solid fa-angle-down"></i>
                                                      </li>
                                                   </div>
                                                   <div class="rate_box"> 124 ratings </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="slider_content_sec">
                                             <div class="content_para"> Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s, when an unknown printer took a
                                                galley of type and scrambled it to make a type specimen book. </div>
                                             <div class="view-more-btn">
                                                <a href="" class="">Read More</a>
                                             </div>
                                          </div>
                                          <div class="top-pro-box">
                                             <div class="top-pro-btn ">
                                                <a href="" class="cta cta_orange d-flex align-items-center"> Visit
                                                   Website <div class="right-arw">
                                                      <i class="fa-solid fa-arrow-right"></i>
                                                   </div>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="review_card light top-rate-card">
                                       <div class="inner_box_silder  top-rate-innr ">
                                          <div class="inn_sl_hed mst_hdn">
                                             <div class="sli_img">
                                                <img class="slider_img" src="{{asset('front/img/slider3_img.png') }}" alt="">
                                             </div>
                                             <div class="sl_h">
                                                <div class="inn_h">
                                                   <div class="sl_main">
                                                      <h6 class="head">Xero</h6>
                                                      <div class="wishlist">
                                                         <a href="#" class="heart-container">
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="tp-btm d-flex">
                                                   <div class="inn_ul">
                                                      <li>5.0</li>
                                                      <li><img src="{{asset('front/img/rew_star.png') }}" alt=""></li>
                                                      <li><i class="fa-solid fa-angle-down"></i>
                                                      </li>
                                                   </div>
                                                   <div class="rate_box"> 124 ratings </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="slider_content_sec">
                                             <div class="content_para"> Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s, when an unknown printer took a
                                                galley of type and scrambled it to make a type specimen book. </div>
                                             <div class="view-more-btn">
                                                <a href="" class="">Read More</a>
                                             </div>
                                          </div>
                                          <div class="top-pro-box">
                                             <div class="top-pro-btn ">
                                                <a href="" class="cta cta_orange d-flex align-items-center"> Visit
                                                   Website <div class="right-arw">
                                                      <i class="fa-solid fa-arrow-right"></i>
                                                   </div>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
   <!-- scetion exclusive deals -->
<section class="xclusve-deal light p_120 pb-0">
   <div class="section_hed xclu-m">
      <div class="container">
         <div class="slider_h">
            <div class="head_box">
               <h2>Exclusive deals</h2>
            </div>
            <div class="review_box text-right revw-width">
               <a class="cta cta_white" href="#">All Exclusive deals</a>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="xclusve-wrp" data-aos="fade-up" data-aos-duration="1000">
         <div class="xclusve-slider">
            <div class="xclusve-pack">
               <div class="save">
                  <div class="save-txt">
                     <p class="size22">Save 30%</p>
                     <div class="save-img">
                        <img src="{{asset('front/img/save-img.png') }}" alt="">
                     </div>
                  </div>
               </div>
               <a href="" class="">
                  <div class="xclusve-img">
                     <img src="{{asset('front/img/xclusive-img1.png') }}" alt="">
                  </div>
               </a>
               <div class="xclusve-txt">
                  <a href="" class="">
                     <h3>Hostinger -Scalable hosting solutions for fast websites</h3>
                  </a>
                  <p class="grey-txt "><span class="line-through">$459</span><span class="orange-txt">$367</span>
                  </p>
                  <div class="xclu-txt-btn">
                     <a href="" class="cta cta_white">Get This Deal</a>
                  </div>
               </div>
            </div>
            <div class="xclusve-pack">
               <div class="save">
                  <div class="save-txt">
                     <p class="size22">Save 30%</p>
                     <div class="save-img">
                        <img src="{{asset('front/img/save-img.png') }}" alt="">
                     </div>
                  </div>
               </div>
               <div class="xclusve-img">
                  <img src="{{asset('front/img/xclusive-img2.png') }}" alt="">
               </div>
               <div class="xclusve-txt">
                  <h3>Namecheap -Budget-friendly hosting plans for every need</h3>
                  <p class="grey-txt"><span class="line-through">$459</span><span class="orange-txt">$367</span>
                  </p>
                  <div class="xclu-txt-btn">
                     <a href="" class="cta cta_white">Get This Deal</a>
                  </div>
               </div>
            </div>
            <div class="xclusve-pack">
               <div class="save">
                  <div class="save-txt">
                     <p class="size22">Save 30%</p>
                     <div class="save-img">
                        <img src="{{asset('front/img/save-img.png') }}" alt="">
                     </div>
                  </div>
               </div>
               <div class="xclusve-img">
                  <img src="{{asset('front/img/xclusive-img3.png') }}" alt="">
               </div>
               <div class="xclusve-txt">
                  <h3>IONOS -Fast and secure hosting to help your business grow</h3>
                  <p class="grey-txt"><span class="line-through">$459</span><span class="orange-txt">$367</span>
                  </p>
                  <div class="xclu-txt-btn">
                     <a href="" class="cta cta_white">Get This Deal</a>
                  </div>
               </div>
            </div>
            <div class="xclusve-pack">
               <div class="save">
                  <div class="save-txt">
                     <p class="size22">Save 30%</p>
                     <div class="save-img">
                        <img src="{{asset('front/img/save-img.png') }}" alt="">
                     </div>
                  </div>
               </div>
               <div class="xclusve-img">
                  <img src="{{asset('front/img/xclusive-img2.png') }}" alt="">
               </div>
               <div class="xclusve-txt">
                  <h3>Namecheap -Budget-friendly hosting plans for every need</h3>
                  <p class="grey-txt"><span class="line-through">$459</span><span class="orange-txt">$367</span>
                  </p>
                  <div class="xclu-txt-btn">
                     <a href="" class="cta cta_white">Get This Deal</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
   <!-- section combined  smart search + top rated -->
<section class="smart-combined p_120">
   <div class="combined-section-bg">
      <img src="{{asset('front/img/two-sec-bg.png') }}" alt="">
   </div>
   <div class="container">
      <div class="smart-combined-wrp" data-aos="fade-up" data-aos-duration="1000">
         <!-- section smart search -->
         <div class="smart_search_section dark p_120 pt-0 ">
            <div class="smart_search_inner">
               <div class="smart_srch_content text-center size18">
                  <h2>AI-Powered Smart Search</h2>
                  <p class="smart-p">Quickly discover and compare the best products with our AI-powered search,
                     designed to match your specific needs and preferences. </p>
                  <div class="smrt-srch-inpt">
                     <textarea rows="3"
                        placeholder="Enter a product, category, or what you’d like to compare..."></textarea>
                     <div class="input-btn">
                        <button type="" class=""><img src="{{asset('front/img/btn-img.svg') }}" alt=""></button>
                     </div>
                  </div>
               </div>
               <div class="back-image1">
                  <img src="{{asset('front/img/right-tool-vector1.png') }}" class="image-pattern1" alt="">
               </div>
               <div class="back-image2">
                  <img src="{{asset('front/img/right-tool-vector2.png') }}" class="image-pattern2" alt="">
               </div>
            </div>
         </div>
         <!-- section top-rated -->
         <div class="top-rated-section light" data-aos="fade-up" data-aos-duration="1000">
            <div class="section_hed">
               <div class="container">
                  <div class="slider_h">
                     <div class="head_box">
                        <h2>Top Rated Products</h2>
                     </div>
                     <div class="review_box text-right">
                        <a class="cta cta_white" href="#">All Top-Rated Products</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="top-rated-slider" data-aos="fade-up">
                     <div class="review_card light top-rate-card">
                        <div class="inner_box_silder  top-rate-innr ">
                           <div class="inn_sl_hed">
                              <div class="sli_img">
                                 <img class="slider_img" src="{{asset('front/img/top-rate-img1.svg') }}" alt="">
                              </div>
                              <div class="sl_h">
                                 <div class="ot_wishlet">
                                    <div class="inn_h">
                                       <h6 class="head">Asana</h6>
                                    </div>
                                    <div class="wishlist">
                                       <a href="#" class="heart-container">
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-btm d-flex">
                                    <div class="inn_ul">
                                       <li>5.0</li>
                                       <li><img src="{{asset('front/img/rew_star.png') }}" alt=""></li>
                                       <li><i class="fa-solid fa-angle-down"></i></li>
                                    </div>
                                    <div class="rate_box"> 1245 ratings </div>
                                 </div>
                              </div>
                           </div>
                           <div class="slider_content_sec">
                              <div class="first_box">
                                 <p class="">1 of 232 <a href="">CRM Software</a></p>
                              </div>
                              <div class="content_para"> Lorem Ipsum has been the industry's standard dummy text ever
                                 since the 1500s, when an unknown printer took a galley. </div>
                              <div class="view-more-btn">
                                 <a href="" class="">View More</a>
                              </div>
                           </div>
                           <div class="top-pro-box">
                              <div class="top-pro-btn ">
                                 <a href="" class="cta cta_orange d-flex align-items-center"> Visit
                                    Website <div class="right-arw">
                                       <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                 </a>
                              </div>

                           </div>
                        </div>
                     </div>
                     <div class="review_card light top-rate-card">
                        <div class="inner_box_silder  top-rate-innr ">
                           <div class="inn_sl_hed">
                              <div class="sli_img">
                                 <img class="slider_img" src="{{asset('front/img/top-rate-img2.svg') }}" alt="">
                              </div>
                              <div class="sl_h">
                                 <div class="ot_wishlet">
                                    <div class="inn_h">
                                       <h6 class="head">Adobe Workfront</h6>
                                    </div>
                                    <div class="wishlist">
                                       <a href="#" class="heart-container" tabindex="0">
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-btm d-flex">
                                    <div class="inn_ul">
                                       <li>5.0</li>
                                       <li><img src="{{asset('front/img/rew_star.png') }}" alt=""></li>
                                       <li><i class="fa-solid fa-angle-down"></i></li>
                                    </div>
                                    <div class="rate_box"> 1245 ratings </div>
                                 </div>
                              </div>
                           </div>
                           <div class="slider_content_sec">
                              <div class="first_box">
                                 <p class="">1 of 232 <a href="">CRM Software</a></p>
                              </div>
                              <div class="content_para"> Lorem Ipsum has been the industry's standard dummy text ever
                                 since the 1500s, when an unknown printer took a galley. </div>
                              <div class="view-more-btn">
                                 <a href="" class="">View More</a>
                              </div>
                           </div>
                           <div class="top-pro-box">
                              <div class="top-pro-btn ">
                                 <a href="" class="cta cta_orange d-flex align-items-center"> Visit
                                    Website <div class="right-arw">
                                       <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                 </a>
                              </div>

                           </div>
                        </div>
                     </div>
                     <div class="review_card light top-rate-card">
                        <div class="inner_box_silder  top-rate-innr ">
                           <div class="inn_sl_hed">
                              <div class="sli_img">
                                 <img class="slider_img" src="{{asset('front/img/bluf.svg') }}" alt="">
                              </div>
                              <div class="sl_h">
                                 <div class="ot_wishlet">
                                    <div class="inn_h">
                                       <h6 class="head">Confluence</h6>
                                    </div>
                                    <div class="wishlist">
                                       <a href="#" class="heart-container" tabindex="0">
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-btm d-flex">
                                    <div class="inn_ul">
                                       <li>5.0</li>
                                       <li><img src="{{asset('front/img/rew_star.png') }}" alt=""></li>
                                       <li><i class="fa-solid fa-angle-down"></i></li>
                                    </div>
                                    <div class="rate_box"> 1245 ratings </div>
                                 </div>
                              </div>
                           </div>
                           <div class="slider_content_sec">
                              <div class="first_box">
                                 <p class="">1 of 232 <a href="">CRM Software</a></p>
                              </div>
                              <div class="content_para"> Lorem Ipsum has been the industry's standard dummy text ever
                                 since the 1500s, when an unknown printer took a galley. </div>
                              <div class="view-more-btn">
                                 <a href="" class="">View More</a>
                              </div>
                           </div>
                           <div class="top-pro-box">
                              <div class="top-pro-btn ">
                                 <a href="" class="cta cta_orange d-flex align-items-center"> Visit
                                    Website <div class="right-arw">
                                       <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                 </a>
                              </div>

                           </div>
                        </div>
                     </div>
                     <div class="review_card light top-rate-card">
                        <div class="inner_box_silder  top-rate-innr ">
                           <div class="inn_sl_hed">
                              <div class="sli_img">
                                 <img class="slider_img" src="{{asset('front/img/sgbk.svg') }}" alt="">
                              </div>
                              <div class="sl_h">
                                 <div class="ot_wishlet">
                                    <div class="inn_h">
                                       <h6 class="head">Sage Intacct</h6>
                                    </div>
                                    <div class="wishlist">
                                       <a href="#" class="heart-container" tabindex="0">
                                       </a>
                                    </div>
                                 </div>
                                 <div class="tp-btm d-flex">
                                    <div class="inn_ul">
                                       <li>5.0</li>
                                       <li><img src="{{asset('front/img/rew_star.png') }}" alt=""></li>
                                       <li><i class="fa-solid fa-angle-down"></i></li>
                                    </div>
                                    <div class="rate_box"> 1245 ratings </div>
                                 </div>
                              </div>
                           </div>
                           <div class="slider_content_sec">
                              <div class="first_box">
                                 <p class="">1 of 232 <a href="">CRM Software</a></p>
                              </div>
                              <div class="content_para"> Lorem Ipsum has been the industry's standard dummy text ever
                                 since the 1500s, when an unknown printer took a galley. </div>
                              <div class="view-more-btn">
                                 <a href="" class="">View More</a>
                              </div>
                           </div>
                           <div class="top-pro-box">
                              <div class="top-pro-btn ">
                                 <a href="" class="cta cta_orange d-flex align-items-center"> Visit
                                    Website <div class="right-arw">
                                       <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                 </a>
                              </div>

                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
   <!--  -------------------------------------------slider section start ------------------------------------->
<section class="outer_slider dark p_120">
   <div class="section_hed" data-aos="fade-up" data-aos-duration="1000">
      <div class="container">
         <div class="slider_h">
            <div class="head_box">
               <h2>Latest Reviews</h2>
            </div>
            <div class="review_box text-right">
               <a class="cta cta_white" href="#">Write a Review</a>
            </div>
         </div>
      </div>
   </div>
   <div class="reviews_block" data-aos="fade-up" data-aos-duration="1000">
      <div class="container">
         <div class="row">
            <div class="latest-reviews-slider reviews_slider  ">
               <div class="review_card light">
                  <div class="inner_box_silder ">
                     <div class="inn_sl_hed">
                        <div class="sli_img">
                           <img class="slider_img" src="{{asset('front/img/slider1_img.svg') }}" alt="">
                        </div>
                        <div class="sl_h">
                           <div class="inn_h">
                              <div class="sl_main">
                                 <h6 class="head">Xero</h6>
                                 <div class="wishlist">
                                    <a href="#" class="heart-container">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-btm d-flex">
                              <div class="inn_ul">
                                 <li>5.0</li>
                                 <li><img src="{{asset('front/img/rew_star.png') }}" alt=""></li>
                                 <li><i class="fa-solid fa-angle-down"></i>
                                 </li>
                              </div>
                              <div class="rate_box"> 124 ratings </div>
                           </div>
                        </div>
                     </div>
                     <div class="slider_content_sec">
                        <div class="first_box"> Impressive! </div>
                        <div class="content_para"> “Lorem Ipsum has been the industry's standard dummy text ever
                           since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                           type specimen book. </div>
                     </div>
                     <div class="joh_box">
                        <div class="joh_img">
                           <img src="{{asset('front/img/joh.png') }}" alt="">
                        </div>
                        <div class="joh_sec">
                           <div class="joh_head"> John Doe </div>
                           <div class="joh_pos"> Position Here </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="review_card light">
                  <div class="inner_box_silder ">
                     <div class="inn_sl_hed">
                        <div class="sli_img">
                           <img class="slider_img" src="{{asset('front/img/slider2_img.svg') }}" alt="">
                        </div>
                        <div class="sl_h">
                           <div class="inn_h">
                              <div class="sl_main">
                                 <h6 class="head">odoo</h6>
                                 <div class="wishlist">
                                    <a href="#" class="heart-container">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-btm d-flex">
                              <div class="inn_ul">
                                 <li>5.0</li>
                                 <li><img src="{{asset('front/img/rew_star.png') }}" alt=""></li>
                                 <li><i class="fa-solid fa-angle-down"></i>
                                 </li>
                              </div>
                              <div class="rate_box"> 124 ratings </div>
                           </div>
                        </div>
                     </div>
                     <div class="slider_content_sec">
                        <div class="first_box"> Great </div>
                        <div class="content_para"> “Lorem Ipsum has been the industry's standard dummy text ever
                           since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                           type specimen book. </div>
                     </div>
                     <div class="joh_box">
                        <div class="joh_img">
                           <img src="{{asset('front/img/joh.png') }}" alt="">
                        </div>
                        <div class="joh_sec">
                           <div class="joh_head"> John Doe </div>
                           <div class="joh_pos"> Position Here </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="review_card light">
                  <div class="inner_box_silder ">
                     <div class="inn_sl_hed">
                        <div class="sli_img">
                           <img class="slider_img" src="{{asset('front/img/slider3_img.svg') }}" alt="">
                        </div>
                        <div class="sl_h">
                           <div class="inn_h">
                              <div class="sl_main">
                                 <h6 class="head">BambooHR</h6>
                                 <div class="wishlist">
                                    <a href="#" class="heart-container">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-btm d-flex">
                              <div class="inn_ul">
                                 <li>5.0</li>
                                 <li><img src="{{asset('front/img/rew_star.png') }}" alt=""></li>
                                 <li><i class="fa-solid fa-angle-down"></i>
                                 </li>
                              </div>
                              <div class="rate_box"> 124 ratings </div>
                           </div>
                        </div>
                     </div>
                     <div class="slider_content_sec">
                        <div class="first_box"> Impressive! </div>
                        <div class="content_para"> “Lorem Ipsum has been the industry's standard dummy text ever
                           since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                           type specimen book. </div>
                     </div>
                     <div class="joh_box">
                        <div class="joh_img">
                           <img src="{{asset('front/img/joh.png') }}" alt="">
                        </div>
                        <div class="joh_sec">
                           <div class="joh_head"> John Doe </div>
                           <div class="joh_pos"> Position Here </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="review_card light">
                  <div class="inner_box_silder ">
                     <div class="inn_sl_hed">
                        <div class="sli_img">
                           <img class="slider_img" src="{{asset('front/img/slider2_img.svg') }}" alt="">
                        </div>
                        <div class="sl_h">
                           <div class="inn_h">
                              <div class="sl_main">
                                 <h6 class="head">odoo</h6>
                                 <div class="wishlist">
                                    <a href="#" class="heart-container">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-btm d-flex">
                              <div class="inn_ul">
                                 <li>5.0</li>
                                 <li><img src="{{asset('front/img/rew_star.png') }}" alt=""></li>
                                 <li><i class="fa-solid fa-angle-down"></i>
                                 </li>
                              </div>
                              <div class="rate_box"> 124 ratings </div>
                           </div>
                        </div>
                     </div>
                     <div class="slider_content_sec">
                        <div class="first_box"> Great </div>
                        <div class="content_para"> “Lorem Ipsum has been the industry's standard dummy text ever
                           since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                           type specimen book. </div>
                     </div>
                     <div class="joh_box">
                        <div class="joh_img">
                           <img src="{{asset('front/img/joh.png') }}" alt="">
                        </div>
                        <div class="joh_sec">
                           <div class="joh_head"> John Doe </div>
                           <div class="joh_pos"> Position Here </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
   <!--  -------------------------------------------slider section end ------------------------------------->
   <!----------------------------------------- read section start --------------------------------------- -->
<section class="read_sec_outer light p_120">
   <div class="section_hed" data-aos="fade-up" data-aos-duration="1000">
      <div class="container">
         <div class="slider_h">
            <div class="head_box">
               <h2>Read Our Articles</h2>
            </div>
            <div class="review_box text-right">
               <a class="cta cta_white" href="#">View All Articles</a>
            </div>
         </div>
      </div>
   </div>
   <div class="read_content_sec light" data-aos="fade-up" data-aos-duration="1000">
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-4">
               <div class="in_cont_box">
                  <div class="read_img">
                     <a href="#" class="blog_thumb"><img class="r_img" src="{{asset('front/img/read_img1.png') }}" alt=""></a>
                  </div>
                  <div class="read_content_in">
                     <div class="read_cont_h">
                        <h3 class="read_text"><a href="#">Lorem Ipsum has been the industry's standard</a>
                        </h3>
                     </div>
                     <div class="read_para">
                        <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                           unknown printer took a galley. </p>
                     </div>
                     <div class="box_footer">
                        <div class="more_read">
                           <a href="">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4">
               <div class="in_cont_box">
                  <div class="read_img">
                     <a href="#" class="blog_thumb"><img class="r_img" src="{{asset('front/img/read_img2.png') }}" alt=""></a>
                  </div>
                  <div class="read_content_in">
                     <div class="read_cont_h">
                        <h3 class="read_text"><a href="#">Lorem Ipsum has been the industry's standard</a>
                        </h3>
                     </div>
                     <div class="read_para">
                        <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                           unknown printer took a galley. </p>
                     </div>
                     <div class="box_footer">
                        <div class="more_read">
                           <a href="">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4">
               <div class="in_cont_box">
                  <div class="read_img">
                     <a href="#" class="blog_thumb"><img class="r_img" src="{{asset('front/img/read_img3.png') }}" alt=""></a>
                  </div>
                  <div class="read_content_in">
                     <div class="read_cont_h">
                        <h3 class="read_text"><a href="#">Lorem Ipsum has been the industry's standard</a>
                        </h3>
                     </div>
                     <div class="read_para">
                        <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                           unknown printer took a galley. </p>
                     </div>
                     <div class="box_footer">
                        <div class="more_read">
                           <a href="">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
   <!-- section right-tool -->
<section class="right_tool_sec dark p_80">
   <div class="container">
      <div class="right-tool-wrp text-center" data-aos="fade-up" data-aos-duration="1000">
         <h2>Find the Right Tool</h2>
         <div class="right-tool-pack">
            <div class="row">
               <div class="col-lg-4">
                  <div class="tool-card">
                     <div class="tool-card-img">
                        <img src="{{asset('front/img/right-tool-img1.png') }}" alt="">
                     </div>
                     <div class="tool-crd-bdy">
                        <h3 class="h6_26">Verified User Reviews</h3>
                        <p class="size18">Read real feedback from verified users to help you make the right choice.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="tool-card">
                     <div class="tool-card-img">
                        <img src="{{asset('front/img/right-tool-img2.png') }}" alt="">
                     </div>
                     <div class="tool-crd-bdy">
                        <h3 class="h6_26">Feature and Price Comparisons</h3>
                        <p class="size18">Easily compare software based on key features, pricing, and customer
                           ratings. </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="tool-card">
                     <div class="tool-card-img">
                        <img src="{{asset('front/img/right-tool-img3.png') }}" alt="">
                     </div>
                     <div class="tool-crd-bdy">
                        <h3 class="h6_26">Independent Insights</h3>
                        <p class="size18">Access unbiased, data-driven research to get the most value from your
                           software. </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="right-tool-btn text-center">
            <a href="" class="cta">Get Started</a>
         </div>
      </div>
   </div>
   <div class="back-image1">
      <img src="{{asset('front/img/right-tool-vector1.png') }}" class="image-pattern1" alt="">
   </div>
   <div class="back-image2">
      <img src="{{asset('front/img/right-tool-vector2.png') }}" class="image-pattern2" alt="">
   </div>
</section>
<!-- <script type="text/javascript"></script>
<script>
         $(document).ready(function () {
         function checkScroll() {
            const $myElement = $('#myID');
            console.log($myElement);
            if ($(window).scrollTop() > 460) {
               $myElement.show();
            } else {
               $myElement.hide();
            }
         }
         checkScroll();
         $(window).on('scroll', checkScroll);
      });
</script> -->

@endsection
