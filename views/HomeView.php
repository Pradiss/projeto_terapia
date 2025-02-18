<?php

$card = "";

foreach($card_servicos as $servicos){
    $id = $servicos["id"];
    $nome = $servicos["nome"];
    $descricao = $servicos["descricao"];
    $image = $servicos["image"];

    $card.= "

    <div class='cardss massagem mx-3'>
        
        <div class='card-body  border border-0 shadow rounded-5 '>
             <img src='$image' class='card-img '  alt='...' style='height:39rem; width:24rem;object-fit: cover; border-radius: 1.25rem;'>
             <div class='card-img-overlay d-flex  align-items-center flex-column justify-content-center text-center'>
                <a href='[[base-url]]/servicos/verTerapia/$id' class=' '>
                <h5 class='card-text-title'>$nome</h5>
                <p class='card-text'>$descricao</p>
                <p class='card-text'><small></small></p>
                </a>
             </div>
        </div>
        
    </div>

   
   
    
    ";


}

$header = file_get_contents("views/templates/html/header.php");
$footer = file_get_contents("views/templates/html/footer.html");
$html = file_get_contents("views/templates/html/home.html");

$html = str_replace("[[header]]",$header,$html);
$html = str_replace("[[footer]]",$footer,$html);
$html = str_replace("[[servicos]]",$card,$html);
$html = str_replace("[[base-url]]",$baseUrl,$html);

echo $html;
