import appointmentManager from "./appointmentManager.js";

const appointmentManagerInstance = new appointmentManager();

document.getElementById('appointments-table').addEventListener('click', (event) => appointmentManagerInstance.deleteAppointment(event));
document.getElementById('appointments-table').addEventListener('click', (event) => appointmentManagerInstance.editAppointment(event));