<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Pembayaran Merchandise</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            background-color: #f2f2f2;
            text-align: center;
        }

        .navbar {
            background-color: #071A14;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .logo img {
            height: 40px;
        }

        .navbar .nav-links a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
            font-weight: bold;
        }

        .navbar .nav-links a:hover {
            color: rgb(2, 51, 31)
        }

        .confirmation-box {
            background-color: white;
            padding: 40px;
            margin: 50px auto;
            border-radius: 10px;
            width: 60%;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        .checkmark {
            font-size: 80px;
            color: #4CAF50;
            animation: pop 0.6s ease;
        }

        @keyframes pop {
            0% { transform: scale(0.5); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }

        h2 {
            color: #071A14;
        }

        @media (max-width: 768px) {
            .confirmation-box {
                width: 90%;
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <div class="navbar">
        <div class="logo">
            <img src="/assets/rebiks-logo.png" alt="Rebiks">
        </div>
        <div class="nav-links">
            <a href="/">HOME</a>
            <a href="/landing/tiket">TIKET</a>
            <a href="/landing/merchandise">MERCHANDISE</a>
        </div>
    </div>

    <!-- BOX -->
    <div class="confirmation-box">
        <div class="checkmark">✔</div>
        <h2>Pembayaran Merchandise Berhasil!</h2>
        <p>Terima kasih telah melakukan pembelian di toko resmi Rebik’s.</p>
    </div>
</body>
</html>
