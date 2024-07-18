<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit a product </h1>

    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <form method = "post" action = "{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            <label>Edit product name</label>
            <input type="string" name="product_name" placeholder="Product name" value="{{$product -> product_name}}"/>
        </div>

        <div>
            <label>Edit product description</label>
            <input type="string" name="product_description" placeholder="Product description" value="{{$product -> product_description}}"/>
        </div> 

        <div>
            <label>Edit product quantity</label>
            <input type="text" name="qty" placeholder="Product quantity" value="{{$product -> qty}}"/>
        </div>

        <div>
            <label>Edit product price</label>
            <input type="text" name="price" placeholder="Product price" value="{{$product -> price}}"/>
        </div>

        <div>
            <input type="submit" value="Update"/>
        </div>

    </form>
</body>
</html>