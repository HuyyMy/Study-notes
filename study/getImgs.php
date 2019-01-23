<?php

function getImgs($url) {
    $html = file_get_contents($url);
    $dom = new DOMDocument();

    // 变量前加@，忽略错误提示
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $hrefs  = $xpath->evaluate('/html/body//img');
    $imgs = [];
    for ($i = 0; $i < $hrefs->length; $i++) {
        $href = $hrefs->item($i);
        $img = $href->getAttribute('src');
        //if ()
        $imgs[] = $imgs;

    }

    return $imgs;
}
//$imgs = getImgs('http://shop.baoxingfu.cn');
