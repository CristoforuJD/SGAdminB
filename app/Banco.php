<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $bco_id
 * @property int $bco_codigo
 * @property string $bco_nome
 * @property string $bco_ativo
 * @property string $bco_dtsis
 * @property Fbordero[] $fborderos
 * @property Fctafunc[] $fctafuncs
 * @property Fbancoproj[] $fbancoprojs
 * @property Dlimite[] $dlimites
 */
class Banco extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dbanco';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'bco_id';

    /**
     * @var array
     */
    protected $fillable = ['bco_codigo', 'bco_nome', 'bco_ativo', 'bco_dtsis'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fborderos()
    {
        return $this->hasMany('App\Fbordero', 'bco_id', 'bco_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fctafuncs()
    {
        return $this->hasMany('App\Fctafunc', 'bco_id', 'bco_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fbancoprojs()
    {
        return $this->hasMany('App\Fbancoproj', 'bco_id', 'bco_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dlimites()
    {
        return $this->hasMany('App\Dlimite', 'bco_id', 'bco_id');
    }
}
