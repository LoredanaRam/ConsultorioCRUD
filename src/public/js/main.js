import appointmentManager from "./appointmentManager.js";
import tableBuilder from "./tableBuilder.js";

import { appointmentURL } from "./routes.js";

const appointmentManagerInstance = new appointmentManager();
const tableBuilderInstance = new tableBuilder();

tableBuilderInstance.createUpdatedTable();

document.getElementById('appointments-table').addEventListener('click', (event) => appointmentManagerInstance.deleteAppointment(event));
document.getElementById('appointments-table').addEventListener('click', (event) => appointmentManagerInstance.editAppointment(event));

document.getElementById('save-appointment-button').addEventListener('click', (event) => {
    let formData = {
        nombre: document.getElementById('inputName').value,
        tema: document.getElementById('inputReason').value,
        descripcion: document.getElementById('inputDescription').value
    }

    fetch(appointmentURL, {
        method: 'post',
        body: JSON.stringify(formData)
    }).then(()=>{
        tableBuilderInstance.rebuildAppointmentTable();
    })
});