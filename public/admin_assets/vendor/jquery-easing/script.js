let valueDisplays = document.querySelectorAll('.num');
let interval = 6000;

valueDisplays.forEach((valueDisplay) => {
    let startValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute("data-val"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function () {
        startValue += 1;
        valueDisplay.textContent = startValue;
        if (startValue === endValue) {
            clearInterval(counter);
        }
    }, duration);
});
function goToHomepage() {
    // Redirect to the homepage (index.html)
    window.location.href = 'index.html';
}