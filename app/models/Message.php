<?php
namespace app\models;

class Message {
	public $name;
	public $email;
	public $msg;
	public $IP;

	public function __toString() {
		return json_encode($this);
	}

	public function __construct($obj = null) {
		if ($obj == null) {
			return;
		}

		else {
			$this->name = $obj->name;
			$this->email = $obj->email;
			$this->msg = $obj->msg;
			$this->IP = $obj->IP;
		}
	}

	public static function read() {

		if (file_exists(__DIR__ . '/../../resources/messages.txt')) {
			$records = file(__DIR__ . '/../../resources/messages.txt', flags: FILE_IGNORE_NEW_LINES);

			foreach ($records as $key => $value) {
				$arr = json_decode($value);
				$msg_obj = new \app\models\Message($arr);
				$records[$key] = $msg_obj;
			}
			return $records;
		}

		else {
			return [];
		}
	}

	public function write() {
		$handle = fopen(__DIR__ . '/../../resources/messages.txt', mode: 'a');
		flock($handle, LOCK_EX);
		$data = json_encode($this);
		fwrite($handle, $data . "\n");
		flock($handle, LOCK_UN);
		fclose($handle);
	}
}
?>