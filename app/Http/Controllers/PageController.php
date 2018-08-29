<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Helper\Validate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Store;
use App\Product;




class PageController extends BaseController
{

	private $validate;
	private $user;
	private $product;
	private $store;


	public function __construct( Validate $validate, User $user, Product $product, Store $store) {

		$this->validate = $validate;
		$this->user = $user;
		$this->product = $product;
		$this->store = $store;
	}


	public function adduser(){
		$getstore = DB::table('stores')->get();

		return view('adduser')->with(['readstore' => $getstore]);
	}

	public function addstore(){

		$getproduct = DB::table('products')->get();

		return view('addstore')->with(['readproduct' => $getproduct]);
	}

	public function addproduct(){

		return view('addproduct');
	}

	public function updatepage(){

		$getproduct = DB::table('products')->get();
		$getstore = DB::table('stores')->get();
		$getusers = DB::table('users')->get();


		return view('update')->with(['readproduct'=> $getproduct, 'readstore'=> $getstore, 'readuser'=> $getusers]);
	}

	public function updateproduct(Request $request){

		try {

			$product = $request->productid;
			$store = $request->storeid;

			$updating =  DB::table('stores')->where('stid', $store)->update(array('productid' => $product));

			return response()->json(["success" => "store updated created"], 200);
		} catch(\Exception $e) {
			return response()->json(["message" => $e->getMessage()], 500);
		}

	}

	public function updatestore(Request $request){
		try {

			$users = $request->users;

			$storeid = implode(",", $request->storeid);

			$updating =  DB::table('users')->where('id', $users)->update(array('storeid' => $storeid));
			
			return response()->json(["success" => "User updates successfully"], 200);
		} catch(\Exception $e) {
			return response()->json(["message" => $e->getMessage()], 500);
		}

	}

	public function postadduser(Request $request)
	{
		try {
			$body = $request->all();

                //validate request body
			$validation = $this->validate->validateuser($body);
			if($validation->fails())
			{
				$errorMessages = $validation->getMessageBag()->messages();

				return response()->json(["error" => $errorMessages]);
			} else {

				if(is_null($request->storeid)){


					$createApp = User::create(array(
						'name' =>   $request->name,
						'email' =>    $request->email,
						'role' =>    $request->role,


					));

				}else{

					$storeid = implode(",", $request->storeid);

					$createApp = User::create(array(
						'name' =>   $request->name,
						'email' =>    $request->email,
						'role' =>    $request->role,
						'storeid'=>        $storeid,


					));

				}
				

				return response()->json(["success" => "User successfully created"], 200);
			}
		} catch(\Exception $e) {
			return response()->json(["message" => $e->getMessage()], 500);
		}


	}

	public function postaddproduct(Request $request)
	{
		try {
			$body = $request->all();

                //validate request body
			$validation = $this->validate->validateproduct($body);
			if($validation->fails())
			{
				$errorMessages = $validation->getMessageBag()->messages();

				return response()->json(["error" => $errorMessages]);
			} else {
				$this->product->create($body);
				return response()->json(["success" => "Product successfully created"], 200);
			}
		} catch(\Exception $e) {
			return response()->json(["message" => $e->getMessage()], 500);
		}


	}

	public function postaddstore(Request $request)
	{
		try {
			$body = $request->all();
                //validate request body
			$validation = $this->validate->validatestore($body);
			if($validation->fails())
			{
				$errorMessages = $validation->getMessageBag()->messages();

				return response()->json(["error" => $errorMessages]);
			} else {
				$this->store->create($body);
				return response()->json(["success" => "Store successfully created"], 200);
			}
		} catch(\Exception $e) {
			return response()->json(["message" => $e->getMessage()], 500);
		}


	}

	public function getalluser(){

		$getuser = DB::table('users')->join('stores', 'stores.stid', '=', 'users.storeid')->get();
		$getstore = DB::table('stores')->join('products', 'products.pid', '=', 'stores.productid')->get();


		$getproduct = DB::table('products')->get();


		return view('getalluser')->with(['readuser' => $getuser, 'readstore' => $getstore, 'readproduct' => $getproduct]);
	}

	public function readstore($id){

		$storedetails = DB::table('stores')->join('products', 'products.pid', '=', 'stores.productid')->where('stid', $id)->first();
		$getuser = DB::table('users')->select('storeid')->get();

		$store = array();


		foreach($getuser as $key){

			$key->storeid;

			$storemanager = DB::table('stores')->join('users', 'users.storeid', '=', 'stores.stid')->where('stid', $id)->get();



		}


		return view('thestore')->with(['readstore' => $storedetails, 'userstore' => $storemanager]);



	}


}