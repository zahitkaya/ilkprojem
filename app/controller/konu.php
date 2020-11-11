

<?php 
echo '<ul class="nav flex-column p-3 bg-primary" id="ayse">';

for($i=0;$i<100;$i++){

    $sql=$db->prepare("select * from konu where  ders_id=?");     
    $sql->execute([$i]); 
    $a=$sql->fetch(PDO::FETCH_ASSOC);
    if($a['ders_id']){
    	if(url(0)=='ders'){
    		echo "<li class=nav-item'><a class='nav-link' href=".$a['ders_id'].">".ucfirst($a['ders_ad']).'</a><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down-right-circle" fill="" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M10.5 11h-4a.5.5 0 0 1 0-1h2.793L5.146 5.854a.5.5 0 1 1 .708-.708L10 9.293V6.5a.5.5 0 0 1 1 0v4a.5.5 0 0 1-.5.5z"/>
</svg><hr></li>';
    	}
    	else
    echo "<li class='nav-item'><a class='nav-link' href=ders/".$a['ders_id'].">".ucfirst($a['ders_ad']).'</a><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down-right-circle" fill="" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M10.5 11h-4a.5.5 0 0 1 0-1h2.793L5.146 5.854a.5.5 0 1 1 .708-.708L10 9.293V6.5a.5.5 0 0 1 1 0v4a.5.5 0 0 1-.5.5z"/>
</svg><hr></li>';}
} 
echo '</ul>';

require view('konu'); 
?>




