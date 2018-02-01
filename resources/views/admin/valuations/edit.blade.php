@extends('admin.backend.layout')
@section('container')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Modificar Valoracion</h3>
  </div>
  <div class="card-body">
    <form class="" action="{{ route('admin.valuations.update', [$valuation->id])}}" method="post" name="formValuation" id="formValuation">
      <div class="form-group">
        <label for="name" class="control-label">Nombre <span class="text-danger">*</span> </label>
        <input type="text" name="name"  value="{{$valuation->name}}" id="name" class="form-control" placeholder="Introdusca el nombre de la Valoracion" required>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="position" class="control-label">Posicion <span class="text-danger">*</span></label>
          <input type="text" name="position"  value="{{$valuation->position}}" id="position" class="form-control" placeholder="Introdusca la Posision de la valoracion Valor entero" required>
        </div>
        <div class="form-group col-md-6">
          <label for="published" class="control-label">Publicar? <span class="text-danger">*</span></label>
          <div>
            <input type="radio" name="published" id="publishedTrue" value="1" <?= $valuation->published == 1 ? 'checked':''; ?>>
            <label for="publishedTrue">Si</label>
            <input type="radio" name="published" id="publishedFalse" value="0" <?= $valuation->published == 0 ? 'checked':''; ?>>
            <label for="publishedFalse">No</label>
          </div>
        </div>
      </div>
      {{ method_field('PUT')}}
      {{ csrf_field() }} <!--genera un token para autenticar cada formulario y de esta manera nuestro formulario no sea vulnerado-->
    </form>
  </div>
  <div class="card-footer">
    <button type="button" name="btnSave" id="btnSave" class="btn btn-success">
      <i class="fa fa-save"></i>Guardar
    </button>
    <a href="{{route('admin.valuations.index')}}" id="btnCancel"class="btn btn-danger">
      <i class="fa fa-arrow-left"></i>Volver
    </a>
  </div>
</div>
@stop

@section('scripts')
 <script type="text/javascript">
   $(document).ready(function(){
     $('#btnSave').click(function(){

       $('#formValuation').submit();
     });
   });
 </script>
@stop
