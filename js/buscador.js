function getData() {
    $.ajax({
        url:"controller/ajax.php",
        method: "POST",
        data: $("#formulario").serialize(),              
      }).done(function (resp) {
        // $('#divResultadosBusqueda').hide();        
        var rs = JSON.parse(resp);        
        var data = $("#divResultadosBusqueda");
        data.empty();
        data.addClass("colContenido");
        data.append('<h5 class="title">'+'Resultados de la búsqueda:'+'</h5>');
        $.each(rs, function (index, elemento) {
            data.append(              
                '<img class="image" src="img/home.jpg">' +
                '<p>'+
                    'Dirección: '+elemento.Direccion+ 
                    '<br/>'+ 
                    'Ciudad: '+elemento.Ciudad+
                    '<br/>'+ 
                    'Teléfono: '+elemento.Telefono+
                    '<br/>'+
                    'Código Postal: '+elemento.Codigo_Postal+
                    '<br/>'+
                    'Tipo: ' +elemento.Tipo+
                    '<br/>'+
                    'Precio: ' +elemento.Precio+
                '</p>'+
                '<div class="botonField">'+
                   '<button class="btn">'+'Guardar'+'</button>'+
                '</div>'+
                '<div class="divider">' + '<div>'              
            );
        });  
    });
}