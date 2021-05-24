if (document.URL.includes("ditiseen.test/js-one")) {
    let counter = 10;
    setInterval(() => {
        document.getElementsByClassName('js-one_timer')[0].innerText = counter;
        counter--;
        if (counter == 0) location.reload();
    }, 1000);

    let counter2 = 10;
    setInterval(() => {
        document.getElementsByClassName('js-one_timer2')[0].innerText = counter2;
        counter2--;
        if (counter2 == 0) location.reload();
    }, 1000);

    let counter3 = 10;
    setInterval(() => {
        document.getElementsByClassName('js-one_timer3')[0].innerText = counter3;
        counter3--;
        if (counter3 == 0) location.reload();
    }, 1000);
}
