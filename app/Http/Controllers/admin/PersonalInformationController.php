<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\PersonalInformation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PersonalInformationController extends Controller
{
    public function index()
    {
        $personalInformation = PersonalInformation::where('user_id', Auth::id())->latest()->get();
        return view('admin.userPersonalInformation',compact('personalInformation'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'father_name' => 'required',
            'mother_name' => 'required',
            'birthday' => 'required',
            'nationality' => 'required',
            'religion' => 'required',
        ]);
        try{
            DB::beginTransaction();
            $personalInformation = PersonalInformation::create([
                'user_id' => Auth::id(),
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'birthday' => $request->birthday,
                'nationality' => $request->nationality,
                'religion' => $request->religion,
                'hobby' => $request->hobby,
                'blood_group' => $request->blood_group,
                'nid' => $request->nid,
            ]);
            if(!empty($personalInformation)){
                DB::commit();
                return redirect()->route('admin.personal.information');
            }
            throw new \Exception('Failed!');
        }catch(Exception $ex){
            DB::rollBack();
            return redirect()->route('admin.personal.information');
        }
    }
}
