// const poolbutton = document.querySelectorAll('.button');
// const elements = document.querySelectorAll('.element');

// buttons.forEach(function(button, index) {
//   button.addEventListener('click', function() {
//     // Remove the 'visible' class from all elements
//     elements.forEach(function(element) {
//       element.classList.remove('visible');
//     });

//     // Add the 'visible' class to the corresponding element with the same index
//     elements[index].classList.add('visible');
//   });
// });



// const teams = {}

// teams.elements = {}
// teams.elements.teamsSection = document.querySelector('.o-teams')
// teams.elements.teams = teams.elements.teamsSection.querySelector('.js-teams')
// teams.elements.team = teams.elements.teams.querySelector('.js-team')
// teams.elements.poolButton = teams.elements.teamsSection.querySelectorAll('.js-pool')
 

const poolButtons = document.querySelectorAll('.pool-button')

for( const poolButton of poolButtons)
{
    poolButton.addEventListener('click', (event) => 
    {
        event.preventDefault()
        poolButton.style.color = "red"
        // Remove the 'visible' class from all elements
        // teams.elements.team.forEach(function(team) {
        //   team.classList.remove('visible');
        //   team.style.color = "red"

        console.log(poolButton)
        // });
        // elements[index].classList.add('visible');
        // const index = teams.elements.poolButton.indexOf(poolButton)
        
    })
}
// console.log(teams.elements.poolButton)
// buttons.forEach(function(button, index) {
//   button.addEventListener('click', function() {
//     // Remove the 'visible' class from all elements
//     elements.forEach(function(element) {
//       element.classList.remove('visible');
//     });