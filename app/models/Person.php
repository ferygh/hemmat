<?php

class Person extends \Eloquent {
	protected $fillable = [];
	protected $table = 'persons';

	public function insurance(){
		return $this->belongsTo('Insurance');
	}

	public function income(){
		return $this->belongsTo('Income');
	}

	public function aid(){
		return $this->belongsTo('Aid');
	}

	public function state()
	{
		return $this->belongsTo('State');
	}
}
?>