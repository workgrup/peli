<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/ionic.css">
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript">
 $(document).ready(function()
 {
 $("#insert").click(function(){
 var title=$("#title").val();
 var duration=$("#duration").val();
 var price=$("#price").val();
 var dataString="title="+title+"&duration="+duration+"&price="+price+"&insert=";
 if($.trim(title).length>0 & $.trim(duration).length>0 & $.trim(price).length>0)
 {
 $.ajax({
 type: "POST",
 url:"http://127.0.0.1/curso/insert.php",
 data: dataString,
 crossDomain: true,
 cache: false,
 beforeSend: function(){ $("#insert").val('Connecting...');},
 success: function(data){
 if(data=="success")
 {
 alert("inserted");
 $("#insert").val('submit');
 }