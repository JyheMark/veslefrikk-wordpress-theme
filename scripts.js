function onLoad() {
    let navBar = document.getElementById('nav-container');
    let header = document.getElementsByTagName('header')[0];

    header.style.marginTop = `${navBar.scrollHeight}px`;
}

window.onscroll = function resizeNavBar() {
    let navBar = document.getElementById('nav-container');

    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        navBar.style.padding = '0px 40px';
    }
    else {
        navBar.style.padding = '25px 40px';
    }
}