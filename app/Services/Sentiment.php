<?php

    namespace App\Services;

    use iiiicaro\SentimentThermometer\SentimentThermometer;
    use Illuminate\Support\Facades\DB;

    class Sentiment
    {
        private $sentimentAnalysis;

        public function __construct(SentimentThermometer $sentimentAnalysis)
        {
            $this->sentimentAnalysis = $sentimentAnalysis;
        }

        public function get($categories)
        {
            $response = [];

            foreach ($categories as $categoryKey=> $category)
            {
                foreach ($category as $nominationKey => $nomination)
                {
                    $nomination['analysis'] = DB::table('analysis')
                                                ->select('*')
                                                ->where('nomination_id', $nomination->id)
                                                ->orderBy('id', 'desc')
                                                ->first();

                    $nomination['analysis']->pos = round($nomination['analysis']->pos * 100);
                    $nomination['analysis']->neg = round($nomination['analysis']->neg * 100);
                    $nomination['analysis']->neu = round($nomination['analysis']->neu * 100);
                }

                // Gambeta da boa
                usort($category, function ($a, $b) {
                    return $b->analysis->pos - $a->analysis->pos;
                });

                $response[$categoryKey] = $category;
            }

            return $response;
        }

        public function analyze($categories)
        {
            foreach ($categories as $category)
            {
                foreach ($category as $nomination)
                {
                    $analysis = $this->sentimentAnalysis->get($nomination->name);

                    DB::connection('cron_mysql')->table('analysis')->insert([
                                                                                'nomination_id' => $nomination->id,
                                                                                'pos'           => $analysis->positive,
                                                                                'neg'           => $analysis->negative,
                                                                                'neu'           => $analysis->neutral,
                                                                                'created_at'    => \Carbon\Carbon::now()
                                                                                                                 ->toDateTimeString(),
                                                                                'updated_at'    => \Carbon\Carbon::now()
                                                                                                                 ->toDateTimeString(),
                                                                            ]);

                }
            }

            return $categories;
        }
    }