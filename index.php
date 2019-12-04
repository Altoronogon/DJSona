<?php
class A{
}
class B extends A{
	public a;
	function __construct($a){
		$this->a = $a;
	}
}
class C extends B{
	public b;
	public c;
	function __construct($a, $b,$c){
		parent::__construct($a);
		$this->b=$b;
		$this->c=$c;
	}
}
$b= new A();
$a= new C(new A(), new B(new B($b)), $b);
?>