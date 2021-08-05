const cargarFaltantes = async()=>{
    let ras = await axios.get("api/tipfaltante/get");
    let faltante = ras.data;

    let faltantetSelect = document.querySelector("#faltante-select");
    faltante.forEach(f=>{
        let option = document.createElement("option");
        option.innerText = f;
        faltantetSelect.appendChild(option);
    });
};
document.addEventListener("DOMContentLoaded", ()=>{
    cargarFaltantes();
});

document.querySelector("#registrarfake-btn").addEventListener("click", async ()=>{
    let fnom_produc = document.querySelector("#nombre_produc_falt-txt").value;
    let ftipo_produc = document.querySelector("#faltante-select").value;
    let fcantidad = document.querySelector("#cantidad_faltante-txt").value;
    let faltante = {};
    faltante.fnom_produc = fnom_produc;
    faltante.ftipo_produc = ftipo_produc;
    faltante.fcantidad = fcantidad;

    let ras = await crearFaltante(faltante);
    await Swal.fire("Productos faltante", "Productos faltantes guardados con exito", "info");
});