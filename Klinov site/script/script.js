

let nomImg = 0; // номер активной картинки

$(document).ready(function () {
    // событие на нажатие переключения катинок
    $('.btn-img').click(function() {
        const index = $(this).index();
        activImg(index);

        // console.log(index);
      });
});


// Галерея -- переключение картинок товара
window.onload = function()
{
    //  если страница Под категории
    if (document.location.href.includes("subCatalog")) activeCatalog();

    //  если страница Products
    if (document.location.href.includes("products")) activeProducts();

    //  если страница продукта (саженцев)
    if (document.location.href.includes("seedling")) {
        document.getElementsByClassName("btn-img")[0].style.backgroundColor  = "#76df20";
   };

};

// Галерея -- переключение картинок товара
function activImg(index){
    document.getElementsByClassName("btn-img")[nomImg].style.backgroundColor  = "#ffffff";
    nomImg = index;
    document.getElementsByClassName("btn-img")[nomImg].style.backgroundColor  = "#76df20";
    const srcImg = document.getElementsByClassName("img-in")[nomImg].src
    document.getElementById('IdActivImg').src = srcImg;
};

//  переключение активного элемента каталога
function  activeCatalog(){
    const params = (new URL(document.location)).searchParams;
    document.getElementsByClassName("ActivCatalog")[params.get("id")-1].style.backgroundColor  = "#2b7619";
};

//  переключение активного элемента под каталога
function  activeProducts(){
    const params = (new URL(document.location)).searchParams;
    activ = document.getElementsByClassName("ActivProducts");
    for (let i = 0; i < activ.length; i++) {
        if (activ[i].getAttribute("id") == params.get("id")){activ[i].style.backgroundColor  = "#2b7619";};
    }
};