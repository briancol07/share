<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> Calculadora </title>
</head>

<body>
<form id="form1" name="form1" method="post" action="calculadora2.php">
  <label>Primer numero:
  <input name="primero" type="text" id="primero" />
  </label>
  <p>
    <label>Segundo numero:
    <input name="segundo" type="text" id="segundo" />
    </label>
  </p>
  <p>Operacion: 
    <label>
    <select name="signo" id="signo">
      <option value="+">Sumar</option>
      <option value="-">Restar</option>
      <option value="*">Multiplicar</option>
      <option value="/">Dividir</option>
    </select>
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="Submit" value="calcular" />
    </label>
  </p>
</form>
</body>
</html>
