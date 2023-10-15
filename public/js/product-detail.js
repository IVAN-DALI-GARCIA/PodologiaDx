document.querySelectorAll(".product-img-item").forEach((e) => {
  e.addEventListener("click", () => {
    let img = e.querySelector("img").getAttribute("src");
    document.querySelector("#product-img > img").setAttribute("src", img);
  });
});

document
  .querySelector("#view-all-description")
  .addEventListener("click", () => {
    let content = document.querySelector(".product-detail-description-content");
    content.classList.toggle("active");
    document.querySelector("#view-all-description").innerHTML =
      content.classList.contains("active") ? "VER MENOS" : "VER MAS";
  });

let products = [
  {
    name: "CORTAUÑAS PROFESIONAL",
    image1: "./imagenes/unnamed-removebg-preview.png",
    image2:
      "./imagenes/2_back_home_47_producto_advance_liquido_botella_chocolate_co-removebg-preview.png",
    old_price: "$58",
    curr_price: "$39.90",
  },
  {
    name: "ELECTROLIT 456ml 12PZ",
    image1:
      "./imagenes/PiSA-se-deslinda-de-medicamentos-contaminados-en-hospital-de-Tabasco-removebg-preview.png",
    image2: "./imagenes/7501125144851-00-CH1200Wx1200H-removebg-preview.png",
    old_price: "$19.99",
    curr_price: "$16.59",
  },
  {
    name: "GLUCOMETRO DX/20PZ",
    image1:
      "./imagenes/png-clipart-blood-glucose-meters-blood-glucose-monitoring-blood-sugar-blood-lancet-onetouch-ultra-blood-miscellaneous-service-removebg-preview.png",
    image2: "./imagenes/GLUCOMETRO-removebg-preview.png",
    old_price: "$1,700",
    curr_price: "$999.99",
  },
  {
    name: "ENSURE LATA 876g.",
    image1:
      "./imagenes/png-transparent-powdered-milk-dog-ensure-nutrient-milk-food-nutrition-eating-removebg-preview.png",
    image2: "./imagenes/unnamed-removebg-preview.png",
    old_price: "$1,600",
    curr_price: "$1,199",
  },
  {
    name: "ENALAPRIL 20g MEDIC.",
    image1: "./imagenes/7501384543068-removebg-preview.png",
    image2: "./imagenes/ENALAPRIL-removebg-preview.png",
    old_price: "$299.99",
    curr_price: "$199.99",
  },
  {
    name: "FUROSEMIDA 40mg MEDIC",
    image1:
      "./imagenes/desktop_aa39ef79-190d-4f78-84e1-03852a75941f-removebg-preview.png",
    image2:
      "./imagenes/furosemida_40_mg_coaspharma-23027-1559932777-removebg-preview.png",
    old_price: "$356.20",
    curr_price: "$299.56",
  },
];

let product_list = document.querySelector("#related-products");

renderProducts = (products) => {
  products.forEach((e) => {
    let prod = `
            <div class="col-4 col-md-6 col-sm-12">
                <div class="product-card">
                    <div class="product-card-img">
                        <img src="${e.image1}" alt="">
                        <img src="${e.image2}" alt="">
                    </div>
                    <div class="product-card-info">
                        <div class="product-btn">
                            <a href="./product-detail.php" class="btn-flat btn-hover btn-shop-now">COMPRAR</a>
                            <button class="btn-flat btn-hover btn-cart-add">
                                <i class='bx bxs-cart-add'></i>
                            </button>
                            <button class="btn-flat btn-hover btn-cart-add">
                                <i class='bx bxs-heart'></i>
                            </button>
                        </div>
                        <div class="product-card-name">
                            ${e.name}
                        </div>
                        <div class="product-card-price">
                            <span><del>${e.old_price}</del></span>
                            <span class="curr-price">${e.curr_price}</span>
                        </div>
                    </div>
                </div>
            </div>
        `;
    product_list.insertAdjacentHTML("beforeend", prod);
  });
};

renderProducts(products);
