function submitFilter() {
  var jenis_destinasi = document.getElementById("jenis_destinasi").value;
  var tempat_destinasi = document.getElementById("tempat_destinasi").value;

  var queryParams = new URLSearchParams();
  queryParams.append("jenis", jenis_destinasi);
  queryParams.append("tempat", tempat_destinasi);

  var searchPageUrl = "hasil_filter.php?" + queryParams.toString();
  window.location.href = searchPageUrl;

  return false; // Menghentikan submit form
}

function goToFilterPage() {
  window.location.href = "home_page.php";
}
