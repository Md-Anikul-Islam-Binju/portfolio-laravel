<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Experience;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExperienceController extends Controller
{
   public function index()
   {
       $experiences = Experience::where('user_id', Auth::id())->latest()->get();
       return view('admin.experience',compact('experiences'));
   }

   public function store(Request $request)
   {

       $validated = $request->validate([
           'name' => 'required',
           'resignation' => 'required',
           'duration' => 'required',
       ]);
       try{
           DB::beginTransaction();
           $experience = Experience::create([
               'user_id' => Auth::id(),
               'name' => $request->name,
               'resignation' => $request->resignation,
               'duration' => $request->duration,
               'details' => $request->details,
               'status' => 1,
           ]);
           if(!empty($experience)){
               DB::commit();
               return redirect()->route('admin.experience');
           }
           throw new \Exception('Failed!');
       }catch(Exception $ex){
           DB::rollBack();
           return redirect()->route('admin.experience');
       }
   }
}
