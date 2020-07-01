<?php

namespace App\Http\Controllers;

use App\Models\ModelBranches;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    private $objUser;
    private $objFili;

    public function __construct()
    {
        $this->objUser = new User();
        $this->objFili = new ModelBranches();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = $this->objUser->all()->sortBy('name');
        return view('users.list',compact('user'));
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
        return view('users.new', compact('branch'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reg = $this->objUser->create([
            'name' => $request->name,
            'birth_date' => $request->birth_date,
            'email' => $request->email,
            'cpf' => $request->cpf,
            'genre' => $request->genre,
            'address' => $request->address,
            'district' => $request->district,
            'number' => $request->number,
            'city' => $request->city,
            'state' => $request->state,
            'role' => $request->role,
            'salary' => $request->salary,
            'status' => $request->status,
            'branch_id' => $request->branch_id,
            'password' => Hash::make($request->password)
        ]);
        if($reg)
        {
            return back()->with('success','Funcionário adicionado com sucesso!');
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
        $user = $this->objUser->find($id);
        return view('users.view',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->objUser->find($id);
        $branch = $this->objFili->all();
        return view("users.new", compact('user', 'branch'));
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
        $this->objUser->where(['id'=>$id])->update([
            'name' => $request->name,
            'birth_date' => $request->birth_date,
            'email' => $request->email,
            'cpf' => $request->cpf,
            'genre' => $request->genre,
            'address' => $request->address,
            'district' => $request->district,
            'number' => $request->number,
            'city' => $request->city,
            'state' => $request->state,
            'role' => $request->role,
            'salary' => $request->salary,
            'status' => $request->status,
            'branch_id' => $request->branch_id,
            'password' => $request->password
        ]);
        return back()->with('success','Funcionário atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = $this->objUser->destroy($id);
        return($del) ? "SIM":"Não";
    }
}
