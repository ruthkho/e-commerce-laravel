<main id="main" class="main-site left-sidebar">
	<div class="container">

        <style>
            .product-wish{
                position: absolute;
                top: 10%;
                left: 0;
                z-index:99;
                right: 30px;
                text-align: right;
                padding-top: 0;
            }
            .product-wish .fa{
                color: #cbcbcb;
                font-size: 32px;
            }
            .product-wish .fa:hover{
                color: #ff7007;
            }
            .fill-heart{
                color: #ff7007 !important;
            }
        </style>

		<div class="wrap-breadcrumb">
			<ul>
				<li class="item-link"><a href="#" class="link">home</a></li>
				<li class="item-link"><span>All Product</span></li>
			</ul>
		</div>

        <div class="row">
			<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
				<div class="banner-shop">
					<a href="#" class="banner-link">
						<figure><img src="{{ asset('assets/images/homeslider.png') }}" alt=""></figure>
					</a>
				</div>

				<div class="wrap-shop-control">
					<h1 class="shop-title">Searched Product</h1>
					<div class="wrap-right">
						<div class="sort-item orderby ">
							<select name="orderby" class="use-chosen" wire:model="sorting">
								<option value="default" selected="selected">Default sorting</option>
								<option value="date">Sort by newness</option>
								<option value="price">Sort by price: low to high</option>
								<option value="price-desc">Sort by price: high to low</option>
							</select>
						</div>

						<div class="sort-item product-per-page">
							<select name="post-per-page" class="use-chosen" wire:model="pagesize">
								<option value="12" selected="selected">12 per page</option>
							    <option value="16">16 per page</option>
								<option value="18">18 per page</option>
								<option value="21">21 per page</option>
								<option value="24">24 per page</option>
								<option value="30">30 per page</option>
								<option value="32">32 per page</option>
							</select>
						</div>

						<div class="change-display-mode">
							<a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
						</div>

					</div>
				</div><!--end wrap shop control-->

                @if($products->count() > 0)
                    <div class="row">
                        <ul class="product-list grid-products equal-container">
                            @php
                                $witems = Cart::instance('wishlist')->content()->pluck('id');
                            @endphp
                            @foreach($products as $product)
                                <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                    <div class="product product-style-3 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{route('product.details', ['slug'=>$product->slug])}}" title="{{$product->name}}">
                                                <figure><img src="{{ asset('assets/images/products') }}/{{$product->image}}" alt="{{$product->name}}"></figure>
                                            </a>
                                        </div>

                                        <div class="product-info">
                                            <a href="{{route('product.details', ['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
                                            <div class="wrap-price"><span class="product-price">{{$product->regular_price}}</span></div>
                                            <a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}}, '{{$product->name}}', {{$product->regular_price}})">Add To Cart</a>
                                            <div class="product-wish">
                                                @if($witems->contains($product->id))
                                                    <a href="#" wire:click.prevent="removeFromWishlist({{$product->id}})"><i class="fa fa-heart fill-heart"></i></a>
                                                @else
                                                    <a href="#" wire:click.prevent="addToWishList({{$product->id}}, '{{$product->name}}', {{$product->regular_price}})"><i class="fa fa-heart"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                @else
                    <p style="padding-top:30px;">No Product</p>
                @endif

				<div class="wrap-pagination-info">
                    {{$products->links()}}
				</div>
			</div><!--end main products area-->

            {{-- Sitebar --}}
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
				<div class="widget mercado-widget categories-widget">
					<h2 class="widget-title">All Categories</h2>
					    <div class="widget-content">
						    <ul class="list-category">
                            @foreach($categories as $category)
                                <li class="category-item">
                                    <a href="{{route('product.category',['category_slug'=>$category->slug])}}" class="cate-link">{{$category->name}}</a>
                                </li>
                            @endforeach
						</ul>
					</div>
				</div><!-- Categories widget-->

                <div class="widget mercado-widget occasions-widget">
					<h2 class="widget-title">All Occasion</h2>
					<div class="widget-content">
						<ul class="list-occasion">
							@foreach($occasions as $occasion)
                                <li class="occasion-item">
                                    <a href="{{route('product.occasion',['occasion_slug'=>$occasion->slug])}}" class="cate-link">{{$occasion->name}}</a>
                                </li>
                            @endforeach
						</ul>
					</div>
                </div>

                <div class="widget mercado-widget flowers-widget">
					<h2 class="widget-title">All Flowers</h2>
					<div class="widget-content">
						<ul class="list-flower">
							@foreach($flowers as $flower)
                                 <li class="flower-item">
                                    <a href="{{route('product.flower',['flower_slug'=>$flower->slug])}}" class="cate-link">{{$flower->name}}</a>
                                </li>
                            @endforeach
						</ul>
					</div>
				</div>


				<div class="widget mercado-widget filter-widget price-filter">
					<h2 class="widget-title">Price <span class="text-info">RM{{$min_price}} - RM{{$max_price}}</span></h2>
					<div class="widget-content" style="padding: 10px 5px 40px 5px;">
						<div id="slider" wire:ignore></div>
					</div>
                </div><!-- Price-->

			</div><!--end sitebar-->
	    </div><!--end row-->
	</div><!--end container-->
</main>


@push('scripts')
    <script>
        var slider = document.getElementById('slider');
        noUiSlider.create(slider,{
            start: [1,1000],
            connect: true,
            range: {
                'min': 1,
                'max': 1000
            },
            pips: {
                mode: 'steps',
                stepped: true,
                density: 4
            }
        });

        slider.noUiSlider.on('update',function(value){
            @this.set('min_price',value[0]);
            @this.set('max_price',value[1]);
        });
    </script>
@endpush
