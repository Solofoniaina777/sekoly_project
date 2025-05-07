<?php
function f_select_content_value($data,$id,$code)
{
    $content="";
    foreach ($data as $row) {
        $content.='<option value="' . htmlspecialchars($row[$id]) . '">'
             . htmlspecialchars($row[$code]) . '</option>';
}
return $content;
}
?>