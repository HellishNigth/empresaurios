const iniciarKill = async function(){
    let id = this.idFaltante;
    let resp = await Swal.fire({title:"Estas seguro?", text:"sus productos no estaran guardados"
    ,icon:"error", showCancelButton:true});
    if(resp.isConfirmed){
        if(eliminarfaltante(id)){
            let faltantes = await getFaltantes();
            cargarCuadro(faltantes);
            Swal.fire("Productos quitados", "Productos Faltantes sacados exitosamente", "info");
        } else {
            Swal.fire("Error", "Problema Extraño detectado", "error");
        }
    } else{
        Swal.fire("Canselado", "Sus Productos faltantes siguen guardados", "info");
    }
};

const cargarCuadro = (faltantes)=>{
    let tbody = document.querySelector("#tbody-produc_falt");
    tbody.innerHTML = "";
    for(let i=0; i < faltantes.length; ++i){
        let tr = document.createElement("tr");

        let tdfnom_produc = document.createElement("td");
        tdfnom_produc.innerText = faltantes[i].fnom_produc;
        let tdftipo_produc = document.createElement("td");
        tdftipo_produc.innerText = faltantes[i].ftipo_produc;
        let tdfcantidad = document.createElement("td");
        tdfcantidad.innerText = faltantes[i].fcantidad;
        let tdReaccion = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn", "btn-danger");
        botonEliminar.idFaltante = faltantes[i].id;
        botonEliminar.addEventListener("click", iniciarKill);
        tdReaccion.appendChild(botonEliminar);

        tr.appendChild(tdfnom_produc);
        tr.appendChild(tdftipo_produc);
        tr.appendChild(tdfcantidad);
        tr.appendChild(tdReaccion);

        tbody.appendChild(tr);
    }
};

document.addEventListener("DOMContentLoaded", async()=>{
    let faltantes = await getFaltantes();
    cargarCuadro(faltantes);
});