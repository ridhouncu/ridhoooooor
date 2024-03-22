<?php include("config.php"); ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>List Komentar</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#">A D M I N</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="adminpage.php">Home</a>
          </li>
          </ul>
        </div>
      </div>
    </nav>
<br>
    <header>
    <h3 class="container">List Komentar</h3>
    </header>
    <div style="padding-left: 70px; padding-right: 70px; padding-top:20px;">
    <table class="table table-striped-columns table-bordered">
    <thead>
    <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Komentar</th>
    <th>Email</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $sql = "SELECT * FROM komentar ORDER BY waktu";
    $query = mysqli_query($conn, $sql);
    while($komentar = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>".$komentar['ID']."</td>";
        echo "<td>".$komentar['name']."</td>";
        echo "<td>".$komentar['message']."</td>";
        echo "<td>".$komentar['email']."</td>";
        echo "<td>".$komentar['waktu']."</td>";
        echo "</td>";
        echo "</tr>";
        }
        ?>
        </tbody>
        </table>
        </div>
        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </body>
    </html>