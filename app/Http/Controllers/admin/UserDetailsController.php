<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UserDetailsController extends Controller
{
    public function index($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin.userDetails',compact('user'));
    }

    public function update(Request $request ,$id)
    {
        try {
            $user = User::find($id);

            if (empty($user)) {
                throw new \Exception('Failed!');
            }
            $imageName = time().'.'.$request->profile->extension();
            $request->profile->storeAs('public/profile', $imageName);
            $updateUser = $user->update([
                'phone' => $request->phone,
                'emergency_contact' => $request->emergency_contact,
                'optional_email' => $request->optional_email,
                'details' => $request->details,
                'address' => $request->address,
                'profile' => $imageName,
            ]);

            if (!empty($updateUser)) {
                DB::commit();
                return Redirect::route('admin.user.details')->with('User Details Successfully Added');
            } else {
                throw new \Exception('Failed!');
            }
        } catch (\Exception $ex) {
            DB::rollBack();
            return Redirect::back();
        }
    }

}
