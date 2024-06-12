//  دالة ادخال المنتجات
function insert_product(){

    const product_name = document.getElementById('pname').value;
    const price = document.getElementById('price').value;
    const img = document.getElementById('img').value;
    
    const product = {product_name, price, img};
    
    // جلب ملف بي اتش بي الموجودة به دوال
    // الاتصال بقاعدة البيانات
    $.ajax({
        url: 'api/php_functions.php',
        method: 'POST',
        datatype: "json",
        data: {function_name: 'insert_product', param: product}, // ارسال اسم الدالة و قيمة المتغير الخاصة بها
        success: function(data) {
            // بعد ادخال المنتجات
            // قم بتصفير النموذج
            document.getElementById('pname').value = "";
            document.getElementById('price').value = "";
            document.getElementById('img').value = "";
            alert("Product Inserted");
        },
        error: function(error) {
            console.error('Error:', error);
        }
    });
}