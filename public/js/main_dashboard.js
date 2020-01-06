
$(document).ready(function(){
    /*
    # button's for timeline
    */
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

    /*
    # Global vars 
    */
    var token = $('#token').val(),
        user = $('#userActive').val(),
        route = "http://localhost/chart/"+user;
    /*
    # Graphics bar for dates flow finance and cash flow 
    */
      $.ajax({
          url: route,
          headers: {'X-CSRF-TOKEN': token},
          type: 'GET'
      }) 
      .done(function(result) {
        console.log("success");
        var ctx = document.getElementById('barTir').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',
        
            // The data for our dataset
            data: {
                labels: ['Año 1', 'Año 2', 'Año 3', 'Año 4', 'Año 5', 'Año 6', 'Año 7'],
                datasets: [{
                    label: 'Flujo a 10 años',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: result
                }]
            },
        
            // Configuration options go here
            options: {}
        });
      })
      .fail(function() {
        console.log("error");
      });
  

   /*
  # Graphics bar for expenses 
  */

 var route_2 = "http://localhost/expenses/"+user;

$.ajax({
   url: route_2,
   headers: {'X-CSRF-TOKEN': token},
   type: 'GET'
}) 
.done(function(result) {
  var ctx2 = document.getElementById('barExpenses').getContext('2d');
  var chart2 = new Chart(ctx2, {
      // The type of chart we want to create
      type: 'bar',
  
      // The data for our dataset
      data: {
          labels: ['Año 1', 'Año 2', 'Año 3', 'Año 4', 'Año 5', 'Año 6', 'Año 7'],
          datasets: [{
              label: 'Grafica de gastos',
              backgroundColor: 'rgb(0, 0, 0)',
              borderColor: 'rgb(255, 99, 132)',
              data: result
          }]
      },
  
      // Configuration options go here
      options: {}
  });
})
.fail(function() {
 console.log("error");
});


});/**End ready document **/
