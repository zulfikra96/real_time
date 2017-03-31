<?php

namespace App\Http\Controllers;
use Rocket;
use Illuminate\Http\Request;
use App\Http\Controllers\App;
class ShopifyArticleApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        
       return response()->json([
           'data' => $last
       ]);
    }

   


    public function ajax()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
