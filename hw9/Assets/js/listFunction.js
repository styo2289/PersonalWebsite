// JavaScript Document

var elList, addLink, newEl, newText, counter, listItems, itemName/*, removeLink*/;
elList = document.getElementById("list");
addLink = document.getElementById("addToList");
counter = document.getElementById("counter");

//removeLink needs to find the elementId to see what item needs to be removed so then it can have the
//event listener. figure out how mouse interaction works with javascript


function addItem(e){
	e.preventDefault();
	itemName = document.getElementById("itemInput").value;
	newEl = document.createElement('div');
	//setAttribute can be added to the element to give it an ID " g.setAttribute("id", "idName") "
	newText = document.createTextNode(itemName);
	newEl.classList.add('alert');
	newEl.classList.add('alert-info');
	newEl.appendChild(newText);
	elList.appendChild(newEl);
}

/*function removeItem(e){
	e.preventDefault();
	//remove the element entirely?
	
}*/

function updateCounter(){
	listItems = elList.getElementsByTagName('div').length;
	counter.innerHTML = listItems;
}

addLink.addEventListener('click', addItem, false);
//removeLink.addEventListener('click', removeItem, false);
elList.addEventListener('DOMNodeInserted', updateCounter, false)