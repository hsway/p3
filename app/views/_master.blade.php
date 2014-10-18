<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="/styles/styles.css">
    <link rel="shortcut icon" href="ico/favicon.ico">
  </head>
  <body id=@yield('bodyid')>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a id="nav-far-left" class="navbar-brand" href="/">Hank Sway - DWA15 P3</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li id="navhome"><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li id="navlorem"><a href="/lorem-ipsum"><span class="glyphicon glyphicon-pencil"></span> Lorem Ipsum</a></li>
            <li id="navfaker"><a href="/faker"><span class="glyphicon glyphicon-user"></span> Random Users</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class='container'>
      <div class="jumbotron">
        <h1>@yield('pagehead')</h1>
        <p>@yield('subhead')</p>
        @yield('form')
      </div>
      @yield('belowfold')
    </div>

    <footer>
        <div class="container">
            <p class="text-muted">
              <span class="glyphicon glyphicon-copyright-mark"></span> 2014 Hank Sway&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="https://github.com/hsway/p3" target="_blank">View source @GitHub</a>
            </p>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- script for 'you are here' navigation -->
    <script>
      $(document).ready(function(){
          var mybodyid = $('body').attr('id');
          var mynavid = '#nav' + mybodyid;
          $(mynavid).addClass('active');
      });
    </script>
  </body>
</html>