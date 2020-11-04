import tableBuilder from "./tableBuilder.js";
import editFormBuilder from "./editFormBuilder.js";

export default class appointmentManager {

    tableBuilderInstance = new tableBuilder();
    editFormBuilderInstance = new editFormBuilder();
    
    deleteAppointment = (event) =>
    {
        if (event.target && event.target.matches(".btn-delete"))
        {
            //tableBuilderInstance.rebuildAppointmentTable();
            let appointmentId = this.findAppointmentNode(event.target).id;
            console.log("deleting", appointmentId);
        }
    }
    
    editAppointment = (event) =>
    {
        if (event.target && event.target.matches(".btn-edit"))
        {
            //tableBuilderInstance.rebuildAppointmentTable();
            let appointmentId = this.findAppointmentNode(event.target).id;
            this.editFormBuilderInstance.getForm(appointmentId)
            console.log("editing", appointmentId);
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
