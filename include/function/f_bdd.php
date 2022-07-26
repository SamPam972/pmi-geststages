<?php

function connexionBDD()
{
	try
	{
            $bdd = $con=mysqli_init(); mysqli_real_connect($con, "geststagesdb-mi-pame.mariadb.database.azure.com", "admindb@geststagesdb-mi-pame", {MIDBadmin,972}, {bdd_geststages}, 3306);
            return $bdd;
	}
	catch(Exception $e)
	{
		$pdo_error = $e->getMessage();
                return false;
	}
    
}

?>
