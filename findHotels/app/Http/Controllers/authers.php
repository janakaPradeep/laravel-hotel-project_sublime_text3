
<?php 



 class Authers_Controller extends Base_Controller {
 	public $restful=true;
 	public $layout='layout.default';
	public function get_index(){

		//return view::make('authers.index',array('name'=>'janaka'));
		// $view=view::make('authers.index',array('name'=>$name))
		//->with('age','35');
		//$view->location='colombo';
		//$view['speciality']='PHP';
		//return $view;
		// $view=view::make('authers.index');
		 //$view->greeting='hi';
		 //$view->thing='everyone';
		 //return $view;

$view=view::make('authers.index',array('name'=>'janaka'))
		->with('age','35');
		$view->location='colombo';
		$view['specialty']=php;
		$this->layout->title='hello auther';
		$this->layout->content=$view;


	}

}
