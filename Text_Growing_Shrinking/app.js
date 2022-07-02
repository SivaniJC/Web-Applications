var interval_1 = setInterval(inTimer, 1000);
var font_size = 5;
var p_id = document.getElementById("size");
var interval_2;

function inTimer() {
    p_id.innerHTML = 'TEXT GROWING';
    p_id.setAttribute("style", "font-size: " + font_size + "px; color:red");
    font_size += 5;
    if (font_size >= 50) {
        clearInterval(interval_1);
        interval_2 = setInterval(deTimer, 1000);
    }
}

function deTimer() {
    font_size -= 5;
    p_id.innerHTML = "TEXT SHRINK";
    p_id.setAttribute("style", "font-size: " + font_size + "px; color:blue");
    if (font_size === 5) {
        clearInterval(interval_2);
        interval_1 = setInterval(inTimer, 1000);
    }
}