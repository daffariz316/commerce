<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu Bu' E Cookies and Bakery </title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- Font Awesome CDN link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <link rel="stylesheet" href="{{ asset('asset/css/dashboard-u/style.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/css/dashboard-u/product.css') }}">

</head>
<body>

  <!-- Header Section Start -->
  <header>
    <a href="#" class="logo"><i class="fas-fa-untensils"></i>Bu'e Cookies and Pastry</a>
    <nav class="navbar">
        <a class="" href="{{url('/home')}}">home</a>
        <a class="active"  href="{{url('/menu')}}">Product</a>
      <a href="{{url('/home')}}">About</a>
      <a href="{{url('/home')}}">Contact Us</a>
      <a href="{{url('/home')}}">Testimoni</a>
    </nav>

    <div class="icons">
      <i class="fas fa-bars" id="menu-bars"></i>
      <i class="fas fa-search" id="search-icon"></i>
      <a href="#" class="fab fa-whatsapp"></a>
      <!-- Tampilkan jumlah total item di keranjang -->
        <a href="#" class="fas fa-shopping-cart"></a>
      <a href="{{ route('user.profile') }}" class="fas fa-user"></a>
    </div>

  </header>
<!-- Header Section End -->

<!-- Search Form Start -->
<form action="" id="search-form">
  <input type="search" placeholder="search..." name="" id="search-box">
  <label for="search-box" class="fas fa-search"></label>
  <i class="fas fa-times" id="close"></i>
</form>
<!-- Search Form End -->


<section class="product" id="product">
  <div class="container">
    <h2 class="section__title">Product</h2>

    <p class="category__links">
      <a href="product.html" class="activated">All</a>
    </p>

    <div class="box-container">

        @foreach($products as $product)
        <div class="box">
            <a href="" class="fas fa-eye" data-product-id="{{ $product->id }}"></a>
            <img src="{{"/images". asset($product->image) }}" alt="{{ $product->name_product }}">
            <h3>{{ $product->name_product }}</h3>
            <span>IDR {{ number_format($product->price, 2) }}</span>
            <form action="{{ route('cart.add') }}" method="POST" class="add-to-cart-form">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="quantity">
                    <label for="quantity{{ $product->id }}">Quantity:</label>
                    <input type="number" id="quantity{{ $product->id }}" name="quantity" value="1" min="1">
                </div>
                <button type="submit" class="btn">Add to Cart</button>
            </form>
        </div>
    @endforeach
    </div>
</div>

</section>


<!-- Dishes Section End -->

<!-- Footer Section Start -->
<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>locations</h3>
            <a href="#">Indonesia</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#dishes">Menu</a>
            <a href="#about">About</a>
            <a href="#contact">Contact Us</a>
            <a href="#review">Testimoni</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="https://wa.me/+62895372499072">Whatsapp</a>
            <a href="mailto: buepastry@gmail.com">Email</a>
            <a href="#">Bekasi, Indonesia - 17121</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.instagram.com/bukeprasto?igsh=eHpkMWM3MGpzampi">instagram</a>
        </div>

    </div>

    <div class="credit"> copyright @ 2024 by <span>Nova Nexus</span> </div>

</section>
  <!-- Custom JS File Link -->
  <script src="{{ asset('asset/js/home/script.js') }}"></script>

</body>
</html>
