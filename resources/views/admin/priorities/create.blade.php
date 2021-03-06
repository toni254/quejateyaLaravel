@extends('admin.backend.layout')
@section('container')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Nueva Prioridad</h3>
  </div>
  <div class="card-body">
    <form class="" action="{{ route('admin.priorities.store')}}" method="post" name="formPriority" id="formPriority">
      <div class="form-group">
        <label for="name" class="control-label">Nombre <span class="text-danger">*</span> </label>
        <input type="text" name="name"  value="" id="name" class="form-control" placeholder="Introdusca el nombre de la Prioridad" required>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="level" class="control-label">Nivel <span class="text-danger">*</span></label>
          <input type="text" name="level"  value="" id="level" class="form-control" placeholder="Introdusca el Nivel de la prioridad (Numero Entero)" required>
        </div>
        <div class="form-group col-md-6">
          <label for="color" class="control-label">Color <span class="text-danger">*</span></label>
          <input type="text" name="color"  value="" id="color" class="form-control" placeholder="Introdusca el color de la prioridad" required>
        </div>
        <div class="form-group col-md-6">
          <label for="published" class="control-label">Publicar? <span class="text-danger">*</span></label>
          <div class="">
            <input type="radio" name="published" id="publishedTrue" value="1" checked>
            <label for="publishedTrue">Si</label>
            <input type="radio" name="published" id="publishedFalse" value="0" >
            <label for="publishedFalse">No</label>
          </div>
        </div>
      </div>
      {{ csrf_field() }} <!--genera un token para autenticar cada formulario y de esta manera nuestro formulario no sea vulnerado-->
    </form>
  </div>
  <div class="card-footer">
    <button type="button" name="btnSave" id="btnSave" class="btn btn-success">
      <i class="fa fa-save"></i>Guardar
    </button>
    <a href="{{route('admin.priorities.index')}}" id="btnCancel"class="btn btn-danger">
      <i class="fa fa-arrow-left"></i>Volver
    </a>
  </div>
</div>
@stop

@section('scripts')
 <script type="text/javascript">
   $(document).ready(function(){
     $('#btnSave').click(function(){
       //alert('Se preciono el boton guardar');
       //$('#btnCancel').text('Retornar');
       //$('#btnCancel').attr('href','#');
       //$('#btnCancel').attr('title','Volver');
       //alert($('#btnSave').text());
       $('#formPriority').submit();
     });
   });
 </script>
@stop
