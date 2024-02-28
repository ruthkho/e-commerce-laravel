<main id="main">
    <div class="container">

        <style>
            .services {
                background-image: url(../images/behindtes.jpeg);
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
                padding: 100px 0px;
            }

            .services .service-item {
                text-align: center;
            }

            .services .service-item .icon {
                background-color: #f7f7f7;
                padding: 40px;
            }

            .services .service-item .icon i {
                width: 100px;
                height: 100px;
                display: inline-block;
                text-align: center;
                line-height: 100px;
                background-color: #f33f3f;
                color: #fff;
                font-size: 32px;
            }

            .services .service-item .down-content {
                background-color: #fff;
                padding: 40px 30px;
            }

            .services .service-item .down-content h4 {
                font-size: 17px;
                color: #1a6692;
                margin-bottom: 20px;
            }

            .services .service-item .down-content p {
                margin-bottom: 25px;
            }

            .product-item .down-content {
                padding: 30px;
                position: relative;
            }

            .product-item .down-content h4 {
                font-size: 17px;
                color: #1a6692;
                margin-bottom: 20px;
            }

            .product-item .down-content h6 {
                position: absolute;
                top: 30px;
                right: 30px;
                font-size: 18px;
                color: #121212;
            }

            .product-item .down-content p {
                margin-bottom: 20px;
            }

            .product-item .down-content ul li {
                display: inline-block;
            }

            .product-item .down-content ul li i {
                color: #f33f3f;
                font-size: 14px;
            }

            .product-item .down-content span {
                position: absolute;
                right: 30px;
                bottom: 30px;
                font-size: 13px;
                color: #f33f3f;
                font-weight: 500;
            }

            .team-member .down-content {
                padding: 30px;
                text-align: center;
            }

            .team-member .down-content h4 {
                font-size: 17px;
                color: #1a6692;
                margin-bottom: 8px;
            }

            .team-member .down-content span {
                display: block;
                font-size: 13px;
                color: #f33f3f;
                font-weight: 500;
                margin-bottom: 20px;
            }

            .services .service-item .down-content {
                background-color: #fff;
                padding: 40px 30px;
            }

            .services .service-item .down-content h4 {
                font-size: 17px;
                color: #1a6692;
                margin-bottom: 20px;
            }

            .services .service-item .down-content p {
                margin-bottom: 25px;
            }

            .team-members {
                margin-top: 100px;
            }

            .team-member {
                border: 1px solid #eee;
                margin-bottom: 30px;
            }

            .team-member img {
                width: 100%;
                overflow: hidden;
            }

            .team-member .down-content {
                padding: 30px;
                text-align: center;
            }

            .team-member .thumb-container {
                position: relative;
            }

            .team-member .thumb-container .hover-effect {
                position: absolute;
                background-color: rgba(243,63,63,0.9);
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                opacity: 0;
                visibility: hidden;
                transition: all .5s;
            }

            .team-member .thumb-container .hover-effect .hover-content {
                position: absolute;
                display: inline-block;
                width: 100%;
                text-align: center;
                top: 50%;
                transform: translateY(-50%);
            }

            .team-member .thumb-container .hover-effect .hover-content ul.social-icons li a:hover {
                background-color: #fff;
                color: #f33f3f;
            }

            .team-member:hover .hover-effect {
                visibility: visible;
                opacity: 1;
            }

            .team-member .down-content h4 {
                font-size: 17px;
                color: #1a6692;
                margin-bottom: 8px;
            }

            .team-member .down-content span {
                display: block;
                font-size: 13px;
                color: #f33f3f;
                font-weight: 500;
                margin-bottom: 20px;
            }


            .about-features p {
                border-bottom: 1px solid #eee;
                padding-bottom: 20px;
            }

            .about-features .container .row {
                padding-bottom: 0px!important;
                border-bottom: none!important;
            }



            .best-features .container .row {
                border-bottom: 1px solid #eee;
                padding-bottom: 60px;
            }

            .best-features img {
                width: 100%;
                overflow: hidden;
            }

            .best-features h4 {
                font-size: 17px;
                color: #1a6692;
                margin-bottom: 20px;
            }

            .best-features ul.featured-list li {
                display: block;
                margin-bottom: 10px;
            }

            .best-features p {
                margin-bottom: 25px;
            }

            .best-features ul.featured-list li a {
                font-size: 14px;
                color: #4a4a4a;
                font-weight: 300;
                transition: all .3s;
                position: relative;
                padding-left: 13px;
            }

            .best-features ul.featured-list li a:before {
                content: '';
                width: 5px;
                height: 5px;
                display: inline-block;
                background-color: #4a4a4a;
                position: absolute;
                left: 0;
                transition: all .3s;
                top: 8px;
            }

            .best-features ul.featured-list li a:hover {
                color: #f33f3f;
            }

            .best-features ul.featured-list li a:hover::before {
                background-color: #f33f3f;
            }

            .best-features .filled-button {
                margin-top: 20px;
            }

            .section-heading {
                text-align: left;
                margin-bottom: 60px;
                border-bottom: 1px solid #eee;
            }

            .section-heading h2 {
                font-size: 28px;
                font-weight: 400;
                color: #1e1e1e;
                margin-bottom: 15px;
            }
            .latest-products .section-heading a {
                float: right;
                margin-top: -35px;
                text-transform: uppercase;
                font-size: 13px;
                font-weight: 700;
                color: #f33f3f;
            }
            .latest-products .section-heading a {
                float: none;
                margin-top: 0px;
                display: block;
                margin-bottom: 20px;
            }

            .page-heading .text-content h2 {
                color: #fff;
                font-size: 62px;
                text-transform: uppercase;
                letter-spacing: 5px;
            }
            .background-header .navbar-brand h2 {
                color: #121212!important;
            }
            .navbar .navbar-brand h2 {
                color: #fff;
                text-transform: uppercase;
                font-size: 24px;
                font-weight: 700;
                -webkit-transition: all .3s ease 0s;
                -moz-transition: all .3s ease 0s;
                -o-transition: all .3s ease 0s;
                transition: all .3s ease 0s;
            }
            .navbar .navbar-brand h2 em {
                font-style: normal;
                color: #f33f3f;
            }
            .banner .text-content h2 {
                color: #fff;
                font-size: 62px;
                text-transform: uppercase;
                letter-spacing: 5px;
            }
        </style>


        <!--MAIN SLIDE-->
        <div class="wrap-main-slide">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                @foreach ($sliders as $slide)
                    <div class="item-slide">
                        <img src="{{ asset('assets/images/sliders') }}/{{$slide->image}}" alt="" class="img-slide">
                        <div class="slide-info slide-1">
                            <h2 class="f-title"><b>{{$slide->title}}</b></h2>
                            <span class="subtitle">{{$slide->subtitle}}</span>
                            {{-- <p class="sale-info">Only price: <span class="price">{{$slide->price}}</span></p> --}}
                            {{-- <a href="{{$slide->link}}" class="btn-link">Shop Now</a> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>



        <!--Latest Products-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Latest Products</h3>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                @foreach ($lproducts as $lproduct)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{route('product.details',['slug'=>$lproduct->slug])}}" title="{{$lproduct->name}}">
                                                <figure><img src="{{ asset('assets/images/products') }}/{{$lproduct->image}}" width="800" height="800" alt="{{$lproduct->name}}"></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('product.details',['slug'=>$lproduct->slug])}}" class="product-name"><span>{{$lproduct->name}}</span></a>
                                            <div class="wrap-price"><span class="product-price">RM{{$lproduct->regular_price}}</span></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="services">
            <div class="container">
                <h2 style="text-align: center; color: #ff2832; padding-bottom: 20px">Our Customers</h2>
                <div class="row">

                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="icon">
                                <img src="assets/images/long1.jpeg" alt=""></i>
                            </div>
                            <div class="down-content">
                                <p>21st on 02.08.21 <br> it was a special celebration for me.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="icon">
                                <img src="assets/images/square2.jpeg" alt=""></i>
                            </div>
                            <div class="down-content">
                                <p>Hope you had a blast</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="icon">
                                <img src="assets/images/square3.jpeg" alt=""></i>
                            </div>
                            <div class="down-content">
                                <p>加了一岁，加了一份魅力，加了一份智慧，加了一份成熟</p>
                            </div>
                        </div>
                    </div>




            </div>
            </div>
      </div>

        <!--Product Categories-->
        {{-- <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Product Categories</h3>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-control">
                        @foreach ($categories as $key=>$category)
                            <a href="#category_{{$category->id}}" class="tab-control-item {{$key==0 ? 'active':''}}">{{$category->name}}</a>
                        @endforeach
                    </div>

                    <div class="tab-contents">
                        @foreach ($categories as $key=>$category)
                            <div class="tab-content-item {{$key==0 ? 'active':''}}" id="category_{{$category->id}}">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                    @php
                                        $c_products = DB::table('products')->where('category_id', $category->id)->get()->take($no_of_products);
                                    @endphp
                                        @foreach ($c_products as $c_product)
                                            <div class="product product-style-2 equal-elem ">
                                                <div class="product-thumnail">
                                                    <a href="{{route('product.details',['slug'=>$c_product->slug])}}" title="{{$c_product->name}}">
                                                        <figure><img src="{{ asset('assets/images/products') }}/{{$c_product->image}}" width="800" height="800" alt="{{$c_product->name}}"></figure>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <a href="{{route('product.details',['slug'=>$c_product->slug])}}" class="product-name"><span>{{$c_product->name}}</span></a>
                                                    <div class="wrap-price"><span class="product-price">RM{{$c_product->regular_price}}</span></div>
                                                </div>
                                            </div>
                                        @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> --}}

        <!--Product Occasions-->
        {{-- <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Occasions</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="{{ asset('assets/images/fashion-accesories-banner.jpg') }}" width="1170" height="240" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-control">
                        @foreach ($occasions as $key=>$occasion)
                            <a href="#occasion_{{$occasion->id}}" class="tab-control-item {{$key==0 ? 'active':''}}">{{$occasion->name}}</a>
                        @endforeach
                    </div>

                    <div class="tab-contents">
                        @foreach ($occasions as $key=>$occasion)
                            <div class="tab-content-item {{$key==0 ? 'active':''}}" id="occasion_{{$occasion->id}}">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                    @php
                                        $o_products = DB::table('products')->where('occasion_id', $occasion->id)->get()->take($no_of_products);
                                    @endphp
                                        @foreach ($o_products as $o_product)
                                            <div class="product product-style-2 equal-elem ">
                                                <div class="product-thumnail">
                                                    <a href="{{route('product.details',['slug'=>$o_product->slug])}}" title="{{$o_product->name}}">
                                                        <figure><img src="{{ asset('assets/images/products') }}/{{$o_product->image}}" width="800" height="800" alt="{{$o_product->name}}"></figure>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <a href="{{route('product.details',['slug'=>$o_product->slug])}}" class="product-name"><span>{{$o_product->name}}</span></a>
                                                    <div class="wrap-price"><span class="product-price">RM{{$o_product->regular_price}}</span></div>
                                                </div>
                                            </div>
                                        @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> --}}

        <!--Product Flowers-->
        {{-- <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Flowers</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="{{ asset('assets/images/fashion-accesories-banner.jpg') }}" width="1170" height="240" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-control">
                        @foreach ($flowers as $key=>$flower)
                            <a href="#flower_{{$flower->id}}" class="tab-control-item {{$key==0 ? 'active':''}}">{{$flower->name}}</a>
                        @endforeach
                    </div>

                    <div class="tab-contents">
                        @foreach ($flowers as $key=>$flower)
                            <div class="tab-content-item {{$key==0 ? 'active':''}}" id="flower_{{$flower->id}}">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                    @php
                                        $f_products = DB::table('products')->where('flower_id', $flower->id)->get()->take($no_of_products);
                                    @endphp
                                        @foreach ($f_products as $f_product)
                                            <div class="product product-style-2 equal-elem ">
                                                <div class="product-thumnail">
                                                    <a href="{{route('product.details',['slug'=>$f_product->slug])}}" title="{{$f_product->name}}">
                                                        <figure><img src="{{ asset('assets/images/products') }}/{{$f_product->image}}" width="800" height="800" alt="{{$f_product->name}}"></figure>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <a href="{{route('product.details',['slug'=>$f_product->slug])}}" class="product-name"><span>{{$f_product->name}}</span></a>
                                                    <div class="wrap-price"><span class="product-price">RM{{$f_product->regular_price}}</span></div>
                                                </div>
                                            </div>
                                        @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</main>
