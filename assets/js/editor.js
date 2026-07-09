( function ( blocks, element ) {

	var el = element.createElement;

	blocks.registerBlockType(
		'wpcn/previous-next-post',
		{
			title: 'WPConstructor Previous Next Post',
			icon: 'arrow-right-alt',
			category: 'widgets',

			edit: function () {
				return el(
					'p',
					null,
					'WPConstructor Previous Next Post'
				);
			},

			save: function () {
				return null;
			}
		}
	);

} )(
	window.wp.blocks,
	window.wp.element
);