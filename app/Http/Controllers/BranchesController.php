<?php

namespace App\Http\Controllers;

use App\Models\ModelBranches;
use Illuminate\Http\Request;

class BranchesController extends Controller
{
    private $objFili;

    public function __construct()
    {
        $this->objFili = new ModelBranches();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fili = $this->objFili->all()->sortBy('name');
        return view('branches.list',compact('fili'));
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
        return view('branches.new', compact('branch'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reg = $this->objFili->create([
            'name' => $request->name,
            'sr' => $request->sr,
            'cnpj' => $request->cnpj,
            'address' => $request->address,
            'district' => $request->district,
            'number' => $request->number,
            'city' => $request->city,
            'state' => $request->state
        ]);
        if($reg)
        {
            return back()->with('success','Filial adicionada com sucesso!');
            //return redirect('branches');
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
        $fili = $this->objFili->find($id);
        return view("branches.view", compact('fili'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fili = $this->objFili->find($id);
        return view("branches.new", compact('fili'));
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
        $this->objFili->where(['id'=>$id])->update([
            'name' => $request->name,
            'sr' => $request->sr,
            'cnpj' => $request->cnpj,
            'address' => $request->address,
            'district' => $request->district,
            'number' => $request->number,
            'city' => $request->city,
            'state' => $request->state
        ]);
        return back()->with('success','Filial atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = $this->objFili->destroy($id);
        return($del) ? "SIM":"Não";
    }
}
