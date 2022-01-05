@extends('layouts.main')

@section('content')
    <div class="container my-5 flex-fill">
        <div class="row justify-content-center">
            <div class="col-md-11">
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
                    <tr>
                        <td>The Fault in Our Stars</td>
                        <td>Josh Green</td>
                        <td>IDR 58800</td>
                        <td>1 book</td>
                        <td>IDR 58800</td>
                        <td>
                            <div class="d-grid gap-2 d-md-block">
                                <a class="btn btn-secondary" href="">View book Detail</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Lord of the Flies</td>
                        <td>William Golding</td>
                        <td>IDR 175300</td>
                        <td>1 book</td>
                        <td>IDR 175300</td>
                        <td>
                            <div class="d-grid gap-2 d-md-block">
                                <a class="btn btn-secondary" href="">View book Detail</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Harry Potter series</td>
                        <td>J.K. Rowling</td>
                        <td>IDR 73700</td>
                        <td>2 book</td>
                        <td>IDR 147400</td>
                        <td>
                            <div class="d-grid gap-2 d-md-block">
                                <a class="btn btn-secondary" href="">View book Detail</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p>Grand Total: IDR 381500</p>
            </div>
        </div>
    </div>
@endsection
