<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="../js/bootstrap-typeahead.js"></script>
	<link rel="stylesheet" href="../css/page.css">
	<link rel="stylesheet" href="../css/login.css">
	<link rel="stylesheet" href="../css/goods.css">
	<title>商品详情</title>
</head>
<body class="gray-bg">
	<div class="page">
		<?php 
			require "../html/header.html";
		 ?>
		 <div class="page_text">
			<?php 
		 		require "../html/left-navigation.html";
		 	 ?>
			<!-- 商品详情右 -->
			<div class="wrapper wrapper-content you white-bg">
				<div class="goods" id="details">
					<div class="getails_height">
						<div class="row">
							<div class="col-sm-3 zi">
								<span >商品品牌： <span class="spans">Skying天都</span></span>
							</div>
							<div class="col-sm-3 zi">
								<span>商品系列：<span>辉煌</span></span>
							</div>
							<div class="col-sm-3 zi">
								<span>商品型号： <span>609016</span></span>
							</div>
							<div class="col-sm-3 zi">
								<span>经营分类：<span>LED光源</span></span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 zi">
								<span>物流服务：<span>免费配送</span></span>
							</div>
							<div class="col-sm-3 zi">
								<span>安装服务：<span>不提供</span></span>
							</div>
							<div class="col-sm-3 zi">
								<span>是否提供发票：<span>是</span></span>
							</div>
							<div class="col-sm-3 zi">
								<span>商品状态：<span>在售</span></span>
							</div>
						</div>
						<div class="Commodity_images">
							<div>
								<!-- <span>商品图片：</span> -->
								<ul>
									<li class="zi" style="margin: 0;">
										<span>商品图片：</span>
									</li>
									<li>
										<img src="../img/邮箱验证.png" alt="">
									</li>
									<li>
										<img src="../img/邮箱验证.png" alt="">
									</li>
								</ul>
							</div>
						</div>
						<div class="Commodity_images">
							<div class="product_details">
								<!-- <span>商品图片：</span> -->
								<ul>
									<li class="zi" style="margin: 0;">
										<span>详情图片：</span>
									</li>
									<li>
										<img src="../img/邮箱验证.png" alt="">
									</li>
									<li>
										<img src="../img/邮箱验证.png" alt="">
									</li>
								</ul>
							</div>
						</div>
						<div class="Commodity_attribute">
							<div class="">
								<span class="attribute_left">商品属性 &nbsp;: </span>
								<ul>
									<li>
										<span>颜色：<span>白色、粉色、灰色</span></span>
									</li>
									<li><span>规格：<span>1600*595*2180、1300*500*2180</span></span></li>
									<li><span>材质：<span>纤维板、实木</span></span></li>
									<li><span>风格：<span>欧式</span></span></li>
								</ul>
							</div>
						</div>
						<div class="Commodity_images">
							<div class="product_details">
								<ul>
									<li  class="zi" style="margin: 0;"><span>备注：</span></li>
									<li><span class="note">有cad</span></li>
								</ul>
							</div>
						</div>
						<div>
							<div></div>
						</div>
					</div>
					<table class="table table-bordered table_height1">
						<thead>
							<tr>
								<th>NO.</th>
								<th>标题</th>
								<th>内容简要</th>
								<th>推送时间</th>
								<th>状态</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>01</td>
								<td>系统维护通知</td>
								<td>2017年3月22日22：00 - 24 : 00将进行系统维护，给您造成……</td>
								<td>2017.03.15</td>
								<td>已读</td>
								<td>
									<div class="dropdown">
										<button type="button" class="operation btn dropdown-toggle" id="dropdownMenul" data-toggle="dropdown">操作
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="#">上架</a>
											</li>
											<li role="presentation">
												<a role="menutiem" tabindex="-1" href="#">调库</a>
											</li>
											<li role="presentation">
												<a role="menutiem" tabindex="-1" href="#">调价</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								<td>01</td>
								<td>系统维护通知</td>
								<td>2017年3月22日22：00 - 24 : 00将进行系统维护，给您造成……</td>
								<td>2017.03.15</td>
								<td>已读</td>
								<td>
									<div class="dropdown">
										<button type="button" class="operation btn dropdown-toggle" id="dropdownMenul" data-toggle="dropdown">操作
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="#">维护</a>
											</li>
											<li role="presentation">
												<a role="menutiem" tabindex="-1" href="#">详情</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								<td>01</td>
								<td>系统维护通知</td>
								<td>2017年3月22日22：00 - 24 : 00将进行系统维护，给您造成……</td>
								<td>2017.03.15</td>
								<td>已读</td>
								<td>
									<div class="dropdown">
										<button type="button" class="operation btn dropdown-toggle" id="dropdownMenul" data-toggle="dropdown">操作
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="#">维护</a>
											</li>
											<li role="presentation">
												<a role="menutiem" tabindex="-1" href="#">详情</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								<td>01</td>
								<td>系统维护通知</td>
								<td>2017年3月22日22：00 - 24 : 00将进行系统维护，给您造成……</td>
								<td>2017.03.15</td>
								<td>已读</td>
								<td>
									<div class="dropdown">
										<button type="button" class="operation btn dropdown-toggle" id="dropdownMenul" data-toggle="dropdown">操作
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="#">维护</a>
											</li>
											<li role="presentation">
												<a role="menutiem" tabindex="-1" href="#">详情</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								<td>01</td>
								<td>系统维护通知</td>
								<td>2017年3月22日22：00 - 24 : 00将进行系统维护，给您造成……</td>
								<td>2017.03.15</td>
								<td>已读</td>
								<td>
									<div class="dropdown">
										<button type="button" class="operation btn dropdown-toggle" id="dropdownMenul" data-toggle="dropdown">操作
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="#">维护</a>
											</li>
											<li role="presentation">
												<a role="menutiem" tabindex="-1" href="#">详情</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								<td>01</td>
								<td>系统维护通知</td>
								<td>2017年3月22日22：00 - 24 : 00将进行系统维护，给您造成……</td>
								<td>2017.03.15</td>
								<td>已读</td>
								<td>
									<div class="dropdown">
										<button type="button" class="operation btn dropdown-toggle" id="dropdownMenul" data-toggle="dropdown">操作
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="#">维护</a>
											</li>
											<li role="presentation">
												<a role="menutiem" tabindex="-1" href="#">详情</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								<td>01</td>
								<td>系统维护通知</td>
								<td>2017年3月22日22：00 - 24 : 00将进行系统维护，给您造成……</td>
								<td>2017.03.15</td>
								<td>已读</td>
								<td>
									<div class="dropdown">
										<button type="button" class="operation btn dropdown-toggle" id="dropdownMenul" data-toggle="dropdown">操作
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="#">维护</a>
											</li>
											<li role="presentation">
												<a role="menutiem" tabindex="-1" href="#">详情</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								<td>01</td>
								<td>系统维护通知</td>
								<td>2017年3月22日22：00 - 24 : 00将进行系统维护，给您造成……</td>
								<td>2017.03.15</td>
								<td>已读</td>
								<td>
									<div class="dropdown">
										<button type="button" class="operation btn dropdown-toggle" id="dropdownMenul" data-toggle="dropdown">操作
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="#">维护</a>
											</li>
											<li role="presentation">
												<a role="menutiem" tabindex="-1" href="#">详情</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								<td>01</td>
								<td>系统维护通知</td>
								<td>2017年3月22日22：00 - 24 : 00将进行系统维护，给您造成……</td>
								<td>2017.03.15</td>
								<td>已读</td>
								<td>
									<div class="dropdown">
										<button type="button" class="operation btn dropdown-toggle" id="dropdownMenul" data-toggle="dropdown">操作
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="#">上架</a>
											</li>
											<li role="presentation">
												<a role="menutiem" tabindex="-1" href="#">调库</a>
											</li>
											<li role="presentation">
												<a role="menutiem" tabindex="-1" href="#">调价</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								<td>01</td>
								<td>系统维护通知</td>
								<td>2017年3月22日22：00 - 24 : 00将进行系统维护，给您造成……</td>
								<td>2017.03.15</td>
								<td>已读</td>
								<td>
									<div class="dropdown">
										<button type="button" class="operation btn dropdown-toggle" id="dropdownMenul" data-toggle="dropdown">操作
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="#">维护</a>
											</li>
											<li role="presentation">
												<a role="menutiem" tabindex="-1" href="#">详情</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>
								<td>01</td>
								<td>系统维护通知</td>
								<td>2017年3月22日22：00 - 24 : 00将进行系统维护，给您造成……</td>
								<td>2017.03.15</td>
								<td>已读</td>
								<td>
									<div class="dropdown">
										<button type="button" class="operation btn dropdown-toggle" id="dropdownMenul" data-toggle="dropdown">操作
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="#">维护</a>
											</li>
											<li role="presentation">
												<a role="menutiem" tabindex="-1" href="#">详情</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		 </div>
	</div>
</body>
<script type="text/javascript" src="../js/left-navigation.js"></script>
</html>