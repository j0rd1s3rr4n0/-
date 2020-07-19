<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="./../css/cm.css" type="text/css">
    <link rel="stylesheet" href="./../font-awesome/css/font-awesome.min.css">
<title>Formulario</title>
<style type="text/css">
	tr{border: 0px black dashed;}
	td{border: 0px black dashed}
	b{color:blue;}
</style>
</head>
<header id="header">
    <nav class="menu">
      <div class="logo">
        <a href="./../"><img src="./../img/logo.png"></a>
        <!--
        <a href="#" class="btn-menu" id="btn-menu">
        <i class="icono fa fa-bars fa-2x" aria-hidden="true"></i></a>
        -->
      </div>
      <div class="enlaces" id="enlaces">
        <!--
        <a href="./../"><i class="fa fa-home" aria-hidden="true"></i>HOME</a> 
        -->
        <a href="./../aboutus/"><i class="fa fa-file-text-o" aria-hidden="true"></i>ABOUT US</a>
        <a href="./../projects/"><i class="fa fa-folder"></i>PROJECTS</a>
        <!-- <i class="fa fa-envelope-open-o" aria-hidden="true"></i>CONTACT</a> -->
        <a href="./../login/"><i class="fa fa-user-circle" aria-hidden="true"></i>LOGIN</a>
        <a href="./../register/"><i class="fa fa-sign-out" aria-hidden="true"></i>REGISTER</a>
        <!--
        <a href="shop.html"><i class="fa fa-shopping-cart"></i></i>Shop</a>
        -->
      </div>
    </nav>            
</header>

<body bgcolor="#FFFFFF" style="color:white;">
<FORM method="post" name="formulario">
	<center>
		<h1>Ingrese Los Datos Del Problema:</h1>
		<p>Contactaremos con usted lo mas pronto posible. Muchas Gracias por la Espera.</p>
		<table style="color:white;">
		<tr>
			<td>
				<p>Nombre:</p>
			</td>
			<td>
				<input type="text" name="nombre" placeholder="Por ejemplo, Juan"
 id="nombre" required pattern="[A-Za-z0-9]{5,40}">
			</td>
		</tr>
		<tr>
			<td>
				<p>Apellido:</p>
			</td>
			<td>
				<input type="text" name="apellido" placeholder="Por ejemplo, Sanchez"id="apellido" pattern="[A-Za-z0-9]{5,40}" title="Rellene el campo. Asegurese de que no contenga espacios '.' ',' u otros simbolos ">
			<td>
		</tr>
		<tr>
			<td>
				<p>Email:</p>
			</td>
			<td>
				<input type="email" name="correo" placeholder="Por ejemplo, usuario@email.com" id="correo" requiered>
			<td>
		</tr>
		<tr>
			<td>
				<p>Tipo de Problema:</p>
			</td>
			<td>
				<input type="text" name="problema" placeholder="Por ejemplo, Error al abrir index.php" id="problema" requiered>
			<td>
		</tr>
		<tr>
			<td>
				<p>Otros:</p>
			</td>
			<td>
				<br>
				<br>
				<br>
				<input type="text" name="other" id="other" placeholder="Descripcion detallada del problema." style=" width: 700%;height: 100%;">
			<td>
		</tr>
		<tr>
			<td colspan="1" style="display: inline;">
				<br>
				<input type="submit" value="Enviar" onclick="alert('Formulario Enviado 📤📦')">
			</td>
			<td colspan="1" style="display: inline;">
				<br>
				<input type="reset" onclick="alert('Todo Limpio 🚮')">
			</tr>
	</table>
	</center>
<style>
input[type=text] {
  width: 700%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=email] {
  width: 700%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=submit],input[type=reset] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
</style>
<?php
$nombre="";
if (!empty($_REQUEST['nombre'])){
$nombre=$_REQUEST['nombre'];
}
 
$apellido="";
if (!empty($_REQUEST['apellido'])){
$apellido=$_REQUEST['apellido'];
}
 
$correo="";
if (!empty($_REQUEST['correo'])){
$correo=$_REQUEST['correo'];
}
 
$problema="";
if (!empty($_REQUEST['problema'])){
$problema=$_REQUEST['problema'];
}

$other="";
if (!empty($_REQUEST['other'])){
$other=$_REQUEST['other'];
}

$archivo="/problemas/"."$nombre$apellido.html";
 
$file=fopen($archivo,"a");
fwrite($file,"<html><head><style>b{color:blue;}</style><title>".$archivo."</title><meta charset="."utf-8"."></head><body><h1>Datos</h1><p>Su Nombre es:".$nombre."</p><p>Su Apellido es: ".$apellido."</p><p>Informacion Adicional: ".$other."</p><p>Su correo es: ".$correo."</p><p>Su problema es: ".$problema."</p></body></html>");
fclose($file); 
?>
</FORM>
<center><h3>Visualize Sus Datos Aquí:</h3><iframe src="./../support/a.php" height="500px" width="70%"></iframe>
<footer style="grid-area: footer;">

<table style="background-color:black;margin:0px;" width="100%" height="20%">
  <tr class="footer_fin" style="color:white;border: 0px yellow solid;width:100px;">
    <td colspan="1" rowspan="2" style="logo"><a href="./../"><img src="./../img/logo.png" alt="T2UH3" width="100%" class="invertir"</a></td>
    <td class="textofin pad_dos" style="text-align:justify;"><a href="aboutus.htm" class="t2uh3"><b>T2UH3</b></a> es un proveedo de alojamiento web barato para personas inteligentes, que realmente les encanta ahorrar mucho sin perder las características de alojamiento web barato y de alta calidad.</td>
    <td class="footer_d" style="text-align:left;padding-left:30px;color:white;">
        <p><a class="t2uh3" href="./../sitemap"><i class="fa fa-sitemap" aria-hidden="true"></i> SiteMap</a></p>
        <p><a class="t2uh3" href="./../admin"><i class="fa fa-lock" aria-hidden="true"></i> Admin</a></p>
        <p><a class="t2uh3" href="./../support"><i class="fa fa-life-ring" aria-hidden="true"></i> Support</a></p>
        <p></p>
    </td>
    <td class="footer_d">
<div>
    <p class="followus">
    Follow us on
    </p>
	<!--
  <a href="https://www.linkedin.com/t2uh3/" target="_blank"><img src="./../../../img/linkedin_L.svg" alt="Linked-in logo" class="invertir"></a>
  -->
	<a href="https://www.instagram.com/t2uh3/" target="_blank"><img src="./../img/instagram.svg" alt="Instagram logo" class="invertir"></a>
	<a href="https://www.facebook.com/t2uh3/" target="_blank"><img src="./../img/facebook.svg" alt="Facebook logo" class="invertir"></a>
	<a href="https://twitter.com/t2uh3/" target="_blank"><img src="./../img/twitter.svg" alt="Twitter logo" class="invertir"></a>
</div>
    </td>
    <td class="footer_d">
    <br>
    <p class="followus">
    Payment
    </p>
    	<a href="https://www.paypal.com/webapps/mpp/security/buy-index/"><img src="./../img/paypal.png" width="70%"></a>
    </td>   
  </tr>
  <tr class="footer_d">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</footer>
</body>
</html>