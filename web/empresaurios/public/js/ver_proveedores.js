const Borrar = async function(){
    let id = this.idProveedor;
    let resp = await Swal.fire({title:"Esta de acuerdo?", text:"No se puede volver atras", icon:"error", showCancelButton:true});
    if(resp.isConfirmed){
        if(cancelarProveedor(id)){
            let proveedores = await getproveedores();
            cargarRegistro(proveedores);
            Swal.fire("empleado eliminado",  "empleado erradicado","info");
        } else{
            Swal.fire("Error al eliminar", "lo lamentamos", "error");
        }
    } else{
        Swal.fire("Cancelado", "Peticion cancelada", "info");
    }

};
const cargarRegistro = (proveedores)=>{
    let tbody = document.querySelector("#tbody-proveedores");
    tbody.innerHTML = "";
    for(let i=0; i < proveedores.length; ++i){
        let tr = document.createElement("tr");
        let tdNnameE = document.createElement("td");
        tdNnameE.innerText = proveedores[i].nameE;

        let tdRutE = document.createElement("td");
        tdRutE.innerText = proveedores[i].rutE;

        let tdPuestoE = document.createElement("td");
        tdPuestoE.innerText = proveedores[i].puestoE;
        let tdExperiencia = document.createElement("td");
        tdExperiencia.innerText = proveedores[i].experiencia;
        let tdAcciones = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn", "btn-danger");
        botonEliminar.idProveedor = proveedores[i].id;
        botonEliminar.addEventListener("click", Borrar);
        tdAcciones.appendChild(botonEliminar);

        tr.appendChild(tdNnameE);
        tr.appendChild(tdRutE);
        tr.appendChild(tdPuestoE);
        tr.appendChild(tdExperiencia);
        tr.appendChild(tdAcciones);
        tbody.appendChild(tr);
        
    }
};


document.addEventListener("DOMContentLoaded", async()=>{
    let proveedores = await getProveedores();
    cargarRegistro(proveedores);
});