const getProveedores = async ()=>{
    let resp = await axios.get("api/proveedores/get");
    return resp.data;
};

const crearProveedor = async(proveedor)=>{
    let resp = await axios.post("api/proveedores/post", proveedor, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return resp.data;
};

const cancelarProveedor = async(id)=>{
    try{
        let resp = await axios.post("api/proveedores/delete", {id}, {
            headers:{
                "Content-Type": "application/json"
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    }
}