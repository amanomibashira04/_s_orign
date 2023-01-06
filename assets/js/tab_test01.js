document.addEventListener( 'DOMContentLoaded', function() {
	// タブに対してクリックイベントを適用
	const tabs = document.getElementsByClassName( 'a-tab' );
	for ( let i = 0; i < tabs.length; i++ ) {
		tabs[ i ].addEventListener( 'click', tabSwitch, false );
	}
	// タブをクリックすると実行する関数
	function tabSwitch() {
		// タブのclassの値を変更
		document.getElementsByClassName( 'js-is-active' )[ 0 ].classList.remove( 'js-is-active' );
		this.classList.add( 'js-is-active' );
		// コンテンツのclassの値を変更
		document.getElementsByClassName( 'js-is-show' )[ 0 ].classList.remove( 'js-is-show' );
		const arrayTabs = Array.prototype.slice.call( tabs );
		const index = arrayTabs.indexOf( this );
		document.getElementsByClassName( 'a-panel' )[ index ].classList.add( 'js-is-show' );
	}
}, false );

jQuery( function( $ ) {
	$( '.b-tab' ).click( function() {
		$( '.jq-is-active' ).removeClass( 'jq-is-active' );
		$( this ).addClass( 'jq-is-active' );
		$( '.jq-is-show' ).removeClass( 'jq-is-show' );
		// クリックしたタブからインデックス番号を取得
		const index = $( this ).index();
		// クリックしたタブと同じインデックス番号をもつコンテンツを表
		$( '.b-panel' ).eq( index ).addClass( 'jq-is-show' );
	} );
} );
