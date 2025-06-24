<?php 
   if (isset($_REQUEST['infinitif'])) {     
       // je recupere le verbe à l'infinitif
     $verbe =$_REQUEST['infinitif'];
      //je recupere le temps
      $temps = $_REQUEST['temps'] ;// recupere le temps selectionné dans le formulaire     
      $pronoms = ["Je", "Tu", "Il/Elle", "Nous", "Vous", "Ils/Elles"];
      $terminaisons = [
          'present' => ["e","es","e","ons","ez","ent"],
          'futur' => ["ai","as","a","ons","ez","ont"],
          'imparfait'=> ["ais","ais","ait","ions","iez","aient"],
        ];        
        $terminaison = $terminaisons[$temps];
        //str_replace((array|string $search, array|string $replace, array|string $subject, &$count))
        // je remplace l'infinitif 'er' par rien '' ce qui me donne le radical 
        $radical = str_replace('er', '', $verbe);
        // je boucle sur les pronoms 
        foreach ($pronoms as $i => $pronom) {
        //la cle du tableau pronom est la meme que pour le tableau de chaque temps , je boucle sur les terminaisons
        if($temps == 'futur'){
            $conjugaison = $verbe . $terminaison[$i];
            echo "<li>".nl2br("$pronom $conjugaison\n")."</li>";
        }else{
            $terminaison_temps = $terminaison[$i];
            $conjugaison = $radical . $terminaison_temps;
            echo "<li>.".nl2br("$pronom $conjugaison\n")."</li>";
        }
    }
}
?>