$(document).ready(function() {
$("#owl1").owlCarousel({
        loop:true, //Зацикливаем слайдер
        margin:50, //Отступ от элемента справа в 50px
        nav:false, //Отключение навигации
        autoplay:false, //Автозапуск слайдера
        smartSpeed:1500, //Время движения слайда
        autoplayTimeout:3000, //Время смены слайда
        responsive:{ //Адаптивность. Кол-во выводимых элементов при определенной ширине.
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    $("#owl2").owlCarousel({
        loop:true, //Зацикливаем слайдер
        margin:50, //Отступ от элемента справа в 50px
        nav: false, //Отключение навигации
        autoplay:true, //Автозапуск слайдера
        smartSpeed:1500, //Время движения слайда
        autoplayTimeout:6000, //Время смены слайда
        responsive:{ //Адаптивность. Кол-во выводимых элементов при определенной ширине.
            0:{
                items:1
            },

            768:{
                items:2
            },

            1048:{
                items:2
            }
        }
    });

$("#circle1").animate({
    width: "280px",
    height: "280px",
    top: "500px",
    right: "200px"
}, 1000);

$("#circle2").animate({
    width: "420px",
    height: "420px",
    left: "30%",
    top: "20px"
}, 1000);

$("#circle3").animate({
    width: "320px",
    height: "320px",
    left: "40px",
    top: "500px"
}, 1000);


if ($(document).width() > '1048') {
    $("#main-ph").attr('src', './wp-content/themes/Galina-s-Portfolio/assets/img/big-ph.jpg');
}

if ($(document).width() <= '1048') {
    $("#main-ph").attr('src', './wp-content/themes/Galina-s-Portfolio/assets/img/small-ph.jpg');
}

$('#btn1').click(function() {
    $('#showContent div').removeClass('active');
    $("#c1").addClass('active');
});

$('#btn2').click(function (){
    $('#showContent div').removeClass('active');
    $("#c2").addClass('active');
});

$('#btn3').click(function (){
    $('#showContent div').removeClass('active');
    $("#c3").addClass('active');
});

});