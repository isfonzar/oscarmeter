<?php

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class CategoriesTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            DB::table('categories')->insert([
                                                [
                                                    'name' => 'Best picture',
                                                ],
                                                [
                                                    'name' => 'Actor in a leading role',
                                                ],
                                                [
                                                    'name' => 'Actress in a leading role',
                                                ],
                                                [
                                                    'name' => 'Actor in a supporting role',
                                                ],
                                                [
                                                    'name' => 'Actress in a supporting role',
                                                ],
                                                [
                                                    'name' => 'Animated feature film',
                                                ],
                                                [
                                                    'name' => 'Cinematography',
                                                ],
                                                [
                                                    'name' => 'Costume Design',
                                                ],
                                                [
                                                    'name' => 'Directing',
                                                ],
                                                [
                                                    'name' => 'Documentary (feature)',
                                                ],
                                                [
                                                    'name' => 'Documentary (short subject)',
                                                ],
                                                [
                                                    'name' => 'Film editing',
                                                ],
                                                [
                                                    'name' => 'Foreign language film',
                                                ],
                                                [
                                                    'name' => 'Makeup and hairstyling',
                                                ],
                                                [
                                                    'name' => 'Music (original score)',
                                                ],
                                                [
                                                    'name' => 'Music (original song)',
                                                ],
                                                [
                                                    'name' => 'Production design',
                                                ],
                                                [
                                                    'name' => 'Short film (animated)',
                                                ],
                                                [
                                                    'name' => 'Short film (live action)',
                                                ],
                                                [
                                                    'name' => 'Sound editing',
                                                ],
                                                [
                                                    'name' => 'Sound mixing',
                                                ],
                                                [
                                                    'name' => 'Visual effects',
                                                ],
                                                [
                                                    'name' => 'Writting (adapted screenplay)',
                                                ],
                                                [
                                                    'name' => 'Writting (original screenplay)',
                                                ],
                                            ]);
        }
    }
