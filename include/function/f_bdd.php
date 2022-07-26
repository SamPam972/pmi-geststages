<?php

function connexionBDD()
{
	try
	{
            $con= mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "geststagesdb-mi-pame.mariadb.database.azure.com", "admindb@geststagesdb-mi-pame", "MIDBadmin,92" , "bdd_geststages", 3306);
            return $con;
	}
	catch(Exception $e)
	{
		$pdo_error = $e->getMessage();
                return false;
	}
    
}

?>
