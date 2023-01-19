@extends('dashboard.user.home')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<!-- gift card css add link start -->
<link href='//fonts.googleapis.com/css?family=Coming+Soon' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://f624058c3f5c8edb775a-dea6612566ec344afdf376d2faa6c82f.ssl.cf5.rackcdn.com/normalize-card.css" media="screen, projection" />
<link rel="stylesheet" href="https://f624058c3f5c8edb775a-dea6612566ec344afdf376d2faa6c82f.ssl.cf5.rackcdn.com/bookblock.css" media="screen, projection" />
<link rel="stylesheet" href="https://f624058c3f5c8edb775a-dea6612566ec344afdf376d2faa6c82f.ssl.cf5.rackcdn.com/card.css" media="screen, projection" />
<link rel="stylesheet" href="https://f624058c3f5c8edb775a-dea6612566ec344afdf376d2faa6c82f.ssl.cf5.rackcdn.com/print.css" media="print" />
<style type="text/css">
            .skt-gc-card-show .skt-gc-card .skt-gc-open-info p,
            .skt-gc-card-show .skt-gc-card #skt-gc-flipboard .skt-gc-desc .skt-gc-text p{
                font-family: sans-serif !important;
            }
            @media (max-width: 767px) {
                .skt-gc-card-show .skt-gc-card #skt-gc-flipboard .skt-gc-cover .skt-gc-open-info-mobile {
                    font-family: sans-serif !important;
                }
            }
        </style>
        
        <script src="https://f624058c3f5c8edb775a-dea6612566ec344afdf376d2faa6c82f.ssl.cf5.rackcdn.com/qr-code.js"></script>
<!-- gift card css add link end-->

<style>
    body{color: #000;overflow-x: hidden;height: 100%;;background-repeat: no-repeat;background-size: 100% 100%}.card{padding: 30px 40px;margin-top: 60px;margin-bottom: 60px;border: none !important;box-shadow: 0 6px 12px 0 rgba(0,0,0,0.2)}.blue-text{color: #00BCD4}.form-control-label{margin-bottom: 0}input, textarea, button{padding: 8px 15px;border-radius: 5px !important;margin: 5px 0px;box-sizing: border-box;border: 1px solid #ccc;font-size: 18px !important;font-weight: 300}input:focus, textarea:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;border: 1px solid #00BCD4;outline-width: 0;font-weight: 400}.btn-block{text-transform: uppercase;font-size: 15px !important;font-weight: 400;height: 43px;cursor: pointer}.btn-block:hover{color: #fff !important}button:focus{-moz-box-shadow: none !important;-webkit-box-shadow: none !important;box-shadow: none !important;outline-width: 0}


    .cdn_image input[type="file"] {
    display: none;

}
button.fancybox-button.fancybox-close-small {
    position: fixed;
    top: 0px;
    right: 98px;
    background: transparent linear-gradient(290deg, #3604B0 0%, #3501E9 100%) 0% 0% no-repeat padding-box;
    border-radius: 20;
}
span.infotext svg {
    width: 50%;
    cursor: pointer;
}
svg {
    overflow: hidden;
    vertical-align: middle;
   
}

</style>
<link href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css' rel='stylesheet' type='text/css'>
<div class="header pb-4 pt-5 pt-md-7" >
 
<div class="container-fluid ">
<a id="back_button_design" href="https://super_admin.test/skt-giftcard/design" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Back to Design list">
                                          <button type="button" class="btn btn-success">Back</button> 
                                          </a>
<div class="card" id="create_div_form">

                <h2 class="text-center mb-4">Create New Design</h2>
                <form id="design_create_save" class="form-card" onsubmit="event.preventDefault()">
                    <div class="row justify-content-between text-left">
                  
                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Title<span class="text-danger"> *</span></label> <input type="text" placeholder=" Title" id="title" name="title" value="" onblur="validate(1)"> 
                        <label class="form-control-label px-3">A descriptive title. It isn't seen by the end user, but it is seen by merchants in their app settings and for example on this page: https://gc.shopkeepertools.com/designs<span class="text-danger"> </span></label>
                    </div>
                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Slug<span class="text-danger"> *</span></label> <input readonly type="text" placeholder=" entre the slug" id="slug" name="slug" value="" onblur="validate(2)"> 
                        <label class="form-control-label px-3">This is the prefix of filenames. Use filename safe characters!! For BRANDED designs use 'branded-' prefix (ie. branded-daves-shop).<span class="text-danger"> </span></label>
                    </div>
                    <div class="form-group col-sm-12 flex-column d-flex">
                       
                       <label class="form-control-label px-3">Free?<span class="text-danger"> *</span></label>
                               {{ html()->select('published')
                                   ->options([0 => 'No', 1 => "Yes"])
                                   ->class('form-control')->name('free')->id('free')
                                    }}
                                    <label class="form-control-label px-3">Important! If this design is a BRANDED design, answer NO.<span class="text-danger"> </span></label>
                         
                       </div><!--form-group-->
                      
              
                        <div class="form-group col-sm-12 flex-column d-flex">
                       
                        <label class="form-control-label px-3">Published?<span class="text-danger"> *</span></label>
                                {{ html()->select('published')
                                    ->options([0 => 'No', 1 => "Yes"])
                                    ->class('form-control')->name('published')
                                     }}
                                     <label class="form-control-label px-3">Important! If this design is a BRANDED design, answer NO.<span class="text-danger"> </span></label>
                          
                        </div><!--form-group-->
              

                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Owned By<span class="text-danger"> *</span></label> <input type="text" placeholder=" Owned By" id="owned" name="owned" value="" onblur="validate(3)"> 
                        <label class="form-control-label px-3">Enter the Shop ID of who this BRANDED design is for. Leave blank for public design..<span class="text-danger"> </span></label>
                    </div>

                   
                        <div class="form-group col-sm-12 flex-column d-flex">
                      

                        
                            <label class="form-control-label px-3">Category Select <span class="text-danger"> *</span></label>
                                <select name="selected_categories[]" id="selected_categories" class="form-control select2" multiple="multiple">
                                 
                                        <option value=""></option>
                                   
                                </select>
                                <label class="form-control-label px-3">All designs must belong to at least 1 category<span class="text-danger"> </span></label>
                              
                                     
                        
                        </div><!--form-group-->
                 
                       <!-- image start div   -->
                       <div class="form-group col-md-8 col-lg-9">
                    <label for="designBackgroud">Background Image</label>
                    <div class="custom-file cdn_image">
                        <input  type="file" class="designBackgroud imageupload" name="designBackgroud" id="designBackgroud" placeholder="1200 × 800 px" aria-describedby="bgimagedesc">
                        <label class="custom-file-label" for="designBackgroud">abstract-color-bg.png</label>
                       
                      </div>
                      <small id="bgimagedesc" class="form-text text-danger font-weight-bold">Required image size 1200 × 800 px</small>
                  </div>
                  <div class="col-md-1 col-lg-1 mt-2"><span class="infotext"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 10-16 0 8 8 0 0016 0zm-9 3a1 1 0 102 0v-2a1 1 0 10-2 0v2zm0-6a1 1 0 102 0 1 1 0 00-2 0z" fill="#5C5F62"></path></svg></span></div>
                  <div class="col-md-3 col-lg-2 previewbg" style="display:block"><a href="javascript:;" data-src=""><span onclick="giftcardfunction()" class="badge badge-pill badge-light text-primary">show preview</span></a></div>
                   <!-- background image end  -->
                  
                   <!-- cover image start  -->
                       <div class="form-group col-md-8 col-lg-9">
                    <label for="designBackgroud">Cover Image</label>
                    <div class="custom-file cdn_image">
                        <input  type="file" name="designcover" class="designBackgroud imageupload" id="designcover" placeholder="480 × 686 px" aria-describedby="bgimagedesc">
                        <label class="custom-file-label" for="designcover">abstract-color-cover.png</label>
                       
                      </div>
                      <small id="bgimagedesc" class="form-text text-danger font-weight-bold"> Required image size 480 × 686 px</small>
                  </div>
                  <div class="col-md-1 col-lg-1 mt-2"><span class="infotext"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 10-16 0 8 8 0 0016 0zm-9 3a1 1 0 102 0v-2a1 1 0 10-2 0v2zm0-6a1 1 0 102 0 1 1 0 00-2 0z" fill="#5C5F62"></path></svg></span></div>
                  <div class="col-md-3 col-lg-2 previewcover" style="display:block"><a href="javascript:;" data-src=""><span onclick="giftcardfunction()" class="badge badge-pill badge-light text-primary">show preview</span></a></div>
                  <!-- cover image end  -->

                   <!-- Card image start  -->
                       <div class="form-group col-md-8 col-lg-9">
                    <label for="designBackgroud">Card Image</label>
                    <div class="custom-file cdn_image">
                        <input  type="file" name="designcard" class="designBackgroud imageupload" id="designcard" placeholder="400 × 239 px" aria-describedby="bgimagedesc">
                        <label class="custom-file-label" for="designcard">abstract-color-preview.png</label>
                       
                      </div>
                      <small id="bgimagedesc" class="form-text text-danger font-weight-bold">Required image size 400 × 239 px</small>
                  </div>
                  
                  <div class="col-md-1 col-lg-1 mt-2"><span class="infotext"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 10-16 0 8 8 0 0016 0zm-9 3a1 1 0 102 0v-2a1 1 0 10-2 0v2zm0-6a1 1 0 102 0 1 1 0 00-2 0z" fill="#5C5F62"></path></svg></span></div>
                  <div class="col-md-3 col-lg-2 previewcard" style="display:block"><a href="javascript:;" data-src=""><span onclick="giftcardfunction()" class="badge badge-pill badge-light text-primary">show preview</span></a></div>
                    <!-- card image end  -->
                  
                   <!-- print image start  -->
                       <div class="form-group col-md-8 col-lg-9">
                    <label for="designBackgroud">Print Image</label>
                    <div class="custom-file cdn_image">
                        <input name="designprint" type="file" class="designBackgroud imageupload" id="designprint" placeholder="243 × 153 px" aria-describedby="bgimagedesc">
                        <label class="custom-file-label" for="designprint">abstract-color-print.png</label>
                       
                      </div>
                      <small id="bgimagedesc" class="form-text text-danger font-weight-bold"> Required image size 243 × 153 px
                      </small>
                  </div> 
                  <div class="col-md-1 col-lg-1 mt-2"><span class="infotext"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 10-16 0 8 8 0 0016 0zm-9 3a1 1 0 102 0v-2a1 1 0 10-2 0v2zm0-6a1 1 0 102 0 1 1 0 00-2 0z" fill="#5C5F62"></path></svg></span></div>
                  <div class="col-md-3 col-lg-2 previewprintImage" style="display:block"><a href="javascript:;" data-src=""><span class="badge badge-pill badge-light text-primary" onclick="giftcardfunction()">show preview</span></a></div>
                   <!-- print image end  -->   
                </div>
               
                    
                
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-12"> <button class="btn btn-success profile-button" type="submit">Save </button> 
                        <p class="btn btn-primary profile-button" onclick="giftcardfunction()"><i class="fa fa-eye"></i></p>
                    </div>
                    </div>
                </form>
                <div class="row justify-content-end">
                        <div class="form-group col-sm-12">
                            
                        
                    </div>
                    </div>
            </div>

           
</div></div></div>

<script type="text/javascript">
    function validate(val) {
        v1 = document.getElementById("title");
            v2 = document.getElementById("slug");
            v3 = document.getElementById("owned");
            // v4 = document.getElementById("owned");
            v5 = document.getElementById("selected_categories");
    // v6 = document.getElementById("ans");

    flag1 = true;
    flag2 = true;
    flag3 = true;
    // flag4 = true;
    // flag5 = true;
    // flag6 = true;

    if(val>=1 || val==0) {
        if(v1.value == "") {
            v1.style.borderColor = "red";
            flag1 = false;
        }
        else {
            v1.style.borderColor = "green";
            flag1 = true;
        }
    }

    if(val>=2 || val==0) {
        if(v2.value == "") {
            v2.style.borderColor = "red";
            flag2 = false;
        }
        else {
            v2.style.borderColor = "green";
            flag2 = true;
        }
    }
    if(val>=3 || val==0) {
        if(v3.value == "") {
            v3.style.borderColor = "red";
            flag3 = false;
        }
        else {
            v3.style.borderColor = "green";
            flag3 = true;
        }
    }
  
   

    flag = flag1 && flag2  && flag3 

    return flag;
}





</script>

<!-- gift card section start  -->
<div id="gift_card_div" style="display:none;">

<section class="skt-gc-card-show">
<div class="row justify-content-end">
<button onclick="backtoformfun()" type="button" data-fancybox-close="" class="fancybox-button fancybox-close-small" title="Close"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path></svg></button>
                    
                    </div>
                   
<section class="skt-gc-card" style="background-image: url( {{asset('./giftcardimage/1200x800.png')}});">
<div class="skt-gc-print">
<h2><strong>Instructions:</strong> Cut out gift card and store in your wallet or purse for easy use.</h2>
<div class="skt-gc-shop-message" style="text-align:center"></div>
<div class="skt-gc-print-message">Just thought you would really enjoy this gift card to this great shop I found.</div>
<div class="skt-gc-box-top">
<img id="skt_gc_img_print-bg" src="https://9cba5880bc14451f9693-e0fe15aac731c5feebe40b7a92b75181.ssl.cf5.rackcdn.com/birthday-cake-sketch-print-bg.png" alt="Cover of Card">
</div>
</div>
<div class="skt-gc-container">
<div class="skt-gc-open-info">
<img id="skt_gc_img_open-arrow" src="https://9cba5880bc14451f9693-e0fe15aac731c5feebe40b7a92b75181.ssl.cf5.rackcdn.com/open-arrow.png" alt="Open this card">
<p>Open</p>
</div>
<div id="skt-gc-flipboard" class="bb-bookblock">
<div class="bb-item">
<div class="bb-custom-side skt-gc-transparent">
</div>
<div class="bb-custom-side skt-gc-cover">
<img id="skt_gc_img_cover" src="{{asset('./giftcardimage/480x686.png')}}" alt="Cover card">
<div class="skt-gc-open-info-mobile">
Scroll down to open
</div>
</div>
</div>
<div class="bb-item">
<div class="bb-custom-side skt-gc-desc">
<div class="skt-gc-text">
<div class="skt-gc-shop-message" style="text-align:center"></div>
<p>From: Jim</p>
</div>
</div>
<div class="bb-custom-side skt-gc-info">
<div class="skt-gc-content">
<h2></h2>
<div class="skt-gc-card-img">
<img id="skt_gc_img_card" src="{{asset('./giftcardimage/400x239.png')}}" alt="Card">
<div class="skt-gc-price">
$100
</div>
</div>
<div class="skt-gc-card-code">
<span>Gift Card Code</span>
<h3>1234abcdefgh</h3>
</div>
<section class="skt-gc-barcode">
<a href="https://gift-cards.shopkeepertools.com/qr/This is a Demo Giftcard only"><div id="qr-code"></div></a>
<script>
                                                new QRCode(document.getElementById("qr-code"), {
                                                text: "This is a Demo Giftcard only",
                                                width: 80,
                                                height: 80
                                                });
                                            </script>
<ul>
<div class="skt-gc-noprint">
<li><a href="#" id="skt-gc-terms">Terms &amp; Conditions</a></li>
<li><a href="#" id="skt-gc-privacy">Privacy</a></li>
<li><a href="javascript:window.print();">Print Gift Card</a></li>
</div>
<div class="skt-gc-print" style="display:none">
<li>Initial Value $100<br />
</li>
</div>
</ul>
</section>
</div>
</div>
</div>
</div>
<section class="skt-gc-terms-cond">
<a href="#" class="skt-gc-close">&times;</a>
<div class="skt-gc-content">
<h2>Gift Card Terms &amp; Conditions</h2>
<p>Terms and Conditions</p>
<p><a href="#" class="skt-gc-close">Close this window</a></p>
</div>
</section>
<section class="skt-gc-privacy-box skt-gc-noprint">
<a href="#" class="skt-gc-close">&times;</a>
<div class="skt-gc-content">
<h2>Privacy Policy</h2>
<p>For more information about how your personal information is used on this gift card, please see our store privacy policy
.
</p>
<p><a href="#" class="skt-gc-close">Close this window</a></p>
</div>
</section>
</div>
</section>
</section>
<div id="layouts" style="display:none">
</div>
</div>



<!-- gift card section end  -->

<!-- //========= select 2 code script start =========// -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {


console.log('select2')
    $(".select2").select2();


});


    // slug creation from title
    jQuery(document).on('keyup','#title',function(){

const slug =  jQuery(this).val().toString().toLowerCase()
           .replace(/\s+/g, '-')           // Replace spaces with -
           .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
           .replace(/\-\-+/g, '-')         // Replace multiple - with single -
           .replace(/^-+/, '')             // Trim - from start of text
           .replace(/-+$/, '');            // Trim - from end of text
jQuery(this).parents('form').find('#slug').val(slug);
});

// save custom design

</script>
<!-- //========= select 2 code script start =========// -->
<script >
    function giftcardfunction(){
        console.log("GiftCard function");
        var giftcard_div = document.getElementById('gift_card_div'); 
        var navbar_main = document.getElementById('navbar-main'); 
        var sidenav_main = document.getElementById('sidenav-main'); 
        var create_div_form = document.getElementById('create_div_form'); 
        var back_button_design = document.getElementById('back_button_design'); 
       
        giftcard_div.style.display = 'block';
        navbar_main.style.display = 'none';
        sidenav_main.style.display = 'none';
        create_div_form.style.display = 'none';
        back_button_design.style.display = 'none';
    }
    function backtoformfun(){
        console.log("GiftCard function");
        var giftcard_div = document.getElementById('gift_card_div'); 
        var navbar_main = document.getElementById('navbar-main'); 
        var sidenav_main = document.getElementById('sidenav-main'); 
        var create_div_form = document.getElementById('create_div_form'); 
        var back_button_design = document.getElementById('back_button_design'); 

        giftcard_div.style.display = 'none';
        navbar_main.style.display = 'block';
        sidenav_main.style.display = 'block';
        create_div_form.style.display = 'block';
        back_button_design.style.display = 'block';
    }
</script>
<!-- image check condtion end  -->
<!-- gift card script add  -->
<script type="text/javascript">
            $('head').append("<style type='text/css'>.skt-gc-card-show .skt-gc-card .skt-gc-open-info p,.skt-gc-card-show .skt-gc-card #skt-gc-flipboard .skt-gc-desc .skt-gc-text p{font-family: sans-serif !important;}@media (max-width: 767px) {.skt-gc-card-show .skt-gc-card #skt-gc-flipboard .skt-gc-cover .skt-gc-open-info-mobile {font-family: sans-serif !important;}}</style>");
        </script>
<script src="https://f624058c3f5c8edb775a-dea6612566ec344afdf376d2faa6c82f.ssl.cf5.rackcdn.com/modernizr.custom.js"></script>
<script src="https://f624058c3f5c8edb775a-dea6612566ec344afdf376d2faa6c82f.ssl.cf5.rackcdn.com/jquerypp.custom.js"></script>
<script src="https://f624058c3f5c8edb775a-dea6612566ec344afdf376d2faa6c82f.ssl.cf5.rackcdn.com/jquery.bookblock.min.js"></script>
<script src="https://f624058c3f5c8edb775a-dea6612566ec344afdf376d2faa6c82f.ssl.cf5.rackcdn.com/giftcard-view.scripts.js"></script>

<!-- gift card script add end  -->




@endsection







