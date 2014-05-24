<?php $this->load->helpers('url_helper');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Home</title>
		<link rel="icon" href="<?php echo base_url("images/favicon.ico");?>">
                <link rel="shortcut icon" href="<?php echo base_url("images/favicon.ico");?>" />
		<link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">
		<link rel="stylesheet" href="<?php echo base_url("css/zerogrid.css");?>" >
		<link rel="stylesheet" href="<?php echo base_url("css/camera.css");?>">
		<link rel="stylesheet" href="<?php echo base_url("css/form.css");?>">
		<link rel="stylesheet" href="<?php echo base_url("css/responsive.css");?>">
		<script src="<?php echo base_url("js/jquery.js");?>"></script>
		<script src="<?php echo base_url("js/jquery-migrate-1.1.1.js");?>"></script>
		<script src="<?php echo base_url("js/superfish.js");?>"></script>
		<script src="<?php echo base_url("js/forms.js");?>"></script>
		<script src="<?php echo base_url("js/jquery.ui.totop.js");?>"></script>
		<script src="<?php echo base_url("js/jquery.equalheights.js");?>"></script>
		<script src="<?php echo base_url("js/jquery.easing.1.3.js");?>"></script>
		<script src="<?php echo base_url("js/jquery.ui.totop.js");?>"></script>
		<script src="<?php echo base_url("js/tms-0.4.1.js");?>"></script>
		<script src="<?php echo base_url("js/css3-mediaqueries.js");?>"></script>
		<script>
			$(document).ready(function(){
				$('.slider_wrapper')._TMS({
					show:0,
					pauseOnHover:false,
					prevBu:'.prev',
					nextBu:'.next',
					playBu:false,
					duration:800,
					preset:'fade',
					pagination:true,//'.pagination',true,'<ul></ul>'
					pagNums:false,
					slideshow:8000,
					numStatus:false,
					banners: 'fade',
					waitBannerAnimation:false,
					progressBar:false
				});
			});
			$(document).ready(function(){
				!function(){
			var map=[]
			 ,names=[]
			 ,win=$(window)
			 ,header=$('header')
			 ,currClass
			$('.content').each(function(n){
			 map[n]=this.offsetTop
			 names[n]=$(this).attr('id')
			})
			win
			 .on('scroll',function(){
				var i=0
				while(map[i++]<=win.scrollTop());
				if(currClass!==names[i-2])
				currClass=names[i-2]
				header.removeAttr("class").addClass(names[i-2])
			 })
			}(); });
					function goToByScroll(id){
				$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
				}
				$(document).ready(function(){
					$().UItoTop({ easingType: 'easeOutQuart' });
				});
		</script>
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="">
<!--==============================header=================================-->
		<header class="page1">
			<div class="zerogrid">
				<div class="col-full">
					<div class="wrap-col">
						<div class="menu_block">
							<nav class="">
								<ul class="sf-menu">
									<li class="current men"><a onClick="goToByScroll('page1'); return false;" href="#">首页 </a> <strong class="hover"></strong></li>
									<li class="men1"><a onClick="goToByScroll('page2'); return false;" href="#">我们</a><strong class="hover"></strong></li>
									<li class=" men2"><a onClick="goToByScroll('page3'); return false;" href="#">服务</a> <strong class="hover"></strong></li>
									<li class=" men3"><a onClick="goToByScroll('page4'); return false;" href="#">客户</a> <strong class="hover"></strong></li>
									<li class=" men4"><a onClick="goToByScroll('page5'); return false;" href="#">联系</a> <strong class="hover"></strong></li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
                                            <h1><a href="#" onClick="goToByScroll('page1'); return false;"><img src="<?php echo base_url("images/logo.png");?>" alt="Gerald Harris attorney at law"></a></h1>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</header>
<!--=======content================================-->
		<div id="page1" class="content">
			<div class="zerogrid">
				<div class="col-full">
					<div class="wrap-col">
						<div class="slider_wrapper">
							<ul class="items">
								<li>
									<img src="<?php echo base_url("images/spacer.gif");?>" alt="">
									<div class="caption banner">
										<h2>我们有优秀的团队</h2>
									</div>
								</li>
								<li>
									<img src="<?php echo base_url("images/spacer.gif");?>" alt="">
									<div class="caption banner">
										<h2>我们知道怎样解决你的问题</h2>
									</div>
								</li>
								<li>
									<img src="<?php echo base_url("images/spacer.gif");?>" alt="">
									<div class="caption banner">
										<h2>让你的需求得到最大的满足</h2>
									</div>
								</li>
								<li>
									<img src="<?php echo base_url("images/spacer.gif");?>" alt="">
									<div class="caption banner">
										<h2>让我们带你走上成功之路</h2>
									</div>
								</li>
							</ul>
						</div>
						<div class="socials">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="page2" class="content">
			<div class="zerogrid">
				<div class="col-full">
					<div class="wrap-col">
						<div class="slogan">
							<h3>最专业的<a onClick="goToByScroll('page3'); return false;" href="#"><span>服务</span></a> 提供给我们的 <a onClick="goToByScroll('page4'); return false;" href="#"><em>客户</em></a></h3>
							<div class="text1">
								我们是一个优秀的团队，我们为客户提供最好的服务，在困难中不断摸索，追求完美。
							</div>
						</div>
					</div>
				</div>
				<div class="col-1-4">
					<div class="wrap-col">
						<div class="box maxheight">
							<img src="<?php echo base_url("images/kobe.jpg");?>" alt="">
							<div class="text1"><a href="#">Kobe Bryant</a></div>senior manager
							<div class="socials1">
								<a href="#"></a>
								<a href="#"></a>
								<a href="#"></a>
								<a href="#"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-1-4">
					<div class="wrap-col">
						<div class="box maxheight">
							<img src="<?php echo base_url("images/jobs.jpg");?>" alt="">
							<div class="text1"><a href="#">Steven Jobs</a></div> manager
							<div class="socials1">
								<a href="#"></a>
								<a href="#"></a>
								<a href="#"></a>
								<a href="#"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-1-4">
					<div class="wrap-col">
						<div class="box maxheight">
							<img src="<?php echo base_url("images/tim.jpeg");?>" alt="">
							<div class="text1"><a href="#">Tim Duncan</a></div>accounter
							<div class="socials1">
								<a href="#"></a>
								<a href="#"></a>
								<a href="#"></a>
								<a href="#"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-1-4">
					<div class="wrap-col">
						<div class="box maxheight">
							<img src="<?php echo base_url("images/jordan.jpg");?>" alt="">
							<div class="text1"><a href="#">Michael Jordan</a></div>director
							<div class="socials1">
								<a href="#"></a>
								<a href="#"></a>
								<a href="#"></a>
								<a href="#"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="page3" class="content">
			<div class="zerogrid">
				<div class="col-full">
					<div class="wrap-col">
						<div class="slogan">
							<h3>我们的服务</h3>
							<div class="text1">
								这里还没有想好怎么写
							</div>
						</div>
					</div>
				</div>
				<div class="col-1-4">
					<div class="wrap-col">
						<div class="box maxheight1">
							<img src="<?php echo base_url("images/box1_img1.png");?>" alt="">
							<div class="text1"><a href="#">先空着再说</a></div>先空着再说
						</div>
					</div>
				</div>
				<div class="col-1-4">
					<div class="wrap-col">
						<div class="box maxheight1">
							<img src="<?php echo base_url("images/box1_img2.png");?>" alt="">
							<div class="text1"><a href="#">先空着再说</a></div>先空着再说
						</div>
					</div>
				</div>
				<div class="col-1-4">
					<div class="wrap-col">
						<div class="box maxheight1">
							<img src="<?php echo base_url("images/box1_img3.png");?>" alt="">
							<div class="text1"><a href="#">先空着再说</a></div>先空着再说
						</div>
					</div>
				</div>
				<div class="col-1-4">
					<div class="wrap-col">
						<div class="box maxheight1">
							<img src="<?php echo base_url("images/box1_img4.png");?>" alt="">
							<div class="text1"><a href="#">先空着再说</a></div>先空着再说
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="page4" class="content">
			<div class="zerogrid">
				<div class="col-full">
					<div class="wrap-col">
						<h3>我们的客户</h3>
					</div>
				</div>
				<div class="companies">
					<div class="col-1-4">
						<div class="wrap-col">
							<img src="<?php echo base_url("images/logo1.jpg");?>" alt="">
							<div class="text1">微软擦擦</div>微软也是我们的客户
							<br>
							<a href="#">Go to Site</a>
						</div>
					</div>
					<div class="col-1-4">
						<div class="wrap-col">
							<img src="<?php echo base_url("images/logo2.jpg");?>" alt="">
							<div class="text1">苹果</div>其实苹果也是
							<br>
							<a href="#">Go to Site</a>
						</div>
					</div>
					<div class="col-1-4">
						<div class="wrap-col">
							<img src="<?php echo base_url("images/logo3.jpg");?>" alt="">
							<div class="text1">谷歌</div>原来谷歌也是
							<br>
							<a href="#">Go to Site</a>
						</div>
					</div>
					<div class="col-1-4">
						<div class="wrap-col">
							<img src="<?php echo base_url("images/logo4.jpg");?>" alt="">
							<div class="text1">英特尔</div>这个也是
							<br>
							<a href="#">Go to Site</a>
						</div>
					</div>
					<div class="clear"></div>
					<div class="col-1-4">
						<div class="wrap-col">
							<img src="<?php echo base_url("images/logo5.jpg");?>" alt="">
							<div class="text1">三星</div>去宇宙深处看看，还有什么是我们的
							<br>
							<a href="#">Go to Site</a>
						</div>
					</div>
					<div class="col-1-4">
						<div class="wrap-col">
							<img src="<?php echo base_url("images/logo6.jpg");?>" alt="">
							<div class="text1">甲骨文</div>甲骨文是中国的
							<br>
							<a href="#">Go to Site</a>
						</div>
					</div>
					<div class="col-1-4">
						<div class="wrap-col">
							<img src="<?php echo base_url("images/logo7.jpg");?>" alt="">
							<div class="text1">雅虎</div>呵呵，不作死就不会死
							<br>
							<a href="#">Go to Site</a>
						</div>
					</div>
					<div class="col-1-4">
						<div class="wrap-col">
							<img src="<?php echo base_url("images/logo8.jpg");?>" alt="">
							<div class="text1">ebay</div>嗯哼，呵呵呵呵呵
							<br>
							<a href="#">Go to Site</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="page5" class="content">
			<div class="zerogrid">
				<div class="col-full">
					<div class="wrap-col">
						<div class="slogan">
							<h3>联系我们</h3>
							<div class="text1">
								先空着再说
							</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<div class="map">
					<div class="col-1-4">
						<div class="wrap-col">
							<div class="text1">地址</div>
							<address>
								<dl>
									<dt>浙江省杭州市<br>
									下沙经济开发区<br>
									6号大街25号路口新雁公寓
									</dt>									
									<dd><span>联系电话:</span>88888888</dd>
									<dd><span>传真:</span>88888888</dd>
									<dd>电子邮箱: <a href="#" class="link-1">qywork@gmail.com</a></dd>									
								</dl>
							</address>
						</div>
					</div>
					<div class="col-1-4">
						<div class="wrap-col">
							<div class="text1">&nbsp;</div>
							<figure class="">
								<iframe src="http://maps.google.co.jp/maps?f=q&source=s_q&hl=ja&geocode=&q=%E4%B8%AD%E8%8F%AF%E4%BA%BA%E6%B0%91%E5%85%B1%E5%92%8C%E5%9B%BD+%E5%8C%97%E4%BA%AC&sll=38.914453,121.616485&sspn=0.636846,1.363678&ie=UTF8&z=10&iwloc=A&ll=30.306725,120.385149&output=embed"></iframe>
							</figure>
						</div>
					</div>
					<div class="col-2-4">
						<div class="wrap-col">
							<div class="text1">联系我们</div>
							<form id="form">
							<div class="success_wrapper">
							<div class="success">Contact form submitted!<br>
							<strong>We will be in touch soon.</strong> </div></div>
							<fieldset>
							<label class="name">
							<input type="text" value="姓名:">
							<br class="clear">
							<span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label>
							<label class="email">
							<input type="text" value="电子邮箱:">
							<br class="clear">
							<span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>
							<label class="message">
							<textarea>信息：</textarea>
							<br class="clear">
							<span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
							<div class="clear"></div>
							<div class="btns"><a data-type="submit" class="link1">发送</a>
							<div class="clear"></div>
							</div></fieldset></form>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="zerogrid">
				<div class="col-full">
					<div class="wrap-col">
						<div class="copy">
							Copyright &copy; 2014. qywork All rights reserved.
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript'></script></div>
</body>
</html>

