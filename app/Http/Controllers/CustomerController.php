<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;

class CustomerController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {

		$customers = Customer::all();
		return View::make('customers', ['result' => $customers]);

		// return response()->json(['result' => $customers]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request) {
		$customer = Customer::where('email =', $request->input('email'));

		if (Customer::where('email', '=', $request->input('email'))->exists()) {
			return response()->json(['result' => 'Email already present!']);
		} else {
			$customer = new Customer();
			$customer->name = $request->input('name');
			$customer->email = $request->input('email');
			$customer->save();
			return response()->json(['name' => $customer->name, 'email' => $customer->email]);
		}

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		//
	}
}
