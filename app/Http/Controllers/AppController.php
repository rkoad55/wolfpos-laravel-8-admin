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
use App\Models\ProductsExtraModel as productExtra;
use App\Models\MachinesModel as Machines;
use charlieuki\ReceiptPrinter\ReceiptPrinter as ReceiptPrinter;
use App\Models\OrdersModel as orders;
use SimpleXMLElement;
use Exception;
use GuzzleHttp\Client;
use Auth;
use Hash;

class AppController extends Controller
{
                        
  
  
  
  


  function index(Request $request)
    {
     // dd($request->all());
        $machine= Machines::where('email',$request->email)->first();
      // dd($machine->password);
            if (!$machine || !Hash::check($request->password, $machine->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
        
             $token = $machine->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'user' => $machine,
                'token' => $token
            ];
        
             return response($response, 201);
    }
  
                        public function login(Request $request)
                        {
                          dd($request->all());
                            $credentials = [
                                'email' => $request->email,
                                'password' => $request->password
                            ];
                          
                            
                            if (Auth::guard('app')->attempt(['email' => $request->email, 'password' => $request->password])) {
                                $token = auth('app')->user()->createToken('Authentication')->accessToken;
                                return response()->json(['token' => $token,'Machine Details' => auth('app')->user()], 200);
                            } else {
                                return response()->json(['error' => 'UnAuthorised'], 401);
                            }
                        }


                        public function details()
                        {
                          //dd('ok');
                            return response()->json(['Machine Details' => auth()->user()], 200);
                        }

                        public function categories(Request $request){
                          $store_id =  \Auth::user()->store_id;
                        
                        //  dd($store_id);
                        
                        
                                $categories = Categories::where('user_id',$store_id)->get();
                                return response()->json($categories); 
                        
                        }
                
                        public function categoriesById(Request $request,$id){
                        
                            //$appUser= appUser::whereraw(' name = ?  AND  password = ?', [$request->name, $request->password])->get();
                          
                                $categoriesById = Categories::where('id',$id)->get();
                            return response()->json($categoriesById);
                        
                        
                        
                        }
                
                        public function productsByCatId(Request $request,$id){
                          $store_id =  \Auth::user()->store_id;
                        if($id==2){

                        
                                $productsByCatId = Products::with('extra','options')->where('category_id',$id)->where('user_id',$store_id)->get();
                        }else{

                                $productsByCatId = Products::with('extra')->where('category_id',$id)->where('user_id',$store_id)->get();
                        }

                               // dd($productsByCatId->toArray());
                                return response()->json($productsByCatId);
                        
                        
                        
                        }
                
                        public function productsByAll(Request $request){
                        
                          $store_id =  \Auth::user()->store_id;
                                $productsByAll = Products::where('status','1')->where('user_id',$store_id)->get();

                                return response()->json($productsByAll);
                        
                        
                        }
                
                        public function productsById(Request $request,$id){
                        
                          $store_id =  \Auth::user()->store_id;
                                $productsByAll = Products::where('id',$id)->where('user_id',$store_id)->get();
                                $data=$productsByAll[0];
                                $product_extra = addOns::where('product_id',$id)->where('user_id',$store_id)->get();
                                $product_extra_type = dealsExtraType::get()->toArray();
                                if($productsByAll[0]['category_id']==2){
                                $pizaa_extra= productExtra::where('product_id',$id)->where('user_id',$store_id)->get();
                        }
                                foreach ($product_extra as $key=>$value){
                                        //dd($value->extra_type_id);
				                    ///$product_extra_type[] = dealsExtraType::where('id',$value->extra_type_id)->get()->toArray();
									
                                }
                                
                                //dd($productsByAll->toArray());
                                $data['extra'] = $product_extra;
                                $data['extra_type'] = $product_extra_type;
                                if($productsByAll[0]['category_id']==2){
                                $data['options']=$pizaa_extra;
                        }
                                return response()->json($data);
                        
                        
                        
                        
                        }
                
                
                        public function dealsByAll(Request $request){
                          $store_id =  \Auth::user()->store_id;
                        
                                $dealsByAll = Deals::where('status','1')->where('user_id',$store_id)->get();

                                return response()->json($dealsByAll);
                        
                        
                        
                        
                        }
                
                        public function dealsById(Request $request,$id){
                                $data = array();
                                $store_id =  \Auth::user()->store_id;
                        
                                $dealsById = Deals::where('id',$id)->where('user_id',$store_id)->get()->toArray();
                                $data = $dealsById[0];
                                // dd($dealsById);exit;
                                // $product = $dealsById->toArray();
                                $product_ids = explode(",", $dealsById[0]['products_id']);
                               // dd($product_ids);
                                $deals_product = Products::whereIn('id',$product_ids)->where('user_id',$store_id)->get()->toArray();
                                $deals_extra = dealsExtra::with('extraType')->where('deal_id',$id)->where('user_id',$store_id)->get()->toArray();
                                $product_extra_type = dealsExtraType::get()->toArray();
                                //dd($deals_extra);
                                $data['products'] = $deals_product;
                                $data['extra'] = $deals_extra;
                                $data['extra_type'] = $product_extra_type;
                                //$all_data_of_deal = array_merge($deals_product, $dealsById,$deals_extra);
                                // dd($data);
                                return response()->json($data);
                        
                        
                        
                        
                        }
                
                        public function extraCatById(Request $request,$id){
                        
                          $store_id =  \Auth::user()->store_id;
                            $categoriesExtra = categoriesExtra::where('category_id',$id)->where('user_id',$store_id)->get();
                        
                            return response()->json($categoriesExtra);
                        
                        
                        
                        
                        }
                        public function extraDealById(Request $request,$id){
                        
                          $store_id =  \Auth::user()->store_id;
                            $dealsExtra = dealsExtra::where('deal_id',$id)->where('user_id',$store_id)->get();
                        
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
                        
                          $store_id =  \Auth::user()->store_id;
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
                          //dd($request->all());
                                $product = orders::create($request->all());
                               //dd(1);
                               //order number 
                               $insertedId = $product->id;
                                $response["success"] = 1;
                                $response["order_id"] = $insertedId;
                               return response()->json($response);
                                
                                
                                
                        }






                        function setLogin($security_key) {
                            $this->login['security_key'] = $security_key;
                          }
                        
                          function setOrder($orderid,
                                $orderdescription,
                                $tax,
                                $shipping,
                                $ponumber,
                                $ipaddress) {
                            $this->order['orderid']          = $orderid;
                            $this->order['orderdescription'] = $orderdescription;
                            $this->order['tax']              = $tax;
                            $this->order['shipping']         = $shipping;
                            $this->order['ponumber']         = $ponumber;
                            $this->order['ipaddress']        = $ipaddress;
                          }
                        
                          function setBilling($firstname,
                                $lastname,
                                $company,
                                $address1,
                                $address2,
                                $city,
                                $state,
                                $zip,
                                $country,
                                $phone,
                                $fax,
                                $email,
                                $website) {
                            $this->billing['firstname'] = $firstname;
                            $this->billing['lastname']  = $lastname;
                            $this->billing['company']   = $company;
                            $this->billing['address1']  = $address1;
                            $this->billing['address2']  = $address2;
                            $this->billing['city']      = $city;
                            $this->billing['state']     = $state;
                            $this->billing['zip']       = $zip;
                            $this->billing['country']   = $country;
                            $this->billing['phone']     = $phone;
                            $this->billing['fax']       = $fax;
                            $this->billing['email']     = $email;
                            $this->billing['website']   = $website;
                          }
                        
                          function setShipping($firstname,
                                $lastname,
                                $company,
                                $address1,
                                $address2,
                                $city,
                                $state,
                                $zip,
                                $country,
                                $email) {
                            $this->shipping['firstname'] = $firstname;
                            $this->shipping['lastname']  = $lastname;
                            $this->shipping['company']   = $company;
                            $this->shipping['address1']  = $address1;
                            $this->shipping['address2']  = $address2;
                            $this->shipping['city']      = $city;
                            $this->shipping['state']     = $state;
                            $this->shipping['zip']       = $zip;
                            $this->shipping['country']   = $country;
                            $this->shipping['email']     = $email;
                          }
                        
                          // Transaction Functions
                        
                          function doSale($amount, $ccnumber, $ccexp, $cvv="") {
                        
                            $query  = "";
                            // Login Information
                            $query .= "security_key=" . urlencode($this->login['security_key']) . "&";
                            // Sales Information
                            $query .= "ccnumber=" . urlencode($ccnumber) . "&";
                            $query .= "ccexp=" . urlencode($ccexp) . "&";
                            $query .= "amount=" . urlencode(number_format($amount,2,".","")) . "&";
                            $query .= "cvv=" . urlencode($cvv) . "&";
                            // Order Information
                            $query .= "ipaddress=" . urlencode($this->order['ipaddress']) . "&";
                            $query .= "orderid=" . urlencode($this->order['orderid']) . "&";
                            $query .= "orderdescription=" . urlencode($this->order['orderdescription']) . "&";
                            $query .= "tax=" . urlencode(number_format($this->order['tax'],2,".","")) . "&";
                            $query .= "shipping=" . urlencode(number_format($this->order['shipping'],2,".","")) . "&";
                            $query .= "ponumber=" . urlencode($this->order['ponumber']) . "&";
                            // Billing Information
                            $query .= "firstname=" . urlencode($this->billing['firstname']) . "&";
                            $query .= "lastname=" . urlencode($this->billing['lastname']) . "&";
                            $query .= "company=" . urlencode($this->billing['company']) . "&";
                            $query .= "address1=" . urlencode($this->billing['address1']) . "&";
                            $query .= "address2=" . urlencode($this->billing['address2']) . "&";
                            $query .= "city=" . urlencode($this->billing['city']) . "&";
                            $query .= "state=" . urlencode($this->billing['state']) . "&";
                            $query .= "zip=" . urlencode($this->billing['zip']) . "&";
                            $query .= "country=" . urlencode($this->billing['country']) . "&";
                            $query .= "phone=" . urlencode($this->billing['phone']) . "&";
                            $query .= "fax=" . urlencode($this->billing['fax']) . "&";
                            $query .= "email=" . urlencode($this->billing['email']) . "&";
                            $query .= "website=" . urlencode($this->billing['website']) . "&";
                            // Shipping Information
                            $query .= "shipping_firstname=" . urlencode($this->shipping['firstname']) . "&";
                            $query .= "shipping_lastname=" . urlencode($this->shipping['lastname']) . "&";
                            $query .= "shipping_company=" . urlencode($this->shipping['company']) . "&";
                            $query .= "shipping_address1=" . urlencode($this->shipping['address1']) . "&";
                            $query .= "shipping_address2=" . urlencode($this->shipping['address2']) . "&";
                            $query .= "shipping_city=" . urlencode($this->shipping['city']) . "&";
                            $query .= "shipping_state=" . urlencode($this->shipping['state']) . "&";
                            $query .= "shipping_zip=" . urlencode($this->shipping['zip']) . "&";
                            $query .= "shipping_country=" . urlencode($this->shipping['country']) . "&";
                            $query .= "shipping_email=" . urlencode($this->shipping['email']) . "&";
                            $query .= "type=sale";
                            return $this->_doPost($query);
                          }
                        
                          function doAuth($amount, $ccnumber, $ccexp, $cvv="") {
                        
                            $query  = "";
                            // Login Information
                            $query .= "security_key=" . urlencode($this->login['security_key']) . "&";
                            // Sales Information
                            $query .= "ccnumber=" . urlencode($ccnumber) . "&";
                            $query .= "ccexp=" . urlencode($ccexp) . "&";
                            $query .= "amount=" . urlencode(number_format($amount,2,".","")) . "&";
                            $query .= "cvv=" . urlencode($cvv) . "&";
                            // Order Information
                            $query .= "ipaddress=" . urlencode($this->order['ipaddress']) . "&";
                            $query .= "orderid=" . urlencode($this->order['orderid']) . "&";
                            $query .= "orderdescription=" . urlencode($this->order['orderdescription']) . "&";
                            $query .= "tax=" . urlencode(number_format($this->order['tax'],2,".","")) . "&";
                            $query .= "shipping=" . urlencode(number_format($this->order['shipping'],2,".","")) . "&";
                            $query .= "ponumber=" . urlencode($this->order['ponumber']) . "&";
                            // Billing Information
                            $query .= "firstname=" . urlencode($this->billing['firstname']) . "&";
                            $query .= "lastname=" . urlencode($this->billing['lastname']) . "&";
                            $query .= "company=" . urlencode($this->billing['company']) . "&";
                            $query .= "address1=" . urlencode($this->billing['address1']) . "&";
                            $query .= "address2=" . urlencode($this->billing['address2']) . "&";
                            $query .= "city=" . urlencode($this->billing['city']) . "&";
                            $query .= "state=" . urlencode($this->billing['state']) . "&";
                            $query .= "zip=" . urlencode($this->billing['zip']) . "&";
                            $query .= "country=" . urlencode($this->billing['country']) . "&";
                            $query .= "phone=" . urlencode($this->billing['phone']) . "&";
                            $query .= "fax=" . urlencode($this->billing['fax']) . "&";
                            $query .= "email=" . urlencode($this->billing['email']) . "&";
                            $query .= "website=" . urlencode($this->billing['website']) . "&";
                            // Shipping Information
                            $query .= "shipping_firstname=" . urlencode($this->shipping['firstname']) . "&";
                            $query .= "shipping_lastname=" . urlencode($this->shipping['lastname']) . "&";
                            $query .= "shipping_company=" . urlencode($this->shipping['company']) . "&";
                            $query .= "shipping_address1=" . urlencode($this->shipping['address1']) . "&";
                            $query .= "shipping_address2=" . urlencode($this->shipping['address2']) . "&";
                            $query .= "shipping_city=" . urlencode($this->shipping['city']) . "&";
                            $query .= "shipping_state=" . urlencode($this->shipping['state']) . "&";
                            $query .= "shipping_zip=" . urlencode($this->shipping['zip']) . "&";
                            $query .= "shipping_country=" . urlencode($this->shipping['country']) . "&";
                            $query .= "shipping_email=" . urlencode($this->shipping['email']) . "&";
                            $query .= "type=auth";
                            return $this->_doPost($query);
                          }
                        
                          function doCredit($amount, $ccnumber, $ccexp) {
                        
                            $query  = "";
                            // Login Information
                            $query .= "security_key=" . urlencode($this->login['security_key']) . "&";
                            // Sales Information
                            $query .= "ccnumber=" . urlencode($ccnumber) . "&";
                            $query .= "ccexp=" . urlencode($ccexp) . "&";
                            $query .= "amount=" . urlencode(number_format($amount,2,".","")) . "&";
                            // Order Information
                            $query .= "ipaddress=" . urlencode($this->order['ipaddress']) . "&";
                            $query .= "orderid=" . urlencode($this->order['orderid']) . "&";
                            $query .= "orderdescription=" . urlencode($this->order['orderdescription']) . "&";
                            $query .= "tax=" . urlencode(number_format($this->order['tax'],2,".","")) . "&";
                            $query .= "shipping=" . urlencode(number_format($this->order['shipping'],2,".","")) . "&";
                            $query .= "ponumber=" . urlencode($this->order['ponumber']) . "&";
                            // Billing Information
                            $query .= "firstname=" . urlencode($this->billing['firstname']) . "&";
                            $query .= "lastname=" . urlencode($this->billing['lastname']) . "&";
                            $query .= "company=" . urlencode($this->billing['company']) . "&";
                            $query .= "address1=" . urlencode($this->billing['address1']) . "&";
                            $query .= "address2=" . urlencode($this->billing['address2']) . "&";
                            $query .= "city=" . urlencode($this->billing['city']) . "&";
                            $query .= "state=" . urlencode($this->billing['state']) . "&";
                            $query .= "zip=" . urlencode($this->billing['zip']) . "&";
                            $query .= "country=" . urlencode($this->billing['country']) . "&";
                            $query .= "phone=" . urlencode($this->billing['phone']) . "&";
                            $query .= "fax=" . urlencode($this->billing['fax']) . "&";
                            $query .= "email=" . urlencode($this->billing['email']) . "&";
                            $query .= "website=" . urlencode($this->billing['website']) . "&";
                            $query .= "type=credit";
                            return $this->_doPost($query);
                          }
                        
                          function doOffline($authorizationcode, $amount, $ccnumber, $ccexp) {
                        
                            $query  = "";
                            // Login Information
                            $query .= "security_key=" . urlencode($this->login['security_key']) . "&";
                            // Sales Information
                            $query .= "ccnumber=" . urlencode($ccnumber) . "&";
                            $query .= "ccexp=" . urlencode($ccexp) . "&";
                            $query .= "amount=" . urlencode(number_format($amount,2,".","")) . "&";
                            $query .= "authorizationcode=" . urlencode($authorizationcode) . "&";
                            // Order Information
                            $query .= "ipaddress=" . urlencode($this->order['ipaddress']) . "&";
                            $query .= "orderid=" . urlencode($this->order['orderid']) . "&";
                            $query .= "orderdescription=" . urlencode($this->order['orderdescription']) . "&";
                            $query .= "tax=" . urlencode(number_format($this->order['tax'],2,".","")) . "&";
                            $query .= "shipping=" . urlencode(number_format($this->order['shipping'],2,".","")) . "&";
                            $query .= "ponumber=" . urlencode($this->order['ponumber']) . "&";
                            // Billing Information
                            $query .= "firstname=" . urlencode($this->billing['firstname']) . "&";
                            $query .= "lastname=" . urlencode($this->billing['lastname']) . "&";
                            $query .= "company=" . urlencode($this->billing['company']) . "&";
                            $query .= "address1=" . urlencode($this->billing['address1']) . "&";
                            $query .= "address2=" . urlencode($this->billing['address2']) . "&";
                            $query .= "city=" . urlencode($this->billing['city']) . "&";
                            $query .= "state=" . urlencode($this->billing['state']) . "&";
                            $query .= "zip=" . urlencode($this->billing['zip']) . "&";
                            $query .= "country=" . urlencode($this->billing['country']) . "&";
                            $query .= "phone=" . urlencode($this->billing['phone']) . "&";
                            $query .= "fax=" . urlencode($this->billing['fax']) . "&";
                            $query .= "email=" . urlencode($this->billing['email']) . "&";
                            $query .= "website=" . urlencode($this->billing['website']) . "&";
                            // Shipping Information
                            $query .= "shipping_firstname=" . urlencode($this->shipping['firstname']) . "&";
                            $query .= "shipping_lastname=" . urlencode($this->shipping['lastname']) . "&";
                            $query .= "shipping_company=" . urlencode($this->shipping['company']) . "&";
                            $query .= "shipping_address1=" . urlencode($this->shipping['address1']) . "&";
                            $query .= "shipping_address2=" . urlencode($this->shipping['address2']) . "&";
                            $query .= "shipping_city=" . urlencode($this->shipping['city']) . "&";
                            $query .= "shipping_state=" . urlencode($this->shipping['state']) . "&";
                            $query .= "shipping_zip=" . urlencode($this->shipping['zip']) . "&";
                            $query .= "shipping_country=" . urlencode($this->shipping['country']) . "&";
                            $query .= "shipping_email=" . urlencode($this->shipping['email']) . "&";
                            $query .= "type=offline";
                            return $this->_doPost($query);
                          }
                        
                          function doCapture($transactionid, $amount =0) {
                        
                            $query  = "";
                            // Login Information
                            $query .= "security_key=" . urlencode($this->login['security_key']) . "&";
                            // Transaction Information
                            $query .= "transactionid=" . urlencode($transactionid) . "&";
                            if ($amount>0) {
                                $query .= "amount=" . urlencode(number_format($amount,2,".","")) . "&";
                            }
                            $query .= "type=capture";
                            return $this->_doPost($query);
                          }
                        
                          function doVoid($transactionid) {
                        
                            $query  = "";
                            // Login Information
                            $query .= "security_key=" . urlencode($this->login['security_key']) . "&";
                            // Transaction Information
                            $query .= "transactionid=" . urlencode($transactionid) . "&";
                            $query .= "type=void";
                            return $this->_doPost($query);
                          }
                        
                          function doRefund($transactionid, $amount = 0) {
                        
                            $query  = "";
                            // Login Information
                            $query .= "security_key=" . urlencode($this->login['security_key']) . "&";
                            // Transaction Information
                            $query .= "transactionid=" . urlencode($transactionid) . "&";
                            if ($amount>0) {
                                $query .= "amount=" . urlencode(number_format($amount,2,".","")) . "&";
                            }
                            $query .= "type=refund";
                            return $this->_doPost($query);
                          }
                        
                          function _doPost($query) {
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, "https://integratepayments.transactiongateway.com/api/transact.php");
                            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
                            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($ch, CURLOPT_HEADER, 0);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                        
                            curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
                            curl_setopt($ch, CURLOPT_POST, 1);
                        
                            if (!($data = curl_exec($ch))) {
                                return ERROR;
                            }
                            curl_close($ch);
                            unset($ch);
                            print json_encode($data);
                            //dd($data);
                            $data = explode("&",$data);
                            for($i=0;$i<count($data);$i++) {
                                $rdata = explode("=",$data[$i]);
                                $this->responses[$rdata[0]] = $rdata[1];
                            }
                            return $this->responses['response'];
                          }


             

                        

                      public  function paymentStore(Request $request){
                        
                        //dd($request->all());

                        $this->setLogin("6457Thfj624V5r7WUwc5v6a68Zsd6YEm");
                       $billing= $this->setBilling("John","Smith","Acme, Inc.","123 Main St","Suite 200", "Beverly Hills",
                                 "CA","90210","US","555-555-5555","555-555-5556","support@example.com",
                                "www.example.com");
                       $shipping= $this->setShipping("Mary","Smith","na","124 Shipping Main St","Suite Ship", "Beverly Hills",
                                 "CA","90210","US","support@example.com");
                        // $orderid,$orderdescription,$tax,$shipping,$ponumber,$ipaddress
                        $order = $this->setOrder("1234","Big Order",1, 2, "PO1234","65.192.14.10");
                        $r = $this->doSale("50.00","4111111111111111","1010");
                        $response= $this->responses['responsetext'];
                        // $response_id = explode('=', $r[0]);
                        // $response_text = explode('=', $r[1]);
                        // $response_code = explode('=', $r[8]);
                        // // dd($r, $response_id, $response_text, $response_code);
                        // $id = $response_id[1];
                        // $text = $response_text[1];
                        // $code = $response_code[1];
                        // $response = array();
                        // $response['id'] = $id;
                        // $response['text'] = $text;
                        // $response['code'] = $code;
                        // if($id == 1 && $text == 'SUCCESS' && $code == 100){
                        //     $this->patientPayment($response, $cc_number, $cvv_number);
                        // }
                        
                        //dd($order,$billing,$shipping,$r, $response);
                       // dd($order,$r,$response);
                        return $response;
                        
                        } 


                            public function payment2(Request $request){
                            
                            
                              $response = $client->request( 'POST', 'http://sr378e260000.test.connect.paymentsense.cloud/', [
                                'auth'    => [
                                    'SR378E26',
                                    '91fe3c0c-ced5-4693-800a-f8e3aa98ba78'
                                ],
                                // 'headers' => [
                                //     'if you want to pass something in the headers'
                                // ]
                            ]
                            );
                            dd($response);
                              $client = new Client(['base_uri' => 'https://sr378e260000.test.connect.paymentsense.cloud/']);

                            $response = $client->request('POST', '/pac/terminals/VCMWolfSIP0/transactions',['headers' => [
                              'accept' => 'application/connect.v2+json',
                              'Content-Type' => 'application/connect.v2+json',
                              'Authorization' => 'Basic U1IzNzhFMjY6OTFmZTNjMGMtY2VkNS00NjkzLTgwMGEtZjhlM2FhOThiYTc4',
                              'Software-House-Id' => 'SR378E26',
                              'Installer-Id' => 'SR378E26',

                            ]] ,['form_params' => [
                                'transactionType' => 'SALE',
                                'amount' => '100',
                                'currency' => 'GBP',

                            ]]);
                            
                            echo $response->getBody();
                            
                              // $url = "https://sr378e260000.test.connect.paymentsense.cloud/pac/terminals/VCMWolfSIP0/transactions";
                              // $data1 = array("transactionType" => 'SALE', "amount" => 100, "currency" => "GBP");
                              // //$data_string = json_encode($data1);
                              //   $data['accept'] = "application/connect.v2+json";
                              //   $data['Content-Type'] = "application/connect.v2+json";
                              //   $data['Authorization'] = "Basic YWRtaW46OTFmZTNjMGMtY2VkNS00NjkzLTgwMGEtZjhlM2FhOThiYTc4";
                              //   $data['Software-House-Id'] = "SR378E26";
                              //   $data['Installer-Id'] = "SR378E26";
                              //   $data['Content-Length'] = strlen($data1);
                              //   $request = $client->post($url,  ['body'=>$data]);
                              //   $response = $request->send();

                              //   dd($response);
                            
                                   // dd('ok');
                            ////// Array of data ////
                            //    $data = array("transactionType" => 'SALE', "amount" => 100, "currency" => "GBP");
                            //        $data_string = json_encode($data);
                            //        $ch = curl_init();
                            // ////// url where i want to get retrieve data
                            //        curl_setopt($ch, CURLOPT_URL,"https://sr378e260000.test.connect.paymentsense.cloud/pac/terminals/VCMWolfSIP0/transactions");
                            //        ///// Method of Request /////
                            //        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                            //        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
                            //        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            //        //// header of curl method we pass the data and authorization key etc ////
                            //        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                            //                            'accept: application/connect.v2+json',
                            //                            'Content-Type: application/connect.v2+json',
                            //                            'Authorization: Basic YWRtaW46OTFmZTNjMGMtY2VkNS00NjkzLTgwMGEtZjhlM2FhOThiYTc4',
                            //                            'Software-House-Id: SR378E26',
                            //                            'Installer-Id: SR378E26',
                            //                        'Content-Length: ' . strlen($data_string))
                            //          );
                            
                            //        $server_output = curl_exec($ch);
                            //        ////// GET the response from paymnetsense ////////
                            //        dd($server_output);
                            
                            //        curl_close ($ch);
                            
                                   // Further processing ...
                            //        if ($server_output == "OK") { echo "ok"; } else { echo "error"; }
                            
                            }



}
