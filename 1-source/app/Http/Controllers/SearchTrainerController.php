<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchTrainerController extends Controller
{
    public function getSearchTrainer(Request $request) {

        $per_page = $request->input('per_page');
        $name = $request->get('name');

        $obj = new Trainer();
        $trainers = $obj->where('trainer_name','like',"%$name%")->paginate($per_page);
        $trainers->appends(['name' => $name]);

        return view('trainers', ['trainers' => $trainers]);
    }
}
