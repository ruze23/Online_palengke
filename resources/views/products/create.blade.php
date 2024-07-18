<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a product </h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <form method = "post" action = "{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Add product name</label>
            <input type="string" name="product_name" placeholder="Product name"/>
        </div>

        <div>
            <label>Add product description</label>
            <input type="string" name="product_description" placeholder="Product description"/>
        </div> 

        <div>
            <label>Add product quantity</label>
            <input type="text" name="qty" placeholder="Product quantity"/>
        </div>

        <div>
            <label>Add product price</label>
            <input type="text" name="price" placeholder="Product price"/>
        </div>

        <div>
            <input type="submit" value="save new product"/>
        </div>

        <div>
            <a href = "{{route('product.index')}}">Back</a>
        </div>

    </form>
</body>
</html>