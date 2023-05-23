<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>VIAJEI!</title>
</head>

<body>
  <header>
    
    <h1 class="titulo-header">VIAJEI!</h1>
    
    <img class="logo-site" src="./assets//logo_header.png"  alt="VIAJEI">

    <input class="input-logoff" type="submit" class="input-logoff" value="logoff"></input>

  </header>


  <main class="main">
    

  
    <!-- Formulário de postagem -->
    <div class="newPost">

      <div class="infoUser">
        <div class="imgUser">
        </div>
        <strong>User</strong>
      </div>

      <form class="formPost" id="formPost">
        <textarea name="textarea" placeholder="um grande passo para humanidade" id="textarea"></textarea>

        <div class="iconsAndButton">
          <div class="icons">
            <button class="btnFileForm">
              <img src="./assets/img.svg" alt="Adicionar uma imagem">
            </button>
            <button class="btnFileForm">
              <img src="./assets/gif.svg" alt="Adicionar um gif">
            </button>
            <button class="btnFileForm">
              <img src="./assets/video.svg" alt="Adicionar um vídeo">
            </button>
          </div>

          <button type="submit" id="botao" class="btnSubmitForm">Publicar</button>
        </div>
      </form>
    </div>
    <ul class="posts" id="posts"></ul>
  </main>
  <script type="module" src='/Controllers/Form/FormPost.js'></script>
  <br>


 <!-- Thumbnails basicamente------------------------------------------------------- -->
 <div class="row">
  <div class="column">
    <img src="./assets/galeria/1.jpg" style="width:103%" onclick="openModal();currentSlide(1)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="./assets/galeria/2.jpg" style="width:103%" onclick="openModal();currentSlide(2)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="./assets/galeria/3.jpg" style="width:103%" onclick="openModal();currentSlide(3)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="./assets/galeria/4.jpg" style="width:103%" onclick="openModal();currentSlide(4)" class="hover-shadow">
  </div>
</div>

<!-- Galeria Modal/Lightbox ---------------------------------------------------------->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="./assets/galeria/1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="./assets/galeria/2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="./assets/galeria/3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="./assets/galeria/4.jpg" style="width:100%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->
    <div class="column">
      <img class="demo" src="./assets/galeria/1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature">
    </div>

    <div class="column">
      <img class="demo" src="./assets/galeria/2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
    </div>

    <div class="column">
      <img class="demo" src="./assets/galeria/3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains">
    </div>

    <div class="column">
      <img class="demo" src="./assets/galeria/4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Lights">
    </div>
  </div>
</div> 

<script>
  // Open the Modal
  function openModal() {
    document.getElementById("myModal").style.display = "block";
  }
  
  // Close the Modal
  function closeModal() {
    document.getElementById("myModal").style.display = "none";
  }
  
  var slideIndex = 1;
  showSlides(slideIndex);
  
  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
  }
  </script>
 

 <!--RODAPÉ-------------------------------------------------------------------------------->
<footer>
  <p class="conteudo-footer">Contato: <br>
    <a href="mailto:lucasplate@hotmail.com">lucasplate@hotmail.com</a>
  </p>
  </div>
  
</footer>

</body>



</html>