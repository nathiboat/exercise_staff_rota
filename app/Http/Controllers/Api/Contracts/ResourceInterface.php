<?php

namespace App\Http\Controllers\Api\Contracts;

use Illuminate\Http\Request;
interface ResourceInterface {

    /**
     * @return mixed
     */
    public function index();
    public function show($id);
    public function store(Request $request);
    public function edit(Request $request, $id);
    public function update(Request $request, $id);
    public function destroy($id);
}