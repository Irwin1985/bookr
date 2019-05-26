<?php
	namespace App\Http\Controllers;
	/**
	* Class BookController
	* @package App\Http\Controllers
	*/
	class BooksController {
		/**
		* GET /books
		* @return array
		*/	
		public function index(){
			return 
			[
				['title' => 'War of the Worlds'],
				['title' => 'A Wrinkle in Time']
			];
		}	
	}	
?>