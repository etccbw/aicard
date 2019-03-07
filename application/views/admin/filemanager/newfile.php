<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<style type="text/css">
.product-buyer-name {
	max-width: 200px;
    overflow: hidden;
    text-overflow: ellipsis;
}
.text-center img{
	width: 200px;
	height: 100px;
}
</style>
<div class="am-modal-dialog">
    <div class="am-modal-hd">
      <a href="javascript: void(0)" class="am-close am-close-spin js-modal-close" data-am-modal-close>&times;</a>
    </div>
    <div class="am-modal-bd">
     <div class="am-g">
        <div class="am-u-sm-4">
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
		    <div class="am-u-sm-7">
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
          <div class="text-center"><i class="am-icon-folder-o fa-5x"></i></div>
          <label class= "product-buyer-name">
            <input type="checkbox"  dataid="<?=$v['id']?>"   name="path[]" value="<?=$v['path']?>" />
            <?=substr($v['name'],0,15). '...'?></label>
          <?php endif; ?>
          <?php if ($v['type'] == 'image'): ?>
         
	      <img src="<?=$v['href']?>" alt="<?=$v['name']?>" title="<?=$v['name']?>" style="width: 100px;" />
          <label class= "product-buyer-name">
            <input type="checkbox"  dataid="<?=$v['id']?>"  name="path[]" value="<?=$v['path']?>" />
            <?=substr($v['name'],0,15). '...'?></label>
          <?php endif; ?>
        </div>
	<?php endforeach; ?>
      </div>
      <br />
      <div class="am-g">
	  
	  <div class="am-u-sm-6">
	      <div class="modal-footer"><?=$pagination?></div>
	  </div>
	  
      </div>
      
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
	var url = '/admin/filemanager/index?directory=<?=$directory?>';

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
				url: '/admin/filemanager/upload?directory=<?=$directory?>&&cat_name=<?=$url?>',
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
