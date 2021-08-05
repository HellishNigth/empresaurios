
const cargarTipProduc = async()=>{
    let resultado = await axios.get("api/tipproduc/get");
    let tipproduc = resultado.data;

    let tipproducSelect = document.querySelector("#tipo_produc-select");
    tipproduc.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        tipproducSelect.appendChild(option);
    });
};
document.addEventListener("DOMContentLoaded", ()=>{
    cargarTipProduc();
});

document.querySelector("#registrar-btn").addEventListener("click", async()=>{
    let nom_produc = document.querySelector("#nombreproduc-txt").value;
    let tipo_produc = document.querySelector("#tipo_produc-select").value;
    let cantidad = document.querySelector("#cantidad-txt").value;
    let producto = {};
    producto.nom_produc = nom_produc;
    producto.tipo_produc = tipo_produc;
    producto.cantidad = cantidad;
    let res = await crearProducto(producto);
    await Swal.fire("Producto guardado", "Producto guardado con exito", "info");
    window.location.href = "ver_productos";
});