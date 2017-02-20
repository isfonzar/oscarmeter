<?php

    namespace App\Services;

    use App\Models\NominationsCron;
    use App\Models\NominationsInterface;

    class OscarNominations
    {
        private $nominationsModel;

        public function __construct(NominationsInterface $nominationsModel)
        {
            $this->nominationsModel = $nominationsModel;
        }

        public function getByCategory()
        {
            $nominations = $this->nominationsModel->all();

            $nominationsByCategory = array();

            foreach($nominations as $key => $item)
            {
                $nominationsByCategory[$item['category']][$key] = $item;
            }

            ksort($nominationsByCategory, SORT_NUMERIC);

            return $nominationsByCategory;
        }

        public function getByCategoryCron()
        {
            $this->nominationsModel = new NominationsCron();

            $nominations = $this->nominationsModel->all();

            $nominationsByCategory = array();

            foreach($nominations as $key => $item)
            {
                $nominationsByCategory[$item['category']][$key] = $item;
            }

            ksort($nominationsByCategory, SORT_NUMERIC);

            return $nominationsByCategory;
        }
    }