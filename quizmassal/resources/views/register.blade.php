<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <title>Landing Page</title>
</head>

<body>
    <div id="content-wrapper" class="d-flex flex-column">
        <nav class="navbar navbar-expand-lg navbar-light bg-light atas" style="background-color: #ffff !important; margin-bottom: 10px;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img class="logobpr" src="{{asset('public/icon/logo_kecil.png')}}"></a>
                <img class="logoanaknegeri" src="{{asset('public/icon/anaknegeri.png')}}">
            </div>
        </nav>
        <div style=" margin-top: 50px;">
            <form class="row g-3" method="post" action="{{route('register-proses')}}" enctype="multipart/form-data">
                @csrf
                <div class="row mt-5" style="margin: auto;">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Nama Lengkap" style="width: 300px; margin: auto;">
                </div>
                <br>
                <div class="row" style="margin: auto;">
                    <label for="nama" class="visually-hidden">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" style="width: 300px; margin: auto;">
                </div>
                <div class="row mt-1" style="margin: auto;">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Cabang" style="width: 300px; margin: auto;">
                </div>
                <div class="row" style="margin: auto;">
                    <label for="cabang" class="visually-hidden">Cabang</label>
                    <select class="form-select" aria-label="Default select example" style="width: 300px; margin: auto;" name="cabang">
                        <option selected>Pilih Cabang</option>
                        <option value="jember">Jember</option>
                        <option value="ambulu">Ambulu</option>
                        <option value="lumajang">Lumajang</option>
                        <option value="banyuwangi">Banyuwangi</option>
                        <option value="bondowoso">Bondowoso</option>
                    </select>
                </div>
                <div class="row mt-1" style="margin: auto;">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Jabatan" style="width: 300px; margin: auto;">
                </div>
                <br>
                <div class="row" style="margin: auto;">
                    <label for="jabatan" class="visually-hidden">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" placeholder="Jabatan" name="jabatan" style="width: 300px; margin: auto;">
                </div>
                <div class="row mt-1" style="margin: auto;">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Foto" style="width: 300px; margin: auto;">
                </div>
                <br>
                <div class="row" style="margin: auto;">
                    <label for="jabatan" class="visually-hidden">Foto</label>
                    <input type="file" class="form-control" accept="image/*" capture="camera" name="foto" id="cameraInput" style="width: 300px; margin: auto;">
                </div>
                <div class="row mt-3" style="margin: auto;">
                    <button type="submit" class="btn btn-primary mb-3" style="width: 300px; margin: auto;">Mulai Quiz</button>
                </div>
            </form>
        </div>
        <div>
            <footer style="text-align:center; margin-top: 20px">
                <span style="text-align:center;">PT BPR Cinde Wilis @2023</span>
            </footer>
        </div>
    </div>
    <script src="{{asset('public/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
    <script>
        function cekUser() {
            $.ajax({
                type: "GET",
                url: "/quizmassal/cekuser",
                success: function(response) {
                    console.log(response);
                    if (response.user == 1) {
                        window.location.href = '/quizmassal/soal';
                    }
                    setTimeout(function() {
                        cekUser();
                    }, 1000);
                }
            });
        }

        $(document).ready(function() {
            cekUser();
        });
    </script>
</body>

</html>