<!DOCTYPE html>
<html lang="en" style="font-family: Arial">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
</head>

<body
  style="
      background: url('image/esurat-background.jpeg');
      background-repeat: no-repeat;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 97vh;
    ">
  <div
    style="
        display: flex;
        flex-direction: column;
        width: 20em;
        padding: 30px;
        background-color: #fff;
        border-radius: 5px;
      ">
    <div style="text-align: center">
      <img src="image/logo_itbriaupesisir.png" alt="" width="100" />
    </div>

    <h2>Silahkan Login</h2>

    <label for="">Email</label>
    <input
      type="text"
      style="padding: 5px; margin-bottom: 10px; box-sizing: border-box"
      placeholder="Email" />

    <label for="">Password</label>
    <input
      type="password"
      style="padding: 5px; margin-bottom: 10px; box-sizing: border-box"
      placeholder="Password" />

    <a
      href="dashboard.html"
      style="
          color: white;
          text-decoration: none;
          padding: 5px;
          background-color: #0073e6;
          border: none;
          border-radius: 2px;
          cursor: pointer;
          text-align: center;
        ">
      Login
    </a>

    <p>Belum Punya Akun? Silahkan <a href="registrasi.php">Registrasi</a></p>
  </div>
</body>

</html>