<?php

namespace App\Http\Controllers\RotaSlot;

use App\Http\Controllers\RotaSlot\Actions\RotaAction;
use App\Models\RotaSlotStaff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RotaController extends Controller
{

    public function index(RotaSlotStaff $rotaSlotStaff)
    {
        $rotaSlot = new RotaAction($rotaSlotStaff);

        $rotaSlot->getShiftTimes();

        return $rotaSlot->getShiftTimes();
    }

    public function json(RotaSlotStaff $rotaSlotStaff)
    {
        return $rotaSlotStaff::all();

    }
}
