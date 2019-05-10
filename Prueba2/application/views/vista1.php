<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<head>
	<title> SUMA </title>
</head>
<body>
<div style="background-color: #ffffcc; padding: 20px 30px; text-align: center;">
	EJEMPLO SUMA
</div>

<div style="background-color: #fff000; padding: 10px 20px; text-align: center;">
	INGRESE LOS VALORES A SUMAR
</div>

<form style="text-align: center; padding: 50px 10px 50px 10px; margin: 10px; box-shadow: 1px 1px 8px 1px" name="formulario" method="POST" action="index.php/nuevo/suma">
	<br>
	<label> Número 1: <input style="text-align: center;" type="text" name="num1" id="num1"></label>
    <br>
    <br>
    <label> Número 2: <input style="text-align: center;" type="text" name="num2" id="num2"></label>
    <br>
    <br>
	<input style="box-shadow: 0px 0px 1px 0px" type="submit" value="  CALCULAR  ">
</form>

</body>
</html>