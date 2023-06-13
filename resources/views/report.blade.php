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
                              <table class="w-full text-center text-sm font-light">
                                <thead
                                  class="border-b bg-neutral-50 font-medium dark:border-neutral-500 dark:text-neutral-800">
                                  <tr>
                                    <th scope="col" class=" px-6 py-4">No</th>
                                    <th scope="col" class=" px-6 py-4">Order id</th>
                                    <th scope="col" class=" px-6 py-4">Fullname</th>
                                    <th scope="col" class=" px-6 py-4">Email</th>
                                    <th scope="col" class=" px-6 py-4">Phone</th>
                                    <th scope="col" class=" px-6 py-4">Event Name</th>
                                    <th scope="col" class=" px-6 py-4">Ticket Type</th>
                                    <th scope="col" class=" px-6 py-4">Amount</th>
                                    <th scope="col" class=" px-6 py-4">Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $no => $order)
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $no + 1 }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $order->order_id }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $order->name }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $order->email }}</td>
                                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $order->telp }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $order->event_name }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $order->ticket_type }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $order->amount }}</td>

                                            @if($order->status == 0)
                                                <td class="whitespace-nowrap px-6 py-4">
                                                    <span class="inline-flex items-center m-2 px-3 py-1 bg-green-200 hover:bg-green-300 rounded-full text-sm font-semibold text-green-600">
                                                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"/></svg>
                                                        <span class="ml-1">
                                                          Check In
                                                        </span>
                                                      </span>
                                                </td>
                                            @else
                                                <td class="whitespace-nowrap px-6 py-4">
                                                    <span class="inline-flex items-center m-2 px-3 py-1 bg-red-200 hover:bg-red-300 rounded-full text-sm font-semibold text-red-600">
                                                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"/></svg>
                                                        <span class="ml-1">
                                                            Check Out
                                                        </span>
                                                    </span>
                                                </td>
                                            @endif
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
