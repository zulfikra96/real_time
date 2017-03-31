<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ShopifyArticleApiController;
class ContentWriterController extends Controller
{
    public function index()
    {
       $url = "https://b8b1c81de5a9665fd9eca1ddbd171b2f:d578d3db22193f48725c49588b9629db@batikq.myshopify.com/admin/articles.json";
 
        $shopcurl = curl_init();
        curl_setopt($shopcurl, CURLOPT_URL, $url);
        curl_setopt($shopcurl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($shopcurl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($shopcurl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($shopcurl, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec ($shopcurl);
        curl_close ($shopcurl);

        $last = json_decode($response,true);
        
        return view('content_writer.index',
                ['article' => $last['articles']]
        );
    }
}
