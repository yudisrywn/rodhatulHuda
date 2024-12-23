<?php
  include '../../admin/db.php';
  $sql = "SELECT * FROM visi_misi WHERE is_active = 1";
  $result = mysqli_query($conn, $sql);
  $data = mysqli_fetch_assoc($result);

  if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM visi_misi WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
  }

  $query = "SELECT * FROM galeri ORDER BY id DESC";
$queryGallery = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RA Roudlotul Huda</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous" />

    <!-- font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="style.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- animasi roket -->
    <script
      src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
      type="module"></script>

    <!-- effect roket terbang -->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.js"></script>
  </head>
  <body>
    <!-- navigasi -->
    <header>
      <div class="navbar">
        <!-- Elemen lebah animasi di kiri -->
        <div class="bee-left">
          <img src="images/bee-left.gif" alt="Bee Left" />
        </div>

        <!-- Teks utama -->
        <!-- Elemen lebah animasi di kanan -->
        <div class="bee-right">
          <img src="images/bee-right.gif" alt="Bee Right" />
        </div>
      </div>

      <!-- Menu navigasi -->
      <nav>
        <ul>
          <li><a href="#sejarahnav">Sejarah</a></li>
          <li><a href="#visimisinav">Visi Misi</a></li>
          <li><a href="#program-unggulan">Program</a></li>
          <li><a href="#portofolio">Portofolio</a></li>
          <li><a href="#staff">Staff</a></li>
          <li><a href="#galeri">Galeri</a></li>
          <li><a href="#lokasi">Lokasi</a></li>
          <li><a href="#kontak">Info Pendaftaran</a></li>
        </ul>
      </nav>
    </header>
    <div class="container-fluid banner" id="home">
      <div class="container text-center">
        <h4 class="display-6 welcome-title" data-aos="zoom-in">
          Selamat Datang di <span class="welcome-title">RA Roudlotul Huda</span>
        </h4>
        <p data-aos="fade-up">
          Puji syukur marilah kita panjatkan kehadhirat Allah SWT atas berkat,
          rahmat dan hidayah-Nya sehingga salah satu program penting dalam
          proses perkembangan RA Roudlotul Huda untuk memasuki era dunia maya
          dapat terwujud. Tujuan penting hadirnya RA Roudlotul Huda di dunia
          maya yaitu dapat memberikan berbagai informasi kepada siswa, orang tua
          siswa dan masyarakat tentang kinerja sekolah serta memberikan masukan
          kritik dan saran yang membangun bagi kemajuan sekolah melalui peran
          serta masyarakat.
        </p>
      </div>
    </div>
    

    <!-- Fitur roket di pojok kanan bawah -->
    <div class="rocket-container">
      <a href="#home" id="rocket-link">
        <dotlottie-player
          id="rocket"
          src="https://lottie.host/4c4f40de-236b-4732-b28f-e5bfbd26f777/sppyzMiEsD.lottie"
          background="transparent"
          speed="1"
          alt="Roket"
          style="
            position: fixed;
            bottom: 5px;
            right: 5px;
            width: 100px;
            height: 100px;
          "
          loop
          autoplay></dotlottie-player>
      </a>
    </div>

    <!-- sejarah sekolah -->
    <div class="container text-center">
      <div class="gradasi-linear"></div>
      <h2 class="display-3" id="sejarahnav" data-aos="fade-up">Sejarah Sekolah</h2>
      <p data-aos="fade-up">
        RA Roudlotul Huda berdiri pada tanggal 17 Juli 1987, didirikan diatas
        tanah wakaf bapak H Tamzis yang pada saat itu berkedudukan sebagai ketua
        Yayasan. Pada tahun pertama berdirinya RA Roudlotul Huda hanya
        mendapatkan 7 murid, tetapi Alhamdulillah seiring berjalannya waktu dari
        tahun ke tahun jumlah murid yang diperoleh setiap tahunnya selalu
        meningkat. Tujuan yayasan Roudlotul Huda mendirikan RA adalah untuk
        mencetak generasi islami yang berakhlakhul karimah dan mandiri, dengan
        cara mengembangkan bakat anak secara alami, Selain itu juga RA Roudlotul
        Huda didirikan karena rasa prihatin pengelola yayasan melihat kondisi
        murid MI yang semakin menipis setiap tahunnya karena banyaknya
        masyarakat yang lebih memilih SD negeri sebagai tujuan pendidikan dasar
        putra putrinya.Dengan berdirinya RA Roudlotul Huda diharapkan mampu
        menggiring warga masyarakat untuk memilih MI sebagai pendidikan dasar
        dengan diiringi pendidikan agama untuk menciptakan generasi Islami
      </p>
    </div>


    <!-- Visi Misi  -->
    <div class="container">
      <div class="gradasi-linear"></div>
      <h2 class="display-3" id="visimisinav" data-aos="fade-up">Visi Misi</h2>
      <p data-aos="fade-up">
      <h3 class="text-center" data-aos="fade-up">Visi</h3>
        <p data-aos="fade-up">
          <?=$data['visi']?>
        </p>
      <h3 class="text-center" data-aos="fade-up">Misi</h3>
      <p data-aos="fade-up">
        <?=$data['misi']?>
      </p>
    </div id="program-unggulan">

    <!-- program unggulan -->
    <div class="container">
      <h2
        class="display-3 text-center"
        id="program-unggulan"
        data-aos="fade-up">
        Program Unggulan
      </h2 data-aos="fade-up">

      <div class="row pt-4">
        <div class="col-md-6 text-center" data-aos="fade-right">
          <img src="images/2.jpg" alt="Program Unggulan" class="img-fluid" />
        </div>
        <div class="col-md-6 text-center" data-aos="fade-left">
          <!-- Menambahkan text-center di sini -->
          <p class="teks">
            Drum Band Rodlotul Huda: Harmoni Semangat dan Kreativitas! Anak-anak
            hebat kami tampil penuh semangat melalui program unggulan drum band!
            Melalui kegiatan ini, mereka belajar disiplin, kekompakan, dan
            keberanian tampil di depan umum. Suara alat musik yang indah berpadu
            dengan senyum ceria mereka!
          </p>
        </div>
      </div>

      <div class="row pt-4">
        <div class="col-md-6 text-center" data-aos="fade-right">
          <!-- Menambahkan text-center di sini -->
          <p class="teks2">
            Manasik Haji: Belajar Ibadah dengan Ceria. Program unggulan manasik
            haji mengajarkan nilai-nilai Islam kepada anak-anak sejak dini.
            Dengan penuh semangat, mereka belajar tata cara ibadah haji, mulai
            dari thawaf hingga wukuf di Arafah, dalam suasana yang menyenangkan.
          </p>
        </div>
        <div class="col-md-6 text-center" data-aos="fade-left">
          <img src="images/13.jpeg" alt="Program Unggulan" class="img-fluid" />
        </div>
      </div>
    </div>
    <!-- fasilitas -->
    <div class="container text-center" id="portofolio">
      <h2 class="display-3" data-aos="fade-up">Fasilitas RA Roudlotul Huda</h2>
      <div class="row pt-4 gx-4 gy-4">
        <div class="col-md-4">
          <div class="card crop-img" data-aos="zoom-in">
            <img src="images/1.jpg" class="card-img-top" width="200" height="200" />
            <div class="card-body">
              <h5 class="card-title">Area Bermain Outdoor</h5>
              <p class="card-text">
                Area bermain luar ruangan dirancang untuk melatih motorik kasar
                anak sambil menikmati udara segar. Dilengkapi dengan ayunan,
                perosotan, jungkat-jungkit, dan komedi putar, anak-anak bebas
                bermain dan bersosialisasi dengan teman-teman mereka. Suasana
                ceria dan penuh warna menjadikan area ini tempat favorit untuk
                anak-anak melepas energi.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card crop-img" data-aos="zoom-in">
            <img src="
            images/15.jpeg" class="card-img-top" width="200" height="200" />
            <div class="card-body">
              <h5 class="card-title">Area Bermain Indoor</h5>
              <p class="card-text">
                Di dalam ruangan, tersedia berbagai mainan edukatif yang
                mendukung perkembangan kognitif dan kreativitas anak, seperti
                puzzle, lego, balok kayu, dan boneka. Selain itu, terdapat alat
                olahraga sederhana seperti bola dan hulahop untuk melatih
                koordinasi serta keseimbangan motorik halus dan kasar anak.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card crop-img" data-aos="zoom-in">
            <img src="images/6.jpg" class="card-img-top" width="200" height="200" />
            <div class="card-body">
              <h5 class="card-title">Ruang Kelas</h5>
              <p class="card-text">
                RA Rodlotul Huda memiliki dua ruang kelas yang dirancang untuk
                mendukung pembelajaran anak usia dini dengan suasana yang nyaman
                dan menyenangkan. Setiap ruang kelas dilengkapi dengan meja dan
                kursi kecil yang sesuai dengan ukuran anak-anak, serta area
                belajar yang mendukung kreativitas dan interaksi.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mx-auto">
          <div class="card crop-img text-center" data-aos="zoom-in">
            <img src="images/3.jpg" class="card-img-top" width="200" height="200" />
            <div class="card-body">
              <h5 class="card-title">Ruang Guru</h5>
              <p class="card-text">
                RA Roudlotul Huda memiliki satu ruangan khusus guru-guru dan
                didepannya terdapat meja untuk tamu atau orangtua murid.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- biodata guru -->
    <div class="container text-center"  id="staff" data-aos="fade-up">
      <h2 class="display-3">Biodata Guru</h2>
      <div class="row pt-4 gx-4 gy-4">
        <div class="col-md-4 text-center tim" data-aos="fade-right">
          <img src="images/16.jpg" class="rounded-circle mb-3" />
          <h4>Elly Riyana Handayani, SE.</h4>
          <p>Kepala RA Roudlotul Huda</p>
        </div>
        <div class="col-md-4 text-center tim" data-aos="fade-up">
          <img src="images/17.jpg" class="rounded-circle mb-3" />
          <h4>Mundarkah, A.Ma</h4>
          <p>Guru</p>
        </div>
        <div class="col-md-4 text-center tim" data-aos="fade-left">
          <img src="images/18.jpg" class="rounded-circle mb-3" />
          <h4>Siti Ma’rifah</h4>
          <p>Administrasi</p>
        </div>
      </div>
    </div>

    <!-- galeri -->
      <div class="container text-center" id="galeri">
    <h2 class="display-3" data-aos="fade-up">Galeri</h2>

    <div
        id="carouselExampleAutoplaying"
        class="carousel slide gallery"
        data-bs-ride="carousel"
        style="width: 80%; margin: auto"
        data-aos="fade-up">
        <div class="carousel-inner gallery-image">
            <?php
            // Tentukan folder tempat gambar berada
            $imageFolder = "../../admin/uploads/";
            
            // Ambil daftar file dari folder
            $images = array_diff(scandir($imageFolder), array('.', '..'));

            // Cek apakah ada gambar di folder
            if (!empty($images)) {
                $isActive = true; // Flag untuk item pertama
                foreach ($images as $image) {
                    // Buat path gambar lengkap
                    $imagePath = $imageFolder . $image;

                    // Tampilkan item carousel
                    ?>
                    <div class="carousel-item <?php echo $isActive ? 'active' : ''; ?>">
                        <img src="<?php echo $imagePath; ?>" class="d-block w-100" alt="Gambar Galeri" />
                    </div>
                    <?php
                    $isActive = false; // Setelah item pertama, set menjadi tidak aktif
                }
            } else {
                echo "<p>Tidak ada gambar di galeri.</p>";
            }
            ?>
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


    <!-- lokasi -->
    <div class="container-fluid pt-5 pb-5" id="lokasi">
      <div class="container text-center" data-aos="fade-up">
        <h2 class="display-3">Lokasi</h2>
        <div class="clearfix pt-5 d-flex flex-column align-items-center">
          <!-- Menambahkan d-flex dan align-items-center -->
          <img
            src="images/maps.jpg"
            class="col-md-6 mb-3 crop-img"
            width="300"
            height="300" data-aos="zoom-in"/>
          <a
            href="https://www.google.com/maps/search/ra+roudlotul+huda+sekaran/@-7.0610533,110.3631312,14.06z?entry=ttu&g_ep=EgoyMDI0MTExOS4yIKXMDSoASAFQAw%3D%3D"
            class="text-center"
            >Klik Disini Untuk Melihat Lokasi</a
          >
          <!-- Menambahkan class text-center -->
        </div>
      </div>
    </div>

    <!-- kontak -->
    <div class="container-fluid pt-5 pb-5 kontak" id="kontak">
      <div class="container" data-aos="fade-up">
        <h2 class="display-3 text-center">Info Pendaftaran</h2>
        <img
          src="images/pendaftaran.png"
          style="width: 900px; height: 500px"
          alt="pendaftaran" data-aos="fade-up"/>
        <div class="col-md-3 mx-auto text-center">
          <a
            href="https://wa.me/6285786465401?text=Halo%20admin%2C%20saya%20ingin%20mendaftar%20di%20RA%20Roudlotul%20Huda.%20Mohon%20informasinya%20lebih%20lanjut."
            target="_blank">
            <button type="button" class="daftar" data-aos="zoom-in">
              <span>Daftar Online</span>
            </button>
          </a>
        </div>
      </div>
    </div>
    <div class="container text-center pt-5 pb-5">
      All Rights Reserved &copy; 2024
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous">
      src="app.js"
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
