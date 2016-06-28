<?php
$array1=array(1,3,5,12,14,26);
$array2=array(9,10);
$array3=array(6,7,15,16);
$sql="select time, number, data from {$this->prename}data where type={$this->type} order by number desc,time desc limit {$args[0]}";
?>

<?php if($data=$this->getRows($sql)): ?>
	<?php foreach($data as $var): ?>
		<?php if(in_array($this->type,$array1)): ?>
			<?php $number=explode('-',$var['number']);?>
			<tr align=center style="border-collapse:collapse;border-spacing:0px;color:#FFF;font:12px/180% '微软雅黑',Arial,'Microsoft Sans Serif','宋体';text-align:lext"><td style="margin:0px;padding:0px;border-collapse:collapse;border-spacing:0px;color:#FFF;font:12px/180% '微软雅黑',Arial,'Microsoft Sans Serif','宋体';text-align:lext"><div style="padding:0px 20px;height:25px; line-height:25px;word-break:break-all;overflow:hidden;BORDER-BOTTOM: 1px dashed #5c8482;color:#FFFFFF;"><?=$number[1]?>期</div></td><td title='<?=$var['data']?>'><div style="padding:0px 20px;height:25px; line-height:25px;word-break:break-all;overflow:hidden;BORDER-BOTTOM: 1px dashed #5c8482;color:#90ff00;"><?=$var['data']?></div></td></tr>
		<?php elseif(in_array($this->type,$array2)): ?>
			<?php $number= substr($var['number'],-3); ?>
    		<tr align=center style="border-collapse:collapse;border-spacing:0px;color:#FFF;font:12px/180% '微软雅黑',Arial,'Microsoft Sans Serif','宋体';text-align:lext"><td style="margin:0px;padding:0px;border-collapse:collapse;border-spacing:0px;color:#FFF;font:12px/180% '微软雅黑',Arial,'Microsoft Sans Serif','宋体';text-align:lext"><div style="padding:0px 20px;height:25px; line-height:25px;word-break:break-all;overflow:hidden;BORDER-BOTTOM: 1px dashed #5c8482;color:#FFFFFF;"><?=$number?>期</div></td><td title='<?=$var['data']?>'><div style="padding:0px 20px;height:25px; line-height:25px;word-break:break-all;overflow:hidden;BORDER-BOTTOM: 1px dashed #5c8482;color:#90ff00;"><?=$var['data']?></div></td></tr>
		<?php elseif(in_array($this->type,$array3)): ?>
			<?php $number= substr($var['number'],-2); ?>
    		<tr align=center style="border-collapse:collapse;border-spacing:0px;color:#FFF;font:12px/180% '微软雅黑',Arial,'Microsoft Sans Serif','宋体';text-align:lext"><td style="margin:0px;padding:0px;border-collapse:collapse;border-spacing:0px;color:#FFF;font:12px/180% '微软雅黑',Arial,'Microsoft Sans Serif','宋体';text-align:lext"><div style="padding:0px 20px;height:25px; line-height:25px;word-break:break-all;overflow:hidden;BORDER-BOTTOM: 1px dashed #5c8482;color:#FFFFFF;"><?=$number?>期</div></td><td title='<?=$var['data']?>'><div style="padding:0px 8px;height:25px; line-height:25px;word-break:break-all;overflow:hidden;BORDER-BOTTOM: 1px dashed #5c8482;color:#90ff00;"><?=$var['data']?></div></td></tr>
		<?php else: ?>
    		<tr align=center style="border-collapse:collapse;border-spacing:0px;color:#FFF;font:12px/180% '微软雅黑',Arial,'Microsoft Sans Serif','宋体';text-align:lext"><td style="margin:0px;padding:0px;border-collapse:collapse;border-spacing:0px;color:#FFF;font:12px/180% '微软雅黑',Arial,'Microsoft Sans Serif','宋体';text-align:lext"><div style="padding:0px 20px;height:25px; line-height:25px;word-break:break-all;overflow:hidden;BORDER-BOTTOM: 1px dashed #5c8482;color:#FFFFFF;"><?=$var['number']?>期</div></td><td title='<?=$var['data']?>'><div style="padding:0px 0px;height:25px; line-height:25px;word-break:break-all;overflow:hidden;BORDER-BOTTOM: 1px dashed #5c8482;color:#90ff00;"><?=$var['data']?></div></td></tr>
		<?php endif; ?>
	<?php endforeach; ?>
<?php endif; ?>