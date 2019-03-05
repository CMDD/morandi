<template>
<div class="">
    <section class="content-header">
      <h1>
        Productos
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
              <h3 class="box-title">Crear Proyecto</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form @submit.prevent="createProject">
              <div class="box-body">
                
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" required    placeholder="Ingresar nombre del proyecto">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Area</label>
                  <input type="text" class="form-control" required    placeholder="Ingresar area del proyecto">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Lugar</label>
                  <input type="text" class="form-control" required    placeholder="Ingresar lugar del proyecto">
                </div>
                <div class="form-group col-md-6">
                  <label>Estado</label>
                  <select class="form-control" >
                    <option  value="">Seleccione...</option>
                    <option  value="">En venta</option>
                    <option  value="">Realizado</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Imagen <small id="emailHelp" class="form-text text-muted">Tamaño 899 x 567</small></label>
                  <input type="file" id="file" required ref="image" @change="image"  class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Logo <small id="emailHelp" class="form-text text-muted">Tamaño 689 x 689</small></label>
                  <input type="file"  required ref="logo" @change="logo"  class="form-control">
                </div>

                <!-- <div class="form-group col-md-6">
                  <label>Marca</label>
                  <select class="form-control"  >
                    <option value="">Seleccione la marca</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Categoria</label>
                  <select class="form-control" >
                    <option  value="">Seleccione...</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>Subcategoria</label>
                  <select class="form-control" required >
                  <option value="">Seleccione la subcategoria</option>

                  </select>
                </div>

                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Especificación Técnica</label>
                  <input type="file" id="archivo" required ref="archivo" @change="archivo" class="form-control">
                </div> -->

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default" :disabled="enviando" >
                  <span v-if="enviando">Creando...</span>
                  <span v-else>Crear proyecto</span>
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
  <div class="box box-dark">
    <div class="box-header with-border">
      <h3 class="box-title">ZONAS SOCIALES</h3>
    </div>
      <div class="box-body">
        <div class="form-group col-md-2 text-center">
          <input type="checkbox" name="" value=""> <br>
          <img style="width:50%" src="images/icon1.png" alt="">
          <p style="font-size:10px" >Lobby</p>
        </div>
        <div class="form-group col-md-2 text-center">
          <input type="checkbox" name="" value=""> <br>
          <img style="width:50%" src="images/piscina.png" alt="">
          <p style="font-size:10px" >Piscina</p>
        </div>
        <div class="form-group col-md-2 text-center">
          <input type="checkbox" name="" value=""> <br>
          <img style="width:50%" src="images/oratorio.png" alt="">
          <p style="font-size:10px" >Oratorio</p>
        </div>
        <div class="form-group col-md-2 text-center">
          <input type="checkbox" name="" value=""> <br>
          <img style="width:50%" src="images/terresa.png" alt="">
          <p style="font-size:10px" >Terraza</p>
        </div>
        <div class="form-group col-md-2 text-center">
          <input type="checkbox" name="" value=""> <br>
          <img style="width:50%" src="images/gimnasio.png" alt="">
          <p style="font-size:10px" >Gimnasio</p>
        </div>
        <div class="form-group col-md-2 text-center">
          <input type="checkbox" name="" value=""> <br>
          <img style="width:50%" src="images/oratorio.png" alt="">
          <p style="font-size:10px" >Oratorio</p>
        </div>
        <div class="form-group col-md-2 text-center">
          <input type="checkbox" name="" value=""> <br>
          <img style="width:50%" src="images/terresa.png" alt="">
          <p style="font-size:10px" >Terraza</p>
        </div>
        <div class="form-group col-md-2 text-center">
          <input type="checkbox" name="" value=""> <br>
          <img style="width:50%" src="images/gimnasio.png" alt="">
          <p style="font-size:10px" >Gimnasio</p>
        </div>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">

      </div>
  </div>

  <!-- /.box -->
</div>
<div class="col-md-5">
<form>
<!-- Horizontal Form -->
<div class="box box-dark">
<div class="box-header with-border">
<h3 class="box-title">SITIOS DE INTERÉS</h3>
</div>
<div class="box-body">



  <div class="form-group col-md-6">
    <label for="exampleInputEmail1">Video </label>
    <input type="file" id="file" required ref="file"   class="form-control">
    <small id="emailHelp" class="form-text text-muted">Tamaño 689 x 689</small>
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputEmail1">Imagen </label>
    <input type="file" id="file" required ref="file"   class="form-control">
    <small id="emailHelp" class="form-text text-muted">Tamaño 689 x 689</small>
  </div>

</div>
<!-- /.box-body -->
<div class="box-footer">

</div>
</div>
</form>
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
              area:'',
              lugar:'',
              image:'',
              logo:'',
              estado:'',
              nombre:'' 
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
          logo(event){
            this.form.logo = this.$refs.logo.files[0];
            console.log(this.form.logo);
            
          },
          createProject(){
            let fd = new FormData();
            fd.append('area',this.form.area);
            fd.append('lugar',this.form.lugar);
            fd.append('image',this.form.image);
            fd.append('logo',this.form.logo);
            fd.append('nombre',this.form.nombre);
            fd.append('estado',this.form.estado);

            axios.post('api/project/create',
                fd,{
                  headers: {
                    'Content-Type': 'multipart/form-data'
                  }
              }).then(res=>{
                console.log(res.data);
                
                this.form = {
                  area:'',
                  lugar:'',
                  image:'',
                  logo:'',
                  nombre:'',
                  estado:''
                }
              toastr.success('Proyecto creado correctamente');

            });

          }


        }
    }
</script>
