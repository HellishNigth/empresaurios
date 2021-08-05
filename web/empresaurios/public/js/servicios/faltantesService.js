const getFaltantes = async ()=>{
    let resp = await axios.get("api/faltantes/get");
    return resp.data;
};

const getTipFaltantes = async ()=>{
    let resp = await axios.get("api/faltantes/get");
    return resp.data;
}

const crearFaltante = async(faltante)=>{
    let resp = await axios.post("api/faltantes/post", faltante, {
        headers:{
            "Content-Type": "application/json"
        }
    });
    return resp.data;
};

const eliminarfaltante = async(id)=>{
    try{
        let resp = await axios.post("api/faltantes/delete", {id},{
            headers:{
                "Content-Type":"application/json"
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    }
}