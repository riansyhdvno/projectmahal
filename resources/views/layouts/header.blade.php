<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SigmaGem Consign</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Upload Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Penjualan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Pembelian</a>
                    </li>



                </ul>
                <ul class="navbar-nav">
                    {{-- <form class="d-flex" role="search" action="/mahasiswa" method="get">
                        <input class="form-control me-2"  name="search" type="search" placeholder="Search" aria-label="Search" value="{{ request('search') }}">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> --}}

                    <form class="d-flex" role="search" action="" method="get">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search" value="{{ request('search') }}">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>

                    <li class="nav-item" style="margin-right: 2px;">
                        <form action="/login" method="get">
                            @csrf
                            <button class="nav-link btn btn-link custom-button" type="submit">Login</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <form action="/register" method="get">
                            @csrf
                            <button class="nav-link btn btn-link custom-button" type="submit">Register</button>
                        </form>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>