<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Clinica extends Model
{
	use Searchable;
    protected $table = 'clinicas';
}
