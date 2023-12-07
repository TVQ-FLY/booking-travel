<?php if($_SESSION['login'])
{?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li>
			<li class="prnt"><a href="profile.php">Thông Tin |</a></li>
			<li class="prnt"><a href="change-password.php">Đối Mật Khẩu |</a></li>
			<li class="prnt"><a href="tour-history.php">Lịch Sử Tour |</a></li>
			<li class="prnt"><a href="issuetickets.php">Lịch Sử Hỗ Trợ</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Xin chào:</li>				
			<li class="sig"><?php echo htmlentities($_SESSION['login']);?></li> 
			<li class="sigi"><a href="logout.php" >/ Đăng xuất</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div><?php } else {?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
				<li class="hm"><a href="admin/index.php">Đăng nhập Admin</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol"></li>				
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Đăng ký</a></li> 
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ Đăng nhập</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div>
<?php }?>
<!--- /top-header ---->
<!--- header ---->
<div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.php">Booking <span>Travel</span></a>	
		</div>
	
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			<li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">An toàn &amp; Bảo mật </div></li>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Trang Chủ</a></li>
							<li><a href="page.php?type=About">Tổng quan</a></li>
								<li><a href="package-list.php">Danh sách Tour</a></li>
								<li><a href="page.php?type=Privacy">Chính sách bảo mật</a></li>
								<li><a href="page.php?type=Team">Đội ngũ và Người dùng</a></li>
								<li><a href="page.php?type=Contact">Liên Hệ</a></li>
								<?php if($_SESSION['login'])
{?>
								<li>Bạn cần hỗ trợ ?<a href="#" data-toggle="modal" data-target="#myModal3"> / Viết cho chúng tôi </a>  </li>
								<?php } else { ?>
								<li><a href="enquiry.php"> Góp ý </a>  </li>
								<?php } ?>
								<div class="clearfix"></div>

						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->	
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>