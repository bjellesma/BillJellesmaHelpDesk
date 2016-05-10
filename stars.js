function starfill(){
  var starsBG = document.getElementById("starsBG");
  var starsBGctx = starsBG.getContext("2d");
  var pic = new Image();
  pic.src = "images/"
  var length = 5;
  var stars = 6;
  var start_x = 30;
  var start_y = 30;
  starsBGctx.fillStyle = "DeepSkyBlue";
  // make a point, 5 times
  // move into the middle of the canvas, just to make room
  for(var s = 0; s< stars; s++){
    starsBGctx.translate(start_x, start_y);
    for (var i = 5; i--;) {
        // draw line up
        starsBGctx.lineTo(0, length);
        // move origin to current same location as pen
        starsBGctx.translate(0, length);
        // rotate the drawing board
        starsBGctx.rotate((Math.PI * 2 / 10));
        // draw line down
        starsBGctx.lineTo(0, -length);
        // again, move origin to pen...
        starsBGctx.translate(0, -length);
        // ...and rotate, ready for next arm
        starsBGctx.rotate(-(Math.PI * 6 / 10));
    }
    // last line to connect things up
    starsBGctx.lineTo(0, length);
    starsBGctx.closePath();
    // stroke the path, you could also .fill()
    starsBGctx.stroke();
    starsBGctx.translate(0, 0)
    start_x = start_x + 20;
  }

}
