const reses = new Animales("Reses");

$(document).ready(async function () {

    console.log("fffffffffffffffffffffffffffffffffffffffff");
    
   const {res, data} =  await reses.getAnimales();
   console.log(data);
   reses.data =data;

   reses.generalItems()
   
   
   

});

