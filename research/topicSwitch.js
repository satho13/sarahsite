function topicSwitch(topic) {
	tdBody=document.getElementById(topic);
	tdArrow=document.getElementById(topic.concat("Arrow"));
	if (tdBody.style.display=="table-row") {
		tdBody.style.display="none";
		tdArrow.src="images/arrow down.png";
	} else if (tdBody.style.display=="none") {
		tdBody.style.display="table-row";
		tdArrow.src="images/arrow up.png";
	}

}	