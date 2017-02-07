<?php 
$a=$_POST['accidentlocation'];
?>
<script>
var fs=require('fs');
var http=require('http');
var a={'accidentlocation'};
fs.writeFileSync("Jagan.txt",a);
console.log(a);
</script>