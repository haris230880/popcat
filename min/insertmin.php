 <?php
   $productid =$_POST["productid"];
   $productname = $_POST["productname"];
   $productprice = $_POST["productprice"];
   $productcategoryid = $_POST["productcategoryid"];
   $productonhand = $_POST["productonhand"];
   

   echo $productid;
   echo $productname;
   echo $productprice;
   echo $productcategoryid;
   echo $productonhand;
 
   
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $dbname = "lee_pos";
   
   $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username,$password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$data =[
'productid' =>  $productid,
'productname' =>  $productname,
'productprice' =>  $productprice,
'productcategoryid' =>  $productcategoryid,
'productonhand' =>  $productonhand
];

$sql = "insert into products (product_id,product_name,product_price,product_category_id,product_onhand) 
values (:productid,:productname,:productprice,:productcategoryid,:productonhand)";


 
$stmt = $conn->prepare($sql);
$stmt->execute($data);




if($stmt){
    header("Location:frommin.html");
}else{
    echo"nooo";
}
 
 
 
 ?>
