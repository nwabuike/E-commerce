@extends('site.app')
@section('title', 'Homepage')

@section('content')
    <!--slider area start-->
    <section class="slider_section slider_s_four">
        <div class="slider_area slider_carousel owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="{{asset('images/slider3.jpg')}}">
               <div class="container">
                   <div class="row">
                       <div class="col-12">
                           <div class="slider_content">
                                <h1>Big sale off <span>Accessories Fidanza</span></h1>
                                <p>Exclusive Offer -30% Off This Week</p>  
                                <a class="button" href="shop.html">shopping now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                       </div>
                   </div>
               </div> 
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="{{asset('images/slider2.jpg')}}">
                <div class="container">
                   <div class="row">
                       <div class="col-12">
                           <div class="slider_content center">
                                <h1>Accessories  <span>all kinds of tractor trailer</span></h1>
                                <p>Exclusive Offer -30% Off This Week</p>  
                                <a class="button" href="shop.html">shopping now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                       </div>
                   </div>
               </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="{{asset('images/slider1.jpg')}}">
                <div class="container">
                   <div class="row">
                       <div class="col-12">
                           <div class="slider_content">
                                <h1>High-end <span>New car interior</span> </h1>
                                <p>Exclusive Offer -20% Off This Week</p>  
                                <a class="button" href="shop.html">shopping now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </section>
    <!--slider area end-->
    
    <!--home section bg area start-->
    {{-- <div class="home_section_bg section_bg_four">
       <!--Categories product area start-->
        <div class="categories_product_area categories_product_four mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                       <div class="section_title s_title_style4">
                           <h2><span>Top</span>  Categories</h2>
                            <p>Consectetuer sociis mauris eu augue velit pulvinar ullamcorper 
                                in ac mauris ac vel, interdum sed malesuada curae sit amet non nec quis arcu massa. </p>                    
                        </div>
                        <div class="categories_product_inner categories_column7 owl-carousel">
                            @foreach($categories as $category)
                            @if($category->count()> 0)
                            <div class="single_categories_product" aria-labelledby="{{ $category->slug }}">
                                <div class="categories_product_thumb">
                                    <a href="{{ route('category.show', $category->slug) }}"><img src="{{asset('img/s-product/category1.jpg')}}" alt=""></a>
                                </div>
                                <div class="categories_product_content">
                                    <h4><a href="{{ route('category.show', $category->slug) }}"> {{ $category->name }}</a></h4>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Categories product area end-->
        
        <!--banner area start-->
        <div class="banner_area mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <figure class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="assets/img/bg/banner17.jpg" alt=""></a>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <!--banner area end-->
        
        <!--product area start-->
        <div class="product_area product_area_four color_three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <div class="deals_product_style4">
                            <div class="section_title title_style2">
                               <div class="title_content">
                                   <h2><span>Today</span>  Hot Deals</h2> 
                                </div>                
                            </div>
                            <div class="product_carousel deals_product_column1 owl-carousel">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-countdown.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-52%</span>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <p class="manufacture_product"><a href="#">Parts</a></p>
                                            <h4 class="product_name"><a href="product-countdown.html">Lorem Ipsum Lec</a></h4>
                                            <div class="product_rating">
                                               <ul>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               </ul>
                                            </div>
                                            <div class="price_box"> 
                                                <span class="old_price">$310.00</span> 
                                                <span class="current_price">$110.00</span>
                                            </div>
                                            <div class="product_desc">
                                                <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem ..</p>
                                            </div>
                                            <div class="countdown_text">
                                                <p><span>Hurry Up!</span> Offers ends in:</p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2021/12/15"></div>
                                            </div>
                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-countdown.html"><img src="assets/img/product/product8.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-52%</span>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <p class="manufacture_product"><a href="#">Parts</a></p>
                                            <h4 class="product_name"><a href="product-countdown.html">Aliquam Consequat</a></h4>
                                            <div class="product_rating">
                                               <ul>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               </ul>
                                            </div>
                                            <div class="price_box"> 
                                                <span class="old_price">$310.00</span> 
                                                <span class="current_price">$110.00</span>
                                            </div>
                                            <div class="product_desc">
                                                <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem ..</p>
                                            </div>
                                            <div class="countdown_text">
                                                <p><span>Hurry Up!</span> Offers ends in:</p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2021/12/15"></div>
                                            </div>
                                        </div>
                                    </figure>
                                </article>
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-countdown.html"><img src="assets/img/product/product5.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">-52%</span>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <p class="manufacture_product"><a href="#">Parts</a></p>
                                            <h4 class="product_name"><a href="product-countdown.html">Cas Meque Metus</a></h4>
                                            <div class="product_rating">
                                               <ul>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               </ul>
                                            </div>
                                            <div class="price_box"> 
                                                <span class="old_price">$310.00</span> 
                                                <span class="current_price">$110.00</span>
                                            </div>
                                            <div class="product_desc">
                                                <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem ..</p>
                                            </div>
                                            <div class="countdown_text">
                                                <p><span>Hurry Up!</span> Offers ends in:</p>
                                            </div>
                                            <div class="product_timing">
                                                <div data-countdown="2021/12/15"></div>
                                            </div>
                                        </div>
                                    </figure>
                                </article>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="small_product_sidebar">
                            <div class="section_title title_style2">
                                <h2><span>New</span>  Arrivals</h2>                
                            </div>
                            <div class="product_slick small_product_active">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="assets/img/product/product13.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                        </div>
                                        <div class="product_content">
                                            <h4 class="product_name"><a href="product-details.html">Donec Non Est</a></h4>
                                            <div class="product_rating">
                                               <ul>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                               </ul>
                                            </div>
                                            <div class="price_box"> 
                                                <span class="old_price">$320.00</span> 
                                                <span class="current_price">$120.00</span>
                                            </div> 
                                        </div>
                                    </figure>
                                </article>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--product area end-->
        
        <!--banner area start-->
        <div class="banner_area banner_style3 mb-78">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <figure class="single_banner">
                            <div class="banner_thumb b_fullwidth_thumb">
                                <a href="shop.html"><img src="assets/img/bg/banner11.jpg" alt=""></a>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <!--banner area end-->
        
        <!--product area start-->
        <div class="product_area home_product_four top color_three">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title title_style2">
                           <div class="title_content">
                               <h2><span>Lighting</span>  & Lamp</h2>
                            </div>                 
                        </div>
                    </div>
                </div> 
                <div class="product_container">
                   <div class="row">
                        <div class="col-lg-9 col-md-7">
                          <div class="product_carousel product_style_four owl-carousel">
                               <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-52%</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Nunc Neque Eros</a></h4>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   </ul>
                                                </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$320.00</span> 
                                                    <span class="current_price">$120.00</span>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors..</p>

                                                </div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-search"></i></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div> 
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_new">new</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Fusce Aliquam</a></h4>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   </ul>
                                                </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$320.00</span> 
                                                    <span class="current_price">$120.00</span>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors..</p>

                                                </div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-search"></i></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div> 
                                        </figure>
                                    </article>
                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-52%</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Letraset Sheets</a></h4>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   </ul>
                                                </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$320.00</span> 
                                                    <span class="current_price">$120.00</span>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors..</p>

                                                </div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-search"></i></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div> 
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product5.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_new">new</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Lorem Ipsum Lec</a></h4>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   </ul>
                                                </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$320.00</span> 
                                                    <span class="current_price">$120.00</span>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors..</p>

                                                </div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-search"></i></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div> 
                                        </figure>
                                    </article>
                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-52%</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   </ul>
                                                </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$320.00</span> 
                                                    <span class="current_price">$120.00</span>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors..</p>

                                                </div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-search"></i></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div> 
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product11.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product12.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-52%</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Proin Lectus Ipsum</a></h4>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   </ul>
                                                </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$320.00</span> 
                                                    <span class="current_price">$120.00</span>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors..</p>

                                                </div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-search"></i></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div> 
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5">
                            <figure class="single_banner">
                                <div class="banner_thumb">
                                    <a href="shop.html"><img src="assets/img/bg/banner20.jpg" alt=""></a>
                                </div>
                            </figure>
                        </div>
                   </div>
                     
                </div>
            </div>
        </div>
        <!--product area end-->
        
        <!--product area start-->
        <div class="product_area home_product_four middle color_three">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title title_style2">
                           <div class="title_content">
                               <h2><span>Wheels</span>  & Tires</h2>
                            </div>                 
                        </div>
                    </div>
                </div> 
                <div class="product_container">
                   <div class="row">
                        <div class="col-lg-3 col-md-5">
                            <figure class="single_banner">
                                <div class="banner_thumb">
                                    <a href="shop.html"><img src="assets/img/bg/banner21.jpg" alt=""></a>
                                </div>
                            </figure>
                        </div>
                        <div class="col-lg-9 col-md-7">
                            <div class="product_carousel product_style_four owl-carousel">
                               <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-52%</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   </ul>
                                                </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$320.00</span> 
                                                    <span class="current_price">$120.00</span>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors..</p>

                                                </div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-search"></i></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div> 
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product11.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product12.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-52%</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Proin Lectus Ipsum</a></h4>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   </ul>
                                                </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$320.00</span> 
                                                    <span class="current_price">$120.00</span>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors..</p>

                                                </div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-search"></i></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div> 
                                        </figure>
                                    </article>
                                </div>
                               <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-52%</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Nunc Neque Eros</a></h4>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   </ul>
                                                </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$320.00</span> 
                                                    <span class="current_price">$120.00</span>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors..</p>

                                                </div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-search"></i></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div> 
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_new">new</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Fusce Aliquam</a></h4>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   </ul>
                                                </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$320.00</span> 
                                                    <span class="current_price">$120.00</span>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors..</p>

                                                </div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-search"></i></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div> 
                                        </figure>
                                    </article>
                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-52%</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Letraset Sheets</a></h4>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   </ul>
                                                </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$320.00</span> 
                                                    <span class="current_price">$120.00</span>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors..</p>

                                                </div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-search"></i></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div> 
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product5.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_new">new</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Lorem Ipsum Lec</a></h4>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   </ul>
                                                </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$320.00</span> 
                                                    <span class="current_price">$120.00</span>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors..</p>

                                                </div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-search"></i></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div> 
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--product area end-->
        
        <!--product area start-->
        <div class="product_area home_product_four bottom color_three">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title title_style2">
                           <div class="title_content">
                               <h2><span>Body</span>   Parts</h2>
                            </div>                 
                        </div>
                    </div>
                </div> 
                <div class="product_container">
                   <div class="row">
                        <div class="col-lg-9 col-md-7">
                          <div class="product_carousel product_style_four owl-carousel">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-52%</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Letraset Sheets</a></h4>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   </ul>
                                                </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$320.00</span> 
                                                    <span class="current_price">$120.00</span>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors..</p>

                                                </div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-search"></i></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div> 
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product5.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_new">new</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Lorem Ipsum Lec</a></h4>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   </ul>
                                                </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$320.00</span> 
                                                    <span class="current_price">$120.00</span>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors..</p>

                                                </div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-search"></i></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div> 
                                        </figure>
                                    </article>
                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-52%</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Nunc Neque Eros</a></h4>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   </ul>
                                                </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$320.00</span> 
                                                    <span class="current_price">$120.00</span>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors..</p>

                                                </div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-search"></i></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div> 
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_new">new</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Fusce Aliquam</a></h4>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   </ul>
                                                </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$320.00</span> 
                                                    <span class="current_price">$120.00</span>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors..</p>

                                                </div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-search"></i></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div> 
                                        </figure>
                                    </article>
                                </div>
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-52%</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   </ul>
                                                </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$320.00</span> 
                                                    <span class="current_price">$120.00</span>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors..</p>

                                                </div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-search"></i></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div> 
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product11.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product12.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">-52%</span>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <p class="manufacture_product"><a href="#">Parts</a></p>
                                                <h4 class="product_name"><a href="product-details.html">Proin Lectus Ipsum</a></h4>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                       <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                   </ul>
                                                </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$320.00</span> 
                                                    <span class="current_price">$120.00</span>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors..</p>

                                                </div>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                                    <li class="quick_view"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-search"></i></a></li>
                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                                </ul>
                                            </div> 
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5">
                            <figure class="single_banner">
                                <div class="banner_thumb">
                                    <a href="shop.html"><img src="assets/img/bg/banner22.jpg" alt=""></a>
                                </div>
                            </figure>
                        </div>
                   </div>
                     
                </div>
            </div>
        </div>
        <!--product area end-->
        
        <!--brand area start-->
        <div class="brand_area brand_four mb-78">
            <div class="container">
                <div class="col-12">
                    <div class="brand_container owl-carousel ">
                        <div class="brand_list">
                            <div class="single_brand">
                                <a href="#"><img src="assets/img/brand/brand1.jpg" alt=""></a>
                            </div>
                            <div class="single_brand">
                                <a href="#"><img src="assets/img/brand/brand2.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="brand_list">
                            <div class="single_brand">
                                <a href="#"><img src="assets/img/brand/brand3.jpg" alt=""></a>
                            </div>
                            <div class="single_brand">
                                <a href="#"><img src="assets/img/brand/brand4.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="brand_list">
                            <div class="single_brand">
                                <a href="#"><img src="assets/img/brand/brand5.jpg" alt=""></a>
                            </div>
                            <div class="single_brand">
                                <a href="#"><img src="assets/img/brand/brand6.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="brand_list">
                            <div class="single_brand">
                                <a href="#"><img src="assets/img/brand/brand7.jpg" alt=""></a>
                            </div>
                            <div class="single_brand">
                                <a href="#"><img src="assets/img/brand/brand8.jpg" alt=""></a>
                            </div>
                        </div>
                         <div class="brand_list">
                            <div class="single_brand">
                                <a href="#"><img src="assets/img/brand/brand1.jpg" alt=""></a>
                            </div>
                            <div class="single_brand">
                                <a href="#"><img src="assets/img/brand/brand2.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="brand_list">
                            <div class="single_brand">
                                <a href="#"><img src="assets/img/brand/brand3.jpg" alt=""></a>
                            </div>
                            <div class="single_brand">
                                <a href="#"><img src="assets/img/brand/brand4.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="brand_list">
                            <div class="single_brand">
                                <a href="#"><img src="assets/img/brand/brand5.jpg" alt=""></a>
                            </div>
                            <div class="single_brand">
                                <a href="#"><img src="assets/img/brand/brand6.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--brand area end-->
        
        <!--product area start-->
        <div class="product_area product_style3 bottom4 color_three">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title title_style2">
                           <div class="title_content">
                               <h2><span>OUr</span> Products</h2> 
                            </div>             
                        </div>
                        
                    </div>
                </div> 
                <div class="product_carousel product_column6 owl-carousel">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product5.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-45%</span>
                                </div>
                                <div class="quick_button">
                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <p class="manufacture_product"><a href="#">Parts</a></p>
                                    <h4 class="product_name"><a href="product-details.html">Proin Lectus Ipsum</a></h4>
                                    <div class="product_rating">
                                       <ul>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                       </ul>
                                    </div>
                                    <div class="price_box"> 
                                        <span class="old_price">$350.00</span> 
                                        <span class="current_price">$190.00</span>
                                    </div>
                                </div> 
                                <div class="action_links">
                                     <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                        <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                    </ul>
                                </div> 
                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>

                                <div class="label_product">
                                    <span class="label_new">new</span>
                                </div>
                                <div class="quick_button">
                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <p class="manufacture_product"><a href="#">Parts</a></p>
                                    <h4 class="product_name"><a href="product-details.html">Ras Neque Metus</a></h4>
                                    <div class="product_rating">
                                       <ul>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                       </ul>
                                    </div>
                                    <div class="price_box"> 
                                        <span class="old_price">$430.00</span> 
                                        <span class="current_price">$220.00</span>
                                    </div>
                                </div> 
                                <div class="action_links">
                                     <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                        <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                    </ul>
                                </div>  
                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-56%</span>
                                </div>
                                <div class="quick_button">
                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <p class="manufacture_product"><a href="#">Parts</a></p>
                                    <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
                                    <div class="product_rating">
                                       <ul>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                       </ul>
                                    </div>
                                    <div class="price_box"> 
                                        <span class="old_price">$420.00</span> 
                                        <span class="current_price">$180.00</span>
                                    </div>
                                </div> 
                                <div class="action_links">
                                     <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                        <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                    </ul>
                                </div> 
                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product11.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product12.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-48%</span>
                                </div>
                                <div class="quick_button">
                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <p class="manufacture_product"><a href="#">Parts</a></p>
                                    <h4 class="product_name"><a href="product-details.html">Donec Non Est</a></h4>
                                    <div class="product_rating">
                                       <ul>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                       </ul>
                                    </div>
                                    <div class="price_box"> 
                                        <span class="old_price">$320.00</span> 
                                        <span class="current_price">$120.00</span>
                                    </div>
                                </div> 
                                <div class="action_links">
                                     <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                        <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                    </ul>
                                </div>  
                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-52%</span>
                                </div>
                                <div class="quick_button">
                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <p class="manufacture_product"><a href="#">Parts</a></p>
                                    <h4 class="product_name"><a href="product-details.html">Cas Meque Metus</a></h4>
                                    <div class="product_rating">
                                       <ul>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                       </ul>
                                    </div>
                                    <div class="price_box"> 
                                        <span class="old_price">$420.00</span> 
                                        <span class="current_price">$180.00</span>
                                    </div>
                                </div> 
                                <div class="action_links">
                                     <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                        <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                    </ul>
                                </div> 
                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-56%</span>
                                </div>
                                <div class="quick_button">
                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <p class="manufacture_product"><a href="#">Parts</a></p>
                                    <h4 class="product_name"><a href="product-details.html">Nunc Neque Eros</a></h4>
                                    <div class="product_rating">
                                       <ul>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                       </ul>
                                    </div>
                                    <div class="price_box"> 
                                        <span class="old_price">$320.00</span> 
                                        <span class="current_price">$120.00</span>
                                    </div>
                                </div> 
                                <div class="action_links">
                                     <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                        <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                    </ul>
                                </div>  
                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product11.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product12.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_new">new</span>
                                </div>
                                <div class="quick_button">
                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <p class="manufacture_product"><a href="#">Parts</a></p>
                                    <h4 class="product_name"><a href="product-details.html">Mauris Vel Tellus</a></h4>
                                    <div class="product_rating">
                                       <ul>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                       </ul>
                                    </div>
                                    <div class="price_box"> 
                                        <span class="old_price">$420.00</span> 
                                        <span class="current_price">$180.00</span>
                                    </div>
                                </div> 
                                <div class="action_links">
                                     <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                        <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                    </ul>
                                </div> 
                            </div>
                        </figure>
                    </article>
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-52%</span>
                                </div>
                                <div class="quick_button">
                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner">
                                    <p class="manufacture_product"><a href="#">Parts</a></p>
                                    <h4 class="product_name"><a href="product-details.html">Lorem Ipsum Lec</a></h4>
                                    <div class="product_rating">
                                       <ul>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                           <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                       </ul>
                                    </div>
                                    <div class="price_box"> 
                                        <span class="old_price">$310.00</span> 
                                        <span class="current_price">$110.00</span>
                                    </div>
                                </div> 
                                <div class="action_links">
                                     <ul>
                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>
                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                        <li class="compare"><a href="#" title="Add to Compare"><i class="icon-rotate-cw"></i></a></li>  
                                    </ul>
                                </div>  
                            </div>
                        </figure>
                    </article>
                </div>
            </div>
        </div>
        <!--product area end-->
    </div> --}}
    <!--home section bg area end-->
    
    <!--shipping area start-->
    <div class="shipping_area shipping_four">
        <div class="container">
            <div class="shipping_inner">
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="{{asset('images/shipping6.png') }} alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>Free Delivery</h4>
                        <p>For all oders over $120</p>
                    </div>
                </div>
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="{{asset('images/shipping7.png') }} alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>Free Delivery</h4>
                        <p>For all oders over $120</p>
                    </div>
                </div>
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="{{asset('images/shipping8.png') }} alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>Free Delivery</h4>
                        <p>For all oders over $120</p>
                    </div>
                </div>
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="{{asset('images/shipping9.png') }} alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>Free Delivery</h4>
                        <p>For all oders over $120</p>
                    </div>
                </div>
                <div class="single_shipping">
                    <div class="shipping_icone">
                        <img src="{{asset('images/shipping10.png') }}" alt="">
                    </div>
                    <div class="shipping_content">
                        <h4>Free Delivery</h4>
                        <p>For all oders over $120</p>
                    </div>
                </div>
            </div>
        </div>             
    </div>
    <!--shipping area end-->
    
    <!--newsletter area start-->
    <div class="newsletter_area newsletter_three">
        <div class="container">
            <div class="newsletter_inner">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="newsletter_container">
                            <h3>Follow Us</h3>
                            <p>We make consolidating, marketing and tracking your social media website easy.</p>
                            <div class="footer_social">
                               <ul>
                                   <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                                   <li><a class="twitter" href="#"><i class="icon-twitter2"></i></a></li>
                                   <li><a class="rss" href="#"><i class="icon-rss"></i></a></li>
                                   <li><a class="youtube" href="#"><i class="icon-youtube"></i></a></li>
                                   <li><a class="google" href="#"><i class="icon-google"></i></a></li>
                                   <li><a class="instagram2" href="#"><i class="icon-instagram2"></i></a></li>
                               </ul>
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="newsletter_container">
                            <h3>Newsletter Now</h3>
                            <p>Join 60.000+ subscribers and get a new discount coupon on every Wednesday.</p>
                            <div class="subscribe_form">
                                <form id="mc-form" class="mc-form footer-newsletter" >
                                    <input id="mc-email" type="email" autocomplete="off" placeholder="Enter you email address here..." />
                                    <button id="mc-submit">Subscribe</button>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div><!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7">
                        <div class="newsletter_container col_3">
                            <h3>GET THE APP</h3>
                            <p>Mazlay App is now available on Google Play & App Store. Get it now.</p>
                            <div class="app_img">
                               <ul>
                                   <li><a href="#"><img src="{{asset('images/icon2-app.jpg') }}" alt=""></a></li>
                                   <li><a href="#"><img src="{{asset('images/icon3-app.jpg') }}" alt=""></a></li>
                               </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--newsletter area end-->
    
    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">  
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig1.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig2.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig3.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig4.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">    
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li >
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/img/product/product2.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                 <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/img/product/product6.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/img/product/product9.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/img/product/product3.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>    
                                </div>  
                            </div> 
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Sit voluptatem rhoncus sem lectus</h2> 
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>    
                                        <span class="old_price" >$78.99</span>    
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>    
                                    </div> 
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                           <h2>size</h2>
                                           <select class="select_option">
                                               <option selected value="1">s</option>
                                               <option value="1">m</option>
                                               <option value="1">l</option>
                                               <option value="1">xl</option>
                                               <option value="1">xxl</option>
                                           </select>
                                        </div>
                                        <div class="variants_color">
                                           <h2>color</h2>
                                           <select class="select_option">
                                               <option selected value="1">purple</option>
                                               <option value="1">violet</option>
                                               <option value="1">black</option>
                                               <option value="1">pink</option>
                                               <option value="1">orange</option>
                                           </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>   
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>    
                                    </div>      
                                </div>    
                            </div>    
                        </div>     
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <!-- modal area end-->


@stop