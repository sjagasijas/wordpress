
  /*
	*
	*	Javascript Functions
	*	------------------------------------------------
	*	WP Mobile Menu
	* 	Copyright WP Mobile Menu 2016 - http://www.wpmobilemenu.com
	*
	*
	*
	*/

 	"use strict";

	jQuery(document).ready(function() {
		
		if ( jQuery( 'body' ).find( '.mobmenu-push-wrap' ).length <= 0 ) {

			jQuery( 'body' ).wrapInner( '<div class="mobmenu-push-wrap"></div>' );
			jQuery( '.mobmenu-push-wrap' ).after( jQuery( '.mob-menu-left-panel' ).detach() );
			jQuery( '.mobmenu-push-wrap' ).after( jQuery( '.mob-menu-right-panel' ).detach() );
			jQuery( '.mobmenu-push-wrap' ).after( jQuery( '.mob_menu_header_div' ).detach() );
			jQuery( '#wpadminbar' ).appendTo( 'body' );

		}

    	jQuery( document ).on( 'click', '.mobmenu-left-bt' , function ( ) {  
        	  jQuery('body').toggleClass('show-nav-left'); 
            
            if ( jQuery( 'body' ).hasClass( 'show-nav-left') ){  
                jQuery( 'body' ).css( 'overflow', 'hidden');  
            } else {
                jQuery( 'body' ).css( 'overflow', '');  
            }
            
    	});

    	jQuery( document ).on( 'click', '.mobmenu-right-bt' , function ( ) {
        	  jQuery('body').toggleClass('show-nav-right'); 
          	
            if ( jQuery( 'body' ).hasClass( 'show-nav-right') ){
                jQuery( 'body' ).css( 'overflow', 'hidden');  
            } else {
                jQuery( 'body' ).css( 'overflow', '');  
            }
    	});

    	jQuery('.mobmenu_content .sub-menu').each( function(){
    		jQuery( this ).before('<div class="mob-expand-submenu"><i class="mob-icon-down-open"></i><i class="mob-icon-up-open hide"></i></div>');

    	});
    	
    	jQuery( document ).on( 'click', '.mob-expand-submenu' , function ( ) {
        	  
        	  jQuery( this ).find('.mob-icon-down-open').toggleClass('hide');
              jQuery( this ).find('.mob-icon-up-open').toggleClass('hide');
        	  
        	  if ( !jQuery( this ).next().hasClass( 'show-sub-menu' ) ){
                  //jQuery(this).next().slideDown();  
        	  	  jQuery(this).next().fadeIn("slow"); 	
        	  } else {
                  //jQuery(this).next().slideUp();    
        	  	  jQuery(this).next().hide(); 	
        	  }

        	  jQuery(this).next().toggleClass( 'show-sub-menu');
        	  
    	});


	}); 