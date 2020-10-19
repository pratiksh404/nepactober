var r=255,g=0,b=0;

function setup(){
	createCanvas(400,600);
	angleMode(DEGREES);
}


function draw(){
	background(51);
	translate(width/2,height/2);
	rotate(-90);

	getTime();

	getDay();
}

function getTime(){
	let hr = hour();
	let min = minute();
	let sec = second();

	stroke(173,222,0);
	strokeWeight(7);
	noFill();
	let s =  map(sec,0,60,0,360);
	arc(0,0,300,300,0,s);


	stroke(125,177,223);
	let m =  map(min,0,60,0,360);
	arc(0,0,280,280,0,m);


	stroke(244,37,67);
	let h =  map(hr%12,0,12,0,360);
	arc(0,0,260,260,0,h);	

	push();
	rotate(s);
	stroke(173,222,0);
	line(0,0,100,0);
	pop();

	push();
	rotate(m);
	stroke(125,177,223);
	line(0,0,80,0);
	pop();

	push();
	rotate(h);
	stroke(244,37,67);
	line(0,0,60,0);
	pop();

	stroke(53,0,56);
	point(0,0);
	

	push();
	rotate(90);
	noStroke();
	
	fill(255);
	textSize(40);
	textAlign(CENTER);
	textFont("Pacifico");
	let c = map(mouseX,0,400,0,255);
	let v = map(mouseY,0,600,0,255);
	fill(c,c-v,v);
	text(nf(hr%12,2)+":"+nf(min,2)+":"+nf(sec,2),0,200);
	pop();
}


		


function getDay(){

	let d = day();
		rotate(90);
		
		  if(r > 0 && b == 0){
		    r--;
		    g++;
		  }
		  if(g > 0 && r == 0){
		    g--;
		    b++;
		  }
		  if(b > 0 && g == 0){
		    r++;
		    b--;
		  }
		
		noStroke();
		fill(r,g,b);
		textSize(30);
		textAlign(CENTER);
		textFont("Pacifico");

		switch(d){
			case 0:
			text("Sunday",0,240);
			break;	
			case 1:
			text("Monday",0,240);
			break;	
			case 2:
			text("Tuesday",0,240);
			break;	
			case 3:
			text("Wednesday",0,240);
			break;	
			case 4:
			text("Thursday",0,240);
			break;	
			case 5:
			text("Friday",0,240);
			break;	
			case 6:
			text("Saturday",0,240);
			break;	
		}
		
	
}