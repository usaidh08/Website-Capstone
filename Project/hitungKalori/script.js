function calculateCalories() {
    var age = document.getElementById('age').value;
    var gender = document.getElementById('gender').value;

    fetch('api.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ age: age, gender: gender }),
    })
    .then(response => response.json())
    .then(data => {
        var resultElement = document.getElementById('result');
        resultElement.innerHTML = 'Total Kalori: ' + data.totalCalories;
    })
    .catch(error => console.error('Error:', error));
}
