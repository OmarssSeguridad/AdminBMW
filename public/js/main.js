$(document).ready(function() {

	// Update item cart
	$(".btn-update-item").on('click', function(e){
		e.preventDefault();
		
		var id = $(this).data('id');
		var href = $(this).data('href');
		var quantity = $("#product_" + id).val();

		window.location.href = href + "/" + quantity;
	});

});

    function cambiar_combo(id_motociclista){
        $("#combo_motociclistas").empty();
        $.ajax({
                type:'GET',
                url:'combo_moto_email/'+id_motociclista, 

                success:function(data){

                    var motociclista = data;

                        $("#correo").text(motociclista[0].email);
                        $("#correo").val(motociclista[0].email);

                }
        });

    }