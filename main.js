// FUNCTION FOR GET ELEMENT BY ID
_ = (element) => {
    return (document.getElementById(element));
}
// TOGGLE NAVIGATION BAR
toggleNavigation = (navMenu, id) => {
    if (_(navMenu).classList.contains('active')) {
        _(navMenu).classList.remove('active');
        _(id).classList.replace('fa-close', 'fa-bars');
    } else {
        _(navMenu).classList.add('active');
        _(id).classList.replace('fa-bars', 'fa-close');
    }
}


// COUNTER
loadCounts = () => {
    let numbers = document.querySelectorAll('.count-number');

    numbers.forEach(number => {
        let startVal = 0;
        let endVal = number.getAttribute('end-value')
        let interval = 1000 / (endVal / 4);
        let countUp = Math.floor(endVal / 12);
        let counter = setInterval(() => {
            startVal = startVal + countUp;
            number.innerHTML = startVal + 1;
            if (endVal <= startVal) {
                clearInterval(counter);
            }
        }, interval);

    })
}

loadCounts();