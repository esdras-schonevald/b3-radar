
document.addEventListener("DOMContentLoaded", function () {

    ajax({

        url: "http://localhost:3001/", 
        method:"get", 
        data:{},
        success: function (resposta)
         {
             console.log(resposta);

         }
    });
}
);