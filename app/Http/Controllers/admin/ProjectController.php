<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Project;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.project',compact('projects'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'link' => 'required',
        ]);
        try{
            DB::beginTransaction();
            $project = Project::create([
                'user_id' => Auth::id(),
                'name' => $request->name,
                'link' => $request->link,
                'details' => $request->details,
                'status' => 1,
            ]);
            if(!empty($project)){
                DB::commit();
                return redirect()->route('admin.project');
            }
            throw new \Exception('Failed!');
        }catch(Exception $ex){
            DB::rollBack();
            return redirect()->route('admin.project');
        }
    }
}
