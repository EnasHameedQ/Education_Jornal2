/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
	document.getElementById("myNav").style.visibility = "hidden";
/*	document.getElementById("back").style.visibility="visible";*/
}

function openmyNav() {
    document.getElementById("mySidenav").style.width = "20%";
    document.getElementById("mySidenav").style.visibility = "visible";
	document.body.style.backgroundColor = "rgba(0,0,0,0.1)";
}

function closemyNav() {
/*    document.getElementById("mySidenav").style.width = "0";*/
    document.getElementById("mySidenav").style.visibility = "hidden";
    document.body.style.backgroundColor = "rgba(0,0,0,0)";

}

 function closemyqSNav(){
//    document.getElementById("mySearchnav").style.width = "0";
	document.getElementById("myqSearchnav").style.visibility = "hidden";
}

 function closemySNav(){
//    document.getElementById("mySearchnav").style.width = "0";
	document.getElementById("mySearchnav").style.display = "none";
}
