function writerTransition(element) {
    const arr = element.innerHTML.split('');
    element.innerHTML = '';
    arr.forEach((letter, i) => {
        setTimeout(() => element.innerHTML += letter, 60 * i)
    });
}
const title = document.querySelector('.title_cont_offer');
writerTransition(title)
