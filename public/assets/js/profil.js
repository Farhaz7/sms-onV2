document.addEventListener("DOMContentLoaded", function () {
    var kecamatanDropdown = document.getElementById("kecamatan_meninggal");
    var kelurahanDropdown = document.getElementById("kelurahan_meninggal");

    // Daftar kelurahan berdasarkan kecamatan
    var kelurahanOptions = {
        "Banjarbaru Selatan": ["Guntung Paikat", "Kemuning", "Loktabat Selatan", "Sungai Besar"],
        "Banjarbaru Utara": ["Komet", "Loktabat Utara", "Mentaos", "Sungai Ulin"],
        "Cempaka": ["Bangkal", "Cempaka", "Palam", "Sungai Tiung"],
        "Landasan Ulin": ["Guntung Manggis", "Guntung Payun", "Landasan Ulin Timur", "Syamsudin Noor"],
        "Liang Anggang": ["Landasan Ulin Barat", "Landasan Ulin Selatan", "Landasan Ulin Tengah", "Landasan Ulin Utara"]
    };

    // Fungsi untuk mengisi dropdown kelurahan berdasarkan kecamatan yang dipilih
    function populateKelurahan() {
        var selectedKecamatan = kecamatanDropdown.value;
        var kelurahanOptionsArray = kelurahanOptions[selectedKecamatan] || [];

        // Hapus opsi yang sudah ada
        kelurahanDropdown.innerHTML = '<option value="" selected disabled></option>';

        // Tambahkan opsi kelurahan berdasarkan kecamatan yang dipilih
        kelurahanOptionsArray.forEach(function (kelurahan) {
            var option = document.createElement("option");
            option.value = kelurahan;
            option.text = kelurahan;
            kelurahanDropdown.appendChild(option);
        });
    }

    // Tambahkan event listener untuk perubahan pada dropdown kecamatan
    kecamatanDropdown.addEventListener("change", populateKelurahan);

    populateKelurahan();
});

document.addEventListener("DOMContentLoaded", function () {
    var kecamatanDropdown = document.getElementById("kecamatan_ahwa");
    var kelurahanDropdown = document.getElementById("kelurahan_ahwa");

    // Daftar kelurahan berdasarkan kecamatan
    var kelurahanOptions = {
        "Banjarbaru Selatan": ["Guntung Paikat", "Kemuning", "Loktabat Selatan", "Sungai Besar"],
        "Banjarbaru Utara": ["Komet", "Loktabat Utara", "Mentaos", "Sungai Ulin"],
        "Cempaka": ["Bangkal", "Cempaka", "Palam", "Sungai Tiung"],
        "Landasan Ulin": ["Guntung Manggis", "Guntung Payun", "Landasan Ulin Timur", "Syamsudin Noor"],
        "Liang Anggang": ["Landasan Ulin Barat", "Landasan Ulin Selatan", "Landasan Ulin Tengah", "Landasan Ulin Utara"]
    };

    // Fungsi untuk mengisi dropdown kelurahan berdasarkan kecamatan yang dipilih
    function populateKelurahan() {
        var selectedKecamatan = kecamatanDropdown.value;
        var kelurahanOptionsArray = kelurahanOptions[selectedKecamatan] || [];

        // Hapus opsi yang sudah ada
        kelurahanDropdown.innerHTML = '<option value="" selected disabled></option>';

        // Tambahkan opsi kelurahan berdasarkan kecamatan yang dipilih
        kelurahanOptionsArray.forEach(function (kelurahan) {
            var option = document.createElement("option");
            option.value = kelurahan;
            option.text = kelurahan;
            kelurahanDropdown.appendChild(option);
        });
    }

    // Tambahkan event listener untuk perubahan pada dropdown kecamatan
    kecamatanDropdown.addEventListener("change", populateKelurahan);

    populateKelurahan();
});

function validateForm() {
    var nikMeninggal = document.getElementById("nik_meninggal").value;
    var namaMeninggal = document.getElementById("nama_meninggal").value;
    var tglMeninggal = document.getElementById("tgl_meninggal").value;
    var alamatMeninggal = document.getElementById("alamat_meninggal").value;
    var kecamatanMeninggal = document.getElementById("kecamatan_Meninggal").value;
    var kelurahanMeninggal = document.getElementById("kelurahan_Meninggal").value;
    var notelpAhwa = document.getElementById("notelp_ahwa").value;
    var email = document.getElementById("email").value;
    var alamatAhwa = document.getElementById("alamat_ahwa").value;
    var nikAhwa = document.getElementById("nik_ahwa").value;
    var namaAhwa = document.getElementById("nama_ahwa").value;
    var kecamatanAhwa = document.getElementById("kecamatan_Ahwa").value;
    var kelurahanAhwa = document.getElementById("kelurahan_Ahwa").value;
    var kedudukan = document.getElementById("kedudukan").value;

    if (
        nikMeninggal === "" ||
        namaMeninggal === "" ||
        tglMeninggal === "" ||
        alamatMeninggal === "" ||
        kecamatanMeninggal === "" ||
        kelurahanMeninggal === "" ||
        notelpAhwa === "" ||
        email === "" ||
        alamatAhwa === "" ||
        nikAhwa === "" ||
        namaAhwa === "" ||
        kecamatanAhwa === "" ||
        kelurahanAhwa === "" ||
        kedudukan === ""
    ) {
        alert("Harap isi semua data sebelum menyimpan!");
        return false; // Menghentikan pengiriman formulir jika ada yang belum diisi
    }

    return true; // Mengizinkan pengiriman formulir jika semua data diisi
}
