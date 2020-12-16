


jQuery(document).ready( function($){


/*Ajax Load More*/

$(document).on('click','.load-more-btn', function(){


	var page = $(this).data('page');
	

	var ajaxurl = $(this).data('url');


	$.ajax({

		url : ajaxurl,
		type: 'post',
		data : {

			 page  : page,
			 action: 'load_more_btn'

		},

		
		error : function(response){

			console.log(response);

		},


		


		success : function(response) {

			$('.theme-post-container').append(response);

		}


	});


});


});