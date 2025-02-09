var map = L.map("map").setView([-6.914744, 107.60981], 13); // Koordinat awal Bandung

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution: "&copy; OpenStreetMap contributors",
}).addTo(map);

var userMarker = null;
var tokoMarker = null;
var routingControl = null;

// Fungsi mendapatkan lokasi pengguna
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
      function (position) {
        var lat = position.coords.latitude;
        var lon = position.coords.longitude;

        map.setView([lat, lon], 15);

        if (userMarker) {
          map.removeLayer(userMarker);
        }

        userMarker = L.marker([lat, lon])
          .addTo(map)
          .bindPopup("Lokasi Anda")
          .openPopup();

        if (routingControl) {
          map.removeControl(routingControl);
        }

        fetch("get_toko.php")
          .then((response) => response.json())
          .then((data) => {
            let nearestTokos = findNearestToko(lat, lon, data);

            // Tampilkan 3 toko terdekat dengan Card
            let tokoHTML = `<h2 class="text-center mb-3">Toko Terdekat dari Anda</h2>`;

            nearestTokos.forEach((toko) => {
              let namaFile =
                toko.nama.toLowerCase().replace(/\s+/g, "-") + ".jpg";
              let pathGambar = `assets/toko/${namaFile}`;

              let img = new Image();
              img.src = pathGambar;
              img.onerror = function () {
                this.src = "assets/toko/default.jpg";
              };
              img.className = "toko-img";

              tokoHTML += `
                        <div class="toko-card mb-2 d-flex align-items-center">
                            ${img.outerHTML}
                            <div class="toko-info">
                                <h6 class="mb-1">${toko.nama}</h6>
                                <p class="small text-muted"><i class="fa-solid fa-map-marker-alt"></i> ${toko.alamat}</p>
                                <a href="detail_toko.php?id_toko=${toko.id}" class="btn btn-sm btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    `;
            });

            tokoHTML += `</div>`;

            // Tempatkan hasil di dalam elemen dengan id "nearest-toko"
            document.getElementById("nearest-toko").innerHTML = tokoHTML;

            // Setelah toko terdekat muncul, atur ulang lebar map dan nearest-toko
            document.getElementById("map").style.width = "50%";
            document.getElementById("map").style.marginLeft = "20px";
            document.getElementById("nearest-toko").style.width = "50%";
          });

        setTimeout(() => {
          document
            .getElementById("map-section")
            .scrollIntoView({ behavior: "smooth" });
        }, 500);
      },
      function (error) {
        alert("Gagal mendapatkan lokasi: " + error.message);
      }
    );
  } else {
    alert("Geolokasi tidak didukung di browser ini.");
  }
}

document.getElementById("nearest-toko").style.display = "block";

function findNearestToko(userLat, userLon, tokoList) {
  // Menghitung jarak untuk setiap toko dan menambahkannya ke array dengan data jarak
  let tokoWithDistance = tokoList.map((toko) => {
    let distance = haversineDistance(userLat, userLon, toko.lat, toko.lon);
    return { ...toko, distance };
  });

  // Urutkan toko berdasarkan jarak terdekat
  tokoWithDistance.sort((a, b) => a.distance - b.distance);

  // Ambil 3 toko terdekat
  return tokoWithDistance.slice(0, 3);
}

// Rumus Haversine untuk menghitung jarak antara dua koordinat
function haversineDistance(lat1, lon1, lat2, lon2) {
  const R = 6371; // Radius bumi dalam km
  const dLat = (lat2 - lat1) * (Math.PI / 180);
  const dLon = (lon2 - lon1) * (Math.PI / 180);
  const a =
    Math.sin(dLat / 2) * Math.sin(dLat / 2) +
    Math.cos(lat1 * (Math.PI / 180)) *
      Math.cos(lat2 * (Math.PI / 180)) *
      Math.sin(dLon / 2) *
      Math.sin(dLon / 2);
  const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
  return R * c; // Jarak dalam kilometer
}

// Fungsi mencari lokasi berdasarkan input
function searchLocation() {
  var query = document.getElementById("search-box").value.trim();
  // if (query === "") {
  //   alert("Masukkan nama wilayah di Bandung!");
  //   return;
  // }

  fetch(
    `https://nominatim.openstreetmap.org/search?format=json&q=${query}, Bandung, Indonesia`,
    {
      headers: {
        "User-Agent": "outdoorhub/1.0 (gamingtopyt@gmail.com)",
      },
    }
  )
    .then((response) => response.json())
    .then((data) => {
      //   if (query === "") {
      //     alert("Masukkan nama wilayah di Bandung!");
      //     return;
      //   }
      if (data.length > 0) {
        var lat = parseFloat(data[0].lat);
        var lon = parseFloat(data[0].lon);

        map.setView([lat, lon], 15);
      } else {
        alert("Wilayah tidak ditemukan. Coba nama lain!");
      }
    })
    .catch((error) => {
      console.error("Error saat mencari lokasi:", error);
      alert("Gagal mengambil data lokasi. Coba lagi nanti.");
    });
}

// Event listener untuk menekan Enter pada input
document
  .getElementById("search-box")
  .addEventListener("keypress", function (event) {
    if (event.key === "Enter") {
      searchLocation();
    }
  });

// Menampilkan toko dari database
fetch("get_toko.php")
  .then((response) => response.json())
  .then((data) => {
    data.forEach((toko) => {
      var marker = L.marker([toko.lat, toko.lon]).addTo(map);
      marker.bindPopup(
        `<b>${toko.nama}</b><br>${toko.alamat}<br>
                <a href="detail_toko.php?id_toko=${toko.id}">Detail Toko</a>`
      );
    });
  })
  .catch((error) => console.error("Error fetching toko data:", error));

// Fungsi untuk menyalin alamat ke clipboard
function copyToClipboard() {
  var alamat = document.getElementById("alamat-toko").textContent;
  navigator.clipboard.writeText(alamat);
  alert("Alamat disalin!");
}
