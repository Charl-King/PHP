#!/usr/bin/php
<?php
    function ft_split($str){
        $parts = preg_split('/\s+/', $str);
        sort($parts);
        while (!$parts[0])
            array_splice($parts,0, 1);
        return $parts;
    }

    if ($argc > 1){
        $str = trim($argv[1]);
        $words = ft_split($str);
        $i = 0;
        foreach($words as $word)
        {
            if (!$i){
                echo $word;
                $i++;
            }
            else
                echo " ".$word;
        }
        echo "\n"; 
    }
?>