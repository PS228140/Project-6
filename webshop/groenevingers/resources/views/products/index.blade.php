<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex flex-col gap-2">
                    @foreach ($products as $product)
                        <div class="grid grid-cols-4 grid-rows-1">
                            <span class="p-2">{{$product->name}}</span>
                            <span class="py-2 text-center">€ {{ number_format($product->price, 2, ',') }}</span>
                            <span class="py-2 text-center">{{$product->categorie->name}}</span>

                            @if(Auth::user()->role->name === "Admin" || Auth::user()->role->name === "Manager")
                                <button onclick="location.href='{{ route('products.edit', ['product' => $product->id]) }}'" class="bg-blue-500 hover:bg-blue-700 justify-self-end p-2 w-24 rounded">
                                    Beheer
                                </button>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
