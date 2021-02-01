<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
h1{
    text-align:center;
}
#wrapper1{
    display:flex;
    flex-direction:column;
}
</style>
<body>
<?php 
$products = array(
    "Electronics" => array(
                        "Television" => array(
                                            array(
                                                "id" => "PR001", 
                                                "name" => "MAX-001",
                                                "brand" => "Samsung"
                                            ),
                                            array(
                                                "id" => "PR002", 
                                                "name" => "BIG-301",
                                                "brand" => "Bravia"
                                            ),
                                            array(
                                                "id" => "PR003", 
                                                "name" => "APL-02",
                                                "brand" => "Apple"
                                            )
                                        ),
                        "Mobile" => array(
                                            array(
                                                "id" => "PR004", 
                                                "name" => "GT-1980",
                                                "brand" => "Samsung"
                                            ),
                                            array(
                                                "id" => "PR005", 
                                                "name" => "IG-5467",
                                                "brand" => "Motorola"
                                            ),
                                            array(
                                                "id" => "PR006", 
                                                "name" => "IP-8930",
                                                "brand" => "Apple"
                                            )
                                        )
                    ),
    "Jewelry" => array(
                        "Earrings" => array(
                                            array(
                                                "id" => "PR007", 
                                                "name" => "ER-001",
                                                "brand" => "Chopard"
                                            ),
                                            array(
                                                "id" => "PR008", 
                                                "name" => "ER-002",
                                                "brand" => "Mikimoto"
                                            ),
                                            array(
                                                "id" => "PR009", 
                                                "name" => "ER-003",
                                                "brand" => "Bvlgari"
                                            )
                                        ),
                        "Necklaces" => array(
                                            array(
                                                "id" => "PR010", 
                                                "name" => "NK-001",
                                                "brand" => "Piaget"
                                            ),
                                            array(
                                                "id" => "PR011", 
                                                "name" => "NK-002",
                                                "brand" => "Graff"
                                            ),
                                            array(
                                                "id" => "PR012", 
                                                "name" => "NK-003",
                                                "brand" => "Tiffany"
                                            )
                                        )				
                )
)

?>
<div class="section1">
<h1>Task1</h1>
<table id="customers">
   <tr>
        <th>Category</th>
        <th>Subcategory</th>
        <th>ID</th>
        <th>Name</th>
        <th>Brand</th>
   </td>
            <?php 
            foreach($products as $categoryKey => $categoryValue){
                 foreach($categoryValue as $subCategoryKey => $subCategoryValue){
                     foreach($subCategoryValue as $arrayId => $arrayvalue){
            ?>
            <tr>
                <td> <?php echo $categoryKey; ?> </td>
                <td> <?php echo $subCategoryKey; ?> </td>
                <td> <?php echo $arrayvalue["id"];?> </td>
                <td> <?php echo $arrayvalue["name"];?> </td>
                <td> <?php echo $arrayvalue["brand"];?> </td>
            </tr>
            <?php
         
        }
     } 
    }
 ?>          
</table>
</div>

<div class="section2">
<h1>Task2</h1>
   <table id="customers">
   <tr>
        <th>Category</th>
        <th>Subcategory</th>
        <th>ID</th>
        <th>Name</th>
        <th>Brand</th>
   </td>
            <?php 
            foreach($products as $categoryKey => $categoryValue){
                 if($categoryKey=="Electronics"){
                  foreach($categoryValue as $subCategoryKey => $subCategoryValue){
                      if($subCategoryKey=="Mobile"){
                     foreach($subCategoryValue as $arrayId => $arrayvalue){
            ?>
            <tr>
                <td> <?php echo $categoryKey; ?> </td>
                <td> <?php echo $subCategoryKey; ?> </td>
                <td> <?php echo $arrayvalue["id"];?> </td>
                <td> <?php echo $arrayvalue["name"];?> </td>
                <td> <?php echo $arrayvalue["brand"];?> </td>
            </tr>
            <?php
        }
    }
 } 
}
}
 ?>          
   </table>

   </table>
</div>

<div class="section2">
<h1>Task3</h1>
   <table id="customers"> 
   <!-- <tr>
        <th>Category</th>
        <th>Subcategory</th>
        <th>ID</th>
        <th>Name</th>
        <th>Brand</th>
   </td>  -->
   <div id="wrapper1">
            <?php 
            
            foreach($products as $categoryKey => $categoryValue){
                  foreach($categoryValue as $subCategoryKey => $subCategoryValue){
                     foreach($subCategoryValue as $arrayId => $arrayvalue){
                        if($arrayvalue["brand"]=="Samsung"){
            ?>
            <div id="wrapper">
            <tr>
                <td>
                Category:<?php echo $categoryKey; ?><br>
                Sub Category: <?php echo $subCategoryKey; ?> <br>
                product Id:<?php echo $arrayvalue["id"];?><br>
                Product Name:<?php echo $arrayvalue["name"];?><br>
                Product Brand:<?php echo $arrayvalue["brand"];?><br><br>
                </td>
            </tr> 
            </div>
            <?php
        }
    }
 }
}
 ?>  
 </div>        
   </table>

   <div class="section1">
<h1>Task4</h1>
            <?php 
            foreach($products as $categoryKey => $categoryValue){
                 foreach($categoryValue as $subCategoryKey => $subCategoryValue){
                     foreach($subCategoryValue as $arrayId => $arrayvalue){
                         if($arrayvalue["id"]== "PR003"){
                            unset($products[$categoryKey][$subCategoryKey][$arrayId]);
                         }
        }
     } 
    }
 ?>          


<table id="customers">
   <tr>
        <th>Category</th>
        <th>Subcategory</th>
        <th>ID</th>
        <th>Name</th>
        <th>Brand</th>
   </td>
            <?php 
            foreach($products as $categoryKey => $categoryValue){
                 foreach($categoryValue as $subCategoryKey => $subCategoryValue){
                     foreach($subCategoryValue as $arrayId => $arrayvalue){
            ?>
            <tr>
                <td> <?php echo $categoryKey; ?> </td>
                <td> <?php echo $subCategoryKey; ?> </td>
                <td> <?php echo $arrayvalue["id"];?> </td>
                <td> <?php echo $arrayvalue["name"];?> </td>
                <td> <?php echo $arrayvalue["brand"];?> </td>
            </tr>
            <?php
         
        }
     } 
    }
 ?>  
 </table>
</div>

<div class="section1">
<h1>Task5</h1>
            <?php 
            foreach($products as $categoryKey => $categoryValue){
                 foreach($categoryValue as $subCategoryKey => $subCategoryValue){
                     foreach($subCategoryValue as $arrayId => $arrayvalue){
                      
                         if($arrayvalue["id"]== "PR002"){
                            $products[$categoryKey][$subCategoryKey][$arrayId]["name"]="BIG-555";
                         }
        }
     } 
    } 
    ?>
    <table id="customers">
   <tr>
        <th>Category</th>
        <th>Subcategory</th>
        <th>ID</th>
        <th>Name</th>
        <th>Brand</th>
   </td>
            <?php 
            foreach($products as $categoryKey => $categoryValue){
                 foreach($categoryValue as $subCategoryKey => $subCategoryValue){
                     foreach($subCategoryValue as $arrayId => $arrayvalue){
            ?>
            <tr>
                <td> <?php echo $categoryKey; ?> </td>
                <td> <?php echo $subCategoryKey; ?> </td>
                <td> <?php echo $arrayvalue["id"];?> </td>
                <td> <?php echo $arrayvalue["name"];?> </td>
                <td> <?php echo $arrayvalue["brand"];?> </td>
            </tr>
            <?php
         
        }
     } 
    }
 ?>          
</table>
    </div>
</body>
</html>