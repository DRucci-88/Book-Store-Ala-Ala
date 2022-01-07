@extends('layouts.main')

@section('content')
    {{ auth()->user() }}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <form action="/" class="d-flex justify-content-between mb-3">
                    <label>
                        <input type="text" class="form-control me-3" name="search">
                    </label>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
                <button onclick="clearFilter()" class="btn btn-primary">Clear Filter</button>

                <div class="d-flex justify-content-between mt-3">
                    <div class="card col-md-2">
                        <div class="card-body">
                            <img src="..." class="card-img-top" alt="Book title">
                            <h5 class="card-title fw-bold" style="min-height: 3rem;">Book title</h5>
                            <p class="card-text mb-0">By: Author Name</p>
                            <p class="card-text mb-0">IDR 123456</p>
                            <a href="#" class="btn btn-primary">
                                <i class="bi-info-circle-fill"></i>
                                View details
                            </a>
                        </div>
                    </div>
                    <div class="card col-md-2">
                        <div class="card-body">
                            <img src="..." class="card-img-top" alt="Book title">
                            <h5 class="card-title fw-bold" style="min-height: 3rem;">Book title</h5>
                            <p class="card-text mb-0">By: Author Name</p>
                            <p class="card-text mb-0">IDR 123456</p>
                            <a href="#" class="btn btn-primary">
                                <i class="bi-info-circle-fill"></i>
                                View details
                            </a>
                        </div>
                    </div>
                    <div class="card col-md-2">
                        <div class="card-body">
                            <img src="..." class="card-img-top" alt="Book title">
                            <h5 class="card-title fw-bold" style="min-height: 3rem;">Book title</h5>
                            <p class="card-text mb-0">By: Author Name</p>
                            <p class="card-text mb-0">IDR 123456</p>
                            <a href="#" class="btn btn-primary">
                                <i class="bi-info-circle-fill"></i>
                                View details
                            </a>
                        </div>
                    </div>
                    <div class="card col-md-2">
                        <div class="card-body">
                            <img src="..." class="card-img-top" alt="Book title">
                            <h5 class="card-title fw-bold" style="min-height: 3rem;">Book title</h5>
                            <p class="card-text mb-0">By: Author Name</p>
                            <p class="card-text mb-0">IDR 123456</p>
                            <a href="#" class="btn btn-primary">
                                <i class="bi-info-circle-fill"></i>
                                View details
                            </a>
                        </div>
                    </div>
                    <div class="card col-md-2">
                        <div class="card-body">
                            <img src="..." class="card-img-top" alt="Book title">
                            <h5 class="card-title fw-bold" style="min-height: 3rem;">Book title</h5>
                            <p class="card-text mb-0">By: Author Name</p>
                            <p class="card-text mb-0">IDR 123456</p>
                            <a href="#" class="btn btn-primary">
                                <i class="bi-info-circle-fill"></i>
                                View details
                            </a>
                        </div>
                    </div>
                </div>

                <nav>
                    <ul class="pagination justify-content-center mt-3">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection