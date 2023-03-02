<?php 
if(isset($_POST['submit'])){

$data = array('fname' => $_POST['fname'],'lname'=>$_POST['lname']);

foreach ($data as $key => $value){
    $k[] = $key;
    $v[] = "'".$value."'";
}
$k = implode(",",$k);
$v = implode(",", $v);
    
$conn = mysqli_connect("localhost","root","","funtion");
$sql = "INSERT INTO data ($k) VALUES ($v)";
$exe = mysqli_query($conn,$sql);


}



?>
<form action="" method="post">
   <lavel>First name</lavel>
    <input type="text" name="fname"><br><br>
    <label>Last name</label>
    <input type="text" name="lname"><br><br>
    <input type="submit" name="submit">
    
</form>