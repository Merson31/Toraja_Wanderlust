// Fungsi ini dipanggil setelah Google Maps API dan Places API berhasil dimuat
function initMap() {
  // Buat objek peta baru
  var map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -6.1753924, lng: 106.8271528 }, // Koordinat default
    zoom: 12, // Tingkat zoom default
  });

  // Meminta akses lokasi pengguna
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
      function (position) {
        var userLatLng = {
          lat: position.coords.latitude,
          lng: position.coords.longitude,
        };

        // Set posisi pengguna pada peta
        map.setCenter(userLatLng);

        // Tambahkan penanda pada posisi pengguna
        var userMarker = new google.maps.Marker({
          position: userLatLng,
          map: map,
          title: "Lokasi Anda",
        });

        // Cari tempat terdekat setelah mendapatkan lokasi pengguna
        searchNearbyPlaces(map, userLatLng);
      },
      function () {
        // Gagal mendapatkan lokasi pengguna
        console.log("Gagal mendapatkan lokasi pengguna.");
      }
    );
  } else {
    // Browser tidak mendukung geolocation
    console.log("Geolocation tidak didukung oleh browser.");
  }

  // Fungsi untuk mencari tempat terdekat
  function searchNearbyPlaces(map, userLatLng) {
    var request = {
      location: userLatLng,
      radius: "500", // Jarak dalam meter
      type: ["restaurant"], // Jenis tempat yang ingin dicari (misalnya restoran)
    };

    var service = new google.maps.places.PlacesService(map);

    service.nearbySearch(request, function (results, status) {
      if (status === google.maps.places.PlacesServiceStatus.OK) {
        for (var i = 0; i < results.length; i++) {
          var place = results[i];

          // Tambahkan penanda untuk setiap tempat terdekat
          var marker = new google.maps.Marker({
            position: place.geometry.location,
            map: map,
            title: place.name,
          });
        }

        // Array objek tujuan
        var destinations = [
          {
            lat: -3.0948353303166924,
            lng: 119.8665733901993,
            title: "Buntu Burake",
          },
          {
            lat: -2.9964976261366485,
            lng: 119.91018110817613,
            title: "Ke'te' Kesu",
          },
          {
            lat: -3.014808222403805,
            lng: 119.87604260328852,
            title: "Londa",
          },
          {
            lat: -2.9199331393174286,
            lng: 119.92043853701078,
            title: "Kalimbuang Bori",
          },
          {
            lat: -3.2183259180340906,
            lng: 119.69219715050737,
            title: "Ollon",
          },
          {
            lat: -2.9293739599873643,
            lng: 119.94835145050487,
            title: "Museum Ne' Gandeng",
          },
          {
            lat: -3.024568258039698,
            lng: 119.67311535235318,
            title: "Air Terjun Tujuh Tingkat",
          },
          {
            lat: -2.9920323264565716,
            lng: 119.88557446584686,
            title: "Hotel Misliana",
          },
          {
            lat: -3.1770886498954654,
            lng: 119.87988085050708,
            title: "Hotel Sahid Toraja",
          },
          {
            lat: -2.9569069477986276,
            lng: 119.91866286584647,
            title: "Toraja Prince Hotel",
          },
          {
            lat: -3.00527874352633,
            lng: 119.87226892351767,
            title: "Lande Villa",
          },
          {
            lat: -3.019681762443447,
            lng: 119.8703079216704,
            title: "Wisma Rotterdam Toraja",
          },
          {
            lat: -2.9830481967466915,
            lng: 119.89262398118821,
            title: "Rosalina Homestay",
          },
          {
            lat: -3.1106127467575355,
            lng: 119.85437236891599,
            title: "RedDoorz Makale",
          },
          {
            lat: -3.1012609475410096,
            lng: 119.85321231002465,
            title: "Kafe Kaboro'",
          },
          {
            lat: -3.088697383003437,
            lng: 119.85517954626053,
            title: "Tepi Sawah",
          },
          {
            lat: -2.968033951464843,
            lng: 119.89700803701125,
            title: "Pong Buri",
          },
          {
            lat: -2.966256649960278,
            lng: 119.90030235235268,
            title: "Rimiko Restaurant",
          },
          {
            lat: -2.9689534346607993,
            lng: 119.89905310845667,
            title: "Cafe Aras",
          },
          {
            lat: -2.9661517656170697,
            lng: 119.90040150817582,
            title: "Raja Babi Waroenk",
          },
          {
            lat: -2.968399765926012,
            lng: 119.89830402385414,
            title: "Restaurant El Cafe",
          },
          // Tambahkan objek tujuan berikutnya jika ada
        ];

        // Tambahkan penanda untuk setiap objek tujuan
        for (var j = 0; j < destinations.length; j++) {
          var destination = destinations[j];

          var destinationMarker = new google.maps.Marker({
            position: { lat: destination.lat, lng: destination.lng },
            map: map,
            title: destination.title,
          });
        }
      }
    });
  }
}
