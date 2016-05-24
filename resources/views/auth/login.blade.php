@extends('app')

@section('content')
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



                </div>
            </div>
        </div>



    </div>
    <script>
      hideNavBar();
    </script>
    -->

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

                        <form id="loginform" method="post" action="{{ asset('/auth/login') }}" class="form-horizontal" role="form">
                            {!! csrf_field() !!}
                            <div class="input-group">

                                 <input id="login-username" type="email" class="form-control  longin-nome" placeholder="Email" value="{{ old('email')  }}" name="email"  />

                            </div>

                            <div class="input-group" style="margin-bottom: 25px">

                                <input id="login-password" type="password" placeholder="Senha" class="form-control  longin-senha" value="{{ old('password')  }}" name="password"  />
                            </div>

                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->

                                <div class="col-md-12">

                                    <button type="submit" id="btn-fblogin" href="#" class="btn bt-entrar">Entrar</button>

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





   <script>
        hideNavBar();
    </script>

@endsection
