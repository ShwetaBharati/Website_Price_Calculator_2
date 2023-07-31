@extends('frontend/layout')
@section('container')
    <div id="website_layout">
        <!-- ============================================================== -->
        <!-- Start Left Content Here -->
        <!-- ============================================================== -->
        <div class="tab_section">
            <div class="d-flex">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <div class="left_tab_content">
                        <button class="nav-link active" id="v-pills-dashboard-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-dashboard" type="button" role="tab"
                            aria-controls="v-pills-dashboard" aria-selected="true">DASHBOARD</button>
                        <button class="nav-link" id="v-pills-calculator-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-calculator" type="button" role="tab"
                            aria-controls="v-pills-calculator" aria-selected="false">CALCULATOR</button>
                        <button class="nav-link" id="v-pills-seo-roi-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-seo-roi" type="button" role="tab" aria-controls="v-pills-seo-roi"
                            aria-selected="false">SEO ROI</button>
                        <button class="nav-link" id="v-pills-roi-tab" data-bs-toggle="pill" data-bs-target="#v-pills-roi"
                            type="button" role="tab" aria-controls="v-pills-roi" aria-selected="false">ROI</button>
                        <button class="nav-link" id="v-pills-contact-tab" data-bs-toggle="pill" data-bs-target="#v-pills-contact"
                            type="button" role="tab" aria-controls="v-pills-contact" aria-selected="false">CONTACT</button>
                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-settings" type="button" role="tab"
                            aria-controls="v-pills-settings" aria-selected="false">SETTINGS</button>
                    </div>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <!-- ============================================================== Start Dashboard Section ============================================================== -->
                    <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel"
                        aria-labelledby="v-pills-dashboard-tab">
                        <div class="right_tab_content">
                            <div class="body_section">
                                <div class="banner">
                                    <img src="{{ asset('frontend_assets/img/banner.png') }}">
                                    <div class="banner_title">
                                        <h1 class="text-center">Website Dashboard</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== End Dashboard Section ============================================================== -->

                    <!-- ============================================================== Start Calculation Section ============================================================== -->
                    <div class="tab-pane fade" id="v-pills-calculator" role="tabpanel"
                        aria-labelledby="v-pills-calculator-tab">
                        <div class="right_tab_content">
                            <div class="body_section">
                                <div class="banner">
                                    <img src="{{ asset('frontend_assets/img/banner.png') }}">
                                    <div class="banner_title">
                                        <h1 class="text-center">Website Price Calculator</h1>
                                    </div>
                                </div>
                                <div class="multi_form_section">
                                    <div class="row pt-2">
                                        <div class="col-lg-8">
                                            <div class="form_section" id="">
                                                <div class="form_section_panel1">
                                                    {{-- Row1 --}}
                                                    <div class="row websiteTypeHead" data-head="Website Type :"">
                                                        <div class="col-lg-12">
                                                            <div class="question"> Are You Looking For? </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="websiteType" value="website" type="checkbox"
                                                                class="allPriceClicked websiteType" value="static"
                                                                data-price="10000" data-inputType="radio"
                                                                data-outPrint="Static" data-id="websiteType">
                                                            <label for="static"
                                                                class="radio-inline check mb-1">Static</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="websiteType" value="dynamic" type="checkbox"
                                                                class="allPriceClicked websiteType" value="dynamic"
                                                                data-price="20000" data-inputType="radio"
                                                                data-outPrint="Dynamic" data-id="websiteType">
                                                            <label for="dynamic"
                                                                class="radio-inline check mb-1">Dynamic</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="websiteType" value="corporate" type="checkbox"
                                                                class="allPriceClicked websiteType" value="corporate"
                                                                data-price="30000" data-inputType="radio"
                                                                data-outPrint="Corporate" data-id="websiteType">
                                                            <label for="corporate"
                                                                class="radio-inline check mb-1">Corporate</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="websiteType" value="ecommerce" type="checkbox"
                                                                class="allPriceClicked websiteType" value="ecommerce"
                                                                data-price="40000" data-inputType="radio"
                                                                data-outPrint="E-Commerce" data-id="websiteType">
                                                            <label for="ecommerce"
                                                                class="radio-inline check mb-1">E_Commerce</label>
                                                        </div>
                                                    </div>
                                                    {{-- Row2 --}}
                                                    <div class="row noPagesHead" data-head="Number Of Pages :">
                                                        <div class="col-lg-12">
                                                            <div class="question">
                                                                Number Of Pages
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="noPage" type="checkbox"
                                                                class="valid allPriceClicked noPages" value="1-4"
                                                                data-id="noPages" data-price="2000"
                                                                data-inputType="radio" data-outPrint="1 - 4">
                                                            <label for="" class="control-label mb-1">1 - 4</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="noPage" type="checkbox"
                                                                class="valid allPriceClicked noPages" value="5-8"
                                                                data-id="noPages" data-price="4000"
                                                                data-inputType="radio" data-outPrint="5 - 8">
                                                            <label for="" class="control-label mb-1">5 - 8</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="noPage" type="checkbox"
                                                                class="valid allPriceClicked noPages" value="9-20"
                                                                data-id="noPages" data-price="6000"
                                                                data-inputType="radio" data-outPrint="9 - 20">
                                                            <label for="" class="control-label mb-1">9 -
                                                                20</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="noPage" type="checkbox"
                                                                class="valid allPriceClicked noPages" value="unlimited"
                                                                data-id="noPages" data-price="8000"
                                                                data-inputType="radio" data-head="Unlimited">
                                                            <label for=""
                                                                class="control-label mb-1">Unlimited</label>
                                                        </div>
                                                    </div>
                                                    {{-- Row3 --}}
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 allDomainHead" data-head="Domain :">
                                                            <div class="question">
                                                                Do You Want Domain?
                                                            </div>
                                                            <input name="domain" type="checkbox"
                                                                class="valid allPriceClicked allDomain" value="domain"
                                                                data-id="allDomain" data-price="3000"
                                                                data-outPrint="Yes">
                                                            <label for="domain" class="control-label mb-1">Yes</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 allHostingsHead"
                                                            data-head="Hosting :">
                                                            <div class="question">
                                                                Do You Want Hosting?
                                                            </div>
                                                            <input name="hosting" type="checkbox"
                                                                class="valid allPriceClicked allHostings" value="hosting"
                                                                data-id="allHostings" data-price="2500"
                                                                data-outPrint="Yes">
                                                            <label for="hosting" class="control-label mb-1">Yes</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 emailIdsHead"
                                                            data-head="Official Email :">
                                                            <div class="question">
                                                                Do You Want Offical Email Ids?
                                                            </div>
                                                            <input name="officialEmail" type="checkbox"
                                                                class="valid allPriceClicked emailIds" value="email"
                                                                data-id="emailIds" data-price="1500" data-outPrint="Yes">
                                                            <label for="email" class="control-label mb-1">Yes</label>
                                                        </div>
                                                    </div>
                                                    {{-- Row4 --}}
                                                    <div class="row allPagesHead" data-head="Pages :">
                                                        <div class="row allPagesList">
                                                            <div class="col-lg-12">
                                                                <div class="question">
                                                                    Pages Name
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6">
                                                                <input name="pagesName" type="checkbox"
                                                                    class="cc-name valid allPriceClicked allPages"
                                                                    value="Home" data-price="800" data-id="allPages"
                                                                    data-outPrint="Home">
                                                                <label for=""
                                                                    class="control-label mb-1">Home</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6">
                                                                <input name="pagesName" type="checkbox"
                                                                    class="cc-name valid allPriceClicked allPages"
                                                                    value="About" data-price="800" data-id="allPages"
                                                                    data-outPrint="About">
                                                                <label for=""
                                                                    class="control-label mb-1">About</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6">
                                                                <input name="pagesName" type="checkbox"
                                                                    class="cc-name valid allPriceClicked allPages"
                                                                    value="Services" data-price="800" data-id="allPages"
                                                                    data-outPrint="Services">
                                                                <label for=""
                                                                    class="control-label mb-1">Services</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6">
                                                                <input name="pagesName" type="checkbox"
                                                                    class="cc-name valid allPriceClicked allPages"
                                                                    value="Blog" data-price="800" data-id="allPages"
                                                                    data-outPrint="Blog">
                                                                <label for=""
                                                                    class="control-label mb-1">Blog</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6">
                                                                <input name="pagesName" type="checkbox"
                                                                    class="cc-name valid allPriceClicked allPages"
                                                                    value="Contact" data-price="800" data-id="allPages"
                                                                    data-outPrint="Contact">
                                                                <label for=""
                                                                    class="control-label mb-1">Contact</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6">
                                                                <input name="pagesName" type="checkbox"
                                                                    class="cc-name valid allPriceClicked allPages"
                                                                    value="Product" data-price="800" data-id="allPages"
                                                                    data-outPrint="Product">
                                                                <label for=""
                                                                    class="control-label mb-1">Product</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6">
                                                                <input name="pagesName" type="checkbox"
                                                                    class="cc-name valid allPriceClicked allPages"
                                                                    value="Teams" data-price="800" data-id="allPages"
                                                                    data-outPrint="Teams">
                                                                <label for=""
                                                                    class="control-label mb-1">Teams</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6">
                                                                <input name="pagesName" type="checkbox"
                                                                    class="cc-name valid allPriceClicked allPages"
                                                                    value="News" data-price="800" data-id="allPages"
                                                                    data-outPrint="News">
                                                                <label for=""
                                                                    class="control-label mb-1">News</label>
                                                            </div>
                                                            <div id="more_page"></div>
                                                            <div class="col-md-12 mb-2">
                                                                <button id="addpage">Add Page</button>
                                                                <button id="removepage">Remove Page</button>
                                                                <span id="error_msg"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- Row5 --}}
                                                    <div class="row specialReqHead" data-head="Special Requriments :">
                                                        <div class="col-lg-12">
                                                            <div class="question">
                                                                Special Requriment
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="specialReq" type="checkbox"
                                                                class="cc-name valid allPriceClicked specialReq"
                                                                data-price="300" data-id="specialReq"
                                                                data-outPrint="Seo Friendly">
                                                            <label for="" class="control-label mb-1">Seo
                                                                Friendly</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="specialReq" type="checkbox"
                                                                class="cc-name valid allPriceClicked specialReq"
                                                                value="On Page Seo" data-price="300" data-id="specialReq"
                                                                data-outPrint="On Page Seo">
                                                            <label for="" class="control-label mb-1">On Page
                                                                Seo</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="specialReq" type="checkbox"
                                                                class="cc-name valid allPriceClicked specialReq"
                                                                value="Enquiry" data-price="300" data-id="specialReq"
                                                                data-outPrint="Enquiry">
                                                            <label for=""
                                                                class="control-label mb-1">Enquiry</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="specialReq" type="checkbox"
                                                                class="cc-name valid allPriceClicked specialReq"
                                                                value="Banner" data-price="300" data-id="specialReq"
                                                                data-outPrint="Banner">
                                                            <label for=""
                                                                class="control-label mb-1">Banner</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="specialReq" type="checkbox"
                                                                class="cc-name valid allPriceClicked specialReq"
                                                                value="Manage Page" data-price="300" data-id="specialReq"
                                                                data-outPrint="Manage Page">
                                                            <label for="" class="control-label mb-1">Manage
                                                                Page</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="specialReq" type="checkbox"
                                                                class="cc-name valid allPriceClicked specialReq"
                                                                value="Edit Pages" data-price="300" data-id="specialReq"
                                                                data-outPrint="Edit Pages">
                                                            <label for="" class="control-label mb-1">Edit
                                                                Pages</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="specialReq" type="checkbox"
                                                                class="cc-name valid allPriceClicked specialReq"
                                                                value="Social Media" data-price="300"
                                                                data-id="specialReq" data-outPrint="Social Media">
                                                            <label for="" class="control-label mb-1">Social
                                                                Media</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="specialReq" type="checkbox"
                                                                class="cc-name valid allPriceClicked specialReq"
                                                                value="Admin Pannel" data-price="300"
                                                                data-id="specialReq" data-outPrint="Admin Pannel">
                                                            <label for="" class="control-label mb-1">Admin
                                                                Pannel</label>
                                                        </div>
                                                        <div id="more_specific_page"></div>
                                                        <div class="col-md-12 mb-2">
                                                            <button id="add_specific_page">Add Requirement</button>
                                                            <button id="remove_specific_page">Remove
                                                                Requirement</button>
                                                            <span id="error_msg"></span>
                                                        </div>
                                                    </div>
                                                    {{-- Row6 --}}
                                                    <div class="row techUsedHead" data-head="Technogies Used :">
                                                        <div class="col-lg-12">
                                                            <div class="question">
                                                                Technology
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="techUsed" type="checkbox"
                                                                class="cc-name valid techUsed allPriceClicked"
                                                                value="HTML" data-outPrint="HTML" data-id="techUsed"
                                                                data-price="2000">
                                                            <label for="" class="control-label mb-1">HTML</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="techUsed" type="checkbox"
                                                                class="cc-name valid techUsed allPriceClicked"
                                                                value="CSS" data-outPrint="CSS" data-id="techUsed"
                                                                data-price="2100">
                                                            <label for="" class="control-label mb-1">CSS</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="techUsed" type="checkbox"
                                                                class="cc-name valid techUsed allPriceClicked"
                                                                value="JS" data-outPrint="JS" data-id="techUsed"
                                                                data-price="2200">
                                                            <label for="" class="control-label mb-1">JS</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="techUsed" type="checkbox"
                                                                class="cc-name valid techUsed allPriceClicked"
                                                                value="JQUERY" data-outPrint="JQUERY" data-id="techUsed"
                                                                data-price="2300">
                                                            <label for=""
                                                                class="control-label mb-1">JQUERY</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="techUsed" type="checkbox"
                                                                class="cc-name valid techUsed allPriceClicked"
                                                                value="PHP" data-outPrint="PHP" data-id="techUsed"
                                                                data-price="2400">
                                                            <label for="" class="control-label mb-1">PHP</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <input name="techUsed" type="checkbox"
                                                                class="cc-name valid techUsed allPriceClicked"
                                                                value="MYSQL" data-outPrint="MYSQL" data-id="techUsed"
                                                                data-price="2500">
                                                            <label for="" class="control-label mb-1">MYSQL</label>
                                                        </div>
                                                    </div>
                                                    {{-- Row7 --}}
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-6">
                                                            <div class="question">
                                                                Extra Requirement
                                                            </div>
                                                            <textarea placeholder="Write Here......" id="extra_requirement" rows="6"></textarea>
                                                        </div>
                                                        {{-- <div class="col-lg-4 col-md-6">
                                                            <div class="question">
                                                                Attachment File
                                                                <span class="add_more">Add More</span>
                                                            </div>
                                                            <div class="more_file">
                                                                <div class="file_attach">
                                                                    <div class="file_upload btn btn-primary">
                                                                        <span>
                                                                            <ion-icon name="cloud-upload-outline">
                                                                            </ion-icon>
                                                                        </span>
                                                                       <input type="file" name="file_attachment" id="file_attachment" class="upload">
                                                                    </div>
                                                                    <input type="text" id="fileuploadurl" readonly
                                                                        placeholder="Max File Size is 1GB">
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 sticky">
                                            <div class="form_section_panel2">
                                                <div class="result_section">
                                                    <div class="shipping_item_details">
                                                        <div class="result_content">
                                                            <div class="result_text"> Your Order </div>
                                                        </div>
                                                        <div class="payment_detail">
                                                            <div class="cart_payment_detail">
                                                                <div class="card_detail">
                                                                    <div class="quotation"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="payment_detail_tab1"
                                                        style="display: block !important;">
                                                        <div class="name">Total = <span class="priceOut"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="payment_detail_tab1" style="display: block;">
                                                    <button>Proceed To Pay</button>
                                                    <button type="reset" id="reset" value="Reset data"
                                                        onClick="resetdata()">Reset</button>
                                                </div>
                                                <div class="download">
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#download">Download Quotation <i
                                                            class="fa fa-download" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== End Calculation Section ============================================================== -->

                    <!-- ============================================================== Start SEO ROI Section ============================================================== -->
                    <div class="tab-pane fade" id="v-pills-seo-roi" role="tabpanel"
                        aria-labelledby="v-pills-seo-roi-tab">
                        <div class="right_tab_content">
                            <div class="body_section">
                                <div class="banner">
                                    <img src="{{ asset('frontend_assets/img/banner.png') }}">
                                    <div class="banner_title">
                                        <h1 class="text-center">ROI Calculator</h1>
                                    </div>
                                </div>
                                <div class="multi_form_section">
                                    <div class="row pt-2">
                                        <div class="col-lg-8">
                                            <div class="form_section">
                                                <div class="form_section_panel1">
                                                    {{-- Row1 --}}
                                                    <div class="website_type_class">
                                                        <div class="row">
                                                            <div class="col-lg-12 mb-2">
                                                                <div class="question"> Are You Looking For? </div>
                                                            </div>
                                                            <form id="myForm">
                                                                <div class="form-group row" id="calculator">
                                                                    <div class="col-lg-4">
                                                                        <label for="amount">Amount</label>
                                                                        <input type="number" id="amount"
                                                                            placeholder="Amount In ₹" />
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <label for="month">Time</label>
                                                                        <input type="number" id="month"
                                                                            placeholder="Time In Months" />
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <label for="rate">Rate</label>
                                                                        <input type="number" id="rate"
                                                                            placeholder="Rate In %" />
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12 mt-2">
                                                                        <button type="button"
                                                                            id="calculate">Calculate</button>
                                                                        <button type="reset" id="reset"
                                                                            value="Reset data"
                                                                            onClick="resetdata()">Reset</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 sticky">
                                            <div class="form_section_panel2">
                                                <div class="result_section">
                                                    <div class="shipping_item_details">
                                                        <div class="result_content">
                                                            <div class="result_text"> Total ₹</div>
                                                        </div>
                                                        <div class="payment_detail open">
                                                            <div class="payment_detail_tab1"
                                                                style="display: block !important;">
                                                                <div id="total">
                                                                    <small id="totalamount"><span id="yield">0.00
                                                                            ₹</span></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== End SEO ROI Section ============================================================== -->

                    <!-- ============================================================== Start ROI Section ============================================================== -->
                    <div class="tab-pane fade" id="v-pills-roi" role="tabpanel" aria-labelledby="v-pills-roi-tab">
                        <div class="right_tab_content">
                            <div class="body_section">
                                <div class="banner">
                                    <img src="{{ asset('frontend_assets/img/banner.png') }}">
                                    <div class="banner_title">
                                        <h1 class="text-center">ROI Calculator</h1>
                                    </div>
                                </div>
                                <div class="multi_form_section">
                                    <div class="row pt-2">
                                        <div class="col-lg-8">
                                            <div class="form_section">
                                                <div class="form_section_panel1">
                                                    {{-- Row1 --}}
                                                    <div class="website_type_class">
                                                        <div class="row">
                                                            <div class="col-lg-12 mb-2">
                                                                <div class="question"> Are You Looking For? </div>
                                                            </div>
                                                            <form id="myForm">
                                                                <div class="form-group row" id="calculator">
                                                                    <div class="col-lg-4">
                                                                        <label for="amount">Amount</label>
                                                                        <input type="number" id="amount"
                                                                            placeholder="Amount In ₹" />
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <label for="month">Time</label>
                                                                        <input type="number" id="month"
                                                                            placeholder="Time In Months" />
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <label for="rate">Rate</label>
                                                                        <input type="number" id="rate"
                                                                            placeholder="Rate In %" />
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12 mt-2">
                                                                        <button type="button"
                                                                            id="calculate">Calculate</button>
                                                                        <button type="reset" id="reset"
                                                                            value="Reset data"
                                                                            onClick="resetdata()">Reset</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 sticky">
                                            <div class="form_section_panel2">
                                                <div class="result_section">
                                                    <div class="shipping_item_details">
                                                        <div class="result_content">
                                                            <div class="result_text"> Total ₹</div>
                                                        </div>
                                                        <div class="payment_detail open">
                                                            <div class="payment_detail_tab1"
                                                                style="display: block !important;">
                                                                <div id="total">
                                                                    <small id="totalamount"><span id="yield">0.00
                                                                            ₹</span></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== End ROI Section ============================================================== -->

                    <!-- ============================================================== Start Contact Section ============================================================== -->
                    <div class="tab-pane fade" id="v-pills-contact" role="tabpanel"
                        aria-labelledby="v-pills-contact-tab">
                        <div class="right_tab_content">
                            <div class="body_section">
                                <div class="banner">
                                    <img src="{{ asset('frontend_assets/img/banner.png') }}">
                                    <div class="banner_title">
                                        <h1 class="text-center">ROI Calculator</h1>
                                    </div>
                                </div>
                                <form action="" method="post" name="contactform">
                                    <p><label for="first">First Name *</label><br>
                                        <input maxlength="50" name="first_name" id="first" size="30" type="text" required
                                            placeholder="First Name" /></p>
                                    <p><label for="last">Last Name *</label><br>
                                        <input maxlength="50" name="last_name" id="last" size="30" type="text" required placeholder="Last Name" />
                                    </p>
                                    <p><label for="phone">Contact *</label><br>
                                        <input maxlength="30" name="contact" id="phone" size="30" type="text" required
                                            placeholder="&#215;&#215;&#215;-&#215;&#215;&#215;-&#215;&#215;&#215;&#215;" /></p>
                                    <p><label for="emailadr">Email *</label><br>
                                        <input maxlength="80" name="email" id="emailadr" size="30" type="email" required
                                            placeholder="you@example.com" /></p>
                                    <p><label for="msg">Message *</label><br>
                                        <textarea cols="25" maxlength="1000" id="msg" name="comments" rows="6" required
                                            placeholder="Tell us more..."></textarea></p>
                                    <!-- <small>* Required</small> -->
                                    <p><input type="submit" value="Send Message" /></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== End Contact Section ============================================================== -->

                    <!-- ============================================================== Start Setting Section ============================================================== -->
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">
                        <div class="right_tab_content">
                            Setting
                        </div>
                    </div>
                    <!-- ============================================================== End Setting Section ============================================================== -->
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Content Here -->
        <!-- ============================================================== -->
    @endsection
