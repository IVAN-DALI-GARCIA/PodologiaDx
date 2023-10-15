let slide_index = 0;
let slide_play = true;
let slides = document.querySelectorAll(".slide");

hideAllSlide = () => {
  slides.forEach((e) => {
    e.classList.remove("active");
  });
};

showSlide = () => {
  hideAllSlide();
  slides[slide_index].classList.add("active");
};

nextSlide = () =>
  (slide_index = slide_index + 1 === slides.length ? 0 : slide_index + 1);

prevSlide = () =>
  (slide_index = slide_index - 1 < 0 ? slides.length - 1 : slide_index - 1);

// pause slide cuando esta en hover slider

document
  .querySelector(".slider")
  .addEventListener("mouseover", () => (slide_play = false));

// habilitar slide cuando mouse sale de slider
document
  .querySelector(".slider")
  .addEventListener("mouseleave", () => (slide_play = true));

// slider control

document.querySelector(".slide-next").addEventListener("click", () => {
  nextSlide();
  showSlide();
});

document.querySelector(".slide-prev").addEventListener("click", () => {
  prevSlide();
  showSlide();
});

showSlide();
//pruebas
// setInterval(() => {
//     if (!slide_play) return
//     nextSlide()
//     showSlide()
// }, 3000);

// render products se duplican en banner

let products = [
  {
    name: "CORTAUÑAS CON LIMPIA UÑAS",
    image1:
      "./public/images/51HUiGrFQkL._AC_UF894_1000_QL80_-removebg-preview.png",
    image2: "./public/images/51kcQMBE8cL-removebg-preview.png",
    old_price: "$158",
    curr_price: "$139.90",
  },
  {
    name: "BISTURI QUIRURGICO P/PIES.",
    image1:
      "./public/images/41oD9LjRtxL._AC_UF1000_1000_QL80_-removebg-preview.png",
    image2: "./public/images/51QLyw9f5hL._AC_UF1000,1000_QL80_.jpg",
    old_price: "$219.99",
    curr_price: "$216.59",
  },
  {
    name: "CEPILLO P/PIES EXFOLIANTE",
    image1:
      "./public/images/61ykX4OXf4L._AC_UF1000_1000_QL80_-removebg-preview.png",
    image2: "./public/images/1-15-33-removebg-preview.png",
    old_price: "$100.99",
    curr_price: "$91.99",
  },
  {
    name: "TALCO DESODORANTE P/PIES",
    image1: "./public/images/7501044205718_1_1-removebg-preview.png",
    image2: "./public/images/7179TDQvTuL-removebg-preview.png",
    old_price: "$1,600",
    curr_price: "$1,199",
  },
  {
    name: "MASAJEADOR P/PIES",
    image1:
      "./public/images/masajeador-pies-electrico-mando-10-intensidades-gridinux-removebg-preview.png",
    image2: "./public/images/gsc_121582445_3098263_1-removebg-preview.png",
    old_price: "$999.99",
    curr_price: "$899.99",
  },
  {
    name: "PLANTILLA P/PIES",
    image1: "./public/images/643d345448f31-removebg-preview.png",
    image2: "./public/images/71aGA7f5n+L.jpg",
    old_price: "$656.20",
    curr_price: "$499.56",
  },
  {
    name: "ESTUCHE P/PIES",
    image1:
      "./public/images/830eab90-7aec-11ec-bfbf-cf98b1d71e05-removebg-preview.png",
    image2: "./public/images/gsc_110728538_260970_1-removebg-preview.png",
    old_price: "$699.99",
    curr_price: "$599.00",
  },
];

let product_list = document.querySelector("#latest-products");
let best_product_list = document.querySelector("#best-products");

products.forEach((e) => {
  let prod = `
        <div class="col-3 col-md-6 col-sm-12">
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
  best_product_list.insertAdjacentHTML("afterbegin", prod);
});
