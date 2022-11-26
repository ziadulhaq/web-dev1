<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandladesh.gov.bd</title>
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri()?> ./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri()  ?>">
</head>
<body>
    <!-- top -->
   <header>
    <div class="cont top">
        <div class="row">
            <div class="col-lg-6 top_left">
                <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
            </div>
            <div class="col-lg-6 top_right d-flex justify-content-end">
                <p>৮ অগ্রহায়ণ, ১৪২৯</p>
                <a href="">English</a>
            </div>
        </div>
    </div>
   </header>
    <!-- top end -->
    <!-- logo -->
   <section>
    <div class="cont">
        <div class="row logo">
            <div class="col-lg-5 logoleft">
                <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/haeder/logo_bn.png" alt=""></a>
            </div>
            <div class="col-lg-5 search">
                <input type="text" placeholder="খুঁজুন ">
                <button>অনুসন্ধান</button>
            </div>
            <div class="col-lg-2 logoright d-flex justify-content-end">
                <div class="logo1">
                    <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/haeder/a2i-logo-footer.png" alt=""></a>
                </div>
                <div class="logo2">
                    <p>সাথে থাকুন:</p>
                    <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/haeder/facebook-icon.png" alt=""></a>
                    <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/haeder/twitter-blue-icon.png" alt=""></a>
                    <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/haeder/youtube-icon.png" alt=""></a>
                    <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/haeder/gplus-icon.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
   </section>
    <!-- logo end -->
    <!-- menu -->
    <div class="cont">
        <div class="row menu">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">হোম</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">বাংলাদেশ সম্পর্কিত</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">ই-সেবাসমূহ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">সেবাখাত</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">ব্যবসা-বাণিজ্য</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"> বৈদেশিক বিনিয়োগ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">আইন-বিধি</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">তথ্য বাতায়ন</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">সেবাকুঞ্জ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">ফরমস</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </div>
    <!-- menu end -->
    <div class="cont">
      <div class="row">
        <div class="col-lg-8">
          <div class="banner">
            <img src="<?php echo get_template_directory_uri()?>./assets/images/padmabanner.jpg" class="d-block w-100" alt="">
          </div>
          <div class="slider">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?php echo get_template_directory_uri()?>./assets/images/slider/4-02.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?php echo get_template_directory_uri()?>./assets/images/slider/6.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?php echo get_template_directory_uri()?>./assets/images/slider/Banner-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?php echo get_template_directory_uri()?>./assets/images/slider/corona_banner.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
          </div>
          <div class="tabs">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">জনপ্রিয় সেবা</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">নতুন সেবা</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">দপ্তর ভিত্তিক সেবা</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-disabled1-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled1" type="button" role="tab" aria-controls="pills-disabled1" aria-selected="false">সকল ই-সেবা</button>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <div class="row tabsin">
                  <div class="col-lg-2">
                    <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/tab/agriculture.png" alt=""></a>
                    <p>কৃষি</p>
                  </div>
                  <div class="col-lg-2">
                    <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/tab/call_center.png" alt=""></a>
                    <p>কল সেন্টার</p>
                  </div>
                  <div class="col-lg-2">
                    <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/tab/helpdesk.png" alt=""></a>
                    <p>হেল্পডেস্ক</p>
                  </div>
                  <div class="col-lg-2">
                    <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/tab/mobile_service.png" alt=""></a>
                    <p>মোবাইল সেবা</p>
                  </div>
                  <div class="col-lg-2">
                    <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/tab/agriculture.png" alt=""></a>
                    <p>মৎস্য ও প্রাণী</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <div class="row tabsin">
                  <div class="col-lg-2">
                    <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/tab/agriculture.png" alt=""></a>
                    <p>কৃষি</p>
                  </div>
                  <div class="col-lg-2">
                    <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/tab/call_center.png" alt=""></a>
                    <p>কল সেন্টার</p>
                  </div>
                  <div class="col-lg-2">
                    <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/tab/helpdesk.png" alt=""></a>
                    <p>হেল্পডেস্ক</p>
                  </div>
                  <div class="col-lg-2">
                    <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/tab/mobile_service.png" alt=""></a>
                    <p>মোবাইল সেবা</p>
                  </div>
                  <div class="col-lg-2">
                    <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/tab/agriculture.png" alt=""></a>
                    <p>মৎস্য ও প্রাণী</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">C</div>
              <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">D</div>
              <div class="tab-pane fade" id="pills-disabled1" role="tabpanel" aria-labelledby="pills-disabled1-tab" tabindex="0">E</div>
            </div>
            </div>
            <div class="notice">
            <h5>উদ্যোগ</h5>
            <ul>
              <li><a href=""> বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a></li>
              <li><a href="">বাংলাদেশে ঘূর্ণিঝড়ের জরুরি প্রস্তুতি পরিকল্পনা।</a></li>
              <li><a href="">বাংলাদেশ সরকারের ষষ্ঠ পঞ্চবার্ষিক পরিকল্পনা। </a></li>
              <li><a href="">বাংলাদেশ সরকারের প্রেক্ষিত পরিকল্পনা (২০১০-২০২১)।</a></li>
              <li><a href="">দূর্যোগ ব্যবস্থাপনা জন্য জাতীয় পরিকল্পনা ২০১০-২০১৫।</a></li>
            </ul>
            <button>সকল</button>
            </div>
            <div class="row">
              <div class="col-lg-4 pt-2">
                <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/down_left/ebook_bangla (1).png" alt=""></a>
              </div>
              <div class="col-lg-4 pt-2">
                <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/down_left/forms_portal_logo (1).png" alt=""></a>
              </div>
              <div class="col-lg-4 pt-2">
                <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/down_left/infokosh-logo (1).png" alt=""></a>
              </div>
              <div class="col-lg-4 pt-2">
                <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/down_left/Konnect Logo.png" class="d-block w-100" alt=""></a>
              </div>
              <div class="col-lg-4 pt-2">
                <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/down_left/logo_0_0.png" class="d-block w-100" alt=""></a>
              </div>
              <div class="col-lg-4 pt-2">
                <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/down_left/MP logo.png" class="d-block w-100" alt=""></a>
              </div>
              <div class="col-lg-4 pt-2">
                <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/down_left/services_portal_bn.png" class="d-block w-100" alt=""></a>
              </div>
              <div class="col-lg-4 pt-2">
                <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/down_left/TP main-logo.png" class="d-block w-100" alt=""></a>
              </div>
              <div class="col-lg-4 pt-2">
                <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/down_left/vision_2021_bn.png" class="d-block w-100" alt=""></a>
              </div>
              <div class="col-lg-4 pt-2">
                <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/down_left/visit-bangladesh-logo (1).png" class="d-block w-100" alt=""></a>
              </div>
              
            </div>
        </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/Bangladesh-Directory.jpg" class="d-block w-100 pt-1" alt=""></a>
              <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/bangladesh-portal--batton-bangla.png" class="d-block w-100 pt-1" alt=""></a>
              <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/discount_bn.jpg" class="d-block w-100 pt-1" alt=""></a>
              <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/Jonotar-Sorkar-banner-Bangl (1).jpg" class="d-block w-100 pt-1" alt=""></a>
              <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/mygov_bn.jpg" class="d-block w-100 pt-1" alt=""></a>
              <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/prottyon.jpg" class="d-block w-100 pt-1" alt=""></a>
              <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/Tamplate_Apps_bn (5).png" class="d-block w-100 pt-1" alt=""></a>
              <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/Tamplate_Dictonary_bn.png" class="d-block w-100 pt-1" alt=""></a>
              <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/Tamplate_fund_bn.png" class="d-block w-100 pt-1" alt=""></a>
              <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/Tamplate_govtjob_bn.png" class="d-block w-100 pt-1" alt=""></a>
              <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/Tamplate_guard_bn.png" class="d-block w-100 pt-1" alt=""></a>
              <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/Tamplate_inherit_bn (4).png" class="d-block w-100 pt-1" alt=""></a>
              <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/Tamplate_policy_bn.png" class="d-block w-100 pt-1" alt=""></a>
              <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidebar/Tamplate_security_bn (1).png" class="d-block w-100 pt-1" alt=""></a>
              
            </div>
            <div class="sidedown pt-4 pb-4">
              <h5>সকল বাতায়ন</h5>
              <select name="" id="">
                <option value="">ওয়েবসাইট বাছাই করুন</option>
                <option value="">ঢাকা বিভাগ</option>
                <option value="">চট্টগ্রাম বিভাগ</option>
                <option value="">রাজশাহী বিভাগ</option>
                <option value="">খুলনা বিভাগ</option>
                <option value="">বরিশাল বিভাগ</option>
                <option value="">রংপুর বিভাগ</option>
              </select>
              <button>চলুন</button>
             
            </div>
            <div class="downside">
              <h6>মুজিব১০০ আ্যাপ</h6>
              <iframe width="315" height="200" src="<?php echo get_template_directory_uri()?>https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <h6>মাস্ক পরুন সেবা নিন</h6>
              <div class="vajal"> <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidedown/mask-bd-portal (1).jpg" class="d-block w-100" alt=""></a></div>
              <h5>ডেঙ্গু প্রতিরোধে করণীয়</h5>
              <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidedown/dengu.jpg" class=" w-100 " alt=""></a>
              <h5>ডিজিটাল বাংলাদেশ এর এগিয়ে যাওয়ার ১২ বছর</h5>
              <iframe width="315" height="220" src="<?php echo get_template_directory_uri()?>https://www.youtube.com/embed/B0FgrYBE4uY" title="মাননীয় প্রধানমন্ত্রী জননেত্রী শেখ হাসিনার নেতৃত্বে ডিজিটাল বাংলাদেশ এর এগিয়ে যাওয়ার ১২ বছর।" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidedown/budget_bn_new.png" class="d-block w-100 pt-2" alt=""></a>
              <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidedown/currency_bangla (1).png" class="d-block w-100 pt-2" alt=""></a>
              <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidedown/stock_bangla.png" class="d-block w-100 pt-2" alt=""></a>
              <a href=""><img src="<?php echo get_template_directory_uri()?>./assets/images/sidedown/weather_bn.png" class="d-block w-100 pt-2" alt=""></a>
            </div>
          </div>
      </div>
    </div>
     <footer>
     <div class="cont">
      <div class="row">
        <img src="<?php echo get_template_directory_uri()?>./assets/images/footer/download.png" class="pt-5" alt="">
        <div class="col-lg-7 fdown">
          <nav class="navbar navbar-expand-lg bg-light fmenu">
            <div class="container-fluid">
            
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">হোম</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">বাংলাদেশ সম্পর্কিত</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">ই-সেবাসমূহ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">সেবাখাত</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">ব্যবসা-বাণিজ্য</a>
                  </li>
                 
                </ul>
              </div>
            </div>
          </nav>
          <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২২-১০-৩০ ০৮:৩৫:০১</p>
        </div>
        <div class="col-lg-5 pt-2 pe-0 ffdown">
          <p>পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসিটি</p>
          <img src="<?php echo get_template_directory_uri()?>./assets/images/footer/np-logo-set.png" alt="">
        </div>
      </div>
     </div>
     
     </footer>
  <script src="<?php echo get_template_directory_uri()?>./assets/js/bootstrap.bundle.min.js"></script>  
</body>
</html>