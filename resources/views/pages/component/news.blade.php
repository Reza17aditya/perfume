@extends('layout.main')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-8 text-center">
            <h1>Join the D&R Fragrance Club</h1>
            <p>Be the first to discover our latest perfume collections, exclusive promotions, and personalized offers.</p>

            <form action="{{ route('newsletter.subscribe') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Enter your email address" required>
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                </div>
            </form>

            <p class="small text-muted mt-2">By subscribing, you agree to receive promotional emails from D&R. You can unsubscribe at any time.</p>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-10 text-center">
            <h2>✨ Special Offer for Subscribers</h2>
            <p>Get <strong>10% OFF</strong> your first order when you subscribe today.</p>
            <img src="{{ asset('images/promo/dnr-promo.jpg') }}" alt="D&R Perfume Promo" class="img-fluid">
        </div>
    </div>
</div>
@endsection
