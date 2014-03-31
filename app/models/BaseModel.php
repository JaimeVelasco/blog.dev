<?php


use Carbon\Carbon;

class BaseModel extends Eloquent {

	/**
	  *Accessor to set timezone 
	  */
	public function getCreatedAtAttribute($value) {
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago');
	}

	public function getUpdatedAtAttribute($value) {
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago');
	}
	

}