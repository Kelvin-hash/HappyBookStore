<?php

namespace App\Http\Controllers;

use App\Models\BookDetails;
use App\Http\Requests\StoreBookDetailsRequest;
use App\Http\Requests\UpdateBookDetailsRequest;

class BookDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

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
     * @param  \App\Http\Requests\StoreBookDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookDetails  $bookDetails
     * @return \Illuminate\Http\Response
     */
    public function show(BookDetails $bookDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookDetails  $bookDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(BookDetails $bookDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookDetailsRequest  $request
     * @param  \App\Models\BookDetails  $bookDetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookDetailsRequest $request, BookDetails $bookDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookDetails  $bookDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookDetails $bookDetails)
    {
        //
    }
}
