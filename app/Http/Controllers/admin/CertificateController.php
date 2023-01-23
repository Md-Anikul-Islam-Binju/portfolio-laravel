<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Certificate;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::latest()->get();
        return view('admin.certificate',compact('certificates'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'result' => 'required',
        ]);
        try{
            DB::beginTransaction();
            $certificate = Certificate::create([
                'user_id' => Auth::id(),
                'name' => $request->name,
                'result' => $request->result,
                'link' => $request->link,
                'status' => 1,
            ]);
            if(!empty($certificate)){
                DB::commit();
                return redirect()->route('admin.certificate');
            }
            throw new \Exception('Failed!');
        }catch(Exception $ex){
            DB::rollBack();
            return redirect()->route('admin.certificate');
        }
    }
}
