<!DOCTYPE html>

<html>

<head>
	<title>쥬시 알바</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<script>
		window.onload = function(){
			
		}
		
	</script>
	
	<style>
		body {
			font-family: Malgun-Gothic, Sans-serif;
			margin: 0;
		}
		
		ul#menu {
			list-style-type: none;
		}
		
		ul#menu li {
			display: inline;
		}
		
		ul#menu a {
			color: black;
			text-decoration: none;
		}
		
		ul#menu a:hover {
			color: blue;
		}
		
		.box ul {
			list-style-type: none;
			margin: 0px;
			padding: 10px;
		}
		
		.selection-info {
			border: 1px dotted black;
			border-radius: 10px;
			display: inline;
		}
		
	</style>
</head>

<body>

<header>
	
	<div style="text-align: center;">
		<img id="logo" src="pic/logo.jpg"/>
	</div>
	
</header>

<div id="sticky-side-menu" class="container">

	<div class="row">
		
		<nav class="col-sm-12" style="padding: 0px;">
			<ul id="menu" style="font-size: 20px; border: 1px solid black; text-align: center;">
				<li><a href="#">채용정보</a> / </li>
				<li><a href="#">인재정보</a> / </li>
				<li><a href="#">프리랜서</a> / </li>
				<li><a href="#">스폰서</a> / </li>
				<li><a href="#">하우징</a> / </li>
				<li><a href="#">마이페이지</a> / </li>
				<li><a href="#">셀렉션</a> / </li>
				<li><a href="#">쥬시톡</a> / </li>
				<li><a href="#">검색</a> / </li>
				<li><a href="#">결제</a></li>
			</ul>
		</nav>
	
	</div>

	<div class="row">
	
		<div id="fixed-side-menu" class="col-sm-3" style="border: 1px solid black;">
	
			<br />
	
			<nav>
				<ul class="nav" data-spy="affix" data-offset-top="100">
					<li>
						<div id="recruit-info-selection" class="selection">
							채용정보 셀렉션
							<button style="float: right;" type="button" class="btn btn-default btn-sm">
								<span class="glyphicon glyphicon-remove"></span>
							</button>
							<div>
								<section class="selection-info">
									Recruitment Information
								</section>
							</div>
							<br />
						</div>
					</li>
					<li>
						<div id="seeker-info-selection" class="selection">
							인재정보 셀렉션
							<button style="float: right;" type="button" class="btn btn-default btn-sm">
								<span class="glyphicon glyphicon-remove"></span>
							</button>
							<div>
								<section class="selection-info">
									Seeker Information
								</section>
							</div>
							<br />
						</div>
					</li>
					<li>
						<div id="freelancer-info-selection" class="selection">
							프리랜서 셀렉션
							<button style="float: right;" type="button" class="btn btn-default btn-sm">
								<span class="glyphicon glyphicon-remove"></span>
							</button>
							<div>
								<section class="selection-info">
									Freelancer Information
								</section>
							</div>
							<br />
						</div>
					</li>
					<li>
						<div id="sponsor-info-selection" class="selection">
							스폰서 셀렉션
							<button style="float: right;" type="button" class="btn btn-default btn-sm">
								<span class="glyphicon glyphicon-remove"></span>
							</button>
							<div>
								<section class="selection-info">
									Sponsor Information
								</section>
							</div>
							<br />
						</div>
					</li>
					<li>
						<div id="housing-info-selection" class="selection">
							하우징 셀렉션
							<button style="float: right;" type="button" class="btn btn-default btn-sm">
								<span class="glyphicon glyphicon-remove"></span>
							</button>
							<div>
								<section class="selection-info">
									Housing Information
								</section>
							</div>
							<br />
						</div>
					</li>
				</ul>
			</nav>
		
		</div>
	
		<div class="col-sm-9">
			
			<div id="info-box" class="box" style="border: 1px solid black;">
				
				<ul>
					<li>(1) 채용정보 – 채용정보 분류, 채용정보 검색필터 </li>
					<li>(2) 인재정보 – 인재정보 분류, 인재정보 검색필터</li>
					<li>(3) 프리랜서 - 프로필 분류, 프로필 검색필터</li>
					<li>(4) 스폰서 – 프로필 분류, 프로필 검색필터</li>
					<li>(5) 하우징 – 부동산 분류, 부동산 검색필터</li>
					<li>(6) 마이페이지 – 페이지모드 (기업/인재/프리랜서/스폰서/하우징)</li>	
				</ul>
			
			</div>
			
			<br />
			
			<div id="ad-box" class="box" style="border: 1px solid black;">
				
				<ul>
					<li>(1) 채용정보 – 박스광고, 핫광고,</li>
					<li>(2) 인재정보 – 좌우로 지나가는 포토광고</li>
					<li>(3) 프리랜서 – 좌우로 지나가는 포토광고</li>
					<li>(4) 스폰서 – 좌우로 지나가는 포토광고</li>
					<li>(5) 하우징 – 별도의 광고 없음</li>
					<li>(6) 마이페이지 – 맞춤광고 (기업 - 인재, 하우징, 프리랜서 / 인재 - 기업, 하우징, 스폰서 / 프리랜서 - 스폰서, 하우징, 기업 / 스폰서 - 프래린서, 인재, 하우징</li>	
				</ul>
			
			</div>
			
			<br />

			<div class="box" style="border: 1px solid black;">
				
				<ul>
					<li>(1) 채용정보 – 박스광고, 핫광고,</li>
					<li>(2) 인재정보 – 좌우로 지나가는 포토광고</li>
					<li>(3) 프리랜서 – 좌우로 지나가는 포토광고</li>
					<li>(4) 스폰서 – 좌우로 지나가는 포토광고</li>
					<li>(5) 하우징 – 부동산 분류, 부동산 검색필터</li>
					<li>(6) 마이페이지 – 페이지모드 (기업/인재/프리랜서/스폰서/하우징)</li>	
				</ul>
			
			</div>
			
			<br />
			
			<div class="box" style="border: 1px solid black;">
				
				<ul>
					<li>(1) 채용정보 – 박스광고, 핫광고,</li>
					<li>(2) 인재정보 – 좌우로 지나가는 포토광고</li>
					<li>(3) 프리랜서 – 좌우로 지나가는 포토광고</li>
					<li>(4) 스폰서 – 좌우로 지나가는 포토광고</li>
					<li>(5) 하우징 – 부동산 분류, 부동산 검색필터</li>
					<li>(6) 마이페이지 – 페이지모드 (기업/인재/프리랜서/스폰서/하우징)</li>	
				</ul>
			
			</div>
			
			<br />
			
		</div>

	</div>
</div>



<section>

</section>

</body>



</html>