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
            foreach ($categories as $category)
            {
                foreach ($category as $nomination)
                {
                    $nomination['analysis'] = DB::table('analysis')
                                                ->select('*')
                                                ->where('nomination_id', $nomination->id)
                                                ->orderBy('id', 'desc')
                                                ->first();

                    $nomination['analysis']->pos = $nomination['analysis']->pos * 100 . '%';
                    $nomination['analysis']->neg = $nomination['analysis']->neg * 100 . '%';
                    $nomination['analysis']->neu = $nomination['analysis']->neu * 100 . '%';
                }
            }

            return $categories;
        }

        public function analyze($categories)
        {
            foreach ($categories as $category)
            {
                foreach ($category as $nomination)
                {
                    $analysis = $this->sentimentAnalysis->get($nomination->name);

                    DB::table('analysis')->insert([
                                                      'nomination_id' => $nomination->id,
                                                      'pos'           => $analysis->positive,
                                                      'neg'           => $analysis->negative,
                                                      'neu'           => $analysis->neutral,
                                                      'created_at'    => \Carbon\Carbon::now()->toDateTimeString(),
                                                      'updated_at'    => \Carbon\Carbon::now()->toDateTimeString(),
                                                  ]);

                }
            }

            return $categories;
        }
    }