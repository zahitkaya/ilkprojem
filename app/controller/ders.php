
<?php 
   require view('ders');
require controller('konu');
    $i=url(1);
    $sql=$db->prepare("select * from konu where  ders_id=?");
    $sql->execute(array($i)); 
    $a=$sql->fetch(PDO::FETCH_ASSOC);
     
    echo '<div class="container mr-0 bg-info" id="dersler_liste"><p class="">'.$a['ders_text']."</p></div> ";
    

?>
