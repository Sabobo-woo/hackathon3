<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{
    //

    public function animals()
    {
        $animals = Animal::orderBy('name', 'asc')->paginate(20);
        $images = DB::select("SELECT *
        FROM `animals`
        INNER JOIN `images`
            ON `animals`.`image_id` = `images`.`id`
        WHERE `owner_id` = ?
        ", [11]);
        return view('index', ['animals'=>$animals]);

    }


    public function images()
    {
        $owners = Owner::orderBy('name', 'asc')->get();
        return view('index', ['results'=>$owners]);
    }
}
