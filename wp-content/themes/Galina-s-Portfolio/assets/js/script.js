$(document).ready( function() {
    
    for (i = 0; i < $('.button').length ; i++) {
        $($('.button')[i]).attr('class', 'button n' + i);
    }
    
    $('.n0').click(function() {
        $('.lenta').animate({ left: -40 + 'vw'}, 500);
    });

    $('.n1').click(function() {
        $('.lenta').animate({ left: -40*2 + 'vw'}, 500);
    });

    $('.n2').click(function() {
        $('.lenta').animate({ left: -40*3 + 'vw'}, 500);
    });

    $('.n3').click(function() {
        $('.lenta').animate({ left: -40*4 + 'vw'}, 500);
    });

    $('.back-B').click(function() {
        $('.lenta').animate({ left: '0'}, 500);
    });
    
});