<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DealsModel as Deals;
use App\Models\ProductsModel as Products;
use Validator;
use Storage;
use Str;
use File;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Auth;
use App\Models\CategoriesModel as Categories;

class DealsController extends Controller
{
    public $page_title;
    public function __construct()
    { 
        $this->page_title = "Deals";
        $this->middleware('auth');
        
    } 
    public function index()
    { 
       
        $page_title = $this->page_title;
        $page_description = 'Some description for the page';
       
        $action = __FUNCTION__;
        //$products = Products::all()->user;
        $user_id= \Auth::id();
        if($user_id==1){$deals = Deals::with('user','categories')->get();}else{$deals = Deals::where('user_id',$user_id)->with('user')->get();}
        
        //dd($user->toArray());
        //dd($products->toArray());
        return view('dashboard.deals.list', compact('deals','page_title','page_description','action'));
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
        $products_list = Products::where('user_id',$user_id)->get();
        return view('dashboard.deals.create', compact('products_list','page_title')); 
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
        $deals = new Deals();
        $deals->deal_code = rand(10000,100000);
        $deals->user_id = $user_id;
        $deals->name = $request->name;
        $deals->brand = $request->brand;
        $deals->availability = $request->availability;
        $deals->description = $request->description;
        $deals->price = $request->price;
        $deals->sale_price = $request->sale_price;
        $deals->products_id = implode(',',$request->products_id);
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

            Storage::disk('image')->put('/deals/' . $filename, File::get($file));
            $deals->image = 'images/deals/' . $filename;
            //Image::make(public_path($products->image))->resize(128, 128)->save(public_path('/product/' . $products->image));

        }
        
        $deals->status = $request->status;
        
        $deals->save();
        $request->session()->flash('status', 'Deal has been Added successfully');
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
        //dd('ok');
        $id=\Request::segment('2');
        $page_title = $this->page_title;
        $deals = Deals::find($id);
        $products_list = Products::where('user_id',$user_id)->get();
        //dd($id,$products);
        return view('dashboard.deals.edit', compact('products_list','deals', 'page_title'));
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
            
            'availability'       => 'required',
            'description'       => 'required',
            'price'       => 'required|numeric',
            
            
        ]);

       

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all())
                ->withErrors($validator);
        }
        $deals = Deals::findOrFail($request->deal_id);
        $deals->name = $request->name;
        
        $deals->availability = $request->availability;
        $deals->description = $request->description;
        $deals->price = $request->price;
        $deals->sale_price = $request->sale_price;
        $deals->products_id = implode(',',$request->products_id);
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

            Storage::disk('image')->put('/deals/' . $filename, File::get($file));
            $deals->image = 'images/deals/' . $filename;
            //Image::make(public_path($products->image))->resize(128, 128)->save(public_path('/product/' . $products->image));

        }
        
        $deals->status = $request->status;
        
        $deals->save();
        $request->session()->flash('status', 'Deal has been Updated successfully');
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
        $id=$request->deal_id;

         if (Deals::destroy($id)) {
            
        $request->session()->flash('status', 'Deal has been Updated successfully');
        return redirect()->back();
        } else {
            echo 0;
        }
        exit;
    }
}
