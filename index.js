$(document).ready(function(){

    var pallo = document.querySelector('#ball');
    var field = document.querySelector('#app');

    $('.startbutton').on('click', function(e){
        var i = Math.floor(Math.random() * (9 - 1) + 1);
        var elem = $('#t'+i).addClass('show');
        $('.startscreen').hide();
        setTimeout(function(){
            game.init();
            play();
        },500);
    });


    $(document).on('click', function(e){
        if(game.active){
            var t = e.target.id;
            var x = e.clientX - field.getBoundingClientRect().left - (pallo.clientWidth / 2);
            var y = e.clientY - field.getBoundingClientRect().top - (pallo.clientHeight / 2);

            pallo.style.left = x + "px";
            pallo.style.top = y + "px";
            if($(event.target).hasClass('target')){
                setTimeout(function(){
                    $('#'+t).removeClass('show');
                    var i = Math.floor(Math.random() * (9 - 1) + 1);
                    if(i === t.replace('t', '')){
                        i = Math.floor(Math.random() * (9 - 1) + 1);
                    }
                    var elem = $('#t'+i).addClass('show');
                    game.incrementScore();
                }, 500);
            }else{
                game.decrementLives();
            }
            setTimeout(function(){
                pallo.style.left = 700 + "px";
                pallo.style.top = 500 + "px";
            }, 500);
        }
    });
});

window.game = {
    lives: 0,
    score: 0,
    active: false,
    layers: {
        1: {
            z: 100
        },
        2: {
            z: 200
        },
        3: {
            z: 300
        }
    },
    init: function (){
        this.lives = 3;
        this.score = 0;
        $('#lives').html(this.lives);
        $('#score').html(this.score);
        this.active = true;
        console.log('Lives: '+ this.lives, 'Score: ' + this.score);
    },
    incrementScore: function (){
        this.score++;
        $('#score').html(this.score);
        console.log(this.score);
    },
    decrementLives: function (){
        this.lives--;
        $('#lives').html(this.lives);
        console.log(this.lives);
        if(this.lives === 0){
            this.gameOver();
        }
    },
    gameOver: function (){
        this.active = false;
        $('.endscreen').show();
        console.log(this.active);
        console.log('Game over...');
    }
}

function play(){
    console.log(game.active);
    var tick;
    if(game.active){
        tick = setInterval(function(){
            $('.target').removeClass('show');
            var i = Math.floor(Math.random() * (9 - 1) + 1);
            var elem = $('#t'+i).addClass('show');
            if(!game.active){
                clearInterval(tick);
            }
        }, 1600);
    }else{
        clearInterval(tick);
        $('.target').removeClass('show');
    }
}