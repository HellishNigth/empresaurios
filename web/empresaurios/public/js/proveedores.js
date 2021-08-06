const cargarProveedores = async function (){
    let resultado = await axios.get("api/proveedores/get");
    let provedores = resultado.data;
    let provedoreselect = document.querySelector("#tipo_proveedor-select");
    provedores.forEach(e=>{
        let option = document.createElement("option");
        option.innerText = e;
        provedoreselect.appendChild(option);
    });
};
const cargarFragil = async ()=>{
    let resultado = await axios.get("api/tipproveedores/get");
    let proveedores = resultado.data;
    let provedoreselect = document.querySelector("#fragil");
    proveedores.forEach(pr=>{
        let option = document.createElement("option");
        option.innerText = pr;
        provedoreselect.appendChild(option);
    });
};
document.addEventListener("DOMContentLoaded", ()=>{
    cargarProveedores();
    cargarFragil();
});
document.querySelector("#pro").addEventListener("click", async()=>{
    let nomProv = document.querySelector("#nombre_proveedor-txt").value;
    let prodProv = document.querySelector("#prodprov-txt").value;
    let tipProv = document.querySelector("#tipo_proveedor-select").value;
    let fragil = document.querySelector("#fragil").value;
    let cantProv = document.querySelector("#cantidad_provista-txt").value;
    let proveedor = {};
    proveedor.nomProv = nomProv;
    proveedor.prodProv = prodProv;
    proveedor.tipProv = tipProv;
    proveedor.fragil = fragil;
    proveedor.cantProv = cantProv;
    let res = await crearProveedor(proveedor);
    await Swal.fire("Empleado guardado", "Empleado guardado con exito", "info");
    window.location.href = "ver_proveedores";
});