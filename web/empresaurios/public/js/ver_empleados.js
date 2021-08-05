const Erradicacion = async function(){
    let id = this.idEmpleado;
    let resp = await Swal.fire({title:"Esta de acuerdo?", text:"No se puede volver atras", icon:"error", showCancelButton:true});
    if(resp.isConfirmed){
        if(cancelarProducto(id)){
            let empleados = await getEmpleados();
            cargarLista(empleados);
            Swal.fire("empleado eliminado",  "empleado erradicado","info");
        } else{
            Swal.fire("Error al eliminar", "lo lamentamos", "error");
        }
    } else{
        Swal.fire("Cancelado", "Peticion cancelada", "info");
    }

};
const cargarLista = (empleados)=>{
    let tbody = document.querySelector("#tbody-empleados");
    tbody.innerHTML = "";
    for(let i=0; i < empleados.length; ++i){
        let tr = document.createElement("tr");
        let tdNnameE = document.createElement("td");
        tdNnameE.innerText = empleados[i].nameE;

        let tdRutE = document.createElement("td");
        tdRutE.innerText = empleados[i].rutE;

        let tdPuestoE = document.createElement("td");
        tdPuestoE.innerText = empleados[i].puestoE;
        let tdExperiencia = document.createElement("td");
        tdExperiencia.innerText = empleados[i].experiencia;
        let tdAcciones = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn", "btn-danger");
        botonEliminar.idEmpleado = empleados[i].id;
        botonEliminar.addEventListener("click", Erradicacion);
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
    let empleados = await getEmpleados();
    cargarLista(empleados);
});