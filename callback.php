<?php
class Callback {
	public string $sql;
	public string $value;
	
		public function __construct(){
			$this->sql = "select * from test";
		}
		public function transition_query(callable $callback): void {
			try {
				$callback($this);
			}catch(Exception $err){
				echo "";
			}
		}
}
$call = new Callback;
$call->transition_query(function($isClass){
	
});
