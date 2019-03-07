function getURLVar(key) {
	var value = [];

	var query = String(document.location).split('?');

	if (query[1]) {
		var part = query[1].split('&');

		for (i = 0; i < part.length; i++) {
			var data = part[i].split('=');

			if (data[0] && data[1]) {
				value[data[0]] = data[1];
			}
		}

		if (value[key]) {
			return value[key];
		} else {
			return '';
		}
	}
}

$(document).ready(function() {
	// Image Manager
	$(document).on('click', 'a[data-toggle=\'image\']', function(e) {
                var $element = $(this);
                $element.popover({
                    theme: 'secondary sm',
                    content: '<button type="button" id="button-image" class="am-btn am-btn-primary js-modal-open"><i class="am-icon-pencil"></i></button> <button type="button" id="button-clear" class="am-btn am-btn-danger"><i class="am-icon-trash-o"></i></button>'
                });
                var $isopen  =$element.data('isopen');
                if($isopen){
                    $element.popover('close');
                    $element.removeData('isopen');
                }else{
                    $element.popover('open');
                    $element.data('isopen',true);
                }
                
                //$('#button-image').show();
		$('#button-image').on('click', function(e) {
			var $button = $(this);
			var $icon   = $button.find('> i');
                        var eajax = e;
			$.ajax({
				url: '/admin/filemanager/index?target=' + $element.parent().find('input').attr('id') + '&thumb=' + $element.attr('id'),
				type:'get',
				beforeSend: function() {
					$button.prop('disabled', true);
					if ($icon.length) {
						$icon.attr('class', 'am-icon-circle-o-notch');
					}
				},
				complete: function() {
					$button.prop('disabled', false);

					if ($icon.length) {
						$icon.attr('class', 'am-icon-pencil');
					}
				},
				success: function(html) {
                                        $('#modal-image').remove();
					$('body').append('<div id="modal-image" class="am-modal am-modal-no-btn" tabindex="-1">'+html+'</div>');
                                        var $modal = $('#modal-image');
                                        var $target = $(eajax.target);
                                            if (($target).hasClass('js-modal-open')) {
                                              $modal.modal();
                                            } 
                                            $('.am-close').on('click',function(){
                                                $modal.modal('close');
                                                //$modal.remove();
                                            })
                                        //$('#modal-image').css({display:"block",opacity:'1'});
				}
			});

			$element.popover('destroy');
		});

		$('#button-clear').on('click', function() {
			$element.find('img').attr('src', $element.find('img').attr('data-placeholder'));

			$element.parent().find('input').val('');

			$element.popover('destroy');
		});
	});
});

// Autocomplete */
(function($) {
	$.fn.autocomplete = function(option) {
		return this.each(function() {
			var $this = $(this);
			var $dropdown = $('<ul class="dropdown-menu" />');

			this.timer = null;
			this.items = [];

			$.extend(this, option);

			$this.attr('autocomplete', 'off');

			// Focus
			$this.on('focus', function() {
				this.request();
			});

			// Blur
			$this.on('blur', function() {
				setTimeout(function(object) {
					object.hide();
				}, 200, this);
			});

			// Keydown
			$this.on('keydown', function(event) {
				switch(event.keyCode) {
					case 27: // escape
						this.hide();
						break;
					default:
						this.request();
						break;
				}
			});

			// Click
			this.click = function(event) {
				event.preventDefault();

				var value = $(event.target).parent().attr('data-value');

				if (value && this.items[value]) {
					this.select(this.items[value]);
				}
			}

			// Show
			this.show = function() {
				var pos = $this.position();

				$dropdown.css({
					top: pos.top + $this.outerHeight(),
					left: pos.left
				});

				$dropdown.show();
			}

			// Hide
			this.hide = function() {
				$dropdown.hide();
			}

			// Request
			this.request = function() {
				clearTimeout(this.timer);

				this.timer = setTimeout(function(object) {
					object.source($(object).val(), $.proxy(object.response, object));
				}, 200, this);
			}

			// Response
			this.response = function(json) {
				var html = '';
				var category = {};
				var name;
				var i = 0, j = 0;

				if (json.length) {
					for (i = 0; i < json.length; i++) {
						// update element items
						this.items[json[i]['value']] = json[i];

						if (!json[i]['category']) {
							// ungrouped items
							html += '<li data-value="' + json[i]['value'] + '"><a href="#">' + json[i]['label'] + '</a></li>';
						} else {
							// grouped items
							name = json[i]['category'];
							if (!category[name]) {
								category[name] = [];
							}

							category[name].push(json[i]);
						}
					}

					for (name in category) {
						html += '<li class="dropdown-header">' + name + '</li>';

						for (j = 0; j < category[name].length; j++) {
							html += '<li data-value="' + category[name][j]['value'] + '"><a href="#">&nbsp;&nbsp;&nbsp;' + category[name][j]['label'] + '</a></li>';
						}
					}
				}

				if (html) {
					this.show();
				} else {
					this.hide();
				}

				$dropdown.html(html);
			}

			$dropdown.on('click', '> li > a', $.proxy(this.click, this));
			$this.after($dropdown);
		});
	}
})(window.jQuery);
