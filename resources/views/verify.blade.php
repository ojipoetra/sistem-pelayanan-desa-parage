<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Parage | verify</title>
    <style>
        body{
            background: #e3f2fd;
        }
        .card-box{
            height: 100vh;
            transform: translate(0, -70px);
            transition: all 0.5s ease-in;
            opacity: 0;
        }

        .card-box.muncul{
            opacity: 1;
            transform: translate(0, 0);
        }
    </style>
   </head>
<body>
    <div class="d-flex justify-content-center card-box">
        <div class="bg-light rounded shadow-sm h-25 p-3 mx-4 mt-4"><i class="bi bi-envelope-open-fill text-primary "></i> Verifikasi Email <hr> Email berhasil di kirim ke alamat email anda, silahkan cek dan verifikasi email terlebih dahulu! ☺</div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

<script>
    const muncul = document.querySelector('.card-box')
    window.addEventListener('load', function () {
        muncul.classList.add('muncul')
    })
</script>
</body>
</html>
