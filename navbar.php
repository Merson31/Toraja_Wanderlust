<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar</title>
    <!-- Style Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <style>
      nav {
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        height: 100px;
      }

      nav .container-fluid a img {
        width: 80px;
      }

      nav .container-fluid a h3 {
        text-align: center;
      }

      nav .container-fluid a {
        display: flex;
        justify-content: space-between;
        color: #fff;
      }

      .navbar .navbar-nav .nav-link {
        color: white;
      }
    </style>

    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" style="margin-left: 120px">
          <img src="anu.png" alt="logo" />
          <h3>
            Toraja <br />
            Wanderlust
          </h3>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse d-flex justify-content-end"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav" style="margin-right: 120px">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="home_page.php"
                style="color: #fff; font-weight: bold"
                >BERANDA</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="wisata.php"
                style="color: #fff; font-weight: bold"
                >OBJEK WISATA</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="restoran.php"
                style="color: #fff; font-weight: bold"
                >RESTORAN</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="hotel.php"
                style="color: #fff; font-weight: bold"
                >PENGINAPAN</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </body>
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
</html>
