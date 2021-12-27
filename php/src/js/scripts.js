$(document).ready(function (){
    var buttons = $('.navbar-item');
    var home = document.getElementsByClassName('home-content');
    var work = document.getElementsByClassName('work-content');
    var about = document.getElementsByClassName('about-content');
    var contact = document.getElementsByClassName('contact-content');

    $(work).hide();
    $(about).hide();
    $(contact).hide();

    var currentLoaded = home;

    document.getElementById('home').classList.add('removed');

    buttons.on('click', function (evt) {
        //animation for navbar
        $(buttons).each(function(index){
            this.classList.remove('removed');
        });
        this.classList.add('removed');
        //on click, unload current content from page
        unloadContent();
        //load new content
        switch(this.id){
            case "home":
                console.log("home!");
                loadHomeContent();
                break;
            case "work":
                console.log("work!");
                loadWorkContent();
                break;
            case "about":
                console.log("about!");
                loadAboutContent();
                break;
            case "contact":
                console.log("contact!");
                loadContactContent();
                break;    
        }
    });
    
    function unloadContent(){
        $(currentLoaded).fadeOut();
        $(currentLoaded).hide();
        console.log("unloaded!");
    }

    function loadHomeContent(){
        $(home).fadeIn();
        currentLoaded = home;
    }

    function loadWorkContent(){
        $(work).fadeIn();
        currentLoaded = work;
    }

    function loadAboutContent(){
        $(about).fadeIn();
        currentLoaded = about;
    }

    function loadContactContent(){
        $(contact).fadeIn();
        currentLoaded = contact;
    }
});
