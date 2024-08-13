const aves = new Animales("Aves");

$(document).ready(async function () {

    console.log("fffffffffffffffffffffffffffffffffffffffff");
    
   const {res, data} =  await aves.getAnimales();
   console.log(data);
   aves.data =data;

   aves.generalItems()
   
   
   

});

