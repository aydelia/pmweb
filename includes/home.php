<!DOCTYPE html>
<html lang="id">
<head>
    <title>Halaman Perkenalan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-width: 800px;
            text-align: center;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
        }
        .profile {
            margin: 20px 0;
        }
        p {
            color: #34495e;
            line-height: 1.6;
            margin: 10px 0;
        }
        .social-links {
            margin-top: 20px;
        }
        .social-links a {
            margin: 0 10px;
            color: #3498db;
            text-decoration: none;
        }
        .social-links a:hover {
            color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <svg width="200" height="200" viewBox="0 0 200 200">
            <!-- Wajah -->
            <circle cx="100" cy="100" r="80" fill="#FFD700"/>
            
            <!-- Mata -->
            <circle cx="70" cy="80" r="10" fill="#2c3e50"/>
            <circle cx="130" cy="80" r="10" fill="#2c3e50"/>
            
            <!-- Mulut tersenyum -->
            <path d="M60,120 Q100,160 140,120" stroke="#2c3e50" stroke-width="5" fill="none"/>
            
            <!-- Topi -->
            <path d="M40,60 L160,60 L100,10 Z" fill="#3498db"/>
        </svg>

        <h1>Halo! Saya Adelia</h1>
        
        <div class="profile">
            <p>Mahasiswi Teknik Informatika</p>
        </div>

        <div class="skills">
            <p><strong>Hobi:</strong> Coding, Membaca, Traveling</p>
        </div>

        <div class="social-links">
            <a href="#">GitHub</a>
            <a href="#">LinkedIn</a>
            <a href="#">Twitter</a>
        </div>
    </div>
</body>
</html>