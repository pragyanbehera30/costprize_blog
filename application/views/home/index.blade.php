<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <!-- Bootstrap -->
    {{ HTML::style('css/bootstrap.min.css') }}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
    <header>

        <!--        <h1>Article World</h1>-->
        <img src="http://localhost/Laravel_Prag/public/img/article1.jpg" alt="">

        <h2>Zenith Article Arena</h2>
        <!--        <p class="intro-text" style="margin-top: 50px;">-->
        <!--        </p>-->
    </header>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="col-md-12 column">
                <ul class="nav nav-pills">
                    <li class="active">
                        <a href="{{ URL::to() }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('create') }}">Create</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('display') }}">Display</a>

                    </li>
                    <li class="pull-right">
                        <a href="{{ URL::to('login') }}">Login</a>
                </ul>
                <hr>
            </div>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
{{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>