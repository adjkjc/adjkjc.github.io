jQuery(document).ready(function($) {

	$(".zilla-tabs").tabs();

	$(".zilla-toggle").each( function () {
		var $this = $(this);
		if( $this.attr('data-id') == 'closed' ) {
			$this.accordion({ header: '.zilla-toggle-title', collapsible: true, active: false  });
		} else {
			$this.accordion({ header: '.zilla-toggle-title', collapsible: true});
		}

		$this.on('accordionactivate', function( e, ui ) {
			$this.accordion('refresh');
		});

		$(window).on('resize', function() {
			$this.accordion('refresh');
		});
	});

});