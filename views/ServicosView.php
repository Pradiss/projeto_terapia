<?php 

$card = "";

foreach($card_servicos as $servicos){
    $id = $servicos["id"];
    $nome = $servicos["nome"];
    $descricao = $servicos["descricao"];
    $image = $servicos["image"];

    $card.= "

    <div class='col-6 col-sm-4 col-lg-2 p-2'>
        <a href='[[base-url]]/servicos/verTerapia/$id' class=' '>
        <div class='card text-bg-dark border border-0 shadow rounded-5 '>
             <img src='$image' class='card-img rounded-5 '  alt='...'>
             <div class='card-img-overlay d-flex  align-items-center flex-column justify-content-center text-center'>
          
                <h2 class='card-title'>$nome</h2>
                <p class='card-text '>$descricao</p>
               
             </div>
        </div>
        </a>
    </div>

   
   
    
    ";


}

$header = file_get_contents("views/templates/html/header.html");
$footer = file_get_contents("views/templates/html/footer.html");
$html = file_get_contents("views/templates/html/servicos.html");

$html = str_replace("[[header]]",$header,$html);
$html = str_replace("[[footer]]",$footer,$html);
$html = str_replace("[[servicos]]",$card,$html);
$html = str_replace("[[base-url]]",$baseUrl,$html);

echo $html;
