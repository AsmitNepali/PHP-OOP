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

	class Member{
		protected $name;
		public function __construct($name){
			$this->name = $name;
		}
	}
	$team =Team::start('FOF',[
		new Member('Asmit Nepali'),
		new Member('Asmit Mizar')
	]);
	// $team->add('Asmit Nepali');
	// $team->add('Shreejan Pandit');
	// $team->add('Narayan Acharya');
	var_dump($team->member());