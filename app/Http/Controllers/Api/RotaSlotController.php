<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RotaSlotStaff;
use App\Http\Controllers\Api\Contracts\ResourceInterface;

class RotaSlotController extends Controller implements ResourceInterface
{
    public function index()
    {
        return RotaSlotStaff::whereNotNull('staffid')->where('slottype', 'shift')->get();
    }

    public function show($id)
    {
        $rotaSlot = new RotaSlotStaff;

        return $rotaSlot::where('id', $id)->get();
    }

    public function update(Request $request, $id)
    {
        // TODO: Implement update() method.
    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.
    }

    public function edit(Request $request, $id)
    {
        // TODO: Implement edit() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}
