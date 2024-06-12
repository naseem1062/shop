// MENU TOGGLE
const myMenu = document.querySelector('.menu-toggle');
const myList = document.querySelector('.nav-list');

// جلب المنتجات بعد تحميل الصفحة
document.addEventListener('DOMContentLoaded', function() {
    get_products();
 }, false);

myMenu.addEventListener('click', () => {
    myMenu.classList.toggle('show');
    myList.classList.toggle('show');
});

// CLOSE THE NAV WHEN NAVLNKS ARE CLICKED
let navLinks = document.querySelectorAll('.nav-list a');

navLinks.forEach(function (navLink) {
    navLink.addEventListener('click', function () {
        myList.classList.remove('show');
    })
})

// LOGIN AND SIGN UP FORM SLIDER
var LoginForm = document.getElementById("LoginForm");
var RegForm = document.getElementById("RegForm");
var Indicator = document.getElementById("Indicator");


function register() {
    RegForm.style.transform = "translateX(0px)";
    LoginForm.style.transform = "translateX(0px)";
    Indicator.style.transform = "translateX(100px)";
}

function login() {
    RegForm.style.transform = "translateX(300px)";
    LoginForm.style.transform = "translateX(300px)";
    Indicator.style.transform = "translateX(0px)";
}

// دالة مربع البحث
function search(event){
    // اذا كانت قيمة المفتاح المضغوط في مربع البحث هي انتر
    if (event.key == "Enter") {
        // قم بتنفيذ دالة جلب المنتجات
        // بقيمة مربع البحث
        get_products(event.target.value);
    } 
     
}

function get_products(value=''){
    // جلب ملف بي اتش بي الموجودة به دوال
    // الاتصال بقاعدة البيانات
    $.ajax({
        url: 'api/php_functions.php',
        method: 'GET',
        datatype: "json",
        data: {function_name: 'filter_data', param: value}, // ارسال اسم الدالة و قيمة المتغير الخاصة بها
        success: function(data) {
            // ارسال القيمة المرسلة من بي ات بي الى دالة 
            // عرض المنتجات
            set_products(data);
        },
        error: function(error) {
            // اذا وجد خطأ 
            // اجلب كود HTML الخاص بحاوية المنتجات
            // و افرغها من أي منتج
            let products_row = document.querySelector('.products-row');
            products_row.innerHTML = '<div class="no-products">لا يوجد منتجات</div>';
            console.error('Error:', error);
        }
    });
}
function set_products (produdcts){
    // جلب الحاوية الخاصة بالمنتجات
    let products_row = document.querySelector('.products-row');
    // افراغ الحاوية
    products_row.innerHTML = '';
    // متغير بطاقات/قوالب المنتجات
    let products_string = '';

    // حلقة لكل منتج في قائمة المنتجات
    // المرسلة من بي اتش بي
    produdcts.forEach(item => {
        // قم بتكوين قالب المنتج
        const product_html = `
            <div class="col-4">
                <a href="/shop/templates/productDetails.php?productId=${item["id"]}">
                    <img src="${item["img_name"]}">
                    <h4>${item["name"]}</h4>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>$${item["price"]}</p>
                </a>
            </div>
        `;
        // اضافة قالب المنتج ل متغير بطاقات المنتجات
        products_string += product_html;
    })

    // اذا كانت قيمة متغير بطاقات المنتجات فارغة
    // تعيين قيمة افتراضية ل متغير بطاقات المنتجات
    if(products_string==''){
        products_string = '<div class="no-products">no results</div>';
    }
    // تعيين متغير بطاقات المنتجات
    // لحاوية المنتجات
    products_row.innerHTML = products_string;


}