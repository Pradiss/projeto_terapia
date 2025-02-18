


<?php 

$header = file_get_contents("views/templates/html/header.php");
$footer = file_get_contents("views/templates/html/footer.html");
$html = file_get_contents("views/templates/html/sobre.html");

$html = str_replace("[[header]]",$header,$html);
$html = str_replace("[[footer]]",$footer,$html);

$html = str_replace("[[base-url]]",$baseUrl,$html);

echo $html;
