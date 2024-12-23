<?php
include 'db.php';
include 'session.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>


<!-- getting page -->
<?php
  if(isset($_GET['page'])) {
    $page = $_GET['page'];
    if($page == "index") {
      $page_title = "Dashboard";
    } else if($page == "galeri") {
      $page_title = "Galeri";
    } else if($page == "visimisi") {
      $page_title = "Visi Misi";
    } else {
      $page_title = "Dashboard";
    }
  } else {
    $page_title = "Dashboard";
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
      rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet" />
    <link rel="stylesheet" href="admin.css" />
    <link rel="stylesheet" href="dasbor.css" />
    <!-- font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet" />
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
            <nav class="col-md-2 text-white vh-100 p-3 sidebar">
        <h4 class="text-center"><?= $_SESSION['username']; ?></h4>
        <ul class="nav flex-column mt-4">
          <li class="nav-item">
            <a href="?page=visi-misi" class="nav-link">Input Visi & Misi</a>
          </li>
          <li class="nav-item">
            <a href="?page=galeri" class="nav-link">Input Galeri</a>
          </li>
          <li class="nav-item">
            <!-- <a href="index.php" class="nav-link">Logout</a> -->
            <a href="logout.php" class="nav-link">Logout</a>
          </li>
        </ul>
      </nav>
        <main class="col-md-10 p-4" id="content">
          <?php
          if ($page === 'visi-misi') {
            include './pages/visimisi.php';
          } elseif ($page === 'galeri') {
            include './pages/galeri.php';
          } else {
            echo "<h3>Selamat Datang, Admin!</h3><p>Pilih menu di sebelah kiri untuk mengelola konten.</p>";
          }
          ?>
        </main>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
