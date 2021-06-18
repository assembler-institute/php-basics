
let mainContainer = document.querySelectorAll(".main__container h3");
let myButtons = document.querySelectorAll("#nav__aside li button");

let myNumber = 0;
let myNavNumber = 0;
mainContainer.forEach((e)=>{
	e.setAttribute("id",`section-${myNumber}`);
	myNumber ++;
});

myButtons.forEach((e)=>{
	e.setAttribute("id",myNavNumber);
	e.addEventListener("click", focusOnClick);
	myNavNumber ++;
});

function focusOnClick(){
	let targetId = event.target.id;
	let sectionToScroll = document.getElementById(`section-${targetId}`);

	console.log(targetId);
	sectionToScroll.scrollIntoView({ block:"start", behavior: "smooth" });
}