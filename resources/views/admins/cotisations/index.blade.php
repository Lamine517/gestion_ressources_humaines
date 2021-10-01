@extends('layouts.layout')

@section('title')
  SIRH

@endsection
    <!-- <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
@section('header')



@endsection

@section('content')

<section class="content-header">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
          Ajouter
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ajouter une nouvelle cotisation</h5>
            
                </button>
            </div>
            <div class="modal-body">
                <!-- le formulaire -->
                <div class="col">
                    <label for="">Libelle</label>
                    <input type="type" name="" id="" class="form-control form-control">
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer</button>
            </div>
            </div>
        </div>
        </div>
        <!--  -->
     <ol class="breadcrumb">
       <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Gestion des cotisations </a></li>
       <li class="active"><a href="{{ url('/admin') }}"> cotisations</a></li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">
   
     <div class="row">
       <div class="col-xs-12 ">
         <div class="box box-primary">
         <div class="box-header with-border">
              <h3 class="box-title">Liste des cotisations</h3>
              
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <!-- <h3><strong>Laravel 8 Datatable Example</strong></h3> -->
                            </div>
                        </div>
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th width="50">No</th>
                                    <th>Libelle</th>
                                    <th width="100px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            </div>
           <!-- /.box-header -->
   
         </div>
         <!-- /.box -->

       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
   </section>

@endsection
<script type="text/javascript">
  $(function () {
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.cotisations') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
  });
</script>

@section('footer')


@endsection
