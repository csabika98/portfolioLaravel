@extends('layout')
@section('content')
    <header class="header text-center">
        <h1 class="blog-name pt-lg-4 mb-0"><a class="no-text-decoration" href="{{url()->current()}}">Csaba Sallai</a></h1>
        <div class="bio mb-3"><br>Site information:<br><ul><li>Framework: Laravel v 9.28</li>
                <li>Database: MySQL</li><li>PHP 8.1.10</li><li>Boostrap 5 (theme created with Bootsrap 5)</li></ul></div>
        <div class="bio mb-3"><a class="btn btn-primary" href="{{ asset('cv/CVCsaba.pdf') }}" target="_blank" role="button">Download my CV</a></div>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation">
                <div class="profile-section pt-3 pt-lg-0">
                    <img class="profile-image mb-3 rounded-circle mx-auto" src="{{ asset('images/profile.png') }}" alt="image" >
                    <div class="bio mb-3">Hello, my name is Csaba.
                        Currently, I'm working as an Application Support Specialist at Innoveo.
                        I'm very passionate, enthusiastic, fast learner person.
                        I always try to do my best, in the future I would like to further develop my skills, I know the basics of the programming. I completed a 1 year-length bootcamp - CodeCool.
                        After I'm done with helping others and solve their issues,I would like to try other roles in IT, like being developer at some point in the future. I believe I have the hard and soft skills.<br><a href="about.html">Find out more about me</a></div><!--//bio-->
                    <ul class="social-list list-inline py-3 mx-auto">
                        <li class="list-inline-item"><a href="https://twitter.com/sallcsa1212"><i class="fab fa-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/csabika98/"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://github.com/csabika98/"><i class="fab fa-github-alt fa-fw"></i></a></li>
                    </ul><!--//social-list-->
                    <hr>
                </div><!--//profile-section-->
            </div>
    </header>

    <div class="main-wrapper">

        <section class="cta-section theme-bg-light py-5">
            <div class="container text-center single-col-max-width">
                <h2 class="heading">Welcome to my site!</h2>
                <div class="intro">You can contact me, using this form</div>
                <div class="single-form-max-width pt-3 mx-auto">
                    <form class="signup-form row g-2 g-lg-2 align-items-center">
                        <div class="col-12 col-md-9">
                            <label class="sr-only" for="name">Your Name</label>
                            <br><input type="text" id="name" name="name" class="form-control me-md-1 semail" placeholder="Enter your name">
                            <label class="sr-only" for="semail">Your email</label>
                            <br><input type="email" id="semail" name="semail1" class="form-control me-md-1 semail" placeholder="Enter email">
                            <label class="sr-only" for="message">Your message</label>
                            <br><textarea class="form-control" style="min-width:500px; max-width:100%;min-height:100px;height:100%;width:100%;" aria-label="With textarea" placeholder="Enter your message"></textarea>
                        </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                    </form><!--//signup-form-->
                </div><!--//single-form-max-width-->
            </div><!--//container-->
        </section>


        <!--/* PAGE CONTENT */-->



        <footer class="footer text-center py-2 theme-bg-dark">

            <small class="copyright">Laravel v9.28</small>

        </footer>

    </div><!--//main-wrapper-->


    <!-- Javascript -->
    <script src="{{ asset('plugins/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>


@stop
