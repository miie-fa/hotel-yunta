<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kamar - My Management Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        
        body {
            font-family: 'Poppins', sans-serif;
        }
        main {
            margin: 20px;
        }
        .room-details {
    position: relative;
    display: block;
    width: 100%;
}

.image-container {
    position: relative;
    width: 100%;
}

.room-title {
    position: absolute;
    bottom: 0px;
    left: 240px; /* Sesuaikan jarak dari kiri sesuai kebutuhan */
    background-color: #162034; /* Latar belakang hitam transparan */
    color: white;
    padding: 10px 45px; /* Padding sesuai kebutuhan */
    border-radius: 5px; /* Sesuaikan radius border sesuai kebutuhan */
    text-align: center;
    font-weight: bold;
    font-size: 1.8em;
}

/* Gaya untuk gambar */
.room-details img {
    width: 100%;
    height: 270px;
    object-fit: cover;
    object-position: center;
}

/* Media query untuk layar yang lebih kecil */
@media (max-width:  1200px) {
    .room-title {
        left: 50%; /* Posisikan di tengah */
        transform: translateX(-150%); /* Gunakan transform untuk menggeser posisi ke kiri 50% dari lebar elemen */
        font-size: 1.5em; /* Sesuaikan ukuran font untuk layar yang lebih kecil */
        padding: 10px 30px; /* Kurangi padding untuk layar yang lebih kecil */
    }
}


/* (batas judul) */

        .details-container {
            display: flex;
            flex-wrap: nowrap;
            gap: 20px;
            margin-top: 20px;
        }
        .details-img {
            width: 100%;
            max-width: 100%;
            max-height: 500px;
            height: auto;
            object-fit: cover;
            border-radius: 18px;
        }
        .room-info,
        .summary-item {
            flex: 1;
        }
        .summary-item {
            margin-top: 20px;
            border: 1px solid #ddd;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .quantity-control button {
            border: 1px solid #ddd;
            background: #fff;
            padding: 5px 10px;
            cursor: pointer;
        }
        .quantity-control span {
            padding: 0 10px;
        }
        .btn-block {
            display: block;
            width: 100%;
            padding: 10px;
            background:#162034;
            color: #fff;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            text-align: center;
        }
        .btn-block:hover {
            background: #007bff;
        }
        .form-control-editable {
            border: none;
            border-bottom: 1px solid #ccc;
            padding: 5px 0;
            background-color: transparent;
            width: 100%;
        }
    
        .card {
            flex: 0 0 auto;
            max-width: 80%;
            margin-bottom: 10px;
            height: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            transition: transform 0.5s ease, box-shadow 0.5s ease, background-color 0.5s ease;
            overflow: hidden;
            position: relative;
            display: flex;
            flex-direction: column;
        }
        .card img {
            width: 100%;
            height: 50%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            background-color: #f9f9f9;
        }
        .card:hover img {
            transform: scale(1.1);
        }
        .card-details {
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            height: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .card-details h4,
        .card-details p {
            margin: 5px 0;
            text-align: center;
        }
        .card-details .icon-group {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 5px;
        }
        .card-details .icon-group i {
            margin: 0 10px;
            padding: 5px;
            background: #1D7C82;
            color: #fff;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    
        .card-container {
            background-color: #F2F2F2;
            border-radius: 8px;
            padding: 20px;
            margin: -10px -20px 20px -20px;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            margin-bottom: 20px;
            display: flex;
            flex-wrap: wrap;
             gap: 20px; /* Jarak antar kartu */
        justify-content: space-between; /* Menyusun kartu dengan jarak rata */
}
    
        .col-md-3 {
            flex: 0 0 auto;
            margin: 1px;
        }
        .card h4,
        .card p {
            margin: 10px 0;
        }
        .room-info h3 {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .room-info h3 span:first-child {
            flex-grow: 1;
        }
        .room-info h3 .stars {
            color: gold;
        }
        .room-info h3 .reviews {
            color: black;
        }
        .small-text {
            font-size: 0.7em;
            font-weight: 900;
            color: #162034;
        }
    
        .facilities {
            display: flex;
            flex-wrap: wrap;
        }
    
        .facility-item {
            flex: 1 0 50%;
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
    
        .facility-item i {
            margin-right: 10px;
        }
    
        @media screen and (max-width: 1200px) {
            .facility-item {
                flex: 1 0 100%;
            }
        }
    
     /* (responsif bagian ringkasan pemesanan)   */
      
@media screen and (max-width: 1200px) {
    .details-container {
        flex-direction: column;
    }
    .summary-item {
        margin-top: 0;
        width: 250%;
    }
}
@media screen and (max-width: 768px) {
    .summary-item {
        width: 100%;
    }
}
    /* (selesai) */
    @media screen and (max-width: 1200px) {
    .card {
        flex: 0 0 calc(50% - 20px); /* Mengatur lebar kartu untuk layar lebih kecil */
        max-width: calc(50% - 20px); /* Mengatur lebar maksimum kartu untuk layar lebih kecil */
    }
}

@media screen and (max-width: 768px) {
    .card {
        flex: 0 0 calc(100% - 20px); /* Mengatur lebar kartu untuk layar paling kecil */
        max-width: calc(100% - 20px); /* Mengatur lebar maksimum kartu untuk layar paling kecil */
    }
}

    </style>
    
</head>
<body>
    <main>

        <section class="room-details">
            <div class="image-container">
                <img src="{{ asset('images/kamaratas.jpg') }}" alt="Kamar">
                <div class="room-title">Kamar</div>
            </div>
        </section>
        
        
        <div class="container">
            <div class="row details-container">
                <div class="col-md-8">
                    <div>
                        <h2 style="margin-top: 40px; color: #162034; font-weight: 900;">Kamar Superior</h2>
                        <img class="details-img" src="{{ asset('images/kamarbawah.jpg') }}" alt="Kamar Superior" style="margin-top: 20px; margin-bottom: 20px;">
                    </div>
                    <div class="room-info" style="margin-bottom: 20px;">
                        <h3 style="margin-bottom: 20px;">
                            <span class="small-text">Superior Room</span>
                            <span class="stars">★★★★☆</span>
                            <span class="reviews small-text">(735)</span>
                        </h3>
                            <p style="margin-bottom: 50px;">Nikmati kenyamanan superior di kamar Superior kami. Desain interior yang elegan dan mewah menciptakan suasana yang sempurna untuk melepas penat setelah hari yang panjang. Kamar luas dengan area tidur dan tempat duduk yang terpisah memberikan privasi dan ruang yang lapang.</p>
                            <h4 style="margin-bottom: 20px; color: #162034; font-weight: 900;">Fasilitas:</h4>
                            <div class="facilities">
                                <div class="facilities">
                                    <div class="facility-item">
                                        <i class="fas fa-wifi"></i>
                                        <span style="font-weight: 900;">High Speed WiFi</span>
                                    </div>
                                    <div class="facility-item">
                                        <i class="fas fa-bath"></i>
                                        <span style="font-weight: 900;">1 Kamar Mandi</span>
                                    </div>
                                    <div class="facility-item">
                                        <i class="fas fa-cocktail"></i>
                                        <span style="font-weight: 900;">Kulkas Mini</span>
                                    </div>
                                    <div class="facility-item">
                                        <i class="fas fa-bed"></i>
                                        <span style="font-weight: 900;">1 Double Bed</span>
                                    </div>
                                    <div class="facility-item">
                                        <i class="fas fa-tv"></i> 
                                        <span style="font-weight: 900;">TV</span> 
                                    </div>
                                    <div class="facility-item">
                                        <i class="fas fa-coffee"></i>
                                        <span style="font-weight: 900;">Sarapan</span>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </div>

                    {{-- (ringkasan pemesanan) --}}
                    
                    <div class="col-md-4" style="margin-top: 90px;">
                        <div class="summary-item" style="background-color: #F2F2F2;">
                            <h4 style="margin-top: 10px; color: #162034; font-weight: 900;">Ringkasan Pemesanan</h4>
                            <label for="check-in" style="margin-bottom: 10px; color: #1D7C82;">
                                <strong>
                                    <i class="fas fa-calendar-check" aria-hidden="true" style="color: #162034;"></i>
                                    <span style="color: #1D7C82;">Check In</span>
                                </strong>
                                  </label>
                                  <input type="text" style="margin-bottom: 20px;" id="check-in" class="form-control">
                          
                            <label for="check-out" style="margin-bottom: 10px;">
                                <strong>
                                    <i class="fas fa-calendar-times" aria-hidden="true" style="color: #162034;"></i>
                                    <span style="color: #1D7C82;">Check Out</span>
                                </strong>
                            </label>
                            <input type="text" style="margin-bottom: 20px;" id="check-out" class="form-control">

                            <label for="hotel" style="margin-bottom: 10px;">
                                <strong>
                                    <i class="fas fa-building" aria-hidden="true" style="color: #162034;"></i>
                                    <span style="color: #1D7C82;">Kamar</span>
                                </strong>
                            </label>
                            <input type="text" id="hotel" style="margin-bottom: 20px; border: none; border-bottom: 1px solid #ccc; background: transparent; width: 100%;" class="form-control">
                            
                            <div class="d-flex justify-content-between" style="margin-bottom: 20px;">
                                <div><strong>1 malam</strong></div>
                                <div id="price-per-night">Rp. 400.000</div>
                            </div>
                          
                            <div class="d-flex justify-content-between" style="margin-bottom: 20px; border-bottom: 1px dashed #1D7C82;">
                                <div><strong>Jumlah kamar</strong></div>
                                <div>1 kamar</div>
                            </div>
                            
                            <div class="d-flex justify-content-between" style="margin-bottom: 20px;">
                                <div><strong>Total</strong></div>
                                <div id="total-cost">Rp 700.000</div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">SELESAIKAN PEMESANAN</button>
                        </div>
                    </div>
                </div>
            </div>
    
            <br>
            <br>
            <div class="booking-summary card-container">
                <h3 class="popular-title" style="margin-top: 0; margin-bottom: 20px;">Kamar Terpopuler</h3>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card">  
                                        <img src="{{ asset('images/kamar1.jpg') }}" alt="Kamar 1">
                                        <div class="card-details">
                                            <h4>Suite Eksklusif</h4>
                                            <p>Kamar dengan pemandangan laut yang indah.</p>
                                            <div class="icon-group">
                                                <i class="fas fa-user-friends"></i>
                                                <i class="fas fa-bath"></i>
                                                <i class="fas fa-bed"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="{{ asset('images/kamar3.jpg') }}" alt="Kamar 3">
                                        <div class="card-details">
                                            <h4>Kamar Mewah</h4>
                                            <p>Kamar dengan pemandangan laut yang indah.</p>
                                            <div class="icon-group">
                                                <i class="fas fa-user-friends"></i>
                                                <i class="fas fa-bath"></i>
                                                <i class="fas fa-bed"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="{{ asset('images/kamaratas.jpg') }}" alt="Kamar Atas">
                                        <div class="card-details">
                                            <h4>Kamar Atas</h4>
                                            <p>Kamar dengan pemandangan laut yang indah.</p>
                                            <div class="icon-group">
                                                <i class="fas fa-user-friends"></i>
                                                <i class="fas fa-bath"></i>
                                                <i class="fas fa-bed"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="{{ asset('images/kamarbawah.jpg') }}" alt="Kamar Bawah">
                                        <div class="card-details">
                                            <h4>Kamar Bawah</h4>
                                            <p>Kamar dengan pemandangan laut yang indah.</p>
                                            <div class="icon-group">
                                                <i class="fas fa-user-friends"></i>
                                                <i class="fas fa-bath"></i>
                                                <i class="fas fa-bed"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add more cards as needed -->
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            


        </main>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
        <script>
            var myCarousel = document.querySelector('#carouselExampleControls');
            var carousel = new bootstrap.Carousel(myCarousel);
        </script>
    </body>
    </html>
    