<?php $__env->startSection('title', translate('business_setup')); ?>


<?php $__env->startSection('content'); ?>
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <h1 class="page-header-title mr-3">
                <span class="page-header-icon">
                    <img src="<?php echo e(asset('public/assets/admin/img/business.png')); ?>" class="w--26" alt="">
                </span>
                <span>
                    <?php echo e(translate('messages.business')); ?> <?php echo e(translate('messages.setup')); ?>

                </span>
            </h1>

            <div class="row">
                <div class="col-md-12">
                    <div class="js-nav-scroller hs-nav-scroller-horizontal mt-2">
                        <!-- Nav -->
                        <ul class="nav nav-tabs mb-5 mt-5 border-0 nav--tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="<?php echo e(route('admin.business-settings.business-setup',  ['tab' => 'business'])); ?>"   aria-disabled="true"><?php echo e(translate('messages.business')); ?> <?php echo e(translate('messages.settings')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('admin.business-settings.business-setup',  ['tab' => 'customer'])); ?>"  aria-disabled="true"><?php echo e(translate('messages.customers')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('admin.business-settings.business-setup',  ['tab' => 'deliveryman'])); ?>"  aria-disabled="true"><?php echo e(translate('messages.delivery')); ?> <?php echo e(translate('messages.man')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e(Request::is('admin/business-settings/language') ?'active':''); ?>" href="<?php echo e(route('admin.business-settings.language.index')); ?>"  aria-disabled="true"><?php echo e(translate('messages.Languages')); ?></a>
                            </li>
                        </ul>
                        <!-- End Nav -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="card mb-3">
            <div class="card-body">
                <div
                    class="maintainance-mode-toggle-bar d-flex flex-wrap justify-content-between border border-primary rounded align-items-center p-2">
                    <?php ($config = \App\CentralLogics\Helpers::get_business_settings('maintenance_mode')); ?>
                    <h5 class="text-capitalize m-0 text--info">
                        <i class="tio-settings-outlined"></i>
                        <?php echo e(translate('messages.maintenance_mode')); ?>

                    </h5>
                    <label class="toggle-switch toggle-switch-sm">
                        <input type="checkbox" class="status toggle-switch-input" onclick="maintenance_mode()"
                            <?php echo e(isset($config) && $config ? 'checked' : ''); ?>>
                        <span class="toggle-switch-label text mb-0">
                            <span class="toggle-switch-indicator"></span>
                        </span>
                    </label>
                </div>
                <div class="mt-2">

                    <?php echo e(translate('messages.maintainance_txt')); ?>

                </div>
            </div>
        </div>
        <form action="<?php echo e(route('admin.business-settings.update-setup')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php ($name = \App\Models\BusinessSetting::where('key', 'business_name')->first()); ?>

            <div class="row g-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                <span class="card-header-icon mr-2"><i class="tio-user"></i></span>
                                <span><?php echo e(translate('Company Information')); ?></span>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <div class="form-group mb-0">
                                        <label class="form-label"
                                            for="exampleFormControlInput1"><?php echo e(translate('messages.business')); ?>

                                            <?php echo e(translate('messages.name')); ?></label>
                                        <input type="text" name="store_name" value="<?php echo e($name->value ?? ''); ?>"
                                            class="form-control" placeholder="<?php echo e(translate('messages.new_business')); ?>"
                                            required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl-3">
                                <?php ($email = \App\Models\BusinessSetting::where('key', 'email_address')->first()); ?>
                                    <div class="form-group mb-0">
                                        <label class="form-label"
                                            for="exampleFormControlInput1"><?php echo e(translate('messages.email')); ?></label>
                                        <input type="email" value="<?php echo e($email->value ?? ''); ?>" name="email"
                                            class="form-control" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl-3">
                                <?php ($phone = \App\Models\BusinessSetting::where('key', 'phone')->first()); ?>
                                    <div class="form-group mb-0">
                                        <label class="form-label"
                                            for="exampleFormControlInput1"><?php echo e(translate('messages.phone')); ?></label>
                                        <input type="tel" value="<?php echo e($phone->value ?? ''); ?>" name="phone"
                                            class="form-control" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <div class="form-group mb-0">
                                        <label class="form-label text-capitalize"
                                            for="country"><?php echo e(translate('messages.country')); ?></label>
                                        <select id="country" name="country" class="form-control  js-select2-custom">
                                            <option value="AF">Afghanistan</option>
                                            <option value="AX">Åland Islands</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia, Plurinational State of</option>
                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="BN">Brunei Darussalam</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo</option>
                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CI">Côte d'Ivoire</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">Curaçao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="TF">French Southern Territories</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard Island and McDonald Islands</option>
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran, Islamic Republic of</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                            <option value="KR">Korea, Republic of</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Lao People's Democratic Republic</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macao</option>
                                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia, Federated States of</option>
                                            <option value="MD">Moldova, Republic of</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau</option>
                                            <option value="PS">Palestinian Territory, Occupied</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RE">Réunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russian Federation</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="BL">Saint Barthélemy</option>
                                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="MF">Saint Martin (French part)</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">Sao Tome and Principe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SX">Sint Maarten (Dutch part)</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syrian Arab Republic</option>
                                            <option value="TW">Taiwan, Province of China</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania, United Republic of</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TL">Timor-Leste</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="UM">United States Minor Outlying Islands</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                                            <option value="VN">Viet Nam</option>
                                            <option value="VG">Virgin Islands, British</option>
                                            <option value="VI">Virgin Islands, U.S.</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <?php ($tz = \App\Models\BusinessSetting::where('key', 'timezone')->first()); ?>
                                    <?php ($tz = $tz ? $tz->value : 0); ?>
                                    <div class="form-group mb-0">
                                        <label
                                            class="form-label text-capitalize"><?php echo e(translate('messages.time_zone')); ?></label>
                                        <select name="timezone" class="form-control js-select2-custom">
                                            <option value="UTC" <?php echo e($tz ? ($tz == '' ? 'selected' : '') : ''); ?>>UTC
                                            </option>
                                            <option value="Etc/GMT+12"
                                                <?php echo e($tz ? ($tz == 'Etc/GMT+12' ? 'selected' : '') : ''); ?>>(GMT-12:00)
                                                International Date Line West</option>
                                            <option value="Pacific/Midway"
                                                <?php echo e($tz ? ($tz == 'Pacific/Midway' ? 'selected' : '') : ''); ?>>
                                                (GMT-11:00) Midway Island, Samoa</option>
                                            <option value="Pacific/Honolulu"
                                                <?php echo e($tz ? ($tz == 'Pacific/Honolulu' ? 'selected' : '') : ''); ?>>
                                                (GMT-10:00) Hawaii</option>
                                            <option value="US/Alaska"
                                                <?php echo e($tz ? ($tz == 'US/Alaska' ? 'selected' : '') : ''); ?>>(GMT-09:00)
                                                Alaska</option>
                                            <option value="America/Los_Angeles"
                                                <?php echo e($tz ? ($tz == 'America/Los_Angeles' ? 'selected' : '') : ''); ?>>
                                                (GMT-08:00) Pacific Time
                                                (US & Canada)</option>
                                            <option value="America/Tijuana"
                                                <?php echo e($tz ? ($tz == 'America/Tijuana' ? 'selected' : '') : ''); ?>>
                                                (GMT-08:00) Tijuana, Baja California</option>
                                            <option value="US/Arizona"
                                                <?php echo e($tz ? ($tz == 'US/Arizona' ? 'selected' : '') : ''); ?>>(GMT-07:00)
                                                Arizona</option>
                                            <option value="America/Chihuahua"
                                                <?php echo e($tz ? ($tz == 'America/Chihuahua' ? 'selected' : '') : ''); ?>>(GMT-07:00)
                                                Chihuahua, La
                                                Paz, Mazatlan</option>
                                            <option value="US/Mountain"
                                                <?php echo e($tz ? ($tz == 'US/Mountain' ? 'selected' : '') : ''); ?>>(GMT-07:00)
                                                Mountain Time (US & Canada)</option>
                                            <option value="America/Managua"
                                                <?php echo e($tz ? ($tz == 'America/Managua' ? 'selected' : '') : ''); ?>>
                                                (GMT-06:00) Central America</option>
                                            <option value="US/Central"
                                                <?php echo e($tz ? ($tz == 'US/Central' ? 'selected' : '') : ''); ?>>(GMT-06:00)
                                                Central Time (US & Canada)</option>
                                            <option value="America/Mexico_City"
                                                <?php echo e($tz ? ($tz == 'America/Mexico_City' ? 'selected' : '') : ''); ?>>
                                                (GMT-06:00) Guadalajara,
                                                Mexico City, Monterrey</option>
                                            <option value="Canada/Saskatchewan"
                                                <?php echo e($tz ? ($tz == 'Canada/Saskatchewan' ? 'selected' : '') : ''); ?>>
                                                (GMT-06:00) Saskatchewan
                                            </option>
                                            <option value="America/Bogota"
                                                <?php echo e($tz ? ($tz == 'America/Bogota' ? 'selected' : '') : ''); ?>>
                                                (GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                            <option value="US/Eastern"
                                                <?php echo e($tz ? ($tz == 'US/Eastern' ? 'selected' : '') : ''); ?>>(GMT-05:00)
                                                Eastern Time (US & Canada)</option>
                                            <option value="US/East-Indiana"
                                                <?php echo e($tz ? ($tz == 'US/East-Indiana' ? 'selected' : '') : ''); ?>>
                                                (GMT-05:00) Indiana (East)</option>
                                            <option value="Canada/Atlantic"
                                                <?php echo e($tz ? ($tz == 'Canada/Atlantic' ? 'selected' : '') : ''); ?>>
                                                (GMT-04:00) Atlantic Time (Canada)</option>
                                            <option value="America/Caracas"
                                                <?php echo e($tz ? ($tz == 'America/Caracas' ? 'selected' : '') : ''); ?>>
                                                (GMT-04:00) Caracas, La Paz</option>
                                            <option value="America/Manaus"
                                                <?php echo e($tz ? ($tz == 'America/Manaus' ? 'selected' : '') : ''); ?>>
                                                (GMT-04:00) Manaus</option>
                                            <option value="America/Santiago"
                                                <?php echo e($tz ? ($tz == 'America/Santiago' ? 'selected' : '') : ''); ?>>
                                                (GMT-04:00) Santiago</option>
                                            <option value="Canada/Newfoundland"
                                                <?php echo e($tz ? ($tz == 'Canada/Newfoundland' ? 'selected' : '') : ''); ?>>
                                                (GMT-03:30) Newfoundland
                                            </option>
                                            <option value="America/Sao_Paulo"
                                                <?php echo e($tz ? ($tz == 'America/Sao_Paulo' ? 'selected' : '') : ''); ?>>(GMT-03:00)
                                                Brasilia</option>
                                            <option value="America/Argentina/Buenos_Aires"
                                                <?php echo e($tz ? ($tz == 'America/Argentina/Buenos_Aires' ? 'selected' : '') : ''); ?>>
                                                (GMT-03:00)
                                                Buenos Aires, Georgetown</option>
                                            <option value="America/Godthab"
                                                <?php echo e($tz ? ($tz == 'America/Godthab' ? 'selected' : '') : ''); ?>>
                                                (GMT-03:00) Greenland</option>
                                            <option value="America/Montevideo"
                                                <?php echo e($tz ? ($tz == 'America/Montevideo' ? 'selected' : '') : ''); ?>>
                                                (GMT-03:00) Montevideo
                                            </option>
                                            <option value="America/Noronha"
                                                <?php echo e($tz ? ($tz == 'America/Noronha' ? 'selected' : '') : ''); ?>>
                                                (GMT-02:00) Mid-Atlantic</option>
                                            <option value="Atlantic/Cape_Verde"
                                                <?php echo e($tz ? ($tz == 'Atlantic/Cape_Verde' ? 'selected' : '') : ''); ?>>
                                                (GMT-01:00) Cape Verde Is.
                                            </option>
                                            <option value="Atlantic/Azores"
                                                <?php echo e($tz ? ($tz == 'Atlantic/Azores' ? 'selected' : '') : ''); ?>>
                                                (GMT-01:00) Azores</option>
                                            <option value="Africa/Casablanca"
                                                <?php echo e($tz ? ($tz == 'Africa/Casablanca' ? 'selected' : '') : ''); ?>>(GMT+00:00)
                                                Casablanca,
                                                Monrovia, Reykjavik</option>
                                            <option value="Etc/Greenwich"
                                                <?php echo e($tz ? ($tz == 'Etc/Greenwich' ? 'selected' : '') : ''); ?>>
                                                (GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
                                            <option value="Europe/Amsterdam"
                                                <?php echo e($tz ? ($tz == 'Europe/Amsterdam' ? 'selected' : '') : ''); ?>>
                                                (GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                                            <option value="Europe/Belgrade"
                                                <?php echo e($tz ? ($tz == 'Europe/Belgrade' ? 'selected' : '') : ''); ?>>
                                                (GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                                            <option value="Europe/Brussels"
                                                <?php echo e($tz ? ($tz == 'Europe/Brussels' ? 'selected' : '') : ''); ?>>
                                                (GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                                            <option value="Europe/Sarajevo"
                                                <?php echo e($tz ? ($tz == 'Europe/Sarajevo' ? 'selected' : '') : ''); ?>>
                                                (GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                                            <option value="Africa/Lagos"
                                                <?php echo e($tz ? ($tz == 'Africa/Lagos' ? 'selected' : '') : ''); ?>>
                                                (GMT+01:00) West Central Africa</option>
                                            <option value="Asia/Amman"
                                                <?php echo e($tz ? ($tz == 'Asia/Amman' ? 'selected' : '') : ''); ?>>(GMT+02:00)
                                                Amman</option>
                                            <option value="Europe/Athens"
                                                <?php echo e($tz ? ($tz == 'Europe/Athens' ? 'selected' : '') : ''); ?>>
                                                (GMT+02:00) Athens, Bucharest, Istanbul</option>
                                            <option value="Asia/Beirut"
                                                <?php echo e($tz ? ($tz == 'Asia/Beirut' ? 'selected' : '') : ''); ?>>(GMT+02:00)
                                                Beirut</option>
                                            <option value="Africa/Cairo"
                                                <?php echo e($tz ? ($tz == 'Africa/Cairo' ? 'selected' : '') : ''); ?>>
                                                (GMT+02:00) Cairo</option>
                                            <option value="Africa/Harare"
                                                <?php echo e($tz ? ($tz == 'Africa/Harare' ? 'selected' : '') : ''); ?>>
                                                (GMT+02:00) Harare, Pretoria</option>
                                            <option value="Europe/Helsinki"
                                                <?php echo e($tz ? ($tz == 'Europe/Helsinki' ? 'selected' : '') : ''); ?>>
                                                (GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                                            <option value="Asia/Jerusalem"
                                                <?php echo e($tz ? ($tz == 'Asia/Jerusalem' ? 'selected' : '') : ''); ?>>
                                                (GMT+02:00) Jerusalem</option>
                                            <option value="Europe/Minsk"
                                                <?php echo e($tz ? ($tz == 'Europe/Minsk' ? 'selected' : '') : ''); ?>>
                                                (GMT+02:00) Minsk</option>
                                            <option value="Africa/Windhoek"
                                                <?php echo e($tz ? ($tz == 'Africa/Windhoek' ? 'selected' : '') : ''); ?>>
                                                (GMT+02:00) Windhoek</option>
                                            <option value="Asia/Kuwait"
                                                <?php echo e($tz ? ($tz == 'Asia/Kuwait' ? 'selected' : '') : ''); ?>>(GMT+03:00)
                                                Kuwait, Riyadh, Baghdad</option>
                                            <option value="Europe/Moscow"
                                                <?php echo e($tz ? ($tz == 'Europe/Moscow' ? 'selected' : '') : ''); ?>>
                                                (GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                                            <option value="Africa/Nairobi"
                                                <?php echo e($tz ? ($tz == 'Africa/Nairobi' ? 'selected' : '') : ''); ?>>
                                                (GMT+03:00) Nairobi</option>
                                            <option value="Asia/Tbilisi"
                                                <?php echo e($tz ? ($tz == 'Asia/Tbilisi' ? 'selected' : '') : ''); ?>>
                                                (GMT+03:00) Tbilisi</option>
                                            <option value="Asia/Tehran"
                                                <?php echo e($tz ? ($tz == 'Asia/Tehran' ? 'selected' : '') : ''); ?>>(GMT+03:30)
                                                Tehran</option>
                                            <option value="Asia/Muscat"
                                                <?php echo e($tz ? ($tz == 'Asia/Muscat' ? 'selected' : '') : ''); ?>>(GMT+04:00)
                                                Abu Dhabi, Muscat</option>
                                            <option value="Asia/Baku"
                                                <?php echo e($tz ? ($tz == 'Asia/Baku' ? 'selected' : '') : ''); ?>>(GMT+04:00)
                                                Baku</option>
                                            <option value="Asia/Yerevan"
                                                <?php echo e($tz ? ($tz == 'Asia/Yerevan' ? 'selected' : '') : ''); ?>>
                                                (GMT+04:00) Yerevan</option>
                                            <option value="Asia/Kabul"
                                                <?php echo e($tz ? ($tz == 'Asia/Kabul' ? 'selected' : '') : ''); ?>>(GMT+04:30)
                                                Kabul</option>
                                            <option value="Asia/Yekaterinburg"
                                                <?php echo e($tz ? ($tz == 'Asia/Yekaterinburg' ? 'selected' : '') : ''); ?>>
                                                (GMT+05:00) Yekaterinburg
                                            </option>
                                            <option value="Asia/Karachi"
                                                <?php echo e($tz ? ($tz == 'Asia/Karachi' ? 'selected' : '') : ''); ?>>
                                                (GMT+05:00) Islamabad, Karachi, Tashkent</option>
                                            <option value="Asia/Calcutta"
                                                <?php echo e($tz ? ($tz == 'Asia/Calcutta' ? 'selected' : '') : ''); ?>>
                                                (GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                                            <!-- <option value="Asia/Calcutta"  <?php echo e($tz ? ($tz == 'Asia/Calcutta' ? 'selected' : '') : ''); ?>>(GMT+05:30) Sri Jayawardenapura</option> -->
                                            <option value="Asia/Katmandu"
                                                <?php echo e($tz ? ($tz == 'Asia/Katmandu' ? 'selected' : '') : ''); ?>>
                                                (GMT+05:45) Kathmandu</option>
                                            <option value="Asia/Almaty"
                                                <?php echo e($tz ? ($tz == 'Asia/Almaty' ? 'selected' : '') : ''); ?>>(GMT+06:00)
                                                Almaty, Novosibirsk</option>
                                            <option value="Asia/Dhaka"
                                                <?php echo e($tz ? ($tz == 'Asia/Dhaka' ? 'selected' : '') : ''); ?>>(GMT+06:00)
                                                Astana, Dhaka</option>
                                            <option value="Asia/Rangoon"
                                                <?php echo e($tz ? ($tz == 'Asia/Rangoon' ? 'selected' : '') : ''); ?>>
                                                (GMT+06:30) Yangon (Rangoon)</option>
                                            <option value="Asia/Bangkok"
                                                <?php echo e($tz ? ($tz == 'Asia/Bangkok' ? 'selected' : '') : ''); ?>>
                                                (GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                                            <option value="Asia/Krasnoyarsk"
                                                <?php echo e($tz ? ($tz == 'Asia/Krasnoyarsk' ? 'selected' : '') : ''); ?>>
                                                (GMT+07:00) Krasnoyarsk</option>
                                            <option value="Asia/Hong_Kong"
                                                <?php echo e($tz ? ($tz == 'Asia/Hong_Kong' ? 'selected' : '') : ''); ?>>
                                                (GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                                            <option value="Asia/Kuala_Lumpur"
                                                <?php echo e($tz ? ($tz == 'Asia/Kuala_Lumpur' ? 'selected' : '') : ''); ?>>
                                                (GMT+08:00) Kuala Lumpur,
                                                Singapore</option>
                                            <option value="Asia/Irkutsk"
                                                <?php echo e($tz ? ($tz == 'Asia/Irkutsk' ? 'selected' : '') : ''); ?>>
                                                (GMT+08:00) Irkutsk, Ulaan Bataar</option>
                                            <option value="Australia/Perth"
                                                <?php echo e($tz ? ($tz == 'Australia/Perth' ? 'selected' : '') : ''); ?>>
                                                (GMT+08:00) Perth</option>
                                            <option value="Asia/Taipei"
                                                <?php echo e($tz ? ($tz == 'Asia/Taipei' ? 'selected' : '') : ''); ?>>(GMT+08:00)
                                                Taipei</option>
                                            <option value="Asia/Tokyo"
                                                <?php echo e($tz ? ($tz == 'Asia/Tokyo' ? 'selected' : '') : ''); ?>>(GMT+09:00)
                                                Osaka, Sapporo, Tokyo</option>
                                            <option value="Asia/Seoul"
                                                <?php echo e($tz ? ($tz == 'Asia/Seoul' ? 'selected' : '') : ''); ?>>(GMT+09:00)
                                                Seoul</option>
                                            <option value="Asia/Yakutsk"
                                                <?php echo e($tz ? ($tz == 'Asia/Yakutsk' ? 'selected' : '') : ''); ?>>
                                                (GMT+09:00) Yakutsk</option>
                                            <option value="Australia/Adelaide"
                                                <?php echo e($tz ? ($tz == 'Australia/Adelaide' ? 'selected' : '') : ''); ?>>
                                                (GMT+09:30) Adelaide
                                            </option>
                                            <option value="Australia/Darwin"
                                                <?php echo e($tz ? ($tz == 'Australia/Darwin' ? 'selected' : '') : ''); ?>>
                                                (GMT+09:30) Darwin</option>
                                            <option value="Australia/Brisbane"
                                                <?php echo e($tz ? ($tz == 'Australia/Brisbane' ? 'selected' : '') : ''); ?>>
                                                (GMT+10:00) Brisbane
                                            </option>
                                            <option value="Australia/Canberra"
                                                <?php echo e($tz ? ($tz == 'Australia/Canberra' ? 'selected' : '') : ''); ?>>
                                                (GMT+10:00) Canberra,
                                                Melbourne, Sydney</option>
                                            <option value="Australia/Hobart"
                                                <?php echo e($tz ? ($tz == 'Australia/Hobart' ? 'selected' : '') : ''); ?>>
                                                (GMT+10:00) Hobart</option>
                                            <option value="Pacific/Guam"
                                                <?php echo e($tz ? ($tz == 'Pacific/Guam' ? 'selected' : '') : ''); ?>>
                                                (GMT+10:00) Guam, Port Moresby</option>
                                            <option value="Asia/Vladivostok"
                                                <?php echo e($tz ? ($tz == 'Asia/Vladivostok' ? 'selected' : '') : ''); ?>>
                                                (GMT+10:00) Vladivostok</option>
                                            <option value="Asia/Magadan"
                                                <?php echo e($tz ? ($tz == 'Asia/Magadan' ? 'selected' : '') : ''); ?>>
                                                (GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
                                            <option value="Pacific/Auckland"
                                                <?php echo e($tz ? ($tz == 'Pacific/Auckland' ? 'selected' : '') : ''); ?>>
                                                (GMT+12:00) Auckland, Wellington</option>
                                            <option value="Pacific/Fiji"
                                                <?php echo e($tz ? ($tz == 'Pacific/Fiji' ? 'selected' : '') : ''); ?>>
                                                (GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                                            <option value="Pacific/Tongatapu"
                                                <?php echo e($tz ? ($tz == 'Pacific/Tongatapu' ? 'selected' : '') : ''); ?>>
                                                (GMT+13:00) Nuku'alofa
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <?php ($tf = \App\Models\BusinessSetting::where('key', 'timeformat')->first()); ?>
                                    <?php ($tf = $tf ? $tf->value : '24'); ?>
                                    <div class="form-group mb-0">
                                        <label
                                            class="form-label text-capitalize"><?php echo e(translate('messages.time_format')); ?></label>
                                        <select name="time_format" class="form-control">
                                            <option value="12" <?php echo e($tf == '12' ? 'selected' : ''); ?>>
                                                <?php echo e(translate('messages.12_hour')); ?>

                                            </option>
                                            <option value="24" <?php echo e($tf == '24' ? 'selected' : ''); ?>>
                                                <?php echo e(translate('messages.24_hour')); ?>

                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <?php ($currency_code = \App\Models\BusinessSetting::where('key', 'currency')->first()); ?>
                                    <div class="form-group mb-0">
                                        <label class="form-label"
                                            for="exampleFormControlInput1"><?php echo e(translate('Currency Symbol')); ?></label>
                                        <select name="currency" class="form-control js-select2-custom">
                                            <?php $__currentLoopData = \App\Models\Currency::orderBy('currency_code')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($currency['currency_code']); ?>"
                                                    <?php echo e($currency_code ? ($currency_code->value == $currency['currency_code'] ? 'selected' : '') : ''); ?>>
                                                    <?php echo e($currency['currency_code']); ?> ( <?php echo e($currency['currency_symbol']); ?>

                                                    )
                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <?php ($currency_symbol_position = \App\Models\BusinessSetting::where('key', 'currency_symbol_position')->first()); ?>
                                    <div class="form-group mb-0">
                                        <label class="form-label text-capitalize"
                                            for="currency_symbol_position"><?php echo e(translate('Currency Position')); ?></label>
                                        <select name="currency_symbol_position" class="form-control js-select2-custom"
                                            id="currency_symbol_position">
                                            <option value="left"
                                                <?php echo e($currency_symbol_position ? ($currency_symbol_position->value == 'left' ? 'selected' : '') : ''); ?>>
                                                <?php echo e(translate('messages.left')); ?>

                                                (<?php echo e(\App\CentralLogics\Helpers::currency_symbol()); ?>123)
                                            </option>
                                            <option value="right"
                                                <?php echo e($currency_symbol_position ? ($currency_symbol_position->value == 'right' ? 'selected' : '') : ''); ?>>
                                                <?php echo e(translate('messages.right')); ?>

                                                (123<?php echo e(\App\CentralLogics\Helpers::currency_symbol()); ?>)
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <?php ($digit_after_decimal_point = \App\Models\BusinessSetting::where('key', 'digit_after_decimal_point')->first()); ?>
                                    <div class="form-group mb-0">
                                        <label class="form-label text-capitalize"
                                            for="digit_after_decimal_point"><?php echo e(translate('messages.Digit after decimal point')); ?></label>
                                        <input type="number" name="digit_after_decimal_point" class="form-control"
                                            id="digit_after_decimal_point"
                                            value="<?php echo e($digit_after_decimal_point ? $digit_after_decimal_point->value : 0); ?>"
                                            min="0" max="4" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <?php ($admin_commission = \App\Models\BusinessSetting::where('key', 'admin_commission')->first()); ?>
                                    <div class="form-group mb-0">
                                        <label class="form-label text-capitalize"
                                            for="admin_commission"><?php echo e(translate('Default Commission on Order')); ?></label>
                                        <input type="number" name="admin_commission" class="form-control"
                                            id="admin_commission"
                                            value="<?php echo e($admin_commission ? $admin_commission->value : 0); ?>"
                                            min="0" max="100" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <?php ($delivery_charge_comission = \App\Models\BusinessSetting::where('key', 'delivery_charge_comission')->first()); ?>
                                    <div class="form-group mb-0">
                                        <label class="input-label text-capitalize d-flex alig-items-center"
                                        for="admin_comission_in_delivery_charge"><?php echo e(translate('Commission on Delivery Charge')); ?></label>
                                            <input type="number" name="admin_comission_in_delivery_charge" class="form-control" id="admin_comission_in_delivery_charge"
                                            min="0" max="100" step="0.01" value="<?php echo e($delivery_charge_comission ? $delivery_charge_comission->value: 0); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> <span class="card-header-icon mr-2"><i class="tio-poi"></i></span>
                                <span><?php echo e(translate('Company Location')); ?></span></h4>
                        </div>
                        <div class="card-body">
                            <div class="row g-3 mt-0">
                                <div class="col-md-6">
                                    <div class="row g-3">
                                        <div class="col-sm-12">
                                            <?php ($address = \App\Models\BusinessSetting::where('key', 'address')->first()); ?>
                                            <div class="form-group mb-0">
                                                <label class="form-label"
                                                    for="exampleFormControlInput1"><?php echo e(translate('messages.address')); ?></label>
                                                <textarea type="text" id="address" name="address" class="form-control h--70px" placeholder="" rows="1" required><?php echo e($address->value ?? ''); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <?php ($default_location = \App\Models\BusinessSetting::where('key', 'default_location')->first()); ?>
                                            <?php ($default_location = $default_location->value ? json_decode($default_location->value, true) : 0); ?>
                                            <div class="form-group mb-0">
                                                <label class="form-label text-capitalize"
                                                    for="latitude"><?php echo e(translate('messages.latitude')); ?><span
                                                        class="form-label-secondary" data-toggle="tooltip" data-placement="right"
                                                        data-original-title="<?php echo e(translate('messages.click_on_the_map_select_your_defaul_location')); ?>"><img
                                                            src="<?php echo e(asset('/public/assets/admin/img/info-circle.svg')); ?>"
                                                            alt="<?php echo e(translate('messages.click_on_the_map_select_your_defaul_location')); ?>"></span></label>
                                                <input type="text" id="latitude" name="latitude" class="form-control"
                                                    placeholder="<?php echo e(translate('messages.Ex:')); ?> -94.22213"
                                                    value="<?php echo e($default_location ? $default_location['lat'] : 0); ?>" required
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group mb-0">
                                                <label class="form-label text-capitalize"
                                                    for="longitude"><?php echo e(translate('messages.longitude')); ?><span
                                                        class="form-label-secondary" data-toggle="tooltip" data-placement="right"
                                                        data-original-title="<?php echo e(translate('messages.click_on_the_map_select_your_defaul_location')); ?>"><img
                                                            src="<?php echo e(asset('/public/assets/admin/img/info-circle.svg')); ?>"
                                                            alt="<?php echo e(translate('messages.click_on_the_map_select_your_defaul_location')); ?>"></span></label>
                                                <input type="text" name="longitude" class="form-control"
                                                    placeholder="<?php echo e(translate('messages.Ex:')); ?> 103.344322" id="longitude"
                                                    value="<?php echo e($default_location ? $default_location['lng'] : 0); ?>" required
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <?php ($footer_text = \App\Models\BusinessSetting::where('key', 'footer_text')->first()); ?>
                                            <div class="form-group mb-0">
                                                <label class="form-label"
                                                    for="exampleFormControlInput1"><?php echo e(translate('messages.footer')); ?>

                                                    <?php echo e(translate('messages.text')); ?></label>
                                                <textarea type="text" value="" name="footer_text" class="form-control h--45"
                                                    placeholder="<?php echo e(translate('messages.Ex_:_Footer_Text')); ?>" required><?php echo e($footer_text->value ?? ''); ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input id="pac-input" class="controls rounded" data-toggle="tooltip"
                                        data-placement="right"
                                        data-original-title="<?php echo e(translate('messages.search_your_location_here')); ?>"
                                        type="text" placeholder="<?php echo e(translate('messages.search_here')); ?>" />
                                    <div id="location_map_canvas" class="overflow-hidden rounded"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title m-0 d-flex align-items-center"> <span class="card-header-icon mr-2"><i
                                        class="tio-neighborhood"></i></span>
                                <span><?php echo e(translate('business_information')); ?></span></h4>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-sm-6 col-lg-4">
                                    <?php ($schedule_order = \App\Models\BusinessSetting::where('key', 'schedule_order')->first()); ?>
                                    <?php ($schedule_order = $schedule_order ? $schedule_order->value : 0); ?>
                                    <div class="form-group mb-0">
                                        <label
                                            class="toggle-switch h--45px toggle-switch-sm d-flex justify-content-between border rounded px-3 py-0 form-control">
                                            <span class="pr-1 d-flex align-items-center switch--label">
                                                <span class="line--limit-1">
                                                    <?php echo e(translate('messages.scheduled')); ?>

                                                    <?php echo e(translate('messages.orders')); ?>

                                                </span>
                                                <span class="form-label-secondary text-danger d-flex"
                                                    data-toggle="tooltip" data-placement="right"
                                                    data-original-title="<?php echo e(translate('After activating this field, customers are able to place scheduled orders.')); ?>"><img
                                                        src="<?php echo e(asset('/public/assets/admin/img/info-circle.svg')); ?>"
                                                        alt="<?php echo e(translate('messages.customer_varification_toggle')); ?>"> *
                                                </span>
                                            </span>
                                            <input type="checkbox" class="toggle-switch-input" value="1"
                                                name="schedule_order" id="schedule_order"
                                                <?php echo e($schedule_order == 1 ? 'checked' : ''); ?>>
                                            <span class="toggle-switch-label text">
                                                <span class="toggle-switch-indicator"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <?php ($admin_order_notification = \App\Models\BusinessSetting::where('key', 'admin_order_notification')->first()); ?>
                                    <?php ($admin_order_notification = $admin_order_notification ? $admin_order_notification->value : 0); ?>
                                    <div class="form-group mb-0">

                                        <label
                                            class="toggle-switch h--45px toggle-switch-sm d-flex justify-content-between border rounded px-3 py-0 form-control">
                                            <span class="pr-1 d-flex align-items-center switch--label">
                                                <span class="line--limit-1">
                                                    <?php echo e(translate('messages.admin')); ?> <?php echo e(translate('messages.order')); ?>

                                                    <?php echo e(translate('messages.notification')); ?>

                                                </span>
                                                <span class="form-label-secondary text-danger d-flex"
                                                    data-toggle="tooltip" data-placement="right"
                                                    data-original-title="<?php echo e(translate('Turning on this, admin will get a popup notification with sound for all orders.')); ?>"><img
                                                        src="<?php echo e(asset('/public/assets/admin/img/info-circle.svg')); ?>"
                                                        alt="<?php echo e(translate('messages.customer_varification_toggle')); ?>"> *
                                                </span>
                                            </span>
                                            <input type="checkbox" class="toggle-switch-input" value="1"
                                                name="admin_order_notification" id="aon1"
                                                <?php echo e($admin_order_notification == 1 ? 'checked' : ''); ?>>
                                            <span class="toggle-switch-label text">
                                                <span class="toggle-switch-indicator"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <?php ($odc = \App\Models\BusinessSetting::where('key', 'order_delivery_verification')->first()); ?>
                                    <?php ($odc = $odc ? $odc->value : 0); ?>
                                    <div class="form-group mb-0">

                                        <label
                                            class="toggle-switch h--45px toggle-switch-sm d-flex justify-content-between border rounded px-3 py-0 form-control">
                                            <span class="pr-1 d-flex align-items-center switch--label">
                                                <span class="line--limit-1">
                                                    <?php echo e(translate('messages.order')); ?>

                                                    <?php echo e(translate('messages.delivery')); ?>

                                                    <?php echo e(translate('messages.verification')); ?>

                                                </span>
                                                <span class="form-label-secondary text-danger d-flex"
                                                    data-toggle="tooltip" data-placement="right"
                                                    data-original-title="<?php echo e(translate('If this field is active, customers have to provide a 4-digit code to the delivery man to deliver an order successfully. Customers will get this code in order details.')); ?>"><img
                                                        src="<?php echo e(asset('/public/assets/admin/img/info-circle.svg')); ?>"
                                                        alt="<?php echo e(translate('messages.order_varification_toggle')); ?>"> *
                                                </span>
                                            </span>
                                            <input type="checkbox" class="toggle-switch-input" value="1"
                                                name="odc" id="odc1" <?php echo e($odc == 1 ? 'checked' : ''); ?>>
                                            <span class="toggle-switch-label text">
                                                <span class="toggle-switch-indicator"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <?php ($ev = \App\Models\BusinessSetting::where('key', 'customer_verification')->first()); ?>
                                    <?php ($ev = $ev ? $ev->value : 0); ?>
                                    <div class="form-group mb-0">

                                        <label
                                            class="toggle-switch h--45px toggle-switch-sm d-flex justify-content-between border rounded px-3 py-0 form-control">
                                            <span class="pr-1 d-flex align-items-center switch--label">
                                                <span class="line--limit-1">
                                                    <?php echo e(translate('messages.customer')); ?>

                                                    <?php echo e(translate('messages.verification')); ?>

                                                </span>
                                                <span class="form-label-secondary text-danger d-flex"
                                                    data-toggle="tooltip" data-placement="right"
                                                    data-original-title="<?php echo e(translate('messages.customer_varification_toggle')); ?>"><img
                                                        src="<?php echo e(asset('/public/assets/admin/img/info-circle.svg')); ?>"
                                                        alt="<?php echo e(translate('messages.customer_varification_toggle')); ?>"> *
                                                </span>
                                            </span>
                                            <input type="checkbox" class="toggle-switch-input" value="1"
                                                name="customer_verification" id="ev1"
                                                <?php echo e($ev == 1 ? 'checked' : ''); ?>>
                                            <span class="toggle-switch-label text">
                                                <span class="toggle-switch-indicator"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <?php ($vnv = \App\Models\BusinessSetting::where('key', 'toggle_veg_non_veg')->first()); ?>
                                    <?php ($vnv = $vnv ? $vnv->value : 0); ?>
                                    <div class="form-group mb-0">

                                        <label
                                            class="toggle-switch h--45px toggle-switch-sm d-flex justify-content-between border rounded px-3 py-0 form-control">
                                            <span class="pr-1 d-flex align-items-center switch--label">
                                                <span class="line--limit-1">
                                                    <?php echo e(translate('messages.veg')); ?>/<?php echo e(translate('messages.non_veg')); ?>

                                                </span>
                                                <span class="form-label-secondary text-danger d-flex"
                                                    data-toggle="tooltip" data-placement="right"
                                                    data-original-title="<?php echo e(translate('When this field is active, the stores and the customers both can see the veg/non-veg tag.')); ?>"><img
                                                        src="<?php echo e(asset('/public/assets/admin/img/info-circle.svg')); ?>"
                                                        alt="<?php echo e(translate('messages.veg_non_veg')); ?>"> * </span>
                                            </span>
                                            <input type="checkbox" class="toggle-switch-input" value="1"
                                                name="vnv" id="vnv1" <?php echo e($vnv == 1 ? 'checked' : ''); ?>>
                                            <span class="toggle-switch-label text">
                                                <span class="toggle-switch-indicator"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <?php ($store_self_registration = \App\Models\BusinessSetting::where('key', 'toggle_store_registration')->first()); ?>
                                    <?php ($store_self_registration = $store_self_registration ? $store_self_registration->value : 0); ?>
                                    <div class="form-group mb-0">

                                        <label
                                            class="toggle-switch h--45px toggle-switch-sm d-flex justify-content-between border rounded px-3 py-0 form-control">
                                            <span class="pr-1 d-flex align-items-center switch--label">
                                                <span class="line--limit-1">
                                                    <?php echo e(translate('messages.store_self_registration')); ?>

                                                </span>
                                                <span class="form-label-secondary text-danger d-flex"
                                                    data-toggle="tooltip" data-placement="right"
                                                    data-original-title="<?php echo e(translate('If this field is active, stores can register themself using the store app, user app, or website.')); ?>"><img
                                                        src="<?php echo e(asset('/public/assets/admin/img/info-circle.svg')); ?>"
                                                        alt="<?php echo e(translate('messages.store_self_registration')); ?>"> *
                                                </span>
                                            </span>
                                            <input type="checkbox" class="toggle-switch-input" value="1"
                                                name="store_self_registration" id="store_self_registration1"
                                                <?php echo e($store_self_registration == 1 ? 'checked' : ''); ?>>
                                            <span class="toggle-switch-label text">
                                                <span class="toggle-switch-indicator"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <?php ($dm_self_registration = \App\Models\BusinessSetting::where('key', 'toggle_dm_registration')->first()); ?>
                                    
                                    <?php ($dm_self_registration = $dm_self_registration ? $dm_self_registration->value : 0); ?>
                                    <div class="form-group mb-0">

                                        <label
                                            class="toggle-switch h--45px toggle-switch-sm d-flex justify-content-between border rounded px-3 py-0 form-control">
                                            <span class="pr-1 d-flex align-items-center switch--label">
                                                <span class="line--limit-1">
                                                    <?php echo e(translate('messages.dm_self_registration')); ?>

                                                </span>
                                                <span class="form-label-secondary text-danger d-flex"
                                                    data-toggle="tooltip" data-placement="right"
                                                    data-original-title="<?php echo e(translate('When this field is active, delivery men can register themself using the delivery man app, user app, or website.')); ?>"><img
                                                        src="<?php echo e(asset('/public/assets/admin/img/info-circle.svg')); ?>"
                                                        alt="<?php echo e(translate('messages.dm_self_registration')); ?>"> * </span>
                                            </span>
                                            <input type="checkbox" class="toggle-switch-input" value="1"
                                                name="dm_self_registration" id="dm_self_registration1"
                                                <?php echo e($dm_self_registration == 1 ? 'checked' : ''); ?>>
                                            <span class="toggle-switch-label text">
                                                <span class="toggle-switch-indicator"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-4">
                                    <?php ($prescription_order_status = \App\Models\BusinessSetting::where('key', 'prescription_order_status')->first()); ?>
                                    
                                    <?php ($prescription_order_status = $prescription_order_status ? $prescription_order_status->value : 0); ?>
                                    <div class="form-group mb-0">

                                        <label
                                            class="toggle-switch h--45px toggle-switch-sm d-flex justify-content-between border rounded px-3 py-0 form-control">
                                            <span class="pr-1 d-flex align-items-center switch--label">
                                                <span class="line--limit-1">
                                                    <?php echo e(translate('messages.prescription_order_status')); ?>

                                                </span>
                                                <span class="form-label-secondary text-danger d-flex"
                                                    data-toggle="tooltip" data-placement="right"
                                                    data-original-title="<?php echo e(translate('When this field is active, store will get prescription order option.')); ?>"><img
                                                        src="<?php echo e(asset('/public/assets/admin/img/info-circle.svg')); ?>"
                                                        alt="<?php echo e(translate('messages.prescription_order_status')); ?>"> * </span>
                                            </span>
                                            <input type="checkbox" class="toggle-switch-input" value="1"
                                                name="prescription_order_status" id="prescription_order_status1"
                                                <?php echo e($prescription_order_status == 1 ? 'checked' : ''); ?>>
                                            <span class="toggle-switch-label text">
                                                <span class="toggle-switch-indicator"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?php ($tax_included = \App\Models\BusinessSetting::where('key', 'tax_included')->first()); ?>
                                    <?php ($tax_included = $tax_included ? $tax_included->value : 0); ?>
                                    <div class="form-group mb-0">
                                        <label class="toggle-switch toggle-switch-sm d-flex justify-content-between border rounded px-3 px-xl-4 form-control">
                                        <span class="pr-2 d-flex align-items-center"><span class="line--limit-1"><?php echo e(translate('Include_TAX_Amount')); ?></span><span class="input-label-secondary text--title" data-toggle="tooltip" data-placement="right" data-original-title="<?php echo e(translate('When this field is active, Tax amount will not be added with the total product price')); ?>">
                                            <i class="tio-info-outined"></i>
                                            </span></span>
                                            <input type="checkbox" class="toggle-switch-input" value="1" name="tax_included"
                                            <?php echo e($tax_included == 1 ? 'checked' : ''); ?>>
                                            <span class="toggle-switch-label text">
                                                <span class="toggle-switch-indicator"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm-6">
                                    <?php ($order_confirmation_model = \App\Models\BusinessSetting::where('key', 'order_confirmation_model')->first()); ?>
                                    <?php ($order_confirmation_model = $order_confirmation_model ? $order_confirmation_model->value : 'deliveryman'); ?>
                                    <div class="form-group mb-0">
                                        <label class="input-label text-capitalize d-flex alig-items-center"><span
                                                class="line--limit-1"><?php echo e(translate('messages.order_confirmation_model')); ?></span>
                                            <span class="input-label-secondary text--title" data-toggle="tooltip"
                                                data-placement="right"
                                                data-original-title="<?php echo e(translate('The chosen model will confirm the order first. For example, if you choose the delivery confirmation model then the delivery men will get the orders before the stores and confirm for delivery and after confirmation by the delivery men, the stores will get the order for processing.')); ?>">
                                                <i class="tio-info-outined"></i>
                                            </span></label>
                                        <div class="resturant-type-group border">
                                            <label class="form-check form--check mr-2 mr-md-4">
                                                <input class="form-check-input" type="radio" value="store"
                                                    name="order_confirmation_model" id="order_confirmation_model"
                                                    <?php echo e($order_confirmation_model == 'store' ? 'checked' : ''); ?>>
                                                <span class="form-check-label">
                                                    <?php echo e(translate('messages.store')); ?>

                                                </span>
                                            </label>
                                            <label class="form-check form--check mr-2 mr-md-4">
                                                <input class="form-check-input" type="radio" value="deliveryman"
                                                    name="order_confirmation_model" id="order_confirmation_model2"
                                                    <?php echo e($order_confirmation_model == 'deliveryman' ? 'checked' : ''); ?>>
                                                <span class="form-check-label">
                                                    <?php echo e(translate('messages.deliveryman')); ?>

                                                </span>
                                            </label>
                                            <label class="form-check form--check mr-2 mr-md-4">
                                                <input class="form-check-input" type="radio" value="admin"
                                                    name="order_confirmation_model" id="order_confirmation_model2"
                                                    <?php echo e($order_confirmation_model == 'admin' ? 'checked' : ''); ?>>
                                                <span class="form-check-label">
                                                    <?php echo e(translate('messages.admin')); ?>

                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <?php ($canceled_by_store = \App\Models\BusinessSetting::where('key', 'canceled_by_store')->first()); ?>
                                    <?php ($canceled_by_store = $canceled_by_store ? $canceled_by_store->value : 0); ?>
                                    <div class="form-group mb-0">
                                        <label class="input-label text-capitalize d-flex alig-items-center"><span
                                                class="line--limit-1"><?php echo e(translate('store_can_cancel_order')); ?>

                                            </span><span class="input-label-secondary text--title" data-toggle="tooltip"
                                                data-placement="right"
                                                data-original-title="<?php echo e(translate('Order cancellation is possible by the store if "Yes" is chosen .')); ?>">
                                                <i class="tio-info-outined"></i>
                                            </span></label>
                                        <div class="resturant-type-group border">
                                            <label class="form-check form--check mr-2 mr-md-4">
                                                <input class="form-check-input" type="radio" value="1"
                                                    name="canceled_by_store" id="canceled_by_restaurant"
                                                    <?php echo e($canceled_by_store == 1 ? 'checked' : ''); ?>>
                                                <span class="form-check-label">
                                                    <?php echo e(translate('yes')); ?>

                                                </span>
                                            </label>
                                            <label class="form-check form--check mr-2 mr-md-4">
                                                <input class="form-check-input" type="radio" value="0"
                                                    name="canceled_by_store" id="canceled_by_restaurant2"
                                                    <?php echo e($canceled_by_store == 0 ? 'checked' : ''); ?>>
                                                <span class="form-check-label">
                                                    <?php echo e(translate('no')); ?>

                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <?php ($schedule_order_slot_duration = \App\Models\BusinessSetting::where('key', 'schedule_order_slot_duration')->first()); ?>
                                    <div class="form-group mb-0">
                                        <label class="form-label text-capitalize"
                                            for="schedule_order_slot_duration"><?php echo e(translate('messages.Schedule order slot duration')); ?>

                                            <?php echo e(translate('messages.minute')); ?></label>
                                        <input type="number" name="schedule_order_slot_duration" class="form-control"
                                            id="schedule_order_slot_duration"
                                            value="<?php echo e($schedule_order_slot_duration ? $schedule_order_slot_duration->value : 0); ?>"
                                            min="0" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <?php ($free_delivery_over = \App\Models\BusinessSetting::where('key', 'free_delivery_over')->first()); ?>
                                    <?php ($free_delivery_over_status = \App\Models\BusinessSetting::where('key', 'free_delivery_over_status')->first()); ?>
                                    <div class="form-group mb-0">
                                        <label class="form-label d-flex justify-content-between text-capitalize mb-1"
                                            for="free_delivery_over_status">
                                            <span class="line--limit-1"><?php echo e(translate('messages.free_delivery_over')); ?>

                                                (<?php echo e(\App\CentralLogics\Helpers::currency_symbol()); ?>) <small
                                                class="text-danger"><span class="form-label-secondary"
                                                    data-toggle="tooltip" data-placement="right"
                                                    data-original-title="<?php echo e(translate('messages.free_over_delivery_message')); ?>"><img
                                                        src="<?php echo e(asset('/public/assets/admin/img/info-circle.svg')); ?>"
                                                        alt="<?php echo e(translate('messages.free_over_delivery_message')); ?>"></span>
                                                *</small></span>
                                            <span class="toggle-switch toggle-switch-sm pr-sm-3">
                                                <input type="checkbox" class="status toggle-switch-input"
                                                    name="free_delivery_over_status" id="free_delivery_over_status"
                                                    value="1"
                                                    <?php echo e(isset($free_delivery_over_status->value) ? 'checked' : ''); ?>>
                                                <span class="toggle-switch-label text mb-0"><span
                                                        class="toggle-switch-indicator"></span></span>
                                            </span>
                                        </label>

                                        <input type="number" name="free_delivery_over" class="form-control"
                                            id="free_delivery_over"
                                            value="<?php echo e($free_delivery_over ? $free_delivery_over->value : 0); ?>"
                                            min="0" step=".01" required
                                            <?php echo e(isset($free_delivery_over_status->value) ? '' : 'readonly'); ?>>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <?php ($minimum_shipping_charge = \App\Models\BusinessSetting::where('key', 'minimum_shipping_charge')->first()); ?>
                                    <div class="form-group mb-0">
                                        <label class="form-label text-capitalize"
                                            for="minimum_shipping_charge"><?php echo e(translate('messages.minimum_shipping_charge')); ?></label>
                                        <input type="number" name="minimum_shipping_charge" class="form-control"
                                            id="minimum_shipping_charge" min="0" step=".01"
                                            value="<?php echo e($minimum_shipping_charge ? $minimum_shipping_charge->value : 0); ?>"
                                            required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <?php ($per_km_shipping_charge = \App\Models\BusinessSetting::where('key', 'per_km_shipping_charge')->first()); ?>
                                    <div class="form-group mb-0">
                                        <label class="form-label text-capitalize"
                                            for="per_km_shipping_charge"><?php echo e(translate('messages.per_km_shipping_charge')); ?></label>
                                        <input type="number" name="per_km_shipping_charge" class="form-control"
                                            id="per_km_shipping_charge" min="0" step=".01"
                                            value="<?php echo e($per_km_shipping_charge ? $per_km_shipping_charge->value : 0); ?>"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card h-100">
                        <div class="card-header">
                            <h4 class="card-title m-0 d-flex align-items-center"> <span class="card-header-icon mr-2"><i
                                        class="tio-poi"></i></span>
                                <span><?php echo e(translate('Logo & Icon')); ?></span></h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-around __gap-12px">
                                <label class="__custom-upload-img">
                                    <?php ($logo = \App\Models\BusinessSetting::where('key', 'logo')->first()); ?>
                                    <?php ($logo = $logo->value ?? ''); ?>
                                    <h5 class="mb-2 text-center">
                                        <?php echo e(translate('messages.logo')); ?>

                                    </h5>
                                    <center>
                                        <img class="img--vertical" id="viewer"
                                            onerror="this.src='<?php echo e(asset('public/assets/admin/img/upload-img.png')); ?>'"
                                            src="<?php echo e(asset('storage/app/public/business/' . $logo)); ?>"
                                            alt="logo image" />
                                    </center>
                                    <input type="file" name="logo" id="customFileEg1"
                                        class="custom-file-input"
                                        accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                </label>
                                <label class="__custom-upload-img">
                                    <?php ($icon = \App\Models\BusinessSetting::where('key', 'icon')->first()); ?>
                                    <?php ($icon = $icon->value ?? ''); ?>
                                    <h5 class="mb-2 text-center">
                                        <?php echo e(translate('Fav Icon')); ?>

                                    </h5>
                                    <center>
                                        <img class="img--110" id="iconViewer"
                                            onerror="this.src='<?php echo e(asset('public/assets/admin/img/upload-img.png')); ?>'"
                                            src="<?php echo e(asset('storage/app/public/business/' . $icon)); ?>"
                                            alt="Fav icon" />
                                    </center>
                                    <input type="file" name="icon" id="favIconUpload"
                                        class="custom-file-input"
                                        accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card h-100">
                        <div class="card-header">
                            <h4 class="card-title m-0 d-flex align-items-center"> <span class="card-header-icon mr-2"><i
                                        class="tio-poi"></i></span>
                                <span><?php echo e(translate('Office Opening & Closing')); ?></span></h4>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <?php ($opening_time = \App\Models\BusinessSetting::where('key', 'opening_time')->first()); ?>
                                    <div class="form-group mb-0">
                                        <label class="input-label text-capitalize d-flex alig-items-center"
                                        for="opening_time"><?php echo e(translate('Opening Time')); ?></label>
                                            <input type="time" value="<?php echo e($opening_time ? $opening_time->value: ''); ?>" name="opening_time" class="form-control" id="opening_time">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <?php ($closing_time = \App\Models\BusinessSetting::where('key', 'closing_time')->first()); ?>
                                    <div class="form-group mb-0">
                                        <label class="input-label text-capitalize d-flex alig-items-center"
                                        for="closing_time"><?php echo e(translate('Closing Time')); ?></label>
                                        <input type="time" value="<?php echo e($closing_time ? $closing_time->value: ''); ?>" name="closing_time" class="form-control" id="closing_time">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <?php ($opening_day = \App\Models\BusinessSetting::where('key', 'opening_day')->first()); ?>
                                    <?php ($opening_day = $opening_day ? $opening_day->value : ''); ?>
                                    <div class="form-group mb-0">
                                        <label
                                            class="form-label text-capitalize"><?php echo e(translate('messages.opening_day')); ?></label>
                                        <select name="opening_day" class="form-control">
                                            <option value="saturday" <?php echo e($opening_day == 'saturday' ? 'selected' : ''); ?>>
                                                <?php echo e(translate('messages.saturday')); ?>

                                            </option>
                                            <option value="sunday" <?php echo e($opening_day == 'sunday' ? 'selected' : ''); ?>>
                                                <?php echo e(translate('messages.sunday')); ?>

                                            </option>
                                            <option value="monday" <?php echo e($opening_day == 'monday' ? 'selected' : ''); ?>>
                                                <?php echo e(translate('messages.monday')); ?>

                                            </option>
                                            <option value="tuesday" <?php echo e($opening_day == 'tuesday' ? 'selected' : ''); ?>>
                                                <?php echo e(translate('messages.tuesday')); ?>

                                            </option>
                                            <option value="wednesday" <?php echo e($opening_day == 'wednesday' ? 'selected' : ''); ?>>
                                                <?php echo e(translate('messages.wednesday')); ?>

                                            </option>
                                            <option value="thrusday" <?php echo e($opening_day == 'thrusday' ? 'selected' : ''); ?>>
                                                <?php echo e(translate('messages.thrusday')); ?>

                                            </option>
                                            <option value="friday" <?php echo e($opening_day == 'friday' ? 'selected' : ''); ?>>
                                                <?php echo e(translate('messages.friday')); ?>

                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <?php ($closing_day = \App\Models\BusinessSetting::where('key', 'closing_day')->first()); ?>
                                    <?php ($closing_day = $closing_day ? $closing_day->value : ''); ?>
                                    <div class="form-group mb-0">
                                        <label
                                            class="form-label text-capitalize"><?php echo e(translate('messages.closing_day')); ?></label>
                                        <select name="closing_day" class="form-control">
                                            <option value="saturday" <?php echo e($closing_day == 'saturday' ? 'selected' : ''); ?>>
                                                <?php echo e(translate('messages.saturday')); ?>

                                            </option>
                                            <option value="sunday" <?php echo e($closing_day == 'sunday' ? 'selected' : ''); ?>>
                                                <?php echo e(translate('messages.sunday')); ?>

                                            </option>
                                            <option value="monday" <?php echo e($closing_day == 'monday' ? 'selected' : ''); ?>>
                                                <?php echo e(translate('messages.monday')); ?>

                                            </option>
                                            <option value="tuesday" <?php echo e($closing_day == 'tuesday' ? 'selected' : ''); ?>>
                                                <?php echo e(translate('messages.tuesday')); ?>

                                            </option>
                                            <option value="wednesday" <?php echo e($closing_day == 'wednesday' ? 'selected' : ''); ?>>
                                                <?php echo e(translate('messages.wednesday')); ?>

                                            </option>
                                            <option value="thrusday" <?php echo e($closing_day == 'thrusday' ? 'selected' : ''); ?>>
                                                <?php echo e(translate('messages.thrusday')); ?>

                                            </option>
                                            <option value="friday" <?php echo e($closing_day == 'friday' ? 'selected' : ''); ?>>
                                                <?php echo e(translate('messages.friday')); ?>

                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn--container justify-content-end mt-3">
                <button type="reset" class="btn btn--reset"><?php echo e(translate('messages.reset')); ?></button>
                <button type="<?php echo e(env('APP_MODE') != 'demo' ? 'submit' : 'button'); ?>"
                    onclick="<?php echo e(env('APP_MODE') != 'demo' ? '' : 'call_demo()'); ?>"
                    class="btn btn--primary"><?php echo e(translate('save_information')); ?></button>
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script_2'); ?>
    <script>
        <?php ($language = \App\Models\BusinessSetting::where('key', 'language')->first()); ?>
        <?php ($language = $language->value ?? null); ?>
        let language = <?php echo $language; ?>;
        $('[id=language]').val(language);

        function maintenance_mode() {
            <?php if(env('APP_MODE') == 'demo'): ?>
                toastr.warning('Sorry! You can not enable maintainance mode in demo!');
            <?php else: ?>
                Swal.fire({
                    title: '<?php echo e(translate('messages.Are you sure?')); ?>',
                    text: '<?php echo e(translate('Be careful before you turn on/off maintenance mode')); ?>',
                    type: 'warning',
                    showCancelButton: true,
                    cancelButtonColor: 'default',
                    confirmButtonColor: '#00868F',
                    cancelButtonText: '<?php echo e(translate('messages.no')); ?>',
                    confirmButtonText: '<?php echo e(translate('messages.yes')); ?>',
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {
                        $.get({
                            url: '<?php echo e(route('admin.maintenance-mode')); ?>',
                            contentType: false,
                            processData: false,
                            beforeSend: function() {
                                $('#loading').show();
                            },
                            success: function(data) {
                                toastr.success(data.message);
                            },
                            complete: function() {
                                $('#loading').hide();
                            },
                        });
                    } else {
                        location.reload();
                    }
                })
            <?php endif; ?>
        };

        function readURL(input, viewer) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#' + viewer).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#customFileEg1").change(function() {
            readURL(this, 'viewer');
        });

        $("#favIconUpload").change(function() {
            readURL(this, 'iconViewer');
        });
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(\App\Models\BusinessSetting::where('key', 'map_api_key')->first()->value); ?>&libraries=places&v=3.45.8">
    </script>
    <script>
        function initAutocomplete() {
            var myLatLng = {
                lat: <?php echo e($default_location ? $default_location['lat'] : '-33.8688'); ?>,
                lng: <?php echo e($default_location ? $default_location['lng'] : '151.2195'); ?>

            };
            const map = new google.maps.Map(document.getElementById("location_map_canvas"), {
                center: {
                    lat: <?php echo e($default_location ? $default_location['lat'] : '-33.8688'); ?>,
                    lng: <?php echo e($default_location ? $default_location['lng'] : '151.2195'); ?>

                },
                zoom: 13,
                mapTypeId: "roadmap",
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
            });

            marker.setMap(map);
            var geocoder = geocoder = new google.maps.Geocoder();
            google.maps.event.addListener(map, 'click', function(mapsMouseEvent) {
                var coordinates = JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2);
                var coordinates = JSON.parse(coordinates);
                var latlng = new google.maps.LatLng(coordinates['lat'], coordinates['lng']);
                marker.setPosition(latlng);
                map.panTo(latlng);

                document.getElementById('latitude').value = coordinates['lat'];
                document.getElementById('longitude').value = coordinates['lng'];


                geocoder.geocode({
                    'latLng': latlng
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[1]) {
                            document.getElementById('address').innerHtml = results[1].formatted_address;
                        }
                    }
                });
            });
            // Create the search box and link it to the UI element.
            const input = document.getElementById("pac-input");
            const searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(input);
            // Bias the SearchBox results towards current map's viewport.
            map.addListener("bounds_changed", () => {
                searchBox.setBounds(map.getBounds());
            });
            let markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener("places_changed", () => {
                const places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }
                // Clear out the old markers.
                markers.forEach((marker) => {
                    marker.setMap(null);
                });
                markers = [];
                // For each place, get the icon, name and location.
                const bounds = new google.maps.LatLngBounds();
                places.forEach((place) => {
                    if (!place.geometry || !place.geometry.location) {
                        console.log("Returned place contains no geometry");
                        return;
                    }
                    var mrkr = new google.maps.Marker({
                        map,
                        title: place.name,
                        position: place.geometry.location,
                    });
                    google.maps.event.addListener(mrkr, "click", function(event) {
                        document.getElementById('latitude').value = this.position.lat();
                        document.getElementById('longitude').value = this.position.lng();
                    });

                    markers.push(mrkr);

                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
        };
        $(document).on('ready', function() {
            initAutocomplete();
            <?php ($country = \App\Models\BusinessSetting::where('key', 'country')->first()); ?>

            <?php if($country): ?>
                $("#country option[value='<?php echo e($country->value); ?>']").attr('selected', 'selected').change();
            <?php endif; ?>



            $("#free_delivery_over_status").on('change', function() {
                if ($("#free_delivery_over_status").is(':checked')) {
                    $('#free_delivery_over').removeAttr('readonly');
                } else {
                    $('#free_delivery_over').attr('readonly', true);
                    $('#free_delivery_over').val(null);
                }
            });
        });

        $(document).on("keydown", "input", function(e) {
            if (e.which == 13) e.preventDefault();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/market-root/resources/views/admin-views/business-settings/business-index.blade.php ENDPATH**/ ?>