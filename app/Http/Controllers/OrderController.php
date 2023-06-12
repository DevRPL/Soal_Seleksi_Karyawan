<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('order_ticket');
    }

    public function store(Request $request)
    {
        dd("data");
    }

    public function show($id)
    {

    }
}
