<html>

<head>

<title>test</title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" ></script>

<script type="text/JavaScript">

$(function () {

$("#sel option").each(function(i){

if(i>0){

var title="The select val=" +$(this).val();

$(this).attr("title",title);

}

});
} );
</script>

</head>

<body>

<select id="sel">

<option Value="One">One</option>

<option Value="Two">Two</option>

<option Value="Three">Threee</option>

<option Value="Four">Four</option>

<option Value="Five">Five</option>

</select>

</body>

</html>