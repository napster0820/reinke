$('.btn-line:nth-child(1)').click(function(){
  $('.content').empty();
  $('#content-general').append('<div><p>$12,800 <i class="fas fa-water"></i></p></div>');
});
$('.btn-line:nth-child(2)').click(function(){
  $('.content').empty();
  $('#content-general').append('<div><p>Hola soy el boton 2</p></div>');
});
$('.btn-line:nth-child(3)').click(function(){
  $('.content').empty();
  $('#content-general').append('<div><p>Hola soy el boton 3</p></div>');
});
$('.btn-line:nth-child(4)').click(function(){
  $('.content').empty();
  $('#content-general').append('<div><p>Hola soy el boton 4</p></div>');
});
$('.btn-line:nth-child(5)').click(function(){
  $('.content').empty();
  $('#content-general').append('<div><p>Hola soy el boton 5</p></div>');
});
$('.btn-line:nth-child(6)').click(function(){
  $('.content').empty();
  $('#content-general').append('<div><p>Hola soy el boton 6</p></div>');
});
$('.btn-line:nth-child(7)').click(function(){
  $('.content').empty();
  $('#content-general').append('<div><p>Hola soy el boton 7</p></div>');
});
$('.btn-line:nth-child(8)').click(function(){
  $('.content').empty();
  $('#content-general').append('<div><p>Hola soy el boton 8</p></div>');
});
$('.btn-line:nth-child(9)').click(function(){
  $('.content').empty();
  $('#content-general').append('<div><p>Hola soy el boton 9</p></div>');
});
$('.btn-line:nth-child(10)').click(function(){
  $('.content').empty();
  $('#content-general').append('<div><p>Hola soy el boton 10</p></div>');
});
  $('.dot:nth-child(2)').click(function(){
    $('.inside').animate({
      'width' : '40%'
    }, 500);
  });
  $('.dot:nth-child(3)').click(function(){
    $('.inside').animate({
      'width' : '60%'
    }, 500);
  });
  $('.dot:nth-child(4)').click(function(){
    $('.inside').animate({
      'width' : '80%'
    }, 500);
  });
  if ($('#switch1').not(':checked')){
    $('.modal').wrap('<div class="mask"></div>')
      $('.mask').click(function(){
        $(this).fadeOut(300);
        $('.mask article').animate({
          'top' : '-100%'
        }, 300)
      });
  
      $('.dot').click(function(){
        var modal = $(this).attr('id');
        $('.mask').has('article.' + modal).fadeIn(300);
        $('.mask article.' + modal).fadeIn(0).animate({
          'top' : '10%'
        }, 300);
      });
  }
  $("#switch1").click(function(){
    if ($('#switch1').is(':checked')){
      $('.modal').unwrap('<div class="mask"></div>');
      $('.modal').hide();
      $('.modal').addClass('nobox');
      $('.dot').click(function(){
      var modal = $(this).attr('id');
      $('article.nobox').hide()
      $('article.nobox.' + modal).fadeIn(200)
      });
    } else {
      $('article').removeClass("nobox");
      $('.modal').wrap('<div class="mask"></div>')
      $('.mask').click(function(){
        $(this).fadeOut(300);
        $('.mask article').animate({
          'top' : '-100%'
        }, 300)
      });
  
      $('.dot').click(function(){
        var modal = $(this).attr('id');
        $('.mask').has('article.' + modal).fadeIn(300);
        $('.mask article.' + modal).fadeIn(0).animate({
          'top' : '10%'
        }, 300);
      });
    }
  })