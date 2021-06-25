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
use App\Models\CategoriesExtraModel as categoriesExtra;

class CategoriesExtraController extends Controller
{
    public $page_title;
    public function __construct()
    { 
        $this->page_title = "Categories Extras";
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
        
        return view('dashboard.categories_extra.create', compact('page_title'));
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
        $categoriesExtra = new categoriesExtra();

        $categoriesExtra->user_id = $user_id;
        $categoriesExtra->category_id = $request->categoriesExtra_id;
        $categoriesExtra->name = $request->name;
        $categoriesExtra->price = $request->price;
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

            Storage::disk('image')->put('/categoriesExtra/' . $filename, File::get($file));
            $categoriesExtra->image = 'images/categoriesExtra/' . $filename;
            //Image::make(public_path($products->image))->resize(128, 128)->save(public_path('/product/' . $products->image));

        }
        
        $categoriesExtra->status = $request->status;
        
        $categoriesExtra->save();
        $request->session()->flash('status', 'Category Extra has been Added successfully');
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
        if ($request->has('categoriesExtra_id')) {
        session(['categoriesExtra_id' => $request->categoriesExtra_id]);
        }
        $categoriesExtra = categoriesExtra::where('category_id',session('categoriesExtra_id'))->get();
        //dd($user->toArray());
       // dd($request->all(),$addons);
        return view('dashboard.categories_extra.list', compact('categoriesExtra','page_title','page_description','action'));
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
        $categoriesExtra = categoriesExtra::find($id);
        
        //dd($id,$products);
        return view('dashboard.categories_extra.edit', compact('categoriesExtra', 'page_title'));
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
        $categoriesExtra = categoriesExtra::findOrFail($request->categoriesExtra_id);
        
        $categoriesExtra->name = $request->name;
        $categoriesExtra->price = $request->price;
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

            Storage::disk('image')->put('/categoriesExtra/' . $filename, File::get($file));
            $categoriesExtra->image = 'images/categoriesExtra/' . $filename;
            //Image::make(public_path($products->image))->resize(128, 128)->save(public_path('/product/' . $products->image));

        }
        
        $categoriesExtra->status = $request->status;
        
        $categoriesExtra->save();
        $request->session()->flash('status', 'Category Extra has been Added successfully');
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
        $id=$request->categoriesExtra_id;

         if (categoriesExtra::destroy($id)) {
            
        $request->session()->flash('status', 'Category Extra has been Updated successfully');
        return redirect()->back();
        } else {
            echo 0;
        }
        exit;
    }
}
