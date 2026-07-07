<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Merchandise</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #071A14;
            background-image: url('/assets/bg-merch.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .form-wrapper {
            width: 100%;
            max-width: 480px;
            padding: 35px;
            border-radius: 16px;
            background-color: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(15px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            color: white;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: white;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
            color: white;
        }

        input[type="text"],
        input[type="number"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: none;
            background-color: rgba(255, 255, 255, 0.15);
            color: white;
        }

        textarea {
            resize: vertical;
        }

        input::placeholder,
        textarea::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        p {
            font-size: 14px;
            margin-top: 8px;
            color: #dcdcdc;
        }

        button {
            margin-top: 25px;
            padding: 12px;
            width: 100%;
            background-color: #d92027;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #a11417;
        }

        .btn-kembali {
            background-color: transparent;
            border: 2px solid white;
            color: white;
            margin-top: 15px;
        }

        .btn-kembali:hover {
            background-color: white;
            color: #071A14;
        }

        @media (max-width: 600px) {
            .form-wrapper {
                padding: 25px 20px;
            }
        }
    </style>
</head>
<body>

<div class="form-wrapper">
    <h2>Edit Merchandise</h2>
    <form action="/admin/merchandise/update/<?= $item['id'] ?>" method="post" enctype="multipart/form-data">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $item['nama'] ?>" placeholder="Nama merchandise...">

        <label>Deskripsi:</label>
        <textarea name="deskripsi" rows="3" placeholder="Deskripsi..."><?= $item['deskripsi'] ?></textarea>

        <label>Harga:</label>
        <input type="number" name="harga" value="<?= $item['harga'] ?>" placeholder="Harga...">

        <label>Stok:</label>
        <input type="number" name="stok" value="<?= $item['stok'] ?>" placeholder="Stok...">

        <label>Gambar:</label>
        <input type="file" name="gambar">

        <?php if (!empty($item['gambar'])): ?>
            <p>Gambar saat ini: <strong><?= $item['gambar'] ?></strong> ✅</p>
        <?php else: ?>
            <p>Belum ada gambar ❌</p>
        <?php endif ?>

        <button type="submit">Update</button>
    </form>

    <form action="/admin/merchandise" method="get">
        <button type="submit" class="btn-kembali">Kembali</button>
    </form>
</div>

</body>
</html>
