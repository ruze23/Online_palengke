<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <div>
        <table border = "1">
            <tr>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Reserve</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_description}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a href="{{route('product.reserve', ['product' => $product])}}">Reserve </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>