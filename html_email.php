<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Grécia Burguer</title>
	<style>
		body,html,p, h2 {
			font-family: Arial
		}
	</style>
</head>
<body>
<div style="width: 700px; margin: 0 auto;">
	<table style="width: 100%">
		<thead>
			<tr>
				<th align="center" style="background-color: #ccc;">
	               <img src="assets/img/logo.png" alt="" width="250px;" align="center">
					
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<h2>Novo email do site</h2>
					<p>Nome: <strong><?php echo $nome ?></strong></p>
					<p>E-mail: <strong><?php echo $email ?></strong></p>
					<p>Mensagem: <strong><?php echo $mensagem ?></strong></p>
				</td>
			</tr>
		</tbody>
	</table>
</div>
</body>
</html>