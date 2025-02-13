<?php 

$card = "";

foreach($card_servicos as $servicos){
    $id = $servicos["id"];
    $nome = $servicos["nome"];
    $descricao = $servicos["descricao"];
    $image = $servicos["image"];

    $card.= "

    <div class='col col-sm-3 d-flex '>
        <a href='[[base-url]]/servicos/verTerapia/$id' class=' '>
        <div class='card text-bg-dark border border-0 shadow rounded-5 '>
             <img src='$image' class='card-img rounded-5 '  alt='...'>
             <div class='card-img-overlay'>
          
                <h5 class='card-title'>$nome</h5>
                <p class='card-text'>$descricao</p>
                <p class='card-text'><small></small></p>
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
