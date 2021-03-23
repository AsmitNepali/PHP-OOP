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
			return array_sum(array_map(fn($items) => $items->$key, $this->items));
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

	class VideoCollection extends Collection
	{
		public function length()
		{
			return $this->sum('length');
		}
	}
	
	$collection = new  VideoCollection([
		new Video('Video', 100),
		new Video('Video2', 100),
		new Video('Video3', 100),
	]);
	
	echo($collection->sum('length'));