window.onload = function() {
  var categories = document.getElementsByClassName("category_link");
  for (var i = 0; i < categories.length; i++) {
    categories[i].addEventListener("click", filterProducts);
  }
};

function filterProducts(event) {
  var category = event.target.dataset.category;
  var products = document.getElementsByClassName("product-item");

  for (var i = 0; i < products.length; i++) {
    var product = products[i];

    if (category === "all") {
      product.style.display = "block";
    } else if (product.dataset.category === category) {
      product.style.display = "block";
    } else {
      product.style.display = "none";
    }
  }
  
  changeColor(event.target);
}

var prevListItem = null;

function changeColor(listItem) {
  if (prevListItem !== null) {
    prevListItem.classList.remove("active");
  }
  
  listItem.classList.add("active");
  prevListItem = listItem;
}

const categoryLinks = document.querySelectorAll(".category_link");

categoryLinks.forEach(link => {
  link.addEventListener("click", function() {
    const category = this.getAttribute("data-category");
    window.location.href = "watch_section.php?brand=" + category;
  });
});
