jQuery(document).ready(function($) { 
	
	var editing = $( 'html.fl-builder-edit' ).length,
		header  = $( '.fl-builder-content[data-type=header]' ),
		$b42s_win = $(window);
		
	if ( ! editing && header.length && $b42s_win.width() <= 992 ) {

		header.imagesLoaded( $.proxy( function() {

			$b42s_body   	 = $( 'body' );
			$b42s_header 	 = header.eq( 0 );
			$b42s_overlay     = !! Number( header.attr( 'data-overlay' ) );
			$b42s_hasAdminBar = !! $( 'body.admin-bar' ).length;

			if ( Number( header.attr( 'data-sticky' ) ) ) {

				$b42s_header.data( 'original-top', $b42s_header.offset().top );
				//$b42s_win.on( 'resize', $.throttle( 500, $.proxy( $b42s__initSticky, this ) ) );
				$(window).on('scroll', function(){
					console.log('scroll watcher');
					doSticky();
				} );
				doSticky();

				if ( Number( header.attr( 'data-shrink' ) ) ) {
					$b42s_header.data( 'original-height', $b42s_header.outerHeight() );
					$(window).on('scroll', function(){
						console.log('shrink watcher');
						doShrink();
					} );
					//$b42s_win.on( 'resize', $.throttle( 500, $.proxy( $b42s__initShrink, this ) ) );
					doShrink();
				}
			}

		}, this ) );
	}
	
	function doSticky(){
		var winTop    		  = $b42s_win.scrollTop(),
			headerTop 		  = $b42s_header.data( 'original-top' ),
			hasStickyClass    = $b42s_header.hasClass( 'fl-theme-builder-header-sticky' ),
			hasScrolledClass  = $b42s_header.hasClass( 'fl-theme-builder-header-scrolled' );

		if ( $b42s_hasAdminBar ) {
			winTop += 32;
		}

		if ( winTop >= headerTop ) {
			if ( ! hasStickyClass ) {
				$b42s_header.addClass( 'fl-theme-builder-header-sticky' );
				if ( ! $b42s_overlay ) {
					$b42s_body.css( 'padding-top', $b42s_header.outerHeight() + 'px' );
				}
			}
		}
		else if ( hasStickyClass ) {
			$b42s_header.removeClass( 'fl-theme-builder-header-sticky' );
			$b42s_body.css( 'padding-top', '0' );
		}

		if ( winTop > headerTop ) {
			if ( ! hasScrolledClass ) {
				$b42s_header.addClass( 'fl-theme-builder-header-scrolled' );
			}
		} else if ( hasScrolledClass ) {
			$b42s_header.removeClass( 'fl-theme-builder-header-scrolled' );
		}
	}
	
	function doShrink(){
		var winTop 	  	 = $b42s_win.scrollTop(),
			headerTop 	 = $b42s_header.data( 'original-top' ),
			headerHeight = $b42s_header.data( 'original-height' ),
			hasClass     = $b42s_header.hasClass( 'fl-theme-builder-header-shrink' );

		if ( $b42s_hasAdminBar ) {
			winTop += 32;
		}

		if ( winTop > headerTop + headerHeight ) {

			if ( ! hasClass ) {

				$b42s_header.addClass( 'fl-theme-builder-header-shrink' );

				$b42s_header.find( '.fl-row-content-wrap' ).each( function() {

					var row = $( this );

					if ( parseInt( row.css( 'padding-bottom' ) ) > 5 ) {
						row.addClass( 'fl-theme-builder-header-shrink-row-bottom' );
					}

					if ( parseInt( row.css( 'padding-top' ) ) > 5 ) {
						row.addClass( 'fl-theme-builder-header-shrink-row-top' );
					}
				} );

				$b42s_header.find( '.fl-module-content' ).each( function() {

					var module = $( this );

					if ( parseInt( module.css( 'margin-bottom' ) ) > 5 ) {
						module.addClass( 'fl-theme-builder-header-shrink-module-bottom' );
					}

					if ( parseInt( module.css( 'margin-top' ) ) > 5 ) {
						module.addClass( 'fl-theme-builder-header-shrink-module-top' );
					}
				} );
			}
		} else if ( hasClass ) {
			removeShrink();
		}
	}

		/**
		 * Removes the header shrink effect.
		 *
		 * @since 1.0
		 * @access private
		 * @method _removeShrink
		 */
	function removeShrink(){
		var rows    = $b42s_header.find( '.fl-row-content-wrap' ),
			modules = $b42s_header.find( '.fl-module-content' );

		rows.removeClass( 'fl-theme-builder-header-shrink-row-bottom' );
		rows.removeClass( 'fl-theme-builder-header-shrink-row-top' );
		modules.removeClass( 'fl-theme-builder-header-shrink-module-bottom' );
		modules.removeClass( 'fl-theme-builder-header-shrink-module-top' );
		$b42s_header.removeClass( 'fl-theme-builder-header-shrink' );
	}
});