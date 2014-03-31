@extends('layouts.master')

@section('content')

    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron">
                      <h1>Hello!</h1>
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
                             &quot;I'm my 8 years old son (bad) example of adulthood &quot;,
                             &quot;I don't know &quot;,
                             &quot;I'm a Synthethizer lover &quot;,
                             &quot;I love my Girlfriend! &quot;
                             ]
                      }">I'  m a Web Developer!
                    </div></h2>
                      <p>This site is one of my exercises from <strong> <a href="http://codeup.com">Codeup</a></strong>, a 12 week bootcamp where 30 people like me are learning how to code in a total immersion environment. Now at    <strong><a href="http://geekdom.com/san-antonio">Geekdom.</a></strong><br/></p>
                      <p><a class="btn btn-primary btn-lg">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="page-header">
                <h1>Jaime Velasco <small>Junior Web Developer</small></h1>
                </div>

                <div class="row">
                  <div class= "col-md-3"><h4>CONTACT</h4></div>
                  <div class= "col-md-6"><a href="mailto:jaime@photojv.com?Subject=Hello%20again" target="_top">
                  jaime@photojv.com</a></div>
                  <div class= "col-md-3"><a href="https://github.com/JaimeVelasco"><i class="fa fa-linkedin-square fa-2x"></i></a><br><a href="https://github.com/JaimeVelasco"><i class="fa fa-github-square fa-2x"></i></a></div>
                </div>

                <div class="row"><hr>
                  <div class= "col-md-3"><h4>WORK EXPERIENCE</h4></div>
                  <div class= "col-md-6"><p><strong>Commercial photographer</strong></p><p>I worked for over a decade as a product and advertising photographer in Guadalajara, México.</p> </div>
                  <div class= "col-md-3"><p>2003-2013</p></div>
                </div>

                <div class="row">
                        <div class= "col-md-3"></div>
                  <div class= "col-md-6"><p><strong>Jewelery manager</strong></p><p>I managed the workshop of my family's 50 years old Jewelry Bussines</p> </div>
                  <div class= "col-md-3"><p>2007-2010</p></div>
                </div>

                <div class="row">
                        <div class= "col-md-3"></div>
                  <div class= "col-md-6"><p><strong>Restaurant Owner</strong></p><p>Opened and operated a little restaurant in Cabo San Lucas</p> </div>
                  <div class= "col-md-3"><p>2005-2007</p></div>
                </div>

                <div class="row"><hr>
                  <div class= "col-md-3"><h4>EDUCATION</h4></div>
                  <div class= "col-md-6">LAMP+JS Software Development Bootcamp at <strong><a href="http://codeup.com">Codeup</a></strong></div>
                  <div class="col-md-3">Graduating in Spring 2014<br><span class="label label-danger">In progress</span>
                        
                </div>
                <br>
                </div>
                <div class="row">
                    <div class= "col-md-3"></div>
                    <div class= "col-md-6"><p><strong>CAAV</strong></p><p>Audio Visual Media</p> </div>
                    <div class= "col-md-3"><p>1999-2001</p></div>
                    
                </div>
                <div class="row">
                    <div class= "col-md-3"></div>
                    <div class= "col-md-6"><p><strong>Soutwest School of Art</strong></p><p>Photography</p> </div>
                    <div class= "col-md-3"><p>1998-1999</p></div>
                </div>
                <div class="row">
                  <div class= "col-md-3"></div>
                    <div class= "col-md-6"><p><strong>ITESO</strong></p><p>Communications</p> </div>
                    <div class= "col-md-3"><p>1996-1998</p></div>
                </div>
            </div>
        </div>
    </section>




     <section id="portfolio" class="portfolio-section">
        <div class="container">
            <div class="row">
              <div class="col-md-4"><p><i class="fa fa-smile-o fa-5x"></i></p>
</div>
              <div class="col-md-4"><p><i class="fa fa-shopping-cart fa-5x"></i></p>
</div>
              <div class="col-md-4"><p><i class="fa fa-mobile-phone fa-5x"></i></p>
</div>
            </div>
        </div>
    </section>


    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <h1>Contact Section</h1>
                <form class="form-horizontal">
                  <fieldset>
                    <legend>Contact me at (210)8656557 or use this form.</legend>
                    <div class="form-group">
                      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                      <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                      </div>
                    </div>
                   
                    <div class="form-group">
                      <label for="textArea" class="col-lg-2 control-label">Textarea</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" rows="3" id="textArea"></textarea>
                        <span class="help-block">...</span>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-lg-10 col-lg-offset-2">
                        <button class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
                </div>
            </div>
        </div>
    </section>
@stop

@section('bottomscript')

	<script src="/assets/js/jquery-1.10.2.js"></script>    
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


       <!-- memory game javascritp -->

  
@stop

