<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Mata Kuliah</title>
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
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            background-color: #2c3e50;
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
        }
        
        .header-content {
            text-align: center;
        }
        
        .course-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        
        .course-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .course-card:hover {
            transform: translateY(-5px);
        }
        
        .course-header {
            border-bottom: 2px solid #eee;
            margin-bottom: 15px;
            padding-bottom: 10px;
        }
        
        .course-code {
            background-color: #3498db;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.9em;
            display: inline-block;
            margin-bottom: 10px;
        }
        
        .credits {
            background-color: #2ecc71;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.9em;
            margin-left: 10px;
        }
        
        .course-content {
            margin-top: 15px;
        }
        
        .course-details {
            margin-top: 15px;
        }
        
        .course-details h4 {
            color: #2c3e50;
            margin-bottom: 5px;
        }
        
        .course-details ul {
            list-style-position: inside;
            padding-left: 20px;
        }
        
        .semester-tag {
            background-color: #e74c3c;
            color: white;
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 0.8em;
            float: right;
        }

        @media (max-width: 768px) {
            .course-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container header-content">
            <h1>Informasi Mata Kuliah</h1>
            <p>Fakultas Teknik Informatika</p>
        </div>
    </header>

    <div class="container">
        <?php
        // Array mata kuliah
        $courses = [
            [
                'code' => 'IF-101',
                'name' => 'Pemograman Web 1',
                'credits' => 3,
                'semester' => 3,
                'description' => 'Mata kuliah ini memperkenalkan konsep-konsep dasar pemrograman di lingkungan web. HTML dan CSS diperkenalkan sebagai sarana untuk mengembangkan konten dan tampilan halaman web. Pemgrograman di sisi klien (client-side) dilakukan dengan JavaScript, sedangkan di sisi server (server-side) menggunakan PHP' ,
                'objectives'=> [
                    'Pengenalan konsep pemrograman pada client & server web',
                    'Pengenalan cara instalasi web server dan setup domain',
                    'Mampu membuat program web sederhana'
                ],
                'prerequisites' => '-'
            ],
            [
                'code' => 'IF-102',
                'name' => 'Pemrograman Orientasi Objek',
                'credits' => 3,
                'semester' => 3,
                'description' => 'Dalam sesi pembelajaran ini, memanfaatkan Visual Studio 2010 sebagai alat utama untuk mengembangkan keterampilan dalam pemrograman C# melalui pendekatan full praktikum. Selama pembelajaran ini, mahasiswa akan terlibat langsung dalam serangkaian latihan praktis yang dirancang untuk memperkuat pemahaman mengenai konsep-konsep dasar hingga lanjutan. Mulai dari pembuatan antarmuka pengguna menggunakan Form Designer, penulisan kode untuk mengimplementasikan logika bisnis, hingga debugging dan pengujian aplikasi, setiap langkah praktikum akan dipandu untuk mengaplikasikan teori secara langsung. Dengan bimbingan dan dukungan selama praktikum dari buku praktikum dan konten di Youtube, akan memperoleh keterampilan praktis yang diperlukan untuk mengembangkan aplikasi desktop berbasis C# secara efektif',
                'objectives' => [
                    'Mahasiswa akan mampu merancang dan mengembangkan aplikasi desktop yang fungsional menggunakan C# dengan antarmuka pengguna yang intuitif',
                    'Mahasiswa akan menguasai konsep dasar C#, termasuk struktur program, variabel, tipe data, operator, dan kontrol alur program untuk menyusun solusi pemrograman yang efektif',
                    'Mahasiswa akan dapat menerapkan prinsip-prinsip pemrograman berbasis objek seperti enkapsulasi, pewarisan, dan polimorfisme dalam pengembangan aplikasi'
                ],
                'prerequisites' => '-'
            ],
            [
                'code' => 'IF-103',
                'name' => 'Pemrograman Mobile',
                'credits' => 3,
                'semester' => 3,
                'description' => 'Matakuliah Pemrograman Mobile 1 adalah matakuliah yang mempelajari tentang konsep, teknik pemrograman tahap pertama dalam menguasai dasar-dasar pemrograman mobile terutama pemrograman android. Cakupan pembahasan meliputi konsep arsitektur pemrograman mobile (Android), konstruksi pemrograman android, dan pemrograman dasar android. Matakuliah ini mengajarkan mahasiswa mengenai karakteristik perangkat mobile dan mahasiswa mampu mendesain aplikasi dengan user experience dengan baik pada perangkat mobile',
                'objectives' => [
                    'Mampu menjelaskan konsep Pemrograman Mobile 1 , serta mampu membuat aplikasi sederhana berbasis pemrograman mobile terutama pemrograman android',
                    'Mampu merancang memodelkan, menganalisis perangkat bergerak dengan kreativitas yang baik',
                    'Memiliki karakteristik programmer yang baik dengan mampu melaksanakan penugasan dengan baik dan tepat waktu'
                ],
                'prerequisites' => '-'
            ]
        ];

        echo '<div class="course-grid">';
        foreach ($courses as $course) {
            echo '<div class="course-card">
                    <div class="course-header">
                        <span class="course-code">' . $course['code'] . '</span>
                        <span class="credits">' . $course['credits'] . ' SKS</span>
                        <span class="semester-tag">Semester ' . $course['semester'] . '</span>
                        <h2>' . $course['name'] . '</h2>
                    </div>
                    <div class="course-content">
                        <p>' . $course['description'] . '</p>
                        <div class="course-details">
                            <h4>Tujuan Pembelajaran:</h4>
                            <ul>';
            foreach ($course['objectives'] as $objective) {
                echo '<li>' . $objective . '</li>';
            }
            echo '</ul>
                            <h4>Prasyarat:</h4>
                            <p>' . $course['prerequisites'] . '</p>
                        </div>
                    </div>
                </div>';
        }
        echo '</div>';
        ?>
    </div>
</body>
</html>