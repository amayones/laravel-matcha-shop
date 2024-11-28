<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Bayar</title>
</head>
<body>

    @include('template.nav')

    <div class="container mt-5">
        <h2 class="card-title text-center fw-bold text-secondary" > PAY! | MAY MATCHA</h2>
        <hr>
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <img src="img/dounut.jpg" alt="" class="card-img-top" style="object_fit: cover; height: 150px">
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"> Matcha dounut </h2>
                        <hr>
                        <p class="card-text"> Harga : Rp.40.000</p>
                        <p class="card-text"> Jumlah : 2</p>
                        <p class="card-text"> Total Harga : Rp.80.000</p>
                        <p style="border: 1px solid gray ; padding: 5px ; border-radius: 5px" >Bukti Pembayaran</p>
                        <input type="file" name="bukti" id="" class="form-control">
                        <hr>
                        <h1 class="card-title">Deskripsi</h1>
                        <p class="card-text">wlowleolweo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>