<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriesModel as Categories;
use App\Models\ProductsModel as Products;
use App\Models\AppUserModel as appUser;
use App\Models\AddonsModel as addOns;
use App\Models\DealsModel as Deals;
use App\Models\CategoriesExtraModel as categoriesExtra;
use App\Models\DealsExtraModel as dealsExtra;
use App\Models\DealsExtraTypeModel as dealsExtraType;
use charlieuki\ReceiptPrinter\ReceiptPrinter as ReceiptPrinter;
use App\Models\OrdersModel as orders;

class AppController extends Controller
{
                        public function categories(Request $request){
                        
                        
                        
                                $categories = Categories::all();
                                return response()->json($categories); 
                        
                        }
                
                        public function categoriesById(Request $request,$id){
                        
                            //$appUser= appUser::whereraw(' name = ?  AND  password = ?', [$request->name, $request->password])->get();
                        
                        
                        
                                $categoriesById = Categories::where('id',$id)->get();
                            return response()->json($categoriesById);
                        
                        
                        
                        }
                
                        public function productsByCatId(Request $request,$id){
                        
                        
                                $productsByCatId = Products::where('category_id',$id)->get();
                                return response()->json($productsByCatId);
                        
                        
                        
                        }
                
                        public function productsByAll(Request $request){
                        
                        
                                $productsByAll = Products::where('status','1')->get();

                        
                        
                        
                        }
                
                        public function productsById(Request $request,$id){
                        
                        
                                $productsByAll = Products::where('id',$id)->get();
                                $data=$productsByAll[0];
                                $product_extra = addOns::where('product_id',$id)->get();
                                $product_extra_type = dealsExtraType::get()->toArray();
                                foreach ($product_extra as $key=>$value){
                                        //dd($value->extra_type_id);
				///$product_extra_type[] = dealsExtraType::where('id',$value->extra_type_id)->get()->toArray();
									
                                }
                                
                                //dd($productsByAll->toArray());
                                $data['extra'] = $product_extra;
                                $data['extra_type'] = $product_extra_type;
                                return response()->json($data);
                        
                        
                        
                        
                        }
                
                
                        public function dealsByAll(Request $request){
                        
                        
                                $dealsByAll = Deals::where('status','1')->get();

                                return response()->json($dealsByAll);
                        
                        
                        
                        
                        }
                
                        public function dealsById(Request $request,$id){
                                $data = array();
                        
                        
                                $dealsById = Deals::where('id',$id)->get()->toArray();
                                $data = $dealsById[0];
                                // dd($dealsById);exit;
                                // $product = $dealsById->toArray();
                                $product_ids = explode(",", $dealsById[0]['products_id']);
                               // dd($product_ids);
                                $deals_product = Products::whereIn('id',$product_ids)->get()->toArray();
                                $deals_extra = dealsExtra::with('extraType')->where('deal_id',$id)->get()->toArray();
                                //dd($deals_extra);
                                $data['products'] = $deals_product;
                                $data['extra'] = $deals_extra;
                                //$all_data_of_deal = array_merge($deals_product, $dealsById,$deals_extra);
                                // dd($data);
                                return response()->json($data);
                        
                        
                        
                        
                        }
                
                        public function extraCatById(Request $request,$id){
                        
                        
                            $categoriesExtra = categoriesExtra::where('category_id',$id)->get();
                        
                            return response()->json($categoriesExtra);
                        
                        
                        
                        
                        }
                        public function extraDealById(Request $request,$id){
                        
                        
                            $dealsExtra = dealsExtra::where('deal_id',$id)->get();
                        
                            return response()->json($dealsExtra);
                        
                        
                        
                        
                        }
                
                        public function print(Request $request){
                        
                                            // Set params
                                            // Set params
                                            $mid = '123123456';
                                            $store_name = 'YOURMART';
                                            $store_address = 'Mart Address';
                                            $store_phone = '1234567890';
                                            $store_email = 'yourmart@email.com';
                                            $store_website = 'yourmart.com';
                                            $tax_percentage = 10;
                                            $transaction_id = 'TX123ABC456';
                                            $currency = 'Rp';
                                            $request_amount = '500';
                        
                                            // Init printer
                                            $printer = new ReceiptPrinter;
                                            $printer->init(
                                                config('receiptprinter.connector_type'),
                                                config('receiptprinter.connector_descriptor')
                                            );
                                    
                                            // Set store info
                                            $printer->setStore($mid, $store_name, $store_address, $store_phone, $store_email, $store_website);
                                    
                                            // Set currency
                                            $printer->setCurrency($currency);
                                    
                                            // Set request amount
                                            $printer->setRequestAmount($request_amount);
                                    
                                            // Set transaction ID
                                            $printer->setTransactionID($transaction_id);
                                    
                                            // Set qr code
                                            $printer->setQRcode([
                                                'tid' => $transaction_id,
                                                'amount' => $request_amount,
                                            ]);

                                            // Print payment request
                                            //$printer->printRequest();

                                    return response()->json("Succes");

                        }
                        public function orders(Request $request){
                        
                        
                                $orders = orders::where('status','1')->get();
                                return response()->json($orders);

                        
                        
                        
                        }
                        public function ordersById(Request $request,$id){
                        
                        //dd($request);
                                $ordersById = orders::where('id',$id)->get();
                                return response()->json($ordersById);
                                

                        
                        
                        
                        }
                        public function ordersStore(Request $request)
                        {
                              //  $product = orders::create($request->all());
                               dd(1);
                               // $response["success"] = 1;
                              // return response()->json($response);
                                
                                
                                
                                }
}
