<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){

        $articles = Blog::all();
        
        $blog = DB::table('blogs')
        ->join('categorie_articles', 'blogs.categorie_articles_id', '=', 'categorie_articles.id')
        ->select('blogs.*','categorie_articles.*')
        ->get();
        $monObjet = json_decode($blog);
      //  dd($monObjet);
       
        $data=[
            'nbr' => count($articles),
            'articles' => $monObjet
        ];
        return view('dashboard',$data);
    }
}
