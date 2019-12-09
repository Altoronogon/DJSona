<?php
namespace Mallik;

class Log extends \core\LogAbstract implements \core\LogInterface {
	public static function log($str) {
		self::Instance()->log[] = $str;
	}

	public function _write() {
		$d = new \DateTime();
		$filename = "project/log/".$d->format('d.m.Y\_H.i.s.u');
		$file = fopen($filename.".log","w+");
		foreach($this->log as $val) {
			echo $val . "\n";
			fwrite($file , $val . "\n");
		}
		fclose($file);
	}
	
	public static function write() {
		static::Instance()->_write();
	}
}
?>