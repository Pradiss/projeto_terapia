<?php


$card = "";


    $id = $card_profissional["id"];
    $nome = $card_profissional["nome"];
    $especialidade = $card_profissional["especialidade"];
    $image = $card_profissional["image"];
    $descricao = $card_profissional["descricao"];
    $email = $card_profissional["email"];
    $telefone = $card_profissional["telefone"];
    $whatsapp = $card_profissional["whatsapp"];

    $card= "

    <div class='services__info d-flex flex-column justify-content-center align-items-center'>
            <h2 class='subtitle d-flex justify-content-center my-2'>$nome</h2>
            <p class='my-2'>Fazemos parceria com você ao longo de sua jornada de saúde; afastando-se da dor e
                fazendo com que
                você volte a fazer as coisas que ama.</p>
        </div>
        
    <div class='card rounded-5 mb-5' >
      <div class='row rounded-5 '>
        <div class='col-md-4  '>
          <img src='$image' class='img-fluid py-3' alt='...' style='border-radius:1.25rem;important'>
        </div>
        <div class='col-md-8 d-flex align-items-center'>
          <div class='card-body'>
          <h4 class='card-text text-secondary'>$especialidade</h4>
            <h1 class='card-title text-dark'>$nome</h1>
          <div class='py-4'>
            <ul>
                <li class='my-3'><h2 class='text-secondary'>Telefone: $telefone</h2></li>
                <hr>
                <li><h2 class='text-secondary'>WhatsApp: $whatsapp</h2></li>
                <hr>

                <li><h2 class='text-secondary'>Email: $email </h2></li>
               <hr>

              </ul>
          </div>
          <div class='social-links'>
                <ul>
                    <li class='social__link d-flex align-items-center justify-content-center'>
                        <a href='' title='Instagram'>
                            <i class='icon instagram bi bi-instagram'></i>
                        </a>
                    </li>
                    <li class='social__link d-flex align-items-center justify-content-center'>
                        <a href='' title='Linkedin'>
                            <i class='icon linkedin bi bi-linkedin'></i>
                        </a>
                    </li>
                    <li class='social__link d-flex align-items-center justify-content-center'>
                        <a href='#' title='X'>
                            <i class='icon bi bi-facebook'></i>
                        </a>
                    </li>
                </ul>
            </div>
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
                <button type='submit' id='btnAcessar' name='btnAcessar' class=' btn-login w-100 fw-bold text-white '>Agende sua consulta</button>
            </div>
          </div>
               <input type='hidden' name='acao' value='<?= ?>'>
               
            </form>
                  
                

               <div class='col-md-8 '>
                  <div class='card contato  p-3'>
                    <div class='card-body rounded-5'>
                      <div class='row text-black'>
                          <div class='col-sm-4 '>
                            <h3 class='mb-4 text-dark'>Curta Biografia</h3>
                          </div>
                          <hr>
                          <div class='p-3'>
                          <p>$descricao </div>
                          </div>
                    </div>
                  </div>
                  

                </div>
              
              </div>
            </div>
    <section> 
      <div class='row'>
          
      </div>
    
    </section>";






$header = file_get_contents("views/templates/html/headerAdm.html");
$footer = file_get_contents("views/templates/html/footer.html");
$html = file_get_contents("views/templates/html/doctor.html");

$html = str_replace("[[header]]",$header,$html);
$html = str_replace("[[footer]]",$footer,$html);
$html = str_replace("[[doctor]]",$card,$html);
$html = str_replace("[[base-url]]",$baseUrl,$html);

echo $html;