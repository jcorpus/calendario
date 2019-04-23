<?php 

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}



header('Content-Type: application/json');
$pdo = new PDO("mysql:dbname=calendario;charset=UTF8;host=127.0.0.1","root","");
$accion = (isset($_GET['accion']))?$_GET['accion']:'leer';

switch ($accion) {
	case 'agregar':
		# code...
	$sentenciaSQL = $pdo->prepare("INSERT INTO eventos(title,description,color,textColor,start,end,modalidad,ponente)
		VALUES(:title,:description,:color,:textColor,:start,:end,:modalidad,:ponente)");
	$respuesta = $sentenciaSQL->execute(array(
		"title" => strip_tags($_POST['title']),
		"description" =>$_POST['description'],
		"color" => $_POST['color'],
		"textColor" => $_POST['textColor'],
		"start" =>$_POST['start'],
		"end" => $_POST['end'],
		"modalidad"=> $_POST['modalidad'],
		"ponente" => ucwords($_POST['ponente'])
	));
	echo json_encode($respuesta);

		break;
	case 'modificar':
	$sentenciaSQL = $pdo->prepare("UPDATE eventos SET 
			title =:title,
			description=:description,
			color=:color,
			textColor=:textColor,
			start=:start,
			end =:end,
			modalidad=:modalidad,
			ponente=:ponente
			WHERE ID=:ID

		");
		$respuesta = $sentenciaSQL->execute(array(
		"ID" =>$_POST['id'],
		"title" => strip_tags($_POST['title']),
		"description" =>$_POST['description'],
		"color" => $_POST['color'],
		"textColor" => $_POST['textColor'],
		"start" =>$_POST['start'],
		"end" => $_POST['end'],
		"modalidad"=> $_POST['modalidad'],
		"ponente"=> ucwords($_POST['ponente'])
	));
		echo json_encode($respuesta);
		break;

	case 'eliminar':

		$respt = false;
		if (isset($_POST['id'])) {
			$sentenciaSQL = $pdo->prepare("DELETE FROM eventos WHERE ID=:ID");
			$respt = $sentenciaSQL->execute(array("ID"=>$_POST['id']));
		}
			echo json_encode($respt);

		break;
	
	default:
		$sentenciaSQL = $pdo->prepare("SELECT * FROM eventos");
		$sentenciaSQL->execute();
		$resultado = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($resultado);
		break;
}


 ?>