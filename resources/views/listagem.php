<html>
<head>
    <title>Sistema de submissão de proposta estágio</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">SSPE-CEULJI</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/propostas">Listagem de propostas</a>
                    </li>
                    <li>
                        <a href="/email">Enviar proposta</a>
                    </li>
                    <li>
                        <a href="/sobre">Sobre</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>




    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Listagem de propostas enviadas</h4>
                    </div>
                    <div class="panel-body">
                        <div class="col-mod-6">

	                     	<table class="table table-striped table-bordered table-hover">
	                     	<tr>
	                     	<td><b>Id<b></td>
                            <td><b>Aluno<b></td>
	                     	<td><b>Professor<b></td>
	                     	<td><b>Data envio<b></td>
	                     	</tr>
								<?php foreach ($propostas as $p): ?>
								<tr>
								<td><?= $p->id ?> </td>
		                        <td><?= $p->nomealuno ?> </td>
        						<td><?= $p->nomeprofessor ?> </td>
								<td><?= $p->dataenvio ?> </td>
								</tr>
								<?php endforeach ?>
						    </table>
                        </div>
                      <!--  <a href="#" class="btn btn-default">Enviar</a>    -->              
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
</body>
</html>



