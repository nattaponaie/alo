<div class="top-bar">
	<div class="container">
		<nav>
			<ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">
				<li class="menu-item animate-dropdown"><a title="Welcome to Worldwide Electronics Store" href="home">ยินดีต้อนรับสู่ A.S. Power Tech เอี่ยมละออ ซาวด์ เพาเวอร์ เทค</a></li>
			</ul>
		</nav>

		<nav>
			<ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">
				<li class="menu-item animate-dropdown"><a title="Store Locator" href="#"><i class="ec ec-map-pointer"></i>แผนที่ร้าน</a></li>
				<!-- <li class="menu-item animate-dropdown"><a title="Track Your Order" href="index.php?page=track-your-order"><i class="ec ec-transport"></i>Track Your Order</a></li> -->
				<li class="menu-item animate-dropdown"><a title="Shop" href="shop"><i class="ec ec-shopping-bag"></i>สินค้า</a></li>
				@auth

					<li class="menu-item menu-item-has-children animate-dropdown dropdown"><a title="Account" href="profile" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true"><i class="ec ec-user"></i>บัญชีผู้ใช้</a>
						<ul role="menu" class=" dropdown-menu">
							<li class="menu-item animate-dropdown current_page_item animate-dropdown active">
								<a class="dropdown-item" href="{{ route('logout') }}"
								   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
									Logout
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</li>
						</ul>
					</li>
				@else
					<li class="menu-item animate-dropdown"><a title="Sign in" href="index.php?page=login-and-register"><i class="ec ec-user"></i>เข้าสู่ระบบ</a></li>
				@endauth
			</ul>
		</nav>
	</div>
</div><!-- /.top-bar -->