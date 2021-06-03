var btnUp = document.getElementById('topUp');

window.onscroll = function() {
    var offset = window.pageYOffset;
    if(offset > window.innerHeight) {
        btnUp.style.display = 'block';
    } else {
        btnUp.style.display = 'none';
    }
}

btnUp.onclick = function() {
    jQuery('html').animate({scrollTop:0},100)
}