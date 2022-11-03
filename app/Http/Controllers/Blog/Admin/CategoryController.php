<?php

namespace App\Http\Controllers\Blog\Admin;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;

class CategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(__METHOD__);
        // $ddd = BlogCategory::all();
        $paginator = BlogCategory::paginate(5);

        // dd($ddd, $paginator);
        return view('blog.admin.category.index', compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd(__METHOD__);
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
        dd(__METHOD__);
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
        // dd(__METHOD__);
        // $item = BlogCategory::find($id);
        // $item = BlogCategory::where($id, $id)->first();
        $item = BlogCategory::findOrFail($id); //если не найдет, то вернет 404, допустимо для одной сущности
        // dd($item);
        $categoryList = BlogCategory::all();

        return view('blog.admin.category.edit', 
            compact('item', 'categoryList'));
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
        dd(__METHOD__);
    }

}
