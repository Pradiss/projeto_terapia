<?php


$card = "";


    $id = $card_profissional["id"];
    $nome = $card_profissional["nome"];
    $especialidade = $card_profissional["especialidade"];
    $image = $card_profissional["image"];

    $card= "
    <div class='card rounded-5 mb-3' '>
      <div class='row g-0'>
        <div class='col-md-4'>
          <img src='$image' class='img rounded-start' alt='...'>
        </div>
        <div class='col-md-8 p-5'>
          <div class='card-body'>
          <h4 class='card-text text-secondary'>$especialidade</h4>
            <h1 class='card-title text-dark'>$nome</h1>

            <ul>
                <li>whatsApp</li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div class='row gutters-sm'>
              <div class='col-sm-12 col-md-4 mb-3'>
                <div class='card contato  p-3'>
                <h3 class='text-dark text-center '>Agende sua consulta</h3>
                <form id='form1' name='form1' method='post' action='<?= $baseUrl ?>/perfil/atualizar'>
            
            
            <div class='p-3 d-flex '>
                <input type='text' id='nome'  name='nome' class='form-control p-3 contato' placeholder='Digite seu Nome' required>
                
            </div>
            
            <div class='p-3 '>
                <input type='text' id='nome'  name='nome' class='form-control p-3 contato' placeholder='Digite seu Sobrenome' required>
               
            </div>
            <div class='p-3  '>
                <input type='number' id='numero'  name='numero' class='form-control p-3 contato' placeholder='Digite seu número' required>
               
            </div>

           
            
            <div class='p-3 d-flex'>
                <input type='date' id='data'  name='data' class='form-control p-3 me-3 contato' placeholder='Escolha o Dia>
                
                 <div>
                    <input type='time' id='horario'  name='horario' class='form-control p-3 contato rounded-5 ' placeholder='horas'>

                </div>
                <button type='submit' id='btnAcessar' name='btnAcessar' class=' btn-login w-100 fw-bold text-white btn btn-lg btn-dark'>Agende sua consulta</button>
            </div>
          </div>
               <input type='hidden' name='acao' value='<?= ?>'>
               
            </form>
                  
                </div>
              

                <div class='card mt-3 text-ligh contato p-3 '>
                    
                   
                </div>

               <div class='col-md-8 '>
                  <div class='card text-dark contato p-3'>
                    <div class='card-body rounded '>
                      <div class='row'>
                          <div class='col-sm-3'>
                            <h6 class='mb-0'></h6>
                          </div>
                          <div class='  col-sm-9 text-secondary'>
                            $nome
                          </div>
                      </div>
                      <hr>
                    </div>
                  </div>
                  

                </div>

              </div>
            </div>
    <section> 
      <div class='row'>
          
      </div>
    
    </section>";






$header = file_get_contents("views/templates/html/header.html");
$footer = file_get_contents("views/templates/html/footer.html");
$html = file_get_contents("views/templates/html/doctor.html");

$html = str_replace("[[header]]",$header,$html);
$html = str_replace("[[footer]]",$footer,$html);
$html = str_replace("[[doctor]]",$card,$html);
$html = str_replace("[[base-url]]",$baseUrl,$html);

echo $html;