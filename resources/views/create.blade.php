<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New User - Tech Theme</title>
    <style>

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #e9ecef;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
     
        .container {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 400px;
            width: 100%;
            transition: all 0.3s ease;
        }
        .container:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #007bff;
            font-size: 24px;
            margin-bottom: 30px;
        }
      
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 8px;
            color: #555;
            font-size: 14px;
        }
        input, select {
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            font-size: 16px;
            transition: all 0.2s ease;
            appearance: none;
        }
        input:focus, select:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }
        button {
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
            transform: scale(1.02);
        }
   
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 20px;
            display: none;
        }

        .tech-icon {
            text-align: center;
            margin-bottom: 20px;
        }
        .tech-icon img {
            width: 50px;
            transition: transform 0.3s ease;
        }
        .tech-icon img:hover {
            transform: rotate(10deg);
        }

        .footer {
            text-align: center;
            font-size: 12px;
            margin-top: 20px;
            color: #888;
        }
        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="tech-icon">
            <img src="https://cdn-icons-png.flaticon.com/512/1055/1055687.png" alt="Tech Icon">
        </div>
        <h1>Create New User</h1>
        
        <div class="error" id="error-message"></div>
        
        <form id="userForm" action="{{ route('user.store') }}" method="POST" autocomplete="off">
            @csrf
            <label for="nama">Name:</label>
            <input type="text" id="nama" name="nama" placeholder="Enter your name" required minlength="3" autocomplete="name">
            
            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" placeholder="Enter your NPM" required pattern="[0-9]{10}" title="NPM must be 10 digits" autocomplete="off">
            
            <label for="kelas_id">Class:</label>
            <select name="kelas_id" id="kelas_id" required>
                <option value="" disabled selected>Select your class</option>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>
            
            <button type="submit">Submit</button>
        </form>

        <div class="footer">
            <p></p>
        </div>
    </div>

</body>
</html>
