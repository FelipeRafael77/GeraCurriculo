<!DOCTYPE html>
<head>
	<body>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/gera.js"></script>
		<script src="js/jquery-3.3.1.js"></script>
		<title>Gerador de Currículos</title>
		<h1>Curriculum Vitae</h1>
		<div id="dados">
			<br><h3>Dados Pessoais</h3>
			
			Nome: <input type="text" name="Nome"> <br><br>
			Data de nascimento: <input type="text" name="data"><br><br>
			Idade: <input type="text" name="idade"><br><br>
			Estado civil: <input type="text" name="ec"><br><br>
			Endereço: <input type="text" name="end"><br><br>
			CEP: <input type="text" name="cep"><br><br>
			Telefone: <input type="text" name="tel"><br><br>
			e-mail: <input type="text" name="email">
			
			<br><h3>Objetivos</h3>
			Área de Interesse: <input type="text" name="a">
			
			<br><h3>Histórico Profissional</h3>
			Empresa: <input type="text" name="e"><br><br>
			Área: <input type="text" name="a"><br><br>
			Cargo: <input type="text" name="c"><br><br>
			Início do Contrato: <input type="text" name="i"><br><br>
			Término do Contrato: <input type="text" name="t">
			<br><h3>Formação Acadêmica</h3>
			
			Curso: <input type="text" name="c"><br><br>
			Instituição de ensino: <input type="text" name="i"><br><br>
			<form>
				<div class="tabela">Período: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a
					<div class="tab">
						<label><input type="text" name="d">
					</label>
				</div>
				<div class="tab">
					<label> <input type="text" name="j"></label>
				</div>
			</div>
			
			
			<div class="idi">
				<br><h3>Idiomas</h3>
			</div>
			Local: <input type="text" name="l"><br><br>
			Idioma: <input type="text" name="i"><br><br>
			Nível: <input type="text" name="n">
			<br><h3>Cursos, Seminários e Eventos</h3>
			Tipo: <input type="text" name="ex"><br><br>
			Local: <input type="text" name="loc"><br><br>
			Instituição: <input type="text" name="in">
			<br><h3>Outras Experiências</h3>
			<textarea class="estilo">
			</textarea>
		</div>
		
	</form>
	<div id="botoes">
		<input type="submit" name="enviar" value="Gerar Currículo">
		<input type="reset" name="apagar" value="Redefinir">
		
		
	</div>
</body>
</head>