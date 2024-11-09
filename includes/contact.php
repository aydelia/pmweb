<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-color: #f5f5f5;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
        }

        .contact-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-header h1 {
            color: #2c3e50;
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .form-header p {
            color: #666;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #2c3e50;
            font-weight: 600;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .submit-btn {
            background: #3498db;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
            transition: background 0.3s ease;
        }

        .submit-btn:hover {
            background: #2980b9;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 6px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
                margin: 20px auto;
            }

            .contact-form {
                padding: 20px;
            }

            .form-header h1 {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="contact-form">
            <div class="form-header">
                <h1>Hubungi Kami</h1>
                <p>Silakan tinggalkan pesan atau saran Anda</p>
            </div>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nama = $_POST['nama'] ?? '';
                $email = $_POST['email'] ?? '';
                $subjek = $_POST['subjek'] ?? '';
                $pesan = $_POST['pesan'] ?? '';
                
                // Validasi input
                $errors = [];
                if (empty($nama)) $errors[] = "Nama harus diisi";
                if (empty($email)) $errors[] = "Email harus diisi";
                if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)) $errors[] = "Format email tidak valid";
                if (empty($pesan)) $errors[] = "Pesan harus diisi";

                if (empty($errors)) {
                    // Proses pengiriman email (contoh)
                    $to = "your-email@example.com"; // Ganti dengan email Anda
                    $headers = "From: $email\r\n";
                    $headers .= "Reply-To: $email\r\n";
                    $headers .= "X-Mailer: PHP/" . phpversion();

                    $email_content = "Nama: $nama\n";
                    $email_content .= "Email: $email\n";
                    $email_content .= "Subjek: $subjek\n\n";
                    $email_content .= "Pesan:\n$pesan";

                    // Simpan ke file (alternatif jika email tidak tersedia)
                    $timestamp = date("Y-m-d_H-i-s");
                    $filename = "pesan_" . $timestamp . ".txt";
                    file_put_contents($filename, $email_content);

                    echo "<div class='alert alert-success'>Terima kasih! Pesan Anda telah berhasil dikirim.</div>";
                } else {
                    echo "<div class='alert alert-error'>";
                    foreach ($errors as $error) {
                        echo $error . "<br>";
                    }
                    echo "</div>";
                }
            }
            ?>

            <form method="POST" action="">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda" value="<?php echo $_POST['nama'] ?? ''; ?>" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" value="<?php echo $_POST['email'] ?? ''; ?>" required>
                </div>

                <div class="form-group">
                    <label for="subjek">Subjek</label>
                    <input type="text" class="form-control" id="subjek" name="subjek" placeholder="Masukkan subjek pesan" value="<?php echo $_POST['subjek'] ?? ''; ?>">
                </div>

                <div class="form-group">
                    <label for="pesan">Pesan/Saran</label>
                    <textarea class="form-control" id="pesan" name="pesan" placeholder="Tulis pesan atau saran Anda di sini" required><?php echo $_POST['pesan'] ?? ''; ?></textarea>
                </div>

                <button type="submit" class="submit-btn">Kirim Pesan</button>
            </form>
        </div>
    </div>
</body>
</html>