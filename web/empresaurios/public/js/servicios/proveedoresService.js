const getProveedores = async ()=>{
    let resp = await axios.get("api/proveedores1/get");
    return resp.data;
};

const crearProveedor = async(proveedor)=>{
    let resp = await axios.post("api/proveedores2/post", proveedor, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return resp.data;
};

const cancelarProveedor = async(id)=>{
    try{
        let resp = await axios.post("api/proveedores3/delete", {id}, {
            headers:{
                "Content-Type": "application/json"
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    }
}