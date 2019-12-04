class RudikovakotovaException extends RuntimeException {
}
class A {
	protected a;
	protected b;
	protected x;
	function __construct($a, $b){
		$this->a=$a;
		$this->b=$b;
	}
	function ur($a, $b){
		if ($a != 0) {
			$x = -1*$b/$a;
			$this->x = $x;
			return $x;
		}
		throw new RudikovakotovaException ("нет решения");	
	}
}
class B extends A{
	protected c;
	protected x2;
	function __construct($a, $b, $c){
		parent::__construct($a, $b);
		$this->c=$c;
	}
	protected function nv(($a, $b, $c) {
		$nv = $b*$b - 4*$a*$c;
		return $nv;
	}
	function ur2(($a, $b, $c) {
		if ($a==0) {
		$this->ur($a,$b);
		}
		$nv = $this->nv();
		if ($nv >0){
			$x = (-1*$b + sqrt($nv))/(2*$a);
			$x2 = (-1*$b - sqrt($nv))/(2*$a);
			$this->x = $x;
			$this->x2 = $x2;
			return array($x, $x2);
		} else ($nv = 0) {
			$x = (-1*$b)/(2*$a);
			$this->x = $x;
			return array($x);
		}
		throw new RudikovakotovaException ("нет решения");
	}
}























