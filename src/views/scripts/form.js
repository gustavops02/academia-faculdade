const form = document.getElementById('form')
const nam = document.getElementById('nome')
const email = document.getElementById('email')
const cell = document.getElementById('telefone')
const data = document.getElementById('data')
const fixo = document.getElementById('tel_fixo')
const RG = document.getElementById('rg')
const CEP = document.getElementById('cep')
const comple = document.getElementById('complemento')
const numero = document.getElementById('numero')
const logra = document.getElementById('logradouro')
const ALTURA = document.getElementById('altura')
const PESO = document.getElementById('peso')
const RUA = document.getElementById('rua')
const BAIRRO = document.getElementById('bairro')
const CIDADE = document.getElementById('cidade')
const ESTADO = document.getElementById('estado')



form.addEventListener('submit', (e) => {
    e.preventDefault()

    let status = validate();
    if (status) {
        e.target.submit();
    }
})

$("#telefone").mask("(99) 99999-9999");
$("#tel_fixo").mask("(99) 9999-9999");
$("#rg").mask("99.999.999-9");
$("#cep").mask("99999-999");
$("#altura").mask("9,99");
$("#peso").mask("99,99");

function errorValidation(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small')

    small.innerText = message

    formControl.className = 'form-control error'
}

function successValidation(input) {
    const formControl = input.parentElement;

    formControl.className = 'form-control success'
}

function validate() {
    if (nameValidator() && RGValidator() && emailValidator() && 
        fixoValidator() && phoneValidator() && alturaValidator()
        && pesoValidator() && dateValidator() && lograValidator() && cepValidator() && ruaValidator()
        && numeroresValidator() && complementoValidator() && bairroValidator() && cidadeValidator() && estadoValidator()) {

            return true;
    } else {
        return false;
    }
}

function nameValidator() {
    let nameValue = nam.value.trim()
    if (nameValue === '') {
        errorValidation(nam, 'Preencha esse campo')
        return false
    }
    else if (nameValue.length < 3) {

        errorValidation(nam, 'O nome tem que ter mais de 2 caracteres')
        return false
    }
    else {
        successValidation(nam)
        return true
    }
}

function emailValidator() {
    let emailPattern = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/
    const isValidEmail = emailPattern.test(email.value)

    if (!isValidEmail) {
        errorValidation(email, 'Campo incorreto')
        return false
    } else {
        successValidation(email)
        return true
    }
}

function RGValidator() {
    let rgValue = RG.value.trim()
    if (rgValue === '') {
        errorValidation(RG, 'Preencha esse campo')
        return false
    } else if (rgValue.length < 12 || rgValue.length > 12) {
        errorValidation(RG, 'Digite um RG válido')
        return false
    } else {
        successValidation(RG)
        return true
    }
}

function phoneValidator() {
    let phoneValue = cell.value.trim()
    if (phoneValue === '') {
        errorValidation(cell, 'Preencha esse campo')
        return false
    } else if (phoneValue.length < 15 || phoneValue.length > 15) {
        errorValidation(cell, 'Digite um número válido')
        return false
    }
    else {
        successValidation(cell)
        return true
    }
}

function fixoValidator() {
    let fixoValue = fixo.value.trim()
    if (fixoValue === '') {
        errorValidation(fixo, 'Preencha esse campo')
        return false
    } else if (fixoValue.length < 14 || fixoValue.length > 14) {
        errorValidation(fixo, 'Digite um número válido')
        return false
    }
    else {
        successValidation(fixo)
        return true
    }
}

function dateValidator() {
    let dateValue = data.value
    if (dateValue === '') {
        errorValidation(data, 'Preencha esse campo')
        return false
    } else {
        successValidation(data)
        return true
    }
}

function bairroValidator() {
    let bairroValue = BAIRRO.value
    if (bairroValue === '') {
        errorValidation(BAIRRO, 'Preencha esse campo')
        return false
    } else if (bairroValue.length > 45) {
        errorValidation(BAIRRO, 'Máximo de 45 caracteres')
        return false
    }
    else {
        successValidation(BAIRRO)
        return true
    }
}

function cidadeValidator() {
    let cidadeValue = CIDADE.value
    if (cidadeValue === '') {
        errorValidation(CIDADE, 'Preencha esse campo')
        return false
    } else if (cidadeValue.length > 45) {
        errorValidation(CIDADE, 'Máximo de 45 caracteres')
        return false
    } else {
        successValidation(CIDADE)
        return true
    }
}

function estadoValidator() {
    let estadoValue = ESTADO.value
    if (estadoValue === '') {
        errorValidation(ESTADO, 'Preencha esse campo')
        return false
    } else if (estadoValue.length > 45) {
        errorValidation(ESTADO, 'Máximo de 45 caracteres')
        return false
    } else {
        successValidation(ESTADO)
        return true
    }
}

function complementoValidator() {
    let complementoValue = comple.value.trim()
    if (complementoValue === '') {
        errorValidation(comple, 'Preencha esse campo')
        return false
    } else if (complementoValue.length < 5) {
        errorValidation(comple, 'Máximo 45 caracteres e mínimo de 5')
        return false
    } else if (complementoValue.length > 45) {
        errorValidation(comple, 'Máximo 45 caracteres e mínimo de 5')
        return false
    }
    else {
        successValidation(comple)
        return true
    }
}

function numeroresValidator() {
    let numeroValue = numero.value.trim()
    if (numeroValue === '') {
        errorValidation(numero, 'Preencha esse campo')
        return false
    } else {
        successValidation(numero)
        return true
    }
}

function lograValidator() {
    let lograValue = logra.value
    if (lograValue === '') {
        errorValidation(logra, 'Preencha esse campo')
        return false
    } else if (lograValue.length > 10) {
        errorValidation(logra, 'Máximo de 10 caracteres')
        return false
    }
    else {
        successValidation(logra)
        return true
    }
}

function alturaValidator() {
    let alturaValue = ALTURA.value
    if (alturaValue === '') {
        errorValidation(ALTURA, 'Preencha esse campo')
        return false
    } else {
        successValidation(ALTURA)
        return true
    }
}

function pesoValidator() {
    let pesoValue = PESO.value
    if (pesoValue === '') {
        errorValidation(PESO, 'Preencha esse campo')
        return false
    } else {
        successValidation(PESO)
        return true
    }
}

function cepValidator() {
    let cepValue = CEP.value
    if (cepValue === '') {
        errorValidation(CEP, 'Infome o CEP')
        return false
    } else if (cepValue.length < 8) {
        errorValidation(CEP, 'Deve conter 8 dígitos')
        return false
    } else {
        successValidation(CEP)
        return true
    }
}

function ruaValidator() {
    let ruaValue = RUA.value
    if (ruaValue === '') {
        errorValidation(RUA, 'Preencha esse campo')
        return false
    } else {
        successValidation(RUA)
        return true
    }
}

function buscaCEP() {
    let cepValue = CEP.value
    if (cepValue !== '') {
        let url = "https://brasilapi.com.br/api/cep/v1/" + cepValue;

        let req = new XMLHttpRequest();
        req.open("GET", url);
        req.send();

        req.onload = function () {
            if (req.status === 200) {
                let endereco = JSON.parse(req.response);
                document.getElementById('cep').value = endereco.cep;
                document.getElementById('bairro').value = endereco.neighborhood;
                document.getElementById('cidade').value = endereco.city;
                document.getElementById('estado').value = endereco.state;
                document.getElementById('rua').value = endereco.street;
            } else if (req.status === 404) {

                return false

            } else {
                return true
            }
        }
    }
}

window.onload = function () {
    let cepValue = document.getElementById('cep');
    cepValue.addEventListener("blur", buscaCEP);
}