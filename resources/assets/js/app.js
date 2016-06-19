var roll = document.getElementById('roll_char');
var rollValues = document.getElementById('roll_values');
var ws_values = document.querySelectorAll('[data-roll-target="WS"]');
var ws = document.getElementById('WS');
var values = {
    ws: 0
};

roll.addEventListener('click', function(e) {
    e.preventDefault();
    ws.value = 0;
    values.ws = 0;
    for (var i = 0; i < ws_values.length; i++) {
        if (ws_values[i].name == "roll") {
            ws_values[i].value = Math.floor(Math.random() * (10 - 2 + 1)) + 2;
        } else if (ws_values[i].name == "base") {
            ws_values[i].value = 20;
        }
        values.ws += parseInt(ws_values[i].value);
    }
    ws.value = values.ws;
});
