const Cancelacion = async function(){
    let id = this.idProducto;
    let resp = await Swal.fire({title:"Esta de acuerdo?", text:"No se puede volver atras", icon:"error", showCancelButton:true});
    if(resp.isConfirmed){
        if(cancelarProducto(id)){
            let productos = await getProductos();
            cargarTabla(productos);
            Swal.fire("producto eliminado",  "Producto erradicado","info");
        } else{
            Swal.fire("Error al eliminar", "lo lamentamos", "error");
        }
    } else{
        Swal.fire("Cancelado", "Peticion cancelada", "info");
    }

};
const cargarTabla = (productos)=>{
    let tbody = document.querySelector("#tbody-produc");
    tbody.innerHTML = "";
    for(let i=0; i < productos.length; ++i){
        let tr = document.createElement("tr");
        let tdNombreproduc = document.createElement("td");
        tdNombreproduc.innerText = productos[i].nom_produc;

        let tdTipproduc = document.createElement("td");
        tdTipproduc.innerText = productos[i].tipo_produc;

        let tdCantidad = document.createElement("td");
        tdCantidad.innerText = productos[i].cantidad;
        
        let tdAcciones = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn", "btn-danger");
        botonEliminar.idProducto = productos[i].id;
        botonEliminar.addEventListener("click", Cancelacion);
        tdAcciones.appendChild(botonEliminar);

        tr.appendChild(tdNombreproduc);
        tr.appendChild(tdTipproduc);
        tr.appendChild(tdCantidad);
        tr.appendChild(tdAcciones);
        tbody.appendChild(tr);
        
    }
};


document.addEventListener("DOMContentLoaded", async()=>{
    let productos = await getProductos();
    cargarTabla(productos);
});