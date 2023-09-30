import axios from "axios";
import { useEffect,useState } from "react";
function Show() {
    const [Data,SetData]=useState([]);
    useEffect(()=>{
        funcion()
    },[]);
    const funcion = async ()=>{
        try {
            const endpoint='http://127.0.0.1:8000/api/autos';
            const response = await axios.get(endpoint);
            SetData(response.data[0])
            
        } catch (error) {
            console.error(error)
        }
    };
    return(
        <section className="loggin">
            <div className="containLoggin">
                <img src="" alt="" />
            </div>
        </section>
    );
}
export {Show};