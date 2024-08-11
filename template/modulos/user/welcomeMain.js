const welcome = new Welcome();


$(document).ready(async function () {

   const {res, data} = await welcome.getInicio();

   if (res) {
    for (const obj of data) {

        obj.status == "1"?$(`#${obj.name_pages_status}`).show():$(`#${obj.name_pages_status}`).hide()
        obj.status == "1"?$(`#${obj.li_name}`).show():$(`#${obj.li_name}`).hide()
        
        
    }
    
   }


});