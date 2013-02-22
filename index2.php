
 
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta charset="utf-8">
<head>
 <script src="<? echo base_url(); ?>js/popcorn.js"></script>
 <script src="<? echo base_url(); ?>js/modules/parser/popcorn.parser.js"></script>
 <script src="<? echo base_url(); ?>js/plugins/subtitle/popcorn.subtitle.js"></script>  
 <script src="<? echo base_url(); ?>js/parsers/parserSRT/popcorn.parserSRT.js"></script>

    <script>
      document.addEventListener( "DOMContentLoaded", function () {
        var p = Popcorn( "#video" )
        .parseSRT("<? echo base_url(); ?>sound/david.srt" )
	.volume( 10 )
        .play();
      }, false);
    </script>
  </head>
  <body>
  
    <div>
      <video id="video"
        controls
        width="250px"
        poster="http://tuxpaint.org/stamps/stamps/animals/birds/cartoon/tux.png">
   
        <source id="ogv"
          src="<? echo base_url(); ?>sound/bbb400p.ogv"
          type='video/ogg; codecs="theora, vorbis"'>

        <p>Your user agent does not support the HTML5 Video element.</p>

      </video>
    </div>

   