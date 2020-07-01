<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelBranches extends Model
{
    protected $table='branches';
    protected $fillable = ['name', 'sr', 'cnpj', 'address', 'district', 'number', 'city', 'state'];

    public function relAutomobiles()
    {
        return $this->hasMany('App\Models\ModelAutomobiles', 'branch_id');
    }
}
