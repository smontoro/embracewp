// Get the modal
var modal1 = document.getElementById('myModal1');
var modal2 = document.getElementById('myModal2');
var modal3 = document.getElementById('myModal3');

// Get the button that opens the modal
var speaker1 = document.getElementById("speaker1");
var speaker2 = document.getElementById("speaker2");
var speaker3 = document.getElementById("speaker3");

//Get modal class
var modal = document.getElementsByClassName("modal")

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];


// When the user clicks the button, open the modal 
speaker1.onclick = function() {
    modal1.style.display = "block";
}
speaker2.onclick = function() {
    modal2.style.display = "block";
}
speaker3.onclick = function() {
    modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal1.style.display = "none"; 
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1 ) {
        modal1.style.display = "none";
    } else if (event.target == modal2 ) {
        modal2.style.display = "none";
    } else if (event.target == modal3 ) {
        modal3.style.display = "none";
    } 
}
