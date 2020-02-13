//Amanpreet kaur
//8622722
<?php
function uniqueCharacters($str){
    for($i=0;$i<strlen($str);$i++)
    {
         for($j=$i+1;$j<strlen($str);$j++)
         {
             if($str[$i]==$str[$j])
             {
                 return true;
             }
         }
    }
    return false;
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['firstname'])){
        $checking=uniqueCharacters($_POST['firstname']);
        
        if($checking==true){
            echo '<p>  Duplicate Characters</p>'
                
        }
        else{
            echo '<p> Enter any Charater</p>';
        }
    }

        ?>
        
        <!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Enter Text</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

<form method="post">

	<p><label>Input String: <input type="text" name="firstname"></label></p>
	<p align="center"><input type="submit" name="submit" value="Submit String"></p>

</form>

</body>
</html>