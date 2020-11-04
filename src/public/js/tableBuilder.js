import { tableURL } from "./routes.js";

export default class tableBuilder
{
    rebuildAppointmentTable = async () =>
    {
        deleteAppointmentTable();
        const updatedTable = await getUpdatedTable();
        insertUpdatedTable(updatedTable);
    };
    
    deleteAppointmentTable = () => document.getElementById('appointments-table').remove();
    
    getUpdatedTable = async () => await fetch(tableURL);
    
    insertUpdatedTable = (updatedTable) => document.getElementById('appointment-table-container').innerHTML = updatedTable;
    
    getFormData = async () => await fetch(editFormURL);
}