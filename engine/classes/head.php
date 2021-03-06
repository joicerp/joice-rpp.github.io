<?php
abstract class hf {	
	protected function get_header() {
		include "app/view/common/header.php";
	}
	protected function get_footer() {
		include "app/view/common/footer.php";
	}
	public function get_body() {    
		$this->get_header();
		$this->get_content(); 
		$this->get_footer();    
	}
	abstract function get_content();
}
abstract class js {	
	protected function get_footer() {
		include "app/view/common/footer.php";
	}	
	public function get_body() {     
		$this->get_content();
		$this->get_footer(); 
	}
	abstract function get_content();
}
?>