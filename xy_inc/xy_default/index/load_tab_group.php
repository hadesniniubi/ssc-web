<?php
	$sql="select groupName from {$this->prename}played_group where id=?";
	$groupName=$this->getValue($sql, $this->groupId);
	
	$sql="select id, name, playedTpl, enable from {$this->prename}played where groupId=? order by sort";
	$playeds=$this->getRows($sql, $this->groupId);
	if(!$this->played) $this->played=$playeds[0]['id'];
?>
<?php if($playeds): ?>
	<?php foreach($playeds as $played): ?>
		<?php if($played['enable']): ?>
			<div class="ul-li<?=($played['id']==$this->played)?' current':''?>"><a data_id="<?=$played['id']?>"  href="/index.php/index/played/<?=$this->type?>/<?=$played['id']?>"><?=$played['name']?></a></div>
		<?php endif;?>
	<?php endforeach; ?>
<?php endif; ?>
<div class="clear"></div>