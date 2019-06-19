<?php

namespace App\Forms;

use App\Banco;
use App\Projeto;
use Kris\LaravelFormBuilder\Form;

class BorderoForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('pro_id', 'entity', [
                'class' => Projeto::class,
                'property' => 'pro_nome',
                'label' => 'Projeto',
            ])
            ->add('bco_id', 'entity', [
                'class' => Banco::class,
                'property' => 'bco_nome',
                'label' => 'Banco',
            ])
            ->add('car_id', 'select')
            ->add('tir_id', 'select')
            ->add('url_id', 'select')
            ->add('bor_dataope', 'date')
            ->add('bor_numero', 'number')
            ->add('bor_qtd_tit', 'number')
            ->add('submit', 'submit');
    }
}
