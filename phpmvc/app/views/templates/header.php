<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman <?= $data['judul']; ?> </title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap-datepicker.css">
   
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light header " >
<div class="container">
  <a class="navbar-brand" href="<?= BASEURL; ?>">PHPMVC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL; ?>/Mahasiswa">Mahasiswa</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= BASEURL; ?>/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
      </li>
      
    </ul>
    <span class="navbar-text">
     Mantap Jiwa
    </span>
  </div>
  </div>
</nav>