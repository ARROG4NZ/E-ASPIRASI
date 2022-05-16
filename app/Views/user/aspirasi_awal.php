<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eASPIRASI</title>
    <style>
    #warna-background-header {
        background-color: #D1484D;
    }

    #warna {
        background-color: white;
    }

    .allborder-radius-custom {
        border-radius: 30px;
    }

    .tinggi-top-bar {
        height: 80px;
    }

    .tinggi-search-bar {
        height: 40px;
    }

    .margin-left {
        margin-left: 30px;
    }

    .margin-left-2 {
        margin-left: 5px;
    }

    .margin-body {
        margin: 35px 0px 10px 0px;
    }

    .body-color {
        background: #E9E9E9;
    }

    .image-size {
        width: 50px;
        height: 50px;
    }

    h4 {
        text-align: center;
    }

    p {
        text-align: center;
    }

    input {
        border: 0px;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

</head>

<body class="body-color">
    <!-- awal top bar -->

    <nav id="warna-background-header">
        <div class="container-fluid">
            <div class="row align-items-center tinggi-top-bar">
                <div class="col-2 allborder-radius-custom" style=" margin-left: 8%;">
                    <form method="post" action="<?= base_url('user/') ?>">
                        <input type="image" src="/logo.png" style="width: 170px; height: 60px;" alt="Sumbit button">
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir top bar -->
    <!-- isi dari body -->
    <!-- search bar -->
    <div class="row margin-body gap">
        <form action="<?= base_url('user/aspirasi_proses') ?> " class="row py-2 mt-4" method="post">
            <div class="col-1"></div>
            <input class="col-8 mt-4 ms-3 allborder-radius-custom tinggi-search-bar" id="warna" type="text"
                placeholder="Cari aspirasi" name="cari_keywoard" />
            <input class=" col-2 mt-4 ms-3 py-2 allborder-radius-custom tinggi-search-bar" id="warna" type="submit"
                value="Cari" />
        </form>
    </div>
    <!-- akhir search bar -->
    <!-- akhir dari body -->
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>