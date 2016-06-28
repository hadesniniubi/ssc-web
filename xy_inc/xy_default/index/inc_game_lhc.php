
<div class="game-main" style="width:920px;margin-top:-21px">
<div id="bet-game">
	<div class="game-btn">
        <?php
			if($_COOKIE['mode']){
				$mode=$_COOKIE['mode'];
			}else{
				$mode=1.00;
			}
			$this->getTypes();
			$sql="select id, groupName, enable from {$this->prename}played_group where enable=1 and type=? order by sort";
			$groups=$this->getObject($sql, 'id', $this->types[$this->type]['type']);

			if($this->groupId && !$groups[$this->groupId]) unset($this->groupId);
		?>
		<?php if($groups): ?>
			<?php foreach($groups as $key=>$group): ?>
				<?php if(!$this->groupId): $this->groupId=$group['id']; endif; ?>
			        <div class="ul-li<?=($this->groupId==$group['id'])?' current':''?>">
			        	<a class="cai" href="/index.php/index/group/<?=$this->type .'/'.$group['id']?>"><span class="content"><?=$group['groupName']?></span></a>
					</div>
			<?php endforeach; ?>
		<?php endif; ?>
    <div class="clear"></div>
	</div>
	<div class="game-cont">
		<?php $this->display('index/inc_game_played.php'); ?>
	</div>
</div>

</div>