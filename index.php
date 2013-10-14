<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width; initial-scale=-1">
<title>prueba</title>
</head>

<script>
function showit(){
texto = document.getElementById('texto').value;
alert (texto);	
	
}
</script>

<body>

<header align="center" style="width:100%">APP</header>
<br>
<section align="center" style="width:100%">
<input name="texto" type="text" id="texto"/>
<br>
<input type="button" id="go" name="go" onClick="showit()" value="mostrar" />
<br>
</section>
<footer align="center" style="width:100%"><?php echo date("m/d/Y"); ?></footer>
</body>
</html>
