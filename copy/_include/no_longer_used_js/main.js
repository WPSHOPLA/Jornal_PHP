function hide(id){
if (document.getElementById){
obj = document.getElementById(id);
obj.style.display = "none";
}
}

function show(id){
if (document.getElementById){
obj = document.getElementById(id);
obj.style.display = "";
}
}

function showhide(id){
if (document.getElementById){
obj = document.getElementById(id);
if (obj.style.display == "none"){
obj.style.display = "";
} else {
obj.style.display = "none";
}
}
}

