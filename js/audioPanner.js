//Init AudioContext
window.audioContext = window.audioContext||window.webkitAudioContext; //fallback for older chrome browsers
var context = new AudioContext();
context.createGain = context.createGain||context.createGainNode; //fallback for gain naming
var gainL = context.createGain();
var gainR = context.createGain();

var splitter = this.context.createChannelSplitter(2);

//Connect to source
var source = context.createMediaElementSource(video);
//Connect the source to the splitter
source.connect(splitter, 0, 0);
//Connect splitter' outputs to each Gain Nodes
splitter.connect(gainL, 0);
splitter.connect(gainR, 1);

//Connect Left and Right Nodes to the output
//Assuming stereo as initial status
gainL.connect(context.destination, 0);
gainR.connect(context.destination, 0);


//Mute left channel and set the right gain to normal
function panToRight(){
    gainL.gain.value = 0;
    gainR.gain.value = 1;
}

//Mute right channel and set the left gain to normal
function panToLeft(){
    gainL.gain.value = 1;
    gainR.gain.value = 0;
}

//Restore stereo. haha, will probably never use
function panToStereo(){
    gainL.gain.value = 1;
    gainR.gain.value = 1;
}