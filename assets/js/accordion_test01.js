// sk-accordion
const menu = document.querySelectorAll( '.js-menu' );
function toggle() {
	const content = this.nextElementSibling;
	this.classList.toggle( 'is-active' );
	content.classList.toggle( 'is-open' );
}
for ( let i = 0; i < menu.length; i++ ) {
	menu[ i ].addEventListener( 'click', toggle );
}

// .s_01 .accordion_one
jQuery( function( $ ) {
	$( '.js-accordion__title' ).on( 'click', function() {
		$( this ).toggleClass( 'is-open' );
		$( this ).next().slideToggle( 300 );
	} );
} );
