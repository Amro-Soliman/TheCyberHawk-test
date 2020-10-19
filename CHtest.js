$( document ).ready(function() {
$("#form").submit(function(event){
    event.preventDefault();

var productNr = $("#productNr").val();

            $.ajax({
               url: 'CHresult.php',
               type: 'GET', 
               data: {productNr: productNr  },
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                $('#result').html(data);

               }                           
            });
        })
    });
