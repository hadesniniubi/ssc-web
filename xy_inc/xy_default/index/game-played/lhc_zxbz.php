<input type="hidden" name="playedGroup" value="<?=$this->groupId?>" />
<input type="hidden" name="playedId" value="<?=$this->played?>" />
<input type="hidden" name="type" value="<?=$this->type?>" />
	<div class="dGameStatus">
        <span class="sTitle">自选不中<span class="sNote"><!--(&nbsp;单注最高派彩：1,000,000人民币&nbsp;)--></span></span>
        <table>
            <tbody><tr class="specialtr">
                <td class="boldborder"><label><input type="radio" value="NOHIT5" name="txtGameItem" rel="5" pri="<?=$this->getLHCRte('RteNOHIT5',$this->played)?>" maxlen="500" class="inputnoborder"><span>五不中</span></label>
                </td>
                <td class="boldborder"><label><input type="radio" value="NOHIT6" name="txtGameItem" rel="6" pri="<?=$this->getLHCRte('RteNOHIT6',$this->played)?>" maxlen="450" class="inputnoborder"><span>六不中</span></label>
                </td>
                <td class="boldborder"><label><input type="radio" value="NOHIT7" name="txtGameItem" rel="7" pri="<?=$this->getLHCRte('RteNOHIT7',$this->played)?>" maxlen="420" class="inputnoborder"><span>七不中</span></label>
                </td>
                <td class="boldborder"><label><input type="radio" value="NOHIT8" name="txtGameItem" rel="8" pri="<?=$this->getLHCRte('RteNOHIT8',$this->played)?>" maxlen="400" class="inputnoborder"><span>八不中</span></label>
                </td>
                <td class="boldborder"><label><input type="radio" value="NOHIT9" name="txtGameItem" rel="9" pri="<?=$this->getLHCRte('RteNOHIT9',$this->played)?>" maxlen="220" class="inputnoborder"><span>九不中</span></label>
                </td>
                <td class="boldborder"><label><input type="radio" value="NOHIT10" name="txtGameItem" rel="10" pri="<?=$this->getLHCRte('RteNOHIT10',$this->played)?>" maxlen="200" class="inputnoborder"><span>十不中</span></label></td>
                <td class="boldborder"><label><input type="radio" value="NOHIT11" name="txtGameItem" rel="11" pri="<?=$this->getLHCRte('RteNOHIT11',$this->played)?>" maxlen="180" class="inputnoborder"><span>十一不中</span></label></td>
                <td><label><input type="radio" value="NOHIT12" name="txtGameItem" rel="12" pri="<?=$this->getLHCRte('RteNOHIT12',$this->played)?>" maxlen="150" class="inputnoborder"><span>十二不中</span></label>
                </td>
            </tr>
            <tr>
                <td class="boldborder"><span class="sRte" id="RteNOHIT5" style="color: BLUE;"><?=$this->getLHCRte('RteNOHIT5',$this->played)?></span></td>
                <td class="boldborder"><span class="sRte" id="RteNOHIT6" style="color: BLUE;"><?=$this->getLHCRte('RteNOHIT6',$this->played)?></span></td>
                <td class="boldborder"><span class="sRte" id="RteNOHIT7" style="color: BLUE;"><?=$this->getLHCRte('RteNOHIT7',$this->played)?></span></td>
                <td class="boldborder"><span class="sRte" id="RteNOHIT8" style="color: BLUE;"><?=$this->getLHCRte('RteNOHIT8',$this->played)?></span></td>
                <td class="boldborder"><span class="sRte" id="RteNOHIT9" style="color: BLUE;"><?=$this->getLHCRte('RteNOHIT9',$this->played)?></span></td>
                <td class="boldborder"><span class="sRte" id="RteNOHIT10" style="color: BLUE;"><?=$this->getLHCRte('RteNOHIT10',$this->played)?></span></td>
                <td class="boldborder"><span class="sRte" id="RteNOHIT11" style="color: BLUE;"><?=$this->getLHCRte('RteNOHIT11',$this->played)?></span></td>
                <td><span class="sRte" id="RteNOHIT12" style="color: BLUE;"><?=$this->getLHCRte('RteNOHIT12',$this->played)?></span></td>
            </tr>
        </tbody></table>
        <div class="space"></div>
    </div>
    <div class="dGameStatus">
        <span class="sTitle"><span id="sItemTitle"></span><span class="sNote" id="sExplain"></span></span>

        <div>
            <table class="specialtable">
                <tbody><tr>
                        
                    <td><input type="checkbox" value="01" id="checkbox_01" class="inputnoborder" acno="01"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_01').attr('checked',!$('#checkbox_01').attr('checked')); checkGameItem($('#checkbox_01')[0]);" style="cursor:pointer" title="01" class="sCBHKball_01"></span></td>
                        
                    <td><input type="checkbox" value="11" id="checkbox_11" class="inputnoborder" acno="11"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_11').attr('checked',!$('#checkbox_11').attr('checked')); checkGameItem($('#checkbox_11')[0]);" style="cursor:pointer" title="11" class="sCBHKball_11"></span></td>
                        
                    <td><input type="checkbox" value="21" id="checkbox_21" class="inputnoborder" acno="21"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_21').attr('checked',!$('#checkbox_21').attr('checked')); checkGameItem($('#checkbox_21')[0]);" style="cursor:pointer" title="21" class="sCBHKball_21"></span></td>
                        
                    <td><input type="checkbox" value="31" id="checkbox_31" class="inputnoborder" acno="31"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_31').attr('checked',!$('#checkbox_31').attr('checked')); checkGameItem($('#checkbox_31')[0]);" style="cursor:pointer" title="31" class="sCBHKball_31"></span></td>
                        
                    <td><input type="checkbox" value="41" id="checkbox_41" class="inputnoborder" acno="41"></td>
                    <td class=""><span onclick="$('#checkbox_41').attr('checked',!$('#checkbox_41').attr('checked')); checkGameItem($('#checkbox_41')[0]);" style="cursor:pointer" title="41" class="sCBHKball_41"></span></td>
                        </tr><tr>

                    <td><input type="checkbox" value="02" id="checkbox_02" class="inputnoborder" acno="02"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_02').attr('checked',!$('#checkbox_02').attr('checked')); checkGameItem($('#checkbox_02')[0]);" style="cursor:pointer" title="02" class="sCBHKball_02"></span></td>
                        
                    <td><input type="checkbox" value="12" id="checkbox_12" class="inputnoborder" acno="12"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_12').attr('checked',!$('#checkbox_12').attr('checked')); checkGameItem($('#checkbox_12')[0]);" style="cursor:pointer" title="12" class="sCBHKball_12"></span></td>
                        
                    <td><input type="checkbox" value="22" id="checkbox_22" class="inputnoborder" acno="22"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_22').attr('checked',!$('#checkbox_22').attr('checked')); checkGameItem($('#checkbox_22')[0]);" style="cursor:pointer" title="22" class="sCBHKball_22"></span></td>
                        
                    <td><input type="checkbox" value="32" id="checkbox_32" class="inputnoborder" acno="32"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_32').attr('checked',!$('#checkbox_32').attr('checked')); checkGameItem($('#checkbox_32')[0]);" style="cursor:pointer" title="32" class="sCBHKball_32"></span></td>
                        
                    <td><input type="checkbox" value="42" id="checkbox_42" class="inputnoborder" acno="42"></td>
                    <td class=""><span onclick="$('#checkbox_42').attr('checked',!$('#checkbox_42').attr('checked')); checkGameItem($('#checkbox_42')[0]);" style="cursor:pointer" title="42" class="sCBHKball_42"></span></td>
                        </tr><tr>

                    <td><input type="checkbox" value="03" id="checkbox_03" class="inputnoborder" acno="03"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_03').attr('checked',!$('#checkbox_03').attr('checked')); checkGameItem($('#checkbox_03')[0]);" style="cursor:pointer" title="03" class="sCBHKball_03"></span></td>
                        
                    <td><input type="checkbox" value="13" id="checkbox_13" class="inputnoborder" acno="13"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_13').attr('checked',!$('#checkbox_13').attr('checked')); checkGameItem($('#checkbox_13')[0]);" style="cursor:pointer" title="13" class="sCBHKball_13"></span></td>
                        
                    <td><input type="checkbox" value="23" id="checkbox_23" class="inputnoborder" acno="23"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_23').attr('checked',!$('#checkbox_23').attr('checked')); checkGameItem($('#checkbox_23')[0]);" style="cursor:pointer" title="23" class="sCBHKball_23"></span></td>
                        
                    <td><input type="checkbox" value="33" id="checkbox_33" class="inputnoborder" acno="33"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_33').attr('checked',!$('#checkbox_33').attr('checked')); checkGameItem($('#checkbox_33')[0]);" style="cursor:pointer" title="33" class="sCBHKball_33"></span></td>
                        
                    <td><input type="checkbox" value="43" id="checkbox_43" class="inputnoborder" acno="43"></td>
                    <td class=""><span onclick="$('#checkbox_43').attr('checked',!$('#checkbox_43').attr('checked')); checkGameItem($('#checkbox_43')[0]);" style="cursor:pointer" title="43" class="sCBHKball_43"></span></td>
                        </tr><tr>

                    <td><input type="checkbox" value="04" id="checkbox_04" class="inputnoborder" acno="04"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_04').attr('checked',!$('#checkbox_04').attr('checked')); checkGameItem($('#checkbox_04')[0]);" style="cursor:pointer" title="04" class="sCBHKball_04"></span></td>
                        
                    <td><input type="checkbox" value="14" id="checkbox_14" class="inputnoborder" acno="14"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_14').attr('checked',!$('#checkbox_14').attr('checked')); checkGameItem($('#checkbox_14')[0]);" style="cursor:pointer" title="14" class="sCBHKball_14"></span></td>
                        
                    <td><input type="checkbox" value="24" id="checkbox_24" class="inputnoborder" acno="24"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_24').attr('checked',!$('#checkbox_24').attr('checked')); checkGameItem($('#checkbox_24')[0]);" style="cursor:pointer" title="24" class="sCBHKball_24"></span></td>
                        
                    <td><input type="checkbox" value="34" id="checkbox_34" class="inputnoborder" acno="34"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_34').attr('checked',!$('#checkbox_34').attr('checked')); checkGameItem($('#checkbox_34')[0]);" style="cursor:pointer" title="34" class="sCBHKball_34"></span></td>
                        
                    <td><input type="checkbox" value="44" id="checkbox_44" class="inputnoborder" acno="44"></td>
                    <td class=""><span onclick="$('#checkbox_44').attr('checked',!$('#checkbox_44').attr('checked')); checkGameItem($('#checkbox_44')[0]);" style="cursor:pointer" title="44" class="sCBHKball_44"></span></td>
                        </tr><tr>

                    <td><input type="checkbox" value="05" id="checkbox_05" class="inputnoborder" acno="05"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_05').attr('checked',!$('#checkbox_05').attr('checked')); checkGameItem($('#checkbox_05')[0]);" style="cursor:pointer" title="05" class="sCBHKball_05"></span></td>
                        
                    <td><input type="checkbox" value="15" id="checkbox_15" class="inputnoborder" acno="15"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_15').attr('checked',!$('#checkbox_15').attr('checked')); checkGameItem($('#checkbox_15')[0]);" style="cursor:pointer" title="15" class="sCBHKball_15"></span></td>
                        
                    <td><input type="checkbox" value="25" id="checkbox_25" class="inputnoborder" acno="25"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_25').attr('checked',!$('#checkbox_25').attr('checked')); checkGameItem($('#checkbox_25')[0]);" style="cursor:pointer" title="25" class="sCBHKball_25"></span></td>
                        
                    <td><input type="checkbox" value="35" id="checkbox_35" class="inputnoborder" acno="35"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_35').attr('checked',!$('#checkbox_35').attr('checked')); checkGameItem($('#checkbox_35')[0]);" style="cursor:pointer" title="35" class="sCBHKball_35"></span></td>
                        
                    <td><input type="checkbox" value="45" id="checkbox_45" class="inputnoborder" acno="45"></td>
                    <td class=""><span onclick="$('#checkbox_45').attr('checked',!$('#checkbox_45').attr('checked')); checkGameItem($('#checkbox_45')[0]);" style="cursor:pointer" title="45" class="sCBHKball_45"></span></td>
                        </tr><tr>

                    <td><input type="checkbox" value="06" id="checkbox_06" class="inputnoborder" acno="06"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_06').attr('checked',!$('#checkbox_06').attr('checked')); checkGameItem($('#checkbox_06')[0]);" style="cursor:pointer" title="06" class="sCBHKball_06"></span></td>
                        
                    <td><input type="checkbox" value="16" id="checkbox_16" class="inputnoborder" acno="16"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_16').attr('checked',!$('#checkbox_16').attr('checked')); checkGameItem($('#checkbox_16')[0]);" style="cursor:pointer" title="16" class="sCBHKball_16"></span></td>
                        
                    <td><input type="checkbox" value="26" id="checkbox_26" class="inputnoborder" acno="26"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_26').attr('checked',!$('#checkbox_26').attr('checked')); checkGameItem($('#checkbox_26')[0]);" style="cursor:pointer" title="26" class="sCBHKball_26"></span></td>
                        
                    <td><input type="checkbox" value="36" id="checkbox_36" class="inputnoborder" acno="36"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_36').attr('checked',!$('#checkbox_36').attr('checked')); checkGameItem($('#checkbox_36')[0]);" style="cursor:pointer" title="36" class="sCBHKball_36"></span></td>
                        
                    <td><input type="checkbox" value="46" id="checkbox_46" class="inputnoborder" acno="46"></td>
                    <td class=""><span onclick="$('#checkbox_46').attr('checked',!$('#checkbox_46').attr('checked')); checkGameItem($('#checkbox_46')[0]);" style="cursor:pointer" title="46" class="sCBHKball_46"></span></td>
                        </tr><tr>

                    <td><input type="checkbox" value="07" id="checkbox_07" class="inputnoborder" acno="07"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_07').attr('checked',!$('#checkbox_07').attr('checked')); checkGameItem($('#checkbox_07')[0]);" style="cursor:pointer" title="07" class="sCBHKball_07"></span></td>
                        
                    <td><input type="checkbox" value="17" id="checkbox_17" class="inputnoborder" acno="17"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_17').attr('checked',!$('#checkbox_17').attr('checked')); checkGameItem($('#checkbox_17')[0]);" style="cursor:pointer" title="17" class="sCBHKball_17"></span></td>
                        
                    <td><input type="checkbox" value="27" id="checkbox_27" class="inputnoborder" acno="27"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_27').attr('checked',!$('#checkbox_27').attr('checked')); checkGameItem($('#checkbox_27')[0]);" style="cursor:pointer" title="27" class="sCBHKball_27"></span></td>
                        
                    <td><input type="checkbox" value="37" id="checkbox_37" class="inputnoborder" acno="37"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_37').attr('checked',!$('#checkbox_37').attr('checked')); checkGameItem($('#checkbox_37')[0]);" style="cursor:pointer" title="37" class="sCBHKball_37"></span></td>
                        
                    <td><input type="checkbox" value="47" id="checkbox_47" class="inputnoborder" acno="47"></td>
                    <td class=""><span onclick="$('#checkbox_47').attr('checked',!$('#checkbox_47').attr('checked')); checkGameItem($('#checkbox_47')[0]);" style="cursor:pointer" title="47" class="sCBHKball_47"></span></td>
                        </tr><tr>

                    <td><input type="checkbox" value="08" id="checkbox_08" class="inputnoborder" acno="08"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_08').attr('checked',!$('#checkbox_08').attr('checked')); checkGameItem($('#checkbox_08')[0]);" style="cursor:pointer" title="08" class="sCBHKball_08"></span></td>
                        
                    <td><input type="checkbox" value="18" id="checkbox_18" class="inputnoborder" acno="18"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_18').attr('checked',!$('#checkbox_18').attr('checked')); checkGameItem($('#checkbox_18')[0]);" style="cursor:pointer" title="18" class="sCBHKball_18"></span></td>
                        
                    <td><input type="checkbox" value="28" id="checkbox_28" class="inputnoborder" acno="28"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_28').attr('checked',!$('#checkbox_28').attr('checked')); checkGameItem($('#checkbox_28')[0]);" style="cursor:pointer" title="28" class="sCBHKball_28"></span></td>
                        
                    <td><input type="checkbox" value="38" id="checkbox_38" class="inputnoborder" acno="38"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_38').attr('checked',!$('#checkbox_38').attr('checked')); checkGameItem($('#checkbox_38')[0]);" style="cursor:pointer" title="38" class="sCBHKball_38"></span></td>
                        
                    <td><input type="checkbox" value="48" id="checkbox_48" class="inputnoborder" acno="48"></td>
                    <td class=""><span onclick="$('#checkbox_48').attr('checked',!$('#checkbox_48').attr('checked')); checkGameItem($('#checkbox_48')[0]);" style="cursor:pointer" title="48" class="sCBHKball_48"></span></td>
                        </tr><tr>

                    <td><input type="checkbox" value="09" id="checkbox_09" class="inputnoborder" acno="09"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_09').attr('checked',!$('#checkbox_09').attr('checked')); checkGameItem($('#checkbox_09')[0]);" style="cursor:pointer" title="09" class="sCBHKball_09"></span></td>
                        
                    <td><input type="checkbox" value="19" id="checkbox_19" class="inputnoborder" acno="19"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_19').attr('checked',!$('#checkbox_19').attr('checked')); checkGameItem($('#checkbox_19')[0]);" style="cursor:pointer" title="19" class="sCBHKball_19"></span></td>
                        
                    <td><input type="checkbox" value="29" id="checkbox_29" class="inputnoborder" acno="29"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_29').attr('checked',!$('#checkbox_29').attr('checked')); checkGameItem($('#checkbox_29')[0]);" style="cursor:pointer" title="29" class="sCBHKball_29"></span></td>
                        
                    <td><input type="checkbox" value="39" id="checkbox_39" class="inputnoborder" acno="39"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_39').attr('checked',!$('#checkbox_39').attr('checked')); checkGameItem($('#checkbox_39')[0]);" style="cursor:pointer" title="39" class="sCBHKball_39"></span></td>
                        
                    <td><input type="checkbox" value="49" id="checkbox_49" class="inputnoborder" acno="49"></td>
                    <td class=""><span onclick="$('#checkbox_49').attr('checked',!$('#checkbox_49').attr('checked')); checkGameItem($('#checkbox_49')[0]);" style="cursor:pointer" title="49" class="sCBHKball_49"></span></td>
                        </tr><tr>

                    <td><input type="checkbox" value="10" id="checkbox_10" class="inputnoborder" acno="10"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_10').attr('checked',!$('#checkbox_10').attr('checked')); checkGameItem($('#checkbox_10')[0]);" style="cursor:pointer" title="10" class="sCBHKball_10"></span></td>
                        
                    <td><input type="checkbox" value="20" id="checkbox_20" class="inputnoborder" acno="20"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_20').attr('checked',!$('#checkbox_20').attr('checked')); checkGameItem($('#checkbox_20')[0]);" style="cursor:pointer" title="20" class="sCBHKball_20"></span></td>
                        
                    <td><input type="checkbox" value="30" id="checkbox_30" class="inputnoborder" acno="30"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_30').attr('checked',!$('#checkbox_30').attr('checked')); checkGameItem($('#checkbox_30')[0]);" style="cursor:pointer" title="30" class="sCBHKball_30"></span></td>
                        
                    <td><input type="checkbox" value="40" id="checkbox_40" class="inputnoborder" acno="40"></td>
                    <td class="boldborder"><span onclick="$('#checkbox_40').attr('checked',!$('#checkbox_40').attr('checked')); checkGameItem($('#checkbox_40')[0]);" style="cursor:pointer" title="40" class="sCBHKball_40"></span></td>
                        <td colspan="2">&nbsp;</td>
</tr>

            </tbody></table>
            <table class="betnum1">
                <tbody><tr>
                    <th colspan="5">注单号码</th>
                </tr>
                <tr>
                    <td>
                        <div readonly="" multiple="" id="mulCollocation" name="mulCollocation"></div>
                    </td>
                </tr>
            </tbody></table>
            <div class="space"></div>
        </div>
    </div>
    <div id="dResult">
        <input type="hidden" id="txtRate" value="0">
        <input type="button" value="重设" onclick="resetTotal();" name="重设">
        <input type="button" value="确定" onclick="checkToSubmit();" name="确定">
        <span id="sTotalCredit" class="sTotal FontBold">0</span>
        <span>总计额度</span>
        <input type="text" name="sTotalBeishu" id="sTotalBeishu" value="1" class="beishu" />
        <span>倍数</span>
    </div>
    <div class="space"></div>

