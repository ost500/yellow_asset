<form name="popfm_02" id="id_popfm_02" method="post" onsubmit="return false; ">
                <div id="box">
                    <input type="hidden" name="wcode" value="RFP003">

                    <table id="counseling">
                        <caption style="display:none">무료상담</caption>
                        <tr summary="무료상담">
                            <th scope="row" id="input01-1"><label for="input01">이름</label></th>
                            <td headers="input01-1"><input type="text" name="uname" id="input01" class="textfield"
                                                           style="outline:none" placeholder="이름을 입력해주세요." required=required/></td>
                            <th scope="row" id="input02-1"><label for="input02">연락처</label></th>
                            <td headers="input02-1">
                                <select name="uhp1" id="select" required=required>
                                    <option value="010">010</option>
                                    <option value="011">011</option>
									<option value="016">016</option>
									<option value="018">018</option>
                                    <option value="019">019</option>
                                </select>
                                <input type="text" name="uhp2" id="input02" class="textfield"
                                       style="outline:none" maxlength="4" required=required/>
                                <input type="text" name="uhp3" id="input02" class="textfield"
                                       style="outline:none" maxlength="4" required=required/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" scope="row" class="coun_check"><label>개인정보수집 및 이용 동의<input type="checkbox"
                                                                                                       id="agree"
                                                                                                       name="agree01"
                                                                                                       required=required
                                                                                                       value="1"
                                                                                                       class="required"></label>
                            </td>
                        </tr>
                    </table>

                    <span class="counsel_btn"><input type="image" src="images/header-but.jpg" alt="무료상담신청"
                                                     onclick="setApply( document.popfm_02, 'id_popfm_02' );"/></span>
                </div>
            </form>