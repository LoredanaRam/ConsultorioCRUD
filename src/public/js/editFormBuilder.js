import { editFormURL } from "./routes.js";

export default class editFormBuilder {
    getForm = async (formId) => await fetch(editFormURL + formId);
}