<?php 
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "nhr_grup";

$db = new mysqli($host, $user, $pass, $dbname);

// connection check
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// ================= Manufacturer Save =================
if(isset($_POST['btnSubmit'])){
    $mname = $db->real_escape_string($_POST['mname']);
    $id = $db->real_escape_string($_POST['id']);

    $db->query("CALL nhr_menu('$mname','$id')");
    $db->next_result(); // important
}

// ================= Product Save =================
if(isset($_POST['addProduct'])){
    $pname = $db->real_escape_string($_POST['pname']);
    $price = $db->real_escape_string($_POST['price']);
    $mid = $db->real_escape_string($_POST['manufac']);

    $db->query("CALL nhr_products('$pname','$price','$mid')");
    $db->next_result(); // important
}

// ================= Manufacturer Delete =================
if(isset($_POST['delmanufact'])){
    $mid = $db->real_escape_string($_POST['manufac']);

    $db->query("DELETE FROM manufacturer WHERE id='$mid'");
}

// manufacturer list (for dropdown)
$manufacList = $db->query("SELECT * FROM manufacturer");
?>

<h3>Manufacturer Table</h3>
<form method="post">
<table>
<tr>
    <td>Name</td>
    <td><input type="text" name="mname" required></td>
</tr>
<tr>
    <td>ID</td>
    <td><input type="text" name="id" required></td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" name="btnSubmit" value="Save"></td>
</tr>
</table>
</form>

<h3>Product Table</h3>
<form method="post">
<table>
<tr>
    <td>Name</td>
    <td><input type="text" name="pname" required></td>
</tr>
<tr>
    <td>Price</td>
    <td><input type="number" name="price" required></td>
</tr>
<tr>
    <td>Manufacturer</td>
    <td>
        <select name="manufac">
            <?php 
            $manufac = $db->query("SELECT * FROM manufacturer");
            while($row = $manufac->fetch_assoc()){
                echo "<option value='".$row['id']."'>".$row['name']."</option>";
            }
            ?>
        </select>
    </td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" name="addProduct" value="Add Product"></td>
</tr>
</table>
</form>

<h3>Delete Manufacturer</h3>
<form method="post">
<select name="manufac">
    <?php 
    $manufac = $db->query("SELECT * FROM manufacturer");
    while($row = $manufac->fetch_assoc()){
        echo "<option value='".$row['id']."'>".$row['name']."</option>";
    }
    ?>
</select>
<input type="submit" name="delmanufact" value="Delete">
</form>

<!-- ================= JOIN RESULT ================= -->

<h3>Product + Manufacturer (JOIN)</h3>

<table border="1" style="border-collapse: collapse;">
<tr>
    <th>ID</th>
    <th>Product Name</th>
    <th>Price</th>
    <th>Manufacturer</th>
    <th>Contact</th>
</tr>

<?php 
$product = $db->query("
    SELECT 
        p.id,
        p.name,
        p.price,
        m.name AS manufacturer_name,
        m.contact
    FROM products p
    JOIN manufacturer m 
    ON p.manufac_id = m.id
");

while($row = $product->fetch_assoc()){
    echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['name']."</td>
        <td>".$row['price']."</td>
        <td>".$row['manufacturer_name']."</td>
        <td>".$row['contact']."</td>
    </tr>";
}
?>
</table>