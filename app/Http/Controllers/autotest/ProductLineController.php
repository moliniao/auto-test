<?php

namespace App\Http\Controllers\autotest;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator,View,Input,Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\userHadProduct;
class ProductLineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        return View::make('productLine.show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        //
        $user = $request->user();
        $userId = $user->id;
        $userHadProduct = new userHadProduct;//实例化User对象
        $userHadProduct->product_name = Input::get('product_name');
        $userHadProduct->description = Input::get('description');
        $userHadProduct->email = Input::get('email');
        $userHadProduct->user_id =  $userId;
        $userHadProduct->save();
        return response()->json(['ec' => '200', 'message' => 'save success']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
