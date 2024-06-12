<?php

include ("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
  header('Location: list-siswa.php');
}

// ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang diedit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
  die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <link rel="stylesheet" href="form-edit.css">


  <title>Formulir Edit Mahasiswa | UTANA </title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-danger navbar-dark">

    <div class="container">

      <a class="navbar-brand">Edit Form Pendaftaraan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="form" class="pb-4">

    <br><br>

    <div class="container text-dark">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1300">
        <div class="col-md-6 pe-4 ps-4">

          <form action="proses-edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

            <div class="mb-3">
              <label for="nama" class="form-label">Nama lengkap</label>
              <input name="nama" type="text" value="<?php echo $siswa['nama'] ?>" class="form-control" id="nama"
                required <br>
              <aria-describedby="nama">
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <input name="alamat" type="text" value="<?php echo $siswa['alamat'] ?>" class="form-control" id="alamat"
                required rows="3" <br>
              <aria-describedby="alamat">
            </div>
            <div class="mb-3">
              <label for="jenis_kelamin" class="form-label">Jenis kelamin</label>
              <?php $jk = $siswa['jenis_kelamin']; ?>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki"
                  id="flexRadioDefault1" <?php echo ($jk == 'Laki-laki') ? "checked" : "" ?>>
                <label class="form-check-label" for="flexRadioDefault1">
                  laki-laki
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan"
                  id="flexRadioDefault2" checked <?php echo ($jk == 'Perempuan') ? "checked" : "" ?>>
                <label class="form-check-label" for="flexRadioDefault2">
                  perempuan
                </label>
              </div>
            </div>
            <div class="mb-3">
              <label for="agama" class="form-label">Agama</label>
              <?php $agama = $siswa['agama']; ?>
              <select class="form-select" aria-label="Default select example" name="agama" required>
                <option value="">pilih agamamu</option>
                <option value="Islam" <?php echo ($agama == 'Islam') ? "selected" :
                  "" ?>>Islam</option>
                <option value="Kristen" <?php echo ($agama == 'Kristen Protestan') ?
                  "selected" : "" ?>>Kristen</option>
                <option value="Katolik" <?php echo ($agama == 'Kristen Katolik') ?
                  "selected" : "" ?>>katolik</option>
                <option value="Hindu" <?php echo ($agama == 'Hindu') ? "selected" :
                  "" ?>>Hindu</option>
                <option value="Budha" <?php echo ($agama == 'Buddha') ? "selected" :
                  "" ?>>Budha</option>
                <option value="Konghucu" <?php echo ($agama == 'Konghucu') ?
                  "selected" : "" ?>>Konghucu</option>
                <option value="Atheis">Ateis</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="asal_sekolah" class="form-label">Asal sekolah</label>
              <input name="asal_sekolah" type="text" value="<?php echo $siswa['asal_sekolah'] ?>" class="form-control"
                id="asal_sekolah" required <br>
              <aria-describedby="asal_sekolah">
            </div>



            <input class="btn btn-outline-primary" type="submit" value="simpan" name="simpan">
          </form>
        </div>
      </div>
    </div>
    <br>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></>
</body >
</html >