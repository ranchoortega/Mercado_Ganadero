class Welcome {
    constructor(){
        
    }
    
    async getInicio() {
        try {
            return sendDataGet(`C_Inicio/getPaginas`)


        } catch (e) {
            console.log("hh");
        }
    }
}