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
                        @if ($items)
                            @foreach ($items as $item)
                                <?php $grandtotal += (int)$item->subtotal; ?>
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->author }}</td>
                                    <td>IDR {{ $item->price }}</td>
                                    <td>{{ $item->quantity }} book<?= $item->quantity > 1 ? 's' : '' ?></td>
                                    <td>IDR {{ $item->subtotal }}</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <a href="/book/{{ $item->id }}" class="btn btn-secondary">View Book Detail</a>
                                            <a href="/book/{{ $item->id }}" class="btn btn-primary">Edit</a>
                                            <form action="/cart/r/{{ $item->id }}" method="POST" class="d-inline-block">
                                                @csrf
                                                <button class="btn btn-danger" type="submit">Remove</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                <h6 class="mb-3">Grand Total: IDR <?= $grandtotal; ?></h6>
                @if ($items)
                    <form action="/checkout" method="POST">
                        @csrf
                        <button class="btn btn-primary" type="submit">Checkout</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
