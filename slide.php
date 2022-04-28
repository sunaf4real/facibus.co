<div class="slide-div animated fadeIn">
	<div class="inner-div animated zoomIn">
    	<h2>This is Facibus:</h2>
        <h1 id="page-title">We are focused on real estate Solutions also software Publishing.</h1>
        <p>Facibus provides solutions to your business needs, with services ranging from real estate to real estate tech, health/well-being, and software publishing</p>
    </div>
</div><script type="text/javascript">
// List of sentences
var _CONTENT = [ "We are focused on real estate Solutions also software Publishing.","Property Development, Housing Tech and Software Publishing."];
// Current sentence being processed
var _PART = 0;
// Character number of the current sentence being processed 
var _PART_INDEX = 0;
// Element that holds the text
var _ELEMENT = document.querySelector("#page-title");
// Implements typing effect
function Type() { 
	var text =  _CONTENT[_PART].substring(0, _PART_INDEX + 1);
	_ELEMENT.innerHTML = text;
	_PART_INDEX++;

	// If full sentence has been displayed then start to delete the sentence after some time
	if(text === _CONTENT[_PART]) {
		clearInterval(_INTERVAL_VAL);
		setTimeout(function() {
			_INTERVAL_VAL = setInterval(Delete, 2);
		}, 5000);
	}
}
// Implements deleting effect
function Delete() {
	var text =  _CONTENT[_PART].substring(0, _PART_INDEX - 1);
	_ELEMENT.innerHTML = text;
	_PART_INDEX--;

	// If sentence has been deleted then start to display the next sentence
	if(text === '') {
		clearInterval(_INTERVAL_VAL);

		// If last sentence then display the first one, else move to the next
		if(_PART == (_CONTENT.length - 1))
			_PART = 0;
		else
			_PART++;
		_PART_INDEX = 0;

		// Start to display the next sentence after some time
		setTimeout(function() {
			_INTERVAL_VAL = setInterval(Type, 50);
		}, 100);
	}
}
// Start the typing effect on load
_INTERVAL_VAL = setInterval(Type, 50);
</script>
