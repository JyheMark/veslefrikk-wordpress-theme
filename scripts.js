function updateHeaderTopMargin(newMargin){
    let header = document.getElementsByTagName('header')[0];
    header.style.marginTop = `${newMargin}px`;
}

function onLoad() {
    let navBar = document.getElementById('nav-container');

    updateHeaderTopMargin(Math.floor(navBar.scrollHeight-1));
}

window.onscroll = function resizeNavBar() {
    let navBar = document.getElementById('nav-container');

    if (document.body.scrollTop > 70 || document.documentElement.scrollTop > 70) {
        navBar.style.padding = '5px 70px';
        updateHeaderTopMargin(Math.floor(0));
    }
    else {
        navBar.style.padding = '25px 70px';
        updateHeaderTopMargin(Math.floor(navBar.scrollHeight-1));
    }
}