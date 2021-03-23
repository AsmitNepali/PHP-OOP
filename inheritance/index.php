<?php
	class Collection 
	{
		protected array $items;
		
		public function __construct(array $item)
		{
			$this->items = $item;
		}

		public function sum($key)
		{
			return array_sum(array_map(function($items) use ($key){
				return $items->$key;
			}, $this->items));
		}
	}

	class Video
	{
		public $title;
		public $length;
		public function __construct($title, $length)
		{
			$this->title = $title;
			$this->length = $length;
		}
	}

	$collection = new  Collection([
		new Video('Video', 100),
		new Video('Video2', 100),
		new Video('Video3', 100),
	]);
	
	echo($collection->sum('length'));