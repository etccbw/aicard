<div class="am-modal-dialog">
    <div class="am-modal-hd">
      <a href="javascript: void(0)" class="am-close am-close-spin js-modal-close" data-am-modal-close>&times;</a>
    </div>
    <div class="am-modal-bd">
     <div class="am-g">
        <div class="am-u-sm-6">
	  <a href="<?=$parent?>" data-toggle="tooltip" title="<?=$button_parent?>" id="button-parent" class="am-btn am-btn-default am-btn-xs"><i class="am-icon-level-up"></i></a> 
	  <a href="<?=$refresh?>" data-toggle="tooltip" title="<?=$button_refresh?>" id="button-refresh" class="am-btn am-btn-default am-btn-xs"><i class="am-icon-refresh"></i></a>
          <button type="button" data-toggle="tooltip" title="<?=$button_upload?>" id="button-upload" class="am-btn am-btn-primary am-btn-xs"><i class="am-icon-upload"></i></button>
          <button type="button" data-toggle="tooltip" title="<?=$button_folder?>" id="button-folder" class="am-btn am-btn-default am-btn-xs"><i class="am-icon-folder"></i></button>
          <button type="button" data-toggle="tooltip" title="<?=$button_delete?>" id="button-delete" class="am-btn am-btn-danger am-btn-xs"><i class="am-icon-trash-o"></i></button>
        </div>
        <div class="am-u-sm-6">
	    <div class="am-form-group">
		<div class="am-g">
		    <div class="am-u-sm-3">
			<input type="text" name="search" value="<?=$filter_name?>" placeholder="<?=$entry_search?>" class="form-control">
		    </div>
		    <div class="am-u-sm-3">
			<button type="button" data-toggle="tooltip" title="<?=$button_search?>" id="button-search" class="am-btn am-btn-primary am-btn-xs"><i class="am-icon-search"></i></button>
		    </div>
		</div>
	    </div>
        </div>
      </div>
      <hr />
      
      <div class="am-g">
	<?php foreach ($images as $key=>$v): ?>
        <div class="am-u-sm-3 text-center">
          <?php if ($v['type'] == 'directory'): ?>
          <div class="text-center"><a href="<?=$v['href']?>" class="directory" style="vertical-align: middle;"><i class="am-icon-folder-o fa-5x"></i></a></div>
          <label>
            <input type="checkbox" name="path[]" value="<?=$v['path']?>" />
            <?=$v['name']?></label>
          <?php endif; ?>
          <?php if ($v['type'] == 'image'): ?>
          <a href="<?=$v['href']?>" class="thumbnail"><img src="<?=$v['thumb']?>" alt="<?=$v['name']?>" title="<?=$v['name']?>" /></a>
          <label>
            <input type="checkbox" name="path[]" value="<?=$v['path']?>" />
            <?=$v['name']?></label>
          <?php endif; ?>
        </div>
	<?php endforeach; ?>
      </div>
      <br />
      <div class="modal-footer"><?=$pagination?></div>
    </div>

</div>
<script type="text/javascript"><!--
<?php if ($target): ?>
$('a.thumbnail').on('click', function(e) {
	e.preventDefault();

	<?php if ($thumb): ?>
	$('#<?=$thumb?>').find('img').attr('src', $(this).find('img').attr('src'));
	<?php endif; ?>

	$('#<?=$target?>').val($(this).parent().find('input').val());

	$('#modal-image').modal('close');
	$('.am-dimmer').hide();
});
<?php endif; ?>

$('a.directory').on('click', function(e) {
	e.preventDefault();

	$('#modal-image').load($(this).attr('href'));
});

$('.pagination a').on('click', function(e) {
	e.preventDefault();

	$('#modal-image').load($(this).attr('href'));
});

$('#button-parent').on('click', function(e) {
	e.preventDefault();

	$('#modal-image').load($(this).attr('href'));
});

$('#button-refresh').on('click', function(e) {
	e.preventDefault();

	$('#modal-image').load($(this).attr('href'));
});

$('input[name=\'search\']').on('keydown', function(e) {
	if (e.which == 13) {
		$('#button-search').trigger('click');
	}
});

$('#button-search').on('click', function(e) {
	var url = '/admin/filemanager&directory=<?=$directory?>';

	var filter_name = $('input[name=\'search\']').val();

	if (filter_name) {
		url += '&filter_name=' + encodeURIComponent(filter_name);
	}

	<?php if ($thumb): ?>
	url += '&thumb=' + '<?=$thumb?>';
	<?php endif; ?>

	<?php if ($target): ?>
	url += '&target=' + '<?=$target?>';
	<?php endif; ?>

	$('#modal-image').load(url);
});
//--></script>
<script type="text/javascript"><!--
$('#button-upload').on('click', function() {
	$('#form-upload').remove();

	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file[]" value="" multiple="multiple" /></form>');

	$('#form-upload input[name=\'file[]\']').trigger('click');

	if (typeof timer != 'undefined') {
    	clearInterval(timer);
	}

	timer = setInterval(function() {
		if ($('#form-upload input[name=\'file[]\']').val() != '') {
			clearInterval(timer);

			$.ajax({
				url: '/admin/filemanager/upload?directory=<?=$directory?>',
				type: 'post',
				dataType: 'json',
				data: new FormData($('#form-upload')[0]),
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function() {
					$('#button-upload i').replaceWith('<i class="am-icon-circle-o-notch am-icon-spin"></i>');
					$('#button-upload').prop('disabled', true);
				},
				complete: function() {
					$('#button-upload i').replaceWith('<i class="am-icon-upload"></i>');
					$('#button-upload').prop('disabled', false);
				},
				success: function(json) {
					console.log(json);
					if (json['error']) {
						alert(json['error']);
					}

					if (json['success']) {
						alert(json['success']);
						$('#button-refresh').trigger('click');
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		}
	}, 500);
});

$('#button-folder').popover({
	trigger: 'click',
	content: function() {
		html  = '<div class="am-form-group folder">';
		html += '  <input type="text" name="folder" value="" placeholder="<?=$entry_folder?>" class="form-control">';
		html += '  <span class="input-group-btn"><button type="button" title="<?=$button_folder?>" id="button-create" class="am-btn am-btn-primary am-btn-xs"><i class="am-icon-plus-circle"></i></button></span>';
		html += '</div>';
		return html;
	},
	theme:"secondary",
});
$('#button-create').on('click', function() {
	alert();
	$.ajax({
		url: '/admin/filemanager/folder?directory=<?=$directory?>',
		type: 'post',
		dataType: 'json',
		data: 'folder=' + encodeURIComponent($('input[name=\'folder\']').val()),
		beforeSend: function() {
			$('#button-create').prop('disabled', true);
		},
		complete: function() {
			$('#button-create').prop('disabled', false);
		},
		success: function(json) {
			if (json['error']) {
				alert(json['error']);
			}

			if (json['success']) {
				alert(json['success']);
				$('#button-folder').popover('close');
				$('#button-refresh').trigger('click');
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});


$('#modal-image #button-delete').on('click', function(e) {
	if (confirm('<?=$text_confirm?>')) {
		$.ajax({
			url: '/admin/filemanager/delete',
			type: 'post',
			dataType: 'json',
			data: $('input[name^=\'path\']:checked'),
			beforeSend: function() {
				$('#button-delete').prop('disabled', true);
			},
			complete: function() {
				$('#button-delete').prop('disabled', false);
			},
			success: function(json) {
				if (json['error']) {
					alert(json['error']);
				}

				if (json['success']) {
					alert(json['success']);

					$('#button-refresh').trigger('click');
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	}
});
//--></script>
