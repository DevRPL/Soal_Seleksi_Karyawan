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
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                              <table id="example" class="stripe hover w-full text-center text-sm font-light" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                                <thead class="border-b bg-neutral-50 font-medium dark:border-neutral-500 dark:text-neutral-800">
                                    <tr>
                                        <th scope="col" class=" px-6 py-4" data-priority="1">No</th>
                                        <th scope="col" class=" px-6 py-4" data-priority="2">Order Id</th>
                                        <th scope="col" class=" px-6 py-4" data-priority="3">Fullname</th>
                                        <th scope="col" class=" px-6 py-4" data-priority="4">Email</th>
                                        <th scope="col" class=" px-6 py-4" data-priority="5">Phone</th>
                                        <th scope="col" class=" px-6 py-4" data-priority="6">Event Name</th>
                                        <th scope="col" class=" px-6 py-4" data-priority="7">Ticket Type</th>
                                        <th scope="col" class=" px-6 py-4" data-priority="8">Amount</th>
                                        <th scope="col" class=" px-6 py-4" data-priority="9">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $no => $order)
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4">{{ $no + 1 }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $order->order_id }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $order->name }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $order->email }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $order->telp }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $order->event_name }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $order->ticket_type }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $order->amount }}</td>
                                            <td class="whitespace-nowrap px-6 py-4 flex justify-center space-x-2 md:space-x-8">
                                                <a href="{{ route('order.edit', $order->id) }}"> Edit </a>
                                                <form action="{{ route('orders.destroy',[$order->id])}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit"> Delete </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>

                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
