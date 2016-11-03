<div id="partner_area">
        <img src="images/partner-title.jpg" alt="여러보험사의 100여개 상품을 서로 비교해보고, 나의 보험료를 직접 확인하신 후 가입하실 수 있습니다."/>
        <div class="area_wrap">
            <div class="roll_area">
                <img src="images/partner_1.jpg" no="1" style="left: 0px;">
                <img src="images/partner_2.jpg" no="2" style="left: -950px; display: block;">
                <img src="images/partner_3.jpg" no="3" style="left: -950px; display: block;">
            </div>
            <a class="lt" onclick="rolling_area.left();"></a>
            <a class="rt" onclick="rolling_area.right();"></a>
        </div>
        <script>

            var roll_obj;
            var roll_no = 1;
            var roll_cnt = 3;
            var roll_sec = 6000;
            var roll_ing = 0;
            var _next_no = 0;

            var rolling_area = {

                left: function () {

                    if (roll_ing == 0) {

                        roll_ing = 1;

                        clearTimeout(roll_obj);

                        _next_no = roll_no - 1;

                        if (_next_no < 1)
                            _next_no = roll_cnt;


                        $('.roll_area').find('img[no=' + roll_no + ']').stop().css('left', '0px').show().animate({left: 950}, {
                            queue: false, duration: 700,
                            complete: function () {

                            }
                        });


                        $('.roll_area').find('img[no=' + _next_no + ']').stop().css('left', '-950px').show().animate({left: 0}, {
                            queue: false, duration: 700,
                            complete: function () {
                                roll_ing = 0;
                                roll_no = _next_no;
                            }
                        });

//					roll_obj = setTimeout("rolling_area.left();", 6000);

                    }

                },
                right: function () {

                    if (roll_ing == 0) {

                        roll_ing = 1;

                        clearTimeout(roll_obj);

                        _next_no = roll_no + 1;

                        if (_next_no > roll_cnt)
                            _next_no = 1;


                        $('.roll_area').find('img[no=' + roll_no + ']').stop().css('left', '0px').show().animate({left: -950}, {
                            queue: false, duration: 700,
                            complete: function () {
                            }
                        });


                        $('.roll_area').find('img[no=' + _next_no + ']').stop().css('left', '950px').show().animate({left: 0}, {
                            queue: false, duration: 700,
                            complete: function () {
                                roll_ing = 0;
                                roll_no = _next_no;
                            }
                        });

//					roll_obj = setTimeout("rolling_area.right();", 6000);

                    }

                }
            }

            roll_obj = setTimeout("rolling_area.right();", 6000);
        </script>
    </div>