<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="text-center mt-5">
        <h2>Registrasi</h2>
        <p>silahkan registrasi</p>

        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="card ">
                    <div class="card-body text-start">
                        <form action="{{route('registrasi.submit')}}" method="post">
                            @csrf
                            <label>Nama Lengkap</label>
                            <input type="text" name="name" class="form-control mb-2">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control mb-2">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control mb-2">
                            <button class="btn btn-primary"> Submit Registrasi</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>