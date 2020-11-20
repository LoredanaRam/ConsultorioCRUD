import tableBuilder from "./tableBuilder.js";
import editFormBuilder from "./editFormBuilder.js";

import { appointmentURL } from "./routes.js";

export default class appointmentManager {

    tableBuilderInstance = new tableBuilder();
    editFormBuilderInstance = new editFormBuilder();

    currentAppointmentUpdate;
    
    deleteAppointment = (event) =>
    {
        if (event.target && event.target.matches(".btn-delete"))
        {
            //tableBuilderInstance.rebuildAppointmentTable();
            let appointmentId = this.findAppointmentNode(event.target).id;
            console.log(appointmentURL + "?id=" + appointmentId);
            fetch(appointmentURL + "?id=" + appointmentId, {
                method: 'delete'
            });
            this.tableBuilderInstance.rebuildAppointmentTable();
        }
    }
    
    editAppointment = (event) =>
    {
        if (event.target && event.target.matches(".btn-edit"))
        {
            console.log("testing!!!!!!!!!!!!");
            //tableBuilderInstance.rebuildAppointmentTable();
            let appointmentId = this.findAppointmentNode(event.target).id;
            this.editFormBuilderInstance.getForm(appointmentId)
            console.log("editing", appointmentId);

            this.currentAppointmentUpdate = appointmentId;
        }
    }
    
    findAppointmentNode = (element) =>
    {
        if (element.classList.contains('table-card-appointment')) return element;
        else 
        {
            let parentElement = this.findAppointmentNode(element.parentNode);
            return parentElement;
        }
    }
}
