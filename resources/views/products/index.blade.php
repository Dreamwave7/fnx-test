
@extends('layouts.main')

@section('content')



    <div class="row row-gap-4">

        @foreach($products as $product)

        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="featured-product-card">
                <div class="image-box mb-16">

                    <a href="product-detail.html"><img
                            src="{{ asset('storage/'.$product->image) }}" class="product-image"
                            alt="product"
                        style="width: 120px; height: 120px"
                        >
                    </a>
                    <div class="side-icons">
                        <ul class="list-unstyled">
                            <li>
                                <a href="">
                                    <i class="fa-light fa-heart"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn" data-bs-toggle="modal"
                                   data-bs-target="#productQuickView">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                            </li>
                            <li>
                                <a href="" class="zui-wrapper-button" data-bs-toggle="modal"
                                   data-bs-target="#comparepopup">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                         height="17" viewBox="0 0 16 17" fill="none">
                                        <path
                                            d="M12.979 16.5293C12.8173 16.5293 12.6557 16.4669 12.5333 16.3425C12.2913 16.0964 12.2947 15.7007 12.5408 15.4586L14.6415 13.393C14.7584 13.2759 14.8228 13.1207 14.8228 12.9558C14.8228 12.7913 14.7588 12.6366 14.6426 12.5197L12.5432 10.4773C11.9709 9.87765 12.8002 9.02596 13.4148 9.5813L15.5176 11.627C15.5194 11.6288 15.5213 11.6305 15.523 11.6323C15.8775 11.9858 16.0728 12.4558 16.0727 12.9558C16.0727 13.4559 15.8775 13.9259 15.523 14.2793C15.522 14.2803 15.521 14.2813 15.5199 14.2823L13.4172 16.35C13.2955 16.4696 13.1372 16.5293 12.979 16.5293ZM12.979 13.5293H3.82275C1.755 13.5293 0.0727539 11.8471 0.0727539 9.7793V8.18555C0.103473 7.35718 1.29232 7.3578 1.32275 8.18555V9.7793C1.32275 11.1578 2.44425 12.2793 3.82275 12.2793H12.979C13.8074 12.31 13.8068 13.4989 12.979 13.5293ZM15.4478 9.49805C15.1026 9.49805 14.8228 9.21824 14.8228 8.87305V7.2793C14.8228 5.9008 13.7013 4.7793 12.3228 4.7793H3.1665C2.33813 4.74858 2.33875 3.55974 3.1665 3.5293H12.3228C14.3905 3.5293 16.0728 5.21155 16.0728 7.2793V8.87305C16.0728 9.21824 15.7929 9.49805 15.4478 9.49805ZM3.16644 7.6543C3.00938 7.6543 2.85216 7.59549 2.73069 7.47727L0.627879 5.43162C0.626035 5.42983 0.624223 5.42805 0.622441 5.42624C0.267973 5.07283 0.0727539 4.60283 0.0727539 4.1028C0.0727539 3.60277 0.267973 3.13274 0.622441 2.77937C0.623473 2.77833 0.624473 2.77733 0.625504 2.77633L2.72832 0.708647C2.97444 0.466647 3.37016 0.46996 3.61216 0.716085C3.85416 0.96221 3.85085 1.35793 3.60472 1.59993L1.50397 3.66562C1.26438 3.89593 1.26388 4.30799 1.50285 4.5389L3.60232 6.5813C3.84972 6.82199 3.85516 7.21768 3.61447 7.46512C3.492 7.59102 3.32925 7.6543 3.16644 7.6543Z"
                                            fill="#363636" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="product-desc">
                    <div class="rating-star mb-8">
                        <h5 class="color-quant">★★★★<span class="lightest-gray">★</span>
                        </h5>
                    </div>
                    <a href="product-detail.html"
                       class="product-title fw-600 mb-8">{{ $product->name }}</a>
                    <h6 class="black fw-500 mb-24">{{ $product->price }} $</h6>
                    <form action="{{ route('cart.store') }}" method="POST">
                        @csrf
                    <div class="functional-bar">
                        <div class="quantity quantity-wrap">
                            <div class="input-area quantity-wrap">
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input class="decrement" type="button" value="-">
                                <input type="text" name="quantity" value="1" maxlength="2" size="1" class="number">
                                <input class="increment" type="button" value="+">
                            </div>
                        </div>
                            <button type="submit"  class="btn">
                                B корзину
                            </button>
                            <span class="circle"></span>
                    </div>
                    </form>

                </div>
            </div>
        </div>

        @endforeach

    </div>


































@endsection
