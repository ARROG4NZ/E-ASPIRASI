<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:600,700">

    <style>
body {
    background-image: url('public/Group 37.png');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

h1 {
  font-family: Poppins, sans-serif;
  font-size: 36px;
  color: #D1484D;
  font-style: normal;
  font-weight: bold;
}

input {
  width: 300px;
  margin: 0px 10px 10px 0px;
  margin-left: 100px;
}

p {
  margin: 0px;
  margin-left: 100px;
}

p {
  margin: 0px;
  margin-left: 100px;
}

input {
  margin: 0px 10px 10px 0px;
  width: 300px;
  margin-left: 100px;
}

img {
  border-width: 170px;
  width: 170px;
  margin: 66px;
  padding: 1px;
}

h1 {
  margin: 0px;
  margin-left: 0px;
  height: 63.33329999999999px;
}

p {
  font-family: Poppins, sans-serif;
  font-weight: normal;
  font-size: 15px;
  margin-left: 0px;
}

p {
  font-family: Poppins, sans-serif;
  font-weight: normal;
  font-size: 15px;
  margin-left: 0px;
}

input {
  margin-left: 0px;
}

input {
  margin-left: 0px;
}

button{
    border-radius: 20px;
    font-family: Poppins, sans-serif;
    color: white;
    background-color: #D1484D;
    width: 104.4271px;
    height: 35px;
    margin: 0px;
    padding: 0px 12px;
    margin-left: 0px;
    border: none;
}

.button:hover {
  background: #91272b;
}

.row{
    padding: 200px 50px;
}

    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center align-content-center" style="background: #ffffff;border-top-left-radius: 30px;border-bottom-left-radius: 30px;height: 300px;padding: 20px;">
                <div class="justify-content-center align-items-center align-content-center align-self-center" style="height: 263.667px;margin-left: 0px;padding-top: 10px;width: 334px;">
                <form method="POST" action="<?= base_url('login/process'); ?>">
                    <h1>Selamat Datang</h1>
                    <p>Username</p><input type="username" name="username" id="username" placeholder="Masukkan username" class="form-control" required autofocus>
                    <p>Password</p><input type="password" name="password" id="password" placeholder="Masukkan password" class="form-control" required>
                    <button class="button" type="submit">Login</button>
                </form>
                <?php if (!empty(session()->getFlashdata('gagal'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                 <?php echo session()->getFlashdata('gagal'); ?>
                  </div>
                <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center align-content-center" style="background: #F5CCCD;border-top-right-radius: 30px;border-bottom-right-radius: 30px;">
                <div class="justify-content-center align-items-center align-content-center align-self-center" style="height: 219.333px;"><img class="d-xl-flex justify-content-center align-items-center justify-content-xl-start align-items-xl-start" src="public/Group%2036.png" width="170px"></div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>