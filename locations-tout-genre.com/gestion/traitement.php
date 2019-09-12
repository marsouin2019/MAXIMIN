<?php
// traitement du formulaire register
// print_r($_POST);

// var_dump(["frmPass"]);  // password_hash

print_r( password-hash($_POST["frmPass"], PASSWORD_DEFAULT


foreach($_POST as $key => $value);
{    
    //echo $key . "valeur" . htmlspecialchars($value);     
    //echo "$key valeur" .htmlspecialchars($value). "<br />";
 /*   if( str_word_count(htmlentities(strinp_tags($value))) < 25 ) 
    {
        echo "$key valeur ".htmlentities(string_tags($value))."<br />";  
    } else {
        echo "La chaine correspondant à $key, n'est pas valide <br />";
    }
    */

}

