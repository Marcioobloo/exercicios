<?php

for( $i=0; $i<=40; $i++ ){

    echo "$i, " ;

    if ($i%4 == 0 || $i%10 == 0){

        echo "PIN, " ;
    }
}

?>