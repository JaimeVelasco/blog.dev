@extends('layouts.master')

@section('topscript')


 
<style type="text/css">

body {
  font-family: "Lato",sans-serif;
  font-style: normal;
  font-weight: 100;
  font-size: 64px ;
  margin: 0 ;
  padding: 90px ;
}

#part-1 {
  margin: 0 ;
  text-align: center ;
  width: 100% ;
}

#part-2, #part-3, #part-4 {
  margin: 0em 0 0 0 ;
  padding: 0.25em 1.5em 1em 1.5em ;
  text-align:justify;
  text-justify:trim;
}

#part-2 {
  background-color: #FFFEF0 ;
}

#part-3 {
  margin-top: 2em ;
  background-color: #DFF6FF ;
}

#part-4 {
  background-color: #DFFFF6 ;
}

#section-header {
  text-align:center ;
}

#contact {
  text-align: center ;
}

#salutations {
  margin-top: 2em ;
  font-weight: 500 ;
  text-align: center ;
  font-size: 0.8em ;
}

  #salutations img {
    margin-top: 0.75em ;
  }


.smaller {
  font-size: 0.60em ;
}

#subtext, #hello, #interested {
  font-weight: 400 ;
  line-height:0.5em;
  margin:0.2em 0 0.2em 0 ;
}

#interested {
  margin: 0.4em 0 0.4em 0 ;
}

#subtext {
  margin:0.7em 0 0.6em 0 ;
}

</style>
@stop



@section('content')




<div id="part-1">

<p id="hello">Hello</p>
<p id="subtext">Future employer!</p>





<p> 
  I'm a Web Developer<br><br>
  Lets get together and <b>build things now!</b>
</p>



<div id="part-3" style="text-align:center;">
<p id="section-header">Who am I?</p>
<hr>  

<p class="smaller">
  I'm a <b>LAMP stack developer</b><br> 

<p class="smaller">
  I was a commercial Photographer for over a decade
</p>
<p class="smaller">
  Somewhere along the way I 
  owned a restaurant and managed a custom Jewelry workshop
</p>

<p class="smaller">
I like making stuff
</p>

<p class="smaller">
I live to <b>learn new things</b>
</p>

<p class="smaller">
I'm used to take risks and welcome challenges
</p>


<p class="smaller">
I want to make products that matter
</p>

<p class="smaller">
  Detail-oriented
</p>

<p class="smaller">
  An avid tinkerer
</p>

</div>



<div id="part-4" style="text-align:center;">
<p id="section-header">&nbsp;&nbsp;What tools do I use?</p>
<hr>

  <p class="smaller">
    Open stack technologies
  </p> 

  <p class="smaller">
    PHP, Ubuntu, Apache, MySQL, HTML, CSS, JavaScript, Laravel, Node, Meteor, Github, WordPress, Bootstrap
  </p>
  
  <p class="smaller">
    Adobe Suite, Nikon and Apple products
  </p>


  <p class="smaller">
    Photoshop, Illustrator, Lightroom, Final Cut
  </p>


</div>


<div id="part-2">
<p id="section-header">What I will be doing next...</p>
<hr>
  <div id="part-2-columns"> 

    <p class="smaller">
      Programming on a daily basis and <b>learning tons of new stuff</b> along the way.<br /><br />

      Playing around <b>the convergence of software, hardware and humans</b>. Focusing in the user's emotional and behavioral reactions to my applications<br /><br />

      Developing dynamic applications that are <b>beautiful, robust, reliable and secure</b><br /><br />
     
      Making machines using <b>microcontrollers</b> and having them talk to my web applications<br /><br />

      Collaborating with <b>other people,</b> learning and sharing knowledge with as many projects and individuals as possible.<br /><br />

      I want to be able to point at the products I make, and (proudly) say <b>"I made that."</b><br /><br />
    </p>
  </div>

</div>


<div id="contact">
  <p id="interested">Interested?</p>
  <br><br>


  <p><b>[one]</b><br/>
    Check out my projects at Github <a href="https://github.com/JaimeVelasco"><i class="fa fa-github-square"></i></a></p>
   <br>
   <br>
  <p><b>[two]</b><br/>
      
    Consider whether my skills can be an asset to your project/company.</p>
    <br>
    <br>
  <p><b>[three]</b><br/>
    Let's talk, get to know eachother and maybe work together building <b>the next big thing.</b>
  </p>


</div>

<p id="salutations">
  Contact me!
<br />

  <p class="smaller" ><a href="mailto:jaime@photojv.com">jaime@photojv.com</a></p>
  <p  class="smaller">
    <a href="https://www.linkedin.com/in/jaimevelascog"><i class="fa fa-linkedin-square fa-2x" ></i></a>
  </p>


    
@stop

@section('bottomscript')


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="/assets/js/jquery.fittext.js"></script>
  <script src="/assets/js/jquery.columnizer.min.js" type="text/javascript" charset="utf-8"></script>


    <script type="text/javascript">
      $("#hello").fitText(0.25);
      $("#interested").fitText(0.55);
      $("#subtext").fitText(0.85);

  function try_columns() {
    if ($(window).width() > 1100) {
        $('#part-2-columns').columnize({columns:2}) ;
        
        var column_width = $('.first').width()-50 ;
        $('.first').css("width",column_width) ;
        $('.first').css("padding","0px 50px 0 0px") ;
    $('.first').css("font-size","0.9em");
            
        $('.last').css("width",column_width) ;
        $('.last').css("padding","0px 0px 0 25px") ;
    $('.last').css("font-size","0.9em");
      }
  }
      
  $(document).ready(try_columns()) ;
  $(window).resize(try_columns());
  </script>
  

  
   
@stop

