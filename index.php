<div id="visitor-detail">
</div>

<script type="text/javascript">

    var screen_names = [ "colorDepth", "pixelDepth", "height",
        "width","availHeight", "availWidth", "top",
        "left", "availTop", "availLeft", "window size" ];

    var ele = document.getElementById('visitor-detail');

        for ( var i in screen_names ) {
            ele.innerText = ele.innerText +'\n'+ screen_names[i] +': '+ window.screen[ screen_names[ i ] ];
        }

</script>

<?php

$filename = 'visitors-detail.txt';

// store old data
$oldContent = file_get_contents($filename);
// open file for write new data
$visitors_detail = fopen($filename, "w") or die("Unable to open $filename !");
// first write old data
fwrite($visitors_detail, $oldContent);
// insert new data
$txt = "Minnie Mouse\n";
fwrite($visitors_detail, $txt);
// close File
fclose($visitors_detail);

?>