<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Search;
use App\Models\Categorie;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $query = $request->input('query');
            $searchdatanew = Search::where('title', 'LIKE', '%' . $query . '%')->get();
            $searchdatacategory = Categorie::where('title', 'LIKE', '%' . $query . '%')->get();
            $data = $searchdatanew->merge($searchdatacategory);
            $output = '';
            if ($data->count() > 0) {
                $output .= '<ul class="output-database-success​ pt-3 pb-3"  style="display:flex;flex-direction: column;align-items:start;justify-content:start;position:relative;">';
                foreach ($data as $row) {
                        $output .= '<li class="output-database-item​ text-start ​py-3  d-flex align-items-start justify-content-start"> <a href="#" class="text-secondary link-search "> '. $row->title . '</a></li>';
                }
                $output .= '</ul>';
                $output .= '<a href=""><li class="output-database-item-desc bg-dark text-white py-4 d-flex align-items-center justify-content-center ">See More Results</li></a>';
            } else {
                $output .= '<li class="output-database-item">No results found.</li>';
            }

            return response()->json(['html' => $output]);
        }

        return response()->json(['html' => '<li class="output-database-item">Invalid request.</li>']);
    }
}
