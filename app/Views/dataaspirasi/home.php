<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Data Aspirasi</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container-fluid" style="padding: 0;">
        <div class="row">
            <!-- Sidear -->
            <div class="col-md-2 d-none d-md-block sidebar" style="background-color: #D1484D;">
                <div class="left-sidebar">
                    <div class="text-center" style="margin-top: 30px;">
                        <img src="profile.png" width="70px" height="70px" class="mr-2" style="border-radius: 50%;">
                        <span>Admin</span>
                    </div>
                    <hr>
                    <ul class="nav flex-column sidebar-nav" style="margin-top: 60px;">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">
                                <img src="data_aspirasi.jpg" width="20px" class="mr-2">
                                Data Aspirasi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="setting.html">
                                <img src="setting.jpg" width="20px" class="mr-2">
                                Setting
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" style="margin-top: -25px;">
            <div class="header mb-5">

                <div class="title">
                    <h3 class="font-weight-bold">Data Aspirasi</h3>
                </div>

                <div class="search">
                    Search
                    <input type="text">
                </div>

            </div>
            <!-- <hr> -->
            <div class="table-responsive">
                <table class="table rs-table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" width="80px">NO</th>
                            <th scope="col">Nama Aspirator</th>
                            <th scope="col">Isi Aspirasi</th>
                            <th scope="col" width="200px">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $angka = 1; 
                        foreach($data as $row){ ?>
                        <tr>
                            <td><?= $angka; ?> </td>
                            <td>Anonymus</td>
                            <td><?= $row['aspirasi']; ?></td>
                            <td class="text-center">
                                <button type="button" class="btn btn-edit">Edit</button>
                                <button type="button" class="btn btn-hapus">Hapus</button>
                            </td>
                        </tr>
                        <?php 
                        $angka = $angka+1;
                        } ?>
                    </tbody>
                </table>

                <nav class="mt-2">
                    <ul class="pagination justify-content-end">
                        <li class="page-item">
                            <a class="page-link page-previous" href="#" tabindex="-1">
                                <img src="previous.png" width="80%">
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link page-number" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link page-next" href="#">
                                <img src="next.png" width="80%">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </main>
        <footer>

        </footer>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>