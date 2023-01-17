<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Calculadora </title>
<style type="text/css">
<!--
.Estilo1 {font-size: 9px}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="calculadora2.php">
  <p>Ingrese una operacion </p>
  <p>
    <label>
    <input name="primero" type="text" id="primero" size="10" />
    </label>
    <label>
    <input name="signo" type="text" id="signo" size="3" maxlength="1" />
    </label>
    <label>
    <input name="segundo" type="text" id="segundo" size="10" />
    </label>
    <br />
  </p>
  <p>
    <label>
    <input type="submit" name="Submit" value="calcular" />
    </label>
  </p>
</form>
</body>
</html>
