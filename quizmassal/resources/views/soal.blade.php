<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/style.css') }}">
    <title>Soal</title>
    <style>
        /* Gaya CSS untuk tampilan kuis */
        .quiz-container {
            max-width: 90%;
            margin: 0 auto;
            margin-top: 10%;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .pilihan-container {
            max-width: 90%;
            margin: 0 auto;
            margin-top: 1%;
            padding: 20px;
            padding-bottom: 5%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .quiz-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .option-box {
            display: inline-block;
            width: 45%;
            /* Sesuaikan dengan jumlah pilihan ganda yang diinginkan */
            margin: 2%;
            padding: 4%;
            border: 2px solid #333;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            /* Efek perubahan warna saat hover */
        }

        /* Style radio buttons */
        .option-box input[type="radio"] {
            display: none;
            /* Sembunyikan tombol radio default */
        }

        /* Style option labels */
        .option-label {
            display: block;
            height: auto;
            /* Tinggi otomatis untuk label */
            white-space: normal;
            /* Setel kembali white-space ke normal */
        }

        /* Efek hover */
        .option-box:hover {
            /* background-color: #007bff; */
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="quiz-container">
        <div class="quiz-header">
            <h1>Apa ibu kota Indonesia?</h1>
        </div>
    </div>
    <div class="pilihan-container col m-auto" style="text-align: center;">
    <div class="col-12">
        <div class="option-box" style="background-color: red;">
            <label>
                <input type="radio" name="pertanyaan1" value="pilihan1"> Pilihan 1
            </label>
        </div>
        <div class="option-box" style="background-color: blue;">
            <label>
                <input type="radio" name="pertanyaan1" value="pilihan2"> Pilihan 2
            </label>
        </div>
    </div>
    <div class="col-12">
        <div class="option-box" style="background-color: yellow;">
            <label>
                <input type="radio" name="pertanyaan1" value="pilihan1"> Pilihan 3
            </label>
        </div>
        <div class="option-box" style="background-color: green;">
            <label>
                <input type="radio" name="pertanyaan1" value="pilihan2"> Pilihan 4
            </label>
        </div>
    </div>
    </div>





    <script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
</body>

</html>