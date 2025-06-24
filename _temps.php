<?php 
   
   // je recupere le verbe à l'infinitif
      $verbe =$_REQUEST['infinitif'];
      //je recupere le temps
      $temps = $_REQUEST['temps'] ;
//str_replace((array|string $search, array|string $replace, array|string $subject, &$count))
$terminaisons_p = array("e","es","e","ons","ez","ent");
$terminaisons_f = array("ai","as","a","ons","ez","ont");
$terminaisons_i = array("ais","ais","ait","ions","iez","aient");

foreach($terminaisons_p as $terminaison){
    $present = str_replace("er",$terminaison,$verbe);
    echo $present;
}
foreach($terminaisons_i as $terminaison){
    $imparfait= str_replace("er",$terminaison,$verbe);
    echo $imparfait;
}
foreach($terminaisons_f as $terminaison){
    $futur= $verbe . $terminaison;
    return $futur;
}
   //var_dump($_REQUEST['infinitif']);
   //var_dump($_REQUEST['temps']);
       // je retire l'infinitif
        //je recupere le temps
    //je rajoute la terminaison
       
?>   