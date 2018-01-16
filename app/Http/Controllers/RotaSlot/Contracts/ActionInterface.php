<?php

namespace App\Http\Controllers\RotaSlot\Contracts;

interface ActionInterface {

    /**
     * @return mixed
     */
    public function getShiftTimes();
    public function setShiftTimes($startTime, $finishTime);
}