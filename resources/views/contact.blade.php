<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    
    
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        
        .contact-section {
            padding: 20px;
            margin: 20px auto;
            width: 60%;
        }
        
        .contact-section h2 {
            text-align: center;
            color: #fff;
            background-image: url('images/contact.png'); /* Ganti 'image.png' dengan nama file gambar yang diupload */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 50px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        
        .contact-section p {
            text-align: center;
            color: #666;
        }
        
        .contact-info {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .contact-info p {
            margin: 5px 0;
            color: #333;
        }
        
        .contact-info a {
            color: #007bff;
            text-decoration: none;
        }
        
        .contact-info a:hover {
            text-decoration: underline;
        }
        
        .contact-form {
            background-color: #0e284a;
            padding: 20px;
            border-radius: 5px;
            color: white;
            margin: 0 auto;
            width: 100%;
            height: 670px;
        }
        
        .contact-form h3 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            box-sizing: border-box;
        }
        
        .form-group textarea {
            resize: vertical;
        }
        
        button[type="submit"] {
            width: 20%;
            padding: 10px;
            background-color: #1bb2d8;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        
        button[type="submit"]:hover {
            background-color: #17a2b8;
        }
        
        .additional-info {
            margin: 20px auto;
            width: 80%;
        }
        
        .reception-info {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .reception-info img {
            width: 400px;
            height: 400px;
            object-fit: cover;
            border-radius: 5px;
            margin-right: -10px;
        }
        
        .reception-details {
            background-color: #009688;
            color: white;
            padding: 20px;
            border-radius: 5px;
            flex: 1;
        }
        
        .location-info {
            margin-top: 100px;
            text-align: left;
        }
        
        .location-info h3 {
            color: #333;
        }
        
        .location-info p {
            color: #666;
        }
        
        .map {
            margin-top: 20px;
        }
        
        .location-info iframe {
            width: 100%;
            height: 500px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0 auto;
            display: block;
        }
    </style>
</head>
<body>
    <div class="contact-section">
        
        <h2>Contact Us</h2>
        <p>Apakah Anda memiliki pertanyaan, permintaan khusus, atau ingin mendapatkan informasi lebih lanjut tentang Hotel Vista Indah? Kami dengan senang hati siap membantu Anda. Silakan hubungi kami melalui salah satu opsi di bawah ini.</p>
        <div class="contact-info" style="display: flex; gap: 20px;">
            <p style="display: flex; align-items: center;"><i class="fas fa-envelope"></i> Email: <a href="mailto:info@hotelcitramegah.com">info@hotelcitramegah.com</a></p>
            <p style="display: flex; align-items: center;"><i class="fas fa-phone"></i> No Telepon: <a href="tel:+1234567890">+1234567890</a></p>
            <p style="display: flex; align-items: center;"><i class="fas fa-fax"></i> Fax: <a href="fax:+1234567890">+1234567890</a></p>
        </div>
        <div class="contact-form">
            <h3>Form Kontak</h3>
            <p>Isilah formulir kontak di bawah ini dengan pertanyaan atau pesan Anda, dan kami akan merespons secepat mungkin.</p>
            <hr>
            <br>
            <form>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="first-name">Nama Depan</label>
                        <input type="text" id="first-name" name="first-name" required>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Nama Belakang</label>
                        <input type="text" id="last-name" name="last-name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Nomor Telepon</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group" style="grid-column: 1 / span 2;">
                        <label for="message">Pesan</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>                    
                </div>
                <button type="submit">Kirim Pesan</button>
            </form>
        </div>
    </div>
    <br>
    <br>
    <div class="additional-info">
        <div class="reception-info">
            <img src="images/contact.png" alt="Reception Image">
            <div class="reception-details">
                <h3>KEMUDAHAN RESEPSIONIS</h3>
                <p>Kami memiliki resepsionis yang siap membantu Anda 24/7. Jadi, jangan ragu untuk menghubungi kami kapan saja. Kami akan dengan senang hati menjawab pertanyaan Anda atau membantu Anda dengan permintaan khusus.</p>
                <p>Apapun yang Anda butuhkan, tim Hotel Vista Indah siap memberikan pelayanan terbaik kepada Anda. Kami berkomitmen untuk merespons dengan cepat dan memberikan solusi yang memenuhi kebutuhan Anda.</p>
                <p>Terima kasih atas minat dan kepercayaan Anda pada Hotel Vista Indah. Kami berharap dapat membantu Anda dan menyambut kedatangan Anda dengan hangat.</p>
            </div>
        </div>
        <div class="location-info">
            <h3>Kantor Pusat</h3>
            <p>Jl. Raya Krayak, Jl. Karanganyar Raya No.RT.05, Karanganyar, Kec.</p>
            <p>Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.303809527878!2d110.41604051477706!3d-7.783083994385369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59a8b156adfd%3A0x20df82c066c15e3d!2sHotel%20Citra%20Megah!5e0!3m2!1sen!2sid!4v1639621298724!5m2!1sen!2sid" width="1000" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

</body>
</html>
