<?php
$err1="";
$err2="";
$err3="";
$err4="";
$err5="";
$err6="";
$err7="";
$err8="";
$err9="";
$err10="";
$err11="";
$err12="";
$err13="";
$err14="";
$err15="";
$err16="";
$err17="";
$err18="";
$err19="";
$err20="";
$err21="";
$err22="";
$err23="";
$err24="";
$err25="";
$err26="";
$err27="";
$err28="";
$err29="";
$err30="";
$err31="";
$err32="";
$err33="";
$err34="";
$err35="";
$err36="";
$err37="";
$err38="";
$err39="";
$err40="";
$err41="";
$err42="";
$err43="";
$err44="";
$err45="";
$err46="";
$err45="";
$err46="";
$err47="";
$err48="";
$err49="";
$err50="";
$err51="";
$err52="";
$err53="";
$err54="";
$err55="";
$err56="";
$err57="";
$err58="";
$err59="";
$err60="";
$err61="";
$err62="";
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit")
{
if(empty($_POST['us']))
{
$err1="userid id must exist";
$fl=1;
}
if(empty($_POST['dn']))
{
$err2="donar name must exist";
$fl=1;
}
if(empty($_POST['fa']))
{
$err3="father name must exist";
$fl=1;
}
if(empty($_POST['oc']))
{
$err4="occupation must exist";
$fl=1;
}
if(empty($_POST['or']))
{
$err5="organization must exist";
$fl=1;
}
if(empty($_POST['te']))
{
$err6="telephone must exist";
$fl=1;
}
if(empty($_POST['mo']))
{
$err7="mobile no must exist";
$fl=1;
}
if(empty($_POST['se']))
{
$err8="Sex must exist";
$fl=1;
}
if(empty($_POST['ca']))
{
$err9="call on mobile must exist";
$fl=1;
}
if(empty($_POST['pr']))
{
$err10="pervious donate date must exist";
$fl=1;
}
if(empty($_POST['bl']))
{
$err11="blood group must exist";
$fl=1;
}
if(empty($_POST['rh']))
{
$err12="rh must exist";
$fl=1;
}
if(empty($_POST['di']))
{
$err13="discomfort must exist";
$fl=1;
}
if(empty($_POST['we']))
{
$err14="welltoday must exist";
$fl=1;
}
if(empty($_POST['ea']))
{
$err15="eat4hours must exist";
$fl=1;
}
if(empty($_POST['sl']))
{
$err16="sleep must exist";
$fl=1;
}
if(empty($_POST['in']))
{
$err17="infection must exist";
$fl=1;
}
if(empty($_POST['he']))
{
$err18="hepetitis must exist";
$fl=1;
}
if(empty($_POST['wl']))
{
$err19="weight loss must exist";
$fl=1;
}
if(empty($_POST['dh']))
{
$err20="diarrhoea must exist";
$fl=1;
}
if(empty($_POST['gr']))
{
$err21="glands must exist";
$fl=1;
}
if(empty($_POST['fe']))
{
$err22="fever must exist";
$fl=1;
}
if(empty($_POST['ta']))
{
$err23="tattoing must exist";
$fl=1;
}
if(empty($_POST['ear']))
{
$err24="ear piercing must exist";
$fl=1;
}
if(empty($_POST['de']))
{
$err25="dental extraction must exist";
$fl=1;
}
if(empty($_POST['hd']))
{
$err26="heart disease must exist";
$fl=1;
}
if(empty($_POST['ld']))
{
$err27="lung disease must exist";
$fl=1;
}
if(empty($_POST['ki']))
{
$err28="kidney disease must exist";
$fl=1;
}
if(empty($_POST['ca']))
{
$err29="cancer must exist";
$fl=1;
}
if(empty($_POST['ep']))
{
$err30="epilepsy must exist";
$fl=1;
}
if(empty($_POST['db']))
{
$err31="diabetes must exist";
$fl=1;
}
if(empty($_POST['al']))
{
$err32="allergic must exist";
$fl=1;
}
if(empty($_POST['el']))
{
$err33="bleeding must exist";
$fl=1;
}
if(empty($_POST['sd']))
{
$err34="sexual disease must exist";
$fl=1;
}
if(empty($_POST['ty']))
{
$err35="typhoid must exist";
$fl=1;
}
if(empty($_POST['hp']))
{
$err36="hapatitisbc must exist";
$fl=1;
}
if(empty($_POST['ja']))
{
$err37="jaundice must exist";
$fl=1;
}
if(empty($_POST['ma']))
{
$err38="maleria must exist";
$fl=1;
}
if(empty($_POST['an']))
{
$err39="antibiotics must exist";
$fl=1;
}
if(empty($_POST['fi']))
{
$err40="faintingspells must exist";
$fl=1;
}
if(empty($_POST['as']))
{
$err41="aspirin must exist";
$fl=1;
}
if(empty($_POST['al']))
{
$err42="alcohol must exist";
$fl=1;
}
if(empty($_POST['st']))
{
$err43="sterodis must exist";
$fl=1;
}
if(empty($_POST['va']))
{
$err44="vaccinations must exist";
$fl=1;
}
if(empty($_POST['do']))
{
$err45="dog bite must exist";
$fl=1;
}
if(empty($_POST['su']))
{
$err46="surgery must exist";
$fl=1;
}
if(empty($_POST['bt']))
{
$err47="blood transfusion must exist";
$fl=1;
}
if(empty($_POST['pg']))
{
$err48="pregnant must exist";
$fl=1;
}
if(empty($_POST['ab']))
{
$err49="abortion must exist";
$fl=1;
}
if(empty($_POST['ch']))
{
$err50="child1yr must exist";
$fl=1;
}
if(empty($_POST['br']))
{
$err51="brest feeding must exist";
$fl=1;
}
if(empty($_POST['pe']))
{
$err52="periods must exist";
$fl=1;
}
if(empty($_POST['tt']))
{
$err53="test result must exist";
$fl=1;
}
if(empty($_POST['fd']))
{
$err54="F date must exist";
$fl=1;
}
if(empty($_POST['wg']))
{
$err55="weight must exist";
$fl=1;
}
if(empty($_POST['pu']))
{
$err56="pulse must exist";
$fl=1;
}
if(empty($_POST['hb']))
{
$err57="HB must exist";
$fl=1;
}
if(empty($_POST['bp']))
{
$err58="BP must exist";
$fl=1;
}
if(empty($_POST['tm']))
{
$err59="temperature must exist";
$fl=1;
}
if(empty($_POST['ac']))
{
$err60="accept must exist";
$fl=1;
}
if(empty($_POST['df']))
{
$err61="defer must exist";
$fl=1;
}
if(empty($_POST['em']))
{
$err62="email id must exist";
$fl=1;
}
}
}
?>
<html>
<body>
<form name=form action=donar.php method=post>
<center><table>
<caption>Donar</caption>
<tr>
<td>User Id</td>
<td><input type=text name=us><?php echo $err1; ?></td>
</tr>
<tr>
<td>Donar Name</td>
<td><input type=text name=dn><?php echo $err2; ?></td>
</tr>
<tr>
<td>Father Name</td>
<td><input type=text name=fa><?php echo $err3; ?></td>
</tr>
<tr>
<td>Occupation</td>
<td><input type=text name=oc><?php echo $err4; ?></td>
</tr>
<tr>
<td>Organization</td>
<td><input type=text name=or><?php echo $err5; ?></td>
</tr>
<tr>
<td>Telephone</td>
<td><input type=text name=te><?php echo $err6; ?></td>
</tr>
<tr>
<td>Mobile No</td>
<td><input type=text name=mo><?php echo $err7; ?></td>
</tr>
<tr>
<td>Sex</td>
<td><input type=text name=se><?php echo $err8; ?></td>
</tr>
<tr>
<td>Call On Mobile</td>
<td><input type=text name=ca><?php echo $err9; ?></td>
</tr>
<tr>
<td>Previous Donate Date</td>
<td><input type=date name=pr><?php echo $err10; ?></td>
</tr>
<tr>
<td>Blood Group</td>
<td><input type=text name=bl><?php echo $err11; ?></td>
</tr>
<tr>
<td>RH</td>
<td><input type=text name=rh><?php echo $err12; ?></td>
</tr>
<tr>
<td>Discomfort</td>
<td><input type = text name=di><?php echo $err13; ?></td>
</tr>
<td>WellToDay</td>
<td><input type = text name=we><?php echo $err14; ?></td>
</tr>
<tr>
<td>Eat4Hours</td>
<td><input type =text name=ea><?php echo $err15; ?></td>
</tr>
<tr>
<td>Sleep</td>
<td><input type=text name=sl><?php echo $err16; ?></td>
</tr>
<tr>
<td>Infection</td>
<td><input type=text name=in><?php echo $err17; ?></td>
</tr>
<tr>
<td>Hepetitis</td>
<td><input type=text name=he><?php echo $err18; ?></td>
</tr>
<tr>
<td>Wight Loss</td>
<td><input type=text name=wl><?php echo $err19; ?></td>
</tr>
<tr>
<td>Diarrhoea</td>
<td><input type=text name=dh><?php echo $err20; ?></td>
</tr>
<tr>
<td>Glands</td>
<td><input type=text name=gr><?php echo $err21; ?></td>
</tr>
<tr>
<td>Fever</td>
<td><input type=text name=fe><?php echo $err22; ?></td>
</tr>
<tr>
<td>Tattooing</td>
<td><input type=number name=ta><?php echo $err23; ?></td>
</tr>
<tr>
<td>Ear Piercing</td>
<td><input type=text name=ear><?php echo $err24; ?></td>
</tr>
<tr>
<td>Dental Extraction</td>
<td><input type=text name=de><?php echo $err25; ?></td>
</tr>
<tr>
<td>Heart Disease</td>
<td><input type =text name=hd><?php echo $err26; ?></td>
</tr>
<tr>
<td>Lung Disease</td>
<td><input type=text name=ld><?php echo $err27; ?></td>
</tr>
<tr>
<td>Kidney Disease</td>
<td><input type=text name=ki><?php echo $err28; ?></td>
</tr>
<tr>
<td>Cancer</td>
<td><input type=text name=ca><?php echo $err29; ?></td>
</tr>
<tr>
<td>Epilepsy</td>
<td><input type=text name=ep><?php echo $err30; ?></td>
</tr>
<tr>
<td>Diabetes</td>
<td><input type=text name=db><?php echo $err31; ?></td>
</tr>
<tr>
<td>Allergic</td>
<td><input type=text name=al><?php echo $err32; ?></td>
</tr>
<tr>
<td>Bleeding</td>
<td><input type=text name=el><?php echo $err33; ?></td>
</tr>
<tr>
<td>Sexual Disease</td>
<td><input type=text name=sd><?php echo $err34; ?></td>
</tr>
<tr>
<td>Typhoid</td>
<td><input type=text name=ty><?php echo $err35; ?></td>
</tr>
<tr>
<td>Hapatitisbc</td>
<td><input type=text name=hp><?php echo $err36; ?></td>
</tr>
<tr>
<td>Jaundice</td>
<td><input type=text name=ja><?php echo $err37; ?></td>
</tr>
<tr>
<td>Maleria</td>
<td><input type=text name=ma><?php echo $err38; ?></td>
</tr>
<tr>
<td>Antibiotics</td>
<td><input type=text name=an><?php echo $err39; ?></td>
</tr>
<tr>
<td>Faintingspells</td>
<td><input type=text name=fi><?php echo $err40; ?></td>
</tr>
<tr>
<td>Aspirin</td>
<td><input type=text name=as><?php echo $err41; ?></td>
</tr>
<tr>
<td>Alcohhol</td>
<td><input type=text name=al><?php echo $err42; ?></td>
</tr>
<tr>
<td>Steroidis</td>
<td><input type=text name=st><?php echo $err43; ?></td>
</tr>
<tr>
<td>Vaccinations</td>
<td><input type=text name=va><?php echo $err44; ?></td>
</tr>
<tr>
<td>Dog Bite</td>
<td><input type=text name=do><?php echo $err45; ?></td>
</tr>
<tr>
<td>Surgery</td>
<td><input type=text name=su><?php echo $err46; ?></td>
</tr>
<tr>
<td>Blood Transfusion</td>
<td><input type=text name=bt><?php echo $err47; ?></td>
</tr>
<tr>
<td>Pregnant</td>
<td><input type=text name=pg><?php echo $err48; ?></td>
</tr>
<tr>
<td>Abortion</td>
<td><input type=text name=ab><?php echo $err49; ?></td>
</tr>
<tr>
<td>Child1yr</td>
<td><input type=text name=ch><?php echo $err50; ?></td>
</tr>
<tr>
<td>Brest Feeding</td>
<td><input type=text name=br><?php echo $err51; ?></td>
</tr>
<tr>
<td>Periods</td>
<td><input type=text name=pe><?php echo $err52; ?></td>
</tr>
<tr>
<td>Test Result</td>
<td><input type=text name=tt><?php echo $err53; ?></td>
</tr>
<tr>
<td>F Date</td>
<td><input type=date name=fd><?php echo $err54; ?></td>
</tr>
<tr>
<td>Weight</td>
<td><input type=number name=wg><?php echo $err55; ?></td>
</tr>
<tr>
<td>Pulse</td>
<td><input type=number name=pu><?php echo $err56; ?></td>
</tr>
<tr>
<td>HB</td>
<td><input type=number name=hb><?php echo $err57; ?></td>
</tr>
<tr>
<td>BP</td>
<td><input type=number name=bp><?php echo $err58; ?></td>
</tr>
<tr>
<td>Temperature</td>
<td><input type=number name=tm><?php echo $err59; ?></td>
</tr>
<tr>
<td>Accept</td>
<td><input type=text name=ac><?php echo $err60; ?></td>
</tr>
<tr>
<td>Defer</td>
<td><input type=text name=df><?php echo $err61; ?></td>
</tr>
<tr>
<td>Email Id</td>
<td><input type=text name=em><?php echo $err62; ?></td>
</tr>
</table>
<input type=submit name=sbm value=submit>
<input type=submit name=sbm value=update>
<input type=submit name=sbm value=delete>
<input type=submit name=sbm value=display>
<input type=submit name=sbm value=search>
</center>
</form>
</body>
</html>
<?php
if(isset($_POST['sbm']))
{
$cn=mysql_connect("localhost","root");
mysql_select_db("blood",$cn);
$sb=$_POST['sbm'];
if($sb=="submit")
{
if($fl==0)
{
$sql="insert into donar values('$_POST[us]','$_POST[dn]','$_POST[fa]','$_POST[oc]','$_POST[or]','$_POST[te]','$_POST[mo]','$_POST[se]','$_POST[ca]','$_POST[pr]','$_POST[bl]','$_POST[rh]','$_POST[di]','$_POST[we]','$_POST[ea]','$_POST[sl]','$_POST[in]','$_POST[he]','$_POST[wl]','$_POST[dh]','$_POST[gr]','$_POST[fe]','$_POST[ta]','$_POST[ear]','$_POST[de]','$_POST[hd]','$_POST[ld]','$_POST[ki]','$_POST[ca]','$_POST[ep]','$_POST[db]','$_POST[al]','$_POST[el]','$_POST[sd]','$_POST[ty]','$_POST[hp]','$_POST[ja]','$_POST[ma]','$_POST[an]','$_POST[fi]','$_POST[as]','$_POST[al]','$_POST[st]','$_POST[va]','$_POST[do]','$_POST[su]','$_POST[bt]','$_POST[pg]','$_POST[ab]','$_POST[ch]','$_POST[br]','$_POST[pe]','$_POST[tt]','$_POST[fd]','$_POST[wg]','$_POST[pu]','$_POST[hb]','$_POST[bp]','$_POST[tm]','$_POST[ac]','$_POST[df]','$_POST[em]')";
mysql_query($sql,$cn);
echo "data stored...";
}
}
else
if($sb=="update")
{
$sql="update donar set DNAME='$_POST[dn]',FATHERNAME='$_POST[fa]',OCCUPATION='$_POST[oc]',ORGANIZATION='$_POST[or]',TELEPHONE='$_POST[te]',MOBILENUMBER='$_POST[mo]',SEX='$_POST[se]',CALLONMOBILE='$_POST[ca]',PREVIOUSDONATEDATE='$_POST[pr]',BLOODGROUP='$_POST[bl]',RH='$_POST[rh]',DISCOMFORT='$_POST[di]',WELLTODAY='$_POST[we]',EAT4HOURS='$_POST[ea]',SLEEP='$_POST[sl]',INFECTION='$_POST[in]',HEPETITIS='$_POST[he]',WIGHTLOSS='$_POST[wl]',DIARRHOEA='$_POST[dh]',GLANDS='$_POST[gr]',FEVER='$_POST[fe]',TATTOOING='$_POST[ta]',EARPIERCING='$_POST[ear]',DENTALEXTRACTION='$_POST[de]',HEARTDISEASE='$_POST[hd]',LUNGDISEASE='$_POST[ld]',KIDNEYDISEASE='$_POST[ki]',CANCER='$_POST[ca]',EPILEPSY='$_POST[ep]',DIABETES='$_POST[db]',ALLERGIC='$_POST[al]',BLEEDING='$_POST[el]',SEXUALDISEASE='$_POST[sd]',TYPHOID='$_POST[ty]',HAPATITISBC='$_POST[hp]',JAUNDICE='$_POST[ja]',MALERIA='$_POST[ma]',ANTIBIOTICS='$_POST[an]',FAINTINSPELLS='$_POST[fi]',ASPIRIN='$_POST[as]',ALCOHOL='$_POST[al]',STERIODIS='$_POST[st]',VACCINATIONS='$_POST[va]',DOGBITE='$_POST[do]',SURGERY='$_POST[su]',BLOODTRANSFUSION='$_POST[bt]',PREGNANT='$_POST[pg]',ABORTION='$_POST[ab]',CHILD1YR='$_POST[ch]',BREST_FEEDING='$_POST[br]',PERIODS='$_POST[pe]',TESTRESULT='$_POST[tt]',FDATE='$_POST[fd]',WEIGHT='$_POST[wg]',PULSE='$_POST[pu]',HB='$_POST[hb]',BP='$_POST[bp]',TEMPERATURE='$_POST[tm]',ACCEPT='$_POST[ac]',DEFER='$_POST[df]',Email_Id='$_POST[em]' where USERID='$_POST[us]'";
mysql_query($sql,$cn);
echo "data updated...";
}
else
if($sb=="delete")
{
$sql="delete from donar where USERID='$_POST[us]'";
mysql_query($sql,$cn);
echo "data deleted...";
}
else
if($sb=="display")
{
echo"<center><table border=1>";
echo"<caption>Donar Information</caption>";
echo"<tr>";
echo"<th>User Id</th>";
echo"<th>Donar Name</th>";
echo"<th>Father Name</th>";
echo"<th>Occupation</th>";
echo"<th>Organization</th>";
echo"<th>Telephone</th>";
echo"<th>Mobile No</th>";
echo"<th>Sex</th>";
echo"<th>Call On Mobile</th>";
echo"<th>Previous Donate Date</th>";
echo"<th>Blood Group</th>";
echo"<th>RH</th>";
echo"<th>Discomfort</th>";
echo"<th>Well To Day</th>";
echo"<th>Eat 4 Hours </th>";
echo"<th>Sleep</th>";
echo"<th>Infection</th>";
echo"<th>Hepetitis</th>";
echo"<th>Weight Loss</th>";
echo"<th>Diarrhoea</th>";
echo"<th>Grands</th>";
echo"<th>Fever</th>";
echo"<th>Tatiooning</th>";
echo"<th>Ear Piercing</th>";
echo"<th>Dental Extraction</th>";
echo"<th>Heart Disease</th>";
echo"<th>Lung Disease</th>";
echo"<th>Kidney Disease</th>";
echo"<th>Cancer</th>";
echo"<th>Epilepsy</th>";
echo"<th>Diabetes</th>";
echo"<th>Allergic</th>";
echo"<th>Eleeding</th>";
echo"<th>Sexual Disease</th>";
echo"<th>Typhoid</th>";
echo"<th>Hapatitisbc</th>";
echo"<th>Jaundice</th>";
echo"<th>Maleria</th>";
echo"<th>Antibiotics</th>";
echo"<th>Faintinspells</th>";
echo"<th>Aspirin</th>";
echo"<th>Alcohol</th>";
echo"<th>Steriodts</th>";
echo"<th>Vaccinations</th>";
echo"<th>Dog Bite</th>";
echo"<th>Surgery</th>";
echo"<th>Blood Transformation</th>";
echo"<th>Pregnent</th>";
echo"<th>Childiyr</th>";
echo"<th>Brest Feeding</th>";
echo"<th>Periods</th>";
echo"<th>Test Result</th>";
echo"<th>F Date</th>";
echo"<th>Weight</th>";
echo"<th>Pulse</th>";
echo"<th>HB</th>";
echo"<th>BP</th>";
echo"<th>Temperature</th>";
echo"<th>Accept</th>";
echo"<th>Defer</th>";
echo"<th>Email Id</th>";
echo"</tr>";
$sql="select * from donar";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "<td>$row[8]</td>";
echo "<td>$row[9]</td>";
echo "<td>$row[10]</td>";
echo "<td>$row[11]</td>";
echo "<td>$row[12]</td>";
echo "<td>$row[13]</td>";
echo "<td>$row[14]</td>";
echo "<td>$row[15]</td>";
echo "<td>$row[16]</td>";
echo "<td>$row[17]</td>";
echo "<td>$row[18]</td>";
echo "<td>$row[19]</td>";
echo "<td>$row[20]</td>";
echo "<td>$row[21]</td>";
echo "<td>$row[22]</td>";
echo "<td>$row[23]</td>";
echo "<td>$row[24]</td>";
echo "<td>$row[25]</td>";
echo "<td>$row[26]</td>";
echo "<td>$row[27]</td>";
echo "<td>$row[28]</td>";
echo "<td>$row[29]</td>";
echo "<td>$row[30]</td>";
echo "<td>$row[31]</td>";
echo "<td>$row[32]</td>";
echo "<td>$row[33]</td>";
echo "<td>$row[34]</td>";
echo "<td>$row[35]</td>";
echo "<td>$row[36]</td>";
echo "<td>$row[37]</td>";
echo "<td>$row[38]</td>";
echo "<td>$row[39]</td>";
echo "<td>$row[40]</td>";
echo "<td>$row[41]</td>";
echo "<td>$row[42]</td>";
echo "<td>$row[43]</td>";
echo "<td>$row[44]</td>";
echo "<td>$row[45]</td>";
echo "<td>$row[46]</td>";
echo "<td>$row[47]</td>";
echo "<td>$row[48]</td>";
echo "<td>$row[49]</td>";
echo "<td>$row[50]</td>";
echo "<td>$row[51]</td>";
echo "<td>$row[52]</td>";
echo "<td>$row[53]</td>";
echo "<td>$row[54]</td>";
echo "<td>$row[55]</td>";
echo "<td>$row[56]</td>";
echo "<td>$row[57]</td>";
echo "<td>$row[58]</td>";
echo "<td>$row[59]</td>";
echo "<td>$row[60]</td>";
echo "<td>$row[61]</td>";
}
echo "</table></center>";
}
else
if($sb=="search")
{
echo"<center><table border=1>";
echo"<caption>Donar Information</caption>";
echo"<tr>";
echo"<th>User Id</th>";
echo"<th>Donar Name</th>";
echo"<th>Father Name</th>";
echo"<th>Occupation</th>";
echo"<th>Organization</th>";
echo"<th>Telephone</th>";
echo"<th>Mobile No</th>";
echo"<th>Sex</th>";
echo"<th>Call On Mobile</th>";
echo"<th>Previous Donate Date</th>";
echo"<th>Blood Group</th>";
echo"<th>RH</th>";
echo"<th>Discomfort</th>";
echo"<th>Well To Day</th>";
echo"<th>Eat 4 Hours </th>";
echo"<th>Sleep</th>";
echo"<th>Infection</th>";
echo"<th>Hepetitis</th>";
echo"<th>Weight Loss</th>";
echo"<th>Diarrhoea</th>";
echo"<th>Grands</th>";
echo"<th>Fever</th>";
echo"<th>Tatiooning</th>";
echo"<th>Ear Piercing</th>";
echo"<th>Dental Extraction</th>";
echo"<th>Heart Disease</th>";
echo"<th>Lung Disease</th>";
echo"<th>Kidney Disease</th>";
echo"<th>Cancer</th>";
echo"<th>Epilepsy</th>";
echo"<th>Diabetes</th>";
echo"<th>Allergic</th>";
echo"<th>Eleeding</th>";
echo"<th>Sexual Disease</th>";
echo"<th>Typhoid</th>";
echo"<th>Hapatitisbc</th>";
echo"<th>Jaundice</th>";
echo"<th>Maleria</th>";
echo"<th>Antibiotics</th>";
echo"<th>Faintinspells</th>";
echo"<th>Aspirin</th>";
echo"<th>Alcohol</th>";
echo"<th>Sterodis</th>";
echo"<th>Vaccinations</th>";
echo"<th>Dog Bite</th>";
echo"<th>Surgery</th>";
echo"<th>Blood Transformation</th>";
echo"<th>Pregnent</th>";
echo"<th>Childiyr</th>";
echo"<th>Brest Feeding</th>";
echo"<th>Periods</th>";
echo"<th>Test Result</th>";
echo"<th>F Date</th>";
echo"<th>Weight</th>";
echo"<th>Pulse</th>";
echo"<th>HB</th>";
echo"<th>BP</th>";
echo"<th>Temperature</th>";
echo"<th>Accept</th>";
echo"<th>Defer</th>";
echo"<th>Email Id</th>";
echo"</tr>";
$sql="select * from donar where USERID='$_POST[us]'";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "<td>$row[8]</td>";
echo "<td>$row[9]</td>";
echo "<td>$row[10]</td>";
echo "<td>$row[11]</td>";
echo "<td>$row[12]</td>";
echo "<td>$row[13]</td>";
echo "<td>$row[14]</td>";
echo "<td>$row[15]</td>";
echo "<td>$row[16]</td>";
echo "<td>$row[17]</td>";
echo "<td>$row[18]</td>";
echo "<td>$row[19]</td>";
echo "<td>$row[20]</td>";
echo "<td>$row[21]</td>";
echo "<td>$row[22]</td>";
echo "<td>$row[23]</td>";
echo "<td>$row[24]</td>";
echo "<td>$row[25]</td>";
echo "<td>$row[26]</td>";
echo "<td>$row[27]</td>";
echo "<td>$row[28]</td>";
echo "<td>$row[29]</td>";
echo "<td>$row[30]</td>";
echo "<td>$row[31]</td>";
echo "<td>$row[32]</td>";
echo "<td>$row[33]</td>";
echo "<td>$row[34]</td>";
echo "<td>$row[35]</td>";
echo "<td>$row[36]</td>";
echo "<td>$row[37]</td>";
echo "<td>$row[38]</td>";
echo "<td>$row[39]</td>";
echo "<td>$row[40]</td>";
echo "<td>$row[41]</td>";
echo "<td>$row[42]</td>";
echo "<td>$row[43]</td>";
echo "<td>$row[44]</td>";
echo "<td>$row[45]</td>";
echo "<td>$row[46]</td>";
echo "<td>$row[47]</td>";
echo "<td>$row[48]</td>";
echo "<td>$row[49]</td>";
echo "<td>$row[50]</td>";
echo "<td>$row[51]</td>";
echo "<td>$row[52]</td>";
echo "<td>$row[53]</td>";
echo "<td>$row[54]</td>";
echo "<td>$row[55]</td>";
echo "<td>$row[56]</td>";
echo "<td>$row[57]</td>";
echo "<td>$row[58]</td>";
echo "<td>$row[59]</td>";
echo "<td>$row[60]</td>";
echo "<td>$row[61]</td>";
echo "</tr>";
}
echo "</center></table>";
}
}
?>