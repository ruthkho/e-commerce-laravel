<div>
    <style>
        nav svg{
            height: 20px;
        }

        nav .hidden{
            display: block !important;
        }
    </style>

    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-4">
                                All Orders
                            </div>
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Search.. Try some keyword.." wire:model="searchTerm">
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('order_message'))
                            <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>OrderId</th>
                                    <th>First Name</th>
                                    <th>Discount</th>
                                    <th>Total</th>
                                    <th>Email</th>
                                    <th>Zipcode</th>
                                    <th>Status</th>
                                    <th>Order Date</th>
                                    <th colspan="2" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td style="text-transform: uppercase;">{{$order->firstname}}</td>
                                        <td>RM {{$order->discount}}</td>
                                        <td>RM {{$order->total}}</td>
                                        <td>{{$order->email}}</td>
                                        <td>{{$order->zipcode}}</td>
                                        <td style="text-transform: uppercase;">{{$order->status}}</td>
                                        <td>{{$order->created_at}}</td>
                                        <td><a href="{{route('admin.orderdetails',['order_id'=>$order->id])}}"><i class="fa fa-eye fa-2x text-info"></i></a></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Status
                                                    <span class="caret"></span></button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'delivered')">Delivered</a></li>
                                                        <li><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'cancelled')">Cancelled</a></li>
                                                    </ul>
                                            </div>
                                        </td>
                                        <td><a href="#" onclick="confirm('Are you sure you want to delete this order?') || event.stopImmediatePropagation()" style="margin-left: 10px;" wire:click.prevent="deleteOrder({{$order->id}})"> <i class="fa fa-times fa-2x text-danger"></i></a> </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$orders->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
