<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm: lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form method="POST" action="{{ route('order.checkDataOrder') }}">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1">Check Data Order</label>
                            <input type="text" placeholder="Enter Check Data Order" class="form-control" name="order_id" required>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
