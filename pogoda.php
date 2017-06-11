function pogoda_module($attr) {
               if (!$attr['res']) return; 
               else $name1=$attr['res'];
               if (!$attr['lat']) return;
               else $lat=$attr['lat']; 
               if (!$attr['lon']) return; 
               else $lon=$attr['lon'];
               if (!$attr['mod']) return; 
               else $mod=$attr['mod']; 

return;
$latlon = ''.$lat.','.$lon;
$loc_array= Array($latlon);
$api_key="5493...j4c0087d45";		//should be embedded in your code, so no data validation necessary, otherwise if(strlen($api_key)!=24)
$num_of_days=5;					//data validated in sprintf

$loc_safe=Array();
foreach($loc_array as $loc){
	$loc_safe[]= urlencode($loc);
}
$loc_string=implode(",", $loc_safe);

//To add more conditions to the query, just lengthen the url string
/*$basicurl=sprintf('https://api.worldweatheronline.com/free/v2/weather.ashx?key=%s&q=%s&num_of_days=%s&format=xml&date=today&fx=no&mca=no&fx24=no&lang=ru', 
	$api_key, $loc_string, intval($num_of_days));*/

$basicurl=sprintf('https://api.worldweatheronline.com/free/v2/weather.ashx?key=%s&q=%s&num_of_days=%s&format=xml&tp=24&lang=ru&date_format=unix', 
	$api_key, $loc_string, intval($num_of_days));

//print $basicurl . "<br />\n";

$xml_response = file_get_contents($basicurl);
$xml = simplexml_load_string($xml_response);
if ($xml->results->error->type == "QpdExceededError") return;
$err = $xml->current_condition->temp_C;
if ($err == "" || $err == NULL) return;

$body = '
<p style="text-align: center; text-indent: 20px;"><strong> <span style="color: #800000; font-size: 20px;"><em>П</em></span>огодные условия:</strong></p>';

$body .= '<div style="margin: 8px; padding: 2px; text-align: center; color: #000080;">
<table class="lifttab" align="center" border="0" cellpadding="5" cellspacing="0" style="position: relative; left: -40px; width: 100%; max-width: 900px;">
<tbody>
<tr>
<td style="text-align: center; color: #000080;"></td>
<td style="text-align: center; color: #3366ff;"><strong>Прогноз:</strong></td>
</tr>
<tr>
<td>';

$Pr =  round($xml->current_condition->pressure*0.750062,0);

$body .= '<div style="text-align: center; color: #000080;">
<table border="2px;">
<tbody>
<tr>
<td style="text-align: center;" colspan="3"><strong>Погодные условия сейчас:</strong></td>
</tr>
<tr>
<td width="64" rowspan="3"><img src="'.$xml->current_condition->weatherIconUrl.'"/></td>
<td width="64">Влажность</td>
<td width="64">'.$xml->current_condition->humidity.'%</td>
</tr>
<tr>
<td>Давление</td>
<td>'.$Pr.' мм рт.ст.</td>
</tr>
<tr>
<td>Видимость</td>
<td>'.$xml->current_condition->visibility.' км</td>
</tr>
<tr>
<td>'.$xml->current_condition->lang_ru.'</td>
<td><span data-align="0:11">Облачность </span></td>
<td>'.$xml->current_condition->cloudcover.'%</td>
</tr>
<tr>
<td style="text-align: center; font-size: 20px;"><strong>'.$xml->current_condition->temp_C.' °C</strong></td>
<td>Ветер</td>
<td>'.$xml->current_condition->windspeedKmph.' км/ч ('.$xml->current_condition->winddir16Point.')</td>
</tr>
</tbody>
</table></div>
</td>
<td>';

$i=0;
foreach ($xml->weather->xpath('//weather') as $weather) {	
//foreach ($xml->weather as $weather) {
        $time = strtotime($weather->date);
        $dw = dateToRussian4(date('l',$time));
        $dt = dateToRussian4(date('d F',$time));
     //echo PHP_EOL,'Дата:'.$dt. ' День:'.$weather->maxtempC. ' Ночь:'. $weather->mintempC.' Усл.: '.$weather->hourly->lang_ru.'Ссылка: '.$weather->hourly->weatherIconUrl.'<img src="'.$weather->hourly->weatherIconUrl.'"/>', PHP_EOL;
	$dwarr[$i] = $dw;
        $dtarr[$i] = $dt; $max[$i]= $weather->maxtempC;$min[$i]= $weather->mintempC;
	$usl[$i]= $weather->hourly->lang_ru;$srcurl[$i] =$weather->hourly->weatherIconUrl;
	$i++;
}
//style="display:none"	  
$body .= '<div style="text-align: center; color: #3366ff;">
<table >
<tbody>
<tr>
<td>'.$dwarr[0].'<br>'.$dtarr[0].'</td>
<td>'.$dwarr[1].'<br>'.$dtarr[1].'</td>
<td>'.$dwarr[2].'<br>'.$dtarr[2].'</td>
<td>'.$dwarr[3].'<br>'.$dtarr[3].'</td>
<td>'.$dwarr[4].'<br>'.$dtarr[4].'</td>
</tr>
<tr>
<td><img src="'.$srcurl[0].'"/></td>
<td><img src="'.$srcurl[1].'"/></td>
<td><img src="'.$srcurl[2].'"/></td>
<td><img src="'.$srcurl[3].'"/></td>
<td><img src="'.$srcurl[4].'"/></td>
</tr>
<tr>
<td>'.$usl[0].'</td>
<td>'.$usl[1].'</td>
<td width="50">'.$usl[2].'</td>
<td>'.$usl[3].'</td>
<td>'.$usl[4].'</td>
</tr>
<tr>
<td><img src="http://fanski.ru/wp-content/uploads/2015/12/day.png"/> '.$max[0].' °C</td>
<td><img src="http://fanski.ru/wp-content/uploads/2015/12/day.png"/> '.$max[1].' °C</td>
<td><img src="http://fanski.ru/wp-content/uploads/2015/12/day.png"/> '.$max[2].' °C</td>
<td><img src="http://fanski.ru/wp-content/uploads/2015/12/day.png"/> '.$max[3].' °C</td>
<td><img src="http://fanski.ru/wp-content/uploads/2015/12/day.png"/> '.$max[4].' °C</td>
</tr>
<tr>
<td><img src="http://fanski.ru/wp-content/uploads/2015/12/night.png"/> '.$min[0].' °C</td>
<td><img src="http://fanski.ru/wp-content/uploads/2015/12/night.png"/> '.$min[1].' °C</td>
<td><img src="http://fanski.ru/wp-content/uploads/2015/12/night.png"/> '.$min[2].' °C</td>
<td><img src="http://fanski.ru/wp-content/uploads/2015/12/night.png"/> '.$min[3].' °C</td>
<td><img src="http://fanski.ru/wp-content/uploads/2015/12/night.png"/> '.$min[4].' °C</td>
</tr>
</tbody>
</table></div>
</td>
</tr>
</tbody>
</table>
</div>
';



return ($body);
}
	add_shortcode('pogoda', 'pogoda_module');