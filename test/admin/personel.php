    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>fufufu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <style>
    span{
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      font-size:30px;
    }
  </style>
  <body>
    <?php 
    $db = new PDO("mysql:host=localhost;dbname=mizu", 'root', '');
    $query = $db->query('select * from login');

    ?>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Shin Mizu</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="shinmizu.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="personel.php">Personel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="report.php">Report</a>
          </li>
          <div class="container-fluid">
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </ul>
        
      </div>
    </div>
  </nav>
<div class="container mt-5">
  <span class="text-center">D A T A  U S E R</span> 
<div class="d-grid gap-2 col-2">
  <a href="tambah.php" class="btn btn-outline-dark mb-3">Insert</a>
</div>
<div class="cointainer-sm">

<div class="d-grid gap-2 col mx-auto">

<table class="table table-dark table-borderless container text-center">
  <thead>
    <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Role</th>
        <th>Aksi</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php
    while ($data = $query->fetch()):?>
    <tr>


        <td><?= $data['username']?></td>

        <td><?= $data['password']?></td>

        <td><?= $data['role']?></td>

        <td>
        <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-outline-light"> Update </a>

        <a href="prodelete.php?id=<?= $data['id']; ?>" class="btn btn-outline-danger"> Delete </a>
        </td>
    </tr>
    <?php endwhile ?>
  </tbody>
</table>
</div>
</div>
</div>
  