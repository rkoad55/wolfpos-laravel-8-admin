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
use App\Models\DealsModel as Deals;
use App\Models\DealsExtraModel as dealsExtra;

class DealsExtraController extends Controller
{
    public $page_title;
    public function __construct()
    { 
        $this->page_title = "Deals Extras";
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
        
        return view('dashboard.deals_extra.create', compact('page_title'));
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
        $dealsExtra = new dealsExtra();

        $dealsExtra->user_id = $user_id;
        $dealsExtra->deal_id = $request->dealsExtra_id;
        $dealsExtra->name = $request->name;
        $dealsExtra->price = $request->price;
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

            Storage::disk('image')->put('/dealsExtra/' . $filename, File::get($file));
            $dealsExtra->image = 'images/dealsExtra/' . $filename;
            //Image::make(public_path($products->image))->resize(128, 128)->save(public_path('/product/' . $products->image));

        }
        
        $dealsExtra->status = $request->status;
        
        $dealsExtra->save();
        $request->session()->flash('status', 'Deal Extra has been Added successfully');
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
        if ($request->has('dealsExtra_id')) {
            session(['dealsExtra_id' => $request->dealsExtra_id]);
        }
        $dealsExtra = dealsExtra::where('deal_id',session('dealsExtra_id'))->get();
        //dd($user->toArray());
       // dd($request->all(),$addons);
        return view('dashboard.deals_extra.list', compact('dealsExtra','page_title','page_description','action'));
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
        $dealsExtra = dealsExtra::find($id);
        
        //dd($id,$products);
        return view('dashboard.deals_extra.edit', compact('dealsExtra', 'page_title'));
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
        $dealsExtra = dealsExtra::findOrFail($request->dealsExtra_id);
        
        $dealsExtra->name = $request->name;
        $dealsExtra->price = $request->price;
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

            Storage::disk('image')->put('/dealsExtra/' . $filename, File::get($file));
            $dealsExtra->image = 'images/dealsExtra/' . $filename;
            //Image::make(public_path($products->image))->resize(128, 128)->save(public_path('/product/' . $products->image));

        }
        
        $dealsExtra->status = $request->status;
        
        $dealsExtra->save();
        $request->session()->flash('status', 'Deal Extra has been Added successfully');
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
        $id=$request->dealsExtra_id;

         if (dealsExtra::destroy($id)) {
            
        $request->session()->flash('status', 'Deal Extra has been Updated successfully');
        return redirect()->back();
        } else {
            echo 0;
        }
        exit;
    }
}
