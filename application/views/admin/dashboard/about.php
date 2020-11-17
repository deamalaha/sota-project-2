<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">SOUVANTARA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="<?= site_url('dashboard/') ?>">Admin <span class="sr-only">(current)</span></a>
      </div>
      
    </nav>


<div class="about-section">
  <h1>About Us Page</h1>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="<?=base_url('assets/template/images/user/Reza Arisandy S.jpg')?>"  style="width:100%">
      <div class="container">
        <h2>Reza Arisandy Safruddin</h2>
        <p>D121181016</p>
        <p>rezaarisandy2525@gmail.com</p>
        <div class="container">
          <i class="fa fa-instagram" style="font-size:20px"> <a href="https://www.instagram.com/rezzaarsdy">rezzaarsdy</a></i><br>
          <i class="fa fa-facebook text-green" style="font-size:20px">  <a href="https://www.facebook.com/reza.spensha/" >Rezaa Ariisandy</a></i><br>
          <i class="fa fa-whatsapp" style="font-size:20px"> <a href="https://wa.me/6285741838667">+62 857-4183-8667</a></i>
        </div>
        <br>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="<?=base_url('assets/template/images/user/Fadilah Ramadhani.jpg')?>" style="width:100%">
      <div class="container">
        <h2>Fadilah Ramadhani</h2>
        <p>D121181303</p>
        <p>fadilahramadhani1712@gmail.com</p>
        <div class="container">
          <i class="fa fa-instagram" style="font-size:20px">  <a href="https://www.instagram.com/fdlhramadhani"> fdlhramadhani</a></i><br>
          <i class="fa fa-facebook text-green" style="font-size:20px">  <a href="https://www.facebook.com/dhea.ramad/" >Fadillah Ramadhani</a></i><br>
          <i class="fa fa-whatsapp" style="font-size:20px"> <a href="https://wa.me/6282291565509"> +62 822-9156-5509</a></i>
        </div>
        <br>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="<?=base_url('assets/template/images/user/Noer.jpeg')?>" style="width:100%">
      <div class="container">
        <h2>A.M. Ichsan Noer Abustan</h2>
        <p>D121181509</p>
        <p>ichsann306@gmail.com</p>
        <div class="container">
          <i class="fa fa-instagram" style="font-size:20px"> <a href="https://www.instagram.com/ichsannoer__"> ichsannoer__</a></i><br>
          <i class="fa fa-facebook text-green" style="font-size:20px">  <a href="https://www.facebook.com/profile.php?id=100005365697305" >Ichsan Noer</a></i><br>
          <i class="fa fa-whatsapp" style="font-size:20px"> <a href="https://wa.me/6285353982412"> +62 853-5398-2412</a></i>
        </div>
        <br>
      </div>
    </div>
  </div>
</div>

</body>
</html>