$(document).ready(function() {    

	$('#example').DataTable({    
		
        language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
			     },
			     "sProcessing":"Procesando...",
            },
        //para usar los botones   
        responsive: "true",
        dom: 'Bfrtilp',       
        buttons:[ 
			{
				extend:    'excelHtml5',
				text:      '<i class="fas fa-file-excel"></i> ',
				titleAttr: 'Exportar a Excel',
				download: 'open',
				className: 'btn btn-success',
				messageTop: 'Lista de Usuarios',
				title:'Municipalidad Distrital de Humaya',
				exportOptions: {
					columns: [ 0, 1, 2, 3, 4, 5]
				},
			},
			{
				extend: 'pdfHtml5',
				text: '<i class="fas fa-file-pdf"></i>',
				download: 'open',
				className: 'btn btn-danger',
				messageTop: 'Lista de Usuarios',
				title:'Municipalidad Distrital de Humaya',
				exportOptions: {
					columns: [ 0, 1, 2, 3, 4, 5]
				},
				
				// centrar
			
				// fin
				customize:function(doc) {
					doc.styles.title = {
						color: 'black',
						fontSize: '20',
						alignment: 'center'
					}
					doc.styles['td:nth-child(2)'] = { 
						width: '100px',
						'max-width': '100px'
					}
				}
			},
			{
				extend:    'print',
				text:      '<i class="fa fa-print"></i> ',
				titleAttr: 'Imprimir',
				className: 'btn btn-info',
				messageTop: 'Lista de Usuarios',
				title:'Municipalidad Distrital de Humaya',
				exportOptions: {
					columns: [ 0, 1, 2, 3, 4, 5]
				},
			},
		]	        
    });  
    
	table.buttons( 0, null ).container().appendTo(
		table.table().container()
	);

});




