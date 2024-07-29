<?php

    $largeur = 20;
    $hauteur = 10;
    $espace = " ";
    $ligne1 = 0;
    $ligne2 = 0;
    $ligne3 = 0;
    $ligne4 = 0;
    $ligne5 = 0;
    $ligne6 = 0;
    $ligne7 = 0;
    $ligne8 = 0;
    $ligne9 = 0;
    $ligne10 = 0;
    $ligne11 = 0;
    $colonne = 0;


while ( $ligne1 != $largeur){
    echo "_";
    $ligne1++;
};
    echo '<br/>';

while ($colonne <= 8){
        $colonne++;

    while ($ligne2 <= $largeur){
        if ($ligne2 < 1){
            echo "|";
            $ligne2++;
        }

           else if ($ligne2 >= 1 &&$ligne2 <= 19){
             echo "&nbsp $espace ";
             $ligne2++;
        
            }
           else if ($ligne2 == $largeur){
           echo "|" ;
           $ligne2++;
            }
            
             
   
    }
    echo  "<br/>";
    $ligne2 = 0; 
}

while ($ligne2 <= $largeur){
    if ($ligne2 < 1){
        echo "|";
        $ligne2++;
    }

       else if ($ligne2 >= 1 &&$ligne2 <= 19){
         echo "_";
         $ligne2++;
    
        }
       else if ($ligne2 == $largeur){
       echo "|" ;
       $ligne2++;
        }
        
         

}

    




?>
