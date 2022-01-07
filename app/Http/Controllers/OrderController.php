<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // View Cart
    public function index()
    {
        return view('order.cart');
    }

    // View Transaction History
    public function create()
    {
        return view('order.history', [
            'receipts' => Receipt::all()
        ]);
    }

    // View Transaction History Detail
    public function show(Receipt $receipt)
    {
        // Can't get transactions from receipt
        $transactions = $receipt->transactions();
        $i = 0;
        foreach ($transactions as $t) {
            $i++;
        }
        dd($i);
        return view('order.history_detail', [
            'transactions' => $receipt->transactions()
        ]);
    }
}
