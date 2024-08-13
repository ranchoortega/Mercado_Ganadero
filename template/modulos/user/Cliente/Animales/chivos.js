const chivos = new Animales("Chivos");

$(document).ready(async function () {

    console.log("fffffffffffffffffffffffffffffffffffffffff");
    
   const {res, data} =  await chivos.getAnimales();
   console.log(data);
   chivos.data =data;

   chivos.generalItems()
   
   
   

});

