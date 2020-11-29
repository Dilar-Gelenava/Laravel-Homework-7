<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Comments;
use App\Movie;
use App\Actor;
use App\User;
use Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function index()
    {
        return view("products.index",["products"=>Products::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("products.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Products::create([

            "title"=>$request->input("title"),
            "description"=>$request->input("description"),
            "user_id"=>$request->input("user_id")

        ]);

        return redirect()->route("adminindex");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Products::where("id",$id)->firstOrFail();
        $comments=Comments::where("product_id", $id)->get();
        $users = User::all();

        return view("products.show",[
            "product"=>$product,
            "comments"=>$comments,
            "users"=>$users
        ]);
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
    public function destroy(Request $request)
    {
        Products::where("id", $request->input("id"))->delete();

        return redirect()->back();
    }


    public function get_phone()
    {
        $a = User::with(['phone'])->get();
        return $a[1]['phone'];
    }

    public function posts_comments()
    {

        // return Comments::join('Products', 'product_id', 'products.id')->get();
        return Products::withCount(['comments'])->get();
        // return Comments::with(['product'])->get();
    }

    public function movie_actor()
    {
        $result = Movie::select('movies.title', 'actors.name')->join('movie_actor', 'movies.id', 'movie_actor.movie_id')->join('Actors', 'movie_actor.actor_id', 'actors.id')->get();

        for ($i=0; $i<count($result) ; $i++) { 

            $a = $result[$i]['title'];
            $b = $result[$i]['name'];
            echo $a."     -->    ".$b."<br>";
        }
    }

}
