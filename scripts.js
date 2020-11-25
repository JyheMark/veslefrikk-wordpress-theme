function onLoad() {
    let navBar = document.getElementById('nav-container');
    let header = document.getElementsByTagName('header')[0];

    header.style.marginTop = `${Math.floor(navBar.scrollHeight-1)}px`;
}

window.onscroll = function resizeNavBar() {
    let navBar = document.getElementById('nav-container');

    if (document.body.scrollTop > 70 || document.documentElement.scrollTop > 70) {
        navBar.style.padding = '5px 70px';
    }
    else {
        navBar.style.padding = '25px 70px';
    }
}