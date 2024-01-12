<?php
$password = readline ('inserisci la tua password');

// if (strlen($password)>=6) {
//     echo"password corretta /n";    
// }else if (strlen($password)>=20) {
//     echo "password troppo lunga /n";
// }else if (strlen($password)<=5){
//     echo"la password è troppo corta /n";
// }

function checkLenght ($string) {
    if (strlen($string)>=6) {
        return true;    
    }else if (strlen($string)>=20) {
        return false;
    }else if (strlen($string)<=5){
        return false;
    }
}

checkLenght($password);



// var_dump(is_numeric($password));
function checknumber($string);


for ($i=0; $i < strlen($string) ; $i++) { 
    if (is_numeric($string[$i])) {
       return true;
    
        
    }
    return false;    
}

checknumber($password);



function checkUpper($string);


for ($i=0; $i < strlen($string) ; $i++) {
    if(ctype_upper( $string[$i]));{
        return true;
    }
    return false;
    
    
}

(checkUpper($password));




// $specials=['!','*','?'];
// for ($i=0; $i < strlen($string) ; $i++) {
//     if(ctype_upper( $string[$i],$specials));{
//         return true;
//     }
//     return false;
    
    
// }

$specials=['!','*','?'];
function chekspecials($string,$array) 
{
    for ($i=0; $i < strlen($string) ; $i++) {
        if(ctype_upper( $string[$i],$specials));{
            return true;
        }
        return false;
    }    
}

(checkUpper($password,$specials));


function checkPassword($string)
{
    $firstrule = checkLenght(string);
    $secondrule = checknumber(string);
    $thirdrule = checkUpper(string);
    $fourthyrule = chekspecials(string, SPECIALS);

}