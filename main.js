const loginSubmit = document.querySelector('#loginSubmit')
const pinBox = document.querySelector('#pin')

const handleValidation = (e) => {
    e.preventDefault()
    const formsElements = [...document.querySelectorAll('input')]
    const form = document.querySelector('#loginForm')
    let isEmpty
    formsElements.forEach(el => el.value === '' ? isEmpty = true : isEmpty = false )
    if(isEmpty) {
        alert('Uzupełnij wszystkie pola formularza')
    }else {
        form.submit()
    }
}

const checkPIN = () => {
    if (pinBox.value.length > 4) pinBox.value = pinBox.value.slice(0, 4)
}

pinBox.addEventListener('input', checkPIN)
loginSubmit.addEventListener('click', handleValidation)