<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="EcoStore">

    <title>EcoStore || Grocery Store</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/favicon.png">

    <!-- All CSS files -->
    <link rel="stylesheet" href={{ asset('css/vendor/font-awesome.css') }}>
    <link rel="stylesheet" href={{ asset("css/vendor/slick-theme.css")}}>
    <link rel="stylesheet" href={{ asset("css/vendor/slick-slider.css")}}>
    <link rel="stylesheet" href={{ asset("css/vendor/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{ asset("css/app.css")}}>

</head>

<body class="tt-smooth-scroll">

<!-- Preloader -->
<div id="preloader">
    <div class="preloader">
        <svg class="cart" role="img" aria-label="Shopping cart line animation" viewBox="0 0 128 128" width="128px" height="128px" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="8">
                <g class="cart__track" stroke="hsla(0,10%,10%,0.1)">
                    <polyline points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80" />
                    <circle cx="43" cy="111" r="13" />
                    <circle cx="102" cy="111" r="13" />
                </g>
                <g class="cart__lines" stroke="currentColor">
                    <polyline class="cart__top" points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80" stroke-dasharray="338 338" stroke-dashoffset="-338" />
                    <g class="cart__wheel1" transform="rotate(-90,43,111)">
                        <circle class="cart__wheel-stroke" cx="43" cy="111" r="13" stroke-dasharray="81.68 81.68" stroke-dashoffset="81.68" />
                    </g>
                    <g class="cart__wheel2" transform="rotate(90,102,111)">
                        <circle class="cart__wheel-stroke" cx="102" cy="111" r="13" stroke-dasharray="81.68 81.68" stroke-dashoffset="81.68" />
                    </g>
                </g>
            </g>
        </svg>
    </div>
</div>
<!-- Preloader -->

<!-- Main Wrapper Start -->
<div id="scroll-container" class="main-wrapper">


    <!-- Header Menu Start -->
    <header>

        <div class="header-section">
            <div class="container">
                <div class="header-center">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4 col-sm-5 col-5">
                            <a href="index.html" class="header-logo">
                                <img src="assets/media/logo.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 d-lg-block d-none">
                            <div class="mixin-container d-lg-flex d-none">

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-8 col-sm-7 col-7">

                            <div class="header-buttons">
                                <a href="" class="button-block d-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33"
                                         viewBox="0 0 32 33" fill="none">
                                        <path
                                            d="M15.9995 28.6015C-10.6667 13.8627 7.99999 -2.13732 15.9995 7.98008C24 -2.13733 42.6666 13.8627 15.9995 28.6015Z"
                                            stroke="#363636" stroke-width="1.5" />
                                    </svg>
                                </a>
                                <div class="vr-line"></div>
                                <div class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
                                    @if (Route::has('login'))
                                        <nav class="flex items-center justify-end gap-4">
                                            @auth
                                                <a
                                                    href="#"
                                                    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                                                >
                                                    -{{ \Illuminate\Support\Facades\Auth::user()->email }}
                                                </a>
                                            @else
                                                <a
                                                    href="{{ route('login') }}"
                                                    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                                                >
                                                    Log in    
                                                </a>

                                                @if (Route::has('register'))
                                                    <a
                                                        href="{{ route('register') }}"
                                                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                                        Register
                                                    </a>
                                                @endif
                                            @endauth
                                        </nav>
                                    @endif
                                </div>
                                <a href="#" class="button-block d-flex align-items-center cart-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="33"
                                         viewBox="0 0 32 33" fill="none">
                                        <path
                                            d="M10.6667 13.8626H6.66667L4 28.5293H28L25.3333 13.8626H21.3333M10.6667 13.8626V9.86263C10.6667 6.91711 13.0545 4.5293 16 4.5293V4.5293C18.9455 4.5293 21.3333 6.91711 21.3333 9.86263V13.8626M10.6667 13.8626H21.3333M10.6667 13.8626V17.8626M21.3333 13.8626V17.8626"
                                            stroke="#363636" stroke-width="1.41176" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <div>
                                        <p class="caption mb-1">Корзина:</p>
                                        <h6 class="subtitle fw-400 black">$11</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <!-- Header Menu End -->

    <!-- Main Sections -->
    @yield('content')
    <!-- Main Sections -->
</div>
<!-- Main Wrapper End -->

<!-- Back To Top Start -->
<a href="#main-wrapper" id="backto-top" class="back-to-top"><i class="fas fa-angle-up"></i></a>


<!-- Mobile Menu Start -->
<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="assets/media/logo.png" alt=""></a>
        </div>
        <div class="mobile-nav__container"></div>
        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fas fa-envelope"></i>
                <a href="mailto:example@company.com">example@company.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:+12345678">+123 (4567) -890</a>
            </li>
        </ul>
        <div class="mobile-nav__social">
            <a href=""><i class="fa-brands fa-x-twitter"></i></a>
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<!-- Mobile Menu End -->

<!-- Shopping Cart Popup Start -->
<aside id="sidebar-cart">
    <div class="title-cart-block mb-32 bg-lightest-gray">
        <h6>Shopping Cart </h6>
        <a href="#" class="close-button close-popup"><span class="close-icon">X</span></a>
    </div>
    <ul class="product-list p-24">

        @forelse($cart->cartItem as $cartItem)


        <li class="product-item mb-24">
            <div class="d-flex align-items-center gap-12">
                <div class="item-image">
                    <img src="{{ asset('storage/'.$cartItem->product->image) }}" alt="Product Photo">
                </div>

                <div class="prod-title">
                    <a href="" class="h6 black mb-8">{{ $cartItem->product->name }}</a>
                    <p>${{ $cartItem->product->price }}</p>
                </div>
            </div>
            <div class="text-end">
                <form action="{{ route('cart.remove',['cartItem' => $cartItem]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn-outline-warning" type="submit">Видалити</button>
                </form>
                <form action="{{ route('cart.update',['cartItem' => $cartItem]) }}" method="post"  >
                    @csrf
                    @method('PATCH')
                    <div class="quantity quantity-wrap">
                        <div class="input-area quantity-wrap">
                            <input class="decrement" type="button" value="-">
                            <input type="text" name="quantity" value="{{ $cartItem->quantity }}" maxlength="2" size="1" class="number">
                            <input class="increment" type="button" value="+">
                            <button class="btn" type="submit">Застосувати</button>
                        </div>
                    </div>
                </form>
            </div>

        </li>



        @empty
            <p>Корзина пуста</p>
        @endforelse

    </ul>
    <div class="price-total p-24">
        <span class="h5">TOTAL</span>
        <span class="h5">$44</span>
    </div>
    <div class="action-buttons p-24">
        <form action="{{ route('cart.all.remove',['cart' => $cart]) }}" method="post" >
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">
                <i class="bi bi-trash3 me-2"></i>Очистити корзину
            </button>
        </form>
    </div>
    <div class="hr-line mb-24"></div>

</aside>
<div id="sidebar-cart-curtain" class="close-popup"></div>
<!-- Shopping Cart Popup End -->


<!-- Jquery Js -->
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/vendor/jquery-3.6.3.min.js"></script>
<script src="js/vendor/slick.min.js"></script>

<script src="js/app.js"></script>

</body>

</html>
