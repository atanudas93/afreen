jQuery(document).ready(function($){
    
            $(document).on('click','.loadmore',function(){
                event.preventDefault();
                var that = $(this);
                var page = that.data('page');
                var newPage = page + 1; 
                var ajaxurl = that.data('url');
                // console.log(ajaxurl);

             $.ajax({

             	url:ajaxurl,
             	type: 'post',
             	data :{

             	page:page,
             	action: 'afreen_load_more_function'

             	},
           
				// error: fucntion(response) {

    //          	    console.log(response);
    //            },
               
               success: function(response){
             	that.data('page', newPage);
             	$('.my-blogpost').append(response);
             	// $('#loadmore').hide(); 
             }	




             });



            });


    });