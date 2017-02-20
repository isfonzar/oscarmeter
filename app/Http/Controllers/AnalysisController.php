<?php

    namespace App\Http\Controllers;

    use App\Models\Nominations;
    use App\Services\OscarNominations;
    use App\Services\Sentiment;
    use iiiicaro\SentimentThermometer\SentimentThermometer;

    class AnalysisController extends Controller
    {
        public function feed()
        {
            $oscarService = new OscarNominations(new Nominations());

            $nominations = $oscarService->getByCategoryCron();

            $config = [
                'twitter' => [
                    'consumer_key' => env('TWITTER_CONSUMER_KEY'),
                    'consumer_secret' => env('TWITTER_CONSUMER_SECRET'),
                    'amount' => 100
                ]
            ];

            $sentimentThermometer = new Sentiment(new SentimentThermometer($config));

            $sentimentThermometer->analyze($nominations);
        }
    }