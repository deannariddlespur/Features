<?php

class FeaturesController extends \BaseController {

	public function index()
	 {
	   $features = Feature::all();
  
 
return View::make('features.index', ['features' => $features]);

	 }
	 public function show($featurename)
	 {
	 
	   $feature = Feature::whereFeaturename($featurename)->first();
   return View::make('features.show', ['feature' => $feature]);
   }
   
   public function create()
   {
   return View::make('features.create');
   }
   public function store()
   { 
   return 'create the new feature, given the post data';
   }
   
 }