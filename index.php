<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="travail pratique">
    <meta name="author" content="nicole gingras">

    <title>TP2 - Nicole Gingras</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Travail pratique</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Accueil</a></li>
                <li><a href="#">&Agrave; propos</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>

<!-- jumbotron -->
<div class="jumbotron clearfix">
    <div class="container">
        <h1>Mon travail pratique!</h1>

        <p>Ce travail a &eacute;t&eacute; r&eacute;alis&eacute; dans le cadre du cours "Entretien et rayonnement d'un
            site web". Cette page a &eacute;t&eacute; cr&eacute;&eacute;e &agrave; partir d'un mod&egrave;le.</p>
    </div>
</div>
<div class="container">
    <!-- Des lignes et des colonnes -->
    <div class="row">
        <div class="col-md-4">
            <!-- carousel placé dans une colonne -->
            <div id="mon-carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#mon-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mon-carousel" data-slide-to="1"></li>
                    <li data-target="#mon-carousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/Cercle 201411 007.jpeg" alt="cercle">
                    </div>
                    <div class="item">
                        <img src="img/Cercle 201411 009.jpeg" alt="cercle">
                    </div>
                    <div class="item">
                        <img src="img/Cercle 201411 011.jpeg" alt="cercle">
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#mon-carousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#mon-carousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="col-md-8">
            <h2>Historique</h2>

            <h3>Avant</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur maiores perferendis quia tempora.
                Ab deserunt eum ipsa libero quidem tempora!</p>

            <h3>Apr&egrave;s</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi architecto, atque commodi
                consectetur cumque deserunt dolor eum fugit harum inventore laudantium mollitia necessitatibus
                perspiciatis provident quis quo quod sit ullam voluptates. Accusamus adipisci aliquam animi
                assumenda at aut beatae commodi culpa cupiditate dignissimos dolorum hic inventore libero neque non
                officia officiis perspiciatis quam rem repellat sapiente sed soluta tempora vel
                vitae, voluptates. Dolorem error
                facilis nulla perferendis ratione sed.</p>


            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid at, consequatur consequuntur
                cupiditate dolorum earum eos eveniet ex explicabo laboriosam laborum, minus obcaecati optio repudiandae
                unde voluptas. Aut autem.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <h2>R&eacute;alisations</h2>

            <p>Le carousel est un &eacute;l&eacute;ment javascript</p>

            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
                mollis euismod. Donec sed odio dui. </p>

            <p><a class="btn btn-default" href="#" role="button">En savoir plus &raquo;</a></p>
        </div>

        <div class="col-md-8">
            <h2>Buts</h2>

            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                euismod. Donec sed odio dui. </p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab deleniti eligendi facilis illo incidunt,
                modi voluptate. Blanditiis culpa, cumque nostrum quam quas tenetur. Itaque nam, neque nesciunt
                repudiandae tempore voluptatibus!</p>

            <p><a class="btn btn-default" href="#" role="button">En savoir plus &raquo;</a></p>
        </div>
    </div>

    <hr/>

    <div class="row">
        <h1>Exemples</h1>
    </div>
    <div class="row">
        <h2>Exemple de table</h2>

        <p>Ceci est un &eacute;l&eacute;ment css</p>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>
                        Colonne 1
                    </th>
                    <th>
                        Colonne 2
                    </th>
                    <th>
                        Colonne 3
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>emplacement 1</td>
                    <td colspan="2">test 2 colonnes</td>
                </tr>
                <tr>
                    <td colspan="2">test</td>
                    <td>test</td>
                </tr>
                <tr>
                    <td>n'importe quoi</td>
                    <td>autre chose</td>
                    <td>encore autre chose</td>
                </tr>
                <tr>
                    <td colspan="3">3 colonnes</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>


    <hr>

    <footer>
        <p>&copy; Nicole Gingras 2015</p>
    </footer>
</div>
<!-- /container -->


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<!-- Bootstrap Javascript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<script>
    $(function () {
        //-----------------------------------
        // Mettre votre code javascript ici, si nécessaire
        //-----------------------------------
    });
</script>
</body>
</html>