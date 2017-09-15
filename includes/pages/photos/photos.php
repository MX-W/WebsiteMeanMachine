<script type="text/javascript" src="js/zoomPhoto.js"></script>
<link rel="stylesheet" href="css/zoomPhoto.css">
<section>
    <div class="row imgContainer">
        <img id="img1" class="img col-6" src="img/Photos/1.jpg" onclick="zoomIn(event.target.id)" alt="Das ist der alt-Text des Bildes">
        <img id="img2" class="img col-6" src="img/Photos/2.jpg" onclick="zoomIn(event.target.id)" alt="Das ist der alt-Text des Bildes">
        <img id="img3" class="img col-6" src="img/Photos/3.jpg" onclick="zoomIn(event.target.id)" alt="Das ist der alt-Text des Bildes">
        <img id="img4" class="img col-6" src="img/Photos/4.jpg" onclick="zoomIn(event.target.id)" alt="Das ist der alt-Text des Bildes">
        <img id="img5" class="img col-6" src="img/Photos/5.jpg" onclick="zoomIn(event.target.id)" alt="Das ist der alt-Text des Bildes">
        <img id="img6" class="img col-6" src="img/Photos/6.jpg" onclick="zoomIn(event.target.id)" alt="Das ist der alt-Text des Bildes">
        <img id="img7" class="img col-6" src="img/Photos/7.jpg" onclick="zoomIn(event.target.id)" alt="Das ist der alt-Text des Bildes">
        <img id="img8" class="img col-6" src="img/Photos/8.jpg" onclick="zoomIn(event.target.id)" alt="Das ist der alt-Text des Bildes">
        
            <div id="resizeContainer" class="resizeContainer col-12">
                <span class="close">&times;</span>
                <img class="content" id="content">
                <div id="caption"></div>
            </div>
    </div>
</section>