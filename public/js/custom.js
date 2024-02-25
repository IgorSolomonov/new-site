let label_title = document.querySelectorAll('.label_title');
let input_size = document.querySelectorAll('.input_size');

label_title.forEach(element => {
    if(element.textContent == 'Не верный номер телефона'){
        element.style.color = "red";
    }
    if(element.textContent == 'Не верный пин-код'){
        element.style.color = "red";
    }
});