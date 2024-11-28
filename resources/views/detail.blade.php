<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Detail</title>
</head>
<body>
    @include('template.nav')

    <div class="container mt-5">
        <h2 class="card-title text-center fw-bold text-secondary"> DETAIL PRODUK | MAY MATCHA</h2>
        <hr>
        <div class="row">
            <div class="col-4">
                <div class="card shadow">
                    <div class="card-body">
                        <img src="{{ asset($produk->foto) }}" alt="" class="card-img-top" style="object-fit: cover; height:200px">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title fw-bold">{{ $produk->nama }}</h3>
                        <p class="card-text">Rp. {{ $produk->harga }}</p>
                        <input type="number" name="qty" required class="form-control">
                        <hr>
                        <h3 class="card-title fw-bold">Keterangan :</h3>
                        <p class="card-text">{{ $produk->keterangan }}</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title fw-bold">Kategori : Dessert</h3>
                        <button class="btn btn-secondary">Beli</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
