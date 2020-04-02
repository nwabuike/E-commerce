 <!--header area start-->
    
    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">
                
    </div>
    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                              <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                        </div>
                        <div class="call_support">
                            <p><i class="icon-phone-call" aria-hidden="true"></i> <span>Call us: <a href="tel:+(+234)8163778265">(+234)8163 7782 65</a></span></p>

                        </div>
                        <div class="header_account">
                            <ul>
                                <li class="language"><a href="#"><img src="{{asset('/frontend/images/logo/language.png')}}" alt=""> english <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Germany</a></li>
                                        <li><a href="#">Japanese</a></li>
                                    </ul>
                                </li>
                                <li class="currency"><a href="#">&#8358; <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">EUR – Euro</a></li>
                                        <li><a href="#">GBP – British Pound</a></li>
                                        <li><a href="#">INR – USD</a></li>
                                        <li><a href="#">Naira - $#8358;</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="header_top_links">
                            <ul>
                                @guest
                                <li><a href="{{ route('register') }}">Register</a></li>
                                <li><a href="{{ route('login') }}">login</a></li>
                                <li><a href="{{ route('checkout.cart') }}">Checkout</a></li>
                                @else
                                <li class="currency">
                                    <a>
                                        {{ Auth::user()->full_name }}
                                    </a></li>
                                     <li><a  href="{{ route('account.orders') }}">Orders</a></li>
                                            <li><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                                 {{ __('Logout') }}
                                             </a></li>
                                            <li><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form></li>
                                    
                                @endguest
                            </ul>
                        </div> 
                        <div class="search_container">
                            <form action="#">
                               <div class="hover_category">
                                    <select class="select_option" name="select" id="categori1">
                                        <option selected value="1">All Categories</option>
                                        @foreach ($categories as $item)
                                        <option value="2">{{$item->name}}</option>
                                        @endforeach
                                     
                                    </select>                        
                               </div>
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text">
                                    <button type="submit">Search</button> 
                                </div>
                            </form>
                        </div> 
                        <div class="header_configure_area">
                            <div class="header_wishlist">
                                <a href="wishlist.html"><i class="icon-heart"></i>
                                    <span class="wishlist_count">{{ $cartCount }}</span>
                                </a>
                            </div>
                            <div class="mini_cart_wrapper">
                                <a href="javascript:void(0)">
                                    <i class="icon-shopping-bag2"></i>
                                    <span class="cart_price">$152.00 <i class="ion-ios-arrow-down"></i></span>
                                    <span class="cart_count">{{ $cartCount }}</span>
                                </a>
                                <!--mini cart-->
                                <div class="mini_cart">
                                    <div class="mini_cart_inner">
                                        <div class="cart_item">
                                           <div class="cart_img">
                                               <a href="#"><img src="{{asset('frontend/images/s-product/product.jpg')}}" alt=""></a>
                                           </div>
                                            <div class="cart_info">
                                                <a href="#">Fusce Aliquam</a>
                                                <p>Qty: 1 X <span> $60.00 </span></p>    
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_item">
                                           <div class="cart_img">
                                               <a href="#"><img src="{{asset ('frontend/images/s-product.jpg') }}" alt=""></a>
                                           </div>
                                            <div class="cart_info">
                                                <a href="#">Ras Neque Metus</a>
                                                 <p>Qty: 1 X <span> $60.00 </span></p>    
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="mini_cart_table">
                                            <div class="cart_total">
                                                <span>Sub total:</span>
                                                <span class="price">$138.00</span>
                                            </div>
                                            <div class="cart_total mt-10">
                                                <span>total:</span>
                                                <span class="price">$138.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini_cart_footer">
                                       <div class="cart_button">
                                            <a href="cart.html">View cart</a>
                                        </div>
                                        <div class="cart_button">
                                            <a href="{{ route('checkout.cart') }}">Checkout</a>
                                        </div>

                                    </div>
                                </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="">Home</a>
                                   
                                </li>
                               
                                <li class="menu-item-has-children">
                                    <a href="my-account.html">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">About Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> Contact Us</a> 
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->
<header>
        <div class="main_header main_h_four color_three">
            <!--header top start-->
            <div class="header_top">
               <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-5">
                            <div class="header_account">
                                <ul>
                                    <li class="language"><a href="#"><img src="{{asset('frontend/images/logo/language.png')}}" alt=""> english <i class="ion-chevron-down"></i></a>
                                        <ul class="dropdown_language">
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Germany</a></li>
                                            <li><a href="#">Japanese</a></li>
                                        </ul>
                                    </li>
                                    <li class="currency"><a href="#">&#8358; <i class="ion-chevron-down"></i></a>
                                        <ul class="dropdown_currency">
                                            <li><a href="#">EUR – Euro</a></li>
                                            <li><a href="#">GBP – British Pound</a></li>
                                            <li><a href="#">&#8358;  – Naira</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="header_top_links text-right">
                                <ul>
                                    @guest
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                    <li><a href="{{ route('login') }}">login</a></li>
                                    <li><a href="{{ route('checkout.cart') }}">Checkout</a></li>
                                    @else
                                    <li class="currency">
                                        <a>
                                            {{ Auth::user()->full_name }}
                                        </a></li>
                                         <li><a  href="{{ route('account.orders') }}">Orders</a></li>
                                                <li><a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">
                                                     {{ __('Logout') }}
                                                 </a></li>
                                                <li><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form></li>
                                        
                                    @endguest
                                </ul>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
            <!--header top start-->

            <!--header middel start-->
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="{{ url('/') }}"><img src="{{asset ('frontend/images/logo/logo.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="header_right_box">
                                <div class="search_container">
                                    <form action="#">
                                       <div class="hover_category">
                                            <select class="select_option" name="select" id="categori2">
                                                <option selected value="1">All Categories</option>
                                                @foreach ($categories as $item)
                                                <option value="2">{{$item->name}}</option>
                                                @endforeach
                                            </select>                        
                                       </div>
                                        <div class="search_box">
                                            <input placeholder="Search product..." type="text">
                                            <button type="submit">Search</button> 
                                        </div>
                                    </form>
                                </div>
                                <div class="header_configure_area">
                                    <div class="header_wishlist">
                                        <a href="wishlist.html"><i class="icon-heart"></i>
                                            <span class="wishlist_count">{{ $cartCount }}</span>
                                        </a>
                                    </div>
                                    <div class="mini_cart_wrapper">
                                        <a href="javascript:void(0)">
                                            <i class="icon-shopping-bag2"></i>
                                            <span class="cart_price">$152.00 <i class="ion-ios-arrow-down"></i></span>
                                            <span class="cart_count">{{ $cartCount }}</span>
                                        </a>
                                        <!--mini cart-->
                                        <div class="mini_cart">
                                            <div class="mini_cart_inner">
                                                <div class="cart_item">
                                                   <div class="cart_img">
                                                       <a href="#"><img src="{{asset('frontend/images/s-product/product.jpg')}}" alt=""></a>
                                                   </div>
                                                    <div class="cart_info">
                                                        <a href="#">Fusce Aliquam</a>
                                                        <p>Qty: 1 X <span> $60.00 </span></p>    
                                                    </div>
                                                    <div class="cart_remove">
                                                        <a href="#"><i class="ion-android-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="cart_item">
                                                   <div class="cart_img">
                                                       <a href="#"><img src="{{asset ('frontend/images/s-product/product2.jpg')}}" alt=""></a>
                                                   </div>
                                                    <div class="cart_info">
                                                        <a href="#">Ras Neque Metus</a>
                                                         <p>Qty: 1 X <span> $60.00 </span></p>    
                                                    </div>
                                                    <div class="cart_remove">
                                                        <a href="#"><i class="ion-android-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="mini_cart_table">
                                                    <div class="cart_total">
                                                        <span>Sub total:</span>
                                                        <span class="price">$138.00</span>
                                                    </div>
                                                    <div class="cart_total mt-10">
                                                        <span>total:</span>
                                                        <span class="price">$138.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini_cart_footer">
                                               <div class="cart_button">
                                                    <a href="cart.html">View cart</a>
                                                </div>
                                                <div class="cart_button">
                                                    <a href="{{ route('checkout.cart') }}">Checkout</a>
                                                </div>

                                            </div>
                                        </div>
                                        <!--mini cart end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel end-->

            <!--header bottom satrt-->
            <div class="header_bottom h_bottom_four sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="main_menu menu_four menu_position text-left"> 
                                <nav>  
                                    <ul>
                                      
                                        <li class="mega_items"><a href="shop.html">shop</i></a> 
                                        
                                        </li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html"> Contact Us</a></li>
                                    </ul>  
                                </nav> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header bottom end-->
        </div> 
    </header>
    <!--header area end-->
