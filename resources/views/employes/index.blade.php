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
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ajouter une nouveau Employe</h5>
            
                </button>
            </div>
            <div class="modal-body">
                <!-- le formulaire -->
                <form action="" method="post">
                    <div class="row">
                      <h5>Etape 1</h5><hr>
                        <div class="col-6">
                            <label for="">Prenom</label>
                            <input type="text" name="" id="" class="form-control form-control-sm">
                        </div>
                        <div class="col-6">
                            <label for="">Nom</label>
                            <input type="text" name="" id="" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="">Date de Naissance</label>
                            <input type="text" name="" id="" class="form-control form-control-sm">
                        </div>
                        <div class="col-6">
                            <label for="">Lieu de Naissance</label>
                            <input type="text" name="" id="" class="form-control form-control-sm">
                        </div>
                    </div>
                    
                    <div class="row">
                      <h5>Etape 2</h5><hr>
                        <div class="col-4">
                            <label for="">Sexe</label>
                            <select name="" id="" class="form-select form-select-sm- mb-3">
                                <option value=""  selected></option>
                                <option value="">Masculin</option>
                                <option value="">Feminin</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="">Mariage</label>
                            <select name="" id="" class="form-select form-select-sm- mb-3">
                                <option value=""  selected></option>
                                <option value="">Oui</option>
                                <option value="">Non</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="">Nombre d'enfants</label>
                            <input type="number" name="" id="" class="form-control form-control-sm">
                        </div>
                    </div>
                    
                    <!-- deuxieme partie -->
                    <div class="row">
                        <h5>Etape 3</h5><hr>
                        <div class="col-3">
                            <label for="">Poste</label>
                            <input type="text" name="" id="" class="form-control form-control-sm">
                        </div>
                        <div class="col-3">
                            <label for="">Service</label>
                            <input type="text" name="" id="" class="form-control form-control-sm">
                        </div>
                        <div class="col-3">
                            <label for="">Date d'Emploi</label>
                            <input type="date" name="" id="" class="form-control form-control-sm">
                        </div>
                        <div class="col-3">
                            <label for="">Diplome</label>
                            <input type="text" name="" id="" class="form-control form-control-sm">
                        </div>
                    </div>
                    <!--  -->
                  
                    <div class="row">
                    <h5>Etape 4</h5><hr>
                        <div class="col-3">
                            <label for="">Mouvement</label>
                            <select name="" id="" class="form-select form-select-sm- mb-3">
                                <option value=""  selected>Veuillez choisir un Mouvement</option>
                                <option value="">Mouvement 1</option>
                                <option value="">Mouvement 2</option>
                                <option value="">Mouvement 3</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="">Poste</label>
                            <select name="" id="" class="form-select form-select-sm- mb-3">
                                <option value=""  selected>Veuillez choisir une Poste</option>
                                <option value="">Poste 1</option>
                                <option value="">Poste 2</option>
                                <option value="">Poste 3</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="">Contrat</label>
                            <select name="" id="" class="form-select form-select-sm- mb-3">
                                <option value=""  selected>Veuillez choisir un Contrat</option>
                                <option value="">Contrat 1</option>
                                <option value="">Contrat 2</option>
                                <option value="">Contrat 3</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="">Categories</label>
                            <select name="" id="" class="form-select form-select-sm- mb-3">
                                <option value=""  selected>Veuillez choisir un Categorie</option>
                                <option value="">Categorie 1</option>
                                <option value="">Categorie 2</option>
                                <option value="">Categorie 3</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="">Bulletin</label>
                            <select name="" id="" class="form-select form-select-sm- mb-3">
                                <option value=""  selected>Veuillez choisir un Bulletin</option>
                                <option value="">Bulletin 1</option>
                                <option value="">Bulletin 2</option>
                                <option value="">Bulletin 3</option>
                            </select>
                        </div>
                        
                        
                    </div>
                </form>
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
       <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Gestion des employes </a></li>
       <li class="active"><a href="{{ url('/admin') }}"> employes</a></li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">
   
     <div class="row">
       <div class="col-xs-12 ">
         <div class="box box-primary">
         <div class="box-header with-border">
              <h3 class="box-title">Liste des employes</h3>
              
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
                                    <th>Prenom</th>
                                    <th>Nom</th>
                                    <th>Poste</th>
                                    <th>Service</th>
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
        ajax: "{{ route('admin.employes') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
  });
</script>

@section('footer')


@endsection
