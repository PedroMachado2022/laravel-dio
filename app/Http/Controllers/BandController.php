<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandController extends Controller
{
    public function getAll()
    {

        $bands = $this->getBands();

        return response()->json([$bands]);
    }

    public function getById($id)
    {

        $band = null;

        foreach ($this->getBands() as $_band) {
            if ($_band['id'] == $id)
                $band = $_band;
        }

        return $band ? response()->json($band) : abort(404);
    }

    public function getByGender($gender)
    {

        $bands = [];

        foreach ($this->getBands() as $_band) {
            if ($_band['genderid'] == $gender)
                $bands[] = $_band;
        }

        return response()->json($bands);
    }

    public function store(Request $request)
    {

        $validate = $request->validate([
            "name" => "required",
            "gender" => "required"
        ]);

        return response()->json($request->all());
    }

    private function getBands(): array
    {

        return [
            [
                'id' => 1, 'name' => 'dream teather', 'gender' => 'progressivo', 'genderid' => 1
            ],
            [
                'id' => 2, 'name' => 'barões da pisadinha', 'gender' => 'tecno forro', 'genderid' => 2
            ],
            [
                'id' => 3, 'name' => 'banda teste', 'gender' => 'tecno forro', 'genderid' => 2
            ]


        ];
    }
}
