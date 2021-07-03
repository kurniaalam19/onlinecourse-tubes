@extends('admin.template.layout')

@section('title','ADMIN PAGE - ONLINECOURSE')


@section('content')
<div class="container-fluid">
	
    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus mr-2"></i>Tambah data</button>

<table class="table mt-2">  
 <tr>   
   <th>No.</th>
   <th>Nama</th> 
   <th>Asal</th>
   <th>Isi Testimoni</th>
   <!-- <th>Terakhir diubah</th>   -->
   <th>Opsi</th> 
 </tr>


 <tr>
  <?php $count = 0; ?>
  @foreach ($testimonis as $a)
  <?php $count++; ?>

   <th>{{$count}}</th>
   <th>{{$a->nama}}</th>     
   <th>{{$a->asal}}</th>
   <th>{{$a->isi}}</th>
   <th>
   <a href="{{"hapus/".$a->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash "></i></a>
   <a href="{{"edit/".$a->id}}" class="btn btn-primary btn-sm"><i class="fas fa-edit "></i></a>
  </tr>
  @endforeach  

</table>

</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
         <form method="post" action="{{route('admin.store')}}" enctype="multipart/form-data">
          @CSRF
             <div class="form-group">
                 <label>Nama</label>
                 <input type="text" name="nama" class="form-control">
             </div>
             <div class="form-group">
              <label>Asal</label>
                <input type="text" name="asal" class="form-control">
             </div>
             <div class="form-group">
                 <label>Isi</label>
                 <input type="text" name="isi" class="form-control">
             </div>                                     
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
         </form>
     </div>
   </div>
 </div>

</div>
</div>

@endsection



