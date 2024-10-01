<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5); 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .profile-container {
            background: linear-gradient(145deg, #ffffff, #f0f0f0);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            padding: 40px;
            max-width: 400px;
            width: 100%;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .profile-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: rgba(255, 255, 255, 0.05);
            pointer-events: none;
            transform: rotate(45deg);
            animation: light-glow 5s infinite linear;
        }

        @keyframes light-glow {
            0% { transform: translateX(-100%) rotate(45deg); }
            100% { transform: translateX(200%) rotate(45deg); }
        }

        .profile-container:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .profile-container img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 5px solid #74ebd5;
            margin-bottom: 20px;
            transition: transform 0.3s ease, border-color 0.3s ease;
            object-fit: cover;
        }

        .profile-container:hover img {
            transform: scale(1.1);
            border-color: #ACB6E5; /* Gradasi warna lebih terang */
        }

        .profile-container .info {
            background-color: #f8f9fa;
            margin: 20px 0;
            padding: 12px;
            border-radius: 12px;
            font-size: 18px;
            color: #333;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .profile-container .info:hover {
            background-color: #74ebd5; 
            color: white;
        }

        .profile-container .info span {
            font-weight: 500;
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            margin-top: 20px;
            color: #888;
        }
    </style>
</head>
<body>

<div class="profile-container">
    <img src="{{ asset('image/ridho.jpeg') }}" alt="Profile Picture">
    <div class="info">
        <span>Nama:</span> {{ $nama }}
    </div>
    <div class="info">
        <span>Kelas:</span> {{ $nama_kelas }}
    </div>
    <div class="info">
        <span>NPM:</span> {{ $npm }}
    </div>
</div>


</body>
</html>
