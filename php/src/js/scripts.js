$(document).ready(function (){
    var buttons = $('.navbar-item');
    var home = document.getElementsByClassName('home-content');
    //hide unloaded content
    $('.work-content').hide();
    $('.about-content').hide();
    $('.contact-content').hide();
    //set home to current loaded page
    var currentLoaded = home;
    document.getElementById('home').classList.add('removed');
    //function which switches between pages
    buttons.on('click', function (evt) {
        //animation for navbar
        $(buttons).each(function(index){
            this.classList.remove('removed');
        });
        this.classList.add('removed');
        //on click, unload current content from page
        unloadContent();
        //load new content
        loadContent(document.getElementsByClassName(this.id + '-content'));
    });
    //function to unload page
    function unloadContent(){
        $(currentLoaded).fadeOut();
        $(currentLoaded).hide();
    }
    //function to load page
    function loadContent(item){
        $(item).fadeIn();
        currentLoaded = item;
    }
});
