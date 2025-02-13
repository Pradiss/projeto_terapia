<?php


$card = "";


    $id = $card_terapia["id"];
    $nome = $card_terapia["nome"];
    $descricao = $card_terapia["descricao"];
    $image = $card_terapia["image"];

    $card= "
    <div class='row gutters-sm'>
              <div class='col-sm-12 col-md-4 mb-3'>
                <div class='card '>
                  <div class='card-body rounded '>
                    <div class='d-flex flex-column align-items-center text-center'>
                      <img src='$image'  class='w-100'>
                      <div class='mt-3 p-4 text-light'>
                        <h4 class='text-black'>$nome</h4>
                        <p class='text-secondary mb-1'>$descricao</p>
                        </div>
                      </div>
                  </div>
                </div>
              

                <div class='card mt-3 text-light '>
                    <ul class='list-group list-group-flush'>

                      <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                        
                        <a href=[[base-url]]/servicos/verTerapia/2 class='text-secondary'target='_blank'><h6 class='mb-0'>Pilates</h6></span>
                      </li>
                      
                    </ul>
                    </div>
                </div>

               
                    
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";






$header = file_get_contents("views/templates/html/header.html");
$footer = file_get_contents("views/templates/html/footer.html");
$html = file_get_contents("views/templates/html/terapia.html");

$html = str_replace("[[header]]",$header,$html);
$html = str_replace("[[footer]]",$footer,$html);
$html = str_replace("[[terapia]]",$card,$html);
$html = str_replace("[[base-url]]",$baseUrl,$html);

echo $html;