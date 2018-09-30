<div id="content" class="site-content" tabindex="-1">
	<div class="container">

		<nav class="woocommerce-breadcrumb" >
			<a href="index.php">หน้าหลัก</a>
			<span class="delimiter"><i class="fa fa-angle-right"></i></span>
			เข้าสู่ระบบ
		</nav><!-- .woocommerce-breadcrumb -->

		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<article id="post-8" class="hentry">

					<div class="entry-content">
						<div class="woocommerce">
							<div class="customer-login-form">
								<span class="or-text">or</span>

								<div class="col2-set" id="customer_login">

									<div class="col-1">


										<h2>เข้าสู่ระบบ</h2>

										<form method="post" class="login" action="{{ route('login') }}">
											@csrf

											<p class="before-login-text">
												ยินดีต้อนรับ! เข้าสู่ระบบที่นี่
											</p>

											<p class="form-row form-row-wide">
												<label for="log_username">ชื่อผู้ใช้
												<span class="required">*</span></label>
												<input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" id="username" value="{{ old('username') }}" required="required"/>

											</p>

											<p class="form-row form-row-wide">
												<label for="log_password">รหัสผ่าน
												<span class="required">*</span></label>
												<input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" id="password" required="required"/>

											</p>

											@if ($errors->has('username') || $errors->has('password'))
												<span class="invalid-feedback">
				                                        <strong>{{ $errors->first('username') }}</strong>
												</span>
											@elseif ($errors->has('password'))
												<span class="invalid-feedback">
				                                        <strong>{{ $errors->first('password') }}</strong>
												</span>
											@endif


											<p class="form-row">
												<input class="button" type="submit" value="เข้าสู่ระบบ" name="login">
												<label for="rememberme" class="inline">
													<input type="checkbox" name="rememberme" {{ old('remember') ? 'checked' : '' }}> Remember Me
												</label>
											</p>

											<p class="lost_password">
												<a href="{{ route('password.request') }}">ลืมรหัสผ่าน?</a>
											</p>

										</form>


									</div><!-- .col-1 -->

									<div class="col-2">

										<h2>สมัครสมาชิก</h2>

										<form method="POST" class="register" action="{{ route('register') }}">
											@csrf

											<p class="before-register-text">
												สร้างบัญชีผู้ใช้ที่นี่
											</p>

											<p class="form-row form-row-wide">
												<label for="reg_username">ชื่อผู้ใช้
													<span class="required">*</span></label>
												<input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" id="username" value="{{ old('username') }}" required/>
												@if ($errors->has('username'))
													<span class="invalid-feedback">
				                                        <strong>{{ $errors->first('username') }}</strong>
				                                    </span>
												@endif
											</p>
											<p class="form-row form-row-wide">
												<label for="reg_password">รหัสผ่าน
												<span class="required">*</span></label>
												<input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" required/>
												@if ($errors->has('password'))
				                                    <span class="invalid-feedback">
				                                        <strong>{{ $errors->first('password') }}</strong>
				                                    </span>
				                                @endif
											</p>
											<p class="form-row form-row-wide">
												<label for="reg_confirm_password">ยืนยันรหัสผ่านอีกครั้ง
												<span class="required">*</span></label>
												<input type="password" class="input-text" name="password_confirmation" id="password-confirm" required/>
											</p>
											<p class="form-row form-row-wide">
												<label for="reg_user">ชื่อ-นามสกุล
												<span class="required">*</span></label>
												<input type="name" class="input-text" name="name" id="name" value="{{ old('name') }}" required />
											</p>
											<p class="form-row form-row-wide">
												<label for="reg_email">อีเมล
												<span class="required">*</span></label>
												<input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" value="{{ old('email') }}" required/>
												@if ($errors->has('email'))
													<span class="invalid-feedback">
				                                        <strong>{{ $errors->first('email') }}</strong>
				                                    </span>
												@endif
											</p>
											<p class="form-row form-row-wide">
												<label for="reg_phone">เบอร์โทรศัพท์มือถือ
												<span class="required">*</span></label>
												<input type="phone" class="input-text" name="phone" id="phone" value="{{ old('phone') }}" required/>
											</p>


											<p class="form-row">
												<input type="submit" class="button" name="register" value="สมัครสมาชิก" />
											</p>

											<div class="register-benefits">
												<h3>สมัครสมาชิกวันนี้คุณสามารถ :</h3>
												<ul>
													<li>ติดตามข่าวสารของทางตู้ลำโพงเอี่ยมละออ</li>
													<li>สะดวกต่อการสั่งซื้อสินค้ามากยิ่งขึ้น</li>
													<li>ติดตามสินค้าลดราคารวดเร็วทันใจ</li>
												</ul>
											</div>

										</form>

									</div><!-- .col-2 -->

								</div><!-- .col2-set -->

							</div><!-- /.customer-login-form -->
						</div><!-- .woocommerce -->
					</div><!-- .entry-content -->

				</article><!-- #post-## -->

			</main><!-- #main -->
		</div><!-- #primary -->


	</div><!-- .col-full -->
</div><!-- #content -->