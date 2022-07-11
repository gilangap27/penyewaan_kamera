
const tambahBtn = document.getElementById('tambahBtn');
const kurangBtn = document.getElementById('kurangBtn');
const quantityInput = document.getElementById('quantity');

tambahBtn.addEventListener('click', function (e) {
    quantityInput.value = parseInt(quantityInput.value) + 1;
});

kurangBtn.addEventListener('click', function (e) {
    if (quantityInput.value > 1) {
        quantityInput.value = parseInt(quantityInput.value) - 1;
    }
});