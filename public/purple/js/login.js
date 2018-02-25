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
 $("#tipetes-id").show();
 $("#surabayaoffline").hide();
 $("#regiononline").hide();
 $("#region").on("change", function(){
   var v = $(this).val();
   if(v=="Surabaya"){
      document.getElementById("IDtipetes").value = 'Offline';
      $("#tipetes-id").hide();
      // $('#tipetes-id').val('Offline');
      $("#surabayaoffline").show();
   }
   else if(v=="Online"){
    document.getElementById("IDtipetes").value = 'Online';
      $("#tipetes-id").hide();
      // $('#tipetes-id').val('Online').change();
      // $('input[select="tipetes"]').val('online');
      $("#regiononline").show();
    }
   else{
     $("#tipetes-id").show();
     $("#surabayaoffline").hide();
     $("#regiononline").hide();
   }
 });
});

// $(document).ready(function(){
//   $("#form-electra").hide();
//   $("#form-baronas").hide();
//   $("#event").on("change", function(){
//     var v = $(this).val();
//     if (v=="electra") {
//       $("#form-electra").show();
//       $("#form-baronas").hide();
//     }
//     else{
//       $("#form-baronas").show();
//       $("#form-electra").hide();
//     }
//   });
// });


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
