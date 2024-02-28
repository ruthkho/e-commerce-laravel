<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>email</th>
                <th>mobile</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <th>{{$order->id}}</th>
                    <th>{{$order->firstname}}</th>
                    <th>{{$order->email}}</th>
                    <th>{{$order->mobile}}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
