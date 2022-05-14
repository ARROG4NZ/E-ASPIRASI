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
        height: 50px;
    }

    .margin-left {
        margin-left: 30px;
    }

    .margin-left-2 {
        margin-left: 5px;
    }

    h4 {
        text-align: center;
    }

    .body-color {
        background: #E9E9E9;
    }

    p {
        text-align: center;
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
                <div class="col-2 allborder-radius-custom margin-left">
                    <h4>eASPIRASI</h4>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir top bar -->
    <!-- isi dari body -->
    <div class="row">
        <div class="col-1"></div>
        <div class="col-8 allborder-radius-custom tinggi-search-bar" id="warna">
            <p clas="align-self-center">search bar</p>
        </div>
        <div class="col-2 margin-left-2 allborder-radius-custom" id="warna">
            <P>search button</P>
        </div>

    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>