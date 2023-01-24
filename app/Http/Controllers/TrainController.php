<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Controllers\Models\Train;

class TrainController extends Controller
{
    public function train() {
        $trains = Train::where("Orario di Partenza", (2023 - 01 - 24))->get();

        dump($trains);

        return view("train", [
            "trains" => $trains
        ]);
    }
}
