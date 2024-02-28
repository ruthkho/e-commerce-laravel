



<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('order_message'))
                    <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Order Details
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('user.orders')}}" class="btn btn-success pull-right">All Orders</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Order Id</th>
                                <td style="text-transform: uppercase;">{{$order->id}}</td>
                                <th>Order Date</th>
                                <td style="text-transform: uppercase;">{{$order->created_at}}</td>
                                <th>Status</th>
                                <td style="text-transform: uppercase;">{{$order->status}}</td>
                                @if($order->status == "delivered")
                                    <th>Delivery Date</th>
                                    <td style="text-transform: uppercase;">{{$order->delivered_date}}</td>
                                @elseif($order->statis == "cancelled")
                                    <th>Cancellation Date</th>
                                    <td style="text-transform: uppercase;">{{$order->cancelled_date}}</td>
                                @endif
                            </tr>
                            <tr>
                                <th>Message</th>
                                <td>{{$order->message}}</td>
                                <th>Transaction Method</th>
                                <td style="text-transform: uppercase;">{{$order->transaction->mode}}</td>
                                <th></th>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Ordered Items
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="wrap-iten-in-cart">
                            <h3 class="box-title">Description</h3>
                                <ul class="products-cart">
                                    @foreach($order->orderItem as $item)
                                        <li class="pr-cart-item">
                                            <div class="product-image">
                                                <figure><img src="{{ asset('assets/images/products') }}/{{$item->product->image}}" alt="{{$item->product->name}}"></figure>
                                            </div>
                                            <div class="product-name">
                                                <a class="link-to-product" href="{{route('product.details', ['slug'=>$item->product->slug])}}">{{$item->product->name}}</a>
                                            </div>
                                            <div class="price-field produtc-price">
                                                <p class="price">RM {{$item->price}}</p>
                                            </div>
                                            <div class="quantity">
                                                <h5>{{$item->quantity}}</h5>
                                            </div>
                                            <div class="price-field sub-total">
                                                <p class="price">RM {{$item->price * $item->quantity}}</p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                        </div>
                        <div class="summary">
                            <div class="order-summary">
                                <h4 class="title-box">Order Summary</h4>
                                <p class="summary-info"><span class="title">Subtotal</span><b class="index">RM {{$order->subtotal}}</b></p>
                                <p class="summary-info"><span class="title">Tax</span><b class="index">RM {{$order->tax}}</b></p>
                                <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
                                <p class="summary-info"><span class="title">Total</span><b class="index">RM {{$order->total}}</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Billing Details
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>First Name</th>
                                <td style="text-transform: uppercase;">{{$order->firstname}}</td>
                                <th>Last Name</th>
                                <td style="text-transform: uppercase;">{{$order->lastname}}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{$order->mobile}}</td>
                                <th>Email</th>
                                <td>{{$order->email}}</td>
                            </tr>
                            <tr>
                                <th>Line 1</th>
                                <td style="text-transform: uppercase;">{{$order->line1}}</td>
                                <th>Line 2</th>
                                <td style="text-transform: uppercase;">{{$order->line2}}</td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td style="text-transform: uppercase;">{{$order->city}}</td>
                                <th>State</th>
                                <td style="text-transform: uppercase;">{{$order->state}}</td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td style="text-transform: uppercase;">{{$order->country}}</td>
                                <th>Zipcode</th>
                                <td style="text-transform: uppercase;">{{$order->zipcode}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @if ($order->is_shipping_different)
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Shipping Details
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <th>First Name</th>
                                    <td style="text-transform: uppercase;">{{$order->shipping->firstname}}</td>
                                    <th>Last Name</th>
                                    <td style="text-transform: uppercase;">{{$order->shipping->lastname}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{$order->shipping->mobile}}</td>
                                    <th>Email</th>
                                    <td>{{$order->shipping->email}}</td>
                                </tr>
                                <tr>
                                    <th>Line 1</th>
                                    <td style="text-transform: uppercase;">{{$order->shipping->line1}}</td>
                                    <th>Line 2</th>
                                    <td style="text-transform: uppercase;">{{$order->shipping->line2}}</td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td style="text-transform: uppercase;">{{$order->shipping->city}}</td>
                                    <th>State</th>
                                    <td style="text-transform: uppercase;">{{$order->shipping->state}}</td>
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <td style="text-transform: uppercase;">{{$order->shipping->country}}</td>
                                    <th>Zipcode</th>
                                    <td style="text-transform: uppercase;">{{$order->shipping->zipcode}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Transaction
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Payment Mode</th>
                                <td style="text-transform: uppercase;">{{$order->transaction->mode}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td style="text-transform: uppercase;">{{$order->transaction->status}}</td>
                            </tr>
                            <tr>
                                <th>Date of Payment</th>
                                <td>{{$order->transaction->created_at}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
