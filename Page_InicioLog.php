<?php
include_once("templates/header_logado.php");
?>
<div class="back_bolinha">

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 4
            </div>
            <img src="imagens/inicio.jpg" style="width:100%" width="350px" height="850px">
            <div class="text">Corte Surreal do Dias</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img src="imagens/teste2.jpg" style="width:100%" width="350px" height="850px">
            <div class="text">Barba e Corte</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img src="imagens/teste3.jpg" style="width:100%" width="350px" height="850px">
            <div class="text">Pigmentação</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="imagens/teste4.jpg" style="width:100%" width="350px" height="850px">
            <div class="text">Promoção do Dias</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>
</div>
<!-- <footer>
    Barbearia Dias
</footer> -->

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}
</script>



<?php
include_once("templates/footer.php");
?>