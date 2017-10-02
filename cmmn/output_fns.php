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
			<li><a href="#" data-toggle="modal" data-target="#login-modal">로그인</a> / </li>
			<li><a href="#">회원정보</a> / </li>
			<li><a href="#">페이지 &amp; 필터 관리</a> / </li>
			<li><a href="#">담기 &amp; 요청</a> / </li>
			<li><a href="recruit_announcement.php">채용공고</a> / </li>
			<li><a href="seeker_info.php">인재정보</a> / </li>
			<li><a href="freelancer.php" style="color: red;">프리랜서</a> / </li>
			<li><a href="sponsor.php" style="color: red;">스폰서</a> / </li>
			<li><a href="lodging.php">숙소</a> / </li>
			<li><a href="business.php">업소</a> / </li>
			<li><a href="support.php">협찬</a> / </li>
			<li><a href="#">이용안내</a></li>
		</ul>
	</nav>

</div>
	
<?php
}
?>

<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" align="center">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
				<h4 id="action-option">로그인 옵션</h4>
			</div>
               
			<div class="modal-body" align="center" >
				
				<div>
					<form action="" method="POST">
						<button id="login-with-fb" type="submit" class="btn btn-primary" style="display: block; margin: auto; width: 85%; margin-bottom: 5px;">페이스북으로 로그인 하기</button>
					</form>
				</div>
			
				<div>
					<form action="" method="POST">
						<button id="login-with-gg" type="button" class="btn btn-danger" style="display: block; margin: auto; width: 85%">구글로 로그인 하기</button>
					</form>
				</div>
				
				<br>
				
				<div align="center">
					<span>또는</span>
					
				</div>
			   
			</div>
			   
               <!-- Begin # DIV Form -->
               <div id="div-forms">
               
                   <!-- Begin # Login Form -->
                   <form id="login-form">
	                <div class="modal-body">
			    		
			    		<input id="login_username" class="form-control" type="text" placeholder="이메일 주소" required>
			    		<input id="login_password" class="form-control" type="password" placeholder="비밀번호" required>
						
                        <!--<div class="checkbox">
                            <label>
                                <input type="checkbox"> 비밀번호 저장
                            </label>
                        </div>-->
						
       		    	</div>
			        <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">로그인</button>
                        </div>
			    	    <div>
                            <button id="login_lost_btn" type="button" class="btn btn-link">비밀번호가 생각나지 않으세요?</button>
                            <button id="login_register_btn" type="button" class="btn btn-link" style="margin: 0px;">쥬시 알바 계정이 없으세요?</button>
                        </div>
			        </div>
                   </form>
                   <!-- End # Login Form -->
                   
                   <!-- Begin | Lost Password Form -->
                   <form id="lost-form" style="display:none;">
        		    <div class="modal-body">
	    				<div id="div-lost-msg">
                               <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                               <span id="text-lost-msg">Type your e-mail.</span>
                           </div>
	    				<input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
           			</div>
	    		    <div class="modal-footer">
                           <div>
                               <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                           </div>
                           <div>
                               <button id="lost_login_btn" type="button" class="btn btn-link">로그인</button>
                               <button id="lost_register_btn" type="button" class="btn btn-link">쥬시 알바 계정이 없으세요?</button>
                           </div>
	    		    </div>
                   </form>
                   <!-- End | Lost Password Form -->
                   
                   <!-- Begin | Register Form -->
                   <form id="register-form" style="display:none;">
           		    <div class="modal-body">
	    				<div id="div-register-msg">
                               <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                               <span id="text-register-msg">Register an account.</span>
                           </div>
	    				<input id="register_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                           <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                           <input id="register_password" class="form-control" type="password" placeholder="Password" required>
           			</div>
	    		    <div class="modal-footer">
                           <div>
                               <button type="submit" class="btn btn-primary btn-lg btn-block">쥬시 알바 계정이 없으세요?</button>
                           </div>
                           <div>
                               <button id="register_login_btn" type="button" class="btn btn-link">로그인</button>
                               <button id="register_lost_btn" type="button" class="btn btn-link">비밀번호가 생각나지 않으세요?</button>
                           </div>
	    		    </div>
                   </form>
                   <!-- End | Register Form -->
                   
               </div>
               <!-- End # DIV Form -->
               
		</div>
	</div>
</div>
<!-- END # MODAL LOGIN -->