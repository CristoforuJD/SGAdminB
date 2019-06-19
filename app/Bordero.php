<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $bor_id
 * @property int $pro_id
 * @property int $bco_id
 * @property int $car_id
 * @property int $tir_id
 * @property int $url_id
 * @property string $bor_dataope
 * @property string $bor_numero
 * @property int $bor_qtd_tit
 * @property float $bor_vlr_bruto
 * @property int $bor_qt_recusada
 * @property float $bor_vlr_bruto_recusado
 * @property float $bor_vlr_bruto_final
 * @property integer $bor_qtd_final
 * @property float $bor_pz_med_emp
 * @property float $bor_pz_med_bco
 * @property float $bor_float_calc
 * @property float $bor_float_acordado
 * @property float $bor_vlr_liquido
 * @property string $bor_dtsis
 * @property float $bor_float_dif
 * @property float $bor_vlr_tot_tarifas
 * @property float $bor_chk_iof
 * @property float $bor_taxa_acordado
 * @property float $bor_vlr_liq_correto
 * @property float $bor_chk_liq
 * @property string $bor_status
 * @property float $bor_recompra
 * @property float $bor_per_recompra
 * @property float $bor_retencao
 * @property float $bor_per_retencao
 * @property float $bor_fomento
 * @property float $bor_per_fomento
 * @property float $bor_liq_recebido
 * @property string $bor_dt_cred
 * @property string $bor_contato
 * @property float $bor_tx_banco
 * @property float $bor_tx_empresa
 * @property string $bor_obs
 * @property float $bor_mutl_pm
 * @property float $bor_mutl_pm_float
 * @property float $bor_cst_sem_iof
 * @property float $bor_cst_com_iof
 * @property string $bor_dtupdate
 * @property Dprojeto $dprojeto
 * @property Dbanco $dbanco
 * @property Dcarteira $dcarteira
 * @property Dtiporecebivel $dtiporecebivel
 * @property Durecliq $durecliq
 * @property Fbortarifa[] $fbortarifas
 * @property Fbortitulo[] $fbortitulos
 */
class Bordero extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'fbordero';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'bor_id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['pro_id', 'bco_id', 'car_id', 'tir_id', 'url_id', 'bor_dataope', 'bor_numero', 'bor_qtd_tit', 'bor_vlr_bruto', 'bor_qt_recusada', 'bor_vlr_bruto_recusado', 'bor_vlr_bruto_final', 'bor_qtd_final', 'bor_pz_med_emp', 'bor_pz_med_bco', 'bor_float_calc', 'bor_float_acordado', 'bor_vlr_liquido', 'bor_dtsis', 'bor_float_dif', 'bor_vlr_tot_tarifas', 'bor_chk_iof', 'bor_taxa_acordado', 'bor_vlr_liq_correto', 'bor_chk_liq', 'bor_status', 'bor_recompra', 'bor_per_recompra', 'bor_retencao', 'bor_per_retencao', 'bor_fomento', 'bor_per_fomento', 'bor_liq_recebido', 'bor_dt_cred', 'bor_contato', 'bor_tx_banco', 'bor_tx_empresa', 'bor_obs', 'bor_mutl_pm', 'bor_mutl_pm_float', 'bor_cst_sem_iof', 'bor_cst_com_iof', 'bor_dtupdate'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dprojeto()
    {
        return $this->belongsTo('App\Projeto', 'pro_id', 'pro_id');

    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dbanco()
    {
//        return $this->belongsTo('App\Dbanco', 'bco_id', 'bco_id');
        return $this->belongsTo('App\Banco', 'bco_id', 'bco_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dcarteira()
    {
        return $this->belongsTo('App\Dcarteira', 'car_id', 'car_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dtiporecebivel()
    {
        return $this->belongsTo('App\Dtiporecebivel', 'tir_id', 'tir_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function durecliq()
    {
        return $this->belongsTo('App\Durecliq', 'url_id', 'url_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fbortarifas()
    {
        return $this->hasMany('App\Fbortarifa', 'bor_id', 'bor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fbortitulos()
    {
        return $this->hasMany('App\Fbortitulo', 'bor_id', 'bor_id');
    }
}
