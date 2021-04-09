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

    public function editArticle($articleID){
        $currentArticle = new Articles;
        $articleData = $currentArticle->where(['id' => $articleID])->first();


       return view('dashboard.edit-article', compact('articleData'));
    }
}
