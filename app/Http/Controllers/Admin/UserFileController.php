<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FileListDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserFile;
use Illuminate\Http\Request;

class UserFileController extends Controller
{
    public function index(FileListDataTable $dataTable)
    {
        return $dataTable->render('backend.files.index');
    }

    public function create()
    {
        $data['users'] = User::where(['user_type' => '2x201', 'is_admin' => 0])->pluck('name', 'id');
        return view('backend.files.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id'       => 'required',
            'title'         => 'required',
            'attachment'    => ['required', 'file', 'mimes:pdf,jpg,jpeg,doc,png,zip', 'max:2048'],
        ],[],[
            'user_id' => 'user'
        ]);


        $userFile               = new UserFile();
        $userFile->user_id      = $request->user_id;
        $userFile->title        = $request->title;
        $userFile->description  = $request->description;
        $userFile->attachment   = $this->uploadAttachment($request->attachment, $request->title);
        $userFile->save();

        return redirect(route('files.index'))->with('message', 'Data stored successfully.');
    }

    public function edit(UserFile $file)
    {
        $data['userFile'] = $file;
        $data['users'] = User::where(['user_type' => '2x201', 'is_admin' => 0])->pluck('name', 'id');
        return view('backend.files.edit', $data);
    }

    public function show(UserFile $file)
    {
        $data['userFile'] = $file;
        return view('backend.files.show', $data);
    }

    public function update(Request $request, UserFile $file)
    {
        $request->validate([
            'user_id'       => 'required',
            'title'         => 'required',
            'attachment'    => ['sometimes:nullable', 'file', 'mimes:pdf,jpg,jpeg,doc,png,zip', 'max:2048'],
        ],[],[
            'user_id' => 'user'
        ]);

        $file->update([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'description' => $request->description,
            'attachment' => $request->attachment ? $this->uploadAttachment($request->attachment, $request->title) : $file->attachment,
        ]);

        return redirect(route('files.index'))->with('message', 'Data updated successfully.');
    }

    public function uploadAttachment($attachment, $title){
        $fileName = ucfirst(str_replace(' ', '_', $title)).'_'. date('Y_m_d_H_i_s') . $attachment->getClientOriginalName();
        $attachment->move(public_path('uploads/attachment/'), $fileName);
        return $fileName;
    }

    public function destroy(){
        //
    }

    public function delete(UserFile $file)
    {
        $file->delete();
        return redirect(route('files.index'))->with('success', 'Data deleted successfully.');
    }
    
}
