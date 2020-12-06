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
        navBar.style.paddingTop = '5px';
        navBar.style.paddingBottom = '5px';
        updateHeaderTopMargin(Math.floor(0));
    }
    else {
        navBar.style.paddingTop = '25px';
        navBar.style.paddingBottom = '25px';
        updateHeaderTopMargin(Math.floor(navBar.scrollHeight-1));
    }
}

function toggleMobileMenu() {
    let navMenu = document.getElementById('mobile-menu');

    if (navMenu.className === 'mobile-menu'){
        navMenu.className = 'mobile-menu expanded';
    }
    else {
        navMenu.className = 'mobile-menu';
    }
}