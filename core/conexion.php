<?php 

session_start();
//fecha de la app
define('YEAR_APLICACION', 'Abig.app'.' - '.date('Y',time()));

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','calendario');
date_default_timezone_set('America/Lima');


class Conexion extends mysqli{
	public function __construct(){
		parent::__construct(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		$this->connect_errno ? die('ERROR AL CONECTAR A LA BASE DE DATOS') : null;
		$this->set_charset('utf8');

	}

  public function rows($query){
  	try{
  		if (empty($query)) {
  			echo "ocurrio un error \n";
  			throw new Exception('ERROR al obtener las filas');
  			return 0;
  		}else{
  			return mysqli_num_rows($query); //obteiene el numero de filas de un resultado
  		}
  	}catch(Exception $e){
  		echo $e->getMessage();
  		echo '<br>En la linea: ' .$e->getLine();
  	}
  }

  public function liberar($query){
  	return mysql_free_result($query); //Libera la memoria asociada a un resultado

  }
  public function recorrer($query){
  	try{
  		if (empty($query)) {
  			echo "ocurrio un error \n";
  			throw new Exception("ERROR EN LA FUNCION RECORRER");
  			return 0;
  		}else{
  			return mysqli_fetch_array($query);//obtiene una fila de resultados como un array asociativo, numerico, o ambos
  		}
  	}catch(Exception $e){
  			echo $e->getMessage();
  			echo '<br>En la linea: '.$e->getLine();

  		
  	}
  }
  public function recorrer2($query){
  	return fetch_array($query);
  }

}
//juan carlos capitano chavarria

 ?>