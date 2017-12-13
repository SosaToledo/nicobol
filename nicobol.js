(function (cjs, an) {

var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
lib.ssMetadata = [
		{name:"nicobol_atlas_", frames: [[0,1026,512,512],[514,1026,512,512],[0,0,1024,1024]]}
];


// symbols:



(lib.beachball = function() {
	this.spriteSheet = ss["nicobol_atlas_"];
	this.gotoAndStop(0);
}).prototype = p = new cjs.Sprite();



(lib.explosion1 = function() {
	this.spriteSheet = ss["nicobol_atlas_"];
	this.gotoAndStop(1);
}).prototype = p = new cjs.Sprite();



(lib.logo = function() {
	this.spriteSheet = ss["nicobol_atlas_"];
	this.gotoAndStop(2);
}).prototype = p = new cjs.Sprite();
// helper functions:

function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(lib.Symbol2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.logo();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.171,0.171);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol2, new cjs.Rectangle(0,0,175.4,175.4), null);


(lib.Symbol1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.explosion1();
	this.instance.parent = this;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol1, new cjs.Rectangle(0,0,512,512), null);


(lib.pelota = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.beachball();
	this.instance.parent = this;
	this.instance.setTransform(0,0,0.125,0.125);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = getMCSymbolPrototype(lib.pelota, new cjs.Rectangle(0,0,63.9,63.9), null);


// stage content:
(lib.nicobol = function(mode,startPosition,loop) {
if (loop == null) { loop = false; }	this.initialize(mode,startPosition,loop,{});

	// Layer 6
	this.instance = new lib.Symbol2();
	this.instance.parent = this;
	this.instance.setTransform(519.2,569.4,0.929,0.929,0,0,0,87.7,87.6);
	this.instance.alpha = 0;
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(84).to({_off:false},0).wait(1).to({regY:87.7,scaleX:1.11,scaleY:1.11,x:519.1,y:569.5,alpha:0.167},0).wait(1).to({scaleX:1.3,scaleY:1.3,x:519.2,alpha:0.333},0).wait(1).to({scaleX:1.48,scaleY:1.48,alpha:0.5},0).wait(1).to({scaleX:1.66,scaleY:1.66,alpha:0.667},0).wait(1).to({scaleX:1.85,scaleY:1.85,y:569.6,alpha:0.833},0).wait(1).to({scaleX:2.03,scaleY:2.03,alpha:1},0).wait(1).to({scaleX:2.21,scaleY:2.21},0).wait(1).to({scaleX:2.4,scaleY:2.4},0).wait(1).to({scaleX:2.58,scaleY:2.58},0).wait(1).to({scaleX:2.76,scaleY:2.76},0).wait(1).to({scaleX:2.95,scaleY:2.95,x:519.3,y:569.7},0).wait(1).to({scaleX:3.13,scaleY:3.13},0).wait(1).to({scaleX:3.31,scaleY:3.31},0).wait(1).to({scaleX:3.49,scaleY:3.49},0).wait(1).to({scaleX:3.68,scaleY:3.68},0).wait(1).to({scaleX:3.86,scaleY:3.86},0).wait(1).to({scaleX:4.04,scaleY:4.04,y:569.8},0).wait(1).to({scaleX:4.23,scaleY:4.23},0).wait(1).to({scaleX:4.41,scaleY:4.41},0).wait(1).to({scaleX:4.59,scaleY:4.59},0).wait(1).to({scaleX:4.78,scaleY:4.78},0).wait(1).to({scaleX:4.96,scaleY:4.96},0).wait(1).to({scaleX:5.14,scaleY:5.14,x:519.4,y:569.9},0).wait(1).to({scaleX:5.33,scaleY:5.33},0).wait(1).to({scaleX:5.51,scaleY:5.51},0).wait(1).to({scaleX:5.69,scaleY:5.69},0).wait(1));

	// explosion
	this.instance_1 = new lib.Symbol1();
	this.instance_1.parent = this;
	this.instance_1.setTransform(516.1,565.4,0.626,0.626,-7.3,0,0,237.7,237.1);
	this.instance_1.alpha = 0;
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(80).to({_off:false},0).wait(1).to({regX:256,regY:256,scaleX:0.69,scaleY:0.69,rotation:22.6,x:527,y:573.3,alpha:0.25},0).wait(1).to({scaleX:0.75,scaleY:0.75,rotation:52.6,x:521.7,y:567.1,alpha:0.5},0).wait(1).to({scaleX:0.81,scaleY:0.81,rotation:82.6,x:515.7,y:555.4,alpha:0.75},0).wait(1).to({scaleX:0.87,scaleY:0.87,rotation:112.7,x:511.9,y:538.3,alpha:1},0).wait(1).to({scaleX:0.87,scaleY:0.87,rotation:116,x:511.5,y:537.7},0).wait(1).to({scaleX:0.87,scaleY:0.87,rotation:119.3,x:511.2,y:537},0).wait(1).to({scaleX:0.86,scaleY:0.86,rotation:122.6,x:510.9,y:536.3},0).wait(1).to({scaleX:0.86,scaleY:0.86,rotation:126,x:510.8,y:535.7},0).wait(1).to({scaleX:0.86,scaleY:0.86,rotation:129.3,x:510.7,y:535},0).wait(1).to({scaleX:0.86,scaleY:0.86,rotation:132.6,y:534.4},0).wait(1).to({scaleX:0.85,scaleY:0.85,rotation:135.9,y:533.7},0).wait(1).to({scaleX:0.85,scaleY:0.85,rotation:139.2,x:510.9,y:533.1},0).wait(1).to({scaleX:0.85,scaleY:0.85,rotation:142.6,x:511.1,y:532.4},0).wait(1).to({scaleX:0.85,scaleY:0.85,rotation:145.9,x:511.4,y:531.8},0).wait(1).to({scaleX:0.85,scaleY:0.85,rotation:149.2,x:511.7,y:531.2},0).wait(1).to({alpha:0.8},0).wait(1).to({alpha:0.6},0).wait(1).to({alpha:0.4},0).wait(1).to({alpha:0.2},0).wait(1).to({alpha:0},0).to({_off:true},1).wait(10));

	// Pelota
	this.Pelota = new lib.pelota();
	this.Pelota.parent = this;
	this.Pelota.setTransform(515.7,556.6,1.862,1.862,0,0,0,31.9,31.9);

	this.timeline.addTween(cjs.Tween.get(this.Pelota).wait(1).to({scaleX:1.86,scaleY:1.86,rotation:4.6,x:515.6,y:392.2},0).wait(1).to({rotation:9.1,y:260.7},0).wait(1).to({rotation:13.7,x:515.7,y:161.9},0).wait(1).to({rotation:18.3,y:96.2},0).wait(1).to({scaleX:1.86,scaleY:1.86,rotation:22.8,y:63.4},0).wait(1).to({scaleX:1.86,scaleY:1.86,rotation:27.4},0).wait(1).to({scaleX:1.86,scaleY:1.86,rotation:32,y:96.2},0).wait(1).to({scaleX:1.86,scaleY:1.86,rotation:36.5,y:162},0).wait(1).to({scaleX:1.86,scaleY:1.86,rotation:41.1,x:515.8,y:260.6},0).wait(1).to({rotation:45.7,y:392.2},0).wait(1).to({rotation:50.2,y:556.6},0).wait(1).to({rotation:54.8,y:454.9},0).wait(1).to({rotation:59.3,y:393.9},0).wait(1).to({scaleX:1.86,scaleY:1.86,rotation:63.9,y:373.6},0).wait(1).to({rotation:68.5,y:393.9},0).wait(1).to({rotation:73,y:455},0).wait(1).to({scaleX:1.86,scaleY:1.86,rotation:77.6,y:556.6},0).wait(1).to({scaleX:1.86,scaleY:1.86,rotation:82.2,x:515.9,y:506.1},0).wait(1).to({rotation:86.7,y:489.3},0).wait(1).to({rotation:91.3,y:506.1},0).wait(1).to({rotation:95.9,x:515.8,y:556.6},0).wait(1).to({rotation:100.4,x:515.9,y:531.9},0).wait(1).to({scaleX:1.86,scaleY:1.86,rotation:105,x:515.8,y:556.6},0).wait(1).to({regX:31.6,x:515.7,y:556.8},0).wait(1).to({regX:31.9,x:515.6,y:557.3},0).wait(11).to({scaleX:2.15,scaleY:2.13,y:557.4},0).wait(1).to({scaleX:2.33,scaleY:2.32,x:515.5},0).wait(1).to({scaleX:2.43,scaleY:2.44,y:557.5},0).wait(1).to({scaleX:2.52,scaleY:2.54},0).wait(1).to({scaleX:2.61,scaleY:2.62},0).wait(1).to({scaleX:2.54,scaleY:2.55},0).wait(1).to({scaleX:2.47,scaleY:2.48},0).wait(1).to({scaleX:2.4,scaleY:2.41},0).wait(1).to({scaleX:2.34,scaleY:2.34,y:557.4},0).wait(2).to({scaleY:2.34},0).wait(4).to({scaleY:2.34},0).wait(3).to({scaleY:2.33,y:557.5},0).wait(1).to({y:557.4},0).wait(1).to({scaleX:2.69,scaleY:2.75,rotation:111.7,x:515.4,y:557.5},0).wait(1).to({scaleX:3.04,scaleY:3.14,rotation:118.4,x:515.3},0).wait(1).to({scaleX:3.39,scaleY:3.48,rotation:125.1,x:515.1},0).wait(1).to({scaleX:3.74,scaleY:3.79,rotation:131.8,x:514.9},0).wait(1).to({scaleX:4.09,scaleY:4.08,rotation:138.5,x:514.8,y:557.4},0).wait(1).to({scaleX:4.15,scaleY:4.08,x:514.7,y:557.5},0).wait(1).to({scaleX:4.15,scaleY:4.04,y:557.4},0).wait(1).to({scaleX:4.09,scaleY:3.96,x:514.8,y:557.5},0).wait(1).to({scaleX:3.9,scaleY:3.79},0).wait(1).to({scaleX:3.51,scaleY:3.5,x:514.9,y:557.3},0).wait(1).to({scaleX:3.51,y:557.4},0).wait(2).to({scaleX:3.51,y:557.3},0).wait(1).to({scaleX:3.51},0).wait(1).to({y:557.4},0).wait(1).to({scaleX:3.5},0).wait(1).to({scaleX:3.5,y:557.3},0).wait(1).to({y:557.4},0).wait(1).to({scaleX:3.5},0).wait(1).to({scaleX:3.5,y:557.3},0).wait(1).to({scaleX:4.55,scaleY:4.46,rotation:127.3,x:514.8,y:557.7},0).wait(1).to({scaleX:5.09,scaleY:4.97,rotation:116.2,x:514.9,y:558.1},0).wait(1).to({scaleX:5.38,scaleY:5.28,rotation:105,x:515.2,y:558.3},0).wait(1).to({scaleX:5.55,scaleY:5.48,rotation:93.9,x:515.4,y:558.5},0).wait(1).to({scaleX:5.62,scaleY:5.62,rotation:82.7,x:515.7},0).wait(1).to({scaleX:5.65,scaleY:5.6,rotation:83.7},0).wait(1).to({scaleX:5.65,scaleY:5.57,rotation:84.7,alpha:0.75},0).wait(1).to({scaleX:5.62,scaleY:5.53,rotation:85.7,alpha:0.5},0).wait(1).to({scaleX:5.54,scaleY:5.46,rotation:86.7,x:515.6,y:558.4,alpha:0.25},0).wait(1).to({scaleX:5.36,scaleY:5.35,rotation:87.7,y:558.5,alpha:0},0).to({_off:true},1).wait(26));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(968.3,869.8,119,119);
// library properties:
lib.properties = {
	id: 'C9B2645886D473478DE81CE539B9ABBE',
	width: 1024,
	height: 745,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [
		{src:"images/nicobol_atlas_.png?1513110305012", id:"nicobol_atlas_"}
	],
	preloads: []
};



// bootstrap callback support:

(lib.Stage = function(canvas) {
	createjs.Stage.call(this, canvas);
}).prototype = p = new createjs.Stage();

p.setAutoPlay = function(autoPlay) {
	this.tickEnabled = autoPlay;
}
p.play = function() { this.tickEnabled = true; this.getChildAt(0).gotoAndPlay(this.getTimelinePosition()) }
p.stop = function(ms) { if(ms) this.seek(ms); this.tickEnabled = false; }
p.seek = function(ms) { this.tickEnabled = true; this.getChildAt(0).gotoAndStop(lib.properties.fps * ms / 1000); }
p.getDuration = function() { return this.getChildAt(0).totalFrames / lib.properties.fps * 1000; }

p.getTimelinePosition = function() { return this.getChildAt(0).currentFrame / lib.properties.fps * 1000; }

an.bootcompsLoaded = an.bootcompsLoaded || [];
if(!an.bootstrapListeners) {
	an.bootstrapListeners=[];
}

an.bootstrapCallback=function(fnCallback) {
	an.bootstrapListeners.push(fnCallback);
	if(an.bootcompsLoaded.length > 0) {
		for(var i=0; i<an.bootcompsLoaded.length; ++i) {
			fnCallback(an.bootcompsLoaded[i]);
		}
	}
};

an.compositions = an.compositions || {};
an.compositions['C9B2645886D473478DE81CE539B9ABBE'] = {
	getStage: function() { return exportRoot.getStage(); },
	getLibrary: function() { return lib; },
	getSpriteSheet: function() { return ss; },
	getImages: function() { return img; }
};

an.compositionLoaded = function(id) {
	an.bootcompsLoaded.push(id);
	for(var j=0; j<an.bootstrapListeners.length; j++) {
		an.bootstrapListeners[j](id);
	}
}

an.getComposition = function(id) {
	return an.compositions[id];
}



})(createjs = createjs||{}, AdobeAn = AdobeAn||{});
var createjs, AdobeAn;