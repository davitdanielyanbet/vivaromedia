<?php
namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Support\Facades\Request;

class ArticlesListController extends Controller
{
    public function ArticlesListAdmin(){
        $articles = new Articles;
        $articles = $articles->All();

        return view('dashboard/articles', compact('articles'));
    }

    public function editArticle(){

        $articleData = Articles::all();


       return view('dashboard.edit-article', compact('articleData'));
    }
}
