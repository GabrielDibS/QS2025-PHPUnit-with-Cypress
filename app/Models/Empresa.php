<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'cnpj', 'email_contato'];

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
    
    public function gerentes()
    {
        return $this->belongsToMany(Gerente::class);
    }
}
