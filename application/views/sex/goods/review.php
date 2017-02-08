<?php if(!empty($review)):?>
<div class="bgw">
	<ul class="comment" id="comments">
		<?php foreach ($review as $kk):?>
		<li>
			<p class="ov">
				<img src="<?php echo $this->config->show_image_url('common/touxiang',$kk->photo);?>" class="omg" />
				<em><?php echo substr_cut($kk->alias_name);?></em>
				<em class="vip"></em>
				<i class="right"></i>
			</p>
			<p class="f14"><?php echo $kk->content;?></p>
		    <?php if(!empty($kk->slide_show)):?>
		    <div class="s_d">    
		        <?php $show = explode('|',rtrim($kk->slide_show,'|'));?>       
		        <?php foreach ($show as $jj):?>                                                                      
				<img src="<?php echo $this->config->show_image_url('mall',$jj);?>" data-b="<?php echo $this->config->show_image_url('mall',$jj);?>" width="60" height="60" onclick="zom(this)">
				<?php endforeach;?>
			</div>
			<?php endif;?>
			<div class="s_db"></div>
		</li>
		<?php endforeach;?>
	</ul>
</div>
<div class="lr10">
	<a href="javascript:void(0);" id="ajax" class="ajc b4 mt10">点击加载更多</a>
	<p class="lh20">&nbsp;</p>
</div>
<?php else:?>
<div class="bgw">
	<div class="ept alC">暂时还没有评论哟~</div>
</div>
<?php endif;?>