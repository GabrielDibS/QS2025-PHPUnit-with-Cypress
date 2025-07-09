<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gerente extends Model
{
    protected $fillable = ['nome', 'email'];

    public function empresas()
    {
        return $this->belongsToMany(Empresa::class);
    }
}
