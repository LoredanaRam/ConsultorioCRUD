<table id="appointments-table" class="table table-appointments table-borderless">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Tema</th>
      <th scope="col">Fecha</th>
      <th scope="col" class="d-none d-sm-block">Descripción</th>
      <th scope="col"></th>
    </tr>
  </thead>

        <?php foreach ($data['appointments'] as $appointment) { ?>
          <tbody id="<?= $appointment->getId() ?>" class="table-card-appointment">
            <tr class="table-appointments-row bg-dark-lighter">
              <td scope="row"><?= $appointment->getName() ?></td>
              <td><?= $appointment->getTopic() ?></td>
              <td><?= $appointment->getDate() ?></td>
              <td class="d-none d-sm-table-cell"><?= $appointment->getDescription() ?></td>
              <td>
                  <div class="d-flex justify-content-around">
                      <a href="?action=upload&id=<?= $appointment->getId() ?>">
                      <button type="button" class="btn-edit btn btn-round btn-outline-primary btn-sm d-flex align-items-center" data-toggle="modal" data-target="#modalFormEdit">
                          <svg class="btn-edit" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" xmlns="http://www.w3.org/2000/svg">
                              <path class="btn-edit" d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path class="btn-edit" fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg>
                      </button>
                      </a>
                      <a href="?action=delete&id=<?= $appointment->getId() ?>">                      
                      <button class="btn-delete btn btn-round btn-danger btn-sm d-flex align-items-center">
                          <svg class="btn-delete" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path class="btn-delete" fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                          </svg>
                      </button>
                      </a>
                  </div>
                </td>
            </tr>
          </tbody>
        <?php } ?>
</table>