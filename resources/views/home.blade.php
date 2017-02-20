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
        <p class="header-subtitle">See what people are saying about the nominations for <a target="_blank"
                                                                                           href="http://oscar.go.com/">The
                Oscars 2017</a> on social networks.<br>
            This website was made to display the power behind the <a target="_blank"
                                                                     href="https://github.com/isfonzar/sentiment-thermometer">Sentiment
                Thermometer</a>'s social network feed analysis and displays people's opinions on the nominations for The
            Awards.</p>
    </div>
</div>
<div class="container text-center">
    <!-- Example row of columns -->
    @foreach($nominations as $category => $nomination)
        <h2><?= $category ?></h2>

        <div>
            @foreach($nomination as $name)
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar"
                                 aria-valuenow="<?= $name->analysis->pos ?>"
                                 aria-valuemin="0" aria-valuemax="100" style="width:<?= $name->analysis->pos?>%">
                                <?= $name->name ?>@if(!empty($name->movie)), <?= $name->movie ?> @endif
                                - <?= $name->analysis->pos?>%
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            @endforeach
            <p class="text-right">Last update: <?= \Carbon\Carbon::parse($nomination[0]->analysis->created_at)->diffForHumans() ?>.</p>
        </div>

        <hr>
    @endforeach

    <hr>

    <footer>
        <p>Show your support <a target="_blank" href="https://github.com/isfonzar/oscarmeter">here</a> and <a
                    target="_blank" href="https://github.com/isfonzar/sentiment-thermometer">here</a>.</p>
    </footer>
</div>
</body>
</html>
