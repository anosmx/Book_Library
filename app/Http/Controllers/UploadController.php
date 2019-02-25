<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('books.addbook');
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
        // Validate uploaded file
        $validatedData = $request->validate([
            'book_name' => 'required|mimes:pdf|max:10000'
        ]);

        if ($request->hasFile('book_name')){
            // Get file name with Ext
            $fileNameWithExt = $request->file('book_name')->getClientOriginalName();
            // Get just file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just Ext
            $extension = $request->file('book_name')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload image
            $path = $request->file('book_name')->storeAs('public/mix_books', $fileNameToStore);
        }

        $post = new Book;
        $post->book_name = $fileNameToStore;
//        $path = $request->file('book')->store('public/mix_books');

//        $path = Storage::putFile('avatars', $request->file('avatar'));

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
