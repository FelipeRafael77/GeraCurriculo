<?php
   require_once( 'fpdf/fpdf.php' );

//dados pessoais

$nome = $_POST['nome']; // Sim, a supressão é perfeitamente válida neste contexto
$data = @$_POST['data']; // pois os parâmetros serão checados logo em seguida.
$idade = @$_POST['idade'];
$ec = @$_POST['ec'];
$endereco = @$_POST['end'];
$cep = @$_POST['cep'];
$telefone = @$_POST['tel'];
$email = @$_POST['email'];

//objetivos

$area = @$_POST['a'];

//formação

$curso = @$_POST['formacao-curso[]'];
$inst = @$_POST['formacao-instituicao[]'];
$conclusao = @$_POST['formacao-conclusao[]'];

//referencias pessoais

$no = @$_POST['no'];
$tel = @$_POST['t']; 
$cidade = @$_POST['c'];
$uf = @$_POST['u'];


//experiencias

$cargo = @$_POST['experiencia-cargo[]'];
$empresa = @$_POST['experiencia-empresa[]'];
$inicio = @$_POST['experiencia-inicio[]'];
$fim = @$_POST['experiencia-fim[]'];


//idiomas

$idioma = @$_POST['i'];
$nivel = @$_POST['n'];

//cursos, seminarios e eventos

$ti = @$_POST['ex'];
$local = @$_POST['loc'];
$instituicao = @$_POST['in'];

//outras experiencias

$xtx = @$_POST['xtx'];


require_once("fpdf/fpdf.php");
 
$pdf= new FPDF("P","pt","A4");
 
 
$pdf->AddPage();
 
$pdf->SetFont('arial','B',18);
$pdf->Cell(0,5,"Curriculo",0,1,'C');
$pdf->Cell(0,5,"","B",1,'C');
$pdf->Ln(8);
 


//nome

$pdf->Cell(0,5,"Dados Pessoais",0,1,'C');

$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Nome:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(0,20,$nome,0,1,'L');
 
//data
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Data:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$data,0,1,'L');
 
//idade
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Idade:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$idade,0,1,'L');
 
//estado civil
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Estado Civil:" ,0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$ec,0,1,'L');
 
//endereco
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Endereco:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$endereco,0,1,'L');
 
//cep
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"CEP:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$cep,0,1,'L');

//telefone
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Telefone:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$telefone,0,1,'L');
 
//email
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"email:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$email,0,1,'L');

//area de interesse
$pdf->SetFont('arial','B',12);
$pdf->Ln(8);
$pdf->Cell(0,5,"Area de Interesse",0,1,'C');
$pdf->Cell(70,20,"Area:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$area,0,1,'L');


//curso
$pdf->SetFont('arial','B',12);
$pdf->Ln(8);
$pdf->Cell(0,5,"Formacao",0,1,'C');
$pdf->Cell(70,20,"Curso:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$curso,0,1,'L');

//instituicao
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Instituicao:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$inst,0,1,'L');

//conclusao
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Conclusao:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$conclusao,0,1,'L');

//nome
$pdf->SetFont('arial','B',12);
$pdf->Ln(8);
$pdf->Cell(0,5,"Referencias",0,1,'C');
$pdf->Cell(70,20,"Nome:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$no,0,1,'L');

//telefone
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Telefone:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$tel,0,1,'L');

//cidade
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Cidade:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$cidade,0,1,'L');

//uf
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"UF:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$uf,0,1,'L');

//cargo

$pdf->SetFont('arial','B',12);
$pdf->Ln(8);
$pdf->Cell(0,5,"Experiencia",0,1,'C');
$pdf->Cell(70,20,"Cargo:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$cargo,0,1,'L');

//empresa
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Empresa:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$empresa,0,1,'L');

//inicio
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Inicio:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$inicio,0,1,'L');
 
//fim
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Fim:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$fim,0,1,'L');

//idioma

$pdf->SetFont('arial','B',12);
$pdf->Ln(8);
$pdf->Cell(0,5,"Idiomas",0,1,'C');
$pdf->Cell(70,20,"Idioma:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$idioma,0,1,'L');

//nivel
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Nivel:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$nivel,0,1,'L');

//tipo
$pdf->SetFont('arial','B',12);
$pdf->Ln(8);
$pdf->Cell(0,5,"Cursos, seminarios e eventos",0,1,'C');
$pdf->Cell(70,20,"Tipo:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$ti,0,1,'L');

//local
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Local:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$local,0,1,'L');

//instituicao
$pdf->SetFont('arial','B',12);
$pdf->Cell(70,20,"Instituicao:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$instituicao,0,1,'L');


//outras experiencias
$pdf->SetFont('arial','B',12);
$pdf->Ln(8);
$pdf->Cell(0,5,"Outras experiencias",0,1,'C');
$pdf->Cell(70,20,"Tipo:",0,0,'L');
$pdf->setFont('arial','',12);
$pdf->Cell(70,20,$xtx,0,1,'L');

 
 $pdf->ln(10);

    $pdf->Output("arquivo.pdf", "D");
?>