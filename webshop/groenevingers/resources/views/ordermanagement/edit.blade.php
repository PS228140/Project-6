@php
    use App\Models\Product;
    use App\Models\Categorie;
    use App\Models\State;
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight align-center">
            {{ __(date('d-m-Y', strtotime($order->created_at)) . ' / ' . $order->customer_name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex flex-col gap-2">
                    <h5>Progress</h5>

                    <div class="flex flex-row gap-3">
                        @php
                            $states = State::all();
                        @endphp

                        @foreach ($states as $state)
                            @if ($order->state->id >= $state->id)
                                @if ($order->state->id == 6)
                                    <div class="w-full flex flex-col gap-1">
                                        <div class="bg-red-600 h-1 w-full rounded-sm"></div>
                                        <span class="text-gray-500">{{ $state->name }}</span>
                                    </div>
                                @else
                                    <div class="w-full flex flex-col gap-1">
                                        <div class="bg-gray-100 h-1 w-full rounded-sm"></div>
                                        <span class="text-gray-100">{{ $state->name }}</span>
                                    </div>
                                @endif
                            @else
                                <div class="w-full flex flex-col gap-1">
                                    <div class="bg-gray-600 h-1 w-full rounded-sm"></div>
                                    <span class="text-gray-500">{{ $state->name }}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <div class="flex flex-row justify-between content-end">
                        <form action="{{ route('orders.updateState', ['id' => $order->state->id, 'orderId' => $order->id]) }}" method="post">
                            @csrf
                            @method("POST")
                            <button type="submit" class="justify-self-end align-end w-min mt-4 h-full max-h-8 inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Proceed</button>
                        </form>

                        <form action="{{ route('orders.cancelOrder', ['id' => $order->id]) }}" method="post">
                            @csrf
                            @method("POST")
                            <button type="submit" class="justify-self-end align-end w-min mt-4 h-full max-h-8 inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150 transition ease-in-out duration-150">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex flex-col gap-2">
                    <div class="grid grid-cols-4 grid-rows-1 dark:text-gray-500">
                        <h5 class="">Product</h5>
                        <h5 class="justify-self-end">Quantity</h5>
                        <h5 class="justify-self-end">Price</h5>
                    </div>

                    @foreach($order->orderrow as $orderrow)
                        @php
                            $product = Product::getProduct($orderrow->product_id);
                            $categorie = Categorie::getCategorie($product["categorie_id"]);
                        @endphp

                        <form action="{{ route('orders.destroyOrderRow', ['id' => $orderrow->id, 'orderId' => $order->id]) }}" method="post" class="grid grid-cols-4 grid-rows-1 py-2">
                            @csrf
                            @method('DELETE')
                            <div class="flex">
                                <img class="max-h-16 rounded-md" src="{{ $product["img_src"] }}" />
                                <div class="flex flex-col justify-between">
                                    <p class="mx-4">{{ $product["name"] }}</p>
                                    <p class="mx-4 dark:text-gray-500">{{ $categorie["name"] }}</p>
                                </div>
                            </div>
                            <p class="mt-10 justify-self-end">{{ $orderrow->quantity }}x</p>
                            <p class="mt-10 justify-self-end">€ {{ number_format($orderrow->price, 2, ',') }}</p>
                            <button type="submit" class="justify-self-end self-end w-min items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">Remove</button>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>