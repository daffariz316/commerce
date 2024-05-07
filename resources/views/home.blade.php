<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bu' E Cookies and Pastry</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('asset/css/dashboard-u/style.css') }}">

</head>
<body>

<!-- header section starts      -->

<header>

    <a href="#" class="logo">Bu'E Cookies and Bakery.</a>

    <nav class="navbar">
        <a class="active" href="{{url('/home')}}">home</a>
        <a href="{{url('/menu')}}">Product</a>
        <a href="#about">About</a>
        <a href="#contact">Contact Us</a>
        <a href="#review">Testimoni</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fab fa-whatsapp"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="{{ route('user.profile') }}" class="fas fa-user"></a>
    </div>

</header>

<!-- header section ends-->

<!-- search form  -->

<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Our Special cookies</span>
                    <h3>Cookies</h3>
                    <p>Temukan beragam varian kue kering lezat dengan hanya beberapa kali klik, dan nikmati kemudahan belanja tanpa harus keluar rumah!</p>
                    <a href="https://wa.me/+62895372499072" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="{{ asset('asset/images/Cookies2.png') }}" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Our Special menu</span>
                    <h3>Bolen</h3>
                    <p>Bolen di kami sangat lembut dan renyah ketika di makan </p>
                    <a href="#" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="{{ asset('images/1714732579.jpg') }}" alt="Bolen">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Our Special menu</span>
                    <h3>Bluder</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?</p>
                    <a href="#" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="{{ asset('images/1714740492.jpg') }}" alt="Bluder">
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- home section ends -->

<!-- dishes section starts  -->

<section class="dishes" id="dishes">

    <h3 class="sub-heading">our specials</h3>
    <h1 class="heading">popular</h1>

    <div class="box-container">

        @foreach($products->take(5) as $product)
        <div class="box">
            <!-- <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a> -->
            <img src="{{ '/images' . asset($product->image) }}" alt="{{ $product->name_product }}">
            <h3>{{ $product->name_product }}</h3>
            <span>IDR {{ number_format($product->price, 2) }}</span>
            <a href="#" class="btn">order now</a>
        </div>
        @endforeach
    </div>

</section>

<!-- dishes section ends -->

<!-- about section starts  -->

<section class="about" id="about">
    <h3 class="sub-heading">about us</h3>
    <h1 class="heading">why choose us?</h1>

    <div class="row">
        <div class="image">
            <img src="{{ asset('asset/images/Logo.png') }}" alt="Bluder">
        </div>
        <div class="content">
            <h3>best Cookies in the city</h3>
            <p>Produk kami sangatlah terjangkau dengan untuk setiap kue kering dan berkesan disetiap gigitan </p>
            <p>Dibuat oleh tangan dan dibikin sepenuh hati dalam membuat kue kering </p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>free delivery</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>easy payments</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 service</span>
                </div>
            </div>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- Contact Us Start -->

<section class="contact" id="contact">
    <div class="container">
      <h3 class="custom-heading">Contact <span>Us</span></h3>
      <div class="content">
        <div class="formbox">
          <form id="contact-form">
            <div class="form-group">
              <input name="name" type="text" class="short" placeholder="Name" required>
            </div>
            <div class="form-group">
              <input name="email" type="email" class="short" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input name="subject" type="text" class="feedback-input" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea name="message" class="feedback-input" placeholder="Message" required></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="SEND" class="btn">
            </div>
          </form>
        </div>
        <div class="map">
          <!-- Embed your map code here -->
          <iframe src="https://www.google.com/maps/embed?pb=!3m2!1sid!2sid!4v1714652057759!5m2!1sid!2sid!6m8!1m7!1sEHGkDWE6z8LnwQd4-t05oA!2m2!1d-6.220444113367562!2d107.0251774979522!3f232.85213526109195!4f-5.929668269401461!5f0.7820865974627469" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" title="Google Maps"></iframe>
        </div>
      </div>
    </div>
  </section>

<!-- Contact Us End -->


<!-- review section starts  -->

<section class="review" id="review">

    <h3 class="sub-heading">customer's review</h3>
    <h1 class="heading">what they say</h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="{{ asset('asset/images/Ellipse 1.png') }}" alt="">
                    <div class="user-info">
                        <h3>Daffarizqy</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p>saya tidak menyesal beli kue disini dan sangatlah memuaskan. dengan harga yang segitu saya mendapatkan rasa yang sangatlah enak</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="{{ asset('asset/images/Ellipse 1.png') }}" alt="">
                    <div class="user-info">
                        <h3>Putri Ibu</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="{{ asset('asset/images/Ellipse 1.png') }}" alt="">
                    <div class="user-info">
                        <h3>Putri Ibu</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="{{ asset('asset/images/Ellipse 1.png') }}" alt="">
                    <div class="user-info">
                        <h3>Putri Ibu</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit fugiat consequuntur repellendus aperiam deserunt nihil, corporis fugit voluptatibus voluptate totam neque illo placeat eius quis laborum aspernatur quibusdam. Ipsum, magni.</p>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- footer section starts  -->

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

<!-- footer section ends -->

<!-- loader part  -->
<div class="loader-container">
    <img src="{{ asset('asset/images/loader.gif') }}" alt="">
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="{{ asset('asset/js/home/script.js') }}"></script>
<script src="{{ asset('asset/js/map.js') }}"></script>
</body>
</html>
