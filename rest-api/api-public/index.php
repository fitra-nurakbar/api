<?php
$data = file_get_contents('data/pizza.json');
$menu = json_decode($data, true);

$menu = $menu["menu"];
?>

<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Test | JSON</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container">
               <a class="navbar-brand" href="#">
                    <img src="img/logo.png" alt="logo.png" style="width: 150px;">
               </a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                         <a class="nav-link active" aria-current="page" href="#">All Menu</a>
                         <a class="nav-link" href="#">Features</a>
                         <a class="nav-link" href="#">Pricing</a>
                         <a class="nav-link disabled">Disabled</a>
                    </div>
               </div>
          </div>
     </nav>

     <div class="container">
          <div class="row mt-5">
               <h3>All Menu</h3>
          </div>
          <div class="row">
               <?php foreach ($menu as $row) :?>
               <div class="col-sm-4">
                    <div class="card mb-3">
                         <img src="img/menu/<?= $row["gambar"] ?>" class="card-img-top" alt="american-favourite">
                         <div class="card-body">
                              <h5 class="card-title"><?= $row["nama"] ?></h5>
                              <p class="card-text"><?= $row["deskripsi"] ?></p>
                              <h5 class="card-title">Rp. <?= $row["harga"] ?></h5>
                              <a href="#" class="btn btn-primary">Pesan sekarang</a>
                         </div>
                    </div>
               </div>
               <?php endforeach; ?>
          </div>
     </div>

     <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>