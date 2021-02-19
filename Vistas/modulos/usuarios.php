<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
    <h1>
        Administrar Usuarios
        
      </h1>

      <ol class="breadcrumb">
        <li><a href="Inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Administar Usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
        <div class="box-header with-border">
          <button class="btn btn-primary" data-Toggle="modal" data-target="#modalAgregarUsuario">
            Agregar Usuario
          </button>
          
        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped table-responsive tablas">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Usuarios</th>
                  <th>Foto</th>
                  <th>Rol</th>
                  <th>Estado</th>
                  <th>Ultimo Login</th>
                  <th>Acciones</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Usuario Administrador</td>
                  <td>admin</td>
                  <td><img src="vistas/img/usuarios/default/default.jpeg"></td>
                  <td>Administrador</td>
                  <td><button class="btn btn-success btn-xs">Activado</button></td>
                  <td>2017-12-11 12:05:32</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-warning"><i class="fa fa-pencil"></i> </button>
                      <button class="btn btn-danger"><i class="fa fa-times"></i> </button>
                    </div>
                  </td>
                </tr>


                <tr>
                  <td>1</td>
                  <td>Usuario Administrador</td>
                  <td>admin</td>
                  <td><img src="vistas/img/usuarios/default/default.jpeg"></td>
                  <td>Administrador</td>
                  <td><button class="btn btn-danger btn-xs">Desactivado</button></td>
                  <td>2017-12-11 12:05:32</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-warning"><i class="fa fa-pencil"></i> </button>
                      <button class="btn btn-danger"><i class="fa fa-times"></i> </button>
                    </div>
                  </td>
                </tr>
              
              </tbody>
            </table>
        </div>
        
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>


  <!-- /MODAL AGREGAR USUARIOS -->

<!-- The Modal -->
<div class="modal fade" id="modalAgregarUsuario" role="dialog">
  
  <div class="modal-dialog">
   
    <div class="modal-content">
    <form action="" role="form" method="post" enctype="multipart/form-darta">
        <!-- Modal Header -->
        <div class="modal-header" style="background:#3c8dbc; color:white">
          <h4 class="modal-title">Agregar Usuario</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <div class="box-body">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar Nombre" required>
                </div>
              </div>
            <!--Nuevo USUARIO-->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-key"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar Usuario" required>
                </div>
              </div>
            <!--NUEVA CONTRASEÑA-->
            <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar Contraseña" required>
                </div>
              </div>
            <!--ENTRADA PERFIL-->
            <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <select class="form-control input-lg"name="nuevoPerfil" id="">
                    <option value="">Seleccionar Rol</option>
                      <option value="Administrador">Administrador</option>
                      <option value="Especial">Especial</option>
                      <option value="Vendedor">Vendedor</option>
                  </select>
                </div>
              </div>

            <!--SUBIR FOTO-->
            <div class="form-group">
                <div class="form-group">
                    <div class="panel">SUBIR FOTO</div>
                    <input type="file" id="nuevaFoto" name="nuevaFoto">
                    <p class="help-block">Peso Maximo de la foto 200 MB</p>
                    <img src="Vistas/img/usuarios/default/default.jpeg" class="img-thumbnail" width="100px" alt="">
                </div>


            </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-defaut pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar Usuario</button>
        </div>
      </form>
    </div>
  </div>
</div>