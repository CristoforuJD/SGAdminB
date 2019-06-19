<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $pro_id
 * @property int $usu_coord
 * @property int $usu_gestor
 * @property int $seg_id
 * @property string $pro_nome
 * @property string $pro_ativo
 * @property string $pro_logo
 * @property string $pro_endereco
 * @property string $pro_cidade
 * @property string $pro_uf
 * @property string $pro_dtsis
 * @property string $pro_data_ence
 * @property Dusuario $dusuario
 * @property Dsegmento $dsegmento
 * @property Dprousu[] $dprousus
 * @property Dusuario[] $dusuarios
 * @property Dclifor[] $dclifors
 * @property Fbordero[] $fborderos
 * @property Fbancoproj[] $fbancoprojs
 * @property Destoque[] $destoques
 * @property Dlimite[] $dlimites
 * @property Ffomento[] $ffomentos
 * @property Dplanodepara[] $dplanodeparas
 * @property FimpdfcM[] $fimpdfcMs
 * @property Dsubprojeto[] $dsubprojetos
 * @property Fdfcparme[] $fdfcparmes
 * @property Dplanocontum[] $dplanocontas
 * @property Ddeparaclifor[] $ddeparaclifors
 * @property Fimporcam[] $fimporcams
 */
class Projeto extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dprojeto';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'pro_id';

    /**
     * @var array
     */
    protected $fillable = ['usu_coord', 'usu_gestor', 'seg_id', 'pro_nome', 'pro_ativo', 'pro_logo', 'pro_endereco', 'pro_cidade', 'pro_uf', 'pro_dtsis', 'pro_data_ence'];

    /**
     * @return BelongsTo
     */
    public function dusuario()
    {
        return $this->belongsTo('App\Dusuario', 'usu_coord', 'usu_id');
    }

    /**
     * @return BelongsTo
     */
    public function dsegmento()
    {
        return $this->belongsTo('App\Dsegmento', 'seg_id', 'seg_id');
    }

    /**
     * @return HasMany
     */
    public function dprousus()
    {
        return $this->hasMany('App\Dprousu', 'pro_id', 'pro_id');
    }

    /**
     * @return HasMany
     */
    public function dusuarios()
    {
        return $this->hasMany('App\Dusuario', 'pro_default', 'pro_id');
    }

    /**
     * @return HasMany
     */
    public function dclifors()
    {
        return $this->hasMany('App\Dclifor', 'pro_id', 'pro_id');
    }

    /**
     * @return HasMany
     */
    public function fborderos()
    {
        return $this->hasMany('App\Fbordero', 'pro_id', 'pro_id');
    }

    /**
     * @return HasMany
     */
    public function fbancoprojs()
    {
        return $this->hasMany('App\Fbancoproj', 'pro_id', 'pro_id');
    }

    /**
     * @return HasMany
     */
    public function destoques()
    {
        return $this->hasMany('App\Destoque', 'pro_id', 'pro_id');
    }

    /**
     * @return HasMany
     */
    public function dlimites()
    {
        return $this->hasMany('App\Dlimite', 'pro_id', 'pro_id');
    }

    /**
     * @return HasMany
     */
    public function ffomentos()
    {
        return $this->hasMany('App\Ffomento', 'pro_id', 'pro_id');
    }

    /**
     * @return HasMany
     */
    public function dplanodeparas()
    {
        return $this->hasMany('App\Dplanodepara', 'pro_id', 'pro_id');
    }

    /**
     * @return HasMany
     */
    public function fimpdfcMs()
    {
        return $this->hasMany('App\FimpdfcM', 'pro_id', 'pro_id');
    }

    /**
     * @return HasMany
     */
    public function dsubprojetos()
    {
        return $this->hasMany('App\Dsubprojeto', 'pro_id', 'pro_id');
    }

    /**
     * @return HasMany
     */
    public function fdfcparmes()
    {
        return $this->hasMany('App\Fdfcparme', 'pro_id', 'pro_id');
    }

    /**
     * @return HasMany
     */
    public function dplanocontas()
    {
        return $this->hasMany('App\Dplanocontum', 'pro_id', 'pro_id');
    }

    /**
     * @return HasMany
     */
    public function ddeparaclifors()
    {
        return $this->hasMany('App\Ddeparaclifor', 'pro_id', 'pro_id');
    }

    /**
     * @return HasMany
     */
    public function fimporcams()
    {
        return $this->hasMany('App\Fimporcam', 'pro_id', 'pro_id');
    }
}
