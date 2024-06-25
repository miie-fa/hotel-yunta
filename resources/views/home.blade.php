<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Citra Megah - Home</title>
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/ananda-black-personal-use" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.cdnfonts.com/css/ananda-black-personal-use');
        @import url('https://fonts.cdnfonts.com/css/poppins');
        .footer {
            background-color: #162034;
            color: white;
            padding: 40px 0;
        }
        .footer a {
            color: #17A2B8;
        }

        .list-unstyled li{
            font-family: 'Poppins', sans-serif;
            color: #C7D2E8;
        }

        .list-unstyled li a{
            font-family: 'Poppins', sans-serif;
            color: #C7D2E8;
            text-decoration: none;
        }

      .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #0a3d62;
        }

    </style>
</head>
<body>

{{-- Navbar --}}
<nav class="navbar navbar-expand-lg" style="height: 100px; background-color: #ffffff;">
    <div class="container">
        <a class="navbar-brand" href="#" style="font-family: 'Ananda Black Personal Use', sans-serif; font-size: 28px;">Hotel Citra Megah</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav ms-auto" style="font-family: 'Poppins', sans-serif;">
                <li class="nav-item me-4">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="#">Rooms</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <a href="/signin" class="ms-auto me-3">
                <button style="background-color: #162034; color: #ffffff; border-radius: 18px; width: 153px; height: 44px;">
                    Sign In / Sign Up
                </button>
            </a>
        </div>
    </div>
</nav>

{{-- Header --}}
<header class="py-5 bg-dark" style="background-image: linear-gradient(to top, rgba(0, 0, 0, 0.5), transparent), url('{{ asset('img/kamarhotel.jfif') }}'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 545px; margin-bottom: 100px;">
    <div class="container">
        <h1 class="display-5 col-md-6 pt-3" style="color: #ffffff; font-family: 'Poppins', sans-serif;"><span style="font-family: 'Ananda Black Personal Use', sans-serif;">Hotel Citra Megah</span> Nikmati Pengalaman Menginap yang Luar Biasa</h1>
        <p class="lead text-dark-custom col-md-6" style="color: #ffffff; font-family: 'Poppins', sans-serif;">Jadikan Liburan Anda Luar Biasa di Hotel Citra Megah. Dapatkan Kenyamanan dan Pelayanan Terbaik!</p>
    </div>
    <div class="container my-5 pt-5">
      <div class="card mx-auto" style="border-radius: 24px; font-family: 'Poppins', sans-serif; background-color: #1D7C82; width: 1120px; height: 180px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);">
          <div class="card-body">
              <h2 class="text-white d-flex align-items-start ms-3 mt-2" style="font-size: 20px;">Booking Sekarang!</h2>
              <form class="row g-3 mt-2 mb-3">
                  <div class="col ms-3">
                      <label for="roomType" class="form-label text-white">Pilih Kamar</label>
                      <select id="roomType" class="form-select" style="width: 249px; height: 49px;">
                          <option selected>Pilih Kamar</option>
                          <option>Standard Room</option>
                          <option>Superior Room</option>
                          <option>Twin Room</option>
                      </select>
                  </div>
                  <div class="col">
                      <label for="checkIn" class="form-label text-white">Check In</label>
                      <input type="date" class="form-control" id="checkIn" style="width: 170; height: 49px;">
                  </div>
                  <div class="col">
                      <label for="checkOut" class="form-label text-white">Check Out</label>
                      <input type="date" class="form-control" id="checkOut" style="width: 170; height: 49px;">
                  </div>
                  <div class="col">
                      <label for="promoCode" class="form-label text-white">Kode Promo</label>
                      <input type="text" class="form-control" id="promoCode" style="width: 170; height: 49px;">
                  </div>
                  <div class="col d-flex align-items-end">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#signInModal" style="background-color: #162034; width: 170px; height: 49px; border-radius: 18px;">
                      <button type="submit" style="background-color: #162034; width: 170px; height: 49px; border-radius: 18px; border: none; color: #ffffff; ">BOOKING</button>
                    </a>
                  </div>
              </form>
          </div>
      </div>
  </div>
</header>

{{-- Rekomendasi --}}
<section class="py-5">
    <div class="container" style="font-family: 'Poppins', sans-serif;">
        <h2 class="text-primary-custom mb-2 mt-6" style="color: #162034; font-size: 28px; font-family: 'Ananda Black Personal Use', sans-serif;">Rekomendasi</h2>
            <div class="col-md-6 mb-4">
                <p style="font-size: 16px; font-family: 'Poppins', sans-serif;">Dibawah ini adalah kamar kamar yang kami rekomendasikan untuk anda dan pastinya memiliki kualitas terbaik</p>
            </div>
        <div id="carouselRekomendasi" class="carousel slide" data-bs-ride="carousel">
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselRekomendasi" data-bs-slide="prev" style="left: -80px;">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="color: #162034"></span>
                <span class="visually-hidden" style="color: #162034">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselRekomendasi" data-bs-slide="next" style="right: -80px;">
                <span class="carousel-control-next-icon" aria-hidden="true" style="color: #162034"></span>
                <span class="visually-hidden" style="color: #162034">Next</span>
            </button>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                    <div class="row">
                        <div class="col mb-3" style="border-radius: 18px;">
                            <div class="card" style="width: 295px; height: 216px; position: relative; border-radius: 18px;">
                                <div style="position: absolute; width: 100%; height: 100%; background: linear-gradient(to top, rgba(0, 0, 0, 0.5), transparent); border-radius: 18px;"></div>
                                <img src="{{ asset('img/standard.jfif') }}" class="card-img-top" alt="Standard Room" style="height: 100%; object-fit: cover; border-radius: 18px;">
                                <h5 class="position-absolute bottom-0 w-100 text-center text-white m-0 p-2" style="font-size: 20px; font-family: 'Poppins', sans-serif;">Standard Room</h5>
                            </div>
                        </div>
                        <div class="col mb-3" style="border-radius: 18px;">
                            <div class="card" style="width: 295px; height: 216px; position: relative; border-radius: 18px;">
                                <div style="position: absolute; width: 100%; height: 100%; background: linear-gradient(to top, rgba(0, 0, 0, 0.5), transparent); border-radius: 18px;"></div>
                                <img src="{{ asset('img/superior.jfif') }}" class="card-img-top" alt="Superior Room" style="height: 100%; object-fit: cover; border-radius: 18px;">
                                <h5 class="position-absolute bottom-0 w-100 text-center text-white m-0 p-2" style="font-size: 20px; font-family: 'Poppins', sans-serif;">Superior Room</h5>
                            </div>
                        </div>
                        <div class="col mb-3" style="border-radius: 18px;">
                            <div class="card" style="width: 295px; height: 216px; position: relative; border-radius: 18px;">
                                <div style="position: absolute; width: 100%; height: 100%; background: linear-gradient(to top, rgba(0, 0, 0, 0.5), transparent); border-radius: 18px;"></div>
                                <img src="{{ asset('img/deluxe.jfif') }}" class="card-img-top" alt="Twin Room" style="height: 100%; object-fit: cover; border-radius: 18px;">
                                <h5 class="position-absolute bottom-0 w-100 text-center text-white m-0 p-2" style="font-size: 20px; font-family: 'Poppins', sans-serif;">Twin Room</h5>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                    <div class="row">
                        <div class="col mb-3" style="border-radius: 18px;">
                            <div class="card" style="width: 295px; height: 216px; position: relative; border-radius: 18px;">
                                <div style="position: absolute; width: 100%; height: 100%; background: linear-gradient(to top, rgba(0, 0, 0, 0.5), transparent); border-radius: 18px;"></div>
                                <img src="{{ asset('img/kamarhotel.jfif') }}" class="card-img-top" alt="Deluxe Room" style="height: 100%; object-fit: cover; border-radius: 18px;">
                                <h5 class="position-absolute bottom-0 w-100 text-center text-white m-0 p-2" style="font-size: 20px; font-family: 'Poppins', sans-serif;">Deluxe Room</h5>
                            </div>
                        </div>
                        <div class="col mb-3" style="border-radius: 18px;">
                            <div class="card" style="width: 295px; height: 216px; position: relative; border-radius: 18px;">
                                <div style="position: absolute; width: 100%; height: 100%; background: linear-gradient(to top, rgba(0, 0, 0, 0.5), transparent); border-radius: 18px;"></div>
                                <img src="{{ asset('img/suiteroom.jpg') }}" class="card-img-top" alt="Suite Room" style="height: 100%; object-fit: cover; border-radius: 18px;">
                                <h5 class="position-absolute bottom-0 w-100 text-center text-white m-0 p-2" style="font-size: 20px; font-family: 'Poppins', sans-serif;">Suite Room</h5>
                            </div>
                        </div>
                        <div class="col mb-3" style="border-radius: 18px;">
                            <div class="card" style="width: 295px; height: 216px; position: relative; border-radius: 18px;">
                                <div style="position: absolute; width: 100%; height: 100%; background: linear-gradient(to top, rgba(0, 0, 0, 0.5), transparent); border-radius: 18px;"></div>
                                <img src="{{ asset('img/familyroom.jpg') }}" class="card-img-top" alt="Family Room" style="height: 100%; object-fit: cover; border-radius: 18px;">
                                <h5 class="position-absolute bottom-0 w-100 text-center text-white m-0 p-2" style="font-size: 20px; font-family: 'Poppins', sans-serif;">Family Room</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

{{-- About --}}
<section class="py-5">
    <div class="container" style="font-family: 'Poppins', sans-serif; padding-bottom: 100px;">
        <div class="row align-items-center">
            <div class="col-md-4 position-relative">
                <img src="{{ asset('img/hotel.jpg') }}" class="img-fluid" alt="Hotel Image" style="width: 404px; height: 404px; object-fit: cover; border-radius: 20px;">
                <img src="{{ asset('img/familyroom.jpg') }}" class="img-fluid position-absolute" alt="Second Image" style="width: 200px; height: 200px; bottom: -20px; right: 0; object-fit: cover;  border-radius: 20px; ">
            </div>
            <div class="col" style="padding-left: 80px;">
                <h5 class="text-primary-custom mb-2" style="font-size: 20px; font-family: 'Ananda Black Personal Use', sans-serif;">About Us</h5>
                <h2 class="mb-3" style="color: #162034; font-size: 32px;">Selamat Datang di Hotel Citra Megah</h2>
                <p class="text-dark-custom pb-3" style="text-align: justify;">Kami adalah hotel mewah dengan layanan yang tak tertandingi dan keramahan yang hangat. Dengan lokasi strategis di pusat kota, kami menawarkan pengalaman menginap yang tak terlupakan bagi para tamu kami. Staf kami yang profesional dan berpengalaman siap membantu Anda menjalani setiap kunjungan Anda menjadi istimewa.</p>
                <div class="row mt-4">
                    <div class="col-md-3 mb-3 text-center">
                        <i class="fas fa-utensils fa-2x text-primary-custom mb-2"></i>
                        <h5 class="text-dark-custom mt-2">Restaurant</h5>
                    </div>
                    <div class="col-md-3 mb-3 text-center">
                        <i class="fas fa-dumbbell fa-2x text-primary-custom mb-2"></i>
                        <h5 class="text-dark-custom mt-2">GYM</h5>
                    </div>
                    <div class="col-md-3 mb-3 text-center">
                        <i class="fas fa-calendar-alt fa-2x text-primary-custom mb-2"></i>
                        <h5 class="text-dark-custom mt-2">Event</h5>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="#">
                        <button style="background-color: #162034; width: 127px; height: 44px; color: #ffffff; border: none; font-size: 16px;">
                        Read More
                    </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Why Us --}}
<section class="py-5" style="background-image: url('{{ asset('img/hotelluar.png') }}'); background-size: cover; background-repeat: no-repeat; height: 533px;">
        <div class="container" style="font-family: 'Poppins', sans-serif;">
            <h5 class="text-center text-primary-custom mb-2" style="font-size: 20px; color: #1D7C82; font-family: 'Ananda Black Personal Use', sans-serif;">Why Us</h5>
            <h2 class="text-center text-primary-custom" style="padding-bottom: 50px; color: #162034;">Apa yang kami tawarkan di hotel ini untuk anda?</h2>
            <div class="row text-center d-flex justify-content-center">
                <div class="col mb-3" style="background: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 31px; width: 350px; height: 324px;">
                    <i class="fas fa-star fa-3x text-primary-custom mb-5 mt-4" style="width: 28px; height: 28px;"></i>
                        <h4 class="mb-3 mt-2" style="font-size: 20px;">Kualitas Terbaik</h4>
                        <p class="d-flex align-items-center" style="font-size: 16px;">Kami selalu berkomitmen untuk menyediakan kualitas terbaik mulai dari pelayanan hingga fasilitas yang kami tawarkan.</p>
                </div>
                <div class="col mb-3 ms-5" style="background: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 31px; width: 350px; height: 324px;">
                    <i class="fas fa-map-marker-alt fa-3x text-primary-custom mb-5 mt-4" style="width: 28px; height: 28px;"></i>
                    <h4 class="mb-3 mt-2" style="font-size: 20px;">Lokasi yang Strategis</h4>
                    <p style="font-size: 16px;">Terletak di pusat kota, kami memberikan akses mudah ke tempat-tempat penting seperti pusat perbelanjaan, restoran, dan atraksi wisata terkenal.</p>
                </div>
                <div class="col mb-3 ms-5" style="background: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 31px; width: 350px; height: 324px;">
                    <i class="fas fa-bed fa-3x text-primary-custom mb-5 mt-4" style="width: 28px; height: 28px;"></i>
                    <h4 class="mb-3 mt-2" style="font-size: 20px;">Kenyamanan yang Luar Biasa</h4>
                    <p style="font-size: 16px;">Kamar-kamar kami didesain dengan kenyamanan dan gaya modern, menciptakan suasana yang tenang dan nyaman untuk Anda.</p>
                </div>
            </div>
        </div>
</section>

{{-- Kamar --}}
<div class="container mt-5" style="font-family: 'Poppins', sans-serif;">
        <div class="d-flex justify-content-between align-items-center mb-4 pt-5">
            <h2 style="font-family: 'Ananda Black Personal Use', sans-serif;">Kamar Terpopuler</h2>
            <a href="#" data-bs-toggle="modal" data-bs-target="#signInModal">
                <button style="background-color: #162034; width: 127px; height: 44px; color: #ffffff; border: none; font-size: 16px; border-radius: 18px;">
                    See More
                </button>
            </a>
        </div>
      <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
              <div class="card h-100">
                  <img src="{{ asset('img/standard.jfif') }}" class="card-img-top" alt="Standard Room" style="height: 225px;">
                  <div class="card-body">
                      <h5 class="card-title">Standard</h5>
                      <p class="card-text" style="height: 48px;">Kenyamanan sederhana dengan fasilitas lengkap.</p>
                      <div class="d-flex align-items-center">
                        <i class="fas fa-user" style="color: #1D7C82; font-size: 21px;"></i><p class="mb-0 ms-1 me-4" style="color: #162034;">2</p>
                        <i class="fas fa-bath" style="color: #1D7C82; font-size: 21px;"></i><p class="mb-0 ms-1 me-4" style="color: #162034;">1</p>
                        <i class="fas fa-bed" style="color: #1D7C82; font-size: 21px;"></i><p class="mb-0 ms-1" style="color: #162034;">1</p>
                    </div>
                         <div class="d-flex justify-content-between align-items-center">
                            <p class="mt-4" style="font-size: 20px;">400k<span style="font-size: 12px; color: #1D7C82;">/malam</span></p>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#signInModal">
                                <button style="background-color: #1D7C82; width: 101px; height: 40px; color: #ffffff; border: none; font-size: 16px; border-radius: 5px;">
                                    Booking
                                </button>
                            </a>
                        </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card h-100">
                  <img src="{{ asset('img/superior.jfif') }}" class="card-img-top" alt="Superior Room" style="height: 225px;">
                  <div class="card-body">
                      <h5 class="card-title">Superior Room</h5>
                      <p class="card-text" style="height: 48px;">Ruangan yang lebih luas dengan pemandangan yang indah.</p>
                      <div class="d-flex align-items-center">
                        <i class="fas fa-user" style="color: #1D7C82; font-size: 21px;"></i><p class="mb-0 ms-1 me-4" style="color: #162034;">2</p>
                        <i class="fas fa-bath" style="color: #1D7C82; font-size: 21px;"></i><p class="mb-0 ms-1 me-4" style="color: #162034;">1</p>
                        <i class="fas fa-bed" style="color: #1D7C82; font-size: 21px;"></i><p class="mb-0 ms-1" style="color: #162034;">1</p>
                    </div>
                      <div class="d-flex justify-content-between align-items-center">
                            <p class="mt-4" style="font-size: 20px;">600k<span style="font-size: 12px; color: #1D7C82;">/malam</span></p>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#signInModal">
                                <button style="background-color: #1D7C82; width: 101px; height: 40px; color: #ffffff; border: none; font-size: 16px; border-radius: 5px;">
                                    Booking
                                </button>
                            </a>
                        </div>
                  </div>
              </div>
          </div>
          <div class="col">
              <div class="card h-100">
                  <img src="{{ asset('img/deluxe.jfif') }}" class="card-img-top" alt="Deluxe Twin Bed" style="height: 225px;">
                  <div class="card-body">
                      <h5 class="card-title">Deluxe Twin Bed</h5>
                      <p class="card-text" style="height: 48px;">Kenyamanan dengan tempat tidur terpisah.</p>
                      <div class="d-flex align-items-center">
                        <i class="fas fa-user" style="color: #1D7C82; font-size: 21px;"></i><p class="mb-0 ms-1 me-4" style="color: #162034;">2</p>
                        <i class="fas fa-bath" style="color: #1D7C82; font-size: 21px;"></i><p class="mb-0 ms-1 me-4" style="color: #162034;">1</p>
                        <i class="fas fa-bed" style="color: #1D7C82; font-size: 21px;"></i><p class="mb-0 ms-1" style="color: #162034;">2</p>
                    </div>
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="mt-4" style="font-size: 20px;">700k<span style="font-size: 12px; color: #1D7C82;">/malam</span></p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#signInModal">
                            <button style="background-color: #1D7C82; width: 101px; height: 40px; color: #ffffff; border: none; font-size: 16px; border-radius: 5px;">
                                Booking
                            </button>
                        </a>
                    </div>
                  </div>
              </div>
          </div>
      </div>

      <div style="margin-bottom: 100px;">
      <p class="mt-4 mb-2 text-center" style="padding-top: 100px; font-size: 20px; color: #1D7C82; font-family: 'Ananda Black Personal Use', sans-serif;">Hotel Service</p>
      <h2 class="pb-4 text-center">Layanan Hotel Citra Megah</h2>
      <div class="row services">
          <div class="col-md-4">
              <img src="{{ asset('img/layanan.png') }}" alt="Layanan Kamar 24 Jam" style="width: 346px; height: 180px; border-radius: 18px;">
              <p class="pt-3">Layanan Kamar 24 Jam</p>
          </div>
          <div class="col-md-4">
              <img src="{{ asset('img/restoran.jfif') }}" alt="Restoran Mewah" style="width: 346px; height: 180px; border-radius: 18px;">
              <p class="pt-3">Restoran Mewah</p>
          </div>
          <div class="col-md-4">
            <img src="{{ asset('img/spa.png') }}" alt="Spa" style="width: 173px; height: 180px; margin-right: 0; border-radius: 18px 0 0 18px;">
            <img src="{{ asset('img/kebugaran.jfif') }}" alt="Kebugaran" style="width: 173px; height: 180px; margin-left: -5px; border-radius: 0 18px 18px 0;">
              <p class="pt-3">Spa dan Kebugaran</p>
          </div>
      </div>
    </div>
 </div>
</div>

 {{-- Featured --}}
 <section style="background-color: #F8F9FA; padding: 60px 0;">
    <div class="container mt-5" style="font-family: 'Poppins', sans-serif;">
        <p class="text-center" style="color: #1D7C82; font-size: 28px; font-family: 'Ananda Black Personal Use', sans-serif;">Featured</p>
        <h2 class="mt-2 text-center" style="margin-bottom: 60px; font-size: 32px;">Apa Yang Membuat Hotel Kami Sangat Cocok Untuk Anda?</h2>
        <div class="row justify-content-center align-items-center mb-4">
            <div class="col-md-4 d-flex justify-content-center position-relative" style="z-index: 1;">
                <img src="{{ asset('img/hotel.jpg') }}" class="img-fluid" alt="Hotel Image" style="width: 404px; height: 404px; object-fit: cover; border-radius: 20px;">
            </div>
            <div class="col-md-6 d-flex align-items-center" style="background-color: #FFFFFF; height: 305px; border-radius: 18px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-left: -50px;">
                <div style="margin: 40px;">
                    <h2 class="mb-3" style="color: #162034; font-size: 28px; font-family: 'Ananda Black Personal Use', sans-serif;">Pemandangan Kota yang Memukau</h2>
                    <p class="text-dark-custom pb-3" style="text-align: justify; font-size: 16px;">Hotel Citra Megah adalah destinasi yang sempurna bagi Anda yang menginginkan pengalaman menginap dengan pemandangan kota yang memukau. Kami berada di jantung kota, memberikan Anda pemandangan yang spektakuler, memadukan keindahan arsitektur modern dengan lanskap perkotaan yang gemerlap.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mb-4">
            <div class="col-md-4 d-flex justify-content-center position-relative" style="z-index: 1;">
                <img src="{{ asset('img/featured1.png') }}" class="img-fluid" alt="Hotel Image" style="width: 404px; height: 404px; object-fit: cover; border-radius: 20px;">
            </div>
            <div class="col-md-6 d-flex align-items-center" style="background-color: #FFFFFF; height: 305px; border-radius: 18px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-left: -50px;">
                <div style="margin: 40px;">
                    <h2 class="mb-3" style="color: #162034; font-size: 28px; font-family: 'Ananda Black Personal Use', sans-serif;">Lokasi Hotel yang Strategis</h2>
                    <p class="text-dark-custom pb-3" style="text-align: justify; font-size: 16px;">Lokasi kami yang strategis merupakan salah satu keunggulan utama. Terletak di pusat kota, Anda akan menemukan diri Anda dikelilingi oleh kehidupan perkotaan yang dinamis. Hanya beberapa langkah dari hotel, Anda dapat menjelajahi atraksi lokal, mengeksplorasi tempat-tempat wisata populer, dan menikmati kehidupan malam yang berwarna.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mb-4">
            <div class="col-md-4 d-flex justify-content-center position-relative" style="z-index: 1;">
                <img src="{{ asset('img/featured2.png') }}" class="img-fluid" alt="Hotel Image" style="width: 404px; height: 404px; object-fit: cover; border-radius: 20px;">
            </div>
            <div class="col-md-6 d-flex align-items-center" style="background-color: #FFFFFF; height: 305px; border-radius: 18px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-left: -50px;">
                <div style="margin: 40px;">
                    <h2 class="mb-3" style="color: #162034; font-size: 28px; font-family: 'Ananda Black Personal Use', sans-serif;">Interior yang Elegan dan Modern</h2>
                    <p class="text-dark-custom pb-3" style="text-align: justify; font-size: 16px;">Di Hotel Eleganzia, kami menghadirkan keindahan interior yang elegan dan modern untuk memenuhi selera para tamu yang menghargai sentuhan keanggunan dan kemewahan. Setiap ruangan kami dirancang dengan penuh perhatian terhadap detail, menciptakan atmosfer yang mewah dan memikat. Bersiaplah untuk merasakan pengalaman menginap yang tak terlupakan di lingkungan yang begitu indah dan menginspirasi.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Facility --}}
<section class="text-center mb-5" style="background-color: #ffffff; padding: 40px;">
    <div class="container" style="font-family: 'Poppins', sans-serif;">
        <p class="mt-4" style="color: #1D7C82; font-size: 20px; font-family: 'Ananda Black Personal Use', sans-serif;">Facility</p>
        <h2 class="mb-5">Beberapa Fasilitas Hotel Kami</h2>
        <div class="row g-4">
            <div class="col-6 col-md-3">
                <div class="facility-icons d-flex justify-content-center align-items-center" style="background-color: #1D7C82; width: 265px; height: 59px; color: #ffffff; border-radius: 18px;">
                    <i class="fas fa-bed"></i>
                    <span style="color: #ffffff; font-size: 20px; margin-left: 8px;">145 Kamar</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="facility-icons d-flex justify-content-center align-items-center" style="background-color: #1D7C82; width: 265px; height: 59px; color: #ffffff; border-radius: 18px;">
                    <i class="fas fa-utensils"></i>
                    <span style="color: #ffffff; font-size: 20px; margin-left: 8px;">Restaurant</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="facility-icons d-flex justify-content-center align-items-center" style="background-color: #1D7C82; width: 265px; height: 59px; color: #ffffff; border-radius: 18px;">
                    <i class="fas fa-swimming-pool"></i>
                    <span style="color: #ffffff; font-size: 20px; margin-left: 8px;">Kolam Renang</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="facility-icons d-flex justify-content-center align-items-center" style="background-color: #1D7C82; width: 265px; height: 59px; color: #ffffff; border-radius: 18px;">
                    <i class="fas fa-praying-hands"></i>
                    <span style="color: #ffffff; font-size: 20px; margin-left: 8px;">Musholla</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="facility-icons d-flex justify-content-center align-items-center" style="background-color: #1D7C82; width: 265px; height: 59px; color: #ffffff; border-radius: 18px;">
                    <i class="fas fa-wifi"></i>
                    <span style="color: #ffffff; font-size: 20px; margin-left: 8px;">Free Wifi</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="facility-icons d-flex justify-content-center align-items-center" style="background-color: #1D7C82; width: 265px; height: 59px; color: #ffffff; border-radius: 18px;">
                    <i class="fas fa-concierge-bell"></i>
                    <span style="color: #ffffff; font-size: 20px; margin-left: 8px;">Layanan 24 Jam</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="facility-icons d-flex justify-content-center align-items-center" style="background-color: #1D7C82; width: 265px; height: 59px; color: #ffffff; border-radius: 18px;">
                    <i class="fas fa-tshirt"></i>
                    <span style="color: #ffffff; font-size: 20px; margin-left: 8px;">Laundry</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="facility-icons d-flex justify-content-center align-items-center" style="background-color: #1D7C82; width: 265px; height: 59px; color: #ffffff; border-radius: 18px;">
                    <i class="fas fa-shuttle-van"></i>
                    <span style="color: #ffffff; font-size: 20px; margin-left: 8px;">Antar Jemput</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Galeri --}}
<section class="text-center" style="background-color: #F8F9FA; padding: 80px;">
    <div class="container mb-5" style="font-family: 'Poppins', sans-serif;">
        <h2 class="mb-5 mt-4" style="font-family: 'Ananda Black Personal Use', sans-serif;">Galeri Kami</h2>
        <div id="carouselGallery" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="{{ asset('img/galeri1.png') }}" class="d-block w-100 pe-2" alt="Gallery Image 1" style="height: 294px; border-radius: 18px;">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('img/galeri2.png') }}" class="d-block w-100 pe-2" alt="Gallery Image 2" style="height: 294px; border-radius: 18px;">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('img/kamarhotel.jfif') }}" class="d-block w-100 pe-2" alt="Gallery Image 3" style="height: 294px; border-radius: 18px;">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('img/galeri3.png') }}" class="d-block w-100" alt="Gallery Image 4" style="height: 294px; border-radius: 18px;">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="{{ asset('img/galeri4.png') }}" class="d-block w-100 pe-2" alt="Gallery Image 5" style="height: 294px; border-radius: 18px;">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('img/restoran.jfif') }}" class="d-block w-100 pe-2" alt="Gallery Image 6" style="height: 294px; border-radius: 18px;">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('img/galeri5.png') }}" class="d-block w-100 pe-2" alt="Gallery Image 7" style="height: 294px; border-radius: 18px;">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('img/galeri6.png') }}" class="d-block w-100" alt="Gallery Image 8" style="height: 294px; border-radius: 18px;">
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselGallery" data-bs-slide="prev" style="width: 5%;">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselGallery" data-bs-slide="next" style="width: 5%;">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="text-center" style="background-color: #1D7C82; color: #FFFFFF;  padding: 80px;">
    <div class="container" style="font-family: 'Poppins', sans-serif;">
        <h2 style="font-size: 24px;">Jangan lewatkan kesempatan untuk menginap di Hotel Bintang Emas dan rasakan pengalaman menginap yang tak terlupakan.</h2>
        <p>Pesan sekarang untuk mendapatkan harga spesial dan penawaran terbatas!</p>
        <a href="#" data-bs-toggle="modal" data-bs-target="#signInModal" style="background-color: #162034; width: 170px; height: 49px; border-radius: 18px;">
            <button type="button" style="background-color: #162034; width: 192px; height: 44px; border: none; color: #ffffff;">Booking Sekarang!</button>
        </a>
    </div>
</section>

{{-- Modal Sign In --}}
<div class="modal fade" id="signInModal" tabindex="-1" aria-labelledby="signInModalLabel" aria-hidden="true" style="font-family: 'Poppins', sans-serif;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #1D7C82;">
                <h5 class="modal-title text-center w-100" id="signInModalLabel" style="font-family: 'Ananda Black Personal Use', sans-serif; color: #ffffff">Sign In Required</h5>
            </div>
            <div class="modal-footer justify-content-center" style="background-color: #F8F9FA;">
                <a href="/signin" class="btn btn" style="background-color: #162034; color: #ffffff;">Sign In</a>
                <button type="button" class="btn btn" data-bs-dismiss="modal" style="background-color: #FFFFFF; color: #1D7C82;">Close</button>
            </div>
        </div>
    </div>
</div>

{{-- Footer --}}
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5 class="mb-3" style="font-family: 'Ananda Black Personal Use', sans-serif; font-size: 28px;">Hotel Citra Megah</h5>
                <p class="mb-5" style="color: #C7D2E8; font-size: 14px; font-family: 'Poppins', sans-serif;">Hotel Citra Megah, hotel bintang lima terbaik di indonesia dengan lokasi yg strategis.</p>
                <div>
                    <p style="color: #C7D2E8; font-size: 14px; font-family: 'Poppins', sans-serif;">Follow Us</p>
                    <a class="me-3" href="#"><i class="fab fa-facebook-f" style="color: #1D7C82; font-size: 30px;"></i></a>
                    <a class="me-3" href="#"><i class="fab fa-linkedin" style="color: #1D7C82; font-size: 30px;"></i></a>
                    <a class="me-3" href="#"><i class="fab fa-instagram" style="color: #1D7C82; font-size: 30px;"></i></a>
                    <a href="#"><i class="fab fa-twitter" style="color: #1D7C82; font-size: 30px;"></i></a>
                </div>
            </div>
            <div class="col-md-2">
                <h5 class="mb-3" style="color: #C7D2E8;">Navigation</h5>
                <ul class="list-unstyled">
                    <li class="mb-2" style="font-size: 14px;"><a href="#">High Career</a></li>
                    <li class="mb-2" style="font-size: 14px;"><a href="#">Careers</a></li>
                    <li class="mb-2" style="font-size: 14px;"><a href="#">Terms & Conditions</a></li>
                    <li style="font-size: 14px;"><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 class="mb-3" style="color: #C7D2E8;">Recent Post</h5>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center mb-2" style="font-size: 12px;">
                        <img src="{{ asset('img/recentpost1.jfif') }}" alt="Recent Post 1" style="height: 52px; width: 52px; margin-right: 10px;">
                        Menemukan Kesempurnaan dalam Kesenangan Mengin . . .
                    </li>
                    <li class="d-flex align-items-center mb-2" style="font-size: 12px;">
                        <img src="{{ asset('img/recentpost2.png') }}" alt="Recent Post 2" style="height: 52px; width: 52px; margin-right: 10px;">
                        Menjadi Tuan Rumah yang Tepat: Konferensi dan Acara Bisnis di . . .
                    </li>
                    <li class="d-flex align-items-center mb-2" style="font-size: 12px;">
                        <img src="{{ asset('img/recentpost3.png') }}" alt="Recent Post 3" style="height: 52px; width: 52px; margin-right: 10px;">
                        Mengenal Dapur Lezat Hotel Citra Megah: Sebuah Petualangan . . .
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="mb-3" style="color: #C7D2E8;">Contact Us</h5>
                <ul class="list-unstyled">
                    <li class="d-flex align-items mb-2" style="font-size: 14px;"><div><i class="fas fa-phone" style="width: 24px; height: 24px; color: #66a9ae;"></i></div> 123-456-7890</li>
                    <li class="d-flex align-items mb-2" style="font-size: 14px;"><div><i class="fas fa-envelope" style="width: 24px; height: 24px; color: #66a9ae;"></i></div> hotel.citramegah@gmail.com</li>
                    <li class="d-flex align-items mb-2" style="font-size: 14px;"><div><i class="fas fa-map-marker-alt" style="width: 24px; height: 24px; color: #66a9ae;"></i></div> 
                        <div style="text-align: justify;">
                            Jl. Raya Krapyak, Jl. Karanganyar Raya No.RT.05, Karanganyar, Wedomartani, Kec. Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

{{-- Copyright --}}
<div style="padding: 10px 0; text-align: center; color: #FFFFFF; font-size: 14px; font-family: 'Poppins', sans-serif; background-color: #162034; border-top: 2px solid #FFFFFF1A;">
    &copy; 2024 Hotel Citra Megah. All rights reserved.
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

