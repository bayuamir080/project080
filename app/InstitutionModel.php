<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstitutionModel extends Model
{
    protected $table = "institutions";
    protected $fillable = ["name", "description", "created_at", "updated_at", "deleted_at"];
}
