<?php
function xss_fungsi($x){
    echo htmlentities($x, ENT_QUOTES, 'UTF-8');
}
// function sec_xss($x){
//     echo htmlentities($x, ENT_QUOTES, 'UTF-8');
// }