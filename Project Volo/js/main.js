function toggleSidebar() {
    document.getElementById("sidebarshadow").classList.toggle('active');
    document.getElementById("sidebar").classList.toggle('active');
}

window.onscroll = function () {
    var y = document.documentElement.scrollTop || document.body.scrollTop;
    if(y > 0) {
        document.getElementById("nav").classList.add("shadow");
    } else {
        document.getElementById("nav").classList.remove("shadow");
    }

    var article = document.getElementsByClassName('article')[0];

    if((window.innerHeight + document.documentElement.scrollTop) >= article.scrollHeight + 100) {
        document.getElementsByClassName('share-btns')[0].style.display = 'block';
    }
};