<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Storage;
use Str;
use File;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public $page_title;
    public function __construct()
    { 
        $this->page_title = "Users";
        $this->middleware('auth');
        
    } 
    public function index()
    {
        $page_title = $this->page_title;
        $page_description = 'Some description for the page';
       
        $action = __FUNCTION__;
        //$products = Products::all()->user;
        $user_id= \Auth::id();
        if($user_id==1){$users = User::Where('type','!=','Super')->with('user')->get();}else{$users = User::where('master_id',$user_id)->with('user')->get();}
        
        //dd($users->toArray());
        //dd($products->toArray());
        return view('dashboard.users.list', compact('users','page_title','page_description','action'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = $this->page_title;
        $users_list = User::where('type','Master')->get();
        return view('dashboard.users.create', compact('users_list','page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'       => 'required',
            'email'       => 'required|email|unique:users',
            'type'       => 'required',
            'password'       => 'required|min:6',
            'image'       => 'required',
            
        ]);

       

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator);
        }
        $user_id= \Auth::id();
        //dd($user_id);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        if($request->type=='User'){
        $user->master_id = $request->master_id;
        }
        $user->password = Hash::make($request->password);
        if ($request->hasFile('image')) {
            //dd('ok');
            $file = $request->file('image');
            // $st_random = str_random(10);
            //dd($file);
            $st_random = Str::random(10);
            $filename = $file->getClientOriginalName();
            $filename = explode(".", $filename);
            $ext = $filename[1];
            $filename = $filename[0] . $st_random . "." . $filename[1];

            Storage::disk('image')->put('/users/' . $filename, File::get($file));
            $user->image = 'images/users/' . $filename;
            //Image::make(public_path($products->image))->resize(128, 128)->save(public_path('/product/' . $products->image));

        }
        
        $user->status = $request->status;
        
        $user->save();
        $request->session()->flash('status', 'User has been Added successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id=\Request::segment('2');
        $page_title = $this->page_title;
        $users = User::find($id);
        //dd($id,$products);
        $users_list = User::where('type','Master')->get();
        return view('dashboard.users.edit', compact('users_list','users', 'page_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $validator = Validator::make($request->all(), [
            'name'       => 'required',
            
            'type'       => 'required',
            'password'       => 'required|min:6',
            'image'       => 'required',
            
            
        ]);

        

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator);
        }
        $user = User::findOrFail($request->users_id);
        $user->name = $request->name;
        $user->type = $request->type;
        if($request->type=='User'){
        $user->master_id = $request->master_id;
        }
        $user->password = Hash::make($request->password);
        if ($request->hasFile('image')) {
            //dd('ok');
            $file = $request->file('image');
            // $st_random = str_random(10);
            //dd($file);
            $st_random = Str::random(10);
            $filename = $file->getClientOriginalName();
            $filename = explode(".", $filename);
            $ext = $filename[1];
            $filename = $filename[0] . $st_random . "." . $filename[1];

            Storage::disk('image')->put('/users/' . $filename, File::get($file));
            $user->image = 'images/users/' . $filename;
            //Image::make(public_path($products->image))->resize(128, 128)->save(public_path('/product/' . $products->image));

        }
        
        $user->status = $request->status;
        
        $user->save();
        $request->session()->flash('status', 'User has been Updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id=$request->users_id;
        
         if (User::destroy($id)) {
            
        $request->session()->flash('status', 'User has been Deleted successfully');
        return redirect()->back();
        } else {
            echo 0;
        }
        exit;
    }
}
