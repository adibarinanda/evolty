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
  $("#elementary").hide();
  $("#junior").hide();
  $("#senior").hide();
  $("#umum").hide();
  $("#btn-elementary").on("click", function(){
    $("#elementary").show();
    $("#junior").hide();
    $("#senior").hide();
    $("#umum").hide();
  });
  $("#btn-junior").on("click", function(){
    $("#junior").show();
    $("#elementary").hide();
    $("#senior").hide();
    $("#umum").hide();
  });
  $("#btn-senior").on("click", function(){
    $("#junior").hide();
    $("#elementary").hide();
    $("#senior").show();
    $("#umum").hide();
  });
  $("#btn-umum").on("click", function(){
    $("#junior").hide();
    $("#elementary").hide();
    $("#senior").hide();
    $("#umum").show();
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