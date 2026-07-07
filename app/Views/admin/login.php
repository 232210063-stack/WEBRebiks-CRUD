<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* RESET */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background-image: url('/assets/bg-login.jpg'); /* opsional background */
            background-color: #071A14;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 40px;
            padding: 20px;
        }

        .logo-container {
            text-align: center;
            flex: 1;
            min-width: 250px;
        }

        .logo-container img {
            max-width: 300px;
            width: 100%;
            filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.2));
        }

        .form-container {
            backdrop-filter: blur(12px);
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 40px 30px;
            width: 100%;
            max-width: 400px;
            color: white;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 24px;
            color: white;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
            color: white;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #d92027;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #a11417;
        }

        .error {
            color: #ff4d4d;
            font-size: 0.9em;
            text-align: center;
            margin-bottom: 15px;
        }

        @media (max-width: 768px) {
            .logo-container img {
                max-width: 200px;
            }

            .form-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- LOGO -->
        <div class="logo-container">
            <img src="/assets/rebiks-logo.png" alt="Rebik's FC Logo">
        </div>

        <!-- FORM -->
        <div class="form-container">
            <h2>Rebik’s Admin Login</h2>

            <?php if (session()->getFlashdata('error')): ?>
                <p class="error"><?= session()->getFlashdata('error') ?></p>
            <?php endif; ?>

            <form action="/login" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Masukkan Username" required>

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Masukkan Password" required>

                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
