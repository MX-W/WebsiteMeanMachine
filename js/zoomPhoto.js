function zoomIn(targetId) {
    var container = document.getElementById('resizeContainer');
    var img = document.getElementById(targetId);
    var content = document.getElementById('content');
    var caption = document.getElementById('caption');
    container.style.display = "block";
    content.src = img.src;
    caption.innerHTML = img.alt;
    
    var close = document.getElementsByClassName('close')[0];
    
    close.onclick = function() {
        container.style.display = "none";
    }
}