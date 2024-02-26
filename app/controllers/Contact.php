<?php
namespace app\controllers;

use stdClass;

class Contact extends \app\core\Controller {
	function index() {
		$this->view('Contact/index');
	}
	function read() {
		$records = \app\models\Message::read();
		$this->view('Contact/read', $records);
	}

	function send_msg() {
		# Vulnerable to injection
		$msg_obj = new \app\models\Message;

		$msg_obj->name = $_POST['name'];
		$msg_obj->email = $_POST['email'];
		$msg_obj->msg = $_POST['msg_content'];
		$msg_obj->IP = $_SERVER['REMOTE_ADDR'];

		$msg_obj->write();

		header('location:/Contact/read');
	}
}
?>