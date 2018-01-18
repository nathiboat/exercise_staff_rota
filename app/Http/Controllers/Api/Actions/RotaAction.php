<?php

namespace App\Http\Controllers\RotaSlot\Actions;

use App\Http\Controllers\RotaSlot\Contracts\ActionInterface;
use App\Models\RotaSlotStaff;

class RotaAction implements ActionInterface{

    protected $rotaSlot;

    public function __construct($rotaSlot)
    {
        $this->$rotaSlot = $rotaSlot;
    }

    /**
     * @return mixed
     */
    public function getShiftTimes()
    {
        // TODO: Implement getShiftTimes() method.
    }

    /**
     * @param $startTime
     * @param $finishTime
     */
    public function setShiftTimes($startTime, $finishTime)
    {
        // TODO: Implement setShiftTimes() method.
    }
}