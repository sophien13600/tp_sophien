    <?php include_once "./_head.php"?>
<body>
    <form action="index.php/" method ="post">
        <label for="infinitif">Verbe du premier groupe à l'infinitif</label>
        <input type="text" id ="infintif" name ="infinitif">
        <select name="temps" id="temps">
            <option value="present">Présent</option>
            <option value="futur">Futur</option>
            <option value="imparfait">Imparfait</option>
        </select>
        <button>Conjuguer</button>
    </form>
<?php 
   
   // je recupere le verbe à l'infinitif
      $verbe =$_REQUEST['infinitif'];
      //je recupere le temps
      $temps = $_REQUEST['temps'] ;
//str_replace((array|string $search, array|string $replace, array|string $subject, &$count))
$terminaisons_p = array("e","es","e","ons","ez","ent");
$terminaisons_f = array("ai","as","a","ons","ez","ont");
$terminaisons_i = array("ais","ais","ait","ions","iez","aient");

if(isset($_REQUEST['temps'])and $_REQUEST['temps'] == "present"){
    foreach($terminaisons_p as $terminaison){
        $present = str_replace("er",$terminaison,$verbe);
        echo "$present \n";
    }

}
if(isset($_REQUEST['temps'])and $_REQUEST['temps'] == "imparfait"){
foreach($terminaisons_i as $terminaison){
    $imparfait= str_replace("er",$terminaison,$verbe);
    echo "$imparfait \n";
    }
}  
if(isset($_REQUEST['temps'])and $_REQUEST['temps'] == "futur"){
foreach($terminaisons_f as $terminaison){
    $futur= $verbe . $terminaison;
    echo $futur;
    }
}
   //var_dump($_REQUEST['infinitif']);
   //var_dump($_REQUEST['temps']);
       // je retire l'infinitif
        //je recupere le temps
    //je rajoute la terminaison
       
?>   


   <ul>
    <li>
    </li>
   </ul>

</body>
</html>