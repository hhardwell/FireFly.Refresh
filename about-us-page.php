<!--

  AUTHOR: Alexander
  EDITED: Jason

 -->
<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/about-us.css">
</head>

<?php include 'header.php'; ?>


  <div class="about-us-page-outer container description-font">

    <h1 class="page-title header-font color-grey">About <span class="color-orange">Us</span></h1>

    <div class="inner-about-container">
      <div class="main-container body-container">
        <?php include "about-us-data.php" ?>

        <hr>

        <div class="history-container">
          <h2 class="header-font"> History of FireFly Events </h2>
            <p> Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI,
              quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu
              não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60,
              quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração
              eletrônica como Aldus PageMaker. </p>
        </div>
      </div>

      <div class="container main-container staff-container">
        <h2 class="header-font">FireFly Members</h2>

        <div class="staff-image-container">
          <div class="staff">
            <img class="img-fluid" src="images/staff-images/kayleigh-hall.jpg">
            <p>Kayleigh Hall</p>
          </div>

          <div class="staff">
            <img class="img-fluid" src="images/staff-images/matt-hir.jpg">
            <p>Name and Role </p>
          </div>

          <div class="staff">
            <img class="img-fluid" src="images/staff-images/alex-chenery-howes.jpg">
            <p>Name and Role </p>
          </div>

          <div class="staff">
            <img class="img-fluid"src="images/staff-images/kayleigh-halls.jpg">
            <p>Name and Role </p>
          </div>

          <div class="staff">
            <img class="img-fluid"src="images/staff-images/andrew-hall.jpg">
            <p>Name and Role </p>
          </div>

          <div class="staff">
            <img class="img-fluid"src="images/staff-images/andrew-halls.jpg">
            <p>Name and Role </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php' ?>
</html>
