(function($) {
	$win = $(window);
	$docu = $(document);

	tag = {
		buttons: $('.interest-lists .item .btn-primary'),
		textarea: $('#searchInterest'),
		tagsList: $('#interest-tags'),
		init: function(){
			tag.textarea.tagsInput({
				height:'auto',
				width:'100%',
				defaultText:'Add Interests',
				onRemoveTag:function(value){
					$('.interest-lists .item .btn-primary:contains("' + value + '")').parent('li').removeClass('hide');
				}
			});

			tag.buttons.click(function(e) {
				$this = $(this);
				value = $this.text();
				$(tag.textarea).addTag(value);
				$this.parent('li').addClass('hide')	;
			});


		}
	}

	$docu.ready(function() {
		$('.carousel').carousel({
			interval:false,
			wrap:false
		});

		tag.init();
	});

})( jQuery );