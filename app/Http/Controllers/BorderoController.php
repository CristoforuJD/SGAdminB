<?php

namespace App\Http\Controllers;

use App\Bordero;
use App\Forms\BorderoForm;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;

/**
 * Class BorderoController
 * @package App\Http\Controllers
 */
class BorderoController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $borderos = Bordero::with(['dbanco', 'dprojeto'])
            ->orderBy('bor_dataope', 'desc')
            ->paginate(2);

        return view('admin.bordero.index', compact("borderos"));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(BorderoForm::class, [
            'method' => 'POST',
            'url' => route('bordero.store')
        ]);

        return view('admin.bordero.create', compact('form'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        try {
            Bordero::create($request->all());

            return redirect()->route('bordero.index')->with('message', 'Bordero Criado Com Sucesso!');
        } catch (\Exception $e) {
            //dd($e);
            return redirect()->back()->with('Erro !');
        }
    }

    /**
     * @param FormBuilder $formBuilder
     * @param Bordero $bordero
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(FormBuilder $formBuilder, Bordero $bordero)
    {
        $form = $formBuilder->create(BorderoForm::class, [
            'method' => 'POST',
            'url' => route('bordero.store'),
            'model' => $bordero
        ]);

        return view('admin.bordero.edit',compact('form'));
    }

    /**
     * @param Bordero $request
     * @param Bordero $bordero
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Bordero $bordero)
    {
        try {
            $bordero->update($request->all);

            return redirect()->route('bordero.index')->with('message', 'Bordero Atualizado com Sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('Erro !');
        }
    }

    /**
     * @param Bordero $bordero
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Bordero $bordero)
    {
        try {
            $bordero->delete();

            return redirect()->route('bordero.index')->with('alert-success','Bordero Deletado Com Sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('Erro !');
        }
    }
}
