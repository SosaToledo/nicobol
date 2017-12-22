<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<meta name="authoring-tool" content="Adobe_Animate_CC">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Nicobol</title>

<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="nicobol.js?1513110305079"></script>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script>
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	var comp=AdobeAn.getComposition("C9B2645886D473478DE81CE539B9ABBE");
	var lib=comp.getLibrary();
	var loader = new createjs.LoadQueue(false);
	loader.addEventListener("fileload", function(evt){handleFileLoad(evt,comp)});
	loader.addEventListener("complete", function(evt){handleComplete(evt,comp)});
	var lib=comp.getLibrary();
	loader.loadManifest(lib.properties.manifest);
}
function handleFileLoad(evt, comp) {
	var images=comp.getImages();
	if (evt && (evt.item.type == "image")) { images[evt.item.id] = evt.result; }
}
function handleComplete(evt,comp) {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	var lib=comp.getLibrary();
	var ss=comp.getSpriteSheet();
	var queue = evt.target;
	var ssMetadata = lib.ssMetadata;
	for(i=0; i<ssMetadata.length; i++) {
		ss[ssMetadata[i].name] = new createjs.SpriteSheet( {"images": [queue.getResult(ssMetadata[i].name)], "frames": ssMetadata[i].frames} )
	}
	exportRoot = new lib.nicobol();
	stage = new lib.Stage(canvas);
	stage.addChild(exportRoot);
	//Registers the "tick" event listener.
	fnStartAnimation = function() {
		createjs.Ticker.setFPS(lib.properties.fps);
		createjs.Ticker.addEventListener("tick", stage);
	}
	//Code to support hidpi screens and responsive scaling.
	function makeResponsive(isResp, respDim, isScale, scaleType) {
		var lastW, lastH, lastS=1;
		window.addEventListener('resize', resizeCanvas);
		resizeCanvas();
		function resizeCanvas() {
			var w = lib.properties.width, h = lib.properties.height;
			var iw = window.innerWidth, ih=window.innerHeight;
			var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;
			if(isResp) {
				if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {
					sRatio = lastS;
				}
				else if(!isScale) {
					if(iw<w || ih<h)
						sRatio = Math.min(xRatio, yRatio);
				}
				else if(scaleType==1) {
					sRatio = Math.min(xRatio, yRatio);
				}
				else if(scaleType==2) {
					sRatio = Math.max(xRatio, yRatio);
				}
			}
			canvas.width = w*pRatio*sRatio;
			canvas.height = h*pRatio*sRatio;
			canvas.style.width = dom_overlay_container.style.width = anim_container.style.width =  w*sRatio+'px';
			canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = h*sRatio+'px';
			stage.scaleX = pRatio*sRatio;
			stage.scaleY = pRatio*sRatio;
			lastW = iw; lastH = ih; lastS = sRatio;
		}
	}
	makeResponsive(true,'both',false,1);
	AdobeAn.compositionLoaded(lib.properties.id);
	fnStartAnimation();
}
</script>
<!-- write your code here -->
<link rel="shortcut icon" type="image/x-icon" href="cerebroSolo.png">
</head>
	<style>
	@media screen and (max-width: 450px) {
			.cajita{
				width: 100%;
				flex-wrap: wrap;
				justify-content: center;
			}
			.pie{
				font-size: 1.3em;

			}
			.logo{
				width: 50px !important;
				height: 35px !important;
				display: block
			}
			#animation_container{width: 90% !important;}
			#canvas{width: 90% !important;top: 100px;}
			#dom_overlay_container{width: 90% !important;}
		}
</style>
<style>
	body{box-sizing: border-box; width: 90%;}
	.cajita{margin-top: 50px;float:right;display: flex;align-items: center;z-index: 999;}
	.pie{font-family: Lato, sans-serif;color: white;text-decoration: none;margin: 0 3px;}
	.logo{width:80px;height:60px;margin: 0 5px;}
	#animation_container{margin:auto;width: 70% !important;}
	#canvas{width: 70% !important}
	#dom_overlay_container{width: 70% !important;pointer-events:none; overflow:hidden; position: absolute; left: 0px; top: 0px;}
</style>
<body onload="init();" style="margin:0px;background-color:#212529;">
	<div class="cajita">
		<h2 class="pie">Sitio en desarrollo por  </h2>
		<a href="http://thinkincode.com.ar" style="text-decoration:none"><h2 class="pie"> Thinco</h2></a>
		<img class="logo" src="cerebroSolo.png" alt="LogoThinco">
	</div>
	<div id="animation_container" >
		<canvas id="canvas" width="1024" height="745" style="position: absolute; display: block;"></canvas>
		<div id="dom_overlay_container">
		</div>
	</div>
</body>
</html>
