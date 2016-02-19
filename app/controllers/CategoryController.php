<?php

class CategoryController extends BaseController {


	public function postCreate() {

		$posted = Input::all();


		$category = new Category;
		$category->name = $posted['name'];

		$category->save();

		return Redirect::back()->with('success', 'New category has been created');
	}

	

	public function getProducts($name){

		$category = Category::find($name);
		$network = Network::where('id','=',$category)->get();
		$product = Product::where('id','=',$category)->paginate(9);
		$phone = Product::where('id','=',$category)->get();
		return View::make('products.index')->with('category', $category)->with('network',$network)
		->with('product',$product)->with('phone', $phone);
	}





	public function getCategory(){

		$categorys = Category::all();
		$countrys = Country::all();
		return View::make('admin.categorys')->with('categorys',$categorys)->with('countrys', $countrys);
	}



}