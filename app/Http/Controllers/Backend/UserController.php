<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $_pagePath = 'backend.pages.';

    public function deleteFile($id)
    {
        $user = User::findOrFail($id);
        $fileName = $user->image;
        $filePath = public_path($fileName);
        if (file_exists($filePath) && is_file($filePath)) {
            unlink($filePath);
            return true;
        }
        return true;
    }

    public function index(Request $request)
    {
        $search = $request->search;
        $authId = auth()->id();
        if ($search) {
            $usersData = User::where('id', '!=', $authId)
                ->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('gender', 'like', '%' . $search . '%')
                ->paginate(100);
        } else {
            $usersData = User::where('id', '!=', $authId)->paginate(5);

        }
        return view($this->_pagePath . 'users.index', compact('usersData'));
    }

    public function edit($id)
    {
        $userData = User::find($id);
        return view($this->_pagePath . 'users.edit', compact('userData'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/users');

            if ($this->deleteFile($id) && $image->move($destinationPath, $name)) {
                $data['image'] = "users/" . $name;
            } else {
                return redirect()->route('users')->with('error', 'Image not uploaded');
            }
        }

        $findUser = User::findOrfail($id)->update($data);
        if ($findUser) {
            return redirect()->route('users')->with('success', 'User updated successfully');
        } else {
            return redirect()->route('users')->with('error', 'User not updated');
        }

    }

    public function delete($id)
    {
        $findUser = User::find($id);
        if ($this->deleteFile($id) && $findUser->delete()) {
            return redirect()->route('users')->with('success', 'User deleted successfully');
        } else {
            return redirect()->route('users')->with('error', 'User not deleted');
        }


    }
}
