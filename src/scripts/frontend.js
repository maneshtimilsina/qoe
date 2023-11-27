const debounce = ( func, delay ) => {
	let inDebounce;
	return function() {
		const context = this;
		const args = arguments;
		clearTimeout( inDebounce );
		inDebounce = setTimeout( () => func.apply( context, args ), delay );
	};
};

document.addEventListener( 'DOMContentLoaded', function() {
	const scrollUp = document.getElementById( 'back-to-top' );

	if ( scrollUp ) {
		const scrollHandler = debounce( function() {
			const scrollPosition =
				window.scrollY || document.body.scrollTop;

			if ( scrollPosition > 300 ) {
				scrollUp.classList.add( 'is-visible' );
			} else {
				scrollUp.classList.remove( 'is-visible' );
			}
		}, 250 );

		window.addEventListener( 'scroll', scrollHandler );

		scrollUp.addEventListener( 'click', ( e ) => {
			e.preventDefault();

			window.scrollTo( {
				top: 0,
				behavior: 'smooth',
			} );
		} );
	}
} );
