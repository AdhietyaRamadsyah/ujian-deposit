@extends('layouts.app')

@section('content')
<div class='container'>
  <div class="row justify-content-center">
      <div class="col-md-6">
            <div class="card"> 
                  <div class="card-body">
                    <form action="{{route('deposit.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Masukan Nama">
                          </div>
                          <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat"class="form-control" placeholder="Masukan Alamat">
                            
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Masukkan Telepon">
                        </div>
                      <div class="form-group">
                          <label for="saldo">Saldo</label>
                          <input type="text" name="saldo" id="saldo" class="form-control" placeholder="Masukkan Jumlah">
                          </div>
                      <div>
                          <input type="submit" class="btn btn-success btn-lg" value="Simpan">

                      </div>
                      
                  </form>
              </div>
        </div>
      </div>
  </div>
</div>
@endsection