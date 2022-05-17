<?php
    //make a function with pre-built string function to show captial letter of your text
    function letter_to_upper($text){
        $upper_text = strtoupper($text);
        return $upper_text;
    }
    $my_text="hello im taha";//your text
    $my_upper_text = letter_to_upper($my_text);
    echo $my_upper_text;//show your upper text

?>
