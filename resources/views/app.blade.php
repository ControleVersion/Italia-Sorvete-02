
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="http://simple-form-bootstrap.plataformatec.com.br/favicon.ico" type="image/x-icon">
    <title>Example application with SimpleForm and Twitter Bootstrap</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="{{ asset('/css/application-style.css')}}" media="screen" rel="stylesheet" />
    <meta content="authenticity_token" name="csrf-param" />

    <style>
        .navbar{
            background-color: #D00000;
            border-color: #D00000;
        }
        .navbar-brand{
            color: #FFFFFF;
        }

        .navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus {
            background-color: #B70000;
            color: white;
        }
        .panel-info>.panel-heading{
            background-color: #D00000;
            border-color: #d6d6d6;
        }
        .panel-info>.panel-heading{
            color: #FFFFFF;
        }
        .panel-info{
            border-color: #C7C7C7;
        }
        .btn-yellow{
            color: #F44336;
            background-color: #FFC107;
            border-color: #FFC107;
        }
        .btn-yellow:hover{
            background-color: #FAF834;
        }

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
<body style="background-color: rgba(158, 158, 158, 0.18);">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Itália - Sorveteria</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                	
                    <li class="active">
                    	<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color: #B70000;">
                    		Clientes     <span class="caret"></span>
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
                            <span class="glyphicon glyphicon-user"></span>
                            Meus dados <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Cadastro</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
                </ul>
            </div>
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
</body>
</html>
