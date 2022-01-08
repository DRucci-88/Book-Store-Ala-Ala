<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Receipt;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // View Cart
    public function index(Request $request)
    {
        return view('order.cart', [
            'items' => $request->session()->get('items')
        ]);
    }

    // Handle add & update/edit cart item
    public function update(Request $request, Book $book)
    {
        $quantity = $request->get('quantity');

        $book->quantity = $quantity;
        $book->subtotal = $book->price * $quantity;

        $items = $request->session()->get('items');
        if (!$items) $items = [];

        array_push($items, $book);
        $request->session()->put('items', $items);
        return redirect('/cart')->with('successMessage', 'Cart successfully updated.');
    }

    // Handle delete/remove cart item
    public function destroy(Request $request, Book $book)
    {
        $items = $request->session()->get('items');
        $i = 0;
        foreach ($items as $item) {
            if ($item->id === $book->id) {
                unset($items[$i]);
                $items = array_values($items);
            }
            $i++;
        }
        $request->session()->put('items', $items);
        return redirect('/cart')->with('successMessage', 'Cart successfully updated.');
    }

    // Checkout cart to complete transaction
    public function store(Request $request)
    {
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
