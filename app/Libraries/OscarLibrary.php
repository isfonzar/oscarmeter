<?php

    namespace App\Libraries;

    use App\Models\Nominations;
    use App\Services\OscarNominations;
    use App\Services\Sentiment;
    use iiiicaro\SentimentThermometer\SentimentThermometer;

    class OscarLibrary
    {
        public function get()
        {
            $oscarService = new OscarNominations(new Nominations());

            $nominations = $oscarService->getByCategory();

            $config = [
                'twitter' => [
                    'consumer_key' => env('TWITTER_CONSUMER_KEY'),
                    'consumer_secret' => env('TWITTER_CONSUMER_SECRET'),
                ]
            ];

            $sentimentThermometer = new Sentiment(new SentimentThermometer($config));

            $results = $sentimentThermometer->get($nominations);

            return $results;
        }
    }