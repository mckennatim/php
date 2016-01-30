<?php
error_reporting(E_ALL);
function test()
{
    static $count = 0;

    $count++;
    echo $count;
    if ($count < 10) {
        test();
    }
    $count--;
}

test();



echo strstr('Dicj Hi yo What', 'cj');

function getTweets($hash_tag) {

    $url = 'http://search.twitter.com/search.atom?q='.urlencode($hash_tag) ;
    echo "<p>Connecting to <strong>$url</strong> ...</p>";
    $ch = curl_init($url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $xml = curl_exec ($ch);
    curl_close ($ch);

    //If you want to see the response from Twitter, uncomment this next part out:
    echo "<p>Response:</p>";
    echo "<pre>".htmlspecialchars($xml)."</pre>";

    $affected = 0;
    $twelement = new SimpleXMLElement($xml);
    foreach ($twelement->entry as $entry) {
        $text = trim($entry->title);
        $author = trim($entry->author->name);
        $time = strtotime($entry->published);
        $id = $entry->id;
        echo "<p>Tweet from ".$author.": <strong>".$text."</strong>  <em>Posted ".date('n/j/y g:i a',$time)."</em></p>";
    }

    return true ;
}

getTweets('#cats');



//print_r($_SERVER);
$b=0;
$a="";
echo '$b==false ', $b==false ,'<br>'; 
echo '$a==false ', $a==false ,'<br>'; 
echo '$b!==false ', $b!==false ,'<br>'; 
echo '$b==false ', $b==false ,'<br>'; 
echo '$b===false ', $b===false ,'<br>'; 
echo '$b!==true ', $b!==true ,'<br>'; 
echo 08 *15E-1;
echo 12^9;

$x=5;
echo $x>>2;
$a= array(1,2,3,4);
echo array_shift($a);

echo count(explode('.','sd ...df... ff... ff'));
?>