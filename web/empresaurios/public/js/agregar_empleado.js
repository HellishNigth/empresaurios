

const cargarEmpleados = async function (){
    let resultado = await axios.get("api/tipempleados/get");
    let empleados = resultado.data;
    let empleadoselect = document.querySelector("#puesto");
    empleados.forEach(e=>{
        let option = document.createElement("option");
        option.innerText = e;
        empleadoselect.appendChild(option);
    });
};
const cargarExperiencia = async ()=>{
    let resultado = await axios.get("api/expempleados/get");
    let empleados = resultado.data;
    let empleadoselect = document.querySelector("#experiencia");
    empleados.forEach(x=>{
        let option = document.createElement("option");
        option.innerText = x;
        empleadoselect.appendChild(option);
    });
};
document.addEventListener("DOMContentLoaded", ()=>{
    cargarEmpleados();
    cargarExperiencia();
});
document.querySelector("#esta").addEventListener("click", async()=>{
    let nameE = document.querySelector("#nameEmpleado").value;
    let rutE = document.querySelector("#rut").value;
    let puestoE = document.querySelector("#puesto").value;
    let experiencia = document.querySelector("#experiencia").value;
    let empleado = {};
    empleado.nameE = nameE;
    empleado.rutE = rutE;
    empleado.puestoE = puestoE;
    empleado.experiencia = experiencia;
    let res = await crearEmpleado(empleado);
    await Swal.fire("Empleado guardado", "Empleado guardado con exito", "info");
    window.location.href = "ver_empleados";
});