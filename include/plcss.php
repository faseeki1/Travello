<style>
	.anim{
	
	letter-spacing: 2px;
}
.anim>span{
	color: rgba(0,0,0,0.2);
}
.anim2{
	animation-name: a2change;
	animation-duration: 1s;
	animation-iteration-count: infinite;
}
.anim span:nth-child(1){
	animation-name: schange;
	animation-duration: 1s;
	animation-iteration-count: infinite;
}
.anim span:nth-child(2){
	animation-name: wchange;
	animation-duration: 1s;
	animation-iteration-count: infinite;
}
.anim span:nth-child(3){
	animation-name: achange;
	animation-duration: 1s;
	animation-iteration-count: infinite;
}
.anim span:nth-child(4){
	animation-name: nchange;
	animation-duration: 1s;
	animation-iteration-count: infinite;
}
.anim span:nth-child(5){
	animation-name: kchange;
	animation-duration: 1s;
	animation-iteration-count: infinite;
}
.anim span:nth-child(6){
	animation-name: ychange;
	animation-duration: 1s;
	animation-iteration-count: infinite;
}
@keyframes schange{
	0%{
		color: rgba(198,140,25,1);
	}
	16.6%{
		color: rgba(0,0,0,0.2);
	}
	100%{
		color: rgba(0,0,0,0.2);
	}
}
@keyframes a2change{
	0%{
		color: rgba(0,0,0,0.2);
	}
	50%{
		color: rgba(198,140,25,1);
	}
	100%{
		color: rgba(0,0,0,0.2);
	}
}
@keyframes achange{
	0%{
		color: rgba(0,0,0,0.2);
	}
	32.26%{
		color: rgba(198,140,25,1);
	}
	49.86%{
		color: rgba(0,0,0,0.2);
	}
	100%{
		color: rgba(0,0,0,0.2);
	}
}
@keyframes nchange{
	0%{
		color: rgba(0,0,0,0.2);
	}
	49.86%{
		color: rgba(198,140,25,1);
	}
	66.47%{
		color: rgba(0,0,0,0.2);
	}
	100%{
		color: rgba(0,0,0,0.2);
	}
}
@keyframes kchange{
	0%{
		color: rgba(0,0,0,0.2);
	}
	66.47%{
		color: rgba(198,140,25,1);
	}
	83.06%{
		color: rgba(0,0,0,0.2);
	}
	100%{
		color: rgba(0,0,0,0.2);
	}
}
@keyframes ychange{
	0%{
		color: rgba(0,0,0,0.2);
	}
	83.06%{
		color: rgba(198,140,25,1);
	}
	100%{
		color: rgba(0,0,0,0.2);
	}
}
@keyframes wchange{
	0%{
		color: rgba(0,0,0,0.2);
	}
	16.6%{
		color: rgba(198,140,25,1);
	}
	32.26%{
		color: rgba(0,0,0,0.2);
	}
	100%{
		color: rgba(0,0,0,0.2);
	}
}
.anim2{
	color: rgba(198,140,25,1);
	letter-spacing: 2px;
}
.txt-cont{
	margin: 20% 40% 0 40%;
}
.preloader{
	position:absolute;
	color: white;
    background:#333;
    z-index: 900;
	height: 100%;
	width: 100%;
}
</style>
</head>
<body>


<div class="preloader" id="preloader" style="">
	<div class="txt-cont text-center">
		<h1 class="anim"><span>S</span><span>W</span><span>A</span><span>N</span><span>K</span><span>Y</span></h1>
	<h2 class="anim2">TECHNOLOGIES</h2>
	</div>
	
</div>