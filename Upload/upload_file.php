<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated File Upload</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f4f8;
            margin: 0;
        }

        .upload-box {
            height: auto;
            width: 350px;
            padding: 40px 20px;
            text-align: center;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            
            /* Gradient Background */
            background: linear-gradient(-45deg, #a1c4fd, #c2e9fb, #d4fc79, #96e6a1);
            background-size: 400% 400%;
            
            /* Animation */
            animation: waterFlow 10s ease infinite;
            border: none;
        }

        /* Gradient Movement Animation */
        @keyframes waterFlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        input[type="file"] {
            margin-bottom: 20px;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            color: #555;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>

<div class="upload-box"> 
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="photo">
        <br>
        <input type="submit" value="Upload Now">
    </form>
</div>

</body>
</html>
