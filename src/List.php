<?php
namespace Schedule;

require_once __DIR__ . '/../vendor/autoload.php';

use Data\Pair\Pair;

class Schedule
{
    public $list;

    public function __construct(...$listValues)
    {
        function listCreate($counter, $listValues)
        {
            if (empty($listValues[$counter])) {
                return null;
            }

            return new Pair($listValues[$counter], listCreate($counter + 1, $listValues));
        }
        $this->list = new Pair($listValues[0], listCreate(1, $listValues));
    }
}
