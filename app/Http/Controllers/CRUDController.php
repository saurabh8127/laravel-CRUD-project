<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CRUDController extends Controller
{

//index method
    public function index(){
      // $users = DB::table('contacts')->select('id','name','email')->get();
      $contacts = contact::all();
      // dd($contacts);
      // return view('pages.index')->with('contacts', $contacts);
      return view('pages.index',['contacts' => $contacts]);
    }

//create method
        public function create(){
          return view('pages.addUser');
        }

        public function insert(Request $request){

                  // Validate
            $this->validate($request, [
                'name'     => 'required|string',
                'email'     => 'required|string|email|max:255',
                'mobile'  => 'required|string|min:10|max:14',
                'city'     => 'required|string',
            ]);
            $save = new contact;
            $save->name = $request->input('name');
            $save->email = $request->input('email');
            $save->mobile = $request->input('mobile');
            $save->city= $request->input('city');

            $save->save();
            //  return view('pages.index',['contacts' => $contacts]);
            return redirect('/');
        }

//delete method
        public function delete($id) 
       {
          // contact::find($id)->delete();
          // DB::delete('DELETE FROM contacts WHERE id ='[$id]);
          contact::find($id)->delete();
          return redirect('/');
       }

//update method
      public function formUpdate($id)
      {
        $data = contact::find($id);
        return view('pages.update',['data'=>$data]);
      }

      public function saveUpdateData(Request $request){
          $data=contact::find($request->id);

    // Validate
            $this->validate($request, [
                'name'     => 'required|string',
                'email'     => 'required|string|email|max:255',
                'mobile'  => 'required|string|min:10|max:14',
                'city'     => 'required|string',
            ]);

          $data->name = $request->input('name');
          $data->email = $request->input('email');
          $data->mobile = $request->input('mobile');
          $data->city= $request->input('city');
          $data->save();
        return redirect('/');
      }
}
