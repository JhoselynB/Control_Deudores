// Llamado cuando se cargue la página
posicionarMenu();

$(window).scroll(function() {
    posicionarMenu();
});

function posicionarMenu() {
    var altura_del_header = $('header').outerHeight(true);
    var altura_del_menu = $('nav').outerHeight(true);

    if ($(window).scrollTop() >= altura_del_header) {
        $('nav').addClass('fixed');
        $('#izquierda').addClass('fixediz');
        $('.content').css('margin-top', (altura_del_menu) + 'px');
    } else {
        $('nav').removeClass('fixed');
        $('#izquierda').removeClass('fixediz');
        $('.content').css('margin-top', '0');
    }
}

/*slider*/
imagenes = new Array();
imagenes[0] = "views/layout/main/img/banners/banner.jpg";
imagenes[1] = "views/layout/main/img/banners/banner1.png";
imagenes[2] = "views/layout/main/img/banners/banner2.png";
imagenes[3] = "views/layout/main/img/banners/banner4.jpg";
imagenes[4] = "views/layout/main/img/banners/banner5.jpg";
imagenes[4] = "views/layout/main/img/banners/banner6.jpg";
siguiente = 0;

function CambiaImagen() {
    dimensiones = $("#box-imagen").width();
    $("#box-imagen img").css({left: -dimensiones + "px"}).attr("src", imagenes[siguiente]);
    $("#box-imagen img").animate({left: "+=" + dimensiones});
    $("#box-imagen a").attr("href", imagenes[siguiente]);
    siguiente = siguiente + 1;
    if (siguiente >= imagenes.length) {
        siguiente = 0;
    }
//Aquí puedes colocar el tiempo para cada transición de imagen
    transicion = 10000;
    setTimeout("CambiaImagen()", transicion);
}

$(function() {
    CambiaImagen();
});