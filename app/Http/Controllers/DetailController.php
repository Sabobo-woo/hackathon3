<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DetailController extends Controller
{
    public function ownerDetail()
    {
        $owner_results = DB::selectone("
        SELECT *
        FROM `owners`
        WHERE `id` = ?
        ", [11]);

        $pet_results = DB::select("
        SELECT *
        FROM `animals`
        INNER JOIN `images`
            ON `animals`.`image_id` = `images`.`id`
        WHERE `owner_id` = ?
        ", [11]);

        return view('detail.owner-detail', [
            'owner' => $owner_results,
            'pets' => $pet_results
        ]);
    }

    public function animalDetail()
    { 
        $animal_results = DB::selectone("
        SELECT *
        FROM `animals`
        INNER JOIN `images`
            ON `animals`.`image_id` = `images`.`id`
        WHERE `image_id` = ?
        ", [15]); // gets the requested animal from the database

        $animal_owner = DB::selectone("
        SELECT *
        FROM `owners`
        WHERE `id` = ?
        ", [$animal_results->owner_id]); // gets owner based on animal_results value of owner_id

        return view('detail.animal-detail', [
            'animal' => $animal_results,
            'owner' => $animal_owner
        ]); // passes variables to the view
    }
}
