$(document).ready(function(){
ping();
})
function ping()
{
$("#boton").click(function(){
  $.get('controller/radius.php',function(data)
         {
        console.log(data)
    })
    })
};