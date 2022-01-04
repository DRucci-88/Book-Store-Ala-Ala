@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <form class="d-flex justify-content-between mb-3">
                    <input type="text" class="form-control me-3" name="search">
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
                                <i class="bi-info"></i>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-primary-circle-fill" viewBox="0 0 16 16">
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                </svg>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-primary-circle-fill" viewBox="0 0 16 16">
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                </svg>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-primary-circle-fill" viewBox="0 0 16 16">
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                </svg>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-primary-circle-fill" viewBox="0 0 16 16">
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                </svg>
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