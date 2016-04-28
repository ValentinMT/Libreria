//alert("Iniciando");

//$( document ).ready(function(){})
$(".button-collapse").sideNav();

$('.slider').slider();

$('li > a').click(function() {
    $('li').removeClass();
    $(this).parent().addClass('active');
});

$(document).ready(function(){
	// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
    $('select').material_select();
});

/*$('#modal1').openModal();

$('#modal1').closeModal();

$('.modal-trigger').leanModal({
    	dismissible: true, // Modal can be dismissed by clicking outside of the modal
	      opacity: .5, // Opacity of modal background
	      in_duration: 300, // Transition in duration
	      out_duration: 200, // Transition out duration
	      ready: function() { alert('Ready'); }, // Callback for Modal open
	      complete: function() { alert('Closed'); } // Callback for Modal close
	}
);*/