<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class NominationsCron extends Model implements NominationsInterface
    {
        protected $table = 'nominations';

        protected $connection = 'cron_mysql';
    }