<?php		
	try{
		$conn = new PDO("sqlsrv:Server=DESKTOP-4A564IC\SQLEXPRESS;Database=FormulaUnu","sa","fantakid");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(Exception $e){
		die(print_r($e->getMessage()));
	}	
?>