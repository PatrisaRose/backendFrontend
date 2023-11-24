export default class SorView {
  #obj = {};
  constructor(index, obj, szuloElem) {
    this.index = index;
    this.#obj = obj;
    this.szuloElem = szuloElem;
    this.id = this.#obj['elsodlegeskulcs'];
    this.htmlOsszerak();
    $('button.btn-danger:last').on("click", (event)=>{
      this.#esemenyLetrehozo('sorTorles');
    })
  }


  htmlOsszerak() {
    let txt = "<tr>";

    for (const key in this.#obj) {
      txt += `<td>${this.#obj[key]}</td>`;
    }

    txt += `<td><button class='btn btn-danger'>Törlés</button></td>`

    txt += "</tr>";
    this.szuloElem.append(txt);
  }

  #esemenyLetrehozo(esemenyNev) {
    const esemenyem = new CustomEvent(esemenyNev, { detail: this.id});
    window.dispatchEvent(esemenyem);
  }
}
