<style>
#intelius
{
   width: 280px;

   margin: 0;
   padding: 0;
}
#intelius #searchContainer
{

}
#intelius .textinput
{
   width: 139px;
   height: 25px;
   line-height: 25px;
   margin: 0 0 6px; 
   border: 1px solid #909092;
   padding-left: 5px;
   color: #666;
}
#intelius #qs
{
   width: 83px;
   height: 29px;
   border: 1px solid #909092;
   padding: 3px;
   vertical-align: middle;
   color: #666;
}
#intelius #submit
{
   background: transparent url(//s3.amazonaws.com/affiliate_static/ads/cj/btnSearch_sm.png) no-repeat;
   border: 0;
   width: 94px;
   height: 27px;
   display:inline-block;
   line-height: 27px;
   vertical-align: middle;
   cursor:pointer;
   margin-left: 2px;
}
</style>

   <div id="intelius">
      <div id="searchContainer">
      	<div style="font-size:16px;font-weight:bold;"><?=$GLOBALS['archiverprofileusername']?>'s Info is Available</div>
   <div style="font-size:12px;">Get <?=$GLOBALS['archiverprofileusername']?>'s Address, Age & DOB, Phone Number, Relatives, Address History now.</div><form name="sFrm" id="sFrm" onSubmit="Intelius.submitForm();return false;">
         	<? $pieces = explode(" ", $GLOBALS['archiverprofileusername']); ?>
         	<div style="clear:both;padding-top:5px;"></div>
            <div style="float:left;width:80px;font-size:14px;text-align:right;padding-right:5px;">First Name </div><div style="float:left;"><input id="qf" type="text" name="qf" maxlength="50" class="textinput" value="<?=$pieces[0]?>" onBlur="Intelius.defaultText(this,'First Name','blur');" onFocus="Intelius.defaultText(this,'First Name','focus')"></div>
           <div style="clear:both;"></div>
            <div style="float:left;width:80px;font-size:14px;text-align:right;padding-right:5px;">Last Name </div><div style="float:left;"><input id="qn" type="text" name="qn" maxlength="50" class="textinput" value="<?=$pieces[1]?>" onBlur="Intelius.defaultText(this,'Last Name','blur');" onFocus="Intelius.defaultText(this,'Last Name','focus')"></div>
           <div style="clear:both;"></div>
            <div style="float:left;width:80px;font-size:14px;text-align:right;padding-right:5px;">City </div><div style="float:left;"><input id="qc" type="text" name="qc" maxlength="50" class="textinput" value="<?=($GLOBALS['archiverprofileuserlocation'])?>" onBlur="Intelius.defaultText(this,'Any City','blur');" onFocus="Intelius.defaultText(this,'Any City','focus')"></div>
           <div style="clear:both;"></div>
           <div style="float:left;width:80px;font-size:14px;text-align:right;padding-right:5px;">State </div><div style="float:left;"> <select name="qs" id="qs">
               <option value=''>State</option>
               <option value="AK">AK</option>
               <option value="AL">AL</option>
               <option value="AR">AR</option>
               <option value="AZ">AZ</option>
               <option value="CA">CA</option>
               <option value="CO">CO</option>
               <option value="CT">CT</option>
               <option value="DC">DC</option>
               <option value="DE">DE</option>
               <option value="FL">FL</option>
               <option value="GA">GA</option>
               <option value="HI">HI</option>
               <option value="IA">IA</option>
               <option value="ID">ID</option>
               <option value="IL">IL</option>
               <option value="IN">IN</option>
               <option value="KS">KS</option>
               <option value="KY">KY</option>
               <option value="LA">LA</option>
               <option value="MA">MA</option>
               <option value="MD">MD</option>
               <option value="ME">ME</option>
               <option value="MI">MI</option>
               <option value="MN">MN</option>
               <option value="MO">MO</option>
               <option value="MS">MS</option>
               <option value="MT">MT</option>
               <option value="NC">NC</option>
               <option value="ND">ND</option>
               <option value="NE">NE</option>
               <option value="NH">NH</option>
               <option value="NJ">NJ</option>
               <option value="NM">NM</option>
               <option value="NV">NV</option>
               <option value="NY">NY</option>
               <option value="OH">OH</option>
               <option value="OK">OK</option>
               <option value="OR">OR</option>
               <option value="PA">PA</option>
               <option value="PR">PR</option>
               <option value="RI">RI</option>
               <option value="SC">SC</option>
               <option value="SD">SD</option>
               <option value="TN">TN</option>
               <option value="TX">TX</option>
               <option value="UT">UT</option>
               <option value="VA">VA</option>
               <option value="VT">VT</option>
               <option value="WA">WA</option>
               <option value="WI">WI</option>
               <option value="WV">WV</option>
               <option value="WY">WY</option>
           </select></div>
            <div style="clear:both;padding-bottom:5px;"></div>
            <div style="float:left;"><input id="submit" type="submit" value=""/></div><div style="float:left;padding-left:10px;""><img src=/intelius.png width=120></div>
                  <div style="clear:both;"></div>
         </form>
         <form id="sFrmH" name="sFrmH" action="http://www.tkqlhce.com/interactive" method="get">
            <input type="hidden" name="qf" value="">
            <input type="hidden" name="qn" value="">
            <input type="hidden" name="qc" value="">
            <input type="hidden" name="qs" value="">
            <input type="hidden" name="refer" value="5113">
            <input type="hidden" name="ReportType" value="1">
            <input type="hidden" name="adword" value="ps">
            <input type="hidden" name="encrypt" value="1">
         
<input type="hidden" name="aid" value="10999397"/>
<input type="hidden" name="pid" value="5486810"/>
<input type="hidden" name="url" value="http://www.intelius.com/redir.php"/>
<input type="hidden" name="refer" value="5113"/>
</form>
      </div>
   </div>
   <script type="text/javascript" src="//www.intelius.com/javascript/crosssite.js"></script>
   <script>
   var Intelius = function() {
      var submitForm = function() {
         document.sFrmH.qf.value = (document.sFrm.qf.value !== 'First Name') ? document.sFrm.qf.value : '';
         document.sFrmH.qn.value = (document.sFrm.qn.value !== 'Last Name') ? document.sFrm.qn.value : '';
         document.sFrmH.qc.value = (document.sFrm.qc.value !== 'Any City') ? document.sFrm.qc.value : '';
         document.sFrmH.qs.value = document.sFrm.qs.value;
         encryptIt(document.getElementById("sFrmH"));
         document.sFrmH.refer.value = '5113';         
         document.sFrmH.submit();
         return false;
      };
      
      var defaultText = function(ele, txt, event) {
         if (ele.value === "" && event === 'blur') {
            ele.value = txt;
         }
         if (ele.value === txt && event === 'focus') {
            ele.value = '';
         }
      };

      return {
         'submitForm': submitForm,
         'defaultText': defaultText
      };
   }();
   </script><img src="http://www.tqlkg.com/image-5486810-10999397" width="1" height="1" border="0"/>