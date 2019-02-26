<?php

namespace App\Http\Controllers;

use App\File;
use App\Http\Requests\UsersRequest;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::pluck('name', 'id')->all();

        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        // Check if password is empty
        if (trim($request->password) == ''){
            $input = $request->except('password');
        }else{
            $input = $request->all();
            // encrypt the password
            $input['password'] = bcrypt($request->password);
        }

        // To upload user file or image
        if ($file = $request->file('file_id')){

            $name = time() . '_' . $file->getClientOriginalName();
            $file->move('uploaded_books', $name);

            // in lecture its called $photo, and class is Photo
            $newFile = File::create(['file_path'=>$name]);
            $input['file_id'] = $newFile->id;
        }

        //  Create user record in Database
        User::create($input);

//        User::create($request->all());
        return redirect('/admin/users');
//        return $request->all();
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
        return view('admin.users.show');
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
        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'id')->all();

        return view('admin.users.edit', compact('user', 'roles'));
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
        $user = User::findOrFail($id);

        // Check if password is empty
        if (trim($request->password) == ''){
            $input = $request->except('password');
        }else{
            $input = $request->all();
            // encrypt the password
            $input['password'] = bcrypt($request->password);
        }

        // To upload user file or image
        if ($file = $request->file('file_id')){

            $name = time() . '_' . $file->getClientOriginalName();
            $file->move('uploaded_books', $name);

            // in lecture its called $photo, and class is Photo
            $newFile = File::create(['file_path'=>$name]);
            $input['file_id'] = $newFile->id;
        }

        // Update the user info
        $user->update($input);

         return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete users
        User::findOrFail($id)->delete();

        // Messaging feedback
        Session::flash('deleted_user', 'تم حذف المستخدم!');

        return redirect('/admin/users');
    }
}
