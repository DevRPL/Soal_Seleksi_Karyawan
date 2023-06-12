<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        return view('order_ticket');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'fullname'     => 'required',
            'email'     => 'required|email',
            'telp'   => 'required|min:10',
            'address'     => 'required',
            'event_name'     => 'required',
            'ticket_type'     => 'required',
            'amount'     => 'required'
        ]);

       $query = DB::table('orders')->insert([
            'order_id' => time(),
            'name' => $request->fullname,
            'email' => $request->email,
            'telp' => $request->telp,
            'address' => $request->address,
            'event_name' => $request->event_name,
            'ticket_type' => $request->ticket_type,
            'amount' => $request->amount,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('order.show', DB::getPdo()->lastInsertId());
    }

    public function show($id)
    {
        $order = DB::table('orders')->find($id);

        return view('print', compact('order'));
    }

    public function getAllOrder()
    {
        $orders = DB::table('orders')->get();

        return view('order_list', compact('orders'));
    }

    public function checkOrder()
    {
        return view('check_order_list');
    }


    public function checkDataOrder(Request $request)
    {

        $orders = DB::table('orders')
            ->where('order_id', $request->order_id)->get();

        return view('check_data_order_list', compact('orders'));
    }
}
