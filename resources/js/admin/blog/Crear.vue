<template>
<div class="">
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
        <router-link to="/suscripcion/lista">
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
    <form @submit.prevent="crearProject">
      <div class="row">
        <!-- left column -->
        <div class="col-md-7">

          <div class="box box-dark">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Tema</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form @submit.prevent="createProject">
              <div class="box-body">
                
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Titulo</label>
                  <input type="text" class="form-control" required    placeholder="Ingresar nombre del proyecto">
                </div>
                
                <div class="form-group col-md-6">
                  <label>Estado</label>
                  <select class="form-control" >
                    <option  value="">Seleccione...</option>
                    <option  value="">Activo</option>
                    <option  value="">Desactivo</option>
                  </select>
                </div>

                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Descripcion</label>
                  <textarea name="" class="form-control"  id="" cols="30" rows="10"></textarea>
                
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Imagen <small id="emailHelp" class="form-text text-muted">Tamaño 899 x 567</small></label>
                  <input type="file" id="file" required ref="image" @change="image"  class="form-control">
                </div>
             

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default" :disabled="enviando" >
                  <span v-if="enviando">Creando...</span>
                  <span v-else>Crear</span>
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
</div>
</template>

<script>

import toastr from 'toastr'


toastr.options ={
  "closeButton": true,
  "timeOut": "10000",
  // "progressBar": true,
};
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
          return{
            enviando:false,
            form:{
              titulo:'',
              image:'',
              estado:'',
            }

          }
        },
        created(){
         

        },
        methods:{
          image(event){
            this.form.image = this.$refs.image.files[0];
            console.log(this.form.image);
            
          },
          createProject(){
            let fd = new FormData();

            fd.append('image',this.form.image);

            fd.append('titulo',this.form.nombre);
            fd.append('estado',this.form.estado);

            axios.post('api/project/create',
                fd,{
                  headers: {
                    'Content-Type': 'multipart/form-data'
                  }
              }).then(res=>{
                console.log(res.data);
                this.form = {
                  image:'',
                  titulo:'',
                  estado:''
                }
              toastr.success('Proyecto creado correctamente');

            });

          }


        }
    }
</script>
