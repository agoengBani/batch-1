<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Register</title>
  <style>
    body {
      background: url('image/esurat-background.jpeg');
      font-family: Arial, sans-serif;
    }

    form {
      width: 320px;
      background: white;
      margin: 60px auto;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
      margin-bottom: 20px;
    }


    label {
      display: block;
      margin-bottom: 10px;
      font-size: 14px;
    }


    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      font-size: 14px;
      /* margin-bottom: 15px; */
      border: 1px solid #bbb;
      border-radius: 4px;
      box-sizing: border-box;
    }

    /* Tombol (tanpa class) */
    button {
      width: 100%;
      padding: 9px;
      color: white;
      background: #0073e6;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 15px;
    }

    button:hover {
      background: #005bb5;
    }


    p {
      margin-top: 15px;
      font-size: 14px;
    }

    .text-danger {
      color: red;
    }
  </style>
</head>

<body>

  <form action="proses/registrasi.php" method="post">
    <h2>Registrasi</h2>

    <label style="margin-top: 15px;">Nama</label>
    <input type="text" name="nama" placeholder="Nama">
    <?php if ($_SESSION['msg']['nama']) { ?>
      <label class="text-danger"> <?= $_SESSION['msg']['nama']; ?> </label>
    <?php } ?>

    <label style="margin-top: 15px;">Alamat</label>
    <input type="text" name="alamat" placeholder="Alamat">
    <?php if ($_SESSION['msg']['alamat']) { ?>
      <label class="text-danger"> <?= $_SESSION['msg']['alamat']; ?> </label>
    <?php } ?>

    <label style="margin-top: 15px;">Email</label>
    <input type="email" name="email" placeholder="Email">
    <?php if ($_SESSION['msg']['email']) { ?>
      <label class="text-danger"> <?= $_SESSION['msg']['email']; ?> </label>
    <?php } ?>

    <label style="margin-top: 15px;">Password</label>
    <input type="password" name="password" placeholder="Password">
    <?php if ($_SESSION['msg']['password']) { ?>
      <label class="text-danger"> <?= $_SESSION['msg']['password']; ?> </label>
    <?php } ?>

    <label style="margin-top: 15px;">Konfirmasi Password</label>
    <input type="password" name="konfirmasi_password" placeholder="Konfirmasi Password">
    <?php if ($_SESSION['msg']['konfirmasi']) { ?>
      <label class="text-danger"> <?= $_SESSION['msg']['konfirmasi']; ?> </label>
    <?php } else { ?>
      <label class="text-danger"> <?= $_SESSION['msg']['not-konfirmasi']; ?> </label>
    <?php } ?>

    <button type="submit" style="margin-top: 15px;">Daftar</button>

    <p>Sudah Punya Akun? <a href="login.php">Login</a></p>
  </form>

</body>

</html>

<?php session_unset() ?>