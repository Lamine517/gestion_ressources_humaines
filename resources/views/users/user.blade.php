@extends('layouts.user')
@section('content')
    <main> 
        <div class="mon-container">
            <section id="blog1">
                <div class="blog-left">
                    <div class="inner">
                        <h3 id="title-blog">106</h3>
                        <p>Recrutements</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="" class="text-footer">
                        lire la suite
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
                <div class="blog-center">
                    <div class="inner">
                        <h3 id="title-blog">03</h3>
                        <p>Administrateurs</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="" class="text-footer">
                        lire la suite
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
                <div class="blog-right">
                    <div class="inner">
                        <h3 id="title-blog">27</h3>
                        <p>Rénumerations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="" class="text-footer">
                        lire la suite
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </section>

            
            <section id="blog1">
                <div class="blog-left">
                    <div class="inner">
                        <h3 id="title-blog">66</h3>
                        <p>Personnels</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="" class="text-footer">
                        lire la suite
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
                <div class="blog-center">
                    <div class="inner">
                        <h3 id="title-blog">116</h3>
                        <p>Formations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="" class="text-footer">
                        lire la suite
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
                <div class="blog-right">
                    <div class="inner">
                        <h3 id="title-blog">227</h3>
                        <p>Evaluations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="" class="text-footer">
                        lire la suite
                        <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </section>
        </div>
    </main> 


    <script>
        // jquery
        $(document).ready(function(){
            $('ul li a').click(function(){
                $('li a').removeClass("actived");
                $(this).addClass("actived");
            });
        });
    </script>
@endsection