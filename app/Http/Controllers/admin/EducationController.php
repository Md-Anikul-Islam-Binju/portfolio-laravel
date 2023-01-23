<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Education;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::latest()->get();
        return view('admin.education',compact('educations'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'institution' => 'required',
        ]);
        try{
            DB::beginTransaction();
            $education = Education::create([
                'user_id' => Auth::id(),
                'name' => $request->name,
                'institution' => $request->institution,
                'passing' => $request->passing,
                'result' => $request->result,
                'status' => 1,
            ]);
            if(!empty($education)){
                DB::commit();
                return redirect()->route('admin.education');
            }
            throw new \Exception('Failed!');
        }catch(Exception $ex){
            DB::rollBack();
            return redirect()->route('admin.education');
        }
    }
}
