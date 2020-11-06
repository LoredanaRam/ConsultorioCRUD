<section>

<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark border-0">
        <h5 class="modal-title" id="exampleModalLabel">Solicitud de Cita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <div class="modal-body bg-dark">

          <form class="form-group" action="?action=create" method="POST" >
              
              <label for="inputName">Nombre</label>
              <input type="text" class="form-control bg-dark-lighter border-primary" id="inputName" name= "nombre" placeholder="Name" required>
              <label for="inputReason" > Motivo de la visita</label>
              <select id="inputReason" class="form-control bg-dark-lighter  border-primary" name= "tema" required>
                <option selected placeholder= "Choose an option"> </option>
                  <option>no me anda el php</option>
                  <option>el perro se comió mi tarea</option>
                  <option>ayudenme porfavor señor Sergi</option>
                  <option>otros</option>
              </select>


              <label for="inputDescription">Detalle su inquietud</label>
              <input type="text" class="form-control bg-dark-lighter  border-primary" id="inputDescription" name= "descripcion" placeholder="Description" required>
                
            
              <div class="modal-footer border-0">
               
              <button type="reset" class="btn btn-outline-primary">Borrar</button>
              <button type="submit" class="btn btn-outline-primary">Enviar</button>

              </div>
          </form>
    </div>
  </div>
</div>

<div class="alert alert-success" role="alert"> 
      Ha pedido su cita con éxito! 
</div>


</section>
