<?php

namespace App\Http\Controllers\Deposit;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Deposit;
use App\KurangSaldo;
use App\TambahSaldo;

class DepositController extends Controller
{
    public function index()
    {
        $deposits = Deposit::all();

        return view('deposit.index', compact('deposits'));
    }

    public function create()
    {
        return view('deposit.create');
    }

    public function store(Request $request)
    {
        $deposit = Deposit::create([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'saldo' => $request->saldo,
            
        ]);
        flash()->success('Data Deposit Berhasil di tambah');
        return redirect()->back();
    }
    
    public function update(Request $request, $id)
    {
        
            $deposit = Deposit::findOrFail($id);
            
            $hitung = $deposit->saldo + $request->saldo;
            $deposit->update([
                'saldo' => $hitung,
            ]);
        

        flash()->success('Saldo berhasil di Tambah');

        return redirect(route('deposit.index'));

    }

}



