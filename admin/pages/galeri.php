<?php
include "db.php";
$judul      = "";
$deskripsi  = "";
$thumbnail  = "";
$sukses     = "";
$error      = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}

// Proses hapus data berdasarkan daftar ID yang dipilih
if (isset($_POST['delete_selected']) && isset($_POST['selected_ids'])) {
    $selected_ids = $_POST['selected_ids']; // Ambil daftar ID yang dipilih

    foreach ($selected_ids as $id) {
        $id = intval($id); // Pastikan ID berupa angka

        // Query untuk mengambil informasi gambar dari database berdasarkan ID
        $query = "SELECT thumbnail FROM galeri WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $filePath = $row['thumbnail']; // Path file gambar dari database

            // Hapus file dari direktori
            if (file_exists($filePath) && is_writable($filePath)) {
                unlink($filePath); // Hapus file
            } else {
                $error = "Gagal menghapus file: $filePath";
            }

            // Hapus data dari database
            $deleteQuery = "DELETE FROM galeri WHERE id = ?";
            $deleteStmt = $conn->prepare($deleteQuery);
            $deleteStmt->bind_param("i", $id);
            $deleteStmt->execute();
        }
    }
    $sukses = "Gambar terpilih berhasil dihapus";
}

if (isset($_POST['submit'])) { // Untuk upload gambar
    $judul      = $_POST['judul'];
    $deskripsi  = $_POST['deskripsi'];
    
    // Proses upload file gambar
    if ($_FILES['file']['name']) {
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_name = $_FILES['file']['name'];
        $file_path = 'uploads/' . $file_name;
        move_uploaded_file($file_tmp, $file_path);
        
        // Insert data gambar ke database
        $sql1 = "INSERT INTO galeri (judul, deskripsi, thumbnail) VALUES ('$judul', '$deskripsi', '$file_path')";
        $q1 = mysqli_query($conn, $sql1);
        if ($q1) {
            $sukses = "Gambar berhasil diupload";
        } else {
            $error = "Gagal upload gambar";
        }
    } else {
        $error = "Silakan pilih gambar terlebih dahulu";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Gambar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="galeri.css" />
</head>
<link rel="stylesheet" href="../styles/galeri.css" />
<body>

<div class="container mt-4">
  <!-- Notification messages -->
  <?php if ($sukses): ?>
    <div class="alert alert-success">
      <?php echo $sukses; ?>
    </div>
  <?php endif; ?>
  <?php if ($error): ?>
    <div class="alert alert-danger">
      <?php echo $error; ?>
    </div>
  <?php endif; ?>

  <div class="row mb-3">
    <div class="col-6">
      <h3>Daftar Gambar</h3>
    </div>
    <div class="tambah-gambar">
      <button class="tambahgambar" data-bs-toggle="modal" data-bs-target="#uploadModal">Tambah Gambar</button>
    </div>
  </div>

  <!-- Modal untuk upload gambar -->
  <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="uploadModalLabel">Upload Gambar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="judul" class="form-label">Judul Gambar</label>
              <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Deskripsi Gambar</label>
              <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
            </div>
            <div class="mb-3">
              <label for="file" class="form-label">Pilih Gambar</label>
              <input type="file" class="form-control" id="file" name="file" accept="image/*" required>
            </div>
            <button type="submit" name="submit" class="btn btn-success w-100">Upload Gambar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Tabel Daftar Gambar -->
  <form method="POST" action="">
    <table class="table table-striped mt-4 bg-white">
      <thead>
        <tr>
          <th class="text-center text-black">No</th>
          <th class="text-center text-black">Nama Gambar</th>
          <th class="text-center text-black">Deskripsi</th>
          <th class="text-center text-black">Thumbnail</th>
          <th class="text-center text-black">Aksi</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <?php
        $sql2 = "SELECT * FROM galeri ORDER BY id DESC";
        $q2 = mysqli_query($conn, $sql2);
        $urut = 1;
        while ($r2 = mysqli_fetch_array($q2)) {
          $id         = $r2['id'];
          $judul      = $r2['judul'];
          $deskripsi  = $r2['deskripsi'];
          $thumbnail  = $r2['thumbnail'];
        ?>
        <tr>
          <th scope="row"><?php echo $urut++ ?></th>
          <td><?php echo htmlspecialchars($judul) ?></td>
          <td><?php echo htmlspecialchars($deskripsi) ?></td>
          <td><img src="<?php echo $thumbnail ?>" alt="Thumbnail" class="img-thumbnail" width="120px"></td>
          <td><input type="checkbox" name="selected_ids[]" value="<?php echo $id; ?>"></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <button type="submit" name="delete_selected" class="btn btn-danger mt-2 float-end">Hapus Gambar Terpilih</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Script untuk memilih semua checkbox
  document.getElementById('select_all').addEventListener('click', function(event) {
    const checkboxes = document.querySelectorAll('input[name="selected_ids[]"]');
    checkboxes.forEach(checkbox => checkbox.checked = event.target.checked);
  });
</script>
</body>
</html>
