<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran Mahasiswa Baru | UNIVERSITAS TARUMANAGARA</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"  
    />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="list-siswa.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-danger navbar-light">
      <div class="container">
          <a class="navbar-brand" href="#">UNIVERSITAS TARUMANAGARA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link btn-light" href="index.php">Home</a>
                </li>
            </ul>
          </div>
      </div>
    </nav>




    

    <div class="judul text-center p-4">
        <h4>Nama siswa yang sudah mendaftar</h4>
    </div>

    <br>
 
    <div class="tabel-siswa d-flex justify-content-center">
    <table border="2" >
        <thead border="">
            <tr>
                <th>nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Asal Sekolah</th>
            </tr>
        </thead>
        <tbody border="1">

            <?php
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($db, $sql);

            while($siswa = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['jenis_kelamin']."</td>";
                echo "<td>".$siswa['agama']."</td>";
                echo "<td>".$siswa['asal_sekolah']."</td>";

                echo "</td>"; 
            }
            ?>

        </tbody>
    </table>
    </div>

    

    <h5 class="text-center p-5">Total: <?php echo mysqli_num_rows($query) ?></h5>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

</body>
</html>