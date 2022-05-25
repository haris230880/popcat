var point = 0;
var pic = 0;

function pop() {
    point = point + 1;
    changePic();
    document.getElementById("point").innerHTML = point
}

function changePic() {
    if (pic == 0) {
        pic = 1;
        document.getElementById("pic").style.backgroundImage = "url('/web/image/p.1e9d00be.png ')";
        time();
    }
    else {
        pic = 0;
        document.getElementById("pic").style.backgroundImage = "url('/web/image/op.353767c3.png')";
    }
}

function time() {
    var check = true;
    let start = Date.now();

    setInterval(function () {
        if (check) {
            let diff = Math.floor((Date.now() - start) / 10);
            console.log(diff);

            if (diff == 10){
                check = false;
                changePic();
            }
        }
    }, 10);
}