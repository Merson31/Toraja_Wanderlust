// Data dummy untuk lokasi
var lokasi = [
  {
    nama: "Buntu Burake",
    jenis: "Objek Wisata",
    tempat: "Tana Toraja",
  },
  { nama: "Ke'te' Kesu", jenis: "Objek Wisata", tempat: "Toraja Utara" },
  { nama: "Londa", jenis: "Objek Wisata", tempat: "Toraja Utara" },
  {
    nama: "Kalimbuang Bori",
    jenis: "Objek Wisata",
    tempat: "Toraja Utara",
  },
  { nama: "Ollon", jenis: "Objek Wisata", tempat: "Tana Toraja" },
  {
    nama: "Museum Ne' Gandeng",
    jenis: "Objek Wisata",
    tempat: "Toraja Utara",
  },
  {
    nama: "Air Terjun Tujuh Tingkat",
    jenis: "Objek Wisata",
    tempat: "Tana Toraja",
  },
  { nama: "Hotel Misliana", jenis: "Penginapan", tempat: "Toraja Utara" },
  { nama: "Hotel Sahid Toraja", jenis: "Penginapan", tempat: "Tana Toraja" },
  { nama: "Toraja Prince Hotel", jenis: "Penginapan", tempat: "Toraja Utara" },
  { nama: "Lande Villa", jenis: "Penginapan", tempat: "Tana Toraja" },
  {
    nama: "Wisma Rotterdam Toraja",
    jenis: "Penginapan",
    tempat: "Toraja Utara",
  },
  { nama: "Rosalina Homestay", jenis: "Penginapan", tempat: "Toraja Utara" },
  { nama: "RedDoorz Makale", jenis: "Penginapan", tempat: "Tana Toraja" },
  { nama: "Kafe Kaboro'", jenis: "Restoran", tempat: "Tana Toraja" },
  { nama: "Tepi Sawah", jenis: "Restoran", tempat: "Tana Toraja" },
  { nama: "Pong Buri", jenis: "Restoran", tempat: "Toraja Utara" },
  { nama: "Rimiko Restaurant", jenis: "Restoran", tempat: "Toraja Utara" },
  { nama: "Cafe Aras", jenis: "Restoran", tempat: "Toraja Utara" },
  { nama: "Raja Babi Waroenk", jenis: "Restoran", tempat: "Toraja Utara" },
  { nama: "Restaurant El Cafe", jenis: "Restoran", tempat: "Toraja Utara" },
];

function displayFilterResults() {
  var urlParams = new URLSearchParams(window.location.search);
  var jenis_destinasi = urlParams.get("jenis");
  var tempat_destinasi = urlParams.get("tempat");

  var hasil = lokasi.filter(function (item) {
    return (
      (jenis_destinasi === "" || item.jenis === jenis_destinasi) &&
      (tempat_destinasi === "" || item.tempat === tempat_destinasi)
    );
  });

  var list_destinasi = document.getElementById("list_destinasi");
  list_destinasi.innerHTML = "";
  hasil.forEach(function (item) {
    var li = document.createElement("li");
    var link = document.createElement("a");

    if (
      item.nama === "Buntu Burake" ||
      item.nama === "Ke'te' Kesu" ||
      item.nama === "Londa" ||
      item.nama === "Kalimbuang Bori" ||
      item.nama === "Ollon" ||
      item.nama === "Museum Ne' Gandeng" ||
      item.nama === "Air Terjun Tujuh Tingkat"
    ) {
      link.href = "wisata.php";
    } else if (
      item.nama === "Hotel Misliana" ||
      item.nama === "Hotel Sahid Toraja" ||
      item.nama === "Toraja Prince Hotel" ||
      item.nama === "Lande Villa" ||
      item.nama === "Wisma Rotterdam Toraja" ||
      item.nama === "Rosalina Homestay" ||
      item.nama === "RedDoorz Makale"
    ) {
      link.href = "hotel.php";
    } else {
      link.href = "restoran.php";
    }

    link.textContent = item.nama;
    li.appendChild(link);
    list_destinasi.appendChild(li);
  });

  // Tampilkan input search setelah hasil filter ditampilkan
  var search_container = document.getElementById("search_container");
  search_container.style.display = "block";

  // Tambahkan event listener pada input search
  var search_destinasi = document.getElementById("search_destinasi");
  search_destinasi.addEventListener("keyup", function (event) {
    if (event.key === "Enter") {
      searchDestinasi();
    }
  });
}

function searchDestinasi() {
  var search_term = document
    .getElementById("search_destinasi")
    .value.toLowerCase();

  var hasil = lokasi.filter(function (item) {
    return item.nama.toLowerCase().includes(search_term);
  });

  var list_destinasi = document.getElementById("list_destinasi");
  list_destinasi.innerHTML = "";
  hasil.forEach(function (item) {
    var li = document.createElement("li");
    var link = document.createElement("a");

    if (item.nama === "Buntu Burake") {
      link.href = "link_tujuan_buntu_burake";
    } else if (item.nama === "Ollon") {
      link.href = "link_tujuan_ollon";
    } else if (item.nama === "Londa") {
      link.href = "link_tujuan_londa";
    } else {
      link.href = "link_tujuan_lainnya";
    }

    link.textContent = item.nama;
    li.appendChild(link);
    list_destinasi.appendChild(li);
  });

  return false; // Menghentikan submit form
}

displayFilterResults();
