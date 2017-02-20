<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Oscars 2017 Trend Analysis</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="jumbotron header-image">
    <div class="container">
        <h1 class="header-title">The Oscars 2017 Trends</h1>
        <p class="header-subtitle">
            This website was made to display the power behind the <a target="_blank"
                                                                     href="https://github.com/isfonzar/sentiment-thermometer">Sentiment
                Thermometer</a>'s social network feed analysis and displays people's opinions on the nominations for The
            Awards.</p>
    </div>
</div>
<div class="container text-center">
    <!-- Example row of columns -->

    @foreach($nominations as $category => $nomination)
        <div class="row">
            <h2><b><?= $category ?></b></h2>

            <div class="col-md-8">
                <h3 class="text-center">How social networks see it</h3>
                @foreach($nomination as $name)
                    <h5 class="text-left"><?= $name->name ?>@if(!empty($name->movie)), <?= $name->movie ?> @endif</h5>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                             aria-valuenow="<?= $name->analysis->pos ?>"
                             aria-valuemin="0" aria-valuemax="100" style="width:<?= $name->analysis->pos?>%">
                            <span><?= $name->analysis->pos?>% positive</span>
                        </div>
                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar"
                             style="width:<?= $name->analysis->neg?>%">
                            <span><?= $name->analysis->neg?>% negative</span>
                        </div>
                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
                             style="width:<?= 100 - $name->analysis->pos - $name->analysis->neg?>%">
                            <span><?= $name->analysis->neu?>% neutral</span>
                        </div>
                    </div>
                @endforeach
                <p>Last update: <?= \Carbon\Carbon::parse($nomination[0]->analysis->created_at)->diffForHumans() ?>.</p>
            </div>
            <div class="col-md-4">
                <h3>People's choice</h3>
                <? $sum = 0; foreach($nomination as $name){ $sum += $name->analysis->pos; }?>

                <h4 style="color:darkgreen"><b><?= 100 * round($nomination[0]->analysis->pos / $sum, 4) ?>% - <?= $nomination[0]->name ?></b></h4>
                <?php
                    for ($i = 1; $i <= 3; $i++)
                        {
                            echo ('<h5>' . 100 * round($nomination[$i]->analysis->pos / $sum, 4)  . '% - ' . $nomination[$i]->name . '</h5>');
                        }
                ?>

            </div>

            <hr>
        </div>
    @endforeach

    <hr>

    <footer>
        <p>Show your support <a target="_blank" href="https://github.com/isfonzar/oscarmeter">here</a> and <a
                    target="_blank" href="https://github.com/isfonzar/sentiment-thermometer">here</a>.</p>
    </footer>
</div>
</body>
</html>
