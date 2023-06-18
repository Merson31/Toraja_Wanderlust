<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toraja Wanderlust</title>
    <!-- Style CSS -->
    <link rel="stylesheet" href="style1.css" />
    <!-- Style Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/a59b9b09ab.js"
      crossorigin="anonymous"
    ></script>
    <link rel="icon" href="2.jpeg" />
  </head>
  <body>
    <!-- Navbar Section -->
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
    <!-- End Navbar Section -->

    <!-- Carousel Section -->
    <header id="home" style="overflow: hidden">
      <div class="overlay"></div>
      <video autoplay muted loop>
        <source src="hehe.mp4" type="video/mp4" />
      </video>
    </header>
    <!-- Carousel Section End -->

    <!-- Deskripsi Web -->

    <!-- Deskripsi Web End -->

    <br /><br />

    <!-- Body Section -->
    <div class="container">
      <div class="tourist">
        <h3>5 Rekomendasi Objek Wisata Terbaik di Toraja</h3>
        <div class="position-relative">
          <div class="position-absolute top-0 start-0">
            <p>My trip My adventure in 2023</p>
          </div>
          <div class="position-absolute top-0 end-0">
            <button
              type="button"
              class="btn"
              style="
                color: blue;
                font-weight: bold;
                border-color: blue;
                border-radius: 60px;
              "
            >
              <a href="wisata.php">View All</a>
            </button>
          </div>
        </div>
      </div>
      <br /><br />
      <div class="main-scroll-div">
        <div>
          <button class="icon" onclick="scrollr1()">
            <i class="fas fa-angle-double-left"></i>
          </button>
        </div>
        <div class="cover">
          <div class="scroll-images">
            <div class="child">
              <div class="text-overlay">Ke'te' Kesu</div>
              <a href="http://localhost/toraja_wanderlust/tampilwisata.php?id=2"
                ><img class="child-img" src="images/wisata.jpg" alt="image"
              /></a>
            </div>
            <div class="child">
              <div class="text-overlay">Londa</div>
              <a href="http://localhost/toraja_wanderlust/tampilwisata.php?id=3"
                ><img class="child-img" src="images/wisata1.jpg" alt="image"
              /></a>
            </div>
            <div class="child">
              <div class="text-overlay">Kalimbuang Bori</div>
              <a href="http://localhost/toraja_wanderlust/tampilwisata.php?id=4"
                ><img
                  class="child-img"
                  src="images/kalimbuang bori.jpg"
                  alt="image"
              /></a>
            </div>
            <div class="child">
              <div class="text-overlay">Ollon</div>
              <a href="http://localhost/toraja_wanderlust/tampilwisata.php?id=5"
                ><img class="child-img" src="images/ollon.jpg" alt="image"
              /></a>
            </div>
            <div class="child">
              <div class="text-overlay">Museum Ne' Gandeng</div>
              <a href="http://localhost/toraja_wanderlust/tampilwisata.php?id=6"
                ><img class="child-img" src="images/museum.jpg" alt="image"
              /></a>
            </div>
          </div>
        </div>
        <div>
          <button class="icon" onclick="scrolll1()">
            <i class="fas fa-angle-double-right"></i>
          </button>
        </div>
      </div>

      <br /><br />
      <div class="restaurant">
        <h3>5 Rekomendasi Restoran Terbaik di Toraja</h3>
        <div class="position-relative">
          <div class="position-absolute top-0 start-0">
            <p>My trip My adventure in 2023</p>
          </div>
          <div class="position-absolute top-0 end-0">
            <button
              type="button"
              class="btn"
              style="
                color: blue;
                font-weight: bold;
                border-color: blue;
                border-radius: 60px;
              "
            >
              <a href="restoran.php"> View All</a>
            </button>
          </div>
        </div>
        <br /><br />

        <div class="main-scroll-div">
          <div>
            <button class="icon" onclick="scrollr2()">
              <i class="fas fa-angle-double-left"></i>
            </button>
          </div>
          <div class="cover">
            <div class="scroll-images">
              <div class="child">
                <div class="text-overlay">Kafe Kaboro' Makale</div>
                <a
                  href="http://localhost/toraja_wanderlust/tampilanrestoran.php?id=1"
                  ><img class="child-img" src="images/restoran.jpg" alt="image"
                /></a>
              </div>
              <div class="child">
                <div class="text-overlay">Tepih Sawah</div>
                <a
                  href="http://localhost/toraja_wanderlust/tampilanrestoran.php?id=2"
                  ><img
                    class="child-img"
                    src="images/restoran3.jpg"
                    alt="image"
                /></a>
              </div>
              <div class="child">
                <div class="text-overlay">Pong Buri</div>
                <a
                  href="http://localhost/toraja_wanderlust/tampilanrestoran.php?id=3"
                  ><img
                    class="child-img"
                    src="images/restoran4.jpg"
                    alt="image"
                /></a>
              </div>
              <div class="child">
                <div class="text-overlay">Rimiko Restaurant</div>
                <a
                  href="http://localhost/toraja_wanderlust/tampilanrestoran.php?id=4"
                  ><img
                    class="child-img"
                    src="images/restaurant9.jpg"
                    alt="image"
                /></a>
              </div>
              <div class="child">
                <div class="text-overlay">Cafe Aras</div>
                <a
                  href="http://localhost/toraja_wanderlust/tampilanrestoran.php?id=5"
                  ><img
                    class="child-img"
                    src="images/restaurant6.jpg"
                    alt="image"
                /></a>
              </div>
            </div>
          </div>
          <div>
            <button class="icon" onclick="scrolll2()">
              <i class="fas fa-angle-double-right"></i>
            </button>
          </div>
        </div>
      </div>
      <br /><br />
      <div class="lodge">
        <h3>5 Rekomendasi Penginapan Terbaik di Toraja</h3>
        <div class="position-relative">
          <div class="position-absolute top-0 start-0">
            <p>My trip My adventure in 2023</p>
          </div>
          <div class="position-absolute top-0 end-0">
            <button
              type="button"
              class="btn"
              style="
                color: blue;
                font-weight: bold;
                border-color: blue;
                border-radius: 60px;
              "
            >
              <a href="hotel.php">View All</a>
            </button>
          </div>
        </div>
      </div>
      <br /><br />

      <div class="main-scroll-div">
        <div>
          <button class="icon" onclick="scrollr3()">
            <i class="fas fa-angle-double-left"></i>
          </button>
        </div>
        <div class="cover">
          <div class="scroll-images">
            <div class="child">
              <div class="text-overlay">Hotel Misliana</div>
              <a href="http://localhost/toraja_wanderlust/tampilHotel.php?id=1"
                ><img class="child-img" src="images/misliana.jpg" alt="image"
              /></a>
            </div>
            <div class="child">
              <div class="text-overlay">Hotel Sahid Toraja</div>
              <a href="http://localhost/toraja_wanderlust/tampilHotel.php?id=2"
                ><img class="child-img" src="images/hotel1.jpg" alt="image"
              /></a>
            </div>
            <div class="child">
              <div class="text-overlay">Toraja Prince Hotel</div>
              <a href="http://localhost/toraja_wanderlust/tampilHotel.php?id=3"
                ><img class="child-img" src="images/hotel2.jpg" alt="image"
              /></a>
            </div>
            <div class="child">
              <div class="text-overlay">Lande Villa</div>
              <a href="http://localhost/toraja_wanderlust/tampilHotel.php?id=4"
                ><img class="child-img" src="images/vandevilla.jpg" alt="image"
              /></a>
            </div>
            <div class="child">
              <div class="text-overlay">Wisma Rotterdam Toraja</div>
              <a href="http://localhost/toraja_wanderlust/tampilHotel.php?id=5"
                ><img class="child-img" src="images/hotel4.jpg" alt="image"
              /></a>
            </div>
          </div>
        </div>
        <div>
          <button class="icon" onclick="scrolll3()">
            <i class="fas fa-angle-double-right"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- End Body Section -->
    <br /><br /><br /><br />

    <!-- Filter Section -->
    <div class="jumbotron">
      <div class="deskripsi">
        <h1 style="font-weight: bold">YUK KE TORAJA</h1>
        <h3>Pilih Daya Tarik Destinasi Sekarang Juga</h3>
        <nav
          class="navbar navbar-expand-lg navbar-light bg-dark"
          style="border-radius: 50px"
        >
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item pertama" style="margin-left: 80px">
                <label class="nav-link" for="jenis_destinasi"
                  >Jenis Destinasi:</label
                >
              </li>
              <li class="nav-item">
                <select
                  class="nav-link custom-select bg-dark"
                  id="jenis_destinasi"
                >
                  <option value="">Semua</option>
                  <option value="Objek Wisata">Objek Wisata</option>
                  <option value="Penginapan">Penginapan</option>
                  <option value="Restoran">Restoran</option>
                </select>
              </li>
              <li class="nav-item kedua" style="margin-left: 140px">
                <label class="nav-link" for="tempat_destinasi"
                  >Tempat Destinasi:</label
                >
              </li>
              <li class="nav-item">
                <select
                  class="nav-link custom-select bg-dark"
                  id="tempat_destinasi"
                >
                  <option value="">Semua</option>
                  <option value="Toraja Utara">Toraja Utara</option>
                  <option value="Tana Toraja">Tana Toraja</option>
                </select>
              </li>
              <li class="nav-item ketiga" style="margin-left: 300px">
                <button
                  class="nav-link btn btn-primary"
                  onclick="submitFilter()"
                >
                  Submit
                </button>
              </li>
            </ul>
          </div>
        </nav>
        <script src="filter.js"></script>
      </div>
    </div>
    <!-- Filter Section End -->

    <div class="cool-line"></div>

    <div class="maps">
      <h2 class="text-center">Peta Daya Tarik Destinasi Toraja</h2>
      <div id="map"></div>

      <script src="google_maps.js"></script>

      <!-- Mengimpor API Places -->
      <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK2zGPs3d6oREmChadCSK6byM3q36QSc0&libraries=places&callback=initMap"
        async
        defer
      ></script>

      <!-- Mengimpor API Google Maps -->
      <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVhjFip3DY4pAmwqzcVbCAm1Xt9zRaY-c&libraries=places&callback=initMap"
        async
        defer
      ></script>
    </div>

    <br /><br />

    <!-- Footer -->
    <footer>
      <div
        class="row"
        style="
          background-color: #296447;
          padding-bottom: 15px;
          padding-top: 30px;
        "
      >
        <div class="col">
          <h3 class="text-center">TENTANG KAMI</h3>
          <p class="text-center" style="margin-left: 50px; margin-right: 50px">
            Kami adalah tim yang terdiri dari pecinta perjalanan, penjelajah,
            dan orang-orang yang memiliki hasrat mendalam untuk berbagi
            keindahan dan daya tarik Toraja kepada Anda. Dengan pengetahuan
            lokal dan pengalaman mendalam dalam industri pariwisata, kami
            bertujuan untuk memastikan bahwa setiap kunjungan Anda ke Toraja
            menjadi tak terlupakan.
          </p>
        </div>
        <div class="col" style="margin-right: 50px">
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >Name</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="name"
                />
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >Email</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="exampleFormControlInput1"
                  placeholder="name@example.com"
                />
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"
              >Message</label
            >
            <textarea
              class="form-control"
              id="exampleFormControlTextarea1"
              rows="3"
            ></textarea>
          </div>

          <button
            class="btn btn-warning"
            style="margin-left: 250px; width: 150px"
          >
            Send
          </button>
        </div>
      </div>

      <div class="row">
        <p
          class="text-center"
          style="
            font-weight: bold;
            background-color: #383636;
            color: #fff;
            height: 7vh;
            padding-top: 11px;
          "
        >
          &copy; 2023 Toraja Wanderlust. Hak Cipta Dilindungi.
        </p>
      </div>
    </footer>
    <!-- End Footer -->
  </body>
  <script>
    function scrolll1() {
      var left = document.querySelector(".scroll-images");
      left.scrollBy(350, 0);
    }

    function scrollr1() {
      var right = document.querySelector(".scroll-images");
      right.scrollBy(-350, 0);
    }
    function scrolll2() {
      var left = document.querySelector(".scroll-images");
      left.scrollBy(350, 0);
    }

    function scrollr2() {
      var right = document.querySelector(".scroll-images");
      right.scrollBy(-350, 0);
    }
    function scrolll3() {
      var left = document.querySelector(".scroll-images");
      left.scrollBy(350, 0);
    }

    function scrollr3() {
      var right = document.querySelector(".scroll-images");
      right.scrollBy(-350, 0);
    }
  </script>
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
