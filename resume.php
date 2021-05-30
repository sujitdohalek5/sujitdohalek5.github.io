<!doctype html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="screen.css" rel="stylesheet" type="text/css">
        <link href="custom.css" rel="stylesheet" type="text/css">
        
        <style>
            
        </style>
        <script src="js/jq.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/typed.js"></script>
        <script>
            
            $(document).ready(function(){
                
                /* Typed Text in Home Page */
                $("#typed").ready(function(){
                    var typed = new Typed("#typed",{
                            strings: [
                                "A Web Application Designer.",
                                " ",
                                "A Smart and Cool guy.",
                                " ",
                                "A Web Application Developer."
                            ],
                            typeSpeed: 60,
                            backSpeed: 30,
                            loop: true,
                            showCursor: false
                        });
                    });
                
                
                /* MENU TAB */
                $("#menu ul li").ready(function(){
                    $("#menu ul li").click(function(){
                        var id=$(this).attr("id");
                        var pos =$("#"+id+"_content").offset().top - $("#menu").height();

                        $("html,body").animate({scrollTop: pos},1000);
                    });
                });
                
                
                /* ICONIC TABS */
                $("#tabs .tab .details").ready(function(){
                    $("#tabs .tab .details").click(function(){
                        var id = this.id;
                        var pos =$("#"+id+"_content").offset().top - $("#menu").height();
                        $("html,body").animate({scrollTop: pos},1000);
                    });
                });
                
                $(".bar-div").ready(function (){
                    $(".bar-div").each(function (){
                        var progress = $(this).attr('progress');
                        // var i = 83;
                        var j = progress * 90/100;
                        $(this).find('.progress-circle').html(progress + '%');
                        $(this).find('.innerprogress').animate({width : j + '%'},2000);/* humor */
                    });
                });
            });
                
                
        </script>
    </head>
    <body>
        <div id="main">
            <div class="container d-center">
                <div class="md-12" id="home_content">
                    <div class="header md-12">
                        <div class="imgdiv md-5 t-center">
                            <img src="img/me1.jpg" class="img d-center" />
                        </div>
                        <div class="imgdiv md-7 t-center">
                            <h1 class="h1">SUJIT DOHALE</h1>
                            <h3 class="t-center" id="typed"> | </h3>
                            <div class="md-12">
                                <div class="mar-md-9">
                                    <a href="https://www.facebook.com/sujit.dohale.7" target="_blank" class="div4">
                                        <div class="d-center circle-icon">
                                            <img src="svg/facebook.svg" class="circle-icon-img" style="background: white;">
                                        </div>
                                    </a>
                                    <a href="https://www.instagram.com/sujitdohalek5/" target="_blank" class="div4">
                                        <div class="d-center circle-icon">
                                            <img src="svg/instagram.svg" class="circle-icon-img" style="width: 80%; height: 80%; padding: 10%; background: linear-gradient(225deg, #612dc4, #e7137e, #e85b21,#f0d022);">
                                        </div>
                                    </a>
                                    <a href="https://twitter.com/SujitDohale" target="_blank" class="div4">
                                        <div class="d-center circle-icon" style="background: white;">
                                            <img src="svg/twitter.svg" class="circle-icon-img" style="margin: 15%;width: 70%;height: 70%;border-radius: 15%;">
                                        </div>
                                    </a>
                                    <a href="https://github.com/sujitdohalek5" target="_blank" class="div4">
                                        <div class="d-center circle-icon">
                                            <img src="svg/github.svg" class="circle-icon-img" style="background: white;">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="line-hr"/>
                    <div class="lower md-12" id="tabs">
                        <div class="md-4">
                            <div class="tab">
                                <img src="img/1.png">
                                <div class="details" id="profile">
                                    <h3>PROFILE</h3>
                                </div>
                            </div>
                        </div>              
                        <div class="md-4">
                            <div class="tab">
                                <img src="img/2.png">
                                <div class="details" id="resume">
                                    <h3>RESUME</h3>
                                </div>
                            </div>
                        </div>              
                        <div class="md-4">
                            <div class="tab">
                                <img src="img/5.png">
                                <div class="details" id="contact">
                                    <h3>CONTACT</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="line-hr" />
                    <div class="md-12 t-center">
                        <div class="md-3">
                                <h3 class="null">+91 776-802-6045</h3>
                        </div>
                        <div class="md-3">
                            <h3 class="null">sujitdohalek5@gmail.com</h3>
                        </div>
                        <div class="md-3">
                            <h3 class="null">48 Bhadane, Murbad, Maharashtra</h3>
                        </div>
                        <div class="md-3">
                            <span class="copyright">Copyright © 2019 All right reserved</span>
                        </div>
                    </div>
                    <hr class="double-hr"/>
                </div>
            </div>
            
            <div class="container d-center"> 
                <div class="md-12" id="profile_content">
                    <div class="upper md-12">

                        <div class="mar-md-5">
                            <div class="imgdiv md-5 t-center">
                                <img src="img/me1.jpg" class="d-center" />
                            </div>

                            <div class="imgdiv md-7 t-center">
                                <h1><big>PROFILE</big></h1>
                            </div>
                        </div>

                    </div>
                    <hr class="line-hr" />
                    <div class="md-12">
                        <div class="md-7">
                            <h1 style="margin: 26px 20px;">Hello, I am web designer</h1>
                            <p style="text-align: justify; margin: 20px 20px">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                            </p>
                        </div>
                        <div class="md-5">
                            <div class="mar-md-10">
                                <table class="q-table md-12">
                                    <tr>
                                        <th>Name</th>
                                        <td>Sujit Dohale</td>
                                    </tr>
                                    <tr>
                                        <th>Date of Birth</th>
                                        <td>May 5, 1999</td>
                                    </tr>
                                    <tr>
                                        <th>E-mail</th>
                                        <td>sujitdohalek5@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>Bhadane, Murbad, 421 401</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>+91 776-802-6045</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <hr class="line-hr" />
                    <div class="md-12">
                        <div class="lower mar-md-9">
                                <h1 class="md-12 t-center">What I'm doing</h1>
                            <div class="md-4">
                                <div class="tab">
                                    <img src="img/3.png">
                                    <div class="details" id="profile">
                                        <h3>Application</h3>
                                    </div>
                                </div>
                            </div>              
                            <div class="md-4">
                                <div class="tab">
                                    <img src="img/2.png">
                                    <div class="details" id="resume">
                                        <h3>web<br>Application</h3>
                                    </div>
                                </div>
                            </div>              
                            <div class="md-4">
                                <div class="tab">
                                    <img src="img/4.png">
                                    <div class="details" id="contact">
                                        <h3>web<br>Design</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="line-hr" />
                    <div class="md-12">
                        <div class="md-12" id="insta">
                            <div class="md-2">
                                <img src="Insta/IMG_20190624_181250_082.jpg" class="mar-md-11" />
                            </div>
                            <div class="md-2">
                                <img src="Insta/IMG_20190603_110040_013.jpg" class="mar-md-11" />
                            </div>
                            <div class="md-2">
                                <img src="Insta/IMG_20190602_181005_745.jpg" class="mar-md-11" />
                            </div>
                            <div class="md-2">
                                <img src="Insta/IMG_20190601_100330_239.jpg" class="mar-md-11" />
                            </div>
                            <div class="md-2">
                                <img src="Insta/IMG_20190531_224548_430.jpg" class="mar-md-11" />
                            </div>
                            <div class="md-2">
                                <img src="Insta/IMG_20190531_223722_896.jpg" class="mar-md-11" />
                            </div>
                        </div>
                    </div>
                    <hr class="line-hr" />
                    <div class="md-12">
                            <h1 class="t-center">My thoughts</h1>
                            <p class="t-center mar-md-9">
                                It's true that life is short and we have to fully enjoy it like it will be last, but it's also long enogh to torture you for your mistakes, even though it's short the decision we take to spend it will make difference for rest of our life.
                            </p>
                    </div>
                    <hr class="double-hr">
                </div>
            </div>
            
            <div class="container d-center">
                <div class="md-12" id="resume_content">
                    <div class="upper md-12">

                        <div class="mar-md-5">
                            <div class="imgdiv md-5 t-center">
                                <img src="img/me1.jpg" class="d-center" />
                            </div>

                            <div class="imgdiv md-7 t-center">
                                <h1><big>RESUME</big></h1>
                            </div>
                        </div>

                    </div>
                    <hr class="line-hr" />
                    <div class="md-12">
                        <h2 class="null t-center"><big>Qualifications</big></h2>
                        <div class="md-6">
                            <table class="null mar-md-10 left q-table">
                                <tr>
                                    <th colspan="2" class="table-header">EDUCATION</th>
                                </tr>
                                <tr>
                                    <th>Degree</th>
                                    <td>B.Sc.I.T.</td>
                                </tr>
                                <tr>
                                    <th>College name</th>
                                    <td>VPM College Kinhavali</td>
                                </tr>
                                <tr>
                                    <th>Passing Year</th>
                                    <td>2019</td>
                                </tr>
                                <tr>
                                    <th>Grade</th>
                                    <td>B</td>
                                </tr>
                            </table>
                        </div>
                        <div class="md-6">
                            <table class="null mar-md-10 left q-table">
                                <tr>
                                    <th colspan="2" class="table-header">EDUCATION</th>
                                </tr>
                                <tr>
                                    <th>Degree</th>
                                    <td>H.S.C.</td>
                                </tr>
                                <tr>
                                    <th>College name</th>
                                    <td>JSM College Shivale</td>
                                </tr>
                                <tr>
                                    <th>Passing Year</th>
                                    <td>2016</td>
                                </tr>
                                <tr>
                                    <th>Grade</th>
                                    <td>B</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <hr class="line-hr" />

                    <div class="md-12">
                        <div class="md-6">
                            <h2 class="null t-center">Professional Skills</h2>
                            <div class="md-12">
                                <div class="mar-md-10 bar-div" progress="75">
                                    PHP<br>
                                    <div class="md-12 outerprogress">
                                        <div class="innerprogress" class="progress-text"></div>
                                        <div class="progress-circle t-center" id="js-text"></div>
                                    </div>
                                    <hr />
                                </div>
                                <div class="mar-md-10 bar-div" progress="75">
                                    JavaScript<br>
                                    <div class="md-12 outerprogress">
                                        <div class="innerprogress" class="progress-text"></div>
                                        <div class="progress-circle t-center" id="js-text"></div>
                                    </div>
                                    <hr />
                                </div>
                                <div class="mar-md-10 bar-div" progress="85">
                                    HTML<br>
                                    <div class="md-12 outerprogress">
                                        <div class="innerprogress" class="progress-text"></div>
                                        <div class="progress-circle t-center" id="html-text"></div>
                                    </div>
                                    <hr />
                                </div>
                                <div class="mar-md-10 bar-div" progress="60">
                                    CSS<br>
                                    <div class="md-12 outerprogress">
                                        <div class="innerprogress" class="progress-text"></div>
                                        <div class="progress-circle t-center" id="css-text"></div>
                                    </div>
                                    <hr />
                                </div>
                            </div>
                        </div>

                        <div class="md-6">
                            <h2 class="null t-center">Additional Skills</h2>
                            <div class="md-12">
                                <div class="mar-md-10 bar-div" progress="55">
                                    Communication<br>
                                    <div class="md-12 outerprogress">
                                        <div class="innerprogress" class="progress-text"></div>
                                        <div class="progress-circle t-center" id="com-text"></div>
                                    </div>
                                    <hr />
                                </div>
                                <div class="mar-md-10 bar-div" progress="45">
                                    English<br>
                                    <div class="md-12 outerprogress">
                                        <div class="innerprogress" class="progress-text"></div>
                                        <div class="progress-circle t-center" id="eng-text"></div>
                                    </div>
                                    <hr />
                                </div>
                                <div class="mar-md-10 bar-div" progress="85">
                                    Humor<br>
                                    <div class="md-12 outerprogress">
                                        <div class="innerprogress" class="progress-text"></div>
                                        <div class="progress-circle t-center" id="humor-text"></div>
                                    </div>
                                    <hr />
                                </div>
                            </div>
                        </div>

                        <hr class="line-hr">

                        <div class="md-6">
                            <h2 class="null t-center">Language Skills</h2>
                            <div class="md-12">
                                <div class="mar-md-10 lang-div">
                                    <div class="md-12">
                                        <div class="left">
                                            <big>Marathi<small> (native)</small></big>
                                        </div>
                                        <div class="right box fill"></div>
                                        <div class="right box fill"></div>
                                        <div class="right box fill"></div>
                                        <div class="right box fill"></div>
                                        <div class="right box unfill"></div>
                                    </div>
                                    <hr />
                                </div>
                                <div class="mar-md-10 lang-div">
                                    <div class="md-12">
                                        <div class="left">
                                            <big>Hindi</big>
                                        </div>
                                        <div class="right box fill"></div>
                                        <div class="right box fill"></div>
                                        <div class="right box fill"></div>
                                        <div class="right box unfill"></div>
                                        <div class="right box unfill"></div>
                                    </div>
                                    <hr />
                                </div>
                                <div class="mar-md-10 lang-div">
                                    <div class="md-12">
                                        <div class="left">
                                            <big>English</big>
                                        </div>
                                        <div class="right box fill"></div>
                                        <div class="right box fill"></div>
                                        <div class="right box unfill"></div>
                                        <div class="right box unfill"></div>
                                        <div class="right box unfill"></div>
                                    </div>
                                    <hr />
                                </div>
                            </div>
                        </div>

                        <div class="md-6">
                            <h2 class="null t-center">Knowledge</h2>
                            <div class="md-12">
                                <div class="mar-md-10 lang-div">
                                    <div class="md-12">
                                        <div class="left">
                                            <big>
                                                Custom website Design
                                            </big>
                                        </div>
                                        <div class="right box fill"></div>
                                        <div class="right box fill"></div>
                                        <div class="right box unfill"></div>
                                    </div>
                                    <hr />
                                </div>
                                <div class="mar-md-10 lang-div">
                                    <div class="md-12">
                                        <div class="left">
                                            <big>
                                                Template based Design
                                            </big>
                                        </div>
                                        <div class="right box fill"></div>
                                        <div class="right box fill"></div>
                                        <div class="right box unfill"></div>
                                    </div>
                                    <hr />
                                </div>
                            </div>
                        </div>


                    </div>
                    <hr class="double-hr"/>
                </div>
            </div>
            
            <div class="container d-center">
                <div class="md-12" id="contact_content">
                    <div class="upper md-12">

                        <div class="mar-md-5">
                            <div class="imgdiv md-5 t-center">
                                <img src="img/me1.jpg" class="d-center" />
                            </div>

                            <div class="imgdiv md-7 t-center">
                                <h1><big>CONTACT</big></h1>
                            </div>
                        </div>

                    </div>
                    <hr class="line-hr" />
                    <div class="md-12 t-center">
                        <table class="mar-md-9 q-table">
                            <tr>
                                <th><big>Address</big></th>
                                <td><big>Bhadane, Murbad, 421 401<br>Maharashtra</big></td>
                            </tr>
                            <tr>
                                <th><big>contact</big></th>
                                <td><big>+91 776-802-6045</big></td>
                            </tr>
                            <tr>
                                <th><big>E-mail</big></th>
                                <td><big>sujitdohalek5@gmail.com</big></td>
                            </tr>
                            <tr>
                                <th><big>Facebook</big></th>
                                <td>
                                    <big>
                                        <a href="https://www.facebook.com/sujit.dohale.7">https://www.facebook.com/sujit.dohale.7</a>
                                    </big>
                                </td>
                            </tr>
                            <tr>
                                <th><big>Instagram</big></th>
                                <td>
                                    <big>
                                        <a href="https://www.instagram.com/sujitdohalek5/">https://www.instagram.com/sujitdohalek5/</a>
                                    </big>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <hr />
                    <div class="md-12">
                        <form>
                            <div id="cdiv" class="d-center">
                                <h2 style="width: 100%; text-align: center;">Contact Me</h2>
                                <div class="outerpbar">
                                    <input class="iput" type="text" placeholder="E-mail" />
                                </div>
                                <div class="outerpbar">
                                    <input class="iput" type="text" placeholder="Subject" />
                                </div>
                                <div class="outerpbar">
                                    <textarea class="iput" placeholder="Write a message" ></textarea>
                                </div>
                                <div class="form-btn">
                                    <input class="btn" type="submit" value="SUBMIT" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <hr class="double-hr"/>
                </div>
            </div>
        </div>
        
        <div id="menu" class="menu">
            <ul> 
                <li id="home"> 
                    <a>Home</a>
                </li> 
                <li id="profile"> 
                    <a>Profile</a>
                </li> 
                <li id="resume"> 
                    <a>Resume</a>
                </li> 
                <li id="contact"> 
                    <a>Contact</a>
                </li> 
            </ul>
            <div id="menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
            </div>
        
    </body>
</html>
