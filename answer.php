<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Hello world in JS " />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Emre Guzel" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-light_green.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="css/style.css">
  <title>Volume of a right rectangular prism </title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of a right rectangular prism </span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
      </div>
      <?php

      $lengthOfRightRectangularPrism = $_GET["length-of-right-rectangular-prism"];
      $widthOfRightRectangularPrism = $_GET["width-of-right-rectangular-prism"];
      $heightOfRightRectangularPrism = $_GET["height-of-right-rectangular-prism"];
      $volume = ($lengthOfRightRectangularPrism * $widthOfRightRectangularPrism * $heightOfRightRectangularPrism);
      echo "<br>";
      echo "If a right rectangular prism has lenght = " . $lengthOfRightRectangularPrism . " cm and the width = " . $widthOfRightRectangularPrism . " cm:" . "if the  right rectangular prism has height =" . $heightOfRightRectangularPrism;
      echo "<br />";
      echo "<br />";
      echo "The area of the triangle is " . $volume . " cm³ .";
      ?>
      <br /> <br>
      <div class="page-content-answer">
        <a href="./index.php">Return ...</a>
      </div>
      <br>
      <div class="right-image">
        <img src="./images/volume-of-right-rectectangle.png" alt="Right rectangle">
      </div>
    </main>
</body>

</html>
