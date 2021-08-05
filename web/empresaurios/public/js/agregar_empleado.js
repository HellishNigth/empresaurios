

const cargarEmpleados = async ()=>{
    let resultado = await axios.get("api/empleados/get");
    let empleados = resultado.data;
    let empleadoselect = document.querySelector("#puesto");
    empleados.forEach(e=>{
        let option = document.createElement("option");
        option.innerText = e;
        empleadoselect.appendChild(option);
    });
};
document.addEventListener("DOMContentLoaded", ()=>{
    cargarEmpleados();
});

document.querySelector("#registrarfake-btn").addEventListener("click", async()=>{
    let nameE = document.querySelector("#nameEmpleado").value;
    let rutE = document.querySelector("#rut").value;
    let puestoE = document.querySelector("#puesto").value;
    let experiencia = document.querySelector("#si-ex-rb").checked ? 1: 0;
    let empleado = {};
    empleado.nameE = nameE;
    empleado.rutE = rutE;
    empleado.puestoE = puestoE;
    empleado.experiencia = experiencia;
    let res = await crearEmpleado(empleado);
    await Swal.fire("Producto guardado", "Producto guardado con exito", "info");
    window.location.href = "ver_empleados";
});