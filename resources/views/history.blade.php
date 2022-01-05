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
                    <tr>
                        <td>123efgh</td>
                        <td>Tue, January 4, 2022 2:55 PM</td>
                        <td>
                            <div class="d-grid gap-2 d-md-block">
                                <a class="btn btn-secondary" href="/history/detail">View Transaction Detail</a>

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>123efgh</td>
                        <td>Tue, January 4, 2022 2:55 PM</td>
                        <td>
                            <div class="d-grid gap-2 d-md-block">
                                <a class="btn btn-secondary" href="/history/detail">View Transaction Detail</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
