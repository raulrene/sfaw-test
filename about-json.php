<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/13/15
 * Time: 4:21 PM
 */

include_once('database/database1.php');

$q =   "SELECT *
                            FROM sub_chapters A
                            LEFT JOIN sub_sub_ch B
                            ON A.id = B.sub_ch_id
                            LEFT JOIN  content C
                            ON B.id = C.sub_sub_ch_id
                            WHERE A.friendly_url = " ."'". $url ."'
                          ";
$data = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($data);
foreach ($row as $v){
    print_r($v);
}
;

?>