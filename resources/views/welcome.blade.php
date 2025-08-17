@extends('layouts.header')
@section('content')

<style>
   .product-img {
    width: 100%;          /* Fill the container width */
    height: 200px;        /* Fixed height for all images */
    object-fit: cover;    /* Crop or scale image to fill the box without stretching */
    border-radius: 10px;  /* Optional: rounded corners */
}

</style>

      <div id="header-sticky-2" class="tp-header-sticky-area">
         <div class="container">
            <div class="tp-mega-menu-wrapper p-relative">
               <div class="row align-items-center">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                     <div class="logo">
                        <a href="index.html">
                           <img src="assets/img/logo/logo.svg" alt="logo">
                        </a>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-block">
                     <div class="tp-header-sticky-menu main-menu menu-style-1">
                       <nav id="mobile-menu">
                        <ul>
                           <li >
                              <a href="/">Home</a>
                             
                           </li>

                           <li class="has-dropdown">
                              <a href="shop.html">Category</a>
                              <ul class="tp-submenu">
                              <li><a href="{{ route('products.index')}}">Laptops</a></li>
                              <li><a href="shop.html">Tablets/Ipads</a></li>
                              <li><a href="shop-list.html">Watches</a></li>
                            
                              </ul>
                           </li>

                           <li class="has-dropdown">
                              <a href="products.html">Cart</a>
                              <ul class="tp-submenu">
                              <li><a href="product-details.html">Product Simple</a></li>
                              <li><a href="product-details-video.html">With Video</a></li>
                              <li><a href="product-details-countdown.html">With Countdown</a></li>
                              <li><a href="product-details-swatches.html">Variations Swatches</a></li>
                              <li><a href="product-details-gallery.html">Details Gallery</a></li>
                              </ul>
                           </li>

                           <li class="has-dropdown">
                              <a href="blog.html">Contact</a>
                              <ul class="tp-submenu">
                              <li><a href="blog.html">Blog Standard</a></li>
                              <li><a href="blog-grid.html">Blog Grid</a></li>
                              <li><a href="blog-list.html">Blog List</a></li>
                              <li><a href="blog-details.html">Blog Details</a></li>
                              <li><a href="blog-details-2.html">Blog Details Full Width</a></li>
                              </ul>
                           </li>

                           
                        </ul>
                        </nav>

                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                     <div class="tp-header-action d-flex align-items-center justify-content-end ml-50">
                        <div class="tp-header-action-item d-none d-lg-block">
                           <a href="compare.html"  class="tp-header-action-btn">
                              <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M14.8396 17.3319V3.71411" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M19.1556 13L15.0778 17.0967L11 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M4.91115 1.00056V14.6183" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M0.833496 5.09667L4.91127 1L8.98905 5.09667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>                                       
                           </a>
                        </div>
                        <div class="tp-header-action-item d-none d-lg-block">
                           <a href="wishlist.html" class="tp-header-action-btn">
                              <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M11.239 18.8538C13.4096 17.5179 15.4289 15.9456 17.2607 14.1652C18.5486 12.8829 19.529 11.3198 20.1269 9.59539C21.2029 6.25031 19.9461 2.42083 16.4289 1.28752C14.5804 0.692435 12.5616 1.03255 11.0039 2.20148C9.44567 1.03398 7.42754 0.693978 5.57894 1.28752C2.06175 2.42083 0.795919 6.25031 1.87187 9.59539C2.46978 11.3198 3.45021 12.8829 4.73806 14.1652C6.56988 15.9456 8.58917 17.5179 10.7598 18.8538L10.9949 19L11.239 18.8538Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M7.26062 5.05302C6.19531 5.39332 5.43839 6.34973 5.3438 7.47501" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg> 
                              <span class="tp-header-action-badge">4</span>                          
                           </a>
                        </div>
                        <div class="tp-header-action-item">
                           <button type="button" class="tp-header-action-btn cartmini-open-btn">
                              <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M6.48626 20.5H14.8341C17.9004 20.5 20.2528 19.3924 19.5847 14.9348L18.8066 8.89359C18.3947 6.66934 16.976 5.81808 15.7311 5.81808H5.55262C4.28946 5.81808 2.95308 6.73341 2.4771 8.89359L1.69907 14.9348C1.13157 18.889 3.4199 20.5 6.48626 20.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M6.34902 5.5984C6.34902 3.21232 8.28331 1.27803 10.6694 1.27803V1.27803C11.8184 1.27316 12.922 1.72619 13.7362 2.53695C14.5504 3.3477 15.0081 4.44939 15.0081 5.5984V5.5984" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M7.70365 10.1018H7.74942" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M13.5343 10.1018H13.5801" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>    
                              <span class="tp-header-action-badge">13</span>                                                                          
                           </button>
                        </div>
                        <div class="tp-header-action-item d-lg-none">
                           <button type="button" class="tp-header-action-btn tp-offcanvas-open-btn">
                              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                                 <rect x="10" width="20" height="2" fill="currentColor"/>
                                 <rect x="5" y="7" width="25" height="2" fill="currentColor"/>
                                 <rect x="10" y="14" width="20" height="2" fill="currentColor"/>
                              </svg>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <main>

         <!-- slider area start -->
         <section class="tp-slider-area p-relative z-index-1">
            <div class="tp-slider-active tp-slider-variation swiper-container">
               <div class="swiper-wrapper">
                  <div class="tp-slider-item tp-slider-height d-flex align-items-center swiper-slide green-dark-bg">
                     <div class="tp-slider-shape">
                        <img class="tp-slider-shape-1" src="assets/img/slider/shape/slider-shape-1.png" alt="slider-shape">
                        <img class="tp-slider-shape-2" src="assets/img/slider/shape/slider-shape-2.png" alt="slider-shape">
                        <img class="tp-slider-shape-3" src="assets/img/slider/shape/slider-shape-3.png" alt="slider-shape">
                        <img class="tp-slider-shape-4" src="assets/img/slider/shape/slider-shape-4.png" alt="slider-shape">
                     </div>
                     <div class="container">
                        <div class="row align-items-center">
                           <div class="col-xl-5 col-lg-6 col-md-6">
                              <div class="tp-slider-content p-relative z-index-1">
                                 
                                 <h3 class="tp-slider-title">The best Watch Collection 2025</h3>
                                 <p>Exclusive offer 
                                    <span>-35% 
                                       <svg width="94" height="20" viewBox="0 0 94 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M74.8576 4.63367L78.6048 5.11367C80.9097 5.35155 82.8309 5.75148 84.4483 5.97993L86.6581 6.31091L88.4262 6.63948C89.4684 6.81761 90.2699 6.9312 90.8805 6.99186C93.3213 7.24888 92.7011 6.63674 92.8183 6.12534C92.9355 5.61394 93.7175 5.37081 91.3267 4.45886C90.73 4.24001 89.9345 3.97481 88.8826 3.65818L87.1034 3.12577L84.8643 2.63282C83.236 2.28025 81.2402 1.82307 78.8684 1.52138L75.0177 0.981633C73.6188 0.823014 72.1417 0.730003 70.5389 0.582533C63.0297 0.0282543 55.4847 0.193022 48.0068 1.07459C39.9065 2.04304 31.9328 3.87384 24.2213 6.53586C18.0824 8.61764 12.1674 11.3089 6.56479 14.5692C4.88189 15.5255 3.25403 16.5756 1.68892 17.7145C0.568976 18.5077 -0.00964231 18.9932 0.0547097 19.0858C0.388606 19.6584 10.6194 13.1924 25.151 8.99361C32.789 6.72748 40.6283 5.20536 48.5593 4.44848C55.8569 3.76455 63.1992 3.69678 70.5082 4.24591L74.8223 4.62335" fill="currentColor"/>
                                       </svg>
                                    </span>
                                 off this week</p>
   
                                 <div class="tp-slider-btn">
                                    <a href="shop.html" class="tp-btn tp-btn-2 tp-btn-white">Shop Now
                                       <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M16 6.99976L1 6.99976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M9.9502 0.975414L16.0002 6.99941L9.9502 13.0244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-7 col-lg-6 col-md-6">
                              <div class="tp-slider-thumb text-end">
                                 <img src="assets/img/slider/slider-img-1.png" alt="slider-img">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                    <div class="tp-slider-item tp-slider-height d-flex align-items-center swiper-slide green-dark-bg">
                     <div class="tp-slider-shape">
                        <img class="tp-slider-shape-1" src="assets/img/slider/shape/slider-shape-1.png" alt="slider-shape">
                        <img class="tp-slider-shape-2" src="assets/img/slider/shape/slider-shape-2.png" alt="slider-shape">
                        <img class="tp-slider-shape-3" src="assets/img/slider/shape/slider-shape-3.png" alt="slider-shape">
                        <img class="tp-slider-shape-4" src="assets/img/slider/shape/slider-shape-4.png" alt="slider-shape">
                     </div>
                     <div class="container">
                        <div class="row align-items-center">
                           <div class="col-xl-5 col-lg-6 col-md-6">
                              <div class="tp-slider-content p-relative z-index-1">
                                 
                                 <h3 class="tp-slider-title">The best Laptop Collection 2025</h3>
                                 <p>Exclusive offer 
                                    <span>-25% 
                                       <svg width="94" height="20" viewBox="0 0 94 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M74.8576 4.63367L78.6048 5.11367C80.9097 5.35155 82.8309 5.75148 84.4483 5.97993L86.6581 6.31091L88.4262 6.63948C89.4684 6.81761 90.2699 6.9312 90.8805 6.99186C93.3213 7.24888 92.7011 6.63674 92.8183 6.12534C92.9355 5.61394 93.7175 5.37081 91.3267 4.45886C90.73 4.24001 89.9345 3.97481 88.8826 3.65818L87.1034 3.12577L84.8643 2.63282C83.236 2.28025 81.2402 1.82307 78.8684 1.52138L75.0177 0.981633C73.6188 0.823014 72.1417 0.730003 70.5389 0.582533C63.0297 0.0282543 55.4847 0.193022 48.0068 1.07459C39.9065 2.04304 31.9328 3.87384 24.2213 6.53586C18.0824 8.61764 12.1674 11.3089 6.56479 14.5692C4.88189 15.5255 3.25403 16.5756 1.68892 17.7145C0.568976 18.5077 -0.00964231 18.9932 0.0547097 19.0858C0.388606 19.6584 10.6194 13.1924 25.151 8.99361C32.789 6.72748 40.6283 5.20536 48.5593 4.44848C55.8569 3.76455 63.1992 3.69678 70.5082 4.24591L74.8223 4.62335" fill="currentColor"/>
                                       </svg>
                                    </span>
                                 off this week</p>
   
                                 <div class="tp-slider-btn">
                                    <a href="shop.html" class="tp-btn tp-btn-2 tp-btn-white">Shop Now
                                       <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M16 6.99976L1 6.99976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M9.9502 0.975414L16.0002 6.99941L9.9502 13.0244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-7 col-lg-6 col-md-6">
                              <div class="tp-slider-thumb text-end">
                                 <img src="assets/img/slider/slider-img-1.png" alt="slider-img">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               
                  
               </div>
               <div class="tp-slider-arrow tp-swiper-arrow d-none d-lg-block">
                  <button type="button" class="tp-slider-button-prev">
                     <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 13L1 7L7 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     </svg>                        
                  </button>
                  <button type="button" class="tp-slider-button-next">
                     <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 13L7 7L1 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     </svg>                        
                  </button>
               </div>
               <div class="tp-slider-dot tp-swiper-dot"></div>
            </div>
         </section>
       

        
         <!-- product arrival area start -->
         <section class="tp-product-arrival-area pb-55">
            <div class="container">
               <div class="row align-items-end">
                  <div class="col-xl-5 col-sm-6">
                     <div class="tp-section-title-wrapper mb-40">
                        <h3 class="tp-section-title">New Arrivals

                           <svg width="114" height="35" viewBox="0 0 114 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M112 23.275C1.84952 -10.6834 -7.36586 1.48086 7.50443 32.9053" stroke="currentColor" stroke-width="4" stroke-miterlimit="3.8637" stroke-linecap="round"/>
                           </svg>
                        </h3>
                     </div>
                  </div>
               <div class="tp-product-arrival-slider fix">
    <div class="tp-product-arrival-active swiper-container">
        <div class="swiper-wrapper">
            @foreach($newArrivals as $product)
            <div class="tp-product-item transition-3 mb-25 swiper-slide">
                
                <!-- Product Thumb -->
                <div class="tp-product-thumb p-relative fix m-img">
                    
                    <!-- Image (modal trigger) -->
                    <img class="product-img" 
                         src="{{ $product->mainImage ? asset($product->mainImage->image_path) : 'assets/img/default-product.jpg' }}" 
                         alt="{{ $product->name }}"
                         data-bs-toggle="modal" 
                         data-bs-target="#productQuickViewModal{{ $product->id }}">

                    <!-- Product Badge -->
                    <div class="tp-product-badge">
                        <span class="product-trending">New</span>
                    </div>

                    <!-- Product Actions -->
                    <div class="tp-product-action">
                        <div class="tp-product-action-item d-flex flex-column">

                            <!-- Add to Cart (no modal) -->
                            <button type="button" class="tp-product-action-btn tp-product-add-cart-btn">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span class="tp-product-tooltip">Add to Cart</span>
                            </button>

                            <!-- Quick View (modal trigger) -->
                            <button type="button" 
                                    class="tp-product-action-btn tp-product-quick-view-btn"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#productQuickViewModal{{ $product->id }}">
                                <i class="fa-solid fa-eye"></i>
                                <span class="tp-product-tooltip">Quick View</span>
                            </button>

                            <!-- Wishlist (no modal) -->
                            <button type="button" class="tp-product-action-btn tp-product-add-to-wishlist-btn">
                                <i class="fa-solid fa-heart"></i>
                                <span class="tp-product-tooltip">Add To Wishlist</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Content -->
                <div class="tp-product-content">

                    <!-- Category (modal trigger) -->
                    <div class="tp-product-category" 
                         data-bs-toggle="modal" 
                         data-bs-target="#productQuickViewModal{{ $product->id }}">
                        <span>{{ $product->category ?? 'Uncategorized' }}</span>
                    </div>

                    <!-- Product Name (modal trigger) -->
                    <h3 class="tp-product-title" 
                        data-bs-toggle="modal" 
                        data-bs-target="#productQuickViewModal{{ $product->id }}">
                        <span>{{ $product->name }}</span>
                    </h3>

                    <!-- Rating (click does NOT trigger modal) -->
                    <div class="tp-product-rating d-flex align-items-center">
                        <div class="tp-product-rating-icon">
                            @for($i = 1; $i <= 5; $i++)
                                @if($product->rating >= $i)
                                    <span><i class="fa-solid fa-star"></i></span>
                                @elseif($product->rating >= $i - 0.5)
                                    <span><i class="fa-solid fa-star-half-stroke"></i></span>
                                @else
                                    <span><i class="fa-regular fa-star"></i></span>
                                @endif
                            @endfor
                        </div>
                        <div class="tp-product-rating-text">
                            <span>({{ $product->reviews_count }} Review{{ $product->reviews_count != 1 ? 's' : '' }})</span>
                        </div>
                    </div>

                    <!-- Price (modal trigger) -->
                    <div class="tp-product-price-wrapper" 
                         data-bs-toggle="modal" 
                         data-bs-target="#productQuickViewModal{{ $product->id }}">
                        <span class="tp-product-price new-price">
                            ${{ number_format($product->price, 2) }}
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
         <!-- Navigation Arrows -->
    <div class="tp-product-arrival-arrow d-flex justify-content-end mt-3">
        <button class="tp-arrival-slider-button-prev me-2">&larr; Prev</button>
        <button class="tp-arrival-slider-button-next">Next &rarr;</button>
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
         <!-- product arrival area end -->

     
         <!-- subscribe area start -->
         <section class="tp-subscribe-area pt-70 pb-65 theme-bg p-relative z-index-1">
            <div class="tp-subscribe-shape">
               <img class="tp-subscribe-shape-1" src="assets/img/subscribe/subscribe-shape-1.png" alt="">
               <img class="tp-subscribe-shape-2" src="assets/img/subscribe/subscribe-shape-2.png" alt="">
               <img class="tp-subscribe-shape-3" src="assets/img/subscribe/subscribe-shape-3.png" alt="">
               <img class="tp-subscribe-shape-4" src="assets/img/subscribe/subscribe-shape-4.png" alt="">
               <!-- plane shape -->
               <div class="tp-subscribe-plane">
                  <img class="tp-subscribe-plane-shape" src="assets/img/subscribe/plane.png" alt="">
                  <svg width="399" height="110" class="d-none d-sm-block" viewBox="0 0 399 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M0.499634 1.00049C8.5 20.0005 54.2733 13.6435 60.5 40.0005C65.6128 61.6426 26.4546 130.331 15 90.0005C-9 5.5 176.5 127.5 218.5 106.5C301.051 65.2247 202 -57.9188 344.5 40.0003C364 53.3997 384 22 399 22" stroke="white" stroke-opacity="0.5" stroke-dasharray="3 3"/>
                  </svg>
                  <svg class="d-sm-none" width="193" height="110" viewBox="0 0 193 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M1 1C4.85463 20.0046 26.9085 13.6461 29.9086 40.0095C32.372 61.6569 13.5053 130.362 7.98637 90.0217C-3.57698 5.50061 85.7981 127.53 106.034 106.525C145.807 65.2398 98.0842 -57.9337 166.742 40.0093C176.137 53.412 185.773 22.0046 193 22.0046" stroke="white" stroke-opacity="0.5" stroke-dasharray="3 3"/>
                  </svg>
               </div>
            </div>
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-7 col-lg-7">
                     <div class="tp-subscribe-content">
                        <span>Sale 20% off all store</span>
                        <h3 class="tp-subscribe-title">Subscribe our Newsletter</h3>
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-5">
                     <div class="tp-subscribe-form">
                        <form action="#">
                           <div class="tp-subscribe-input">
                              <input type="email" placeholder="Enter Your Email">
                              <button type="submit">Subscribe</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- subscribe area end -->   
         
     @foreach($newArrivals as $product)
    <!-- Quick View Modal -->
    <div class="modal fade" id="productQuickViewModal{{ $product->id }}" tabindex="-1" aria-labelledby="productQuickViewLabel{{ $product->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="productQuickViewLabel{{ $product->id }}">{{ $product->name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- Product Images -->
                        <div class="col-md-6">
                            @if($product->images && $product->images->count())
                                <img src="{{ asset($product->images->first()->image_path) }}" class="img-fluid mb-2" alt="{{ $product->name }}">
                                <div class="d-flex">
                                    @foreach($product->images as $img)
                                        <img src="{{ asset($img->image_path) }}" class="img-thumbnail me-1" style="width:60px; cursor:pointer;" onclick="this.closest('.modal-body').querySelector('img').src='{{ asset($img->image_path) }}'">
                                    @endforeach
                                </div>
                            @else
                                <img src="assets/img/default-product.jpg" class="img-fluid" alt="{{ $product->name }}">
                            @endif
                        </div>

                        <!-- Product Details -->
                        <div class="col-md-6">
                            <p><strong>Category:</strong> {{ $product->category ?? 'Uncategorized' }}</p>
                            <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
                            
                            <p><strong>Rating:</strong>
                                @for($i = 1; $i <= 5; $i++)
                                    @if($product->rating >= $i)
                                        <i class="fa-solid fa-star"></i>
                                    @elseif($product->rating >= $i - 0.5)
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    @else
                                        <i class="fa-regular fa-star"></i>
                                    @endif
                                @endfor
                                ({{ $product->reviews_count }} Review{{ $product->reviews_count != 1 ? 's' : '' }})
                            </p>

                            <!-- Quantity -->
                            <div class="mb-3">
                                <label for="quantity{{ $product->id }}" class="form-label">Quantity:</label>
                                <input type="number" id="quantity{{ $product->id }}" name="quantity" class="form-control" value="1" min="1">
                            </div>

                            <!-- Buy Now & Add to Cart -->
                            <div class="d-flex gap-2">
                                <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="quantity" id="modalQuantity{{ $product->id }}" value="1">
                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                </form>
                                <a href="{{  $product->id }}" class="btn btn-success">Buy Now</a>
                            </div>

                            <!-- Product Description -->
                            <p class="mt-3">{{ $product->description ?? 'No description available.' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

          
      </main>
      
 
      
    
 

<script>
document.addEventListener("DOMContentLoaded", function() {
    var arrivalSwiper = new Swiper(".tp-product-arrival-active", {
        slidesPerView: 4,      // Number of items shown
        spaceBetween: 20,      // Gap between items
        loop: true,
        autoplay: {
            delay: 5000,       // Time between slides in ms (3 seconds)
            disableOnInteraction: false, // Keep autoplay even after user interaction
        },
        navigation: {
            nextEl: ".tp-arrival-slider-button-next",
            prevEl: ".tp-arrival-slider-button-prev",
        },
        breakpoints: {
            0: { slidesPerView: 1 },
            576: { slidesPerView: 2 },
            768: { slidesPerView: 3 },
            1200: { slidesPerView: 4 }
        }
    });
});
</script>

<script>
    document.querySelectorAll('.modal').forEach(modal => {
        modal.addEventListener('input', function(e) {
            if(e.target.name === 'quantity') {
                const hiddenInput = this.querySelector('input[name="quantity"][type="hidden"]');
                if(hiddenInput) hiddenInput.value = e.target.value;
            }
        });
    });
</script>

@endsection

<!-- Mirrored from html.storebuild.shop/shofy-prv/shofy/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Mar 2025 13:04:45 GMT -->
  
 