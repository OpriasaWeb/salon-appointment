
// TIME controls


// TIME controls

// DATE controls
var currentDate = new Date();

var formattedCurrentDate = currentDate.toISOString().substring(0, 10);

var dateInput = document.getElementById("date_input");

dateInput.addEventListener("change", () => {
  var selectedDate = dateInput.value;

  var formattedSelectedDate = new Date(selectedDate).toISOString().substring(0, 10);

  if(formattedSelectedDate < formattedCurrentDate){
    // dateInput.disabled = true;
    alert("Sorry, you cannot book past dates.");
    dateInput.value = formattedCurrentDate;
  }
})
// DATE controls