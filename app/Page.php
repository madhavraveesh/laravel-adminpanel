<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
	use SoftDeletes;
    protected $fillable = ['title','page_slug','description','cannonical_link','seo_title','seo_keyword','seo_description','created_by','updated_by','status','deleted_at'];
}
