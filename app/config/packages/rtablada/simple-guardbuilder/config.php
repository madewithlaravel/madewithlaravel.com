<?php

return array(
  /*
	|--------------------------------------------------------------------------
	| Pipelines
	|--------------------------------------------------------------------------
	|
	| In this configuration, you will specify your asset pipelines,
	| For each pipeline you can specify what files you want included in
	| your final minified production file
	|
	*/
	'pipelines' => array(
		'application' => array(
			'styles' => array(
				''
			),
			'scripts' => array(
				''
			)
		),
	),

	/*
	|--------------------------------------------------------------------------
	| The Path To Your Assets Directory
	|--------------------------------------------------------------------------
	|
	| Here, you'll specify where you want your assets directory to go.
	| This will be the base directory, where sass, less, and coffee directories
	| will be inserted.
	|
	*/
	'assets_path' => 'app/assets',

	/*
	|--------------------------------------------------------------------------
	| The Path To Your Coffeescript Assets
	|--------------------------------------------------------------------------
	|
	| This is an optional config in case you don't store your .coffee files
	| in $asset_path . '/coffee/'
	|
	*/
	// 'coffee_assets_path' => 'app/assets/coffee',

	/*
	|--------------------------------------------------------------------------
	| The Path To Your Less Assets
	|--------------------------------------------------------------------------
	|
	| This is an optional config in case you don't store your .less files
	| in $asset_path . '/less/'
	|
	*/
	// 'less_assets_path' => 'app/assets/less',

	/*
	|--------------------------------------------------------------------------
	| Your Compiled Assets Path
	|--------------------------------------------------------------------------
	|
	| This is the folder where your assets will be compiled to.
	| This is where all of your assets will compile to and should not be used
	| for minified production code.
	|
	*/
	'compile_dir' => 'public/src',

	/*
	|--------------------------------------------------------------------------
	| Your Compiled CSS Path
	|--------------------------------------------------------------------------
	|
	| This is an optional cofig in case you don't want your compiled CSS files
	| in $compile_dir . '/css/'
	|
	*/
	// 'css_compile_dir' => 'public/src/css',

	/*
	|--------------------------------------------------------------------------
	| Your Compiled JS Path
	|--------------------------------------------------------------------------
	|
	| This is an optional cofig in case you don't want your compiled JS files
	| in $compile_dir . '/js/'
	|
	*/
	// 'js_compile_dir' => 'public/src/js',

	/*
	|--------------------------------------------------------------------------
	| Your Production Folder
	|--------------------------------------------------------------------------
	|
	| This folder is the location where your minified and concatinated production
	| files will be placed
	|
	*/
	'production_dir' => 'public/assets',

	/*
	|--------------------------------------------------------------------------
	| Your Production CSS Folder
	|--------------------------------------------------------------------------
	|
	| This optional config specifies the folder where your minified and
	| concatinated CSS production files will be placed
	|
	*/
	'css_production_dir' => 'public/assets/css',

	/*
	|--------------------------------------------------------------------------
	| Your Production JS Folder
	|--------------------------------------------------------------------------
	|
	| This optional config specifies the folder where your minified and
	| concatinated JS production files will be placed
	|
	*/
	'js_production_dir' => 'public/assets/js',

);
