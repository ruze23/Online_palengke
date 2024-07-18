<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Reserve a product </h1>

    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <form method = "post" action = "{{route('product.save')}}">
        @csrf
        @method('post')
        <div>
            <label>Product name</label>
            <input type="string" name="product_name" placeholder="Product name" value="{{$product -> product_name}}"/>
        </div>

        <div>
            <label>Product description</label>
            <input type="string" name="product_description" placeholder="Product description" value="{{$product -> product_description}}"/>
        </div> 

        <div>
            <label>Product quantity</label>
            <input type="text" name="qty" placeholder="Product quantity" value="{{$product -> qty}}"/>
        </div>

        <div>
            <label>Product price</label>
            <input type="text" name="price" placeholder="Product price" value="{{$product -> price}}"/>
        </div>
    </form>

    <h1>Reserve {{$product -> product_name}} </h1>

    <form method = "post" action = "">
    <div>
            <label>Enter quantity:</label>
            <input type="text" name="qty" placeholder="Product quantity"/>
        </div>
    </form>
</body>
</html>