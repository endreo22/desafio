<?php

namespace App\Http\Controllers;

use App\Models\ModelAutomobiles;
use App\Models\ModelBranches;
use Illuminate\Http\Request;

class AutomobilesController extends Controller
{
    private $objAuto;
    private $objFili;

    public function __construct()
    {
        $this->objAuto = new ModelAutomobiles();
        $this->objFili = new ModelBranches();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auto = $this->objAuto->all()->sortBy('name');
        return view('automobiles.list',compact('auto'));
        //dd($this->objAuto->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branch = $this->objFili->all();
        return view('automobiles.new', compact('branch'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reg = $this->objAuto->create([
            'name' => $request->name,
            'year' => $request->year,
            'model' => $request->model,
            'color' => $request->color,
            'numberchassi' => $request->numberchassi,
            'category' => $request->category,
            'branch_id' => $request->branch_id
        ]);
        if($reg)
        {
            return back()->with('success','Automóvel adicionado com sucesso!');
            //return redirect('automobiles');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $auto = $this->objAuto->find($id);
        return view("automobiles.view", compact('auto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $auto = $this->objAuto->find($id);
        $branch = $this->objFili->all();
        return view("automobiles.new", compact('branch', 'auto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->objAuto->where(['id'=>$id])->update([
            'name' => $request->name,
            'year' => $request->year,
            'model' => $request->model,
            'color' => $request->color,
            'numberchassi' => $request->numberchassi,
            'category' => $request->category,
            'branch_id' => $request->branch_id
        ]);
        return back()->with('success','Automóvel atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = $this->objAuto->destroy($id);
        return($del) ? "SIM":"Não";
    }
}
