<?php

require_once __DIR__ . '/../src/List.php';

use Schedule\Schedule;
use PHPUnit\Framework\TestCase;

class ListTest extends TestCase
{
    private $list;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        $this->list = new Schedule(1, 2, 3, 4, 5);
        parent::__construct($name, $data, $dataName);
    }

    public function testScheduleCreating(): void
    {
        $this->assertInstanceOf(Schedule::class, $this->list, "Your object is not instance of Schedule");
    }
}