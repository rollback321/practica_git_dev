


function enviarDatos(){
    $.ajax({           
        url : baseUrl+'/post',                   
        data : { 
            id_input : 123                
        },                     
        type : 'POST',
        dataType : 'json',                     
        success : function(json) {
           console.log(json.resultado)
        },   
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },     
        error : function(jqXHR, status, error) {
            alert('Disculpe, existió un problema');
        },         
        complete : function(jqXHR, status) {
          //  alert('Petición realizada');
        }
    });
}
