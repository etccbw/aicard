
<link rel="stylesheet" href="<?php echo base_url('public/css/time.css'); ?>">
<div class="edit-box edit-box-info">
	<div class="edit-carousel edit-images">
	  <div class="edit-shop-header">
	  	<h3>企业招聘</h3>
	  </div>
		<div class="edit-shop-content">
		  <form class="ivu-form ivu-form-label-right">
		    <div class="ivu-form-item">
		      <label class="ivu-form-item-label" style="width:70px">标题：</label>
		      <div class="ivu-form-item-content" style="margin-left: 70px;">
		      	 <input type="hidden" class="dt" value="<?=$dt?>" name="dt">
		      	 <input type="hidden" value="<?=$sid?>" name="sid">
		      	<div class="ivu-input-wrapper ivu-input-type" style="width:340px;">
		      	 <i class="ivu-icon ivu-icon-load-c ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i>
		      	 <div class="el-input el-input--small" spellcheck="false">
		      	 <input autocomplate="off" spellcheck="false" type="text" placeholder="企业招聘" maxlength="15" class="el-input__inner" name="title" value="<?php if(!empty($set_info)){ echo $set_info['title']; }else{echo '企业招聘';} ?>">
		      	 </div>
		      	</div>
		      </div>
		    </div>
		  	<div class="ivu-form-item">
		      <div class="el-table__header-wrapper el-table">
		      	<table cellspacing="0" cellpadding="0" border="0" class="el-table_header" style="width:450px;">
		      		<tr>
		      		<th colspan="1" rowspan="1" class="is-leaf"> 招聘职位</th>
		      		<th colspan="1" rowspan="1" class="is-leaf"> 职位薪资</th>
		      		<th colspan="1" rowspan="1" class="is-leaf"> 经验要求</th>
		      		<th colspan="1" rowspan="1" class="is-leaf"> 状态</th>
		      		<th colspan="1" rowspan="1" class="is-leaf"> 操作</th>
                    </tr>
                  <?php 
                  if(!empty($tvinfo)){ 
                    foreach ($tvinfo as $v){ ?>  
                  <tr class="el-table_row">
		      		<td colspan="1" rowspan="1" class="is-leaf"> <?=$v['job']?></td>
		      		<td colspan="1" rowspan="1" class="is-leaf"> <?=$v['salary']?></td>
		      		<td colspan="1" rowspan="1" class="is-leaf"> <?=$v['experience']?></td>
		      		<td colspan="1" rowspan="1" class="is-leaf"> 
		      		  <div role="switch" class="el-switch 
                <?php if(!empty($set_info)){$idarr = explode(',',$set_info['intvid']);
                $isin = in_array($v['id'],$idarr);
                if($isin){echo 'is-checked';}} ?>">
		      		  	<input type="checkbox" true-value="1" class="el-switch__input" name="news[]" value="<?=$v['id']?>" <?php if(!empty($set_info)){if($isin){echo 'checked="checked"';}} ?> >
		      		  	<span class="el-switch__core">
		      		  	   <span class="el-switch__button"></span>
		      		  	</span>
		      		  </div>
		      		</td>
		      		<td colspan="1" rowspan="1" class="is-leaf"> 
		      		  <div class="el-button-group">
		      		  	<button type="button" class="el-button el-button--default el-button--mini"> <i class="el-icon-edit" nid="<?=$v['id']?>"></i></button>
		      		  	<button type="button" class="el-button el-button--default el-button--mini"><i class="el-icon-delete" nid="<?=$v['id']?>"></i></button>
		      		  </div>
		      		</td>
                    </tr>
                  <?php } ?>
		      	</table>
                  <?php }else{ ?>
		      	</table>
                  <div class="el-table_empty-block" style="width:450px;">
                  	<span class="el-table_empty-text"> 暂无数据</span>
                  </div>
                <?php } ?>
		      </div>
		    </div>
                  <div class="bottom_ctl">
                  	<button type="button" class="el-button el-button--primary el-button--mini" onclick="one()">
                    <span>添加招聘位</span>
                  	</button>
                  </div>
		  	<div class="ivu-form-item ivu-sub" style="margin-top: 15px;">
		      	 <input type="button" value="提交" class="info_sub">
		    </div>
		  </form>
		  <div class="el-dialog__wrapper dialog"  id="fade" style="z-index:2009;display:none;">
		  <div class="el-dialog el-dialog--center" style="width:900px;margin-top:15vh;">
		  	<div class="el-dialog__header">
		  	  <span class="el-dialog__title">添加招聘</span>
		  	  <button type="button" aria-label="Close" class="el-dialog__headerbtn">
		  	  	<i class="el-dialog__close el-icon el-icon-close" onclick="two()"></i>
		  	  </button>
		  	</div>
            <div class="el-dialog__body">
              <div class="edit-item">
              	 <form class="el-form demo-ruleForm ivu-form ivu-form-label-right">
              	 	<div class="el-row">
              	 	  <div class="el-col el-col-12">
              	 	  	<div class="el-form-item is-success is-required">
              	 	  	  <label for="cp_recruitment_name" class="el-form-item__label" style="width: 100px;">招聘职位:</label>
              	 	  	  <div class="el-form-item__content" style="margin-left: 100px;">
              	 	  	  	<div class="el-input el-input--small" spellcheck="false">
                              <input autocomplete="off" type="text" placeholder="请输入招聘职位，15个字符内" size="small" row="2" validateevent="true" clearable="true" class="el-input__inner etc-input" name="job">
                              <input type="hidden" name="id" value=''>
              	 	  	  	</div>
                          <div class="el-form-item__error" style="display:none;">职位不能为空</div>
              	 	  	  </div>
              	 	  	</div>
              	 	  </div>
              	 	  <div class="el-col el-col-12">
              	 	  	<div class="el-form-item is-success is-required">
              	 	  	  <label for="cp_salary" class="el-form-item__label" style="width: 100px;">职位薪资:</label>
              	 	  	  <div class="el-form-item__content" style="margin-left: 100px;">
              	 	  	  	<div class="el-input el-input--small">
                              <input autocomplete="off" type="text" placeholder="" size="small" row="2" validateevent="true" clearable="true" class="el-input__inner etc-input" name="salary">
              	 	  	  	</div>
                          <div class="el-form-item__error" style="display:none;">职位薪资不能为空</div>
              	 	  	  </div>
              	 	  	</div>
              	 	  </div>
              	 	</div>
              	 	<div class="el-row">
              	 	  <div class="el-col el-col-12">
              	 	  	<div class="el-form-item is-success is-required">
              	 	  	  <label for="cp_bussiness_life" class="el-form-item__label" style="width: 100px;">经验要求:</label>
              	 	  	  <div class="el-form-item__content" style="margin-left: 100px;">
              	 	  	  	<div class="el-select el-select--small" style="width: 300px;">
              	 	  	  	 <div class="el-input el-input--small el-input--suffix">
                              <input autocomplete="off" type="text" placeholder="请选择" size="small" row="2" readonly="readonly" class="el-input__inner etc-xiala" name="experience">
              	 	  	  	 </div>
                          <div class="el-form-item__error" style="display:none;">经验要求不能为空</div>
              	 	  	  	</div>
              	 	  	  </div>
              	 	  	</div>
                       <div id="etc-cn" class="etc-conn" style="display:none;">
                       	<ul class="el-scrollbar__view el-select-dropdown__list" style="position:relative;">
                       	  <li class="el-select-dropdown__item">应届毕业生</li>
                       	  <li class="el-select-dropdown__item">3年及以下</li>
                       	  <li class="el-select-dropdown__item">3-5年</li>
                       	  <li class="el-select-dropdown__item">5-10年</li>
                       	  <li class="el-select-dropdown__item">10年以上</li>
                       	  <li class="el-select-dropdown__item">不限</li>
                       	</ul>
                       </div>
              	 	  </div>
              	 	  <div class="el-col el-col-12">
              	 	  	<div class="el-form-item is-success is-required">
              	 	  	  <label for="cp_education" class="el-form-item__label" style="width: 100px;">学历要求:</label>
              	 	  	  <div class="el-form-item__content" style="margin-left: 100px;">
              	 	  	  	<div class="el-select el-select--small" style="width: 300px;">
              	 	  	  	 <div class="el-input el-input--small el-input--suffix">
                              <input autocomplete="off" type="text" placeholder="请选择" size="small" row="2" readonly="readonly" class="el-input__inner etc-xiala" name="degree">
              	 	  	  	 </div>
                          <div class="el-form-item__error" style="display:none;">学历要求不能为空</div>
              	 	  	  	</div>
              	 	  	  </div>
              	 	  	</div>
                       <div class="etc-drg" id="etc-dre" style="display:none;">
                       	<ul class="el-scrollbar__view el-select-dropdown__list" style="position:relative;">
                       	  <li class="el-select-drg">大专</li>
                       	  <li class="el-select-drg">本科</li>
                       	  <li class="el-select-drg">研究生</li>
                       	  <li class="el-select-drg">硕士</li>
                       	  <li class="el-select-drg">不限</li>
                       	</ul>
                       </div>
              	 	  </div>
              	 	</div>
              	 	<div class="el-row">
              	 	  <div class="el-col el-col-12">
              	 	  	<div class="el-form-item is-success is-required">
              	 	  	  <label for="cp_recruitment_name" class="el-form-item__label" style="width: 100px;">联系人:</label>
              	 	  	  <div class="el-form-item__content" style="margin-left: 100px;">
              	 	  	  	<div class="el-input el-input--small" spellcheck="false">
                           <div class="el-input el-input--small el-input--suffix">
                              <input autocomplete="off" type="text" placeholder size="small" row="2" validateevent="true" clearable="true" class="el-input__inner etc-input" name="connecter">
                           </div>
                           <div class="el-form-item__error" style="display:none;">联系人不能为空</div>
              	 	  	  	</div>
              	 	  	  </div>
              	 	  	</div>
              	 	  </div>
              	 	  <div class="el-col el-col-12">
              	 	  	<div class="el-form-item is-success is-required">
              	 	  	  <label for="cp_salary" class="el-form-item__label" style="width: 100px;">详细地址:</label>
              	 	  	  <div class="el-form-item__content" style="margin-left: 100px;">
              	 	  	  	<div class="el-input el-input--small">
                           <div class="el-input el-input--small el-input--suffix">
                              <input autocomplete="off" type="text" placeholder="请输入详细地址" size="small" row="2" validateevent="true" clearable="true" class="el-input__inner etc-input" name="address">
                           </div>
                           <div class="el-form-item__error" style="display:none;">详细地址不能为空</div>
              	 	  	  	</div>
              	 	  	  </div>
              	 	  	</div>
              	 	  </div>
              	 	</div>
              	 	<div class="el-row">
              	 	  <div class="el-col el-col-12">
              	 	  	<div class="el-form-item is-success is-required">
              	 	  	  <label for="stop_date" class="el-form-item__label" style="width: 100px;">招聘结束:</label>
              	 	  	  <div class="el-form-item__content" style="margin-left: 100px;">
              	 	  	  	<div class="el-date-editor el-input el-input--prefix el-input--suffix el-date-editor--date" style="width:300px;">
                              <input autocomplete="off" type="text" placeholder="选择日期" size="small" row="2" validateevent="true" clearable="true" prefixicon="el-icon-date" class="el-input__inner etc-end" name="endtime" readonly="readonly">
              	 	  	  	</div>
                           <div class="el-form-item__error" style="display:none;">招聘结束时间不能为空</div>
              	 	  	  </div>
              	 	  	</div>
              	 	  </div>
		                  <h3 id='h3Ele' style="display:none;"></h3>
              	 	  	  <div id='schedule-box' class="boxshaw" style="display:none;"></div>
              	 	  <div class="el-col el-col-12"></div>
              	 	</div>
              	 	<div class="el-row">
              	 	  <div class="el-col el-col-24">
              	 	  	<div class="el-form-item">
              	 	  	  <label class="el-form-item__label" style="width: 100px;">招聘详情:</label>
              	 	  	  <div class="el-form-item__content" style="margin-left: 100px;">
              	 	  	  	<div class="el-input el-input--small" spellcheck="false">
                              <textarea  sellcheck="false" placeholder="" size="small"  row="6" class="ivu-input ivu-text" name="detail"  style="width:100%;height: 260px;"></textarea>
              	 	  	  	</div>
              	 	  	  </div>
              	 	  	</div>
              	 	  </div>
              	 	</div>
              	 <div style="text-align:center;">
              	 	<!-- <button type="button" class="el-button el-button--success">
              	 		<span>确认添加</span>
              	 	</button> -->
              	 	<input type="button" name="n_sub" value="确认提交" class="el-button el-button--success add_tvinfo">
              	 </div>
              	 </form>
              </div>
            </div>
		  </div>
		</div>
		</div>
	</div>
</div>
<style>
		*{
			margin: 0;
			padding: 0;
		}
		ul{
			list-style: none;
		}
		#schedule-box{
			width: 320px;
			margin: 43px auto;
			padding: 35px 20px;
			font-size: 13px;
			margin-left: 90px;
			z-index: 2044;
            position: fixed;
            top: 516;
            background: #fff;
		}
		.schedule-hd{
			display: flex;
			justify-content: space-between;
			padding: 0 15px;
		}
		.today{
			flex: 1;
			text-align: center;
		}
		.ul-box{
			overflow: hidden;
		}
		.ul-box > li{
			float: left;
			width: 14.28%;
			text-align: center;
			padding: 5px 0;
		}
		.other-month{
			color: #999999;
		}
		.current-month{
			color: #333333;
		}
		.today-style{
			border-radius: 50%;
			background: #58d321;
		}
		.arrow{
			cursor: pointer;
		}
		.dayStyle{
			display: inline-block;
			width: 35px;
			height: 35px;
			border-radius: 50%;
			text-align: center;
			line-height: 35px;
			cursor: pointer;
		}
		.current-month > .dayStyle:hover{
			background: #00BDFF;
			color: #ffffff;
		}
		.today-flag{
			background: #00C2B1;
			color: #fff;
		}
		.boxshaw{
			box-shadow: 2px 2px 15px 2px #e3e3e3;
		}
		.selected-style {
			background: #00BDFF;
			color: #ffffff;
		}
		#h3Ele{
			text-align: center;
			padding: 10px;
		}
	</style>
<script src="<?php echo base_url('public/js/schedule.js'); ?>"></script>
<script type="text/javascript">
	var mySchedule = new Schedule({
		el: '#schedule-box',
		//date: '2018-9-20',
		clickCb: function (y,m,d) {
			document.querySelector('#h3Ele').innerHTML = y+'-'+m+'-'+d	
		var time = $('#h3Ele').html();
		$('[name=endtime]').val(time);
		$('.etc-checked').removeClass('etc-checked');
		 document.getElementById('schedule-box').style.display='none';
		},
		nextMonthCb: function (y,m,d) {
			document.querySelector('#h3Ele').innerHTML = y+'-'+m+'-'+d	
		var time = $('#h3Ele').html();
		$('[name=endtime]').val(time); 
    		$('.etc-checked').removeClass('etc-checked');   		
		},
		nextYeayCb: function (y,m,d) {
			document.querySelector('#h3Ele').innerHTML = y+'-'+m+'-'+d	
		var time = $('#h3Ele').html();
		$('[name=endtime]').val(time); 
    		$('.etc-checked').removeClass('etc-checked');   		
		},
		prevMonthCb: function (y,m,d) {
			document.querySelector('#h3Ele').innerHTML = y+'-'+m+'-'+d	
		var time = $('#h3Ele').html();
		$('[name=endtime]').val(time);  
    		$('.etc-checked').removeClass('etc-checked');  		
		},
		prevYearCb: function (y,m,d) {
			document.querySelector('#h3Ele').innerHTML = y+'-'+m+'-'+d	
		var time = $('#h3Ele').html();
		$('[name=endtime]').val(time);   
    		$('.etc-checked').removeClass('etc-checked'); 		
		}
	});
    //弹出图片裁剪框
    function one(){
            document.getElementById('fade').style.display='block';

        }
    function two(){
        document.getElementById('fade').style.display='none';
    } 
    $('.el-switch').click(function(){
    	if($(this).hasClass('is-checked')){
    		$(this).removeClass('is-checked');
    		$(this).children('input').attr('checked',false);
    	}else{
    		$(this).addClass('is-checked');
    		$(this).children('input').attr('checked',true);
    	}
    })
    $('.etc-xiala').click(function(){
    	if($(this).hasClass('etc-checked')){
    		$(this).removeClass('etc-checked');
    		$(this).parents('.el-form-item').siblings('div').css('display','none');
    	}else{
    		$(this).addClass('etc-checked');
    		$(this).parents('.el-form-item').siblings('div').css('display','block');
    	}
    		
    })  
    $('.etc-end').click(function(){
    	if($(this).hasClass('etc-checked')){
    		$(this).removeClass('etc-checked');
    		$('.boxshaw').css('display','none');
    	}else{
    		$(this).addClass('etc-checked');
    		$('.boxshaw').css('display','block');
    	}
    		
    })
    $('.el-icon-delete').click(function(){
    	var id = $(this).attr("nid");
		var dt = $('[name=dt]').val();
		var sid = $('[name=sid]').val();
    	var nurl = "<?php echo site_url('website/homepage/del_tv') ?>";
    	$.post(nurl,{dt:dt,sid:sid,id:id},function(data){
           if(data){
	          $('.etc-info').html("");
	          $('.etc-info').append(data.set);
           	alert('删除成功！')
           }else{
           	alert('删除失败！')
           }
        },'json');
    })
    $('.el-icon-edit').click(function(){
    	var id = $(this).attr("nid");
    	var nurl = "<?php echo site_url('website/homepage/edit_tvinfo') ?>";
    	$.post(nurl,{id:id},function(data){
           if(data){
        document.getElementById('fade').style.display='block';
           	$('[name=id]').val(data.id);
           	$('[name=connecter]').val(data.connecter);
           	$('[name=address]').val(data.address);
           	$('[name=detail]').val(data.detail);
           	$('[name=endtime]').val(data.endtime);
           	$('[name=job]').val(data.job);
           	$('[name=salary]').val(data.salary);
           	$('[name=experience]').val(data.experience);
           	$('[name=degree]').val(data.degree);
           }
        },"json");
    })
 
$('.el-select-drg').click(function(){
 	$('[name=degree]').val($(this).text());
 	$('.el-select-drg').removeClass('selected');
 	$(this).addClass('selected');
 	$('#etc-dre').css('display','none');
 	$('.etc-checked').removeClass('etc-checked');
 })
 $('.el-select-dropdown__item').click(function(){
 	$('[name=experience]').val($(this).text());
 	$('.el-select-dropdown__item').removeClass('selected');
 	$(this).addClass('selected');
 	$('#etc-cn').css('display','none');
    $('.etc-checked').removeClass('etc-checked');
 })
$('.info_sub').click(function(){
  var dt = $('[name=dt]').val();
  var sid = $('[name=sid]').val();
  var title = $('[name=title]').val();
  var news = new Array();
      $('[checked=checked]').each(function(){
        var src = $(this).val();
        news.push(src);
      })
      if(news==''|| news==null){
        news = '0';
      }
  var nurl = "<?php echo site_url('website/homepage/tv_sub') ?>";
  $.post(nurl,{dt:dt,sid:sid,title:title,news:news},function(data){
    if(data){
      $('.edit-coms > .edit-content').html('');
      $.each(data.tarr,function(index,item){
            $('.edit-coms > .edit-content').append(item);
      })
    }
    },"json");
})
$('.etc-input').blur(function(){
  var val = $(this).val();
  if(val=='' || val==null){
     $(this).parents('.el-form-item').addClass('is-error');
     $(this).parents('.el-form-item').removeClass('is-success');
     $(this).parent().siblings('.el-form-item__error').css('display','block');
  }else{
     $(this).parents('.el-form-item').addClass('is-success');
     $(this).parents('.el-form-item').removeClass('is-error');
     $(this).parent().siblings('.el-form-item__error').css('display','none');
   }
})
$('.add_tvinfo').click(function(){
      $('.el-input__inner').each(function(){
        var val = $(this).val();
        if(val=='' || val==null){
           $(this).parents('.el-form-item').addClass('is-error');
           $(this).parents('.el-form-item').removeClass('is-success');
           $(this).parent().siblings('.el-form-item__error').css('display','block');
        return false;
        }else{
           $(this).parents('.el-form-item').addClass('is-success');
           $(this).parents('.el-form-item').removeClass('is-error');
           $(this).parent().siblings('.el-form-item__error').css('display','none');
         }
      })
      if($('.el-form-item').hasClass('is-error')){
        return false;
      }else{
      var dt = $('[name=dt]').val();
      var sid = $('[name=sid]').val();
      var address = $('[name=address]').val();
      var job = $('[name=job]').val();
      var experience = $('[name=experience]').val();
      var degree = $('[name=degree]').val();
      var salary = $('[name=salary]').val();
      var detail = $('[name=detail]').val();
      var id = $('[name=id]').val();
      var endtime = $('[name=endtime]').val();
      var connecter = $('[name=connecter]').val();
      nurl = "<?php echo site_url('website/homepage/add_tvinfo') ?>";
      $.post(nurl,{dt:dt,sid:sid,address:address,job:job,experience:experience,degree:degree,salary:salary,detail:detail,id:id,endtime:endtime,connecter:connecter},function(data){
        if(data){
          document.getElementById('fade').style.display='none';
          alert('提交成功！');
          $('.etc-info').html("");
          $('.etc-info').append(data.set);
        }else{
          alert('提交失败！');
        }
        },"json");
      }
})
</script>