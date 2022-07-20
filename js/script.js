
const tambahBtn = document.getElementById('tambahBtn');
const kurangBtn = document.getElementById('kurangBtn');
const quantityInput = document.getElementById('quantity');

console.log(quantityInput);
console.log(tambahBtn);
console.log(kurangBtn);

tambahBtn.addEventListener('click', function (e) {
    quantityInput.value = parseInt(quantityInput.value) + 1;
});

kurangBtn.addEventListener('click', function (e) {
    if (quantityInput.value > 1) {
        quantityInput.value = parseInt(quantityInput.value) - 1;
    }
});