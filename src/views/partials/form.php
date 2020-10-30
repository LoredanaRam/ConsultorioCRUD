<section>

<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Solicitud de Cita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <div class="modal-body">

          <form class="form-group" >
              
              <label for="inputName">Nombre</label>
              <input type="text" class="form-control" id="inputName" placeholder="Name" required>

              <label for="inputSurname">Apellido</label>
              <input type="text" class="form-control" id="inputSurname" placeholder="Surname" required>

              

              <label for="inputReason">Motivo de la visita</label>
              <select id="inputReason" class="form-control" required>
                <option selected placeholder= "Choose an option"> </option>
                  <option>no me anda el php</option>
                  <option>el perro se comió mi tarea</option>
                  <option>ayudenme porfavor señor Sergi</option>
                  <option>otros</option>
              </select>


              <label for="inputDescription">Detalle su inquietud</label>
              <input type="text" class="form-control" id="inputDescription" placeholder="Description" required>
                
            
              <div class="modal-footer">
               
              <button type="reset" class="btn btn-primary">Borrar</button>
              <button type="submit" class="btn btn-primary">Enviar</button>

              </div>
          </form>
    </div>
  </div>
</div>

<div class="alert alert-success" role="alert"> 
      Ha pedido su cita con éxito! 
</div>


</section>
