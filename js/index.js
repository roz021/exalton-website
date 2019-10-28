$(document).ready(function () {


$('.cont-modal').click(function(){
    $('.contact-form').css('display', 'block');
})

$('#contact-close').click(function(){
    $('.contact-form').css('display', 'none');
})


// Input Field
const input = document.querySelector('.input-field');

function showSubmitButton() {
    const submit = document.querySelector('.submit-container');

    if (input.value.length >= 0) {
        submit.style.opacity = '1';
    } else {
        submit.style.opacity = '0';
    }
}

input.addEventListener('input', showSubmitButton);

})