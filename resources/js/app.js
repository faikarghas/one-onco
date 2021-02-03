require('./bootstrap');

// CONTENT FOR SPECIFIC TIME PERIOD

window.setInterval(() => {
    const d = new Date();
    const h = d.getHours()

    // pagi
    // 24-12
    // siang
    // 12-15
    // sore
    // 15-18
    // malam
    // 18-24

    if (h > 24 && h < 12) {
        console.log('pagi');
    } else if(h > 12 && h < 15) {
        console.log('siang');
    } else if(h > 15 && h < 18){
        console.log('sore');
    } else if(h > 18 && h < 24){
        console.log('malam');
    }

    console.log(h);

}, 3000);