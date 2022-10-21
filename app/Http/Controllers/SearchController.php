<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        if (isset($_GET['search'])) {

        // $this->validate($request, [
        //     'name' => 'required|alpha'
        // ], [
        //     'name.required' => 'The name is required',
        //     'name.alpha' => 'Search just for name without spaces',
        // ]);

            $search_term = $_GET['search'];
            $search_dog = '%' . $search_term . '%';
            $results_animals = DB::select("
                SELECT *
                FROM `animals`
                WHERE `name` LIKE ?
                ORDER BY `name` ASC
            ", [
                "$search_dog"
            ]);
            $search_owner = '%' . $search_term . '%';
            $results_owners = DB::select("
                SELECT *
                FROM `owners`
                WHERE `surname` LIKE ? OR `first_name` LIKE ?
                ORDER BY `surname` ASC
            ", [
                "$search_owner", "$search_owner"
            ]);

        } else {

            // no searching
            $search_term = '';
            $results_animals = [];
            $results_owners = [];
        }

        return view('search', [
            'search_term' => $search_term,
            'results_animals' => $results_animals,
            'results_owners' => $results_owners,
            
        ]);
    }

}
