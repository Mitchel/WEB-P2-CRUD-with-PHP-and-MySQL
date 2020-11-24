<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Hello, world!</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <main class="container">
        <div class="row">
            <div class="col-12">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">Sinterklaasverlanglijstje</h1>
                        <p class="lead">Sinterklaas maakt als je dromen waar!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="./create.php" method="post">
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="firstname">Voornaam</label>
                                <input name="firstname" type="text" class="form-control" id="firstname" placeholder="Voornaam">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="infix">Tussenvoegsel</label>
                                <input name="infix" type="text" class="form-control" id="infix" placeholder="Tussenvoegsel">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="lastname">Achternaam</label>
                                <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Achternaam">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Versturen</button>
                </form>
            </div>
            <div class="col-6">
                <img src="./img/verlanglijstje.jpg" alt="Verlanglijstje" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                    Sinterklaas is jarig!
                    Ik zet mijn schoen vast klaar.
                    Wellicht dat hij hem vol doet,
                    met ja wist ik het maar.
                    Ook leg ik wat haver
                    en wat hooi voor ’t paard.
                    Want dat trouwe beestje,
                    is dat heus wel waard.
                </p>
            </div>
        </div>
    </main>

    <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
</body>
</html>