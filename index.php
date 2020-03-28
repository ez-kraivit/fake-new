<!DOCTYPE html>
<html lang="th" class="swal2-shown swal2-height-auto">

<head>

    <!-- old -->
    <!-- Google Tag Manager -->
    <!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5GMKC4B');</script> -->
    <!-- End Google Tag Manager -->

    <!-- new -->
    <!-- Google Tag Manager -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-M967B3Z"></script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M967B3Z');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>เราไม่ทิ้งกัน</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico">
    <link rel="stylesheet" href="styles.1dc8c6a66a8104f88918.css">
    <link rel="stylesheet" href="h.css">
    <style>
.month-year-picker .mat-calendar-period-button {
	 pointer-events: none;
}
 .month-year-picker .mat-calendar-arrow {
	 display: none;
}
 .display-hidden {
	 height: 0;
	 width: 0;
	 border: unset;
	 display: block;
}
 
    </style>
</head>
<body class="swal2-shown swal2-height-auto" style="padding-right: 23px;">
    <app-root _nghost-xig-c0="" ng-version="7.2.16" aria-hidden="true" data-previous-aria-hidden="true">
        <router-outlet _ngcontent-xig-c0=""></router-outlet>
        <app-layout _nghost-xig-c1="">
            <ngx-spinner _ngcontent-xig-c1="" _nghost-xig-c2="">
                <!---->
            </ngx-spinner>
            <!---->
            <app-header _ngcontent-xig-c1="" _nghost-xig-c3="">
                <div _ngcontent-xig-c3="" class="quota col-12"></div>
                <div _ngcontent-xig-c3="" class="banner">
                    <div _ngcontent-xig-c3="" class="col-12 cover-img"></div>
                </div>
            </app-header>
            <router-outlet _ngcontent-xig-c1=""></router-outlet>
            <app-register>
                <!---->
                <div class="primary container">
                    <form autocomplete="off" class="form-horizontal ng-invalid ng-touched ng-dirty" novalidate="">
                        <h4>ข้อมูลผู้ลงทะเบียน</h4>
                        <div class="row">
                            <div class="form-group col-md-6"><label for="firstName">ชื่อภาษาไทย <span class="text-danger">*</span></label><input appvalidation="" class="form-control ng-dirty ng-valid ng-touched" formcontrolname="firstName" id="firstName" mask="B*" maxlength="150" placeholder="ระบุชื่อ (ไม่ต้องระบุคำนำหน้า)" type="text"></div>
                            <div class="form-group col-md-6"><label for="lastName">นามสกุลภาษาไทย <span class="text-danger">*</span></label><input appvalidation="" class="form-control ng-dirty ng-valid ng-touched" formcontrolname="lastName" id="lastName" mask="B*" maxlength="150" placeholder="ระบุนามสกุล" type="text"></div>
                        </div>
                        <div class="form-group row"><label class="col-sm-12 col-lg-4 col-form-label" for="birthDate">วัน เดือน ปีเกิด <span class="text-danger">*</span></label>
                            <div class="row col-sm-12 col-lg-8 col-form-label">
                                <mat-checkbox class="col-6 mat-checkbox mat-accent ng-untouched ng-pristine ng-valid" name="noBirthDateMonth" id="mat-checkbox-10"><label class="mat-checkbox-layout" for="mat-checkbox-10-input">
                                        <div class="mat-checkbox-inner-container"><input class="mat-checkbox-input cdk-visually-hidden" type="checkbox" id="mat-checkbox-10-input" name="noBirthDateMonth" tabindex="0" aria-checked="false">
                                            <div class="mat-checkbox-ripple mat-ripple" matripple="">
                                                <div class="mat-ripple-element mat-checkbox-persistent-ripple"></div>
                                            </div>
                                            <div class="mat-checkbox-frame"></div>
                                            <div class="mat-checkbox-background"><svg xml:space="preserve" class="mat-checkbox-checkmark" focusable="false" version="1.1" viewBox="0 0 24 24">
                                                    <path class="mat-checkbox-checkmark-path" d="M4.1,12.7 9,17.6 20.3,6.3" fill="none" stroke="white"></path>
                                                </svg>
                                                <div class="mat-checkbox-mixedmark"></div>
                                            </div>
                                        </div><span class="mat-checkbox-label"><span style="display:none">&nbsp;</span> ไม่ทราบวัน เดือนเกิด </span>
                                    </label></mat-checkbox>
                                <mat-checkbox class="col-6 mat-checkbox mat-accent ng-valid mat-checkbox-checked ng-dirty ng-touched" name="noBirthDate" id="mat-checkbox-11"><label class="mat-checkbox-layout" for="mat-checkbox-11-input">
                                        <div class="mat-checkbox-inner-container"><input class="mat-checkbox-input cdk-visually-hidden" type="checkbox" id="mat-checkbox-11-input" name="noBirthDate" tabindex="0" aria-checked="true">
                                            <div class="mat-checkbox-ripple mat-ripple" matripple="">
                                                <div class="mat-ripple-element mat-checkbox-persistent-ripple"></div>
                                            </div>
                                            <div class="mat-checkbox-frame"></div>
                                            <div class="mat-checkbox-background"><svg xml:space="preserve" class="mat-checkbox-checkmark" focusable="false" version="1.1" viewBox="0 0 24 24">
                                                    <path class="mat-checkbox-checkmark-path" d="M4.1,12.7 9,17.6 20.3,6.3" fill="none" stroke="white"></path>
                                                </svg>
                                                <div class="mat-checkbox-mixedmark"></div>
                                            </div>
                                        </div><span class="mat-checkbox-label"><span style="display:none">&nbsp;</span> ไม่ทราบวัน เกิด </span>
                                    </label></mat-checkbox>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <div class="col-12 ng-star-inserted">
                                <app-month-year-picker appvalidation="" formcontrolname="birthDay" name="birthDate" style="background-color: #fff;opacity: 1;" class="ng-touched ng-dirty ng-valid"><input class="display-hidden ng-untouched ng-pristine ng-valid" readonly="" style="background-color: #fff;opacity: 1;" type="text" aria-haspopup="true"><input class="form-control ng-pristine ng-valid ng-touched" id="monthyearPick" name="monthyearPick" placeholder="วันเกิด" readonly="" style="background-color: #fff;opacity: 1;" type="text">
                                    <mat-datepicker for="monthyearPick" panelclass="month-year-picker" startview="multi-year"></mat-datepicker>
                                </app-month-year-picker>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12"><label for="citizenId">หมายเลขบัตรประจำตัวประชาชน <span class="text-danger">*</span></label><input appvalidation="" class="form-control ng-dirty ng-valid ng-touched" formcontrolname="citizenId" id="citizenId" mask="0 0000 00000 00 0" maxlength="17" minlength="13" placeholder="ระบุหมายเลขบัตรประจำตัวประชาชน 13 หลัก" type="tel"></div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12"><label for="laserId">รหัสหลังบัตรประจำตัวประชาชน <span class="text-danger">*</span></label>
                                <div class="row">
                                    <div class="col-9 col-md-10"><input appvalidation="" class="form-control ng-invalid ng-touched ng-dirty" formcontrolname="laserId" id="laserId" mask="SS0-0000000-00" minlength="12" placeholder="EEE-BWJ6242-EE" style="text-transform: uppercase;" type="text"></div>
                                    <div class="col-3 col-md-2"><img alt="ตำแหน่งรหัสหลังบัตรประจำตัวประชาชน" class="img-circle" src="./assets/icon/citizencard.svg" style="height: 75px; margin-top: -30px"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6"><label for="income">รายได้ต่อเดือน <span class="text-danger">*</span></label><select appvalidation="" class="form-control ng-touched ng-dirty ng-valid" formcontrolname="income" id="income">
                                    <option disabled="" value="">เลือก รายได้ทั้งเดือน</option>
                                    <option value="1">ไม่เกิน 3,000</option>
                                    <option value="2">3,001 - 5,000 บาท</option>
                                    <option value="3">5,001 - 10,000 บาท</option>
                                    <option value="4">10,001 - 15,000 บาท</option>
                                    <option value="5">15,001 - 30,000 บาท</option>
                                    <option value="6">30,001 - 50,000 บาท</option>
                                    <option value="7">50,001 - 100,000 บาท</option>
                                    <option value="8">100,001 บาทต่อเดือนขึ้นไป</option>
                                </select></div>
                            <div class="form-group col-md-6"><label for="phoneNumber">หมายเลขโทรศัพท์มือถือที่ติดต่อได้</label><input appvalidation="" autocomplete="nope" class="form-control ng-touched ng-dirty ng-valid" formcontrolname="phoneNumber" id="phoneNumber" mask="00-00000000" placeholder="08-02323123" type="tel"></div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6" style="display: flex; flex-direction: column; justify-content: flex-end;"><label for="relativePhoneNumber">หมายเลขโทรศัพท์มือถือคนใกล้ชิด</label><input appvalidation="" autocomplete="isaidno" class="form-control ng-touched ng-dirty" formcontrolname="relativePhoneNumber" id="relativePhoneNumber" mask="00-00000009" placeholder="08-123524234" type="tel" disabled=""></div>
                            <div class="form-group col-md-6"><label for="homePhoneNumber">หมายเลขโทรศัพท์อื่น ๆ <span class="text-danger">หากกรอกหมายเลขโทรศัพท์ในช่อง หมายเลขโทรศัพท์อื่น ๆ การดำเนินการจะใช้เวลามากกว่าปกติ เนื่องจากจะต้องสื่อสารผ่านทางจดหมายลงทะเบียน</span></label><input appvalidation="" autocomplete="lmaoyoucantbeatme" class="form-control ng-pristine ng-touched" formcontrolname="homePhoneNumber" id="homePhoneNumber" mask="00-0000000" placeholder="00-0000000" type="tel" disabled=""></div>
                        </div>
                        <!---->
                        <div class="row">
                            <div class="form-group col-md-6"><label for="email">อีเมล์ (ถ้ามี)</label><input appvalidation="" autocomplete="nope" class="form-control ng-pristine ng-valid ng-touched" formcontrolname="email" id="email" mask="E*" maxlength="150" placeholder="example@example.com" type="text"></div>
                            <div class="form-group col-md-6"><label for="lineId">Line ID (ถ้ามี)</label><input appvalidation="" autocomplete="none" class="form-control ng-pristine ng-valid ng-touched" formcontrolname="lineId" id="lineId" mask="E*" maxlength="150" placeholder="Line ID (ถ้ามี)" type="text"></div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h4 class="mt-4">ช่องทางที่ท่านประสงค์รับเงิน <span class="text-danger">*</span></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <div class="form-check"><input class="form-check-input ng-pristine ng-valid ng-touched" formcontrolname="promptpayFlag" id="promptpayFlag_N" type="radio" value="N"><label for="promptpayFlag_N">รับเงินผ่านบัญชีของท่านเท่านั้น</label></div>
                                <div class="form-check"><input class="form-check-input ng-pristine ng-valid ng-touched" formcontrolname="promptpayFlag" id="promptpayFlag_Y" type="radio" value="Y"><label for="promptpayFlag_Y">รับเงินผ่าน Promptpay (ผูกบัตรประชาชนของท่านเท่านั้น)</label></div>
                                <!---->
                            </div>
                        </div>
                        <!---->
                        <div class="row">
                            <div class="col-12">
                                <h4 class="mt-4">ที่อยู่ที่สามารถติดต่อได้</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6"><label for="contactHouseNo">บ้านเลขที่ <span class="text-danger">*</span></label><input appvalidation="" class="form-control ng-touched ng-dirty ng-valid" formcontrolname="contactHouseNo" id="contactHouseNo" mask="S*" maxlength="150" placeholder="บ้านเลขที่" type="text"></div>
                            <div class="form-group col-md-6"><label for="contactMoo">หมู่ที่</label><input appvalidation="" class="form-control ng-valid ng-touched ng-dirty" formcontrolname="contactMoo" id="contactMoo" mask="9*" maxlength="150" placeholder="หมู่ที่" type="tel"></div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6"><label for="contactBuilding">หมู่บ้าน/อาคาร/ชั้น</label><input appvalidation="" class="form-control ng-valid ng-touched ng-dirty" formcontrolname="contactBuilding" id="contactBuilding" maxlength="150" placeholder="หมู่บ้าน/อาคาร/ชั้น" type="text"></div>
                            <div class="form-group col-md-6"><label for="contactSoi">ตรอก/ซอย</label><input appvalidation="" class="form-control ng-valid ng-touched ng-dirty" formcontrolname="contactSoi" id="contactSoi" maxlength="150" placeholder="ตรอก/ซอย" type="text"></div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6"><label for="contactStreet">ถนน</label><input appvalidation="" autocomplete="nope" class="form-control ng-valid ng-touched ng-dirty" formcontrolname="contactStreet" id="contactStreet" maxlength="150" placeholder="ถนน" type="text"></div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6"><label for="contactZipCode">รหัสไปรษณีย์ <span class="text-danger">*</span></label><input appvalidation="" autocomplete="theytoldmetoturnautocompleteoffsorryfolks" class="form-control ng-touched ng-dirty ng-valid" formcontrolname="contactZipCode" id="contactZipCode" mask="00000" placeholder="รหัสไปรษณีย์" type="tel"></div>
                            <div class="form-group col-md-6"><label for="contactSubDistrict">ตำบล/แขวง <span class="text-danger">*</span></label><select appvalidation="" class="form-control ng-pristine ng-invalid ng-touched" formcontrolname="contactSubDistrict" id="contactSubDistrict">
                                    <option disabled="" value="">เลือก ตำบล/แขวง</option>
                                    <!---->
                                </select><span class="help-block error">กรุณาระบุข้อมูล</span></div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6"><label for="contactDistrict">อำเภอ/เขต <span class="text-danger">*</span></label><select appvalidation="" class="form-control ng-untouched ng-pristine" formcontrolname="contactDistrict" id="contactDistrict" disabled="">
                                    <option disabled="" value="">เลือก อำเภอ/เขต</option>
                                    <!---->
                                </select></div>
                            <div class="form-group col-md-6"><label for="contactProvince">จังหวัด <span class="text-danger">*</span></label><select appvalidation="" class="form-control ng-untouched ng-pristine" formcontrolname="contactProvince" id="contactProvince" disabled="">
                                    <option disabled="" value="">เลือก จังหวัด</option>
                                    <!---->
                                </select></div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h4 class="mt-4">ที่อยู่ตามทะเบียนบ้าน</h4>
                            </div>
                            <div class="form-group col-12">
                                <mat-checkbox class="mat-checkbox mat-accent mat-checkbox-disabled ng-untouched ng-pristine" formcontrolname="copyAddressFlag" name="copyAddressFlag" id="mat-checkbox-12"><label class="mat-checkbox-layout" for="mat-checkbox-12-input">
                                        <div class="mat-checkbox-inner-container"><input class="mat-checkbox-input cdk-visually-hidden" type="checkbox" id="mat-checkbox-12-input" disabled="" name="copyAddressFlag" tabindex="-1" aria-checked="false">
                                            <div class="mat-checkbox-ripple mat-ripple" matripple="">
                                                <div class="mat-ripple-element mat-checkbox-persistent-ripple"></div>
                                            </div>
                                            <div class="mat-checkbox-frame"></div>
                                            <div class="mat-checkbox-background"><svg xml:space="preserve" class="mat-checkbox-checkmark" focusable="false" version="1.1" viewBox="0 0 24 24">
                                                    <path class="mat-checkbox-checkmark-path" d="M4.1,12.7 9,17.6 20.3,6.3" fill="none" stroke="white"></path>
                                                </svg>
                                                <div class="mat-checkbox-mixedmark"></div>
                                            </div>
                                        </div><span class="mat-checkbox-label"><span style="display:none">&nbsp;</span> เหมือนที่อยู่ที่สามารถติดต่อได้ </span>
                                    </label></mat-checkbox>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6"><label for="registHouseNo">บ้านเลขที่ <span class="text-danger">*</span></label><input appvalidation="" class="form-control ng-pristine ng-invalid ng-touched" formcontrolname="registHouseNo" id="registHouseNo" mask="S*" placeholder="บ้านเลขที่" type="text"><span class="help-block error">กรุณาระบุข้อมูล</span></div>
                            <div class="form-group col-md-6"><label for="registMoo">หมู่ที่</label><input appvalidation="" class="form-control ng-pristine ng-valid ng-touched" formcontrolname="registMoo" id="registMoo" maxlength="150" placeholder="หมู่ที่" type="text"></div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6"><label for="registBuilding">หมู่บ้าน/อาคาร/ชั้น</label><input appvalidation="" class="form-control ng-pristine ng-valid ng-touched" formcontrolname="registBuilding" id="registBuilding" maxlength="150" placeholder="หมู่บ้าน/อาคาร/ชั้น" type="text"></div>
                            <div class="form-group col-md-6"><label for="registSoi">ตรอก/ซอย</label><input appvalidation="" class="form-control ng-pristine ng-valid ng-touched" formcontrolname="registSoi" id="registSoi" maxlength="150" placeholder="ตรอก/ซอย" type="text"></div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6"><label for="registStreet">ถนน</label><input appvalidation="" autocomplete="nope" class="form-control ng-pristine ng-valid ng-touched" formcontrolname="registStreet" id="registStreet" maxlength="150" placeholder="ถนน" type="text"></div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6"><label for="registZipCode">รหัสไปรษณีย์ <span class="text-danger">*</span></label><input appvalidation="" autocomplete="ugh" class="form-control ng-touched ng-dirty ng-valid" formcontrolname="registZipCode" id="registZipCode" mask="00000" placeholder="รหัสไปรษณีย์" type="tel"></div>
                            <div class="form-group col-md-6"><label for="registSubDistrict">ตำบล/แขวง <span class="text-danger">*</span></label><select appvalidation="" class="form-control ng-pristine ng-invalid ng-touched" formcontrolname="registSubDistrict" id="registSubDistrict">
                                    <option disabled="" value="">เลือก ตำบล/แขวง</option>
                                    <!---->
                                </select><span class="help-block error">กรุณาระบุข้อมูล</span></div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6"><label for="registDistrict">อำเภอ/เขต <span class="text-danger">*</span></label><select appvalidation="" class="form-control ng-untouched ng-pristine" formcontrolname="registDistrict" id="registDistrict" disabled="">
                                    <option disabled="" value="">เลือก อำเภอ/เขต</option>
                                    <!---->
                                </select></div>
                            <div class="form-group col-md-6"><label for="registProvince">จังหวัด <span class="text-danger">*</span></label><select appvalidation="" class="form-control ng-untouched ng-pristine" formcontrolname="registProvince" id="registProvince" disabled="">
                                    <option disabled="" value="">เลือก จังหวัด</option>
                                    <!---->
                                </select></div>
                        </div>
                        <!---->
                        <div class="row">
                            <div class="form-group col-12"><button class="brdbuttonbig blue mt-2" id="register_register" type="submit"> ดำเนินการต่อ </button></div>
                        </div>
                    </form>
                    <!---->
                    <!---->
                </div>
                <!---->
            </app-register>
            <app-footer _ngcontent-xig-c1="" _nghost-xig-c4="">
                <footer _ngcontent-xig-c4="">
                    <div _ngcontent-xig-c4="" class="footer-1 col-12">
                        <div _ngcontent-xig-c4="" class="container">
                            <div _ngcontent-xig-c4="" class="row">
                                <div _ngcontent-xig-c4="" class="col-md-3 col-sm-12"></div>
                            </div>
                        </div>
                    </div>
                    <div _ngcontent-xig-c4="" class="footer-2 col-12">
                        <div _ngcontent-xig-c4="" class="container">
                            <div _ngcontent-xig-c4="" class="row no-gutters">
                                <div _ngcontent-xig-c4="" class="col-sm-12 col-md-3 col-lg-3">
                                    <div _ngcontent-xig-c4="" class="copyright">Copyright © 2020</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </app-footer>
        </app-layout>
    </app-root>

    <!-- old -->
    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GMKC4B"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->

    <!-- new -->
    <!-- Google Tag Manager (noscript) -->
    <noscript aria-hidden="true" data-previous-aria-hidden="true"><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M967B3Z" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <script type="text/javascript" src="runtime.26209474bfa8dc87a77c.js" aria-hidden="true" data-previous-aria-hidden="true"></script>
    <script type="text/javascript" src="polyfills.44049eb04437eb45ce76.js" aria-hidden="true" data-previous-aria-hidden="true"></script>
    <script type="text/javascript" src="main.320c7f038edd78cfd7c3.js" aria-hidden="true" data-previous-aria-hidden="true"></script>

    <div class="cdk-overlay-container" aria-hidden="true"></div>
    <div class="cdk-live-announcer-element cdk-visually-hidden" aria-atomic="true" aria-live="polite" aria-hidden="true">พ.ศ. 2541</div>





</body>

</html>