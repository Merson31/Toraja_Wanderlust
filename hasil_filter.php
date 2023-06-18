<!DOCTYPE html>
<html>
  <head>
    <title>Hasil Filter</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
  </head>
  <body>
    <div class="container mt-5">
      <div id="hasil_filter">
        <div id="search_container">
          <div class="input-group mb-3">
            <input
              type="text"
              class="form-control"
              id="search_destinasi"
              placeholder="Cari destinasi yang lebih spesifik"
            />
            <div class="input-group-append">
              <button class="btn btn-primary" onclick="searchDestinasi()">
                Search
              </button>
            </div>
          </div>
        </div>
        <ul id="list_destinasi"></ul>
        <button class="btn btn-primary" onclick="goToFilterPage()">
          Kembali
        </button>
      </div>
    </div>

    <script src="filter.js"></script>
    <script src="hasil_filter.js"></script>
  </body>
</html>
