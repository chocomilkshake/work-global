const input = document.getElementById('custom-input');
const optionsList = document.querySelector('.options');
const optionItems = document.querySelectorAll('.options li');

input.addEventListener('focus', function () {
  optionsList.style.display = 'block';
});

input.addEventListener('blur', function () {
  setTimeout(() => {
    optionsList.style.display = 'none';
  }, 200); // Delay the hiding to allow for clicking an option
});

optionItems.forEach((item) => {
  item.addEventListener('click', function () {
    input.value = item.getAttribute('data-value');
    optionsList.style.display = 'none';
  });
});

input.addEventListener('input', function () {
  const inputValue = input.value.toLowerCase();
  optionItems.forEach((item) => {
    const optionText = item.getAttribute('data-value').toLowerCase();
    if (optionText.indexOf(inputValue) > -1) {
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });
});

// Add the event listeners and variables for the employer input and options list

const empInput = document.getElementById('employer-input'); // Fix the variable name
const empOptionsList = document.querySelector('.options-employer'); // Fix the class name
const empOptionItems = document.querySelectorAll('.options-employer li'); // Fix the class name

empInput.addEventListener('focus', function () {
  empOptionsList.style.display = 'block';
});

empInput.addEventListener('blur', function () {
  setTimeout(() => {
    empOptionsList.style.display = 'none';
  }, 200); // Delay the hiding to allow for clicking an option
});

empOptionItems.forEach((item) => {
  item.addEventListener('click', function () {
    empInput.value = item.getAttribute('data-value');
    empOptionsList.style.display = 'none';
  });
});

empInput.addEventListener('input', function () {
  const empInputValue = empInput.value.toLowerCase();
  empOptionItems.forEach((item) => {
    const empOptionText = item.getAttribute('data-value').toLowerCase();
    if (empOptionText.indexOf(empInputValue) > -1) {
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });
});
