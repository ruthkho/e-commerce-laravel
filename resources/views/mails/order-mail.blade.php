<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Confirmation</title>
</head>
<body>
    <p>Hi {{$order->firstname}} {{$order->lastname}}</p>
    <p>Your order has been successfully placed.</p>
    <br/>

    <table style="width: 600px; text-align-right"></table>
    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($order->orderItem as $item)
            <tr>
                <td><img src="{{asset('assets/images/products')}}/{{$item->product->image}}"" width="100" /></td>
                <td>{{$item->product->name}}</td>
                <td>{{$item->quantity}}</td>
                <td>RM {{$item->price * $item->quantity}}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="3" style="border-top: 1px solid #ccc;"></td>
            <td style="font-size: 15px; font-weight: bold; border-top: 1px solid #ccc;">Subtotal : RM {{$order->subtotal}}</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td style="font-size: 15px; font-weight: bold;">Tax : RM {{$order->tax}}</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td style="font-size: 15px; font-weight: bold;">Shipping : Free Shipping</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td style="font-size: 15px; font-weight: bold;">Total : RM {{$order->total}}</td>
        </tr>
    </tbody>
</body>
</html>
