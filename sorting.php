//Amanpreet kaur
//8622722
<?php
$text = explode(" "," ipsum dolor sit amet,consectetur adipiscing elit,sed do eiusmod tempor incididunt ut lobore et dolore magna aliqua.Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate veilt esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaeacat cupidatat non proisent,sunt in culpa qui officia deserunt mollit anim id est laborum.");
natcasesort($text);

foreach($text as $txt){
    echo"$$txt<br/>";
    
}
?>