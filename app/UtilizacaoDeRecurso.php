<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $url_id
 * @property string $url_nome
 * @property string $url_ativo
 * @property string $url_dtsis
 * @property Fbordero[] $fborderos
 */
class UtilizacaoDeRecurso extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'durecliq';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'url_id';

    /**
     * @var array
     */
    protected $fillable = ['url_nome', 'url_ativo', 'url_dtsis'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fborderos()
    {
        return $this->hasMany('App\Fbordero', 'url_id', 'url_id');
    }
}
