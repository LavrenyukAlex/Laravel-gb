<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function view($id)
    {
        $news = $this->getNewsByCat((int) $id);
        if (empty($news)){

            abort('404');
        }
        return view('newsView',['news' => $news]);
    }

    public function index($id)
    {
        $news = $this->getNewsListByCat((int) $id);
        if (empty($news)){

            abort('404');
        }
        return view('news',['news' => $news]);
    }

    public function getNewsListByCat($id)
    {
        $newsbyCat = [];
        $newsList = $this->news();
        foreach ($newsList as $news)
        {

            if ($news['category_id'] == $id){

                $newsbyCat[] = $news;

            }

        }
        return $newsbyCat;
    }

    private function getNewsByCat($id)
    {

        $newsList = $this->news();
        foreach ($newsList as $news)
        {
            if ($news['id'] == $id){
                return $news;
            }

        }
        return [];
    }


}
