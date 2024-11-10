<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .form-container h2 {
            color: #333;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .form-container label {
            color: #555;
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }
        .form-container input[type="text"] {
            width: 100%;
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }
        .form-container button {
            width: 100%;
            padding: 0.8rem;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Formulir Pengiriman Data</h2>

        <?php if(isset($_POST["submit"])): ?>
        <h3>Selamat Datang <?= $_POST["nama"];?></h3>
        <?php endif; ?>

        <form action="" method="POST">
            <label for="nama">Nama :</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
            <button type="submit" name="submit">Kirim!</button>
        </form>
    </div>
</body>
</html>
