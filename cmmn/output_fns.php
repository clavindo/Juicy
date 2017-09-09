<?php

function output_header() {
?>

<header>
	
	<div style="text-align: center;">
		<a href="index.php"><img id="logo" src="pic/logo.jpg"/></a>
	</div>
	
</header>

<?php
}

function output_menu() {
?>

<div class="row">
	
	<nav class="col-sm-12" style="padding: 0px;">
		<ul id="menu" style="font-size: 20px; border: 1px solid black; text-align: center;">
			<li><a href="#" data-toggle="modal" data-target="#loginModal">로그인</a> / </li>
			<li><a href="#">회원정보</a> / </li>
			<li><a href="#">페이지 &amp; 필터 관리</a> / </li>
			<li><a href="#">담기 &amp; 요청</a> / </li>
			<li><a href="recruit_announcement.php">채용공고</a> / </li>
			<li><a href="seeker_info.php">인재정보</a> / </li>
			<li><a href="#" style="color: red;" >프리랜서</a> / </li>
			<li><a href="#" style="color: red;" >스폰서</a> / </li>
			<li><a href="lodging.php">숙소</a> / </li>
			<li><a href="business.php">업소</a> / </li>
			<li><a href="#">협찬</a> / </li>
			<li><a href="#">이용안내</a></li>
		</ul>
	</nav>

</div>
	
<?php
}

?>

<div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
	  
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center;">로그인 옵션</h4>
        </div>
        
		<div class="modal-body">
		  <div>
			<form action="" method="POST">
				<button type="submit" class="btn btn-primary" style="display: block; margin: auto; width: 85%; margin-bottom: 5px;">페이스북으로 로그인하기</button>
			</form>
		  </div>
          <div>
			<form action="" method="POST">
				<button type="button" class="btn btn-danger" style="display: block; margin: auto; width: 85%">구글로 로그인하기</button>
			</form>
		  </div>
        </div>
		
		<form action="" method="POST">
		
			<div>
				<input style="margin-bottom: 5px;" class="signin-input" type="email" id="signin_email" name="email" placeholder="이메일 주소"/>
			</div>
		
			<div>
				<input style="margin-bottom: 8px;" class="signin-input" type="password" id="signin_passowrd" name="password" placeholder="비밀번호" />
			</div>
			
			<div>
				<a style="margin-left: 50px; margin-bottom: -25px; color: #484848;" href="/forgot_password" data-form="email">비밀번호가 생각나지 않으세요?</a>
			</div>
			
			<div>
				<button style="margin-bottom: 10px; width: 85%; margin: auto;" type="submit" class="btn btn-block signup-login-form__btn-xl btn-primary btn-large" id="user-login-btn">로그인</button>
			</div>
		</form>
		
		<br />
		
		<div class="modal-footer">
			<div>
				<span style="float: left;">쥬시 알바 계정이 없으세요?</span>
				<span>
					<a style="text-decoration: none !important;" id="btn-modal-register" href="">회원 가입</a>
				</span>
			</div>
		</div>
		
        <!--<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>-->
      </div>
      
    </div>
  </div>