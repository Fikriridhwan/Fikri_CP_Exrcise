<?php 

abstract class Shape {
	protected $a,$b,$c;

	abstract protected function set_a(float $a);
	abstract protected function set_b(float $b);
	abstract protected function set_c();
	abstract protected function get_a();
	abstract protected function get_b();
	abstract protected function get_c();
	abstract public function result();
}


?>