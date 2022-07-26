<?php

function connexionBDD()
{
	try
	{
            $bdd = $con= new PDO('mysql:host=geststagesdb-mi-pame.mariadb.database.azure.com;port=3306;dbname=bdd_geststages;charset=utf8', 'admindb@geststagesdb-mi-pame', 'MIDBadmin,972', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $bdd;
	}
	catch(Exception $e)
	{
		$pdo_error = $e->getMessage();
                return false;
	}
    
}

?>
