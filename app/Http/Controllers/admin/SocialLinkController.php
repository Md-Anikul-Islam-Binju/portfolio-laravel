<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\SocialLink;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SocialLinkController extends Controller
{
    public function index()
    {
        $link = SocialLink::where('user_id', Auth::id())->get();
        return view('admin.socialLink',compact('link'));
    }


    public function store(Request $request)
    {
        try{
            DB::beginTransaction();
            $link = SocialLink::create([
                'user_id' => Auth::id(),
                'facebook' => $request->facebook,
                'linkedin' => $request->linkedin,
                'instagram' => $request->instagram,
                'github' => $request->github,
                'gitlab' => $request->gitlab,
                'twitter' => $request->twitter,
                'youtube' => $request->youtube,
                'website' => $request->website,
            ]);
            if(!empty($link)){
                DB::commit();
                return redirect()->route('admin.social.link');
            }
            throw new \Exception('Failed!');
        }catch(Exception $ex){
            DB::rollBack();
            return redirect()->route('admin.social.link');
        }
    }


//    public function update(Request $request, $id)
//    {
//        $validated = $request->validate([
//            'name' => 'required|max:100',
//        ]);
//        try {
//            $category = Category::find($id);
//            if (empty($category)) {
//                throw new \Exception('Failed!');
//            }
//            $updateCategory = $category->update([
//                'name' => $request->name,
//                'status' => $request->status,
//            ]);
//            if (!empty($updateCategory)) {
//                DB::commit();
//                return Redirect::route('blog.category.show')->with('Category Update correctly!!');
//            }
//        } catch (\Exception $ex) {
//            DB::rollBack();
//            return Redirect::route('all.category')->with('Category Update Fail!!');
//        }
//    }


}
