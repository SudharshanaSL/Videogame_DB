<!DOCTYPE html>
<html lang="en">

<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="typeahead.min.js"></script>
    <script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'search.php?key=%QUERY',
        limit : 10
    });
    $('input.typeahead1').typeahead({
        name: 'typeahead1',
        remote:'search1.php?key=%QUERY',
        limit : 10
    });
    $('input.typeahead2').typeahead({
        name: 'typeahead2',
        remote:'search2.php?key=%QUERY',
        limit : 10
    });
    $('input.typeahead3').typeahead({
        name: 'typeahead3',
        remote:'gamesbyseries.php?key=%QUERY',
        limit : 10
    });
    $('input.typeahead4').typeahead({
        name: 'typeahead4',
        remote:'gamesbyplatform.php?key=%QUERY',
        limit : 10
    });
    $('input.typeahead5').typeahead({
        name: 'typeahead5',
        remote:'GRbyGAME.php?key=%QUERY',
        limit : 10
    });
});
</script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gamer Spot</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
.bs-example{
    font-family: sans-serif;
    position: relative;
    margin: 50px;
    color: #000000;
}
.typeahead, .tt-query, .tt-hint {
    border: 2px solid #CCCCCC;
    border-radius: 8px;
    font-size: 24px;
    height: 30px;
    line-height: 30px;
    outline: medium none;
    padding: 8px 12px;
    width: 396px;
    color:#000000;
}
.typeahead {
    background-color: #FFFFFF;
}
.typeahead:focus {
    border: 2px solid #0097CF;
}
.tt-query {
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
}
.tt-hint {
    color: #999999;
}
.tt-dropdown-menu {
    background-color: #FFFFFF;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    margin-top: 12px;
    padding: 8px 0;
    width: 422px;
}
.tt-suggestion {
    font-size: 24px;
    line-height: 24px;
    padding: 3px 20px;
    color: #C0C0C0;
}
.tt-suggestion.tt-is-under-cursor {
    background-color: #0097CF;
    color: #FFFFFF;
}
.tt-suggestion p {
    margin: 0;
}
.submit{
    padding:5px 15px; background:#ccc; border:0 none;
cursor:pointer;
-webkit-border-radius: 5px;
border-radius: 5px;
}
</style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">GamerSpot</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Gamer Spot</h1>
                        <h3>Your One Stop Destination for All Gaming 'Queries'</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            
                            <li>
                                <a href="https://github.com/tkkr6895/Videogame_DB" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                             <hr class="intro-divider">

    <p>Search By Video Game Name</p>
    <form method = "post" action="test.php?go" id="searchform">
        <input type="text" name="typeahead" class="typeahead tt-query"   autocomplete="off" spellcheck="false" placeholder="Type in the Video game name here">
        <input type="submit" name="submit"   value="Submit">
        </form>
    <p>Search By Genre</p>
    <form method = "post" action="test1.php?go" id="searchform1">
        <input type="text" name="typeahead1" class="typeahead1 tt-query"   autocomplete="off" spellcheck="false" placeholder="Type in the genre here">
        <input type="submit" name="submit"   value="Submit">
        </form>
    <p>Search By Studio</p>
    <form method = "post" action="gamesbystudio.php?go" id="searchform">
        <input type="text" name="typeahead2" class="typeahead2 tt-query"   autocomplete="off" spellcheck="false" placeholder="Type in the Studio name here">
        <input type="submit" name="submit"   value="Submit">
        </form>
    <p >Search By Series</p>
    <form method = "post" action="gamesbyseries.php?go" id="searchform">
        <input type="text" name="typeahead3" class="typeahead3 tt-query"   autocomplete="off" spellcheck="false" placeholder="Type in the Series name here">
        <input type="submit" name="submit"   value="Submit">
        </form>
    <p >Search for Games by Platform</p>
    <form method = "post" action="gamesbyplatform.php?go" id="searchform">
        <input type="text" name="typeahead4" class="typeahead4 tt-query"   autocomplete="off" spellcheck="false" placeholder="Type in the Platform name here">
        <input type="submit" name="submit"   value="Submit">
        </form>
    <p >Search for Gross Revenue of a game by GAME NAME</p>
    <form method = "post" action="GRbyGAME.php?go" id="searchform">
        <input type="text" name="typeahead5" class="typeahead4 tt-query"   autocomplete="off" spellcheck="false" placeholder="Type in the game name here">
        <input type="submit" name="submit"   value="Submit">
        </form>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    
    </div>
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Broken Engineering Dreams. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
