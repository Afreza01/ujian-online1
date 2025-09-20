<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage - Ujian Online</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
  .hero {
  background: url('image/WhatsApp Image 2025-09-08 at 07.56.34.jpeg') center center/cover no-repeat;
  color: white;
  height: 80vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;

  /* tambahan */
  background-position-y: 40%; /* geser gambar ke bawah */
}

.hero .container {
  margin-top: -50px; /* teks agak naik */
}

.hero h1 {
  font-size: 3rem;
  font-weight: bold;
  text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
  margin-bottom: 15px;
}

.hero p {
  font-size: 1.2rem;
  text-shadow: 1px 1px 4px rgba(0,0,0,0.5);
}

    footer {
      background-color: #343a40;
      color: #fff;
      padding: 40px 0;
    }
    footer a {
      color: #ffc107;
      text-decoration: none;
    }
    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">
        <img src="image/PKP_DKI_Jakarta_Logo.png" alt="Logo" width="120" class="me-3">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#guru">Guru</a></li>
          <li class="nav-item"><a class="btn btn-warning ms-3" href="index.php?action=loginPage">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1>Selamat Datang di E-Learning</h1>
      <p>SMK PKP 1 Jakarta - Sistem Ujian Online</p>
    </div>
  </section>

  <!-- Guru Section -->
<section id="guru" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5">Guru Kami</h2>

    <div class="slider">
      <div class="slide-track">
        <!-- ulangi isi guru biar infinite -->
        <div class="slide">
          <img src="https://picsum.photos/100?random=1" alt="Guru 1">
          <p>Pak Budi<br><small>Matematika</small></p>
        </div>
        <div class="slide">
          <img src="https://picsum.photos/100?random=2" alt="Guru 2">
          <p>Bu Siti<br><small>Bahasa Indonesia</small></p>
        </div>
        <div class="slide">
          <img src="https://picsum.photos/100?random=3" alt="Guru 3">
          <p>Pak Andi<br><small>IPA</small></p>
        </div>
        <div class="slide">
          <img src="https://picsum.photos/100?random=4" alt="Guru 4">
          <p>Bu Rina<br><small>Inggris</small></p>
        </div>
        <div class="slide">
          <img src="https://picsum.photos/100?random=5" alt="Guru 5">
          <p>Pak Joko<br><small>Sejarah</small></p>
        </div>
        <div class="slide">
          <img src="https://picsum.photos/100?random=6" alt="Guru 6">
          <p>Bu Lusi<br><small>Ekonomi</small></p>
        </div>
        <div class="slide">
          <img src="https://picsum.photos/100?random=7" alt="Guru 7">
          <p>Pak Dedi<br><small>Olahraga</small></p>
        </div>
        <div class="slide">
          <img src="https://picsum.photos/100?random=8" alt="Guru 8">
          <p>Bu Maya<br><small>Seni</small></p>
        </div>

        <!-- isi diulang supaya efek infinite nyambung -->
        <div class="slide">
          <img src="https://picsum.photos/100?random=1" alt="Guru 1">
          <p>Pak Budi<br><small>Matematika</small></p>
        </div>
        <div class="slide">
          <img src="https://picsum.photos/100?random=2" alt="Guru 2">
          <p>Bu Siti<br><small>Bahasa Indonesia</small></p>
        </div>
        <!-- dst bisa ulangi -->
      </div>
    </div>
  </div>
</section>

<style>
/* Slider container */
.slider {
  overflow: hidden;
  position: relative;
  width: 100%;
  /* background: #fff; */
}

/* Track bergerak */
.slide-track {
  display: flex;
  width: calc(260px * 16); /* jumlah slide * ukuran */
  animation: scroll 25s linear infinite;
}

/* Setiap guru */
.slide {
  width: 200px;
  text-align: center;
  margin: 0 20px;
}

.slide img {
  width: 100px;
  height: 100px;
  border-radius: 50%; /* biar bulat */
  object-fit: cover;
  margin-bottom: 10px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.2);
  transition: transform 0.1s;
}

.slide img:hover {
  transform: scale(1.1);
}

.slide p {
  font-size: 14px;
  margin: 0;
}

/* Animasi jalan */
@keyframes scroll {
  0%   { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}
</style>


  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5>Tentang Kami</h5>
          <p>SMK PKP 1 Jakarta menyediakan sistem e-learning dan ujian online untuk mendukung pembelajaran digital.</p>
        </div>
        <div class="col-md-4">
          <h5>Kontak</h5>
          <p>📍 Jl. Raya PKP No.1, Jakarta</p>
          <p>📞 (021) 8700113</p>
          <p>✉️ elearningsmkpkp1jkt.sch.id</p>
        </div>
        <div class="col-md-4">
          <h5>Link Cepat</h5>
          <ul class="list-unstyled">
            <li><a href="#">Home</a></li>
            <li><a href="#guru">Guru</a></li>
            <li><a href="index.php?action=loginPage">Login</a></li>
          </ul>
        </div>
      </div>
      <div class="text-center mt-4">
        <p>&copy; <?= date("Y") ?> SMK PKP 1 Jakarta. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
