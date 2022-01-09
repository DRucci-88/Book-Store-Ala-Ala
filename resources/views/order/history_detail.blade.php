@extends('layouts.main')

@section('content')
    <div class="container my-5 flex-fill">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <?php $grandtotal = 0; ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Book Name</th>
                            <th scope="col">Book Author</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Sub Total</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($transactions)
                            @foreach ($transactions as $transaction)
                                <?php 
                                    $subtotal = $transaction->price * $transaction->quantity;
                                    $grandtotal += (int)$subtotal; 
                                ?>
                                <tr>
                                    <td>{{ $transaction->book->name }}</td>
                                    <td>{{ $transaction->book->author }}</td>
                                    <td>IDR {{ $transaction->price }}</td>
                                    <td>{{ $transaction->quantity }} book<?= $transaction->quantity > 1 ? 's' : '' ?></td>
                                    <td>IDR <?= $subtotal; ?></td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <a class="btn btn-secondary" href="/book/{{ $transaction->book->id }}">View Book Detail</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                <h6 class="mb-3">Grand Total: IDR <?= $grandtotal; ?></h6>
            </div>
        </div>
    </div>
@endsection
