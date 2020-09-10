<?php 
	require_once 'header.php';
?>

<form action="ProfessorADD.php" method="POST">
		<center>
				<p class="titulos"> LOGIN </p>
			<table>
				<tr>
					<td>
						<p>Email</p>
					</td>
					<td>
						<input type="text" name="email" placeholder="ex: usuario07@gmail.com">
					</td>
				</tr>
				<tr>
					<td>
						<p>Senha</p>
				</td>
				<td>
						<input type="password" name="senha" placeholder="  *******">						
					</td>
				</tr>				
			</table>
				<input class="botoes" type="submit" name="login" value="Logar">
				<input class="botoes" type="reset" name="limpar" value="Limpar">
		</center>
	</form>

<?php 
	require_once 'footer.php';
?>	