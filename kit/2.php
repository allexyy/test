<?php

$url = "https://www.somehost.com/test/index.html?param1=4&param2=3&param3=2&param4=1&param5=3" ;

function recreateUrl($url){
    //массивы для работы с url[QUERY]
    $keyarr=[];
    $valarr=[];
    $query=[];
    //Получаем из url: shame, host, path
    $shame = parse_url($url,PHP_URL_SCHEME);
    $host = parse_url($url,PHP_URL_HOST);
    $addurl = parse_url($url,PHP_URL_PATH);

    //Получаем параметры из url, убираем параметр с 3 и добавляем в значения в 2 массива(ключ и значение)      
    $data = explode('&',parse_url($url,PHP_URL_QUERY));
    if(is_array($data)){
        foreach ($data as $key => $value) {
            if($value[-1]==3){
                continue;
            }
            else{
            array_push($keyarr,substr($value,0,6));
            array_push($valarr,substr($value,7));

            }
        }
    }
    else{
        echo "Error <br>";
    }
    //объединяем ключ и значение полученные выше и сортируем его
    $arr = array_combine($keyarr,$valarr);
    array_multisort($arr,SORT_ASC);
    //преобразуем массив в строку
    foreach($arr as $k=>$v){
        array_push($query,"$k=$v");
    }
    $query = implode($query);

    //возвраещаем измененное url
    return "$shame://$host?$query".urlencode($addurl);
}

recreateUrl($url);

?>