@extends('layouts.master')

@section('topscript')

<style type="text/css">
	
	body{
		padding-top: 200px;
	}

	.lead { font-size: 33px;margin-bottom:0px; }
</style>

  
@stop


@section('content')
   <div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">
                      Github Repository 
                    </h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong>Codeup Exercises</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Learning the LAMP-Stack</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Feb-Apr 2014</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>PHP, MySQL, JavaScript, jQuery<br>

                    HTML5/CSS3, Laravel, GitHub</li>
                <div class="panel-footer">
                    <a class="btn btn-lg btn-block btn-default" href="https://github.com/JaimeVelasco"><i class="fa fa-github"></i> Visit Repository</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4 class="text-center">
                      WEB 
                   </h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong>Money Carousel</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Capstone Project</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Laravel, Bootstrap, jQuery, Github</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Developed in under 12 days with a team of 3 developers</li>
                </ul>
                <div class="panel-footer">
                    <a class="btn btn-lg btn-block btn-info" href="http://moneycarousel.us">moneycarousel.us</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">
                       PHOTOGRAPHY 
                    </h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong>Portrait Scene</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>+100 sessions last year</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>+10 years experience</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Interested in old cameras and 19 century techniques</li>
                </ul>
                <div class="panel-footer">
                    <a class="btn btn-lg btn-block btn-default" href="http://www.photojv.com">photojv.com</a>
                </div>
            </div>
        </div>
    </div>
</div>


   

@stop

