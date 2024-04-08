document.addEventListener("DOMContentLoaded", function() {
    const minusBtns = document.querySelectorAll('.minus');
    const plusBtns = document.querySelectorAll('.plus');
    
    minusBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const input = btn.nextElementSibling;
            let value = parseInt(input.value);
            value = value > 1 ? value - 1 : 1;
            input.value = value;
        });
    });
    
    plusBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const input = btn.previousElementSibling;
            let value = parseInt(input.value);
            value = value + 1;
            input.value = value;
        });
    });
});