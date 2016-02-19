<?php

class Order extends Eloquent {

	protected $table = 'orders';

	protected $hidden   = array('id');
    protected $appends = array('token');

	public function networks() {
		return $this->belongdTo('Network');
	}

	public function payments() {
		return $this->belongdTo('Payment');
	}

	public function automateDelete($order) {
		$id = Order::find($order)->delete();
	}

	public function getTokenAttribute()
    {
        return Hashids::encrypt($this->id);
    }
}