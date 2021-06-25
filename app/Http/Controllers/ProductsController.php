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

class ProductsController extends Controller
{
    public $page_title;
    public function __construct()
    { 
        $this->page_title = "Products";
        $this->middleware('auth');
        
    } 
    public function index()
    { 
       
        $page_title = $this->page_title;
        $page_description = 'Some description for the page';
       
        $action = __FUNCTION__;
        //$products = Products::all()->user;
        $user_id= \Auth::id();
        if($user_id==1){$products = Products::with('user','categories')->get();}else{$products = Products::where('user_id',$user_id)->with('user')->get();}
        
        //dd($user->toArray());
        //dd($products->toArray());
        return view('dashboard.products.list', compact('products','page_title','page_description','action'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id= \Auth::id();
        $page_title = $this->page_title;
        $category_list = Categories::where('user_id',$user_id)->get();
        //dd($category_list);
        return view('dashboard.products.create', compact('category_list','page_title')); 
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
            'brand'       => 'required',
            'availability'       => 'required',
            'description'       => 'required',
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
        $products = new Products();
        $products->product_code = rand(10000,100000);
        $products->user_id = $user_id;
        $products->name = $request->name;
        $products->brand = $request->brand;
        $products->availability = $request->availability;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->sale_price = $request->sale_price;
        $products->category_id = $request->category_id;
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

            Storage::disk('image')->put('/product/' . $filename, File::get($file));
            $products->image = 'images/product/' . $filename;
            //Image::make(public_path($products->image))->resize(128, 128)->save(public_path('/product/' . $products->image));

        }
        
        $products->status = $request->status;
        
        $products->save();
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
        $user_id= \Auth::id();
        $id=\Request::segment('2');
        $page_title = $this->page_title;
        $products = Products::find($id);
        $category_list = Categories::where('user_id',$user_id)->get();
        //dd($id,$products);
        return view('dashboard.products.edit', compact('category_list','products', 'page_title'));
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
            'brand'       => 'required',
            'availability'       => 'required',
            'description'       => 'required',
            'price'       => 'required|numeric',
            
            
        ]);

       

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator);
        }
        $products = Products::findOrFail($request->product_id);
        $products->name = $request->name;
        $products->brand = $request->brand;
        $products->availability = $request->availability;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->sale_price = $request->sale_price;
        $products->category_id = $request->category_id;
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

            Storage::disk('image')->put('/product/' . $filename, File::get($file));
            $products->image = 'images/product/' . $filename;
            //Image::make(public_path($products->image))->resize(128, 128)->save(public_path('/product/' . $products->image));

        }
        
        $products->status = $request->status;
        
        $products->save();
        $request->session()->flash('status', 'Product has been Updated successfully');
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
        $id=$request->product_id;

         if (Products::destroy($id)) {
            
        $request->session()->flash('status', 'Product has been Updated successfully');
        return redirect()->back();
        } else {
            echo 0;
        }
        exit;
    }
}
