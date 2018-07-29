<?php
	class Contact {
		// these member are public
		var $first_name = "";
		var $last_name = "";
		var $emails = array();

		public $phone_number = "";
		public $address_pin = "";
		public $address_country = "";
		public $address_state = "";
		public $address_post = "";
		public $address_ps = "";

		function init() {
			$this->first_name = "moon";
			$this->last_name = "light";
			array_push($this->emails,"ahmad.sk98@gmail.com");
		}
		public function setAddress($pin, $post, $ps, $state, $country) {
			$this->address_pin = $pin;
			$this->address_post = $post;
			$this->address_ps = $ps;
			$this->address_state = $state;
			$this->address_country = $country;
		}
		function show() {
			$this->init(); // function call inside member method
			print "first name : ".$this->first_name."\n";
			print "last name  : ".$this->last_name."\n";
			print "emails : ";
			foreach($this->emails as $mail):
				print"$mail\t";
			endforeach;
				print "\n";

			print "state : $this->address_state.\n";
			print "country : $this->address_country.\n";
			print "post : $this->address_post.\n";
			print "ps : $this->address_ps.\n";
			print "pin : $this->address_pin.\n";
		}

		// private member
		private $_name = "";
		private $_phone;
	};

	$me = new Contact();
	$me->setAddress("713373","pariharpur","jamuria","west bengal","india");
	$me->show();
	// accessing public member
	print "firstname : $me->first_name.\n";


	// accessing private member, it will generate error!
	//print "Private Name : $me->_name\n";
?>
