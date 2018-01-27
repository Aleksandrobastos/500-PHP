<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>
</head>
<body>
 <h1>Meu Formulário</h1>

<pre>

 <form action="" method="post">

 <label>Nome:</label><input type="text" name="nome"/>
 <label>Email:</label><input type="email" required="email" name="email"/>
 <label>Senha:</label><input type="password" required="senha" name="senha"/>
 
 <input type="submit" value="Enviar" ="">



 	
 </form>

 </pre>

 <?php  


 	if (!empty($_POST)) {

 		print_r($_POST);
 		
 	}

 ?>

</body>
</html>