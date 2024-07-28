<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    {{ __("Seller") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class = "max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class = "bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class = "p-6 text-gray-900">
                    <a href = "{{route('product.create')}}">Add a new product.</a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class = "max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class = "bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="min-w-full border border-neutral-200 text-center text-sm font-light text-surface dark:border-white/10 dark:text-white">
                    <tr class="border-b border-neutral-200 dark:border-white/10">
                        <th scope="col" class="border-e border-neutral-200 px-6 py-4 dark:border-white/10">Product Name</th>
                        <th scope="col" class="border-e border-neutral-200 px-6 py-4 dark:border-white/10">Product Description</th>
                        <th scope="col" class="border-e border-neutral-200 px-6 py-4 dark:border-white/10">Quantity</th>
                        <th scope="col" class="border-e border-neutral-200 px-6 py-4 dark:border-white/10">Price</th>
                        <th scope="col" class="border-e border-neutral-200 px-6 py-4 dark:border-white/10">Edit</th>
                        <th scope="col" class="border-e border-neutral-200 px-6 py-4 dark:border-white/10">Delete</th>
                    </tr>
                    @foreach($products as $product)
                    <tr class="border-b border-neutral-200 dark:border-white/10">
                        <td class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 font-medium dark:border-white/10">{{$product->product_name}}</td>
                        <td class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 font-medium dark:border-white/10">{{$product->product_description}}</td>
                        <td class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 font-medium dark:border-white/10">{{$product->qty}}</td>
                        <td class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 font-medium dark:border-white/10">{{$product->price}}</td>
                        <td>
                            <a class="whitespace-nowrap border-e border-neutral-200 px-6 py-4 font-medium dark:border-white/10" href="{{route('product.edit', ['product' => $product])}}">Edit </a>
                        </td>
                        <td>
                        <form method = "post" action="{{route('product.delete', ['product' => $product])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{route('message.index')}}">Chat with others</a>
                </div>
            </div>
        </div>
    </div>
   
</x-app-layout>
