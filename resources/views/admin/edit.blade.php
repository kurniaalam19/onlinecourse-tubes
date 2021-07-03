
@extends('admin.template.layout')

@section('title','edit')


@section('content')


<div class="container-fluid">
    <form method="post" action="{{route('admin.update',[$testimonis->id])}}" enctype="multipart/form-data">
        @CSRF
        @method('put')
           <div class="form-group">
               <label>Nama</label>
               <input type="text" name="nama" class="form-control" value="{{$testimonis->nama}}">
           </div>
           <div class="form-group">
               <label>Asal</label>
               <input type="text" name="asal" class="form-control" value="{{$testimonis->asal}}">
           </div>
           <div class="form-group">
               <label>Isi</label>
               <input type="text" name="isi" class="form-control" value="{{$testimonis->isi}}">
           </div>                                       
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
       </form>
</div>



@endsection



