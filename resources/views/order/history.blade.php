@extends('layouts.main')

@section('content')
    <div class="container my-5 flex-fill">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Transaction ID</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($receipts as $receipt)
                            <tr>
                                <td>{{ $receipt->id }}</td>
                                <td><?= date_format(date_create($receipt->date), "D, M d, Y g:i A"); ?></td>
                                <td>
                                    <div class="d-grid gap-2 d-md-block">
                                        <a class="btn btn-secondary" href="/history/{{ $receipt->id }}">View Transaction Detail</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
