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

    public function edit($id)
    {
        $order = DB::table('orders')->find($id);

        return view('edit', compact('order'));
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

       DB::table('orders')->insert([
            'order_id' => time(),
            'name' => $request->fullname,
            'email' => $request->email,
            'telp' => $request->telp,
            'address' => $request->address,
            'event_name' => $request->event_name,
            'ticket_type' => $request->ticket_type,
            'amount' => $request->amount,
            'created_at' => Carbon::now(),
            'status' => 0
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

    public function update(Request $request, $id)
    {
       DB::table('orders')->where('id', '=', $id)->update([
            'name' => $request->fullname,
            'email' => $request->email,
            'telp' => $request->telp,
            'address' => $request->address,
            'event_name' => $request->event_name,
            'ticket_type' => $request->ticket_type,
            'amount' => $request->amount,
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->route('order.getAllOrder');

    }

    public function checkDataOrder(Request $request)
    {

        $orders = DB::table('orders')
            ->where('order_id', $request->order_id)
            ->get();

        if (count($orders) > 0 && $orders[0]->status == 0) {
            DB::table('orders')
                ->where('order_id', $request->order_id)
                ->update([
                    'status' => 1
                ]);
            $orders = DB::table('orders')
                ->where('order_id', $request->order_id)
                ->where('status', '=', 1)
                ->get();

            return view('check_data_order_list', compact('orders'));
        } else {
            $orders = DB::table('orders')
            ->where('order_id', $request->order_id)
            ->where('status', '=', 0)
            ->get();
            return view('check_data_order_list', compact('orders'));
        }
    }

    public function reportOrder()
    {
        $orders = DB::table('orders')->get();

        return view('report', compact('orders'));
    }



    public function destroy($id)
    {
        DB::table('orders')->where('id', '=', $id)->delete();

        return redirect()->back();
    }
}
