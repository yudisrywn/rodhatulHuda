<?php
include 'db.php';
include 'session.php';

// if (isset($_POST['submit'])) {
//     $visi = $_POST['visi'];
//     $misi = $_POST['misi'];

//     $sql = "INSERT INTO visi_misi (visi, misi) VALUES ('$visi', '$misi')";

//     if (mysqli_query($conn, $sql)) {
//         echo "<script>alert('Visi & Misi berhasil ditambahkan!')</script>";
//     } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//     }
// }

if (isset($_POST['submit'])) {
    // Ambil data input dari form
    $visi = mysqli_real_escape_string($conn, $_POST['visi']);
    $misi = mysqli_real_escape_string($conn, $_POST['misi']);

    // Nonaktifkan data visi misi yang lama (set is_active = 0)
    $archiveQuery = "UPDATE visi_misi SET is_active = 0 WHERE is_active = 1";
    mysqli_query($conn, $archiveQuery);

    // Tambahkan data visi misi baru dengan is_active = 1
    $insertQuery = "INSERT INTO visi_misi (visi, misi, is_active) VALUES ('$visi', '$misi', 1)";
    if (mysqli_query($conn, $insertQuery)) {
        echo "<script>alert('Visi & Misi berhasil ditambahkan!');</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data: " . mysqli_error($conn) . "');</script>";
    }
}
?>