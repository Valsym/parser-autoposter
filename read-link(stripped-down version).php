<?php
//чтение proxy

$proxy = file('/.../proxy-list.csv');

//чтение 
//и Главный цикл
$row = 1;
$handle = fopen("/.../file-allink.csv", "r");
$fp = fopen('/.../fileresaus.csv', 'w');
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $num = count($data);
    $usag = chooseBrowser(); 
    $ref='http://www...com/';// Главная сайта-донора
    $source = request($data[0],$prox,$usag,$ref);

    makesnd($source,$fp);
    $row++;
}
fclose($fp);
fclose($handle);

function request($url,$proxy_IP,$usag,$ref,$post = 0){
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_PROXY, $proxy_IP );
    curl_setopt($ch, CURLOPT_URL, $url ); // отправляем на
    curl_setopt($ch, CURLOPT_HEADER, 0); // пустые заголовки
    curl_setopt ($ch , CURLOPT_REFERER,$ref); // откуда пришли
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // возвратить то что вернул сервер
    if (ini_get('safe_mode'))
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // следовать за редиректами
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);// таймаут4
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, $usag);
    //curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322)');
    curl_setopt($ch, CURLOPT_COOKIEJAR, dirname(__FILE__).'/cookie.txt'); // сохранять куки в файл
    curl_setopt($ch, CURLOPT_COOKIEFILE, dirname(__FILE__).'/cookie.txt');
    curl_setopt($ch, CURLOPT_POST, $post!==0 ); // использовать данные в post
    if($post)
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    $data = curl_exec($ch);
    if(!curl_errno($ch)){
       $info = curl_getinfo($ch);
       echo '</br>  Прошло ' . $info['total_time'] . ' секунд во время запроса к ' . $info['url'].'</br>';
       print_r($info);
    }
    curl_close($ch);
    return $data;
}

function makesnd($source, $fp){
    // makesnd = make site need data
    preg_match_all('|<meta name="keywords" content="(.*?)" />|i', $source, $t); 
    $name = $t[1][0];
    echo "</br>   Курорт: ".$name;

    preg_match_all('|<div class="value">(.*?)m</div>|i', $source, $t); 
    echo "</br>   Max: ".$t[1][0] ;
    $max = $t[1][0] ;
    echo "</br>   Drop: ".$t[1][1] ;
    $drop = $t[1][1] ;
    echo "</br>   Min: ".$t[1][2] ;
    $min = $t[1][2] ;
    //print_r($t);

    /*preg_match_all('|<li class="bottom"><div class="value">(.*?)</div>|i', $source, $b); */
    preg_match_all('|<li class="total" title="Total Number Of Lifts:(.*?)">|i', $source, $tr); 
    echo "</br>   Всего подъемников: ".$tr[1][0].". В том числе:" ;
    $lift = $tr[1][0] ;
    ...
    $arrall = array();
    //for ($i=0;$i<count($res);$i++ ){
    $item['name'] = $name;
    $item['max'] = $max ;
    $item['min'] = $min ;
    $item['drop'] = $drop;
    $item['lift'] = $lift ;
    ...
    $item['openclose'] = $openclose;
    $item['price'] = $price;
    //$item['info'] = $info;
    $item['lat'] = $lat ;
    $item['lon'] = $lon;

    array_push($arrall, $item);

    //преобразование в формат
    $content = '';
    foreach ($arrall as $key => $item)
    {
      $content.=$item['name'] .','. $item['max'] .',...'. $item['lat'] .','. $item['lon'] .','."\r\n";
    }

    //запись
    fwrite($fp,$content);

}
