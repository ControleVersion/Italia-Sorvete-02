@extends('app')

@section('content')

  <section class="section-login-adm">
      <div class="container">

          <!-- Inicio do Box de Login -->
          <div class="login-box">

              <div class="texto-chamada">

                  <h1>Lorem ipsum dolor amet</h1>

                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comm.</p>

              </div>

              <!-- INÍCIO DO FORM DE LOGIN -->
              <div style="padding:0 0 0 80px; width:440px;" class="panel-body" >

                  <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                  <form id="loginform" class="form-horizontal" role="form">

                      <div class="input-group">
                          <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
                          <input id="login-username" type="text" class="form-control longin-nome" name="username" value="" placeholder="Login">
                      </div>

                      <div class="input-group" style="margin-bottom: 25px">
                          <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> -->
                          <input id="login-password" type="password" class="form-control longin-senha" name="password" placeholder="Senha">
                      </div>

                      <div style="margin-top:10px" class="form-group">
                          <!-- Button -->

                          <div class="col-md-12">

                              <a id="btn-fblogin" href="#" class="btn bt-entrar">Entrar</a>

                          </div>
                      </div>

                      <div class="input-group" style="margin-bottom: 20px;">
                          <div class="checkbox">


                              <label>
                                  <input id="login-remember" type="checkbox" name="remember" value="1"> Lembrar sua senha
                              </label>
                          </div>
                      </div>


                      <div class="form-group">
                          <div class="col-md-12 control">
                              <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >Esqueceu a senha ou usuário? <a href="#" class="esqueceu-senha">Clique aqui.</a></div>
                          </div>
                      </div>
                  </form>

            </div>
            <!-- FIM DO FORM DE LOGIN -->

        </div>
        <!-- Fim do Box de Login -->

      </div>
  </section>






  <!--
  <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Área restrita</div>
                    <div style="float:right; font-size: 80%; position: relative; top:-10px"></div>
                </div>

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form id="loginform" class="form-horizontal" role="form">

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Login">
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="Senha">
                        </div>



                        <div class="input-group">
                            <div class="checkbox">
                                <label>
                                    <input id="login-remember" type="checkbox" name="remember" value="1"> Lembrar
                                </label>
                            </div>
                        </div>


                        <div style="margin-top:10px" class="form-group">
                            <!-- Button

                            <div class="col-md-12">

                                <a id="btn-fblogin" href="#" class="btn btn-lg btn-danger col-md-12">Entrar</a>

                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                   Esqueceu a senha ou usuário?
                                    <a href="#">
                                        Clique aqui.
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>



    </div>
    <script>
      hideNavBar();
    </script>

    -->

  <script>
      hideNavBar();
  </script>

@endsection
