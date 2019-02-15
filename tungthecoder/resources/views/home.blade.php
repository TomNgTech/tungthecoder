@extends('layouts.app')

@section('content')
<div class="container m-t-25 m-b-25">

    @if (Session::has('loginStatus'))
                        
        <div class="notification is-primary">
             <strong>Status: </strong> {{ Session::get('loginStatus') }}
        </div>
                        
    @endif 

</div>

<section class="hero is-primary">
    <div class="container">
        <div class="hero-body introHome">
            <div class="columns">
                <div class="column is-4 has-text-centered introHome introColumn">
                    <img class="avatar" src="/tungthecoder/public/images/TungNguyen_Avatar_150x150.jpg">
                    <h2 class="subtitle">
                        <span class="has-text-white shadow is-black is-size-3">#Tung Nguyen</span>
                        <span class="icon fa-lg m-l-5">
                            <a href="https://www.linkedin.com/in/tungnguyen93/"><i class="fab fa-linkedin"></i></a>
                        </span>
                        <span class="icon fa-lg m-l-5">
                            <a href="https://github.com/TungTNg/"><i class="fab fa-github"></i></a>
                        </span>
                        <br>I <span class="shadow is-warning">design</span> and <span class="shadow is-danger">code</span> <span class="shadow is-success">beautifully</span> simple things!
                    </h2>

                </div>

                <div class="introHome is-divider-vertical"></div>
                <div class="column is-6 introHome introColumn">
                    <h1 class="title">Hi there, <span class="shadow is-warning">I'm Tung</span>. Nice to meet you!</h1>
                    <p class="is-size-5">I’m a <span class="shadow is-turquoise">Full Stack Web Developer</span> based in Seattle, WA.</p>
                    <p class="is-size-5">Since 2018, I’ve been helping <span class="shadow is-orange">many clients</span> to achieve <span class="shadow is-black">innovative things</span> on the web.</p>
                    <p class="is-size-5">I mainly work with <span class="shadow is-purple">modern tools</span> and <span class="shadow is-purple">frameworks</span> such as <span class="shadow is-danger">Wordpress</span>, <span class="shadow is-danger">Laravel</span>, <span class="shadow is-danger">Node/ExpressJS</span>, <span class="shadow is-danger">React</span>, <span class="shadow is-danger">Bulma/Bootstrap</span>, <span class="shadow is-danger">VueJS</span>….</p>
                    <p class="is-size-5">Read more <span class="shadow is-success">about me</span>, or check out a few samples of <span class="shadow is-warning">my projects</span>.</p>
                    <p class="is-size-5">I’m available for <span class="shadow is-turquoise">freelancing</span>, feel free to <span class="shadow is-orange">contact me!</span></p>
                </div>
                
            </div>
        </div>
    </div>
</section>

<div class="afterIntro introImg container">
    <div class="columns is-mobile is-centered">
        <img src="/tungthecoder/public/images/homeSectionImg/sectionSkills.png"></img>
        </div>
    </div>
</div>


<div class="afterIntro hero is-primary is-medium">
    <div class="hero-body">
        <div class="container">
        </div>
    </div>
</div>

<section class="section skills has-text-centered">
    <div class="columns is-mobile is-centered">
        <div class="column is-three-quarters-mobile is-3-tablet message is-primary">
            <div class="message-body titleHomePage">
                <h1 class="title is-3 has-text-grey has-text-centered"><span class="shadow is-orange">Skills</span></h1>
            </div>
        </div>
    </div>
    
    <h2 class="subtitle has-text-white is-size-5-desktop">
        Below are my magical abilities and primary weapons I use while coding.
        <br><a class="button is-rounded is-primary is-inverted has-text-info m-t-10" href="/tungthecoder/public/download/Tung_Nguyen_-_Resume_-_Full_Stack_Developer.pdf" download>Download My Résumé</a>
    </h2>
    

 
  <div class="container is-narrow">
    <div class="box">
      <div class="content">
        <div class="columns is-centered">
          <div class="column">
            <i class="has-text-primary fas fa-3x fa-code"></i>
            <h1 class="title is-size-4 is-spaced has-text-more-red has-text-weight-bold"><span class="shadow is-warning">Front-End Developer</span></h1>
            <p>I design responsive and friendly user interfaces.</p>
            <p class="list-title has-text-primary has-text-weight-normal">Languages I speak:</p>
            <p>HTML, CSS, Sass, Javascript/Jquery</p>
            <p class="list-title has-text-primary has-text-weight-normal">Dev Tools/Frameworks:</p>
            <ul>
              <li>Bootstrap</li>
              <li>Bulma</li>
              <li>React</li>
              <li>VueJs</li>
              <li>WordPress (Custom Theme)</li>
            </ul>
          </div>
          <div class="is-divider-vertical"></div>
          <div class="column">
            <i class="has-text-primary far fa-3x fa-folder-open"></i>
            <h1 class="title is-size-4 is-spaced has-text-more-red has-text-weight-bold"><span class="shadow is-turquoise">Back-end Developer</span></h1>
            <p>I develop website logics and information systems.</p>
            <p class="list-title has-text-primary has-text-weight-normal">Languages I speak:</p>
            <p>Python, Java, PHP, Sql/NoSql/Database Design</p>
            <p class="list-title has-text-primary has-text-weight-normal">Dev Tools/Frameworks:</p>
            <ul>
              <li>Cloud9</li>
              <li>Laravel</li>
              <li>Wordpress</li>
              <li>Node/Express.js</li>
              <li>MongoDB/MySql/Microsoft SQL Server</li>
            </ul>
          </div>
          <div class="is-divider-vertical"></div>
          <div class="column"> 
            <i class="has-text-primary fas fa-3x fa-terminal"></i>
            <h1 class="title is-size-4 is-spaced has-text-more-red has-text-weight-bold"><span class="shadow is-primary">DevOps Engineer</span></h1>
            <p>I manage IT infrastructure/softwares needed to support software code.</p>
            <p class="list-title has-text-primary has-text-weight-normal">Languages I speak:</p>
            <p>Command Line, Bash</p>
            <p class="list-title has-text-primary has-text-weight-normal">Dev Tools/Frameworks:</p>
            <ul>
              <li>LAMP Stack</li>
              <li>AWS microservices</li>
              <li>Git/Github</li>
              <li>JIRA</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="projectImg container">
    <div class="columns is-mobile is-centered">
        <img src="/tungthecoder/public/images/homeSectionImg/sectionProjects.png"></img>
        </div>
    </div>
</div>

<div class="afterSkill hero is-primary has-text-centered is-medium">
    <div class="section is-narrow hero-top">
        <div class="columns is-mobile is-centered">
            <div class="column is-three-quarters-mobile is-3-tablet message is-primary">
                <div class="message-body titleHomePage">
                    <h1 class="title is-3 has-text-grey has-text-centered"><span class="shadow is-orange">Projects</span></h1>
                </div>
            </div>
        </div>
        
        <h2 class="subtitle has-text-white is-size-5-desktop">Here are a few of my recent projects. Want to see more?
        <br><a class="button is-rounded is-primary is-inverted is-small has-text-info m-t-5" href="mailto:mecer80@gmail.com">Email</a> or <a class="button is-rounded is-primary is-inverted is-small has-text-info m-t-5" href="/contact">Contact Me</a></h2>
    </div>
    
    <div class="hero-body">
        
    </div>
</div>

<section class="section project has-text-centered">
    <div class="container is-narrow">
        <div class="columns">
            
            <div class="column card is-one-third">
                <div class="hoverWrapper">
                    <div class="hovereffect">
                        <img class="image is-responsive" src="/tungthecoder/public/images/projectDemos/tungthecoder_website.png" alt="">
                        <div class="overlay">
                            <h2 class="m-b-20">TCoder - tungthecoder</h2>
                            <p class="has-text-white">A porforlio website with a custom built CMS.</p>
                            <a class="info" href="https://www.tungthecoder.com/home">Visit</a>
                        </div>
                    </div>
                </div>
            
                <div class="card-content">
                    <h1 class="title has-text-more-red">tCoder - tungthecoder</h1>
                    <h2 class="subtitle"><u>Stacks Used</u></h1>
                    <div class="message is-primary">
                        <div class="message-body">
                            <p>Laravel, Bulma, Vue.js, Sass, JavaScript/Jquery, MySQL, EC2/Apache</p>
                            <p class="is-size-7">*Login as guest/guest to see my custom CMS Admin Panel*</p>
                        </div>
                    </div>
                    <a class="button is-info is-outlined" href="https://www.tungthecoder.com/home">Visit Site</a>
                    <a class="button" href="https://github.com/TungTNg/tungthecoder">
                        <span class="icon">
                            <i class="fab fa-github"></i>
                        </span>
                        <span>Source Code</span>
                    </a>
                </div>
            </div>
            
            <div class="column card is-one-third">
                <div class="hoverWrapper">
                    <div class="hovereffect">
                        <img class="image is-responsive" src="/tungthecoder/public/images/projectDemos/laravelBlog_website.png" alt="">
                        <div class="overlay">
                            <h2 class="m-b-20">Laravel Blog</h2>
                            <p class="has-text-white">A blog with custom-built CMS for blog posts.</p>
                            <a class="info" href="https://tungthecoder.com/laravelBlog/posts">Visit</a>
                        </div>
                    </div>
                </div>
            
                <div class="card-content">
                    <h1 class="title has-text-more-red">Laravel Blog</h1>
                    <h2 class="subtitle"><u>Stacks Used</u></h1>
                    <div class="message is-primary">
                        <div class="message-body">
                            <p>Laravel, Bootstrap, Javascript/Jquery, MySQL, EC2/PHP Built-in Web Server</p>
                            <p class="is-size-7">*Please delete posts after create/edit them (leave the first 4)*</p>
                        </div>
                    </div>
                    <a class="button is-info is-outlined" href="https://tungthecoder.com/laravelBlog/posts">Visit Site</a>
                    <a class="button" href="https://github.com/TungTNg/laravelBlog">
                        <span class="icon">
                            <i class="fab fa-github"></i>
                        </span>
                        <span>Source Code</span>
                    </a>
                </div>
            </div>
            
            <div class="column card is-one-third">
                <div class="hoverWrapper">
                    <div class="hovereffect">
                        <img class="image is-responsive" src="/tungthecoder/public/images/projectDemos/goPlaces_website.png" alt="">
                        <div class="overlay">
                            <h2 class="m-b-20">Go Places</h2>
                            <p class="has-text-white">A Yelp clone with custom-built CMS.</p>
                            <a class="info" href="https://tungthecoder.com/goPlaces">Visit</a>
                        </div>
                    </div>
                </div>
            
                <div class="card-content">
                    <h1 class="title has-text-more-red">Go Places</h1>
                    <h2 class="subtitle"><u>Stacks Used</u></h1>
                    <div class="message is-primary">
                        <div class="message-body">
                            <p>Node/Express.js, Bootstrap, Javascript/Jquery, MongoDB, EC2/Node.js Web Server</p>
                            <p class="is-size-7">*Feel free to add more attractions*</p>
                        </div>
                    </div>
                    <a class="button is-info is-outlined" href="https://tungthecoder.com/goPlaces">Visit Site</a>
                    <a class="button" href="https://github.com/TungTNg/goPlaces">
                        <span class="icon">
                            <i class="fab fa-github"></i>
                        </span>
                        <span>Source Code</span>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</section>

<div class="testimonialImg container">
    <div class="columns is-mobile is-centered">
        <img src="/tungthecoder/public/images/homeSectionImg/sectionTestimonials.png"></img>
        </div>
    </div>
</div>

<div class="afterProject hero is-primary has-text-centered">
    <div class="section is-narrow hero-top">
        <div class="columns is-mobile is-centered">
            <div class="column is-three-quarters-mobile is-3-tablet message is-primary">
                <div class="message-body titleHomePage">
                    <h1 class="title is-3 has-text-grey has-text-centered"><span class="shadow is-orange">Testimonials</span></h1>
                </div>
            </div>
        </div>
        
        <h2 class="subtitle has-text-white is-size-5-desktop">Let's hear what clients & coworkers say about me!
    </div>
    
    <div class="hero-body">
        
    </div>
</div>


<section class='testimonial container carousel carousel-animated carousel-animate-slide m-b-30' data-size="3" data-autoplay="true" data-delay="5000">
  <div class='carousel-container'>
    <div class='carousel-item is-active'>
        <div class="card">
            <div class="columns is-centered">
                <div class="column has-text-centered">
                  <img class="avatar" src="/tungthecoder/public/images/testimonials/Joshua_Wedekind.jpg" alt="Placeholder image">
                    <p><span class="subtitle is-4">Joshua Wedekind</span>
                    <br><span class="subtitle is-6">Director | Software Engineer | Adjunct Professor</span>
                    </p>
                    <a class="button is-small m-t-5" href="https://github.com/halfnibble"><span class="icon is-small"><i class="fab fa-github"></i></span><span>GitHub</span></a>
                    <a class="button is-link is-small m-t-5" href="https://www.linkedin.com/in/joshua-wedekind-0278a115/"><span class="icon is-small"><i class="fab fa-linkedin"></i></span><span>Linkedin</span></a>
                </div>
            </div>
            
            <div class="content m-l-25 m-r-25 p-b-25">
                &emsp; Mr. Nguyen is an exemplary student at Seattle Central College. He 
                took my challenging offering of WEB 150, JavaScript Programming, and he
                was one of only a few students to receive a perfect score in every assignment/project/exam.
                <br>&emsp; Additionally, Tung participated in several group projects, where
                I was able to observe his team effort and coaching skills firsthand. <a>#goTung</a>
              <br>
              <time datetime="2018-10-1">9:27 AM - Oct 1, 2018</time>
            </div>
        </div>
    </div>
    
    <div class='carousel-item'>
        <div class="card">
            <div class="columns is-centered">
                <div class="column has-text-centered">
                  <img class="avatar" src="/tungthecoder/public/images/testimonials/Jacqueline_Ortoleva.jpg" alt="Placeholder image">
                    <p><span class="subtitle is-4">Jacqueline Ortoleva</span>
                    <br><span class="subtitle is-6">Co Owner at Green Shark Designs | Professor</span>
                    </p>
                    <a class="button is-link is-small m-t-5" href="https://www.linkedin.com/in/jacqueline-ortoleva-054a8113/"><span class="icon is-small"><i class="fab fa-linkedin"></i></span><span>Linkedin</span></a>
                </div>
            </div>
            
            <div class="content m-l-25 m-r-25 p-b-25">
                &emsp; I continuously witness Tung’s ability to reach out and guide
                multiple students in my courses to reach their own academic potential. His work this term has
                become invaluable to me.
                <br> &emsp; His sense of humour, bravado in persevering through life’s challenges and most of all,
                his humility and intellectual prowess will transform his future fellow students and professors. <a>#goTung</a>
              <br>
              <time datetime="2012-11-8">9:06 PM - Nov 8, 2012</time>
            </div>
        </div>
    </div>
    
    <div class='carousel-item'>
        <div class="card">
            <div class="columns is-centered">
                <div class="column has-text-centered">
                  <img class="avatar" src="/tungthecoder/public/images/testimonials/James_Nelson.jpg" alt="Placeholder image">
                    <p><span class="subtitle is-4">James Nelson</span>
                    <br><span class="subtitle is-6">Senior Site Reliability Engineer | Systems Engineer</span>
                    </p>
                    <a class="button is-small m-t-5" href="https://github.com/jameynelson"><span class="icon is-small"><i class="fab fa-github"></i></span><span>GitHub</span></a>
                    <a class="button is-link is-small m-t-5" href="https://www.linkedin.com/in/jameynelson/"><span class="icon is-small"><i class="fab fa-linkedin"></i></span><span>Linkedin</span></a>
                </div>
            </div>
            
            <div class="content m-l-25 m-r-25 p-b-25">
                &emsp; Tung’s cultural background, being born in Vietnam, has prepared him to regularly 
                adapt within a variety of environments. He is eager to learn, motivated to succeed and is 
                not afraid to tackle complex problems (indeed!). 
                <br> &emsp; Being his friend and his mentor, I highly recommend Tung to be hired as he will be 
                an invaluable asset to wherever he goes. <a>#goTung</a>
              <br>
              <time datetime="2018-10-10">4:00 PM - Oct 10, 2018</time>
            </div>
        </div>
    </div>
    
    <div class='carousel-item'>
        <div class="card">
            <div class="columns is-centered">
                <div class="column has-text-centered">
                  <img class="avatar" src="/tungthecoder/public/images/testimonials/Nicole_Bade.jpg" alt="Placeholder image">
                    <p><span class="subtitle is-4">Nicole Bade</span>
                    <br><span class="subtitle is-6">System Administrator | Curriculum Developer</span>
                    </p>
                    <a class="button is-link is-small m-t-5" href="https://www.linkedin.com/in/nicole-bade-b2b4bb117/"><span class="icon is-small"><i class="fab fa-linkedin"></i></span><span>Linkedin</span></a>
                </div>
            </div>
            
            <div class="content m-l-25 m-r-25 p-b-25">
                <a>#goTung</a>
              <br>
              <time datetime="2018-10-10">4:00 PM - Oct 10, 2018</time>
            </div>
        </div>
    </div>
    
  </div>
  <div class="carousel-navigation is-centered">
    <div class="carousel-nav-left">
      <i class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div class="carousel-nav-right">
      <i class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
  </div>
</section>

<div class="serviceImg container">
    <div class="columns is-mobile is-centered">
        <img src="/tungthecoder/public/images/homeSectionImg/sectionServices.png"></img>
        </div>
    </div>
</div>

<div class="hero is-primary has-text-centered m-b-50">
    <div class="section is-narrow hero-top">
        <div class="columns is-mobile is-centered">
            <div class="column is-three-quarters-mobile is-3-tablet message is-primary">
                <div class="message-body titleHomePage">
                    <h1 class="title is-3 has-text-grey has-text-centered"><span class="shadow is-orange">Services</span></h1>
                </div>
            </div>
        </div>
        
        <h2 class="subtitle has-text-white is-size-5-desktop">What can I do for you?
        <p class="m-t-5"> Want see more? Visit <a class="button is-rounded is-small is-primary is-inverted has-text-info" href="/service">Services</a> <span class="is-size-6">(*page is still under construction*)</span></p>
        </h2>
    </div>
    
    <div class="hero-body">
    </div>
</div>

<section class="section service has-text-left">
    <div class="container is-narrow">
      <div class="columns">
        <div class="column">
          <div class="box">
            <div class="content">
              <h4 class="title is-5 has-text-centered">Tutoring</h4>
              This quarter, I'm tutoring at Seattle Central College for 3 days/week:
              <ul>
              <li>Tues: &nbsp;&nbsp;&nbsp; 11:00 AM - 1:00 PM (Study Room/Appointment)</li>
              <li>Wed: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1:00 PM - 4:00 PM (BE 3184)</li>
              <li>Thurs: &nbsp;&nbsp; 11:00 AM - 1:00 PM (Study Room/Appointment)</li>
              <span class="is-size-7">(*For more information, please refer to the poster below*)</span>
              </ul>
              <p class="has-text-centered"><a class="button is-rounded is-primary is-outlined" href="/tungthecoder/public/download/Tutoring_Poster_Fall2018.pdf" download>Download Tutoring Poster</a>
              </p>
            </div>
          </div>
        </div>
        
        <div class="column">
          <div class="box">
            <div class="content">
              <h4 class="title is-5 has-text-centered">Web Development Freelancing</h4>
              <p></p>
              <h5 class="subtitle is-6">Front End Web Development</h5>
              <p>Develop Front End using latest standards with HTML5/CSS3 with added funtionality using JavaScript/Jquery and Bootstrap (or Wordpress if requested).</p>
              
              <h5 class="subtitle is-6">Back End Web Development</h5>
              <p>Develop Back End application/service using Node.js or PHP and MySQL/SQL Server or MongoDB databases (or Wordpress if requested).</p>
            </div>
          </div>
        </div>
      </div>
    
    </div>
</section>

<div class="contactImg container">
    <div class="columns is-mobile is-centered">
        <img src="/tungthecoder/public/images/homeSectionImg/sectionContact.png"></img>
        </div>
    </div>
</div>

<div class="hero is-primary has-text-centered m-b-50">
    <div class="section is-narrow hero-top">
        <div class="columns is-mobile is-centered">
            <div class="column is-three-quarters-mobile is-3-tablet message is-primary">
                <div class="message-body titleHomePage">
                    <h1 class="title is-3 has-text-grey has-text-centered"><span class="shadow is-orange">Contact Me</span></h1>
                </div>
            </div>
        </div>
        
        <h2 class="subtitle has-text-white is-size-5-desktop has-text-left-mobile">Got more questions? Or simply want to schedule a coffee date with me? ;)
        <p class="m-t-5"><a class="button is-rounded is-primary is-inverted has-text-info" href="/contact">Contact Me</a> here!</p>
        <p class="m-t-10 is-size-6">(Or text me at <a class="button is-small" href="tel:+1-206-307-1901">(206) 307-1901</a> if this is an urgency!)</p>
        </h2>
    </div>
</div>


@endsection


@section('scripts')
    <script type="text/javascript" src="/tungthecoder/node_modules/bulma-extensions/bulma-carousel/dist/js/bulma-carousel.js"></script>
    <script type="text/javascript">
        var carousels = bulmaCarousel.attach(); // carousels now contains an array of all Carousel instances
    </script>
@endsection