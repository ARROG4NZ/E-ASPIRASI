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
    .tinggi-name-bar {
        height: 40px;
    }

    .allborder-radius-custom {
        border-radius: 30px;
    }

    .body-color {
        background: #E9E9E9;
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
                        <input type="image" class="my-auto" src="/logo.png" style="width: 170px; height: 60px;"
                            alt="Sumbit button">
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir top bar -->
    <!-- isi dari body -->
    <div class="row gap">
        <form action="<?= base_url('user/setelah_membuat'); ?> " class="row mt-4" method="post">
            <label style="margin-left:8%;"><b>Nama</b></label>
            <input class="col-10 py-2 mt-3 mx-auto allborder-radius-custom tinggi-name-bar" id="warna" type="text"
                placeholder="Annonymus" name="nama" style="border: 0px;" />
            <label class="mt-2" style="margin-left:8%;"><b>Aspirasi</b></label>
            <textarea class="col-10 py-2 mt-3 mx-auto allborder-radius-custom" id="warna" type="text"
                placeholder="aspirasi" name="aspirasi" style="border: 0px; height: 180px;"></textarea>
            <div class="form-group">
                <input class="mt-4 allborder-radius-custom" id="warna-background-header" type="submit" value="Cari"
                    style="height:40px; width:200px; margin-left: 45%; border: 0px;" />
            </div>

        </form>
    </div>
    <!-- akhir dari body -->
</body>

</html>