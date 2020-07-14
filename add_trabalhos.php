<?php 
	include 'header.php';
?>
	<form action="#" method="POST">
		<center>
			<table>
				<tr>
					<td>
						<p>Título</p>
					</td>
					<td>
						<input type="text" name="nome-do-agendamento" placeholder="ex: Atividade avaliativa">
					</td>
				</tr>
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
				<tr>
					<td>
						<p>Professor(a)</p>
					</td>
					<td>
						<input type="text" name="professor" placeholder="ex: Della Cross">
					</td>
				</tr>
				<tr>
					<td>
						<p>Data de emissão</p>
					</td>
					<td>
						<p>
							<input type="date" name="data-de-emissao">
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>Data de entrega</p>
					</td>
					<td>
						<input type="date" name="data-do-agendamento">
					</td>
				</tr>
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
				<tr>
					<td>
						
					</td>
					<td>
						<label>Mínima&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<label>Máxima</label>
					</td>
				</tr>
				<tr>
					<td>
						<p>Nota</p>
					</td>
					<td>
						<span>
							<input type="number" name="nota-minima">&nbsp;
							<input type="number" name="nota-minima">
						</span>
					</td>
				</tr>
				<tr>
					<td>
						<p>Descrição</p>
					</td>
					<td>
						<textarea name="descricao" placeholder=" Aqui você pode digitar informações adicionais ao agendamento"></textarea>
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