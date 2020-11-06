<section>


          <form class="form-group" action="upload" method="POST">
              
              <label for="inputEditName">Nombre</label>
              <input type="text" class="form-control bg-dark-lighter border-primary" id="inputEditName" placeholder="Name" value="<?= $appointment->getName() ?>" required>

              <label for="inputEditReason">Motivo de la visita</label>
              <select id="inputEditReason" class="form-control bg-dark-lighter  border-primary" required>
                <option selected><?= $appointment->getTopic() ?></option>
                  <option>no me anda el php</option>
                  <option>el perro se comió mi tarea</option>
                  <option>ayudenme porfavor señor Sergi</option>
                  <option>otros</option>
              </select>


              <label for="inputEditDescription">Detalle su inquietud</label>
              <input type="text" class="form-control bg-dark-lighter  border-primary" id="inputEditDescription" placeholder="Description" value="<?= $appointment->getDescription() ?>" required>
                
            
              <div class="modal-footer border-0">
               
              <button type="reset" class="btn btn-outline-primary">Borrar</button>
              <button type="submit" class="btn btn-outline-primary">Enviar</button>

              </div>
          </form>

</section>
