
<?php 

    
  /*if(url(1)=='ekle'){
    $query=$db->prepare("insert into users set user_id:user_id,user_name:user_name,user_url:user_url,user_date:user_date");
    $sonuc=$query-> execute([
        'user_id'=>0,
        'user_name'=>url(1),
        'user_url'=>url(1),
        'user_date'=>null
           ]);
         

 
    if($query){
        echo 'üye eklendi';
    }
    
    else 'üye eklenemedi';
      */
 
 // require_once init.php;
if(url(1)=='ekle'){ 
    
$sql=$db->prepare("INSERT INTO users SET user_name=?,user_url=?");
	$sonuc=$sql->execute([
	url(2),url(2)
	]);
    echo 'eklenmiştir sayın '.url(2);
   

}
 else if (url(1)=='duzenle'){
    $sql=$db->prepare("select * from users where user_url=?");
    $sql->execute(array(url(1)));
    $a=$sql->fetch(PDO::FETCH_ASSOC);
    
    $sql1=$db->prepare("UPDATE users SET user_name=?,user_url=? WHERE user_id=?");
    $sonuc=$sql1->execute([
        url(2),url(2),$a['user_id']
    ]);
    echo 'kaydınız güncellenmiştir '.url(2);
}

else{
$url=url(1);
   
    
$sql=$db->prepare("select * from users where user_url=?");
$sql->execute(array($url));
$a=$sql->fetch(PDO::FETCH_ASSOC);
    
    if($url==$a['user_name']){
        echo 'hosgeldiniz '.$a['user_name'];
    }
    else echo 'kaydınız bulunamamıştır. ';

}




?>