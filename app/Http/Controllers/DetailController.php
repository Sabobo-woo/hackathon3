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
}
