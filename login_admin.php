<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Admin</title>
    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- Style Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <!-- Style Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <div class="container">
      <form class="align-self-center" method="POST" action="">
        <img src="anu.png" alt="" class="logo" />
        <h3>ADMIN PANEL</h3>
        <h6>Control Panel Login</h6>
        <div class="input-group user">
          <span class="input-group-text"><i data-feather="user"></i></span>
          <input
            type="text"
            placeholder="Username"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
            name="username"
          />
          <br /><br /><br />
        </div>
        <div class="input-group pass">
          <span class="input-group-text"><i data-feather="lock"></i></span>
          <input
            type="password"
            placeholder="Password"
            class="form-control"
            id="exampleInputPassword1"
            name="password"
          />
        </div>

        <button type="submit" class="btn">
          <a href="http://localhost/toraja_wanderlust/admin/admin.php" style="text-decoration: none; color:white">Login</a>
        </button>
        <br /><br /><br />
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1440 320"
          class="gelombang3"
        >
          <path
            fill="rgb(129, 163, 255)"
            fill-opacity="1"
            d="M0,256L34.3,245.3C68.6,235,137,213,206,224C274.3,235,343,277,411,266.7C480,256,549,192,617,170.7C685.7,149,754,171,823,176C891.4,181,960,171,1029,144C1097.1,117,1166,75,1234,90.7C1302.9,107,1371,181,1406,218.7L1440,256L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
          ></path>
        </svg>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1440 320"
          class="gelombang2"
        >
          <path
            fill="rgb(129, 163, 255)"
            fill-opacity="1"
            d="M0,64L34.3,85.3C68.6,107,137,149,206,154.7C274.3,160,343,128,411,133.3C480,139,549,181,617,186.7C685.7,192,754,160,823,165.3C891.4,171,960,213,1029,208C1097.1,203,1166,149,1234,133.3C1302.9,117,1371,139,1406,149.3L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
          ></path>
        </svg>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1440 320"
          class="gelombang"
        >
          <path
            fill="#6796db"
            fill-opacity="1"
            d="M0,256L34.3,261.3C68.6,267,137,277,206,266.7C274.3,256,343,224,411,213.3C480,203,549,213,617,213.3C685.7,213,754,203,823,165.3C891.4,128,960,64,1029,42.7C1097.1,21,1166,43,1234,74.7C1302.9,107,1371,149,1406,170.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
          ></path>
        </svg>
      </form>
    </div>

    <!-- Script Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
      integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
      integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
      crossorigin="anonymous"
    ></script>

    <!-- Script Feather Icons -->
    <script>
      feather.replace();
    </script>
  </body>
</html>
