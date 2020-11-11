<?php 

//helperları otomatik yükliycez ve class dosyalarını oluşturcaz.
// veri tabanı bağlantısını yapacaz


spl_autoload_register(function($class){
    $file = realpath('.') . '/app/classes/class.' . strtolower($class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});



try{
$db=new PDO('mysql:host=localhost;dbname=ders1','root','12345678');
   
}
catch (PDOException $e){
    echo $e->getMessage();
    
}
require 'system/config.php';
helper::Load();

     ?>