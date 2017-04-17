<doctype html>
<html>
<head>
	<title>Practica 15</title>
	<meta charset="utf-8"/>
	<SCRIPT>
		function mensaje(){
			alert ("hola mundo JavaScript");
			enviar();
		}
		function enviar(){
			var _nombre=document.getElementById("nom").value;
			var _edad=document.getElementById("ed").value;
			if(_nombre=="")
				{
					alert("Te falta el nombre");
					return;	
				}
			if(_edad=="")
				{
					alert("Te falta la edad");
					return;	
				}
			document.getElementById("miform").submit();
		}
	</SCRIPT>
</head>
<body>
	<form method= "post" action="validacion.php" id="miform"> 
	<p>
	NOMBRE: <INPUT TYPE="TEXT"
	NAME="nombre" ID="nom"/>
	<br/>
	EDAD: <INPUT TYPE="TEXT"
	NAME="edad" ID="ed"/>
	<br/>
	<INPUT TYPE="BUTTON"
	VALUE="ENVIAR" onclick="mensaje()" />
	</p>
	</form>
</body>
</html>