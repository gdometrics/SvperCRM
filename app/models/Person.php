<?php

class Person extends \Eloquent {
	protected $fillable = [
        'first_name',
        'last_name',
        'organization_id',
        'address',
        'address2',
        'city',
        'state',
        'zip',
        'office_phone',
        'mobile_phone',
        'email',
        'comments',
        'is_sales_person',
        'is_account_manager',
        'is_designer',
        'is_developer',
        'is_marketing_strategiest'
    ];

    public function organization()
    {

        return $this->belongsTo('Organization');
    }

    public function getOrganizationAttribute()
    {
        return Organization::find($this->organization_id);
    }

    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

}