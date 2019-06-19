<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $tar_id
 * @property string $tar_desc
 * @property string $tar_operacao
 * @property string $tar_titulo
 * @property string $tar_ativo
 * @property string $tar_dtsis
 * @property string $tar_advalorem
 * @property string $tar_desagio
 * @property Fbortarifa[] $fbortarifas
 */
class TarifaBancaria extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dtarifa';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'tar_id';

    /**
     * @var array
     */
    protected $fillable = ['tar_desc', 'tar_operacao', 'tar_titulo', 'tar_ativo', 'tar_dtsis', 'tar_advalorem', 'tar_desagio'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fbortarifas()
    {
        return $this->hasMany('App\Fbortarifa', 'tar_id', 'tar_id');
    }
}
