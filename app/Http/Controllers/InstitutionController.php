<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\InstitutionModel;

class InstitutionController extends Controller
{
    public function index()
    {

        $data = InstitutionModel::all();
        return response()->json($data);
    }
    public function create(Request $request)

    {
        InstitutionModel::create($request->all());
        return response()->json(
            [
                'message' => 'Data berhasil di simpan'
            ]

        );
    }
    public function update(Request $request, $id)

    {
        $data = InstitutionModel::where('id', $id)->first();
        $data->update($request->all());
        return response()->json(
            [
                'message' => 'Data berhasil diubah'
            ]
        );
    }
    public function delete($id)

    {
        $data = InstitutionModel::where('id', $id)->first();
        $data->delete();
        return response()->json(
            [
                'message' => 'Data berhasil di hapus'
            ]
        );
    }
}
