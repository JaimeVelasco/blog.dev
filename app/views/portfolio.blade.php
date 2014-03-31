@extends('layouts.master')

@section('topscript')

<link rel="stylesheet" href="assets/css/quizymemorygame.css">

  <style type="text/css">
       

      #tutorial-memorygame{
        margin:auto;
        width:780px;
      }
      
      .text-style1{
        font-size:14pt;
        color:#56605f;
        font-weight:normal;
        text-shadow: 1px 1px 1px #fff;
        margin:0;
        line-height:24pt;
      }
      
      .reset-button{
        margin: 0 0 1.5em 0;
      }


  </style>
@stop


@section('content')
   

   

<section id="portfolio" class="portfolio-section">
        <div class="container">
            <div class="row">
          <h1>jQuery Memory Game</h1>
          
          <div id="main" role="main">
            
            <div id="tutorial-memorygame" class="quizy-memorygame">
              <ul>
                  <li class="match1">
                    <img src="assets/css/img/flag-Bulgaria.png">
                  </li>
                  <li class="match2">
                    <img src="assets/css/img/flag-Cuba.png">
                  </li>
                  <li class="match3">
                    <img src="assets/css/img/flag-Sweden.png">
                  </li>
                  <li class="match4">
                    <img src="assets/css/img/flag-NewZealand.png">
                  </li>
                  <li class="match5">
                    <img src="assets/css/img/flag-Uruguay.png">
                  </li>
                  <li class="match6">
                    <img src="assets/css/img/flag-Tunisia.png">
                  </li>
                  <li class="match1">
                    <br><br><br><p class="text-style1">Bulgaria</p>
                  </li>
                  <li class="match2">
                    <br><br><br><p class="text-style1">Cuba</p>
                  </li>
                  <li class="match3">
                    <br><br><br><p class="text-style1">Sweden</p>
                  </li>
                  <li class="match4">
                    <br><br><br><p class="text-style1">New<br>Zealand</p>
                  </li>
                  <li class="match5">
                    <br><br><br><p class="text-style1">Uruguay</p>
                  </li>
                  <li class="match6">
                    <br><br><br><p class="text-style1">Tunisia</p>
                  </li>
              </ul>
            </div>
            
            
            <div class="reset-button">
              <a id="restart" href="">Reset game</a>
            </div>         
          </div>
        </div>
    </section>

















     <!-- <section id="portfolio" class="portfolio-section">
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
    </section> -->


   
@stop

@section('bottomscript')

  
  <script src="/assets/js/jquery.flip.min.js"></script>
  <script src="/assets/js/jquery.quizymemorygame.js"></script>
  
    <!-- Custom Theme JavaScript -->
    

    

       <!-- memory game javascritp -->

  <script>
   var quizyParams = {itemWidth: 156, itemHeight: 156, itemsMargin:40, colCount:4, animType:'flip' , flipAnim:'tb', animSpeed:250, resultIcons:true }; 
    $('#tutorial-memorygame').quizyMemoryGame(quizyParams);
    $('#restart').click(function(){
      $('#tutorial-memorygame').quizyMemoryGame('restart');
      return false;
    });
  </script>
@stop

