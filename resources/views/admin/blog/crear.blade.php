@extends('layouts.admin')
@section('content')
    <section class="content-header">
      <h1>
        Blog
        <small>Crear</small>
      </h1>
      <ol class="breadcrumb">
        <li>
          <router-link to="/dashboard">
            <i class="fa fa-dashboard" ></i>Dashboard
          </router-link>
        </li>
        <li>
        <router-link to="">
          <i class="fa fa-book" ></i>Proyectos
        </router-link>
        </li>
        <li class="active" ><i class="fa fa-pencil"></i>Crear</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
      <!-- Main content -->
      <section class="content">
    <form action="crear-blog" method="POST" enctype='multipart/form-data'>
      <div class="row">
        <!-- left column -->
        <div class="col-md-7">

          <div class="box box-dark">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Tema</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
            {!!csrf_field()!!}
              <div class="box-body">
                
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Titulo</label>
                  <input type="text" class="form-control" name="titulo"     placeholder="Ingresar titulo del Tema">
                </div>
                
                <div class="form-group col-md-6">
                  <label>Estado</label>
                  <select name="estado" class="form-control" >
                    <option  value="">Seleccione...</option>
                    <option  value="Activo">Activo</option>
                    <option  value="Desactivo">Desactivo</option>
                  </select>
                </div>

                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Descripcion</label>
                    <textarea id="editor1" name="descripcion" rows="10" cols="80">
                    </textarea>
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Descripcion Corta</label>
                    <textarea  name="descripcion_corta" class="form-control" rows="5" cols="80">
                    </textarea>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Imagen <small id="emailHelp" class="form-text text-muted">Tamaño 899 x 567</small></label>
                  <input type="file"  name="image" class="form-control">
                </div>
             

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default"> 
                  Crear
                </button>
              </div>
              </form>
              <!-- /.box-body -->
          </div>
        </div>
        <!--/.col (left) -->
        <!-- right column -->

        <div class="col-md-5">

  <!-- Horizontal Form -->


  <!-- /.box -->
</div>


        <!--/.col (right) -->
      </div>
    </form>
  </section>
  <!-- /.content -->
  </section>
@stop

@push('scripts')
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
@endpush