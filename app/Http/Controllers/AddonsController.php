<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsModel as Products;
use Validator;
use Storage;
use Str;
use File;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Auth;
use App\Models\CategoriesModel as Categories;
use App\Models\AddonsModel as addOns;

class AddonsController extends Controller
{
    public $page_title;
    public function __construct()
    { 
        $this->page_title = "Addons";
        $this->middleware('auth');
        
    } 
    public function index(Request $request)
    {
       // dd(1);
        //dd($id=\Request::segment('2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = $this->page_title;
        
        return view('dashboard.addons.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request->all());
         $validator = Validator::make($request->all(), [
            'name'       => 'required',
            'price'       => 'required|numeric',
            'image'       => 'required',
            
        ]);

       

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator);
        }
        $user_id= \Auth::id();
        //dd($user_id);
        $addons = new addOns();

        $addons->user_id = $user_id;
        $addons->product_id = $request->product_id;
        $addons->name = $request->name;
        $addons->price = $request->price;
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

            Storage::disk('image')->put('/addons/' . $filename, File::get($file));
            $addons->image = 'images/addons/' . $filename;
            //Image::make(public_path($products->image))->resize(128, 128)->save(public_path('/product/' . $products->image));

        }
        
        $addons->status = $request->status;
        
        $addons->save();
        $request->session()->flash('status', 'Addon has been Added successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $page_title = $this->page_title;
        $page_description = 'Some description for the page';
       
        $action = __FUNCTION__;
        //$products = Products::all()->user;
        $user_id= \Auth::id();
        if ($request->has('product_id')) {
        session(['product_id' => $request->product_id]);
        }
        $addons = addOns::where('product_id',session('product_id'))->get();
        //dd($user->toArray());
       // dd($request->all(),$addons);
        return view('dashboard.addons.list', compact('addons','page_title','page_description','action'));
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
        $addons = addOns::find($id);
        
        //dd($id,$products);
        return view('dashboard.addons.edit', compact('addons', 'page_title'));
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
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'name'       => 'required',
            'price'       => 'required|numeric',
            'image'       => 'required',
            
        ]);

       

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator);
        }
        $user_id= \Auth::id();
        //dd($user_id);
        $addons = addOns::findOrFail($request->addon_id);
        
        $addons->name = $request->name;
        $addons->price = $request->price;
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

            Storage::disk('image')->put('/addons/' . $filename, File::get($file));
            $addons->image = 'images/addons/' . $filename;
            //Image::make(public_path($products->image))->resize(128, 128)->save(public_path('/product/' . $products->image));

        }
        
        $addons->status = $request->status;
        
        $addons->save();
        $request->session()->flash('status', 'Addon has been Added successfully');
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
        $id=$request->addon_id;

         if (addOns::destroy($id)) {
            
        $request->session()->flash('status', 'Addon has been Updated successfully');
        return redirect()->back();
        } else {
            echo 0;
        }
        exit;
    }
}
