 <?php
$name =$_POST['name'];
$email =$_POST['email'];
$subject =$_POST['subject'];
$message =$_POST['message'];
// database connection
$conn = new mysqli('localhost', 'root','','ngo');
if($conn->connect_error){
    die('connection Failed :'.$conn->connect_error);
}else{
    $stmt= $conn->prepare("insert into registration(name,email,subject,message)values(?,?,?,?)");
    $stmt->bind_param("ssss",$name,$email,$subject,$message);
    $stmt->execute();
    echo"registration successfully....";
    $stmt->close();
    $conn->close();}

?>