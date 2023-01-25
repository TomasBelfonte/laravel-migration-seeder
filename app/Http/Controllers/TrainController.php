<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function train() {
        $trains = Train::whereDate("Orario di Partenza", "2023-01-24")->get();

        // $trains = Train::all();

        dump($trains);

        return view("train", [
            "trains" => $trains
        ]);
    }
}
