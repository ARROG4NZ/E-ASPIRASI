<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eASPIRASI</title>
    <style>
    /* style header */
    .tinggi-top-bar {
        height: 80px;
    }

    #warna-background-header {
        background-color: #D1484D;
    }

    /* akhir style header */
    #warna {
        background-color: white;
    }

    .body-color {
        background: #E9E9E9;
    }

    .allborder-radius-custom {
        border-radius: 30px;
    }
    </style>
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
                        <input type="image" class="my-auto" src="/logo.png" style="width: 170px; height: 60px;"
                            alt="Sumbit button">
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir top bar -->
    <!-- body -->
    <div class="row gap">
        <div class="col-10 mx-auto my-3 p-3 allborder-radius-custom" id="warna">
            <h5 class="ms-3">Lorem ipsum</h5>
            <div class="row">
                <img class="ms-3 col-1" style="width: 60px; height: 40px;" src=" /profile.png" />
                <div class="col-1 my-2" style="font-size: 15px;">anonymous</div>
                <img class="col-1 ms-2" style="width: 50px; height: 30px;" src=" /date.png" />
                <div class="col-1 my-2" style="font-size: 12px;">10 hari yang lalu</div>
                <img class="col-1" style="width: 50px; height: 30px;" src=" /status.png" />
                <div class="col-1 my-2" style="font-size: 12px;">status</div>
            </div>
            <div class="ms-3 my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ab, autem quibusdam
                suscipit, eaque ut officiis facere veritatis illo inventore deleniti minus. Nihil, delectus autem
                temporibus natus architecto deserunt aspernatur?</div>
        </div>
    </div>
    <div class="row gap">
        <div class="col-6 mx-auto">
            <h3 style="text-align: center;"><b>Kode Unik</b></h3>
        </div>
    </div>
    <div class="row gap">
        <div class="col-6 mx-auto allborder-radius-custom" id="warna">
            <h1 style="text-align: center;">ASP-001</h1>
        </div>
    </div>
    <form action="<?= base_url('user/'); ?> " class="row mt-4 gap" method="post">
        <input class="col-4 mx-auto allborder-radius-custom" id="warna-background-header" type="submit" value="Selesai"
            style="height:40px; width:200px; margin-left: 45%; border: 0px;" />
    </form>
    <!-- akhir dari body -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>