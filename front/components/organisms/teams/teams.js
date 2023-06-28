// // Get the form element
// const poolsForm = document.getElementById('pools-form');

// // Add a submit event listener to the form
// poolsForm.addEventListener('submit', function(event) {
//     event.preventDefault(); // Prevent form submission

//     // Create a new FormData object and append form data to it
//     var poolsData = new FormData(poolsForm);
        
//     // Create an XMLHttpRequest object
//     var xhttp = new XMLHttpRequest();

//     // Configure the request
//     xhttp.onreadystatechange = function() {
//         if (this.readyState === 4 && this.status === 200) {
//             // Display the response
//             document.getElementById('result').innerHTML = this.responseText;
//         }
//     };
//     xhttp.open('POST', 'teams.php', true);

//     // Send the request with form data
//     xhttp.send(poolsData);
// });

function traiterSelection() {
    const selectElement = document.getElementById('pools');
    const selectedValue = selectElement.value;

    fetch('./front/components/organisms/teams/teams.php.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'selectedValue=' + encodeURIComponent(selectedValue)
      })
      .then(response => response.text())
      .then(data => {
        console.log(data);
      });

    // const xhr = new XMLHttpRequest();

    // xhr.open('POST', './front/components/organisms/teams/teams.php', true);
    // xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    // xhr.onreadystatechange = function() {
    //   if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
    //     // console.log(xhr.responseText);
    //   }
    // };
    // xhr.send('selectedValue=' + encodeURIComponent(selectedValue));

    console.log(selectElement.value)
}
  