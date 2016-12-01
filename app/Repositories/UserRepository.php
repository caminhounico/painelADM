<?php


namespace App\Repository;

use App\User;

use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Storage;
use Image;

class UserRepository

{

    public function addAvatar($id, Request $request)
    {
        //Check has exist image in request object
        if ($request->hasFile('image')):
            //Set filename
            $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            //Set path
            $path = ('uploads/users/' . $id . '/avatar');
            //Store image in $path with $filename.
            $r = $request->file('image')->storeAs($path, $fileName, 'public');


            //Set in DB
            $user = User::find($id);
            $user->avatar = 'storage/' . $path . '/' . $fileName;
            $user->save();

            //Resize image from default avatar size
            Image::make($user->avatar)->resize(160,160)->save();

            return true;
        endif;
    }



}