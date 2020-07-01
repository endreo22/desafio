<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelAutomobiles extends Model
{
    protected $table = 'automobiles';
    protected $fillable = ['name', 'year', 'model', 'color', 'numberchassi', 'category', 'branch_id'];

    public function relBranches()
    {
        return $this->hasOne('App\Models\ModelBranches',  'id', 'branch_id');
    }
}
