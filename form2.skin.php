<form name="realtime_estimate"  onsubmit="return false;">
                    <input type="hidden" name="wcode" value="RFP001">
                    <table>
                        <caption style="display:none">내 암보험료는 얼마</caption>
                        <tr>
                            <th scope="row" id="input01-1"><label for="input01">이름</label></th>
                            <td headers="input01-1"><input type="text" name="uname" id="input01" class="textfield"
                                                           style="outline:none" placeholder="이름을 입력해주세요."/></td>
                        </tr>
                        <tr>
                            <th scope="row" id="input01-1"><label for="input01">생년월일</label></th>
                            <td headers="input01-2"><input type="text" name="ubirth" id="input01" class="textfield"
                                                           style="outline:none" placeholder="예)19860120"/></td>
                        </tr>
                        <tr>
                            <th scope="row" id="input03-1"><label>성별</label></th>
                            <td><input type="radio" name="usex" id="r_circle01" value="M" onclick="radio_Test();"/><label
                                    for="r_circle01"><img id="a123" src="images/cont01-but01.jpg"
                                                          alt="남자"/></label>
                                <input type="radio" name="usex" value="F"
                                       id="r_circle02"
                                       onclick="radio_Test();"/><label
                                        for="r_circle02"><img id="a456" src="images/cont01-but02.jpg" alt="여자" /
                                    ></label>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row" id="input02-1"><label for="input02">연락처</label></th>
                            <td headers="input02-1">
                                <select name="uhp_1" id="select">
                                    <option value="010">010</option>
                                    <option value="011">011</option>
									<option value="016">016</option>
									<option value="018">018</option>
                                    <option value="019">019</option>
                                </select>
                                <input type="text" name="uhp_2" id="input02" class="textfield"
                                       style="outline:none"/>
                                <input type="text" name="uhp_3" id="input02" class="textfield"
                                       style="outline:none"/></td>
                        </tr>
                        <tr>
                            <td colspan="2" scope="row"><label>개인정보수집 및 이용 동의</label><input type="checkbox" id="agree"
                                                                                            name="agree" required
                                                                                            value="1"
                                                                                            class="required"></td>
                        </tr>
                    </table>
                    <span><input class="func_estimate_ok" type="image" src="images/cont01-but03.jpg"
                                 alt="내 보험료 확인"/></span>
                </form>