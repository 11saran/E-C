let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [
  {
    id: 1,
    name: " Biryani",
    image: "Menu1 Biryani.jpeg",
    price: 800,
  },
  {
    id: 2,
    name: "Pasta",
    image: "Menu2 Pasta.jpeg",
    price: 600,
  },
  {
    id: 3,
    name: "Avacado Toast",
    image: "Menu3 Avacado Toast.jpeg",
    price: 500,
  },
  {
    id: 4,
    name: "Sushi Burritos",
    image: "Menu4  Sushi Burritos.jpeg",
    price: 400,
  },
  {
    id: 5,
    name: "Acai Bowls",
    image: "Menu5 Acai Bowls.jpg",
    price: 600,
  },
  {
    id: 6,
    name: "Quinoa Bowls",
    image: "Menu6 Quinoa Bowls.jpeg",
    price: 900,
  },
  {
    id: 7,
    name: "Laksa",
    image: "Menu7 Laksa.jpeg",
    price: 500,
  },
  {
    id: 8,
    name: "Tacos",
    image: "Menu8 Tacos.jpg",
    price: 300,
  },
  {
    id: 9,
    name: "Burgers",
    image: "Menu9 Burgers.jpeg",
    price: 700,
  },
  {
    id: 10,
    name: "Fries",
    image: "Menu10 Fries.jpg",
    price: 200,
  },
  {
    id: 11,
    name: "Coffee",
    image: "Menu11 Coffee.jpeg",
    price: 100,
  },
  {
    id: 12,
    name: "Matcha Lattes",
    image: "Menu12  Matcha Lattes.jpg",
    price: 250,
  },
  {
    id: 13,
    name: "Kombucha",
    image: "Menu13 Kombucha.jpeg",
    price: 350,
  },
  {
    id: 14,
    name: "Smoothies",
    image: "Menu14  Smoothies.jpg",
    price: 400,
  },
  {
    id: 15,
    name: "Infused water",
    image: "Menu15 Fruit Infused water.jpg",
    price: 200,
  },
  {
    id: 16,
    name: "Coconut Water",
    image: "Menu16  Coconut Water.jpeg",
    price: 150,
  },
  {
    id: 17,
    name: "Vegetable Juices",
    image: "Menu17 Vegetable Juices.jpg",
    price: 200,
  },
 
  {
    id: 18,
    name: "Milk",
    image: "Menu18  Milk.jpeg",
    price: 100,
  },
  
];
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="image/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Card</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCard(key){
    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="image/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}