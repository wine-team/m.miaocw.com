<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header">
		<a href="javascript:goback();" class="b_l"></a>
		<h2>设置</h2>
		<a href="<?php echo site_url('home/add_address');?>"  class="b_r">添加地址</a>
	</div>
</div>
<div class="pageauto">
	<div class="min-h">
		<ul class="s_h">
			<li>
				<a href="<?php echo site_url('home/add_address');?>">
					<h3>
						<b class="red pr5">默认</b>
						<b>蒋主席</b> 
						天津市天津市静海县
					</h3>
				    <p>台湾省高雄市</p>
				</a>
			</li>
		</ul>
	</div>
</div>
<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>