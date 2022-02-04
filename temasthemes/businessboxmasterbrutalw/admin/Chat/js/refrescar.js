
var auto_refresh = setInterval(function(){
$('#msg_show').load('msg_ref.php');

return false;}, 2000);