<!DOCTYPE html>
<head>
	<body>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/gera.js"></script>
		<script src="js/jquery-3.3.1.js"></script>
		<title>Gerador de Currículos</title>
		
		<h1>GeraCurrículo2018</h1>
		
        
		<div id="dados">
			<br><h3>Dados Pessoais</h3>
			
			Nome: <input type="text" name="nome"> <br><br>
			Data de nascimento: <input type="text" name="data"><br><br>
			Idade: <input type="text" name="idade"><br><br>
			Estado civil: <input type="text" name="ec"><br><br>
			Endereço: <input type="text" name="end"><br><br>
			CEP: <input type="text" name="cep"><br><br>
			Telefone: <input type="text" name="tel"><br><br>
			e-mail: <input type="text" name="email">
			
			<br><h3>Objetivos</h3>
			Área de Interesse: <input type="text" name="a">
			
			<div class="card-body" id="div-formacoes">
                    <h4 class="card-title">Formação</h4>
                    <br><button class="btn btn-sm right" id="btn-adicionar-formacao" name="addEx" title="Adicionar formação" onmouseenter="adicionaExp();">+</button>
                </div>
			
			<br><br><br><h3>Referências Pessoais </h3>

			Nome: <input type="text" name="n"><br><br>
			Telefone: <input type="text" name="t"><br><br>
			Cidade: <input type="text" name="c"><br><br>
			UF: <input type="text" name="u">

               <div class="card-body" id="div-experiencias">
                    <h4 class="card-title">Experiência</h4>
                    <br><button class="btn btn-sm right" id="btn-adicionar-experiencia" name="addEx" title="Adicionar experiência" onmouseenter="adicionaExp();">+</button>
                </div>
			
			
			<div class="idi">
				<br><br><br><br><br><h3>Idiomas</h3>
			</div>
			Idioma: <input type="text" name="i"><br><br>
			Nível: <input type="text" name="n">
			<br><h3>Cursos, Seminários e Eventos</h3>
			Tipo: <input type="text" name="ex"><br><br>
			Local: <input type="text" name="loc"><br><br>
			Instituição: <input type="text" name="in">
			<br><h3>Outras Experiências</h3>
			<textarea class="estilo" name="xtx">
			</textarea>
		</div>
		<form method="post" action="gera.php">
		<input type="submit" name="enviar" value="Gerar Currículo">
</form>
     <input type="submit" name="enviar" value="Redefinir Campos" onclick="limpaCampos();">
</form>
</body>
</head>