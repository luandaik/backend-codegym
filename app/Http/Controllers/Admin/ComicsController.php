<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comics;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function getComicHomePage()
    {
        $result = Comics::limit(4)->orderBy('id', 'desc')->get();
        return $result;
    }
    public function getComicAll()
    {
        $result = Comics::all();
        return $result;
    }
    public function getComicNew()
    {
        $result = Comics::limit(3)->orderBy('id', 'desc')->get();
        return $result;
    }
    public function onSelectDetail(Request $request)
    {
        $id = $request->id;
        $result = Comics::where('id', $id)->get();
        return $result;
    }
    public function deleteComicById(Request $request)
    {

        $comic = Comics::find($request->id);
        $comic->delete();
        return 1;
    }
    public function addNewComic(Request $request)
    {
        $ComicArray = json_decode($request->getContent(), true);
        $result = Comics::insert([
            'short_title' =>  $ComicArray['short_title'],
            'short_description' =>  $ComicArray['short_description'],
            'short_img' =>  $ComicArray['short_img'],
            'long_title' =>  $ComicArray['long_title'],
            'long_description' =>  $ComicArray['long_description'],
            'total_buy' =>  $ComicArray['total_buy'],
            'type_comic' =>  $ComicArray['type_comic'],
            'tag_comic' =>  $ComicArray['tag_comic'],
            'author_comic' =>  $ComicArray['author_comic'],
            'price_comic' =>  $ComicArray['price_comic'],

        ]);
        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }
}
