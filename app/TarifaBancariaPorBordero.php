<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $tab_id
 * @property int $bor_id
 * @property int $tar_id
 * @property float $tab_valor
 * @property float $tab_perc
 * @property string $tab_dtsis
 * @property Fbordero $fbordero
 * @property Dtarifa $dtarifa
 */
class TarifaBancariaPorBordero extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'fbortarifa';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'tab_id';

    /**
     * @var array
     */
    protected $fillable = ['bor_id', 'tar_id', 'tab_valor', 'tab_perc', 'tab_dtsis'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fbordero()
    {
        return $this->belongsTo('App\Fbordero', 'bor_id', 'bor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dtarifa()
    {
        return $this->belongsTo('App\Dtarifa', 'tar_id', 'tar_id');
    }
}
