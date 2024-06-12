<?php

// دالة انشاء اتصال بقاعدة البيانات
function connectToDatabase() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "store";

    $conn = new mysqli($servername, $username, $password, $databasename);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

// دالة جلب المنتجات
function filter_data($value) {
    // انشاء الاتصال
    $conn = connectToDatabase();
    // جملة اس كيو ال
    $query = "SELECT * FROM `products` WHERE name LIKE '%$value%';";
    // تنفيذ الجملة و وضع النتيجة في هذا المتغير
    $result = $conn->query($query);

    // انشاء متغير النتيجة النهائية
    $result_array = [];
    
    // اذا كانت نتيجة قاعدة البيانات تحتوي على صفوف
    if ($result->num_rows > 0) {
        // حلقة للصفوف لوضع كل صف في متغير النتيحة النهائية
        while ($row = $result->fetch_assoc()) {
            array_push($result_array, $row);
        }
    }

    // قم بارسال متغير النتيجة النهائية ل جافا سكربت
    header('content-type: application/json');
    echo json_encode($result_array);

    $conn->close();

}

function insert_product($product) {

    // Create connection
    $conn = connectToDatabase();
    $product_name = $product["product_name"];
    $price = $product["price"];
    $img_name = $product["img"];
    // Prepare and execute the SQL query
    $sql = "INSERT INTO products (name, price, img_name) VALUES ('$product_name', '$price', '$img_name')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
// تنفيد الدوال من جافا سكربت
// عند طلب تلقي طلب من جافا سكربت 
// تحقق من وجود الدالة المطلوبة
//  اذا كان متغير فنكشن نيم يحتوي على قيمة
if(isset($_GET['function_name']) && !empty($_GET['function_name'])) {
    $function_name = $_GET['function_name'];
    $param = $_GET['param'];

    // اذا كان اسم الدالة المرسل من جافا سكربت
    // موجود في هذا الملف
    // نفذ هذه الدالة و أرسل لها المتغير المرسل
    switch($function_name) {
        case 'filter_data' : filter_data($param);
        break;
        default:
            die('Access denied for this function!');
    }
}

if(isset($_POST['function_name']) && !empty($_POST['function_name'])) {
    $function_name = $_POST['function_name'];
    $param = $_POST['param'];
    
    switch($function_name) {
        case 'insert_product' : insert_product($param);
        break;
        default:
            die('Access denied for this function!');
    }
}
?>


