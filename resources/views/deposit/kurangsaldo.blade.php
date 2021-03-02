@extends('layouts.app')

@section('content')
<div class='container'>
     <div class="row justify-content-center">
         <div class="col-md-6">
                <div class="card"> 
                      <div class="card-body">
                        <form action="{{route('kurang-saldo.update', $deposit->id)}}" method="post">
                           @csrf
                           @method('PATCH')
                            <div class="from-group">
                               <label for="name">Nama </label>
                              <input type="text" name="name" id="name" value="{{$deposit->name}}"  class="form-control">
                            </div>
                            <div class="from-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat"  value="{{$deposit->alamat}}" class="form-control">
                             </div>
                          <div class="form-group">
                             <label for="telepon">Telepon</label>
                             <input type="text" name="telepon" id="telepon"  value="{{$deposit->telepon}}" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="saldo">Saldo</label>
                            <input type="text" name="saldo" id="saldo" class="form-control">
                         </div>
                          <div>
                          <button class="btn btn-outline-info btn-block">Simpan</button>
                         </div>
                     </form>
                 </div>
              <div>
         </div>
    </div>
</div>


@endsection