
<base href="<?php  echo base_url();?>"/>
<?php echo $header?>
        <tbody>
        <?php foreach($items as $v):?>
          <tr>
            <video src="<?=$v['video']?>" controls="controls" height="160px" width="160px" margin: 20px;></video></td>
            </tr>
        <?php endforeach?>
        </tbody>
       
