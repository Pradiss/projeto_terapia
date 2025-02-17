<?php 

$card = "";

foreach($card_profissionais as $perfil){
    $id = $perfil["id"];
    $nome = $perfil["nome"];
    $especialidade = $perfil["especialidade"];
    $image = $perfil["image"];

    $card.= "

    
    <div class='col-12 col-sm-4  d-flex '>
        <div class='card shadow rounded-5' >
        <img src='$image' class='card-img-top rounded-top-5 ' alt='...'>
            <div class='card-body p-4'>
                <h2 class='card-title text-dark'>$nome</h2>
                <h5 class='text-secondary mb-4'>$especialidade</h5>
                <div class='d-flex '>

                    <a href='[[base-url]]/profissionais/verDoctor/$id' class=' btn-perfil '>Perfil </a>
                    

                </div>
            </div>
        </div>
    </div>


   
    
    ";


}

$header = file_get_contents("views/templates/html/header.html");
$footer = file_get_contents("views/templates/html/footer.html");
$html = file_get_contents("views/templates/html/profissionais.html");

$html = str_replace("[[header]]",$header,$html);
$html = str_replace("[[footer]]",$footer,$html);
$html = str_replace("[[profissioais]]",$card,$html);
$html = str_replace("[[base-url]]",$baseUrl,$html);

echo $html;
