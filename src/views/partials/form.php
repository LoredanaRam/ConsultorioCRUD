<form class="form-group col-md-6">
  
    <label for="inputName">Name</label>
    <input type="text" class="form-control" id="inputName" placeholder="Name" required>

    <label for="inputSurname">Surname</label>
    <input type="text" class="form-control" id="inputSurname" placeholder="Surname" required>
  
    
 
    <label for="inputReason">Reason of the Visit</label>
    <select id="inputReason" class="form-control" required>
      <option selected placeholder= "Choose an option"> </option>
        <option>...</option>
        <option>...</option>
        <option>...</option>
        <option>...</option>

    </select>
 

    <label for="inputDescription">Description</label>
    <input type="text" class="form-control" id="inputDescription" placeholder="Description" required>
      
    <button type="submit" class="btn btn-primary">Send</button>
    <button type="reset" class="btn btn-primary">Reset</button>
</form>





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
          <input type="text" class="form-control" id="inputName" placeholder="Name" required>
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
          </div>
          <div class="form-group">
          <label for="inputDescription">Description</label>
          <input type="text" class="form-control" id="inputDescription" placeholder="Description" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>