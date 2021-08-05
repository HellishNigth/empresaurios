

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

cargarEmpleados();