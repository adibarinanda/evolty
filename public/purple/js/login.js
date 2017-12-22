$('input[type="submit"]').mousedown(function(){
  $(this).css('background', '#2ecc71');
});
$('input[type="submit"]').mouseup(function(){
  $(this).css('background', '#1abc9c');
});

$('#loginform').click(function(){
  $('.login').fadeToggle('slow');
  $(this).toggleClass('green');
});

$(document).ready(function(){
 $("#tipetes").show();
 $("#surabayaoffline").hide();
 $("#region").on("change", function(){
   var v = $(this).val();
   if(v=="Surabaya"){
      $("#tipetes").hide();
      $("#surabayaoffline").show();
   }else{
     $("#tipetes").show();
     $("#surabayaoffline").hide();
   }
 });
});

$(document).mouseup(function (e)
{
    var container = $(".login");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.hide();
        $('#loginform').removeClass('green');
    }
});
