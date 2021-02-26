
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<link rel="stylesheet" type="text/css" href="css/crud.css">



<html>
<div class="col-lg-12">
<div class="tabla">
<center><h1>CRUD DATOS</h1></center>
<table id="myTable"  class="table table-striped table-bordered" style="width:100%"   >
 <thead>
  <tr>
    <th>ID</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Telefono</th>
    <th>Email</th>
    <th>Direccion</th>
    <th>Opcion</th>
  </tr>
</thead>
<tbody>

</tbody> 
</table>
<br>



<button type="button" id="Agregar" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 Agregar
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registra una nueva persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="Controllers/ControllerCrud.php" method="POST">
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="Cedula">Cedula</label>
              <Input type="number" class="form-control" id="Cedula" name="Cedula"/>
            </div>

            <div class="form-group">
              <label for="Nombres">Nombres</label>
              <Input type="text" class="form-control" id="Nombres" name="Nombres"/>
            </div>

           <div class="form-group">
              <label for="Apellidos">Apellidos</label>
              <Input type="text" class="form-control" id="Apellidos" name="Apellidos"/>
            </div>

           <div class="form-group">
              <label for="Telefono">Telefono</label>
              <Input type="text" class="form-control" id="Telefono"  name="Telefono"/>
            </div>

           <div class="form-group">
              <label for="Email">Email</label>
              <Input type="Email" class="form-control" id="Email" name="Email"/>
            </div>

           <div class="form-group">
              <label for="Direccion">Direccion</label>
              <Input type="text" class="form-control"  name="Direccion" id="Direccion"/>
            </div>
            <input style="display:none" id="Estado"  name=""  value="">

         <button type="submit" class="btn btn-primary">Guardar</button>
      </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

</div>

</div>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script type="text/javascript" charset="utf8" src="js/crud.js"></script>
   <?php

if (isset($_GET['A'])) {
  echo '<script>alert("se a agregado correctamente");</script>';
}elseif (isset($_GET['E'])) {
  echo '<script>alert("se a modificado correctamente");</script>';
}elseif (isset($_GET['D'])) {
  echo '<script>alert("se a borrado correctamente");</script>';
}
 

   ?>
  </html>

