<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>옐로우에셋</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/pc.css" media="screen and(min-width:1024px)"/>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script type="text/javascript">

        jQuery(function ($) {
			
            var layerWindow = $('.mw_layer');

            var layer = $('#layer');

            // Show Hide

            $('.layer_trigger').click(function (event) {
                 $('#pop-example01').show();
				 $('#pop02').hide();
				 $('#pop01').hide();
                layerWindow.addClass('open');
			
            });
			
			$('.layer_trigger_pop1').click(function (event) {
                
				//target_id=$(this).attr("id");
               
				        $('#pop-example01').hide();
						$('#pop02').hide();
				        $('#pop01').show();
						layerWindow.addClass('open');
	 		
                
            });
			
			$('.layer_trigger_pop2').click(function (event) {
                
				//target_id=$(this).attr("id");
				
				        $('#pop-example01').hide();
						$('#pop01').hide();
				        $('#pop02').show();
						layerWindow.addClass('open');
                
            });
			

            $('#layer .close').click(function () {     

                layerWindow.removeClass('open');

            });


            /* ESC Event*/

            $(document).keydown(function (event) {

                if (event.keyCode != 27) return true;

                if (layerWindow.hasClass('open')) {

                    layerWindow.removeClass('open');

                }

                return false;

            });


            // Hide Window

            layerWindow.find('>.bg').mousedown(function (event) {

                layerWindow.removeClass('open');

                return false;

            });

        });

    </script>
</head>
<body>

<div id="Wrap">
    <!-- banner -->
    <div id="banner_wrap">
        <div id="banner">
            <div class="lf">
				<span><img src="images/top-banner01.jpg" alt="무료상담" class="m01"/><span>
				<span><img src="images/top-banner02.jpg" alt="캐쉬백지급" class="m01"/></span>
            </div>
            <div class="rt">
                <span><img src="images/top-banner03.jpg" alt="11개손해보험비교" class="m02"/></span>
                <span><img src="images/top-banner04.jpg" alt="암보험비교NO1" class="m02"/></span>
            </div>
        </div>
    </div>
    <!-- banner -->
    <!-- header -->
    <div id="header_wrap">
        <div id="header">
            <p id="logo"><img src="images/header-logo.png" alt="옐로우에셋 로고"/></p>
            <p id="title"><img src="images/header-title-icon.jpg" alt="1초암보험비교견적사이트"/></p>
			<?
				include_once("form1.skin.php");
			?>            
        </div>
    </div>
    <!-- header -->
    <!-- visual -->
    <div id="visual_wrap">
        <div id="visual">
            <p><img src="images/main-visual.png" alt="전문가가 제안하는 비갱신암보험"/></p>
            <p id="visual_btn01"><a href="http://www.direct-silbi.co.kr" target="_blank"><img src="images/main-but01.png" alt="의료실비보험비교"/></a></p>
        </div>
    </div>
    <!-- visual -->
    <!-- cont01 -->
    <div id="cont01_wrap">
        <div id="cont01">
            <div class="identify">
				<?
					include_once("form2.skin.php");
				?> 
            </div>
<?
	// 보험료 계산 결과
	include_once("reckoning.skin.php");
?>
            <div class="real_time">
			     <table class="present" style="text-align: center;line-height:25px;">
                    <tr>
						<th>년도 / 월 / 일</th>
					    <th>성함</th>
						<th>보험료</th>
                   </tr>
				   </table>
                <div id="obj_history_area" style="overflow: hidden;height: 155px;text-align: center;">
                </div>
						<?
							include_once("form3.skin.php");
						?>
            </div>

        </div>
    </div>
    <!-- cont01 -->
    <!-- cont02 -->
    <div id="cont02_wrap">
        <div id="cont02">
            <img src="images/cont02.jpg" alt="나에게 유리한 암보험은?"/>
        </div>
    </div>
    <!-- cont02 -->
    <!-- cont03 -->
    <div id="cont03_wrap">
         <div id="cont03">
            <p>보험가입시 <b>50% 캐쉬백 제공</b><br/><span>(3만원한도/손보제외)</span><br/><br/>
			<a href="#layer" class="layer_trigger_pop1" > <input type="image" src="images/cont03-but01.jpg" alt="신청하기" class="m03"/> </a></p>
            <p>원하시는 보험사 상품이 있으신 경우<br/><b>하단 견적신청을 눌러주세요</b><br/><span>32개 보험사 , 100여개 상품을 쉽고, 간편하게 보험료비교 해 드립니다.</span><br/><br/>
			<a href="#layer" class="layer_trigger_pop2"  > <input type="image" src="images/cont03-but02.jpg" alt="다른보험사견적신청" /> </a> </p>
        </div>
    </div>
    <!-- cont03 -->
    <!-- cont04 -->
    <div id="cont04_wrap">
        <div id="cont04">
            <img src="images/cont04.png" alt="가입자분들이 자주하는 질문모음"/>
        </div>
    </div>
    <!-- cont04 -->
    <!-- cont05 -->
    <div id="cont05_wrap">
        <div id="cont05">
            <img src="images/cont05-title.jpg" alt="MD가 추천하는 암보험리스트" / >
            <div class="recommend">
<?
	include_once("bohum_list.skin.php");
?>
            </div>
        </div>
    </div>
    <!-- cont05 -->
    <!-- cont06 -->
    <div id="cont06_wrap">
        <div id="cont06">
            <img src="images/cont06.jpg" alt="실시간카톡상담 무료상담고객센터 사랑을 실천합니다."/>
        </div>
    </div>
    <!-- cont06 -->

    <!-- partner -->
<?
	include_once("partner.skin.php");
?>
    <!-- partner -->
    <!-- footer -->
    <div id="footer_wrap">
        <div id="footer">
            <img src="images/footer-logo.png" alt="옐로우에셋로고"/>
            <img src="images/footer-line.png" alt="라인" class="m04"/>
            <address><span>●  옐로우에셋</span><br/><br/>사업자등록번호 : 845-48-00138 ｜대리점등록번호 : 20091278호<br/>주소 : 경기도 고양시 일산동구
                정발산로 42번길 38, 635호 (라이저오피스텔)<br/>무료상담전화 : 050-6191-5555 ｜ 제휴문의 : jazzfa@naver.com<br/>(주)글로벌금융판매 옐로우에셋은
                보험업법 제 149조에 의한 금융감독원 허가업체입니다.
            </address>
            <img src="images/footer-con01.png" alt="똑똑한 고객의 탁월한선택 암보험비교 1초 견적사이트" class="estimate"/>
        </div>
    </div>
    <!-- footer -->
    <!--레이어팝업 -->
    <div class="mw_layer">
        <div class="bg"></div>
        <div id="layer">
<?php
for($ary_i=1; $ary_i <= 6; $ary_i++)
{
	$title[1] = "메리츠화재(무)알파plus보장보험1604_암플랜";
	$title[2] = "MG손해보험(무)건강명의암보험1604";
	$title[3] = "흥국화재(무) 행복을 多주는가족사랑통합보험(16 08 )[암플랜]";
	$title[4] = "KB손해보험(무)KB닥터플러스건강보험(16.09)_암플랜";
	$title[5] = "현대해상(무)암스트롱보암험보(Hi1605)2종";
	$title[6] = "메리츠화재(무)메리츠걱정없는암보험1604(2종)";


	$confirm_no[1] = "손해보험협회 심의필 제2016-1340호(2016.10.19)";
	$confirm_no[2] = "손해보험협회 심의필 제2016-4005호(2016.10.04)";
	$confirm_no[3] = "손해보험협회 심의필 제2016-4564호(2016.10.04)";
	$confirm_no[4] = "손해보험협회 심의필 제2016-4910호(2016.10.31)";
	$confirm_no[5] = "손해보험협회 심의필 제2016-4605호(2016.10.10)";
	$confirm_no[6] = "손해보험협회 심의필 제2016-1341(2016.10.19)";


	$logo[1] = "images/pop-example01_logo.png";
	$logo[2] = "images/cont05-ci02.jpg";
	$logo[3] = "images/cont05-ci03.jpg";
	$logo[4] = "images/cont05-ci04.jpg";
	$logo[5] = "images/cont05-ci05.jpg";
	$logo[6] = "images/cont05-ci06.jpg";

	$gcode[1] = "GDS006";
	$gcode[2] = "GDS007";
	$gcode[3] = "GDS004";
	$gcode[4] = "GDS001";
	$gcode[5] = "GDS002";
	$gcode[6] = "GDS006";

?>
	<div id="pop-example01" class="pop_sec" no="<?=$ary_i?>" style="display: block;">
		<!-- close-->
		<div class="close"><a href="javascript:window.hide();"><img src="images/web_dw_close.png"></a></div>
		<!-- close end-->
		
		<!-- 정보입력-->
		<div class="top"><img src="<?=$logo[1]?>"/ ><br/>
			<h1><?=$title[$ary_i]?></h1>
		</div>

		<div>
			<div class="form_area">
				<form name="popfm_04<?=$ary_i?>" id="id_popfm_04<?=$ary_i?>" method="post" onsubmit="return false; ">
					<input type="hidden" name="wcode" value="RFP001">
					<input type="hidden" name="gcode" value="<?=$gcode[$ary_i]?>">
					<table>
						<tbody>
						<tr>
							<th>이름</th>
							<td><input type="text" name="uname" placeholder="이름을 입력해주세요." required=required></td>
							<td rowspan="2" class="btn">
								<input type="image" src="images/pop-example01-but01.png" alt="보험료계산" onclick="setApply_pop( document.popfm_04<?=$ary_i?>, 'id_popfm_04<?=$ary_i?>' );"/></a>
							</td>
						</tr>
						<tr>
							<th>연락처</th>
							<td><input type="text" name="uhp" placeholder="예) 010-1234-5678" required=required></td>
						</tr>
						</tbody>
					</table>
				</form>
			</div>
			<div class="p-e-reckoning">
				<div class="name"><span id="obj_result_tit<?=$ary_i?>" >고객</span>님의 <b>보험료</b>는</div>
				<div class="sum"><span id="obj_result_goods_<?=$ary_i?>">0</span>원 입니다.</div>
				<br/><br/>
				<p><strong><?=$title[$ary_i]?></strong><br/>
					<span><?=$confirm_no[$ary_i]?></span></p>
			</div>
			<!-- tab-->
		</div>
		<ul class="pop_tab func_tab_nav">
			<li id="pop_tab1" no="1" class="on">상품특징<i></i></li>
			<li id="pop_tab2" no="2">보장내용<i></i></li>
			<li id="pop_tab3" no="3">가입예시<i></i></li>
			<li id="pop_tab4" no="4">가입시알아둬야할사항<i></i></li>
			<li id="pop_tab5" no="5">보험료계산<i></i></li>
		</ul>
		<?
				include_once("bohum_info_0{$ary_i}.skin.php");	
		?>


		<!-- tab-->
		</div>

		<?
		}
		?>

		  <div id="pop01" style="display:none">
			<!-- close-->
				<div class="close"><a href="javascript:window.hide();"><img src="images/web_dw_close.png"></a></div>
			<!-- close end-->
			<!-- 정보입력-->
			<div id="info">
			<div class="make01">
				<input type="text" name="textfield" id="input01" class="textfield" />
				<input type="text" name="textfield" id="input01" class="textfield" style="margin-left:140px;" />
			</div>
			<div class="make02">
				<input type="text" name="textfield" id="input01" class="textfield"  />
				<select name="select" id="select" style="margin-left:140px;">
					<option>010</option>
					<option>011</option>
					<option>019</option>
				</select>
				<input type="text" name="textfield" id="input02" class="textfield" /> <input type="text" name="textfield" id="input02" class="textfield"  />
			</div>
			<div class="check">
				<input name="check" id="checkbox01" value="1" type="checkbox" /> 개인정보 수집 및 이용 동의 <input type="image" src="images/pop08-policy.png" alt="정책보기" />
			</div>
			</div>
			<!-- 정보입력 end-->
			<!-- 버튼-->
			<div id="but01">
				<input type="image" src="images/pop01-but01.png" alt="상담신청" />
			</div>
			<!-- 버튼 end-->
		</div>
			
		<div id="pop02"  style="display:none">
			<!-- close-->
				<div class="close"><a href="javascript:window.hide();"><img src="images/web_dw_close.png"></a></div>
			<!-- close end-->
			<!-- 정보입력-->
			<div id="info">
			<div class="make01">
				<input type="text" name="textfield" id="input01" class="textfield" />
				<input type="text" name="textfield" id="input01" class="textfield" style="margin-left:140px;" />
			</div>
			<div class="make02">
				<input type="text" name="textfield" id="input01" class="textfield" />
				<select name="select" id="select" style="margin-left:140px;">
					<option>010</option>
					<option>011</option>
					<option>019</option>
				</select>
				<input type="text" name="textfield" id="input02" class="textfield" /> <input type="text" name="textfield" id="input02" class="textfield"  />
			</div>
			<div class="check">
				<input name="check" id="checkbox01" value="1" type="checkbox" /> 개인정보 수집 및 이용 동의 <input type="image" src="images/pop08-policy.png" alt="정책보기" />
			</div>
			<div class="textarea">
			  <label for="textarea"></label>
			  <textarea name="textarea" id="textarea" class="textarea01" ></textarea>
			</div>
			</div>
			<!-- 정보입력 end-->
			<!-- 버튼-->
			<div id="but01">
				<input type="image" src="images/pop01-but01.png" alt="상담신청" />
			</div>
			<!-- 버튼 end-->
		</div>


     </div>
		
		
		
    </div>
    <!--레이어팝업 end-->
	
       
		
	
</div>


</body>

<script>
	function pop_init() {
		if( $('.func_pop_area').height() > ($(window).height()-20) )
		{
			$('.func_pop_area').height($(window).height()-40);
			
			$('.tab_area').height($(window).height()-40-65-436-100);
		}
	
	
		var margin_top = 0 - Math.ceil( ($('.func_pop_area').height()) / 2 );
		var margin_left = 0 - Math.ceil( ($('.func_pop_area').width()) / 2 );
		$('.func_pop_area').css( "margin-top" , margin_top );
		$('.func_pop_area').css( "margin-left" , margin_left );

		$('.func_pop_close_btn').bind('click').click(function() {
			$('.func_mask_area').fadeOut(300,0);
			$('.func_pop_area').fadeOut(300,0);
		});

	}

/*
$("#pop_tab1").click(function(){
        //console.log("pop_tab1");
        $("#pop_tab1").addClass("on");
        $("#pop_tab2").removeClass("on");
        $("#pop_tab3").removeClass("on");
        $("#pop_tab4").removeClass("on");

        $("#tab_content1").addClass("on");
        $("#tab_content2").removeClass("on");
        $("#tab_content3").removeClass("on");
        $("#tab_content4").removeClass("on");
    });
    $("#pop_tab2").click(function(){
        $("#pop_tab2").addClass("on");
        $("#pop_tab1").removeClass("on");
        $("#pop_tab3").removeClass("on");
        $("#pop_tab4").removeClass("on");

        $("#tab_content2").addClass("on");
        $("#tab_content1").removeClass("on");
        $("#tab_content3").removeClass("on");
        $("#tab_content4").removeClass("on");
    });
    $("#pop_tab3").click(function(){
        $("#pop_tab3").addClass("on");

        $("#pop_tab1").removeClass("on");
        $("#pop_tab2").removeClass("on");
        $("#pop_tab4").removeClass("on");

        $("#tab_content3").addClass("on");
        $("#tab_content2").removeClass("on");
        $("#tab_content1").removeClass("on");
        $("#tab_content4").removeClass("on");
    });
    $("#pop_tab4").click(function(){
        $("#pop_tab4").addClass("on");
        $("#pop_tab2").removeClass("on");
        $("#pop_tab3").removeClass("on");
        $("#pop_tab1").removeClass("on");

        $("#tab_content4").addClass("on");
        $("#tab_content2").removeClass("on");
        $("#tab_content3").removeClass("on");
        $("#tab_content1").removeClass("on");
    });

    $(function () {
//        $("#pop-example01").hide();
//        $('#Wrap').fadeTo(300,0.6);
//        $('#Wrap').fadeTo(300,1.0);
//        pop_init();
    });
*/
    function pop_open(no, show) {

		if (!realtime_estimate.uname.value)
		{
			show = 5;
		}

        $('.pop_sec').hide();
        $('.pop_sec[no=' + no + ']').show();
        $('.func_mask_area').fadeTo(300, 0.6);
        $('.func_pop_area').fadeTo(300, 1.0);
        $('.tab_area').hide();
        $('.tab_area[no=' + show + ']').show();
		
        $('.func_tab_nav').find('li').removeClass('on');
        $('.func_tab_nav').find('li[no=' + show + ']').addClass('on');


        pop_init();
    }

	function pop_price_open(no) {
        $('.pop_price_sec').hide();
        $('.pop_price_sec[no=' + no + ']').show();
    }

	$('.func_tab_nav').find('li').click(function(){
		tab_no = parseInt($(this).attr('no'));
		$('.func_tab_nav').find('li').removeClass('on');
		$(this).addClass('on');
		
		$('.tab_area[no=' + tab_no + ']').addClass("on");

		$('.tab_area').hide();
		$('.tab_area[no='+tab_no+']').show();
		
		pop_init();
	});



    $('.func_estimate_ok').click(function () {
        var fm = $('form[name=realtime_estimate]');


        if (!fm.find('input[name=uname]').val()) {
            alert('이름을 입력해주세요.');
            fm.find('input[name=uname]').focus();
            return false;
        }

        if (!fm.find('input[name=ubirth]').val()) {
            alert('생년월일을 입력해주세요.');
            fm.find('input[name=ubirth]').focus();
            return false;
        }

        if (fm.find('input[name=ubirth]').val().length != 8) {
            alert('생년월일 8자리를 정확하게 입력해주세요.');
            fm.find('input[name=ubirth]').focus();
            return false;
        }

        if (!fm.find('input[name=uhp_2]').val() || !fm.find('input[name=uhp_3]').val()) {
            alert('연락처를 입력해주세요.');
            fm.find('input[name=uhp_2]').focus();
            return false;
        }

        if (fm.find('input[name=agree]:checkbox:checked').val() != 1) {
            alert('개인정보 활용 수집동의에 체크해주세요.');
            fm.find('input[name=agree]').focus();
            return false;
        }

        var o_OBJ = {};
        o_OBJ = fm.serializeArray();

        console.log(fm.serializeArray());
//        JSON.stringify(fm.toJSON());

        $.ajax({
            url: "http://www.direct-silbi.co.kr/proc/get_estimate_SITE02.php",
            data: o_OBJ,
            dataType: "json",
            type: "POST",
            timeout: 5000,
            error: function (xhr, ajaxOptions, thrownError) {
                alert("오류가 발생하였습니다.\n잠시후에 시도해주세요.");
                console.log(thrownError);
                console.log(xhr);
                console.log(ajaxOptions);
            },
            success: function (data) {
                console.log('success');
                console.log(data);


                if (data.code == "ERR") {
                    alert(data.msg);
                } else {
					alert(data.ary_data.uname + "님의 보험료 계산 결과 입니다.\n\r\우측의 보험사별 보험료 보기를 클릭하시면\n\r\자세한 보험료와 상품설명을 확인 하실 수 있습니다.\n\r");

					$("#reckoning1").attr("src","images/cont01-check01.gif");
					$("#reckoning2").attr("src","images/cont01-check02.gif");
					$("#reckoning3").attr("src","images/cont01-check03.gif");
					$("#reckoning4").attr("src","images/cont01-check04.gif");
					$("#reckoning5").attr("src","images/cont01-check05.gif");
					$("#reckoning6").attr("src","images/cont01-check01.gif");

                    $('#calculate_name').html(fm.find('input[name=uname]').val());
                    $('#calculate_name2').html(fm.find('input[name=uname]').val());
                    $('#calculate_name3').html(fm.find('input[name=uname]').val());

                    $('#pop_name').html(fm.find('input[name=uname]').val());
//                    $('#pop_price').html(data["ary_data"]["uage"]);

                    var a = data.ary_data;

                    console.log(a);

                    $('#calculate_age').html(data["ary_data"]["uage"]);

                    //네이버프리미엄로그전환스킙트
					/*
                    if (!wcs_add) var wcs_add = {};
                    wcs_add["wa"] = "s_2bca22342cd1";
                    var _nasa = {};
                    _nasa["cnv"] = wcs.cnv("4", "1"); // 전환유형, 전환가치 설정해야함. 설치매뉴얼 참고
                    wcs_do(_nasa);
                    //네이버프리미엄로그전환스킙트
					*/
                    $('.obj_result_tit').html('<b>' + data.ary_data.uname + '</b>님<span>보험료 계산결과</span>');
					
					$('#obj_result_tit1').html('<b>' + data.ary_data.uname + '</b>');
					$('#obj_result_tit2').html('<b>' + data.ary_data.uname + '</b>');
					$('#obj_result_tit3').html('<b>' + data.ary_data.uname + '</b>');
					$('#obj_result_tit4').html('<b>' + data.ary_data.uname + '</b>');
					$('#obj_result_tit5').html('<b>' + data.ary_data.uname + '</b>');
					$('#obj_result_tit6').html('<b>' + data.ary_data.uname + '</b>');

                    $('#obj_result_goods_1').html(data.ary_data.estimate[0]);
                    $('#obj_result_goods_2').html(data.ary_data.estimate[1]);
                    $('#obj_result_goods_3').html(data.ary_data.estimate[2]);
                    $('#obj_result_goods_4').html(data.ary_data.estimate[3]);
                    $('#obj_result_goods_5').html(data.ary_data.estimate[4]);
                    $('#obj_result_goods_6').html(data.ary_data.estimate[5]);
                    $('.obj_result_name').text(data.ary_data.uname);
                    $('.obj_result_age').text(data.ary_data.uage);

                    //getInquiryList();
                    /*
                     $('form').each(function() {
                     this.reset();
                     });
                     */

                }

            }
        });

    });


function setApply_pop(fm, fm_id) {
        if (fm.uname.value.length < 2) {
            alert("이름을 입력해주세요.");
            fm.uname.focus();
            return false;
        }


        if (fm.uhp.value.length < 11) {
            alert('연락처를 입력해주세요.');
            fm.find('input[name=uhp]').focus();
            return false;
        }


//        if (fm.uhp.value.length < 10) {
//            alert("연락처를 입력해주세요.");
//            fm.uhp.focus();
//            return false;
//        }

       

        $('#' + fm_id).ajaxSubmit({
            url: "http://www.direct-silbi.co.kr/proc/set_consulting_SITE02.php",
            dataType: 'json',
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr);
                console.log(ajaxOptions);
                console.log(thrownError);
                alert("오류가 발생하였습니다.\n잠시후에 시도해주세요.");
            },
            beforeSend: function () {

            },
            uploadProgress: function (event, position, total, percentComplete) {

            },
            success: function (data) {

                console.log(data);

                if (data.code == "OK") {
                    //네이버프리미엄로그전환스킙트
//                    if (!wcs_add) var wcs_add = {};
//                    wcs_add["wa"] = "s_2bca22342cd1";
//                    var _nasa = {};
//                    _nasa["cnv"] = wcs.cnv("4", "1"); // 전환유형, 전환가치 설정해야함. 설치매뉴얼 참고
//                    wcs_do(_nasa);
//                    //네이버프리미엄로그전환스킙트

                    alert('고객님의 상담신청이 정상 접수되었습니다.');
                    $('form').each(function () {
                        this.reset();
                    });
                    $('.func_agree_btn').removeClass('on').next().val(0);

                }
                else if (data.code == "ERR") {
                    alert(data.msg);
                }

            },
            complete: function (xhr) {

            }
        });


    }

    function setApply(fm, fm_id) {

        if (fm.uname.value.length < 2) {
            alert("이름을 입력해주세요.");
            fm.uname.focus();
            return false;
        }


        if (fm.uhp2.value.length < 4 || fm.uhp2.value.length < 4) {
            alert('연락처를 입력해주세요.');
            fm.find('input[name=uhp2]').focus();
            return false;
        }


//        if (fm.uhp.value.length < 10) {
//            alert("연락처를 입력해주세요.");
//            fm.uhp.focus();
//            return false;
//        }

        if (!fm.agree.checked) {
            alert("개인정보 활용에 동의해주세요.");
            fm.agree.focus();
            return false;
        }

        $('#' + fm_id).ajaxSubmit({
            url: "http://www.direct-silbi.co.kr/proc/set_consulting_SITE02.php",
            dataType: 'json',
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr);
                console.log(ajaxOptions);
                console.log(thrownError);
                alert("오류가 발생하였습니다.\n잠시후에 시도해주세요.");
            },
            beforeSend: function () {

            },
            uploadProgress: function (event, position, total, percentComplete) {

            },
            success: function (data) {

                console.log(data);

                if (data.code == "OK") {
                    //네이버프리미엄로그전환스킙트
//                    if (!wcs_add) var wcs_add = {};
//                    wcs_add["wa"] = "s_2bca22342cd1";
//                    var _nasa = {};
//                    _nasa["cnv"] = wcs.cnv("4", "1"); // 전환유형, 전환가치 설정해야함. 설치매뉴얼 참고
//                    wcs_do(_nasa);
//                    //네이버프리미엄로그전환스킙트

                    alert('고객님의 상담신청이 정상 접수되었습니다.');
                    $('form').each(function () {
                        this.reset();
                    });
                    $('.func_agree_btn').removeClass('on').next().val(0);

                }
                else if (data.code == "ERR") {
                    alert(data.msg);
                }

            },
            complete: function (xhr) {

            }
        });


    }

    $(function () {
        getInquiryList();
    });


    function getInquiryList() {

        $.post("http://www.direct-silbi.co.kr/proc/get_history_SITE02.php", {'hand': 'get'}, function (d) {

            $('#obj_history_area').html(d);
			
            $('#obj_history_area').scrollTop(4100);
           rollInquiryList();
			 
		

        });
    }

			
    var roll_list = '';

    function rollInquiryList() {

        clearTimeout(roll_list);

        var h = $('#obj_history_area').scrollTop() - 30;

        $('#obj_history_area').animate({scrollTop: h}, '250', 'swing', function () {
        });

        roll_list = setTimeout("rollInquiryList();", 3000);
    }

    function radio_Test() {

        var radio_chk = document.getElementById("r_circle01");

        var radio_chk2 = document.getElementById("r_circle02");

        var a123 = document.getElementById("a123");
        var a456 = document.getElementById("a456");

        if (radio_chk.checked == true) {


            a123.src = "images/cont01-but01_on.jpg";

        } else {


            a123.src = "images/cont01-but01.jpg";

        }

        if (radio_chk2.checked == true) {


            a456.src = "images/cont01-but02_on.jpg";

        } else {


            a456.src = "images/cont01-but02.jpg";

        }

    }


</script>
</html>
