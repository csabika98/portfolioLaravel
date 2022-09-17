@extends('layout')
@section('content')
    <header class="header text-center">
        <h1 class="blog-name pt-lg-4 mb-0"><a class="no-text-decoration" href="{{url()->current()}}">Csaba Sallai</a></h1>
        <div class="bio mb-3"><br>Site information:<br><ul><li>Framework: Laravel v 9.28</li>
                <li>Database: MySQL</li><li>PHP 8.1.10</li></ul></div>
        <div class="bio mb-3"><a class="btn btn-primary" href="{{ asset('cv/CVCsaba.pdf') }}" target="_blank" role="button">Download my CV</a></div>
        <nav class="navbar navbar-expand-lg navbar-dark" >

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column" >
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

                <ul class="navbar-nav flex-column text-start">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html"><i class="fas fa-home fa-fw me-2"></i>Blog Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog-post.html"><i class="fas fa-bookmark fa-fw me-2"></i>Blog Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html"><i class="fas fa-user fa-fw me-2"></i>About Me</a>
                    </li>
                </ul>

                <div class="my-2 my-md-3">
                    <a class="btn btn-primary" href="https://themes.3rdwavemedia.com/" target="_blank">Get in Touch</a>
                </div>
            </div>
        </nav>
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
                            <input type="text" id="name" name="name" class="form-control me-md-1 semail" placeholder="Enter your name">
                            <label class="sr-only" for="semail">Your email</label>
                            <input type="email" id="semail" name="semail1" class="form-control me-md-1 semail" placeholder="Enter email">
                            <label class="sr-only" for="message">Your message</label>
                            <textarea class="form-control" aria-label="With textarea" placeholder="Enter your message"></textarea>
                        </div>
                        <div class="col-12 col-md-2">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form><!--//signup-form-->
                </div><!--//single-form-max-width-->
            </div><!--//container-->
        </section>


        <section class="blog-list px-3 py-5 p-md-5">
            <div class="container single-col-max-width">
                <div class="item mb-5">
                    <div class="row g-3 g-xl-0">
                        <div class="col-2 col-xl-3">
                            <img class="img-fluid post-thumb " src="{{ asset('images/blog/blog-post-thumb-1.jpg') }}" alt="image">
                        </div>
                        <div class="col">
                            <h3 class="title mb-1"><a class="text-link" href="blog-post.html">Top 3 JavaScript Frameworks</a></h3>
                            <div class="meta mb-1"><span class="date">Published 2 days ago</span><span class="time">5 min read</span><span class="comment"><a class="text-link" href="#">8 comments</a></span></div>
                            <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
                            <a class="text-link" href="blog-post.html">Read more &rarr;</a>
                        </div><!--//col-->
                    </div><!--//row-->
                </div><!--//item-->
                <div class="item mb-5">
                    <div class="row g-3 g-xl-0">
                        <div class="col-2 col-xl-3">
                            <img class="img-fluid post-thumb " src="{{ asset('images/blog/blog-post-thumb-2.jpg') }}" alt="image">
                        </div>
                        <div class="col">
                            <h3 class="title mb-1"><a class="text-link" href="blog-post.html">About Remote Working</a></h3>
                            <div class="meta mb-1"><span class="date">Published 3 months ago</span><span class="time">3 min read</span><span class="comment"><a class="text-link" href="#">26 comments</a></span></div>
                            <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
                            <a class="text-link" href="blog-post.html">Read more &rarr;</a>
                        </div><!--//col-->
                    </div><!--//row-->
                </div><!--//item-->

                <div class="item mb-5">
                    <div class="row g-3 g-xl-0">
                        <div class="col-2 col-xl-3">
                            <img class="img-fluid post-thumb" src="{{ asset('images/blog/blog-post-thumb-3.jpg') }}" alt="image">
                        </div>
                        <div class="col">
                            <h3 class="title mb-1"><a class="text-link" href="blog-post.html">A Guide to Becoming a Full-Stack Developer</a></h3>
                            <div class="meta mb-1"><span class="date">Published 2 months ago</span><span class="time">15 min read</span><span class="comment"><a class="text-link" href="#">3 comments</a></span></div>
                            <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
                            <a class="text-link" href="blog-post.html">Read more &rarr;</a>
                        </div><!--//col-->
                    </div><!--//row-->
                </div><!--//item-->

                <div class="item mb-5">
                    <div class="row g-3 g-xl-0">
                        <div class="col-2 col-xl-3">
                            <img class="img-fluid post-thumb" src="{{ asset('images/blog/blog-post-thumb-4.jpg') }}" alt="image">
                        </div>
                        <div class="col">
                            <h3 class="title mb-1"><a class="text-link" href="blog-post.html">High Performance JavaScript</a></h3>
                            <div class="meta mb-1"><span class="date">Published 1 month ago</span><span class="time">8 min read</span><span class="comment"><a class="text-link" href="#">12 comments</a></span></div>
                            <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
                            <a class="text-link" href="blog-post.html">Read more &rarr;</a>
                        </div><!--//col-->
                    </div><!--//row-->
                </div><!--//item-->


                <div class="item mb-5">
                    <div class="row g-3 g-xl-0">
                        <div class="col-2 col-xl-3">
                            <img class="img-fluid post-thumb" src="{{ asset('images/blog/blog-post-thumb-5.jpg') }}" alt="image">
                        </div>
                        <div class="col">
                            <h3 class="title mb-1"><a class="text-link" href="blog-post.html">Learn React in 24 Hours</a></h3>
                            <div class="meta mb-1"><span class="date">Published 2 months ago</span><span class="time">10 min read</span><span class="comment"><a class="text-link" href="#">23 comments</a></span></div>
                            <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
                            <a class="text-link" href="blog-post.html">Read more &rarr;</a>
                        </div><!--//col-->
                    </div><!--//row-->
                </div><!--//item-->

                <div class="item">
                    <div class="row g-3 g-xl-0">
                        <div class="col-2 col-xl-3">
                            <img class="img-fluid post-thumb" src="{{ asset('images/blog/blog-post-thumb-6.jpg') }}" alt="image">
                        </div>
                        <div class="col">
                            <h3 class="title mb-1"><a class="text-link" href="blog-post.html">How to Build Desktop Apps with HTML, CSS and JavaScript</a></h3>
                            <div class="meta mb-1"><span class="date">Published 3 months ago</span><span class="time">2 min read</span><span class="comment"><a class="text-link" href="#">1 comment</a></span></div>
                            <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
                            <a class="text-link" href="blog-post.html">Read more &rarr;</a>
                        </div><!--//col-->
                    </div><!--//row-->
                </div><!--//item-->

                <nav class="blog-nav nav nav-justified my-5">
                    <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
                    <a class="nav-link-next nav-item nav-link rounded" href="#">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
                </nav>

            </div>
        </section>

        <footer class="footer text-center py-2 theme-bg-dark">

            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Laravel v9.28</small>

        </footer>

    </div><!--//main-wrapper-->


    <!-- Javascript -->
    <script src="{{ asset('plugins/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>


@stop
