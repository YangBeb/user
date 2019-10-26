<?php


/* mulai warna */
$none="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$bluel="\033[0;36m";
$bluel2="\033[1;36m";
/* done color */

/* bannering */

$pen = "{$blue}[!]";
$trip = "{$yellow}[-]";
$info = "{$bluel}[info]";


system("clear");
$banner = "
        # #          ######        #           ##            ########
        # #   ###                 #          ##   ##########        #
       #  ####     ##########    #         ## #           #        ##
      #   #        #        #   #        ##   #          #         #
    ##    #               ##   #     #        #       # #        ##
  ##      #             ##    #########       #        #       ##
##         #######    ##               #      #         #    ##
";
echo $blue.$banner;
echo $putih2."creator ".$putih.":".$green." nokie mie   ".$putih2."   about : ".$green."Bucin is my life";
echo "\n{$info} ヤンベブ\n";
echo $blue."{$trip} love you yang;)\n";
echo $blue."{$trip} kamu akan selalu ada di hati ku\n\n";

/* end banner */


/* json banner */

{
 "creator":"nokie mie",
 "about":"Bucin is my life",
 "info":"ヤンベブ",
 "msg1":"love you yang;)",
 "msg2":"kamu akan selalu ada di hati ku"
}

/* end json */

