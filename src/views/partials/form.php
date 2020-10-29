<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form>
          
          <div class="form-group">
          <label for="inputName">Name</label>
          <input type="text" class="form-control" id="inputName2" placeholder="Name" required>
          </div>
         
          <div class="form-group">
          <label for="inputSurname">Surname</label>
          <input type="text" class="form-control" id="inputSurname" placeholder="Surname" required>
          </div>

          <div class="form-group">
          <label for="inputReason">Reason of the Visit</label>
          <select id="inputReason" class="form-control" required>
            <option selected placeholder= "Choose an option"> </option>
            <option>...</option>
            <option>...</option>
            <option>...</option>
            <option>...</option> 
          </select>         
          
          <div class="form-group">
            <label for="inputDescription2">Description</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>

      <div class="modal-footer">
      <button type="reset" class="btn btn-primary">Reset</button>
      <button type="submit" class="btn btn-primary">Send</button>
      </div>
      
      </form>
      </div>

    </div>
  </div>
</div>



