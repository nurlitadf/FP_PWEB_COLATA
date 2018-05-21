document.getElementById("addboard").click(function {
	const title = document.getElementById("createboardmodallabel").value;
	const color = document.getElementById("background").value;
	route('adds'/title/color);
})