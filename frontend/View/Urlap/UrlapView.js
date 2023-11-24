import { AdatLeiro } from "../AdatLeiro.js";

export default class UrlapView {
  constructor(szuloElem) {
    this.AdatLeiro = AdatLeiro;
    this.szuloElem = szuloElem;
    this.htmlOsszerak();
    $('form').submit((event)=>{
      event.preventDefault();
      this.#esemenyLetrehozo('sorFelvitel');
    })
    
  }
  htmlOsszerak() {
    let tipus = "number";
    let txt = "<form>";
    for (const key in AdatLeiro) {
      if (key === "elsodlegeskulcs") {
        continue;
      }
      if (key === "zipcode") {
        tipus = "number";
      } else {
        tipus = "text";
      }
      txt += `
        <div class="form-group">
        <label for="${key}">${this.AdatLeiro[key]}:</label>
        <input type="${tipus}" class="form-control" id="${key}">
        </div>
        `;
    }

    txt += `<button id="submit" class="btn btn-outline-success">Submit</button>`;
    txt += "</form>";

    this.szuloElem.append(txt);
    this.AdatLekeres();
  }

  AdatLekeres() {
    let inputAdat = {};
    for (const key in AdatLeiro) {
      inputAdat[key] = $(`input#${key}`).val();
    }
     console.log(inputAdat);
        return inputAdat;
  }

  #esemenyLetrehozo(esemenyNev) {
    const esemenyem = new CustomEvent(esemenyNev, { detail: this.AdatLekeres() });
    window.dispatchEvent(esemenyem);
  }
}
