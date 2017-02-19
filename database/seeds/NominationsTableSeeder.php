<?php

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class NominationsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $this->seedBestPicture();
            $this->seedActorLead();
            $this->seedActressLead();
            $this->seedActorSupport();
            $this->seedActressSupport();
            $this->seedAnimatedFilm();
            $this->seedCinematography();
            $this->seedCostumeDesign();
            $this->seedDirecting();
        }

        private function seedBestPicture()
        {
            DB::table('nominations')->insert([
                                                [
                                                    'name' => 'Arrival',
                                                    'category' => 'Best picture'
                                                ],
                                                [
                                                    'name' => 'Fences',
                                                    'category' => 'Best picture'
                                                ],
                                                [
                                                    'name' => 'Hacksaw Ridge',
                                                    'category' => 'Best picture'
                                                ],
                                                [
                                                    'name' => 'Hell or highwater',
                                                    'category' => 'Best picture'
                                                ],
                                                [
                                                    'name' => 'Hidden Figures',
                                                    'category' => 'Best picture'
                                                ],
                                                [
                                                    'name' => 'La La Land',
                                                    'category' => 'Best picture'
                                                ],
                                                [
                                                    'name' => 'Lion',
                                                    'category' => 'Best picture'
                                                ],
                                                [
                                                    'name' => 'Manchester by the Sea',
                                                    'category' => 'Best picture'
                                                ],
                                                [
                                                    'name' => 'Moonlight',
                                                    'category' => 'Best picture'
                                                ],
                                            ]);

        }

        private function seedActorLead()
        {
            DB::table('nominations')->insert([
                                                 [
                                                     'name' => 'Casey Affleck',
                                                     'movie' => 'Manchester by the Sea',
                                                     'category' => 'Actor in a leading role'
                                                 ],
                                                 [
                                                     'name' => 'Andrew Garfield',
                                                     'movie' => 'Hacksaw Ridge',
                                                     'category' => 'Actor in a leading role'
                                                 ],
                                                 [
                                                     'name' => 'Ryan Gosling',
                                                     'movie' => 'La La Land',
                                                     'category' => 'Actor in a leading role'
                                                 ],
                                                 [
                                                     'name' => 'Viggo Mortensen',
                                                     'movie' => 'Captain Fantastic',
                                                     'category' => 'Actor in a leading role'
                                                 ],
                                                 [
                                                     'name' => 'Denzel Washington',
                                                     'movie' => 'Fences',
                                                     'category' => 'Actor in a leading role'
                                                 ],
                                             ]);

        }

        private function seedActressLead()
        {
            DB::table('nominations')->insert([
                                                 [
                                                     'name' => 'Isabelle Huppert',
                                                     'movie' => 'Elle',
                                                     'category' => 'Actress in a leading role'
                                                 ],
                                                 [
                                                     'name' => 'Ruth Negga',
                                                     'movie' => 'Loving',
                                                     'category' => 'Actress in a leading role'
                                                 ],
                                                 [
                                                     'name' => 'Natalie Portman',
                                                     'movie' => 'Jackie',
                                                     'category' => 'Actress in a leading role'
                                                 ],
                                                 [
                                                     'name' => 'Emma Stone',
                                                     'movie' => 'La La Land',
                                                     'category' => 'Actress in a leading role'
                                                 ],
                                                 [
                                                     'name' => 'Meryl Streep',
                                                     'movie' => 'Florence Foster Jenkins',
                                                     'category' => 'Actress in a leading role'
                                                 ],
                                             ]);

        }

        private function seedActorSupport()
        {
            DB::table('nominations')->insert([
                                                 [
                                                     'name' => 'Mahershala Ali',
                                                     'movie' => 'Moonlight',
                                                     'category' => 'Actor in a supporting role'
                                                 ],
                                                 [
                                                     'name' => 'Jeff Bridges',
                                                     'movie' => 'Hell or High Water',
                                                     'category' => 'Actor in a supporting role'
                                                 ],
                                                 [
                                                     'name' => 'Lucas Hedges',
                                                     'movie' => 'Manchester by the Sea',
                                                     'category' => 'Actor in a supporting role'
                                                 ],
                                                 [
                                                     'name' => 'Dev Patel',
                                                     'movie' => 'Lion',
                                                     'category' => 'Actor in a supporting role'
                                                 ],
                                                 [
                                                     'name' => 'Michael Shannon',
                                                     'movie' => 'Nocturnal Animals',
                                                     'category' => 'Actor in a supporting role'
                                                 ],
                                             ]);

        }

        private function seedActressSupport()
        {
            DB::table('nominations')->insert([
                                                 [
                                                     'name' => 'Viola Davis',
                                                     'movie' => 'Fences',
                                                     'category' => 'Actress in a supporting role'
                                                 ],
                                                 [
                                                     'name' => 'Naomie Harris',
                                                     'movie' => 'Moonlight',
                                                     'category' => 'Actress in a supporting role'
                                                 ],
                                                 [
                                                     'name' => 'Nicole Kidman',
                                                     'movie' => 'Lion',
                                                     'category' => 'Actress in a supporting role'
                                                 ],
                                                 [
                                                     'name' => 'Octavia Spencer',
                                                     'movie' => 'Hidden Figures',
                                                     'category' => 'Actress in a supporting role'
                                                 ],
                                                 [
                                                     'name' => 'Michelle Williams',
                                                     'movie' => 'Manchester by the Sea',
                                                     'category' => 'Actress in a supporting role'
                                                 ],
                                             ]);

        }

        private function seedAnimatedFilm()
        {
            DB::table('nominations')->insert([
                                                 [
                                                     'name' => 'Kubo and the Two Strings',
                                                     'category' => 'Animated Feature Film'
                                                 ],
                                                 [
                                                     'name' => 'Moana',
                                                     'category' => 'Animated Feature Film'
                                                 ],
                                                 [
                                                     'name' => 'My Life as a Zucchini',
                                                     'category' => 'Animated Feature Film'
                                                 ],
                                                 [
                                                     'name' => 'The Red Turtle',
                                                     'category' => 'Animated Feature Film'
                                                 ],
                                                 [
                                                     'name' => 'Zootopia',
                                                     'category' => 'Animated Feature Film'
                                                 ],
                                             ]);

        }

        private function seedCinematography()
        {
            DB::table('nominations')->insert([
                                                 [
                                                     'name' => 'Arrival',
                                                     'category' => 'Cinematography'
                                                 ],
                                                 [
                                                     'name' => 'La La Land',
                                                     'category' => 'Cinematography'
                                                 ],
                                                 [
                                                     'name' => 'Lion',
                                                     'category' => 'Cinematography'
                                                 ],
                                                 [
                                                     'name' => 'Moonlight',
                                                     'category' => 'Cinematography'
                                                 ],
                                                 [
                                                     'name' => 'Silence',
                                                     'category' => 'Cinematography'
                                                 ],
                                             ]);

        }

        private function seedCostumeDesign()
        {
            DB::table('nominations')->insert([
                                                 [
                                                     'name' => 'Allied',
                                                     'category' => 'Costume Design'
                                                 ],
                                                 [
                                                     'name' => 'Fantastic Beasts and Where to Find Them',
                                                     'category' => 'Costume Design'
                                                 ],
                                                 [
                                                     'name' => 'Florence Foster Jenkins',
                                                     'category' => 'Costume Design'
                                                 ],
                                                 [
                                                     'name' => 'Jackie',
                                                     'category' => 'Costume Design'
                                                 ],
                                                 [
                                                     'name' => 'La La Land',
                                                     'category' => 'Costume Design'
                                                 ],
                                             ]);

        }

        private function seedDirecting()
        {
            DB::table('nominations')->insert([
                                                 [
                                                     'name' => 'Arrival',
                                                     'category' => 'Directing'
                                                 ],
                                                 [
                                                     'name' => 'Hacksaw Ridge',
                                                     'category' => 'Directing'
                                                 ],
                                                 [
                                                     'name' => 'La La Land',
                                                     'category' => 'Directing'
                                                 ],
                                                 [
                                                     'name' => 'Manchester by the Sea',
                                                     'category' => 'Directing'
                                                 ],
                                                 [
                                                     'name' => 'Moonlight',
                                                     'category' => 'Directing'
                                                 ],
                                             ]);

        }
    }
