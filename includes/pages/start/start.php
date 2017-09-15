<script type="text/javascript" src="js/zoomPhoto.js"></script>
<link rel="stylesheet" href="css/zoomPhoto.css">
<section>
    <div class="slideshowContainer row">
        <img id="imgStart1" class="slide fade" src="img/SlideHome/1.jpg" onclick="zoomIn(event.target.id)">
        <img id="imgStart2" class="slide fade" src="img/SlideHome/2.jpg" onclick="zoomIn(event.target.id)">
        <img id="imgStart3" class="slide fade" src="img/SlideHome/3.jpg" onclick="zoomIn(event.target.id)">
        <img id="imgStart4" class="slide fade" src="img/SlideHome/4.jpg" onclick="zoomIn(event.target.id)">
        <img id="imgStart5" class="slide fade" src="img/SlideHome/5.jpg" onclick="zoomIn(event.target.id)">
        <img id="imgStart6" class="slide fade" src="img/SlideHome/6.jpg" onclick="zoomIn(event.target.id)">
        <img id="imgStart7" class="slide fade" src="img/SlideHome/7.jpg" onclick="zoomIn(event.target.id)">
        <img id="imgStart8" class="slide fade" src="img/SlideHome/8.jpg" onclick="zoomIn(event.target.id)">

        <a class="previous" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    
    
    <!-- Dots under slide -->
    <div class="dotContainer row">
        <span class="dot" onclick="chooseSlide(1)"></span>
        <span class="dot" onclick="chooseSlide(2)"></span>
        <span class="dot" onclick="chooseSlide(3)"></span>
        <span class="dot" onclick="chooseSlide(4)"></span>
        <span class="dot" onclick="chooseSlide(5)"></span>
        <span class="dot" onclick="chooseSlide(6)"></span>
        <span class="dot" onclick="chooseSlide(7)"></span>
        <span class="dot" onclick="chooseSlide(8)"></span>
        
    </div>
</section>

<div id="resizeContainer" class="resizeContainer col-12">
    <span class="close">&times;</span>
    <img class="content" id="content">
    <div id="caption"></div>
</div>

<article>
    <p>Wir sind Mean Machine, eine Hard Rock Band aus Regensburg. Wir spielen seit 5 Jahren zusammen und </p>
</article>

<script type="text/javascript" src="js/slideShow.js"></script>