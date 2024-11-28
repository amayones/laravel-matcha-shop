<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Keranjang</title>
</head>
<body>
    @include('template.nav')
    
    <div class="container mt-5">
        <h2 class="card-title text-center fw-bold text-secondary"> KERANJANG | MAY MATCHA</h2>
        <hr>
        <div class="card shadow">
            <div class="row">
                <div class="col-2">
                    <div class="card-body">
                        <img src="img/dounut.jpg" alt="" class="card-img-top" style="object_fit: cover; height: 80px">
                    </div>
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h3 class="card-title fw-bold">Matcha dounut</h3>
                        <p class="card-text">Harga : Rp. 40.000</p>
                        <p class="card-text">Jumlah : 2</p>
                        <p class="card-text">Total Harga : Rp. 80.000</p>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card-body">
                        <a href="{{ route('bayar') }}" class="btn btn-secondary">Bayar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>