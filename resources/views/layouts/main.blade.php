<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/css.css?load_time='.date('Y-m-d H:i:s')) }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>D&R Perfume</title>
</head>
<body>
    <header id="main-header">
        <div class="container">
            <div class="row">
                <!-- Kolom Kiri: Search -->
                <div class="col-md-4">
                    <form action="{{ url('/search') }}" method="GET">
                        <input type="text" name="query" placeholder="Search products...">
                        <button type="submit">Search</button>
                    </form>
                </div>

                <!-- Kolom Tengah: Logo dan Menu -->
                <div class="col-md-4">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('/images/logo/logo-3bg.png') }}" alt="Logo">
                        </a>
                    </div>
                    <div>
                        <a href="{{ url('/about') }}">About</a>
                        <a href="{{ url('/man') }}">Man</a>
                        <a href="{{ url('/woman') }}">Woman</a>
                    </div>
                </div>

                <!-- Kolom Kanan: Navigasi -->
                <div class="col-md-4">
                    <a href="{{ url('/cart') }}">Cart</a>
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/location') }}">Store Location</a>
                    <a href="{{ url('/contact') }}">Contact Us</a>
                </div>
            </div>
        </div>
    </header>


    <main>
        @yield('container')
    </main>
    
    <footer class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <h5>Customer Service</h5>
                    <p>Monday to Saturday 9am - 10pm EST</p>
                    <p>+62 8123-4567-8911</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5>Newsletter</h5>
                    <p>Receive our newsletter and discover our stories, collections, and surprises.</p>
                    <form action="#" method="post">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Enter your email" required>
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form> 
                </div>
                <div class="col-lg-4 col-md-12">
                    <h5>Follow Us</h5>
                    <div class="d-flex gap-3">
                        <a href="#" class="icon-link"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="icon-link"><i class="fa fa-youtube"></i></a>
                        <a href="#" class="icon-link"><i class="fa fa-envelope"></i></a>
                        <a href="#" class="icon-link"><i class="fa fa-facebook-f"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script> 
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    @if (isset($javascript_file))
    <script src="{{ asset('js/' . $javascript_file) }}"></script>
    @endif

</body>
</html>