<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $tir_id
 * @property string $tir_nome
 * @property string $tir_ativo
 * @property string $tir_dtsis
 * @property Fbordero[] $fborderos
 */
class TipoRecebivel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dtiporecebivel';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'tir_id';

    /**
     * @var array
     */
    protected $fillable = ['tir_nome', 'tir_ativo', 'tir_dtsis'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fborderos()
    {
        return $this->hasMany('App\Fbordero', 'tir_id', 'tir_id');
    }
}
