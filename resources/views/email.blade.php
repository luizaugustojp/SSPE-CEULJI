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
                        <a href="/email">Enviar proposta</a>
                    </li>
                     <li>
                        <a href="/propostas">Listagem de propostas</a>
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
            <div class="col-lg-12">
                <h1 class="page-header">
                    Sistema de submissão de proposta estágio 
                </h1>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Proposta de estágio</h4>
                    </div>
                    <div class="panel-body">
                        <p>Informe os dados abaixo e selecione o arquivo .docx para enviar a proposta de estágio.</p>
                        <div class="col-mod-6">

                        {!!Form::open(['route'=>'mail.store', 'method'=>'POST', 'files' => true]) !!}
                        {!!Form::label('nomealuno', 'Nome do Aluno:') !!}
                        {!!Form::text('nomealuno',null,['placeholder'=>'Nome Aluno']) !!} <br>
                        {!!Form::label('nomeprofessor', 'Nome do professor:') !!}
                        {!!Form::text('nomeprofessor',null,['placeholder'=>'Nome Professor']) !!} <br>
                        {!!Form::label('email', 'E-mail do professor:') !!}
                        {!!Form::text('email',null,['placeholder'=>'Email']) !!}
                        {!!Form::file('file','',array('id'=>'file','class'=>'')) !!}
                        {!!Form::submit('Enviar') !!}
                        {!!Form::close()!!}
                        </div>
                      <!--  <a href="#" class="btn btn-default">Enviar</a>    -->              
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
</body>
</html>