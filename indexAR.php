<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />

    <!-- Always include this line of code!!! -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="img/favicon.png" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="manifest" href="manifest.webmanifest" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="ARstyle.css" />

    <title>Index AR</title>

    <script>
      function showImage() {
        const inputVal = document
          .getElementById("input-box")
          .value.toUpperCase();
        const imageContainer = document.getElementById("image-container");
        let imageSrc;

        switch (inputVal) {
          case "A" || "a":
            imageSrc = "photos/photos/A-QR.png";
            break;
          case "B" || "b":
            imageSrc = "photos/photos/B-QR.png";
            break;
          case "C" || "c":
            imageSrc = "photos/photos/C-QR.png";
            break;
          case "D" || "d":
            imageSrc = "photos/photos/D-QR.png";
            break;
          case "E" || "e":
            imageSrc = "photos/photos/E-QR.png";
            break;
          case "F" || "f":
            imageSrc = "photos/photos/F-QR.png";
            break;
          case "G" || "g":
            imageSrc = "photos/photos/G-QR.png";
            break;
          case "H" || "h":
            imageSrc = "photos/photos/H-QR.png";
            break;
          case "I" || "i":
            imageSrc = "photos/photos/I-QR.png";
            break;
          case "J" || "j":
            imageSrc = "photos/photos/J-QR.png";
            break;
          case "K" || "k":
            imageSrc = "photos/photos/K-QR.png";
            break;
          case "L" || "l":
            imageSrc = "photos/photos/L-QR.png";
            break;
          case "M" || "m":
            imageSrc = "photos/photos/M-QR.png";
            break;
          case "N" || "n":
            imageSrc = "photos/photos/N-QR.png";
            break;
          case "O" || "o":
            imageSrc = "photos/photos/O-QR.png";
            break;
          case "P" || "p":
            imageSrc = "photos/photos/P-QR.png";
            break;
          case "Q" || "q":
            imageSrc = "photos/photos/Q-QR.png";
            break;
          case "R" || "r":
            imageSrc = "photos/photos/R-QR.png";
            break;
          case "S" || "s":
            imageSrc = "photos/photos/S-QR.png";
            break;
          case "T" || "t":
            imageSrc = "photos/photos/T-QR.png";
            break;
          case "U" || "u":
            imageSrc = "photos/photos/U-QR.png";
            break;
          case "V" || "v":
            imageSrc = "photos/photos/V-QR.png";
            break;
          case "W" || "w":
            imageSrc = "photos/photos/W-QR.png";
            break;
          case "X" || "x":
            imageSrc = "photos/photos/X-QR.png";
            break;
          case "Y" || "y":
            imageSrc = "photos/photos/Y-QR.png";
            break;
          case "Z" || "z":
            imageSrc = "photos/photos/Z-QR.png";
            break;
          case "1":
            imageSrc = "photos/photos/1.png";
            break;
          case "2":
            imageSrc = "photos/photos/2.png";
            break;
          case "3":
            imageSrc = "photos/photos/3.png";
            break;
          case "4":
            imageSrc = "photos/photos/4.png";
            break;
          case "5":
            imageSrc = "photos/photos/5.png";
            break;
          case "6":
            imageSrc = "photos/photos/6.png";
            break;
          case "7":
            imageSrc = "photos/photos/7.png";
            break;
          case "8":
            imageSrc = "photos/photos/8.png";
            break;
          case "9":
            imageSrc = "photos/photos/9.png";
            break;
          case "no":
          case "No":
          case "NO":
            imageSrc = "photos/photos/NO-QR.png";
            break;
          case "yes":
          case "YES":
          case "Yes":
            imageSrc = "photos/photos/YES-QR.png";
            break;
          case "friend":
          case "FRIEND":
          case "Friend":
            imageSrc = "photos/photos/FRIEND-QR.png";
            break;
          case "i love you":
          case "I LOVE YOU":
          case "I Love you":
          case "i Love You":
          case "I love you":
          case "iloveyou":
          case "ILOVEYOU":
            imageSrc = "photos/photos/ILOVEYOU-QR.png";
            break;
          default:
            imageSrc = "";
            break;
        }

        imageContainer.innerHTML = `<img src="${imageSrc}" alt="${inputVal}">`;
      }

      function createButtons() {
        var letter = document.getElementById("input-box").value.toUpperCase();

        var container = document.getElementById("buttonContainer");
        container.innerHTML = "";
        switch (letter) {
          case "A":
            addButton(container, "https://xr.plus/tql");
            break;
          case "B":
            addButton(container, "https://xr.plus/rrg");
            break;
          case "C":
            addButton(container, "https://xr.plus/7yg");
            break;
          case "D":
            addButton(container, "https://xr.plus/76z");
            break;
          case "E":
            addButton(container, "https://xr.plus/nxj");
            break;
          case "F":
            addButton(container, "https://xr.plus/hky");
            break;
          case "G":
            addButton(container, "https://xr.plus/wzt");
            break;
          case "H":
            addButton(container, "https://xr.plus/4sn");
            break;
          case "I":
            addButton(container, "https://xr.plus/pd0");
            break;
          case "J":
            addButton(container, "https://xr.plus/9fd");
            break;
          case "K":
            addButton(container, "https://xr.plus/9p8");
            break;
          case "L":
            addButton(container, "https://xr.plus/5md");
            break;
          case "M":
            addButton(container, "https://xr.plus/0dw");
            break;
          case "N":
            addButton(container, "https://xr.plus/khw");
            break;
          case "O":
            addButton(container, "https://xr.plus/cji");
            break;
          case "P":
            addButton(container, "https://xr.plus/x8j");
            break;
          case "Q":
            addButton(container, "https://xr.plus/gc0");
            break;
          case "R":
            addButton(container, "https://xr.plus/t5c");
            break;
          case "S":
            addButton(container, "https://xr.plus/rsg");
            break;
          case "T":
            addButton(container, "https://xr.plus/499");
            break;
          case "U":
            addButton(container, "https://xr.plus/0v3");
            break;
          case "V":
            addButton(container, "https://xr.plus/bl9");
            break;
          case "W":
            addButton(container, "https://xr.plus/inu");
            break;
          case "X":
            addButton(container, "https://xr.plus/889");
            break;
          case "Y":
            addButton(container, "https://xr.plus/bts");
            break;
          case "Z":
            addButton(container, "https://xr.plus/spz");
            break;
          case "1":
            addButton(container, "https://xr.plus/u94");
            break;
          case "2":
            addButton(container, "https://xr.plus/5cr");
            break;
          case "3":
            addButton(container, "https://xr.plus/lny");
            break;
          case "4":
            addButton(container, "https://xr.plus/fsz");
            break;
          case "5":
            addButton(container, "https://xr.plus/575");
            break;
          case "6":
            addButton(container, "https://xr.plus/u7v");
            break;
          case "7":
            addButton(container, "https://xr.plus/rgk");
            break;
          case "8":
            addButton(container, "https://xr.plus/tfa");
            break;
          case "9":
            addButton(container, "https://xr.plus/gtl");
            break;
          case "yes":
          case "YES":
          case "Yes":
            addButton(container, "https://xr.plus/8i9");
            break;
          case "no":
          case "No":
          case "NO":
            addButton(container, "https://xr.plus/h9t");
            break;
          case "friend":
          case "FRIEND":
          case "Friend":
            addButton(container, "https://xr.plus/m07");
            break;
          case "i love you":
          case "I LOVE YOU":
          case "I Love you":
          case "i Love You":
          case "I love you":
          case "iloveyou":
          case "ILOVEYOU":
            addButton(container, "https://xr.plus/lgv");
            break;
          default:
            alert("Not a valid input ");
        }
      }

      function addButton(container, url) {
        var button = document.createElement("button");
        button.innerHTML = "View Model";
        button.onclick = function () {
          window.open(url, "_blank");
        };
        container.appendChild(button);
      }
    </script>
  </head>
  <body>
    <section class="section-hero">
      <div class="hero">
        <div class="hero-text-box">
          <h1 class="heading-primary">SIGNARity</h1>
          <p class="hero-description">
            Our technology that provides an innovative AR solution for sign
            language recognition and learning it. Our goal is to make sign
            language accessible to everyone, regardless of hearing ability, and
            to provide a platform for learning and practicing sign language
            skills.
          </p>

          <input
            id="input-box"
            class="input-box-design"
            type="text"
            placeholder="Enter Alphabets "
          />

          <a
            href="#cta"
            class="btn btn--full margin-right-sm"
            id="submit-btn"
            onclick="showImage() ; createButtons();"
            >Start Your Learning</a
          >
        </div>

        <div class="container">
          <div id="image-container">
            <img
              src="https://images.pexels.com/photos/7516363/pexels-photo-7516363.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              class="hero-img"
              alt="Woman "
            />
          </div>
          <div id="buttonContainer" class="view-button">
            <span class="first"></span>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
