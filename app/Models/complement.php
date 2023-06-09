<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complement extends Model
{
    use HasFactory;
    protected $table = 'complements';
    protected $primaryKey = 'idcomplement';
    protected $fillable =['nom', 'image', 'prix', 'description', 'marque'];

    public function Avis(){
        return $this->hasMany(avi::class);
    }
}
