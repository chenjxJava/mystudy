
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="../js/bootstrap-typeahead.js"></script>
	<script src="../js/select2.min.js"></script>
	<link rel="stylesheet" href="../css/select2.min.css">
	<link rel="stylesheet" href="../css/page.css">
	<link rel="stylesheet" href="../css/login.css">
	<link rel="stylesheet" href="../css/goods.css">
	<title>商品列表</title>
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
		 	 <div class="wrapper wrapper-content you white-bg">
		 	 <!-- 商品列表 -->
		 	 	<div class="goods">
		 	 		<div class="product-list">	
		 	 			<div id="DataTables_Table_0_length" class="dataTables_length">	 	 
		 	 				<span class="lie">商品列表</span>
		 	 				<!-- <button class="wen">文</button> -->
		 	 				<label>
		 	 					每页
			 	 				<select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control input-sm" id="">
			 	 					<option value="10">10</option>
			 	 					<option value="25">25</option>
			 	 					<option value="50">50</option>
			 	 				</select>
			 	 				条数据
		 	 				</label>
		 	 			</div>
		 	 		</div>
		 	 		<div class="goods-search">
		 	 			<ul class="gooods-search_ul">
		 	 				<li>
		 	 					<select class="js-example-basic-single select2" name="" id="">
		 	 						<option value="CH" selected="selected">选择商品的分类</option>
		 	 						<option value="CH">
										<a href="#">床</a>
		 	 						</option>
		 	 						<option value="CH">
										<a href="#">柜子</a>
		 	 						</option>
		 	 						<option value="CH">
										<a href="#">装饰品</a>
		 	 						</option>
		 	 						<option value="CH">
										<a href="#">烤漆门</a>
		 	 						</option>
		 	 						<option value="CH">
										<a href="#">五金用品</a>
		 	 						</option>
		 	 						<option value="CH">
										<a href="#">家用电源</a>
		 	 						</option>
		 	 					</select>
		 	 				</li>
		 	 				<li>
		 	 					<select class="js-example-basic-single select2" name="" id="">
		 	 						<option value="CH" selected="selected">选择商品的品牌、系列</option>
		 	 						<option value="CH">
										<a href="#">床</a>
		 	 						</option>
		 	 						<option value="CH">
										<a href="#">柜子</a>
		 	 						</option>
		 	 						<option value="CH">
										<a href="#">装饰品</a>
		 	 						</option>
		 	 						<option value="CH">
										<a href="#">烤漆门</a>
		 	 						</option>
		 	 						<option value="CH">
										<a href="#">五金用品</a>
		 	 						</option>
		 	 						<option value="CH">
										<a href="#">家用电源</a>
		 	 						</option>
		 	 					</select>
		 	 				</li>
		 	 				<li>
		 	 					<input type="text"  class="form-control" placeholder="选择商品名称、类型">
		 	 				</li>
		 	 				<li>
		 	 					<select class="select2 form-control" name="" id="">
		 	 						<option value="CH" selected="selected">选择商品的品牌、系列</option>
		 	 						<option value="CH">
										<a href="#">上架</a>
		 	 						</option>
		 	 						<option value="CH">
										<a href="#">下架</a>
		 	 						</option>
		 	 						<option value="CH">
										<a href="#">违规</a>
		 	 						</option>
		 	 						<option value="CH">
										<a href="#">未维护</a>
		 	 						</option>
		 	 					</select>
		 	 				</li>
		 	 				<li>
		 	 					<select class="select2 form-control" name="" id="">
		 	 						<option value="CH" selected="selected">选择商品类型</option>
		 	 						<option value="CH">
										<a href="#">单品</a>
		 	 						</option>
		 	 						<option value="CH">
										<a href="#">套品</a>
		 	 						</option>
		 	 					</select>
		 	 				</li>
		 	 			</ul>
		 	 			<div class="goods-button">
		 	 				<button class="query">查询</button>
		 	 				<button class="empty">清空</button>
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
												<a role="menuitem" tabindex="-1" href="#">维护</a>
											</li>
											<li role="presentation">
												<a role="menutiem" tabindex="-1" href="details.php">详情</a>
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
						</tbody>
					</table>
					<table class="table table-bordered table_height2" style="display: none;">
						<thead>
							<tr>
								<th>NO.</th>
								<th>图片</th>
								<th>商品名称</th>
								<th>品牌</th>
								<th>系列</th>
								<th>型号</th>
								<th>经营分类</th>
								<th>商品类型</th>
								<th>商品状态</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>01</td>
								<td>
									<img style="width: 60px;height: 60px;" src="../img/邮箱验证.png" alt="">
								</td>
								<td>M88大功率工业灯</td>
								<td>卡萃妮CountryNight</td>
								<td>烤漆门</td>
								<td>JS-5505</td>
								<td>烤漆复合门</td>
								<td>单品</td>
								<td>单品</td>
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
								<td>
									<img style="width: 60px;height: 60px;" src="../img/邮箱验证.png" alt="">
								</td>
								<td>M88大功率工业灯</td>
								<td>卡萃妮CountryNight</td>
								<td>烤漆门</td>
								<td>JS-5505</td>
								<td>烤漆复合门</td>
								<td>单品</td>
								<td>单品</td>
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
								<td>
									<img style="width: 60px;height: 60px;" src="../img/邮箱验证.png" alt="">
								</td>
								<td>M88大功率工业灯</td>
								<td>卡萃妮CountryNight</td>
								<td>烤漆门</td>
								<td>JS-5505</td>
								<td>烤漆复合门</td>
								<td>单品</td>
								<td>单品</td>
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
								<td>
									<img style="width: 60px;height: 60px;" src="../img/邮箱验证.png" alt="">
								</td>
								<td>M88大功率工业灯</td>
								<td>卡萃妮CountryNight</td>
								<td>烤漆门</td>
								<td>JS-5505</td>
								<td>烤漆复合门</td>
								<td>单品</td>
								<td>单品</td>
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
								<td>
									<img style="width: 60px;height: 60px;" src="../img/邮箱验证.png" alt="">
								</td>
								<td>M88大功率工业灯</td>
								<td>卡萃妮CountryNight</td>
								<td>烤漆门</td>
								<td>JS-5505</td>
								<td>烤漆复合门</td>
								<td>单品</td>
								<td>单品</td>
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
					<?php 
						require "../html/paging.html";
					 ?>
		 	 	</div>
		 	 </div>
		 </div>
	</div>
</body>
<script type="text/javascript" src="../js/left-navigation.js"></script>
<script type="text/javascript" src="../js/search.js"></script>
</html>