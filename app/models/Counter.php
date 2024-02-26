<?php
namespace app\models;

class Counter {
	public $count;
	public function __construct() {
		if (file_exists('/../../resources/counter.txt')) {
			$count_raw = file_get_contents('/../../resources/counter.txt');
		}
		else {
			$count_raw = '{"count":0}';
		}

		# for the associative: false part, see https://www.php.net/manual/en/function.json-decode.php#126787
		# TODO: make the correction for the other uses of JSON in the program
		$this->count = json_decode($count_raw, associative: false)->count;
	}

	public function increment() {
		$this->count = $this->count + 1;
	}
	public function write() {
		$handle = fopen('/../../resources/counter.txt', mode: 'w');
		flock($handle, LOCK_EX);
		$data = json_encode($this, associative: false);
		fwrite($data);
		flock($handle, LOCK_UN);
		fclose($handle);
	}
	public function __toString() {
		return json_encode($this, associative: false);
	}
}
?>