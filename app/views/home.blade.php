@extends('layouts.master')

@section('content')

    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron">
                     <h1>Hi there!</h1>
                       <h2><div id="Demo" data-typer-targets="
                       {&quot;targets&quot; : [
                             &quot;I'm a LAMP Stack Developer&quot;,
                             &quot;I'm a Dad&quot;,
                             &quot;I'm a great cook&quot;,
                             &quot;I'm a wanna be musician&quot;,
                             &quot;I'm a photographer &quot;,
                             &quot;I'm a PHP programmer&quot;,
                             &quot;I'm a reformed advertising photographer &quot;,
                             &quot;I'm a wannabe surfer too &quot;,
                             &quot;I'm a Bla Bla bla &quot;,
                             &quot;I'm an electronic musician &quot;,
                             &quot;I'm a filmaker &quot;,&quot;I'm Mexican &quot;,
                             &quot;I'm a Codeup Student &quot;,
                             &quot;I'm a JavaScript advocate &quot;,
                             &quot;I'm a Laravel Developer &quot;,
                             &quot;I'm a Bootstrapper &quot;,
                             &quot;I'm a Mac User &quot;,
                             &quot;I'm a Adobe Suite User &quot;,
                             &quot;I'm a Photoshop Expert &quot;,
                             &quot;I Love Film Photography &quot;,
                             &quot;I'm a Reddit Addict &quot;,
                             &quot;I'm a Astronomer more than astrologer &quot;,
                             &quot;I like experimenting with old photographic processes &quot;,
                             &quot;I'm my 8 years old son best friend &quot;,
                             &quot;I don't know &quot;,
                             &quot;I'm a Synthethizer lover &quot;,
                             &quot;I love my Girlfriend! &quot;
                             ]
                      }">I'  m a Web Developer!
                    </div></h2>
                    <hr>
                      <p>I'm currently studying at <strong> <a href="http://codeup.com">Codeup</a></strong>, a 12 week bootcamp where 30 people like me are learning how to code in a total immersion environment. Now at    <strong><a href="http://geekdom.com/san-antonio">Geekdom.</a></strong><br/></p>
                      <!-- <p><a class="btn btn-primary btn-lg">Learn more</a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    

     

@section('bottomscript')

	   
	<script src="/assets/js/bootstrap.min.js"></script>    
	<script src="/assets/js/scrolling-nav.js"></script>
	<script src="/assets/js/jquery.easing.min.js"></script>
	<script src="/assets/js/jquery.typer.js"></script>  

  
  
    <!-- Custom Theme JavaScript -->
    

    <script>
      $(function () {
        $('[data-typer-targets]').typer();
      });
    </script>




  
@stop

