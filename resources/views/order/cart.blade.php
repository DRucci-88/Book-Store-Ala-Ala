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
                        <tr>
                            <td>The Deprecated</td>
                            <td>Nehemia</td>
                            <td>IDR 99900</td>
                            <td>1 book</td>
                            <td>IDR 99900</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <a href="#" class="btn btn-secondary">View Book Detail</a>
                                    <a href="#" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger">Remove</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Flipboard</td>
                            <td>G.S. Putra</td>
                            <td>IDR 100000</td>
                            <td>2 books</td>
                            <td>IDR 200000</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <a href="#" class="btn btn-secondary">View Book Detail</a>
                                    <a href="#" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger">Remove</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <h6 class="mb-3">Grand Total: IDR <?= $grandtotal; ?></h6>
                <a href="/checkout" class="btn btn-primary">Checkout</a>
            </div>
        </div>
    </div>
@endsection
