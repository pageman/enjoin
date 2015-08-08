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
				maxChars:2,
				defaultText:'Add Interests',
				onRemoveTag:function(value,elem_tags){
					console.log(tag.buttons.text());
					$('.interest-lists .item .btn-primary:contains("' + $(value).text() + '")').parent('li').removeClass('hide');
				},
				onAddTag:function(value){
					console.log(value);
				}
			});

			tag.buttons.click(function(e) {
				$this = $(this);
				value = $this.html();
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