<!DOCTYPE html>
<head>
	<body>
		<meta http-equiv="Content-Type" content="text/html; charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/gera.js"></script>
		<script src="js/jquery-3.3.1.js"></script>
		<title>Gerador de Currículos</title>	
		<h1>GeraCurrículo2018</h1>
		
		<form method="post" action="gera.php">
		<div id="dados">
			<br><h3>Dados Pessoais</h3>
			<div id="dado">
			Nome: <input type="text" name="nome" size="40"> <br><br>
			Data de nascimento: <input type="text" name="data" size="40"><br><br>
			Idade: <input type="text" name="idade" size="40"><br><br>
			Estado civil: <input type="text" name="ec" size="40"><br><br>
			Endereço: <input type="text" name="end" size="40"><br><br>
			CEP: <input type="text" name="cep" size="40"><br><br>
			Telefone: <input type="text" name="tel" size="40"><br><br>
			E-mail: <input type="text" name="email" size="40">
			</div>
			<br><h3>Objetivos</h3>
			<div id="adi">
			Área de Interesse: <input type="text" name="a" size="40">
			
			<div class="card-body" id="div-formacoes">
                    <h4 class="card-title">Formação</h4>
                    <br><button class="btn btn-sm right" id="btn-adicionar-formacao" name="addEx1" type="button" title="Adicionar formação" onmouseenter ="adicionaExp()">+</button>
                </div>
                </div>
			
			<br><br><br><h3>Referências Pessoais </h3>
			<div id="rp">
			Nome: <input type="text" name="no" size="40"><br><br>
			Telefone: <input type="text" name="t" size="40"><br><br>
			Cidade: <input type="text" name="c" size="40"><br><br>
			UF: <input type="text" name="u" size="40">

               <div class="card-body" id="div-experiencias">
                    <h4 class="card-title">Experiência</h4>
                    <br><button class="btn btn-sm right" type="button" id="btn-adicionar-experiencia" name="addEx2" title="Adicionar experiência" onmouseenter="adicionaExp();">+</button>
               </div>
                </div>
			
			
			<div class="idi">
				<br><br><br><br><br><h3>Idiomas</h3>
			</div>
			<div id="id">
			Idioma: <input type="text" name="i" size="40"><br><br>
			Nível: <input type="text" name="n" size="40">
		</div>
			<br><h3>Cursos, Seminários e Eventos</h3>
			<div id="cse">
			Tipo: <input type="text" name="ex" size="40"><br><br>
			Local: <input type="text" name="loc" size="40"><br><br>
			Instituição: <input type="text" name="in" size="40">
		</div>
			<br><h3>Outras Experiências</h3>
			<textarea class="estilo" name="xtx">
			</textarea>
		</div>
		
<table>
	<td>
		<input type="submit" name="enviar" value="Gerar Currículo"></td><td><input type="reset" name="enviar" value="Redefinir Campos"></td>
			</table>
	</form>

</body>
</head>