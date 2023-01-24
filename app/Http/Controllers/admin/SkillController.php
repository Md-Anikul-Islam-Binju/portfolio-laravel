<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\admin\Skill;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::where('user_id', Auth::id())->latest()->get();
        return view('admin.skill',compact('skills'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:20',
        ]);
        try{
            DB::beginTransaction();
            $skills = Skill::create([
                'user_id' => Auth::id(),
                'name' => $request->name,
                'details' => $request->details,
                'status' => 1,
            ]);
            if(!empty($skills)){
                DB::commit();
                return redirect()->route('admin.skill');
            }
            throw new \Exception('Failed!');
        }catch(Exception $ex){
            DB::rollBack();
            return redirect()->route('admin.skill');
        }
    }

    public function edit($id)
    {

    }

    public function update(Request $request,$id)
    {

    }

    public function destroy($id)
    {

    }
}
