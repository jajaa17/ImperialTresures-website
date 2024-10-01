let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', () => {
    body.classList.add('active');
})
closeShopping.addEventListener('click', () => {
    body.classList.remove('active');
})

let products = [
    {
        id: 1,
        name: 'TAMchu',
        image: 'tamchu.png',
        price: 64.99

    },
    {
        id: 2,
        name: 'TAMad',
        image: 'tamad.PNG',
        price: 64.99
    },
    {
        id: 3,
        name: 'TAMpo',
        image: 'tampo.PNG',
        price: 64.99
    },
    {
        id: 4,
        name: 'Gising',
        image: 'gising.png',
        price: 44.99
    },
    {
        id: 5,
        name: 'Insomnia',
        image: 'insomnia.PNG',
        price: 44.99
    },
    {
        id: 6,
        name: 'Love',
        image: 'love.png',
        price: 44.99
    },

    {
        id: 7,
        name: 'Super Mario Keycaps',
        image: 'Mario.png',
        price: 99.99

    },


    {
        id: 8,
        name: 'Werewolf',
        image: 'Werewolf.png',
        price: 99.99

    },

    {
        id: 9,
        name: 'Gundam',
        image: 'Unicorn.png',
        price: 99.99

    },

];



let listCards = [];
function initApp() {
    products.forEach((value, key) => {
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString('en-US', { style: 'currency', currency: 'PHP' })}</div>
            <button class="addToCartButton" onclick="addToCard(${key})">Add To Cart</button>`;
        list.appendChild(newDiv);
    });
}

initApp();
function addToCard(key) {
    if (listCards[key] == null) {
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}




function reloadCard() {
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key) => {
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if (value != null) {
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="image/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString('en-US', { style: 'currency', currency: 'PHP' })}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
            listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString('en-US', { style: 'currency', currency: 'PHP' });
    quantity.innerText = count;
}


function changeQuantity(key, quantity) {
    if (quantity == 0) {
        delete listCards[key];
    } else {
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}

// Add hover effect for Add to Cart buttons
let addToCartButtons = document.querySelectorAll('.addToCartButton');
addToCartButtons.forEach(button => {
    button.addEventListener('mouseover', () => {
        button.classList.add('hoverEffect');
    });

    button.addEventListener('mouseout', () => {
        button.classList.remove('hoverEffect');
    });
});

window.addEventListener('load', () => {
    setTimeout(() => {
        // Add the 'loaded' class to the body element to hide the loading overlay
        document.body.classList.add('loaded');
    }, 3000); // 3000 milliseconds = 3 seconds
});