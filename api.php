<?php
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'] ?? 'Tidak diketahui';
    $umur = $_POST['umur'] ?? '0';
    $jabatan = $_POST['jabatan'] ?? '-';

    $url = "https://card-generator-gamma.vercel.app/card.html?nama=" . urlencode($nama) . "&umur=" . urlencode($umur) . "&jabatan=" . urlencode($jabatan);

    echo json_encode(["status" => "success", "url" => $url]);
} else {
    echo json_encode(["status" => "error", "message" => "Gunakan metode POST"]);
}
?>