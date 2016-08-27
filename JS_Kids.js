/*  
Henrique Teixeira de Oliveira
Pontifícia Universidade Católica do Rio de Janeiro
University of Southern California
E-mail: henriquetcro@gmail.com
+55(21)981430609
Rio de Janeiro, Brazil 
*/

//Function: navIcon()
//Purpose: It is responsible to show the menu list when the button is clicked.
//Parameters: None
//Returns: Nothing
function navIcon() {
    var nav = document.getElementById("myTopnav");  // Get the id of the navegation bar
    // The button click will change the status of the bar.
    if (nav.className === "topnav") {       //If the options are hidden
        nav.className += " responsive";     // It will show all the options as a vertical list
    }   
    else {      //If the options are not hidden
            nav.className = "topnav";   // It will hide all the options
    }
}
