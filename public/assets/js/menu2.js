// jQuery
$(document).ready(function(){ 
    $('#mostrar').hover( 
        
        function(event){ 
            $('#loco').slideToggle(500);
            // $(this).text('Cerrar el panel');
            // e.preventDefault();
        }, // Separamos las dos funciones con una coma
     
        /* 
            Segundo click.
            Función que oculta el panel
            y vuelve a cambiar el texto del botón.
        */
        function(){ 
            // $('#loco').slideUp();
            // $(this).text('Mostrar el panel oculto');
            // e.preventDefault();
        });
        
    $('#mostrar').click( 

        function(event){ 
            $('#loco').slideToggle();
            // $(this).text('Cerrar el panel');
            // e.preventDefault();
        }, // Separamos las dos funciones con una coma
     
        /* 
            Segundo click.
            Función que oculta el panel
            y vuelve a cambiar el texto del botón.
        */
        function(){ 
            // $('#loco').slideUp();
            // $(this).text('Mostrar el panel oculto');
            // e.preventDefault();
        });
 
});