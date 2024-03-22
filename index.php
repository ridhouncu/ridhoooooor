<?php

include 'config.php';

if (isset($_POST['submit'])) {

	$name = $_POST['name'];
  $email = $_POST['email'];
	$message = $_POST['message'];
  date_default_timezone_set('Asia/Jakarta');
  //waktu
  $current_timestamp = date('d M Y H:i:s');

	$sql = "INSERT INTO komentar (name, email,  message, waktu) 
  VALUES ('$name', '$email', '$message', '$current_timestamp')";

	if ($conn->query($sql) === TRUE) {
		echo "";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!--css-->
    <link rel="stylesheet" href="cssnyabos.css" />

    <title>RidhoCokelat</title>
  </head>
  <body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="admin.php">ChocoR Groupt</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#carouselExampleControls" >Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutus">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#product">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactus">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="feedback.php">Feedback</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--akhir navbar-->

    <!--slide-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/cokelat.jpg" class="d-block w-100" alt="..." />
        </div>
        <!-- <div class="carousel-item">
          <img src="img/" class="d-block w-100" alt="..." />
        </div> -->
        <!-- <div class="carousel-item">
          <img src="img/masjidistiqlal.jpg" class="d-block w-100" alt="..." />
        </div> -->
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!--akhir slide-->

    <!--about us-->
    <div class="aboutus" id="aboutus">
      <section>
        <div class="container p-3 col-11">
          <h1 class="text-center">About Us</h1>
          <p class="text-center" style="font-size: 20px;">
            PT. ChocoR Group didirikan pada tahun 1972, memproduksi Heavy duty split tiles. Dengan filosofi "kualitas adalah segalanya" yang dijalankan secara konsisten oleh seluruh jajaran Direksi, Staff dan Karyawan, produk Cokelat
            Menghasilkan Cokelat yang premium dan tentunya bisa dimakan kalangan usia. Produk yang dihasilkan adalah Cokelat. Dengan proses produksi secara ekstrusi sehingga menghasilkan Cokelat split heavy duty yang
            berkualitas tinggi, memiliki Cokelat premium dan kacang mede pilihan
          </p>
        </div>
      </section>
      
      <section>
        <div class="container p-3 col-11">
          <h2 class="text-center">Visi</h2>
          <p class="text-center" style="font-size: 20px;">Menjadi Produsen Cokelat terkemuka di Indonesia</p>
        </div>
      </section>
        
      <section>
        <div class="container p-3 col-11">
          <h2 class="text-center">Misi</h2>
          <div class="text-center" style="font-size: 20px;">
            <p>1. Menghasilkan Cokelat heavy duty yang berkualitas tinggi dan premium</p>
            <p>2. Memberikan pelayanan terbaik bagi pelanggan</p>
          <br>
          <br>
        </div>
      </section>
    </div>
    <!--akhir about us-->

    <!--product-->
    <div class="product" id="product">
      <section class="container">
        <h1 class="text-center">Produk</h1>

        <div class="row justify-content-center">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card container">
              <div class="card-body">
                <h3 class="card-title text-center">Cokelat</h3>
                <img src="img/coklatbg.jpeg" width="400px" class="container">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#badan"><a href="product.html#badan" class="text-white" style="text-decoration: none;">Selengkapnya</a></button>
              </div>
            </div>
          </div>
          <!-- <div class="col-sm-6">
            <div class="card container">
              <div class="card-body">
                <h3 class="card-title text-center">Celana</h3>
                <img src="img/celana.jpg" width="400px" class="container">
                <button a type="button" class="btn btn-primary" data-bs-toggle="modal"href="product.html"><a href="product.html#bentuk" class="text-white" style="text-decoration: none;" >Selengkapnya</a></button>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div> -->
    <br>

    <!--akhir product-->

    <!--contact us-->
    <div class="contactus" id="contactus">
      <section class="container">
        <h1 class="text-center">Contact Us</h1>

        <div class="d-flex">
          <div>
            <div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
              <div class="card-header">Contact</div>
              <div class="card-body">
                <p class="card-text">Jl. H. Niban Rimin No.99, Buaran, Kec. Serpong, Kota Tangerang Selatan, Banten 1531</p>
                <p class="card-text">Telepon. : +62 21 4600 471</p>
                <p class="card-text">WhatsApp: +62 896 2959 4780</p>
                <p class="card-text">Instagram : Rchocogrupt_</p>
                <p class="card-text">E-mail : Rchocogrupt@gmail.com</p>
              </div>
            </div>  
            <div class="card" style="width: 18rem;">
              <div class="card-header">
                Our Team
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Nina Juanita</li>
                <li class="list-group-item">Agus Sudrajat</li>
                <li class="list-group-item">Heru Hariyawan</li>
              </ul>
            </div>
          </div>
          <div class="px-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253786.72548158403!2d106.39793098671869!3d-6.3399248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e50673d3b375%3A0x14737790c28aa9d5!2sPT.%20Dapur%20Cokelat%20Indonesia!5e0!3m2!1sid!2sid!4v1710510139862!5m2!1sid!2sid" width="800" height="464" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <br>
        <br>
      </section>
    </div>      
    
    <!--akhir contact-->



    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      var counter = 1;
      setInterval(function () {
        document.getElementById("radio" + counter).checked = true;
        counter++;
        if (counter > 3) {
          counter = 1;
        }
      }, 5000);
    </script>
  </body>
</html>
