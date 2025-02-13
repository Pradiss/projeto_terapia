
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/views/template/css/main.css">    
</head>
<body>

<section class="vh-100 gradient-custom bg-secondary">
  <div class="container py-2 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-white text-dark" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Cadastre-se</h2>
              <p class="text-white-50 mb-5">Faça seu cadastro aqui</p>

              <?= $erro ?>

                      <form id="form1" name="form1" method="post" action="<?= $baseUrl ?>/usuario/atualizar">
                        <div class="form-floating mb-3">
                           <input type="nome" name="nome" id="nome" class="form-control">
                           <label for="nome">Nome:</label>
                        </div>
                        <div class="form-floating mb-3">
                           <input type="usuario" name="usuario" id="usuario" class="form-control">
                           <label for="usuario">Usuario:</label>
                        </div>
                        <div class="form-floating mb-3">
                           <input type="password" name="senha" id="senha" class="form-control">
                           <label for="senha">Senha:</label>
                        </div>
                        
                        <button type="submit" id="btnAcessar" name="btnAcessar" class="w-100 btn btn-lg btn-primary">Acessar</button>
                     </form>
              

            </div>

            <div>
              <p class="mb-0">Já tem uma conta? </p>
              <a href="<?=$baseUrl?>/login" class="text-dark-50 fw-bold">Entre Aqui</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>

</html>