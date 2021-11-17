<?php
$output = "";
$output.="<ul class='pagination'>";
for ($i=1; $i <= $totalPage ; $i++) { 
    if ($i == $page_no) {
    $active = "pagination-active";
    }else{
    $active = "";
    }
    $output.="<li class='page-item $active'><a class='page-link' id='$i' href=''>$i</a></li>";
}
$output.= "</ul>";
echo $output;
