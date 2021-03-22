<?php
	class Team{
		protected $name;
		protected $members = [];
		public function __construct($name, $members = []){
			$this->name = $name; 
			$this->members = $members;
		}

		public static function start(...$param){
			return new static(...$param);
		}

		public function  name(){
			return $this->name;
		}

		function member(){
			return $this->members;
		}

		public function add($name){
			$this->members[] = $name; 
		}

		public function cancle(){

		}

		public function manager(){

		}
	}
	$team =Team::start('FOF',[
		'Asmit Nepali',
		'Saurav Sen'
	]);
	// $team->add('Asmit Nepali');
	// $team->add('Shreejan Pandit');
	// $team->add('Narayan Acharya');
	var_dump($team->member());