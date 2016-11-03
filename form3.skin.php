<form name="popfm_03" id="id_popfm_03" method="post" onsubmit="return false; ">
				<input type="hidden" name="wcode" value="RFP003">
                    <table class="advice">
                        <tr>
                            <th scope="row" id="input01-1"><label for="input01">이름</label></th>
                            <td headers="input01-1"><input type="text" name="uname" id="input01"
                                                           class="textfield" style="outline:none"
                                                           placeholder="이름을 입력해주세요."/></td>
                        </tr>
                        <tr>
                            <th scope="row" id="input02-1"><label for="input02">연락처</label></th>
                            <td headers="input02-1">
                                <select name="uhp1" id="select">
                                    <option value="010">010</option>
                                    <option value="011">011</option>
									<option value="016">016</option>
									<option value="018">018</option>
                                    <option value="019">019</option>
                                </select>
                                <input type="text" name="uhp2" id="input02" class="textfield"
                                       style="outline:none"/> <input type="text" name="uhp3" id="input02"
                                                                     class="textfield" style="outline:none"/></td>
                        </tr>
                        <tr>
                            <td colspan="2" scope="row"><label>개인정보수집 및 이용 동의<input type="checkbox" id="agree"
                                                                                    name="agree" required value="1"
                                                                                    class="required"></label></td>
                        </tr>
                    </table>
                    <span><input type="image" src="images/cont01-but04.jpg" alt="상담신청"
                                 onclick="setApply( document.popfm_03, 'id_popfm_03' );" style="padding-left:7px;"/></span>
                </form>