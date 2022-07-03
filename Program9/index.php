<?php
    $states = "Mississippi Alabama Texas Massachusetts Kansas";
    $arr = preg_split("/ /", $states);


    for ($i=0; $i<count($arr); $i++)
    {
        if (preg_match("/xas/", $arr[$i]))
        {
            $statesList[0] = $arr[$i];
        }
        if (preg_match("/^k.*s$/i", $arr[$i]))
        {
            $statesList[1] = $arr[$i];
        }
        if (preg_match("/^M.*s$/", $arr[$i]))
        {
            $statesList[2] = $arr[$i];
        }
        if (preg_match("/a$/", $arr[$i]))
        {
            $statesList[3] = $arr[$i];
        }      
    }
    for ($i=0; $i<count($statesList); $i++)
    {
        echo "[".$i."]=" .$statesList[$i]."<br>";
    }
?>
