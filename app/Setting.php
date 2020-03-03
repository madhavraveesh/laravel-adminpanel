<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['seo_title','seo_keyword','seo_description','company_contact','company_address','from_name','from_email','facebook','linkedin','twitter','google','copyright_text','footer_text','terms','disclaimer'];
}
