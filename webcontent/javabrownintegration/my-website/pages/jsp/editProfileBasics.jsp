
<style>
  .rightCol { width:20px }
</style>

<div id="userAccountEdit">
 <!-- <H2>Raja Khan > Edit Profile:</H2>
 <hr> -->
   <div id="editProfileForm"> <!-- EDIT PROFILE DIV ** BEGIN ** -->
       <form id="ep_form" method="post" action="" onsubmit="">
   
   					   <table class="uiInfoTable">
   					    <tbody>
   					     <tr class="dataRow">
   					       <th class="label">Current City:</th>
   						 <td class="data">
   						    <div class="wrap selected"> 
   						     <input class="inputtext textInput" value="Delhi" type="text"></input>
   						    </div>
   						 </td>
   						 <td class="rightCol"></td>
   					     </tr>
   
   					     <tr class="dataRow">
   					       <th class="label">Hometown:</th>
   					       <td class="data"><div class="">
   						 <label class="clear uiCloseButton uiCloseButton uiCloseButton">
   						 <input class="inputtext textInput" value="New York, New York" type="text">
   					       </td>
   					       <td class="rightCol"></td>
   					     </tr>
   
   					     <tr class="spacer">
   					       <td colspan="3">
   						<hr noshade size="1">
   					       </td>
   					     </tr>
   					    </tbody>
   
   					    <tbody>
   					      <tr class="dataRow">
   						 <th class="label">Sex:</th>
   						   <td class="data">
   						     <select name="sex">
   						      <option value="1">Female</option>
   						      <option value="2" selected="1">Male</option>
   						     </select>
   						   </td>
   
   						   <td class="rightCol">
   						    <div>
   						     <input class="editProfileCheckbox" value="1" name="sex_visibility" id="sex_visibility" checked="1" type="checkbox">
   						     <label for="sex_visibility">Show my sex in my profile</label>
   						    </div>
   						   </td>
   					      </tr>
   
   					      <tr class="spacer">
   						<td colspan="3">
   						 <hr noshade size="1">
   						</td>
   					      </tr>
   					    </tbody>
   
   					    <tbody><tr class="dataRow">
   					      <th class="label">Birthday:</th>
   					      <td class="data"> 
   						<select class="" id="birthday_month" name="birthday_month" onchange=''>
   						 <option value="1">Jan</option>
   						 <option value="2">Feb</option>
   						 <option value="3">Mar</option>
   						 <option value="4" selected="selected">Apr</option>
   						 <option value="5">May</option>
   						 <option value="6">Jun</option>
   						 <option value="7">Jul</option>
   						 <option value="8">Aug</option>
   						 <option value="9">Sep</option>
   						 <option value="10">Oct</option>
   						 <option value="11">Nov</option>
   						 <option value="12">Dec</option>
   						</select> 
   						<select name="birthday_day" id="birthday_day" onchange="" autocomplete="off"><option value="1">1</option>
   						 <option value="2">2</option>
   						 <option value="3">3</option>
   						 <option value="4">4</option>
   						 <option value="5">5</option>
   						 <option value="6">6</option>
   						 <option value="7" selected="selected">7</option>
   						 <option value="8">8</option>
   						 <option value="9">9</option>
   						 <option value="10">10</option>
   						 <option value="11">11</option>
   						 <option value="12">12</option>
   						 <option value="13">13</option>
   						 <option value="14">14</option>
   						 <option value="15">15</option>
   						 <option value="16">16</option>
   						 <option value="17">17</option>
   						 <option value="18">18</option>
   						 <option value="19">19</option>
   						 <option value="20">20</option>
   						 <option value="21">21</option>
   						 <option value="22">22</option>
   						 <option value="23">23</option>
   						 <option value="24">24</option>
   						 <option value="25">25</option>
   						 <option value="26">26</option>
   						 <option value="27">27</option>
   						 <option value="28">28</option>
   						 <option value="29">29</option>
   						 <option value="30">30</option>
   						</select> <select name="birthday_year" id="birthday_year" onchange='return run_with(this, ["editor"], function() {editor_date_month_change("birthday_month","birthday_day",this);});' autocomplete="off"><option value="-1">Year:</option><option value="2010">2010</option>
   						 <option value="2009">2009</option>
   						 <option value="2008">2008</option>
   						 <option value="2007">2007</option>
   						 <option value="2006">2006</option>
   						 <option value="2005">2005</option>
   						 <option value="2004">2004</option>
   						 <option value="2003">2003</option>
   						 <option value="2002">2002</option>
   						 <option value="2001">2001</option>
   						 <option value="2000">2000</option>
   						 <option value="1999">1999</option>
   						 <option value="1998">1998</option>
   						 <option value="1997">1997</option>
   						 <option value="1996">1996</option>
   						 <option value="1995">1995</option>
   						 <option value="1994">1994</option>
   						 <option value="1993">1993</option>
   						 <option value="1992">1992</option>
   						 <option value="1991">1991</option>
   						 <option value="1990">1990</option>
   						 <option value="1989">1989</option>
   						 <option value="1988">1988</option>
   						 <option value="1987">1987</option>
   						 <option value="1986">1986</option>
   						 <option value="1985">1985</option>
   						 <option value="1984">1984</option>
   						 <option value="1983">1983</option>
   						 <option value="1982" selected="selected">1982</option>
   						 <option value="1981">1981</option>
   						 <option value="1980">1980</option>
   						 <option value="1979">1979</option>
   						 <option value="1978">1978</option>
   						 <option value="1977">1977</option>
   						 <option value="1976">1976</option>
   						 <option value="1975">1975</option>
   						 <option value="1974">1974</option>
   						 <option value="1973">1973</option>
   						 <option value="1972">1972</option>
   						 <option value="1971">1971</option>
   						 <option value="1970">1970</option>
   						 <option value="1969">1969</option>
   						 <option value="1968">1968</option>
   						 <option value="1967">1967</option>
   						 <option value="1966">1966</option>
   						 <option value="1965">1965</option>
   						 <option value="1964">1964</option>
   						 <option value="1963">1963</option>
   						 <option value="1962">1962</option>
   						 <option value="1961">1961</option>
   						 <option value="1960">1960</option>
   						 <option value="1959">1959</option>
   						 <option value="1958">1958</option>
   						 <option value="1957">1957</option>
   						 <option value="1956">1956</option>
   						 <option value="1955">1955</option>
   						 <option value="1954">1954</option>
   						 <option value="1953">1953</option>
   						 <option value="1952">1952</option>
   						 <option value="1951">1951</option>
   						 <option value="1950">1950</option>
   						 <option value="1949">1949</option>
   						 <option value="1948">1948</option>
   						 <option value="1947">1947</option>
   						 <option value="1946">1946</option>
   						 <option value="1945">1945</option>
   						 <option value="1944">1944</option>
   						 <option value="1943">1943</option>
   						 <option value="1942">1942</option>
   						 <option value="1941">1941</option>
   						 <option value="1940">1940</option>
   						 <option value="1939">1939</option>
   						 <option value="1938">1938</option>
   						 <option value="1937">1937</option>
   						 <option value="1936">1936</option>
   						 <option value="1935">1935</option>
   						 <option value="1934">1934</option>
   						 <option value="1933">1933</option>
   						 <option value="1932">1932</option>
   						 <option value="1931">1931</option>
   						 <option value="1930">1930</option>
   						 <option value="1929">1929</option>
   						 <option value="1928">1928</option>
   						 <option value="1927">1927</option>
   						 <option value="1926">1926</option>
   						 <option value="1925">1925</option>
   						 <option value="1924">1924</option>
   						 <option value="1923">1923</option>
   						 <option value="1922">1922</option>
   						 <option value="1921">1921</option>
   						 <option value="1920">1920</option>
   						 <option value="1919">1919</option>
   						 <option value="1918">1918</option>
   						 <option value="1917">1917</option>
   						 <option value="1916">1916</option>
   						 <option value="1915">1915</option>
   						 <option value="1914">1914</option>
   						 <option value="1913">1913</option>
   						 <option value="1912">1912</option>
   						 <option value="1911">1911</option>
   						 <option value="1910">1910</option>
   						 <option value="1909">1909</option>
   						 <option value="1908">1908</option>
   						 <option value="1907">1907</option>
   						 <option value="1906">1906</option>
   						 <option value="1905">1905</option>
   						</select>
   					      </td>
   
   					      <td class="rightCol" >
   						<select name="birthday_visibility" class="">
   						  <option value="1">Show my full birthday in my profile.</option>
   						  <option value="2">Show only month &amp; day in my profile.</option>
   						  <option value="3" selected="1">Don't show my birthday in my profile.</option>
   						</select>
   					      </td>
   					    </tr>
   
   					    <tr class="spacer">
   					       <td colspan="3">
   						<hr noshade size="1">
   					       </td>
   					    </tr>
   					 </tbody>
   
   					 <tbody>
   					  <tr class="dataRow">
   					   <th class="label">Interested In:</th>
   					   <td class="data">
   					     <div>
   					      <div>
   						<input class="editProfileCheckbox" value="1" name="meeting_sex1" id="meeting_sex1" type="checkbox">
   						<label for="meeting_sex1">Women</label>
   					      </div>
   
   					     <div>
   					      <input class="editProfileCheckbox" value="1" name="meeting_sex2" id="meeting_sex2" type="checkbox">
   					      <label for="meeting_sex2">Men</label>
   					     </div>
   					    </div>
   					   </td>
   
   					   <td class="rightCol"></td>
   					  </tr>
   
   					  <tr class="spacer">
   					   <td colspan="3">
   					     <hr noshade size="1">
   					   </td>
   					  </tr>
   					 </tbody>
   
   					 <tbody>
   					   <tr class="dataRow">
   					     <th class="label">Languages:</th>
   					       <td class="data"></td>
   					       <td class="rightCol"></td>
   					   </tr>
   					   <tr class="spacer">
   					     <td colspan="3">
   					     <hr noshade size="1">
   					     </td></tr>
   					 </tbody>
   
   					 <tbody>
   					  <tr class="dataRow">
   					   <th class="label">About Me:</th>
   					   <td class="data">
   					    <textarea class="profileEditText" name="about_me" rows="5">I am the best, and the best is the enemy of the good.</textarea>
   					   </td>
   					   <td class="rightCol"></td>
   					  </tr>
   					  <tr class="spacer">
   					    <td colspan="3">
   					     <hr noshade size="1">
   					    </td>
   					  </tr>
   					 </tbody>
   
   					 <tfoot>
   					   <tr>
   					    <th class="label"></th>
   					    <td class="data" colspan="2">
   					     <input name="save" value="1" type="hidden">
   					     <label class="saveButton uiButtonDisabled uiButton uiButtonConfirm">
   					      <input value="Save Changes" disabled="1" type="submit">
   					     </label>
   
   					     <span class="mhm inline_err_msg"></span>
   					    </td>
   					   </tr>
   					 </tfoot>
   
   				       </table>
   				     </form>   
    </div> <!-- EDIT PROFILE DIV ** END ** -->
</div>			    
<br>
<br>