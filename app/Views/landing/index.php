<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home - Rebik's FC</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f5f5f5;
            overflow-x: hidden;
        }

        .navbar {
            background-color: #071A14;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 60px;
            margin-right: 12px;
        }

        .club-name {
            font-size: 18px;
            font-weight: bold;
            color: white;
        }

        .nav-links a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
            font-weight: bold;
        }

        .nav-links a:hover {
            color: rgb(2, 51, 31);
        }

        /* TIKET SECTION */
        .ticket-hero {
            position: relative;
            background: url('/assets/bg-hometiket.jpg') center/cover no-repeat;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ticket-glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            color: white;
            max-width: 600px;
            animation: fadeIn 1s ease-out forwards;
        }

        .ticket-glass h1 {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .ticket-glass a {
            background: white;
            color: #071A14;
            padding: 12px 26px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s;
        }

        .ticket-glass a:hover {
            background: #071A14;
            color: white;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* MERCHANDISE */
        .section-merchandise {
            position: relative;
            width: 90%;
            margin: 60px auto;
            border-radius: 16px;
            overflow: hidden;
        }

        .section-merchandise img {
            width: 100%;
            display: block;
            border-radius: 16px;
        }

        .shop-now {
            position: absolute;
            bottom: 70px;
            left: 20%;
            transform: translateX(-50%);
        }

        .shop-now a {
            background-color: white;
            color: #071A14;
            font-weight: bold;
            padding: 12px 26px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 16px;
            transition: 0.3s;
        }

        .shop-now a:hover {
            background-color: #071A14;
            color: white;
        }

        /* DAFTAR PEMAIN */
        .section-pemain {
            padding: 60px 5% 30px;
            background-color: #071A14;
        }

        .section-pemain h2 {
            text-align: center;
            font-size: 36px;
            color: white;
            margin-bottom: 40px;
        }

        .pemain-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
            justify-items: center;
        }

        .flip-card {
            width: 220px;
            height: 300px;
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .flip-card-front img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .flip-card-back {
            background-color: white;
            transform: rotateY(180deg);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            color: #071A14;
        }

        .flip-card-back h3 {
            margin-bottom: 8px;
            font-size: 18px;
        }

        .flip-card-back p {
            font-size: 14px;
        }

        /* GALERI FOTO */
        .section-gallery {
            padding: 40px 5%;
            background-color: #ffffff;
        }

        .section-gallery h2 {
            text-align: center;
            font-size: 30px;
            color: #071A14;
            margin-bottom: 30px;
        }

        .gallery-container {
            column-count: 3;
            column-gap: 16px;
        }

        .gallery-container img {
            width: 100%;
            margin-bottom: 16px;
            border-radius: 10px;
            break-inside: avoid;
            object-fit: cover;
        }

        /* === LIVE KOMENTAR === */
        .live-comment-wrapper {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 300px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            z-index: 9999;
            padding: 15px;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .live-comment-wrapper.show {
            opacity: 1;
            transform: translateY(0);
        }

        .live-comment-wrapper h4 {
            margin-bottom: 10px;
            color: #071A14;
            font-size: 16px;
        }

        .live-comment-wrapper input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .live-comment-wrapper button {
            width: 100%;
            padding: 8px;
            background-color: #071A14;
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        .live-comment-wrapper button:hover {
            background-color: #0c2c20;
        }

        .live-comment-list {
            margin-top: 10px;
            max-height: 150px;
            overflow-y: auto;
            font-size: 14px;
        }

        .live-comment-item {
            background-color: #f3f3f3;
            padding: 6px 10px;
            border-radius: 6px;
            color: #333;
            margin-bottom: 8px;
        }
        @media (max-width: 992px) {
            .gallery-container {
                column-count: 2;
            }
        }

        @media (max-width: 600px) {
            .gallery-container {
                column-count: 1;
            }

            .ticket-glass h1 {
                font-size: 28px;
            }

            .shop-now {
                bottom: 20px;
                left: 50%;
                transform: translateX(-50%);
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <div class="navbar">
        <div class="logo">
            <img src="/assets/rebiks-logo.png" alt="Rebik's FC">
            <span class="club-name">Rebik's Football Club</span>
        </div>
        <div class="nav-links">
            <a href="/">HOME</a>
            <a href="/landing/tiket">TICKET</a>
            <a href="/landing/merchandise">MERCHANDISE</a>
        </div>
    </div>

    <!-- TIKET SECTION -->
    <section class="ticket-hero">
        <div class="ticket-glass">
            <h1>Dukung Langsung Rebik's FC di Stadion!</h1>
            <a href="/landing/tiket">Beli Tiket Sekarang</a>
        </div>
    </section>

    <!-- MERCHANDISE SECTION -->
    <div class="section-merchandise">
        <img src="/assets/merchandise-banner.png" alt="Official Merchandise">
        <div class="shop-now">
            <a href="/landing/merchandise">Shop Now</a>
        </div>
    </div>

    <!-- DAFTAR PEMAIN -->
    <section class="section-pemain">
        <h2>Rebik's Squad</h2>
        <div class="pemain-grid">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front"><img src="/assets/pemain1.jpg"></div>
                    <div class="flip-card-back">
                        <h3>Rizky Maulana</h3>
                        <p>Penjaga Gawang</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front"><img src="/assets/pemain2.jpg"></div>
                    <div class="flip-card-back">
                        <h3>Fajar Hidayat</h3>
                        <p>Bek Tengah</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front"><img src="/assets/pemain3.jpg"></div>
                    <div class="flip-card-back">
                        <h3>Doni Saputra</h3>
                        <p>Sayap Kiri</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front"><img src="/assets/pemain4.jpg"></div>
                    <div class="flip-card-back">
                        <h3>Budi Hartono</h3>
                        <p>Gelandang Serang</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front"><img src="/assets/pemain5.jpg"></div>
                    <div class="flip-card-back">
                        <h3>Robby Kurniawan</h3>
                        <p>Sayap Kanan</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front"><img src="/assets/pemain6.jpg"></div>
                    <div class="flip-card-back">
                        <h3>Ahmad Fadli</h3>
                        <p>Striker</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front"><img src="/assets/pemain7.jpg"></div>
                    <div class="flip-card-back">
                        <h3>Alvin Pratama</h3>
                        <p>Gelandang Bertahan</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front"><img src="/assets/pemain8.jpg"></div>
                    <div class="flip-card-back">
                        <h3>Rendy Syahputra</h3>
                        <p>Penyerang</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front"><img src="/assets/pemain9.jpg"></div>
                    <div class="flip-card-back">
                        <h3>Mamat Alkatiri</h3>
                        <p>Penyerang</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front"><img src="/assets/pemain10.jpg"></div>
                    <div class="flip-card-back">
                        <h3>Davin Anbia</h3>
                        <p>Penyerang</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALERI SECTION -->
    <section class="section-gallery">
        <h2>Galeri Rebik's FC</h2>
        <div class="gallery-container">
            <img src="/assets/gallery1.jpg" alt="Gallery 1">
            <img src="/assets/gallery2.jpg" alt="Gallery 2">
            <img src="/assets/gallery3.jpg" alt="Gallery 3">
            <img src="/assets/gallery4.jpg" alt="Gallery 4">
            <img src="/assets/gallery5.jpg" alt="Gallery 5">
            <img src="/assets/gallery6.jpg" alt="Gallery 6">
            <img src="/assets/gallery7.jpg" alt="Gallery 7">
            <img src="/assets/gallery8.jpg" alt="Gallery 8">
        </div>
    </section>

    <!-- FOOTER SPONSOR -->
    <footer style="background-color: #071A14; padding: 40px 5% 20px; color: white; margin-top: 60px;">
        <div style="text-align: center; margin-bottom: 20px;">
            <h3 style="margin-bottom: 10px;">Didukung oleh</h3>
            <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; align-items: center;">
                <img src="/assets/sponsor1.png" alt="Sponsor 1" style="height: 50px;">
                <img src="/assets/sponsor2.png" alt="Sponsor 2" style="height: 50px;">
                <img src="/assets/sponsor3.png" alt="Sponsor 3" style="height: 50px;">
                <img src="/assets/sponsor4.png" alt="Sponsor 4" style="height: 50px;">
            </div>
        </div>

        <div
            style="border-top: 1px solid rgba(255,255,255,0.2); margin-top: 30px; padding-top: 20px; text-align: center; font-size: 14px; color: #ccc;">
            &copy; 2025 Rebik's Football Club. All rights reserved.
        </div>
    </footer>
    <!-- LIVE KOMENTAR -->
    <div class="live-comment-wrapper" id="liveKomentar">
        <h4>Komentar Langsung</h4>
        <input type="text" id="komentarInput" placeholder="Tulis komentar...">
        <button onclick="tambahKomentar()">Kirim</button>
        <div class="live-comment-list" id="daftarKomentar"></div>
    </div>
    <script>
        const komentarInput = document.getElementById('komentarInput');
        const daftarKomentar = document.getElementById('daftarKomentar');
        const liveKomentar = document.getElementById('liveKomentar');
        let komentarTerbuka = false;
        function tambahKomentar() {
            const isi = komentarInput.value.trim();
            if (isi !== '') {
                const div = document.createElement('div');
                div.className = 'live-comment-item';
                div.innerHTML = `<span>${isi}</span>`;
                daftarKomentar.prepend(div);
                komentarInput.value = '';

                const semuaKomentar = daftarKomentar.querySelectorAll('.live-comment-item');
                if (semuaKomentar.length > 5) {
                    daftarKomentar.removeChild(semuaKomentar[semuaKomentar.length - 1]);
                }
            }
        }

        komentarInput.addEventListener("keydown", function (e) {
            if (e.key === "Enter") {
                tambahKomentar();
            }
        });

        window.addEventListener('scroll', function () {
            const scrollY = window.scrollY;
            const bottomThreshold = document.documentElement.scrollHeight - window.innerHeight - 100;

            if (scrollY > bottomThreshold) {
                liveKomentar.classList.add('show');
                komentarTerbuka = true;
            } else if (komentarTerbuka && scrollY < bottomThreshold - 200) {
                liveKomentar.classList.remove('show');
                komentarTerbuka = false;
            }
        });

        function tutupKomentar() {
            liveKomentar.classList.remove('show');
            komentarTerbuka = false;
        }
    </script>
</body>

</html>