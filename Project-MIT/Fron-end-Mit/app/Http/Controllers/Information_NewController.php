<?php

namespace App\Http\Controllers;

use App\Models\NewMit;
use Illuminate\Http\Request;

class Information_NewController extends Controller
{
    //
    public function index(){
        $objNewmits =NewMit::where('categorie_id','9')->orderby('id', 'desc')->get();
        $TodaysFeaturedNews = NewMit::where('categorie_id','10')->orderby('id', 'desc')->get();
        $RecentHighlights  = NewMit::where('categorie_id','11')->orderby('id', 'desc')->get();
        $CommunityUpdates  = NewMit::where('categorie_id','12')->orderby('id', 'desc')->get();
        $MoreNews   = NewMit::where('categorie_id','14')->orderby('id', 'desc')->get();
        return view('news.index', compact('objNewmits','TodaysFeaturedNews','RecentHighlights','CommunityUpdates','MoreNews'));
    }
}
