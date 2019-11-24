const quantity = document.getElementById('value');
const plus = document.getElementById('plus')
const minus = document.getElementById('minus');
let value = parseInt(quantity.value)

plus.addEventListener('click', () => {
    value += 1;
    quantity.value = value;
})

minus.addEventListener('click', () => {
    value -= 1;
    quantity.value = value;
})