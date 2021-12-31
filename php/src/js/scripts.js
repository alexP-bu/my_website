$(document).ready(function (){
    var buttons = $('.navbar-item');
    //hide unloaded content
    $(work).hide();
    $(about).hide();
    $(contact).hide();
    //set home to loaded
    var currentLoaded = home;
    document.getElementById('home').classList.add('removed');
    //function to change pages on click
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
    //unload webpage content
    function unloadContent(){
        $(currentLoaded).fadeOut();
        $(currentLoaded).hide();
    }
    //load page
    function loadContent(item){
        $(item).fadeIn();
        currentLoaded = item;
    }
});
