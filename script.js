$(document).ready(function() {
    var delay = 2000;
    $('.btn-default').click(function(e){    
    $.ajax
    ({
    type: "POST",
    url: "ajax.php",
    data: "name="+name+"&email="+email+"&message="+message,
    beforeSend: function() {
    $('.message_box').html(
    '<img src="Loader.gif" width="25" height="25"/>'
    );
    },		 
    success: function(data)
    {
    setTimeout(function() {
    $('.message_box').html(data);
    }, delay);
    }
    });
    });
             
 });