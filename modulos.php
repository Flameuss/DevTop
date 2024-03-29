<?php
session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" href="./img/dt.ico" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./styles/theme.css">
  <!-- <link rel="stylesheet" type="text/css" href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css"> -->
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-secondary" style="">
    <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar12">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar12"> <a class="navbar-brand d-none d-md-block" href="index.php">
          <i class="fa d-inline fa-lg fa-circle"></i>
          <b>DevTop</b>
        </a>
        <ul class="navbar-nav mx-auto">
          <li class="nav-item text-white">
            <a class="nav-link text-white" href="./cursos.php">Cursos</a>
          </li>
          <li class="nav-item text-white">
            <a class="nav-link text-white" href="#">Novidades</a>
          </li>
          <li class="nav-item text-white">
            <a class="nav-link text-white" href="#">Ranking</a>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item text-white"> <a class="nav-link text-white" href="logout.php">Logout</a> </li>
          <li class="nav-item bg-secondary text-white"> <a class="nav-link text-white" href="#">Register</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-4">
    <div class="container">
      <h2>Escolha o módulo que deseja começar ou prosseguir <?php echo $_SESSION['login']; ?>!</h2>
      <div class="row">
        <div class="col-lg-4 p-3 col-md-12">
          <div class="card " style="height: 480px;">
            <div class="card-body p-4">
              <h2 style="height: 80px;"><b>Iniciando na Lógica de Programação</b></h2><br />
              <p style="height: 200px;">Lógica de programação é a técnica de encadear pensamentos para atingir determinado objetivo, ela permite definir a sequência lógica (algoritmos) para o desenvolvimento de sistemas e programas.</p><br />
              <a class="btn btn-secondary btn-block aling-baseline" href="exer_m01.php">Iniciar aula</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 p-3 col-md-6">
          <div class="card " style="height: 450px;">
            <div class="card-body p-4">
              <h2 style="height: 80px;"><b>Introdução I Desenvolvendo Algoritmos</b></h2><br />
              <p style="height: 200px;">Decrição do desenvolvimento de algoritmos utilizando conceitos de lógica de programação e o conhecimento de como os desenvolver...</p><br />
              <i class="fa fa-lock" aria-hidden="true"></i>
              <a>Bloqueado</a>
            </div>


          </div>
        </div>
        <div class="col-lg-4 p-3 col-md-6">
          <div class="card " style="height: 450px;">
            <div class="card-body p-4">
              <h2 style="height: 80px;"><b>Introdução II Teste de Mesa</b></h2><br />
              <p style="height: 200px;">Neste Módulo itemos ver como um algoritmo deverá ser testado. Este teste é chamado de teste de teste de mesa...</p><br />
              <i class="fa fa-lock" aria-hidden="true"></i>
              <a>Bloqueado</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 p-3 col-md-6">
          <div class="card " style="height: 450px;">
            <div class="card-body p-4">
              <h2 style="height: 80px;"><b>Introdução III à Lógica de Programação</b></h2><br />
              <p style="height: 200px;">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p><br />
              <i class="fa fa-lock" aria-hidden="true"></i>
              <a>Bloqueado</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-4" style="">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 p-3 col-md-6">
          <div class="card " style="height: 450px;">
            <div class="card-body p-4">
              <h2 style="height: 80px;"><b>Intermediario I</b></h2><br />
              <p style="height: 200px;">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p><br />
              <i class="fa fa-lock" aria-hidden="true"></i>
              <a>Bloqueado</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 p-3 col-md-6">
          <div class="card " style="height: 450px;">
            <div class="card-body p-4">
              <h2 style="height: 80px;"><b>Intermediario II</b></h2><br />
              <p style="height: 200px;">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p><br />
              <i class="fa fa-lock" aria-hidden="true"></i>
              <a>Bloqueado</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 p-3 col-md-6">
          <div class="card " style="height: 450px;">
            <div class="card-body p-4">
              <h2 style="height: 80px;"><b>Intermediario III</b></h2><br />
              <p style="height: 200px;">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p><br />
              <i class="fa fa-lock" aria-hidden="true"></i>
              <a>Bloqueado</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-4" style="">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 p-3 col-md-6">
          <div class="card " style="height: 450px;">
            <div class="card-body p-4">
              <h2 style="height: 80px;"><b>Avançado I</b></h2>
              <p style="height: 200px;">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
              <i class="fa fa-lock" aria-hidden="true"></i>
              <a>Bloqueado</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 p-3 col-md-6">
          <div class="card " style="height: 450px;">
            <div class="card-body p-4">
              <h2 style="height: 80px;"><b>Avançado II</b></h2>
              <p style="height: 200px;">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
              <i class="fa fa-lock" aria-hidden="true"></i>
              <a>Bloqueado</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 p-3 col-md-6">
          <div class="card " style="height: 450px;">
            <div class="card-body p-4">
              <h2 style="height: 80px;"><b>Avançado III</b></h2>
              <p style="height: 200px;">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
              <i class="fa fa-lock" aria-hidden="true"></i>
              <a>Bloqueado</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-md navbar-dark bg-secondary" style="">
    <div class="container justify-content-center"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar3">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3">
        <ul class="navbar-nav" style="">
          <li class="nav-item mx-2 text-light"> <a class="nav-link text-light" href="#">Perguntas Frequentes</a> </li>
          <li class="nav-item mx-2"> <a class="nav-link navbar-brand mr-0 text-primary" href="#">
              <b class="text-light">DevTop</b></a> </li>
          <li class="nav-item mx-2" style=""> <a class="nav-link text-light" href="#">Sobre Nós</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5 text-center" style="">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-4">
          <p class="mb-3 lead"><u>Siga-nos em:</u></p>
          <div class="row">
            <div class="col-md-12 d-flex align-items-center justify-content-between"> <a href="#">
                <i class="d-block fa fa-twitter text-muted fa-2x"></i>
              </a> <a href="#">
                <i class="d-block fa fa-instagram text-muted fa-2x"></i>
              </a> <a href="#">
                <i class="d-block fa fa-facebook-official text-muted fa-2x"></i>
              </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/4ce1d457b5.js" crossorigin="anonymous"></script>

</body>

</html>