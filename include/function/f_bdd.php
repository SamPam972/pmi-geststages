<?php

function connexionBDD()
{
	try
	{
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$bdd = new PDO('mysql:host=servbd;port=3306;dbname=bdd_geststages;charset=utf8', 'admindb@geststagesdb-mi-pame', 'MIDBadmin,972', $pdo_options);
	}
	catch(Exception $e)
	{
		$pdo_error = $e->getMessage();
                return false;
	}
    
}

?>
