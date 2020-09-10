<?php 
	include 'header.php';
?>
<?php 
	require_once 'ConnectMysql.php';
?>
	<form action="ProfessorAdd.php" method="POST">
					<input id="ADDVoltar" type="submit" name="voltar" value="Voltar">		
	</form>
	
	<form action="#" method="POST">
		<center>
			<p class="titulos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ADICIONAR AGENDAMENTO </p>
			<table>
				<tr>
					<td>
						<p>Tema</p>
					</td>
					<td>
						<input type="text" name="tema" placeholder="ex: Segunda Guerra Mundial">
					</td>
				</tr>
				<tr>
					<td>
						<p>Disciplina</p>
					</td>
					<td>
						<div class="select-disciplina">
							<select name="disciplina">
								<option>Selecione</option>
								<option value="bio">Biologia</option>
								<option value="ds">DS</option>
								<option value="edf">Educação Física</option>
								<option value="filo">Filosofia</option>
								<option value="fisc">Física</option>
								<option value="geo">Geografia</option>
								<option value="hist">História</option>
								<option value="ing">Inglês</option>
								<option value="pt">Língua Portuguesa</option>
								<option value="mat">Matemática</option>
								<option value="pc">PC</option>
								<option value="ptcc">PTCC</option>
								<option value="qui">Química</option>
								<option value="rcd">RCD</option>
								<option value="soc">Sociologia</option>
								<option value="tpm">TPM</option>
							</select>
						</div>
					</td>
				</tr>
				<!--
							OBS: PUXAR DO PHP!
				<tr>
					<td>
						<p>Professor(a)</p>
					</td>
					<td>
						<input type="text" name="professor" placeholder="ex: Della Cross">
					</td>
				</tr>-->
				<tr>
					<td>
						<p>Data da prova</p>
					</td>
					<td>
						<p>
							<input type="date" name="data-de-emissao">
						</p>
					</td>
				</tr>
				<!-- 
						OBS: PUXAR A DATA PELO PHP!;
				<tr>
					<td>
						<p>Data de emissão</p>
					</td>
					<td>
						<p>
							<input type="date" name="data-de-emissao">
						</p>
					</td>
				</tr>-->
				<tr>
					<td>
						<p>Equipe</p>
					</td>
					<td>
						<div class="select-disciplina">
							<select name="equipe">
								<option>Individual</option>
								<option>Dupla</option>
								<option>Trio</option>
								<option>Quarteto</option>
								<option>Mais de 5 pessoas</option>
							</select>
						</div>
					</td>
				</tr>								
			</table>
			<input class="botoes" type="submit" name="cadastrar-agendamento" value="Cadastrar">
			<input class="botoes" type="reset" name="limpar" value="Limpar">
			
		</center>
</form>
				
<?php 
	require_once 'footer.php';
?>