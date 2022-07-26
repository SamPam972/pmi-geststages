<?php

function connexionBDD()
{
	try
	{
            $con= new PDO('mysql:host=servbd;port=3306;dbname=bdd_geststages;charset=utf8', 'admindb@geststagesdb-mi-pame', 'MIDBadmin,972', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $con;
	}
	catch(Exception $e)
	{
		$pdo_error = $e->getMessage();
                return false;
	}
    
}

?>
