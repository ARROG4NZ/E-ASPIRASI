<!DOCTYPE html>
<html lang="en">

<head>
    <title>eASPIRASI</title>
    <style>
    body {
        background: linear-gradient(45deg, rgba(149, 28, 33, 0.69), #D1484D);
        min-height: 100%;
    }

    #warna {
        background-color: white;
    }

    #warna2 {
        background-color: #F5CCCD;
    }

    #warna3 {
        color: #D1484D;
    }

    #warna4 {
        background-color: #D1484D;
    }

    .allborder-radius-custom {
        border-radius: 30px;
    }

    .border-custom-left {
        border-bottom-left-radius: 30px;
        border-top-left-radius: 30px;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
    }

    .border-custom-right {
        border-top-right-radius: 30px;
        border-top-left-radius: 0px;
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 30px;
    }

    .margin-left-panel {
        margin: 35px 0px 75px 0px;
    }

    .margin-right-panel {
        margin: 185px 0px 185px 0px
    }

    .container-custom {
        text-align: center;
    }

    .my-auto {
        margin-top: auto;
        margin-bottom: auto;
    }

    button {
        border-color: #D1484D;
        border-width: 0px;
    }

    h3 {
        font-family: 'Poppins', sans-serif;
    }

    h4 {
        color: white;
        font-family: 'Poppins', sans-serif;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

</head>

<body>
    <div class="jumbotron d-flex align-items-center min-vh-100">
        <div class="container text-center">
            <div class="row justify-content-center align-items-center">
                <div class="col-5 border-custom-left" id="warna">
                    <div class="card-body">
                        <div class="container margin-left-panel">
                            <h3 id="warna3">Selamat Datang</h3>
                        </div>
                        <div class="col-6 col-centered container margin-left-panel allborder-radius-custom" id="warna4">
                            <form method="post" action="<?= base_url('user/membuat_aspirasi'); ?>">
                                <button type="sumbit" class="allborder-radius-custom" id="warna4">
                                    <h4>Membuat Aspirasi</h4>
                                </button>
                            </form>
                        </div>
                        <div class=" col-6 col-centered container margin-left-panel allborder-radius-custom"
                            id="warna4">
                            <form method="post" action="<?= base_url('user/aspirasi'); ?>">
                                <button type="sumbit" class="allborder-radius-custom" id="warna4">
                                    <h4>Melihat Aspirasi</h4>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=" col-5 border-custom-right" id="warna2">
                    <div class="card-body">
                        <div class="container">
                            <div class="col-6 col-centered container margin-right-panel allborder-radius-custom">
                                <img src="/logo.png" style="width: 170px; height: 60px;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>