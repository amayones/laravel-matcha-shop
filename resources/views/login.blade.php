<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <cmeta http-equiv="X-UA-Compatible" content="ile=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    @include('template.nav')

    <div class="container mt-5">
        <div class="card shadow w-50 h-50 mx-auto">

            <div class="card-body">
                <h2 class="card-title text-center fw-bold text-secondary"> Log In MAY MATCHA</h2>

                <br>
                <form action="" class="form-group">

                    @csrf
                    <div class="mb-3">

                        <label for="" class="form-group">Email</label>
                        <div class="col-7 mx-auto">

                        </div>
                        <input type="email" name="email" required class="form-control">

                    </div>
                    <div class="mb-3">

                        <label for="" class="form-group">Password</label>
                        <div class="col-7 mx-auto">

                        </div>
                        <input type="password" name="password" required class="form-control">

                    </div>
                    <div class="mb-3 text-center">

                    </div>
                    <button class="btn btn-secondary">Login</button>

                    <p class="text-center">belum mempunyai akun? <a href="{{ route('register') }}">buat akun!</a></p>
                </form>

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>