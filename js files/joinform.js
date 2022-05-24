document.querySelector('input').addEventListener('keydown', function(evt) {
    var $this = document.querySelector(this),
        size = parseInt($this.attr('size'));

    if ( evt.which === 8 ) {
        // backspace
        $this.attr('size', size - 1);
    } else {
        // all other keystrokes
        $this.attr('size', size + 1);
    }
});