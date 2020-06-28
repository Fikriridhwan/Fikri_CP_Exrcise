<?php 

class Trapezoid extends Shape{
	 private $const = 0.5, $t;

	public function __construct(float $a,float $b,float $t){
		if ($a == $b) {
			echo "2 variable harus bernilai berbeda";
		}else{
			$this->check($a,$b,$t);
			$this->set_c();
		}
	}

	protected function set_a(float $a){
	 	$this->a = $a;
	 }
	 protected function set_b(float $b){
	 	$this->b = $b;
	 }
	 private function set_t(float $t){
	 	$this->t = $t;	
	 }
	 protected function set_c(){
	 	$this->c = $this->const * ($this->get_a() + $this->get_b()) * $this->get_t();
	 }
	 protected function get_a(){
	 	return $this->a;
	 }
	 protected function get_b(){
	 	return $this->b;
	 }
	 private function get_t(){
	 	return $this->t;
	 }
	 protected function get_c(){
	 	return $this->c;
	 }
	 public function result(){
	 	return "Hasil luas bangun datar trapesium yaitu = ".$this->get_c();
	 }
	 public function check(float $a,float $b,float $t){
	 	try{
			if ($a<=0 || $b<=0 || $t<=0) throw new Exception("Angka Harus lebih dari 0 dan positif");
			$this->set_a($a);
			$this->set_b($b);
			$this->set_t($t);
		}catch(Exception $e){
			echo "Caught exception: ".$e->getMessage()."<br>";
		}
	 }
}

?>