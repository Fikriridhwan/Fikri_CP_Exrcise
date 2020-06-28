<?php 

class Rhombus extends Shape{
	 private $const = 0.5;

	public function __construct(float $a,float $b){
		if ($a == $b) {
			echo "2 variable harus bernilai berbeda";
		}else{
			$this->check($a,$b);
			$this->set_c();
		}
	}

	protected function set_a(float $a){
	 	$this->a = $a;
	 }
	 protected function set_b(float $b){
	 	$this->b = $b;
	 }
	 protected function set_c(){
	 	$this->c = $this->const * $this->get_a() * $this->get_b();
	 }
	 protected function get_a(){
	 	return $this->a;
	 }
	 protected function get_b(){
	 	return $this->b;
	 }
	 protected function get_c(){
	 	return $this->c;
	 }
	 public function result(){
	 	return "Hasil luas bangun datar belah ketupat yaitu = ".$this->get_c();
	 }
	 public function check(float $a,float $b){
	 	try{
			if ($a<=0 || $b<=0) throw new Exception("Angka Harus lebih dari 0 dan positif");
			$this->set_a($a);
			$this->set_b($b);
		}catch(Exception $e){
			echo "Caught exception: ".$e->getMessage()."<br>";
		}
	 }
}

?>