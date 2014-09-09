<?php

class FeaturesController extends \BaseController {

	public function index()
	 {
	   $features = Feature::all();
  
 
return View::make('features.index', ['features' => $features]);

	 }
	 public function show($name)
	 {
	 
	   $feature = Feature::whereName($name)->first();
   return View::make('features.show', ['feature' => $feature]);
   }
   
   public function create()
   {
   return View::make('features.create');
   }
   public function store()
   { 
      $feature = new Feature;
      $feature->name = Input::get('name');
      $feature->save();
   
   return Redirect::to('/features');
   return Redirect::route('features.index');
   }
   
 }