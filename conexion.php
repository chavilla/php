
<?php

class Conexion
{
    protected $db;


    public static function conectar()
    {
        try 
        {
            $db=new PDO('mysql:host=localhost; dbname=informe','root','');
            
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $db->exec('SET CHARACTER SET UTF8');

            return $db;
            
            
        } 
        catch (\Exception $e) 
        {
            die("Error "- $e->getMessage());

            echo "Línea del error: ". $e->getLine();
        } 

        
    }



}


?>