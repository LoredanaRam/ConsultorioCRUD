import { appointmentURL } from "./routes.js";

export default class editFormBuilder {

    getForm = async (id) => {
        let appointmentRequest = await fetch(appointmentURL + "?id=" + id);
        let appointmentObject = await appointmentRequest.json();
        console.log(appointmentObject);
        document.getElementById('inputEditName').value = appointmentObject.name;
        document.getElementById('inputEditReason').value = appointmentObject.topic;
        document.getElementById('inputEditDescription').value = appointmentObject.description;

        // fetch(appointmentURL, {
        //     method: 'post',
        //     body: JSON.stringify(formData)
        // }).then(()=>{
        //     tableBuilderInstance.rebuildAppointmentTable();
        // })
    }
    

}