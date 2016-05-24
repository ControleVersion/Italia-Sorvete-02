
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- <link rel="shortcut icon" href="http://simple-form-bootstrap.plataformatec.com.br/favicon.ico" type="image/x-icon"> -->
    <title>Example application with SimpleForm and Twitter Bootstrap</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="{{ asset('/css/application-style.css')}}" media="screen" rel="stylesheet" />
    <link href="{{ asset('/css/style.css')}}" media="screen" rel="stylesheet" />
    <meta content="authenticity_token" name="csrf-param" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="pt-br">

    <!-- INFOS SITE -->
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="FB.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:description" content="">

    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/img/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/img/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/img/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/img/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/img/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/img/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/img/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('/img/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/img/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/img/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/img/favicon-16x16.png')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" href="{{ asset('/img/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Dosis:200,300,400,600,700' rel='stylesheet' type='text/css'>

    <style>


    </style>

    <script>
        function removeItemProd(val){
            $('tr#rest'+val).remove();
        }
        function hideNavBar(){
        	
        	var navBar = document.getElementsByClassName('navbar');
        	navBar[0].style.visibility = "hidden";
        	var footerBar = document.getElementsByClassName('footer').innerHTML = "";
        	//footerBar.style.visibility = "hidden";
        	setTimeout(function(){
        	 	$('footer').remove();
        	}, 1000);
        }
    </script>

</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>

            <div style="float:right; margin-top: 50px;">

                <span class="id-user">Olá, Administrador</span>

                <a href="#" class="lnk-meus-dados">Meus dados</a>

                <a href="#" class="lnk-sair">Sair</a>

            </div>

            <!--
            <div class="collapse navbar-collapse" id="myNavbar">


                <ul class="nav navbar-nav">

                    <li class="active">
                    	<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color: #B70000;">
                    		Clientes<span class="caret"></span>
                    	</a>
                    	<ul class="dropdown-menu">

                            <li><a href="{{ url('/clientes') }}">Cadastrar</a></li>
                            <li><a href="{{ url('/clientes/listar') }}">Listar</a></li>

                        </ul>
                    </li>

                </ul>


                <ul class="nav navbar-nav navbar-right">
					
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <span class="glyphicon glyphicon-user"></span> Meus dados <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Cadastro</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
                </ul>




            </div>
            -->

        </div>
    </nav>

    <div class="container master-container">




      @yield('content')


    </div>

    <footer class="footer">
        <div class="container">
            <p>Copyright 2016 <a href="#"> Sorverteria Itália</a></p>

        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('button.btn-add').click(function(){
                var nome = $('input[name=size]').val();
                var qtd = $('input[name=quantity]').val();
                var id = $("table.custab tr").length + 1;
                $('#conteudo-ajax').append(

                        '<tr id="rest'+(id)+'">'
                        +'<td>'+nome+'</td>'
                        +'<td>'+qtd+'</td>'
                        +'<td class="text-center"><a class="btn btn-info btn-xs" href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <span onclick="removeItemProd('+(id)+')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</span></td>'
                        +'</tr>'
                );
            });


        });
        
    </script>

    <!-- SCRIPT PARA GOOGLE FONTS -->
    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Dosis:200,300,400,600,700:latin' ] }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

</body>
</html>
