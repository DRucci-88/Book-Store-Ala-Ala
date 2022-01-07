<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Book Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <!-- admin Navbar -->
            <ul class="navbar-nav ms-auto">
                <div class="btn-group">
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownManage" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Manage
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownManage">
                            <li><a class="dropdown-item" href="/book">Book</a></li>
                            <li><a class="dropdown-item" href="/genre">Genre</a></li>
                            <li><a class="dropdown-item" href="/user">User</a></li>
                        </ul>
                    </li>
                </div>
                <div class="btn-group">
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownAccount" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hello, Admin
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownAccount">
                            <li><a class="dropdown-item" href="/profile">Profile</a></li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Log out</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </div>
            </ul>

            <!-- Member Navbar -->
            <ul class="navbar-nav ms-auto">
                <div class="btn-group">
                    <li class="nav-item">
                        <a class="nav-link active" href="/cart">View Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/history">View Transaction History</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownAccount" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hello, Member
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownAccount">
                            <li><a class="dropdown-item" href="/profile">Profile</a></li>
                            <li><a class="dropdown-item" href="/logout">Log out</a></li>
                        </ul>
                    </li>
                </div>
            </ul>
            
            <!-- Guest Navbar -->
            <ul class="navbar-nav ms-auto">
                <div class="btn-group">
                    <li class="nav-item">
                        <a class="nav-link active" href="/register">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/login">Login</a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>
