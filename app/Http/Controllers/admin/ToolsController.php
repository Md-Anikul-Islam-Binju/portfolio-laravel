<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Tool;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ToolsController extends Controller
{
    public function index()
    {
        $tools =Tool::latest()->get();
        return view('admin.tools',compact('tools'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:20',
        ]);
        try{
            DB::beginTransaction();
            $tool = Tool::create([
                'user_id' => Auth::id(),
                'name' => $request->name,
                'details' => $request->details,
                'status' => 1,
            ]);
            if(!empty($tool)){
                DB::commit();
                return redirect()->route('admin.tools');
            }
            throw new \Exception('Failed!');
        }catch(Exception $ex){
            DB::rollBack();
            return redirect()->route('admin.tools');
        }
    }
}
