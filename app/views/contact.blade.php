@extends('layouts.master')

@section('content')


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
                        <button type="submit" class="btn btn-primary" <a href="mailto:jaime@photojv.com">Submit</button></a>
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
 
   
@stop

