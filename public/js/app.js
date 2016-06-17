var roll = document.getElementById('roll_char');
var rollValues = document.getElementById('roll_values');

roll.addEventListener('click', function(e) {
    e.preventDefault();
    roll1 = Math.floor(Math.random() * (10 - 2 + 1)) + 2;
    roll2 = Math.floor(Math.random() * (10 - 2 + 1)) + 2;
    random = roll1 + roll2;
    alert(roll1 + " + " + roll2 + " = " + random);
});
