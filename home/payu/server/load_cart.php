
<?php
session_start();
include "../include/dbconfig.php";

if(isset($_COOKIE['orders'])) {

	?>


	<div class="col-lg-12 col-md-12">
		<div class="page-title-wrapper"><br><br><h2 class="page-title">
			<span class="base" data-ui-id="page-title-wrapper">Shopping Cart</span></h2></div>
			<div class="page messages">
				<div data-placeholder="messages"></div>
				<div data-bind="scope: 'messages'">
					<!-- ko if: cookieMessages && cookieMessages.length > 0 -->
					<div role="alert" data-bind="foreach: { data: cookieMessages, as: 'message' }"
					class="messages">
					<div
					data-bind="attr: { class: 'message-' + message.type + ' ' + message.type + ' message', 'data-ui-id': 'message-' + message.type }">
					<div data-bind="html: message.text"></div>
				</div>
			</div><!-- /ko -->
			<!-- ko if: messages().messages && messages().messages.length > 0 -->
			<div role="alert" data-bind="foreach: { data: messages().messages, as: 'message' }"
			class="messages">
			<div
			data-bind="attr: { class: 'message-' + message.type + ' ' + message.type + ' message', 'data-ui-id': 'message-' + message.type }">
			<div data-bind="html: message.text"></div>
		</div>
	</div><!-- /ko --></div>
	<script type="text/x-magento-init">
		{
			"*": {
			"Magento_Ui/js/core/app": {
			"components": {
			"messages": {
			"component": "Magento_Theme/js/view/messages"
		}
	}
}
}
}

</script>
</div>

<div class="column main">
	<input name="form_key" type="hidden" value="8vQwRtClfafwZh3a"/>
	<div id="authenticationPopup" data-bind="scope:'authenticationPopup'"
	style="display: none;">
	<script>
		window.authenticationPopup = {
			"autocomplete": "off",
			"customerRegisterUrl": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/thailand\/customer\/account\/create\/",
			"customerForgotPasswordUrl": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/thailand\/customer\/account\/forgotpassword\/",
			"baseUrl": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/thailand\/"
		};</script><!-- ko template: getTemplate() --><!-- /ko -->
		<script type="text/x-magento-init">
			{
				"#authenticationPopup": {
				"Magento_Ui/js/core/app": {"components":{"authenticationPopup":{"component":"Magento_Customer\/js\/view\/authentication-popup","children":{"messages":{"component":"Magento_Ui\/js\/view\/messages","displayArea":"messages"},"captcha":{"component":"Magento_Captcha\/js\/view\/checkout\/loginCaptcha","displayArea":"additional-login-form-fields","formId":"user_login","configSource":"checkout"},"amazon-button":{"component":"Amazon_Login\/js\/view\/login-button-wrapper","sortOrder":"0","displayArea":"additional-login-form-fields","config":{"tooltip":"Securely login to our website using your existing Amazon details.","componentDisabled":true}}}}}}            },
				"*": {
				"Magento_Ui/js/block-loader": "http\u003A\u002F\u002Fmagento2.flytheme.net\u002Fthemes\u002Fsm_market2\u002Fpub\u002Fstatic\u002Ffrontend\u002FSm\u002Fmarket\u002Fen_US\u002Fimages\u002Floader\u002D1.gif"
			}
		}

	</script>
</div>
<script type="text/x-magento-init">
	{"*":{"Magento_Customer\/js\/section-config":{"sections":{"stores\/store\/switch":"*","stores\/store\/switchrequest":"*","directory\/currency\/switch":"*","*":["messages"],"customer\/account\/logout":["recently_viewed_product","recently_compared_product"],"customer\/account\/loginpost":"*","customer\/account\/createpost":"*","customer\/account\/editpost":"*","customer\/ajax\/login":["checkout-data","cart","captcha"],"catalog\/product_compare\/add":["compare-products"],"catalog\/product_compare\/remove":["compare-products"],"catalog\/product_compare\/clear":["compare-products"],"sales\/guest\/reorder":["cart"],"sales\/order\/reorder":["cart"],"checkout\/cart\/add":["cart"],"checkout\/cart\/delete":["cart"],"checkout\/cart\/updatepost":["cart"],"checkout\/cart\/updateitemoptions":["cart"],"checkout\/cart\/couponpost":["cart"],"checkout\/cart\/estimatepost":["cart"],"checkout\/cart\/estimateupdatepost":["cart"],"checkout\/onepage\/saveorder":["cart","checkout-data","last-ordered-items","checkout-fields"],"checkout\/sidebar\/removeitem":["cart"],"checkout\/sidebar\/updateitemqty":["cart"],"rest\/*\/v1\/carts\/*\/payment-information":["cart","checkout-data","last-ordered-items","instant-purchase"],"rest\/*\/v1\/guest-carts\/*\/payment-information":["cart"],"rest\/*\/v1\/guest-carts\/*\/selected-payment-method":["cart","checkout-data"],"rest\/*\/v1\/carts\/*\/selected-payment-method":["cart","checkout-data","instant-purchase"],"customer\/address\/*":["instant-purchase"],"customer\/account\/*":["instant-purchase"],"vault\/cards\/deleteaction":["instant-purchase"],"multishipping\/checkout\/overviewpost":["cart"],"authorizenet\/directpost_payment\/place":["cart","checkout-data"],"paypal\/express\/placeorder":["cart","checkout-data"],"paypal\/payflowexpress\/placeorder":["cart","checkout-data"],"paypal\/express\/onauthorization":["cart","checkout-data"],"persistent\/index\/unsetcookie":["persistent"],"review\/product\/post":["review"],"braintree\/paypal\/placeorder":["cart","checkout-data"],"wishlist\/index\/add":["wishlist"],"wishlist\/index\/remove":["wishlist"],"wishlist\/index\/updateitemoptions":["wishlist"],"wishlist\/index\/update":["wishlist"],"wishlist\/index\/cart":["wishlist","cart"],"wishlist\/index\/fromcart":["wishlist","cart"],"wishlist\/index\/allcart":["wishlist","cart"],"wishlist\/shared\/allcart":["wishlist","cart"],"wishlist\/shared\/cart":["cart"],"cartquickpro\/cart\/add":["cart"],"cartquickpro\/cart\/delete":["cart"],"cartquickpro\/sidebar\/removeitem":["cart"],"cartquickpro\/sidebar\/updateitemqty":["cart"],"cartquickpro\/cart\/updateitemoptions":["cart"],"cartquickpro\/product_compare\/add":["compare-products"],"cartquickpro\/product_compare\/remove":["compare-products"],"cartquickpro\/product_compare\/clear":["compare-products"],"cartquickpro\/wishlist_index\/add":["wishlist"],"cartquickpro\/wishlist_index\/remove":["wishlist"],"cartquickpro\/wishlist_index\/updateitemoptions":["wishlist"],"cartquickpro\/wishlist_index\/update":["wishlist"],"cartquickpro\/wishlist_index\/cart":["wishlist","cart"],"cartquickpro\/wishlist_index\/fromcart":["cart","checkout-data","wishlist"],"cartquickpro\/wishlist_index\/allcart":["wishlist","cart"]},"clientSideSections":["checkout-data","cart-data"],"baseUrls":["http:\/\/magento2.flytheme.net\/themes\/sm_market2\/thailand\/"]}}}

</script>
<script type="text/x-magento-init">
	{"*":{"Magento_Customer\/js\/customer-data":{"sectionLoadUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/thailand\/customer\/section\/load\/","expirableSectionLifetime":60,"expirableSectionNames":["cart","persistent"],"cookieLifeTime":"3600","updateSessionUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/thailand\/customer\/account\/updateSession\/"}}}

</script>
<script type="text/x-magento-init">
	{"*":{"Magento_Customer\/js\/invalidation-processor":{"invalidationRules":{"website-rule":{"Magento_Customer\/js\/invalidation-rules\/website-rule":{"scopeConfig":{"websiteId":1}}}}}}}

</script>
<script type="text/x-magento-init">
	{
		"body": {
		"pageCache": {"url":"http:\/\/magento2.flytheme.net\/themes\/sm_market2\/thailand\/page_cache\/block\/render\/","handles":["default","checkout_cart_index"],"originalRequest":{"route":"checkout","controller":"cart","action":"index","uri":"\/themes\/sm_market2\/thailand\/checkout\/cart\/"},"versionCookieName":"private_content_version"}        }
	}

</script>
<script data-role="msrp-popup-template" type="text/x-magento-template">
	<div id="map-popup-click-for-price" class="map-popup">
		<div class="popup-header">
			<strong class="title" id="map-popup-heading-price"></strong></div>
			<div class="popup-content">
				<div class="map-info-price" id="map-popup-content">
					<div class="price-box">
						<div class="map-msrp" id="map-popup-msrp-box">
							<span class="label">Price</span>
							<span class="old-price map-old-price" id="map-popup-msrp">
								<span class="price"></span></span></div>
								<div class="map-price" id="map-popup-price-box">
									<span class="label">Actual Price</span>
									<span id="map-popup-price" class="actual-price"></span></div>
								</div>
								<form action="" method="POST" class="map-form-addtocart">
									<input type="hidden" name="product" class="product_id" value=""/>
									<button type="button"
									title="Add to Cart"
									class="action tocart primary">
									<span>Add to Cart</span></button>
									<div class="additional-addtocart-box">
									</div>
								</form>
							</div>
							<div class="map-text" id="map-popup-text">
								Our price is lower than the manufacturer&#039;s &quot;minimum advertised
								price.&quot; As a result, we cannot show you the price in catalog or the
								product page. <br><br> You have no obligation to purchase the product
								once you know the price. You can simply remove the item from your cart.
							</div>
						</div>
					</div></script>
					<script data-role="msrp-info-template" type="text/x-magento-template">
						<div id="map-popup-what-this" class="map-popup">
							<div class="popup-header">
								<strong class="title" id="map-popup-heading-what-this"></strong></div>
								<div class="popup-content">
									<div class="map-help-text" id="map-popup-text-what-this">
										Our price is lower than the manufacturer&#039;s &quot;minimum advertised
										price.&quot; As a result, we cannot show you the price in catalog or the
										product page. <br><br> You have no obligation to purchase the product
										once you know the price. You can simply remove the item from your cart.
									</div>
								</div>
							</div></script>
							<div class="cart-container">


								<div class="cart-summary" style="top: 0px;"><strong
									class="summary title">Summary</strong>
									<div id="block-shipping" class="block shipping" data-collapsible="true"
									role="tablist">
									<div class="title" data-role="title" aria-controls="block-summary"
									role="tab" aria-selected="false" aria-expanded="false" tabindex="0">
									<strong id="block-shipping-heading" role="heading" aria-level="2">Estimate
									Shipping and Tax</strong></div>
									<div id="block-summary" data-bind="scope:'block-summary'" class="content"
									data-role="content" aria-labelledby="block-shipping-heading"
									role="tabpanel" aria-hidden="true" style="display: none;">
									<!-- ko template: getTemplate() -->
									<!-- ko foreach: {data: elems, as: 'element'} -->
									<!-- ko if: hasTemplate() --><!-- ko template: getTemplate() -->
									<form method="post" id="shipping-zip-form">
										<fieldset class="fieldset estimate">
											<legend class="legend">
												<span
												data-bind="text: isVirtual ? $t('Estimate Tax') : $t('Estimate Shipping and Tax') ">Estimate Shipping and Tax</span>
											</legend>
											<br>
											<p class="field note"
											data-bind="text: isVirtual ? $t('Enter your billing address to get a tax estimate.') : $t('Enter your destination to get a shipping estimate.')">
										Enter your destination to get a shipping estimate.</p>
										<!-- ko foreach: getRegion('address-fieldsets') -->
										<!-- ko template: getTemplate() -->
										<!-- ko foreach: {data: elems, as: 'element'} -->
										<!-- ko if: hasTemplate() --><!-- ko template: getTemplate() -->
										<div class="field"
										data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses"
										name="shippingAddress.country_id">

										<label class="label" data-bind="attr: { for: element.uid }"
										for="JHOI8D3">
										<!-- ko if: element.label -->
										<span data-bind="i18n: element.label">Country</span>
										<!-- /ko -->
									</label>

									<div class="control"
									data-bind="css: {'_with-tooltip': element.tooltip}">
									<!-- ko ifnot: element.hasAddons() -->
									<!-- ko template: element.elementTmpl -->
									<select class="select" data-bind="
									attr: {
									name: inputName,
									id: uid,
									disabled: disabled,
									'aria-describedby': getDescriptionId(),
									'aria-required': required,
									'aria-invalid': error() ? true : 'false',
									placeholder: placeholder
								},
								hasFocus: focused,
								optgroup: options,
								value: value,
								optionsCaption: caption,
								optionsValue: 'value',
								optionsText: 'label',
								optionsAfterRender: function(option, item) {
								if (item &amp;&amp; item.disabled) {
								ko.applyBindingsToNode(option, {attr: {disabled: true}}, item);
							}
						}" name="country_id" id="JHOI8D3" aria-invalid="false">
						<option value=""></option>
						<option data-title="Afghanistan" value="AF">
							Afghanistan
						</option>
						<option data-title="Åland Islands" value="AX">Åland
							Islands
						</option>
						<option data-title="Albania" value="AL">Albania
						</option>
						<option data-title="Algeria" value="DZ">Algeria
						</option>
						<option data-title="American Samoa" value="AS">
							American Samoa
						</option>
						<option data-title="Andorra" value="AD">Andorra
						</option>
						<option data-title="Angola" value="AO">Angola
						</option>
						<option data-title="Anguilla" value="AI">Anguilla
						</option>
						<option data-title="Antarctica" value="AQ">
							Antarctica
						</option>
						<option data-title="Antigua &amp; Barbuda"
						value="AG">Antigua &amp; Barbuda
					</option>
					<option data-title="Argentina" value="AR">
						Argentina
					</option>
					<option data-title="Armenia" value="AM">Armenia
					</option>
					<option data-title="Aruba" value="AW">Aruba</option>
					<option data-title="Australia" value="AU">
						Australia
					</option>
					<option data-title="Austria" value="AT">Austria
					</option>
					<option data-title="Azerbaijan" value="AZ">
						Azerbaijan
					</option>
					<option data-title="Bahamas" value="BS">Bahamas
					</option>
					<option data-title="Bahrain" value="BH">Bahrain
					</option>
					<option data-title="Bangladesh" value="BD">
						Bangladesh
					</option>
					<option data-title="Barbados" value="BB">Barbados
					</option>
					<option data-title="Belarus" value="BY">Belarus
					</option>
					<option data-title="Belgium" value="BE">Belgium
					</option>
					<option data-title="Belize" value="BZ">Belize
					</option>
					<option data-title="Benin" value="BJ">Benin</option>
					<option data-title="Bermuda" value="BM">Bermuda
					</option>
					<option data-title="Bhutan" value="BT">Bhutan
					</option>
					<option data-title="Bolivia" value="BO">Bolivia
					</option>
					<option data-title="Bosnia &amp; Herzegovina"
					value="BA">Bosnia &amp; Herzegovina
				</option>
				<option data-title="Botswana" value="BW">Botswana
				</option>
				<option data-title="Bouvet Island" value="BV">Bouvet
					Island
				</option>
				<option data-title="Brazil" value="BR">Brazil
				</option>
				<option data-title="British Indian Ocean Territory"
				value="IO">British Indian Ocean Territory
			</option>
			<option data-title="British Virgin Islands"
			value="VG">British Virgin Islands
		</option>
		<option data-title="Brunei" value="BN">Brunei
		</option>
		<option data-title="Bulgaria" value="BG">Bulgaria
		</option>
		<option data-title="Burkina Faso" value="BF">Burkina
			Faso
		</option>
		<option data-title="Burundi" value="BI">Burundi
		</option>
		<option data-title="Cambodia" value="KH">Cambodia
		</option>
		<option data-title="Cameroon" value="CM">Cameroon
		</option>
		<option data-title="Canada" value="CA">Canada
		</option>
		<option data-title="Cape Verde" value="CV">Cape
			Verde
		</option>
		<option data-title="Cayman Islands" value="KY">
			Cayman Islands
		</option>
		<option data-title="Central African Republic"
		value="CF">Central African Republic
	</option>
	<option data-title="Chad" value="TD">Chad</option>
	<option data-title="Chile" value="CL">Chile</option>
	<option data-title="China" value="CN">China</option>
	<option data-title="Christmas Island" value="CX">
		Christmas Island
	</option>
	<option data-title="Cocos (Keeling) Islands"
	value="CC">Cocos (Keeling) Islands
</option>
<option data-title="Colombia" value="CO">Colombia
</option>
<option data-title="Comoros" value="KM">Comoros
</option>
<option data-title="Congo - Brazzaville" value="CG">
	Congo - Brazzaville
</option>
<option data-title="Congo - Kinshasa" value="CD">
	Congo - Kinshasa
</option>
<option data-title="Cook Islands" value="CK">Cook
	Islands
</option>
<option data-title="Costa Rica" value="CR">Costa
	Rica
</option>
<option data-title="Côte d’Ivoire" value="CI">Côte
	d’Ivoire
</option>
<option data-title="Croatia" value="HR">Croatia
</option>
<option data-title="Cuba" value="CU">Cuba</option>
<option data-title="Cyprus" value="CY">Cyprus
</option>
<option data-title="Czechia" value="CZ">Czechia
</option>
<option data-title="Denmark" value="DK">Denmark
</option>
<option data-title="Djibouti" value="DJ">Djibouti
</option>
<option data-title="Dominica" value="DM">Dominica
</option>
<option data-title="Dominican Republic" value="DO">
	Dominican Republic
</option>
<option data-title="Ecuador" value="EC">Ecuador
</option>
<option data-title="Egypt" value="EG">Egypt</option>
<option data-title="El Salvador" value="SV">El
	Salvador
</option>
<option data-title="Equatorial Guinea" value="GQ">
	Equatorial Guinea
</option>
<option data-title="Eritrea" value="ER">Eritrea
</option>
<option data-title="Estonia" value="EE">Estonia
</option>
<option data-title="Ethiopia" value="ET">Ethiopia
</option>
<option data-title="Falkland Islands" value="FK">
	Falkland Islands
</option>
<option data-title="Faroe Islands" value="FO">Faroe
	Islands
</option>
<option data-title="Fiji" value="FJ">Fiji</option>
<option data-title="Finland" value="FI">Finland
</option>
<option data-title="France" value="FR">France
</option>
<option data-title="French Guiana" value="GF">French
	Guiana
</option>
<option data-title="French Polynesia" value="PF">
	French Polynesia
</option>
<option data-title="French Southern Territories"
value="TF">French Southern Territories
</option>
<option data-title="Gabon" value="GA">Gabon</option>
<option data-title="Gambia" value="GM">Gambia
</option>
<option data-title="Georgia" value="GE">Georgia
</option>
<option data-title="Germany" value="DE">Germany
</option>
<option data-title="Ghana" value="GH">Ghana</option>
<option data-title="Gibraltar" value="GI">
	Gibraltar
</option>
<option data-title="Greece" value="GR">Greece
</option>
<option data-title="Greenland" value="GL">
	Greenland
</option>
<option data-title="Grenada" value="GD">Grenada
</option>
<option data-title="Guadeloupe" value="GP">
	Guadeloupe
</option>
<option data-title="Guam" value="GU">Guam</option>
<option data-title="Guatemala" value="GT">
	Guatemala
</option>
<option data-title="Guernsey" value="GG">Guernsey
</option>
<option data-title="Guinea" value="GN">Guinea
</option>
<option data-title="Guinea-Bissau" value="GW">
	Guinea-Bissau
</option>
<option data-title="Guyana" value="GY">Guyana
</option>
<option data-title="Haiti" value="HT">Haiti</option>
<option data-title="Heard &amp; McDonald Islands"
value="HM">Heard &amp; McDonald Islands
</option>
<option data-title="Honduras" value="HN">Honduras
</option>
<option data-title="Hong Kong SAR China" value="HK">
	Hong Kong SAR China
</option>
<option data-title="Hungary" value="HU">Hungary
</option>
<option data-title="Iceland" value="IS">Iceland
</option>
<option data-title="India" value="IN">India</option>
<option data-title="Indonesia" value="ID">
	Indonesia
</option>
<option data-title="Iran" value="IR">Iran</option>
<option data-title="Iraq" value="IQ">Iraq</option>
<option data-title="Ireland" value="IE">Ireland
</option>
<option data-title="Isle of Man" value="IM">Isle of
	Man
</option>
<option data-title="Israel" value="IL">Israel
</option>
<option data-title="Italy" value="IT">Italy</option>
<option data-title="Jamaica" value="JM">Jamaica
</option>
<option data-title="Japan" value="JP">Japan</option>
<option data-title="Jersey" value="JE">Jersey
</option>
<option data-title="Jordan" value="JO">Jordan
</option>
<option data-title="Kazakhstan" value="KZ">
	Kazakhstan
</option>
<option data-title="Kenya" value="KE">Kenya</option>
<option data-title="Kiribati" value="KI">Kiribati
</option>
<option data-title="Kuwait" value="KW">Kuwait
</option>
<option data-title="Kyrgyzstan" value="KG">
	Kyrgyzstan
</option>
<option data-title="Laos" value="LA">Laos</option>
<option data-title="Latvia" value="LV">Latvia
</option>
<option data-title="Lebanon" value="LB">Lebanon
</option>
<option data-title="Lesotho" value="LS">Lesotho
</option>
<option data-title="Liberia" value="LR">Liberia
</option>
<option data-title="Libya" value="LY">Libya</option>
<option data-title="Liechtenstein" value="LI">
	Liechtenstein
</option>
<option data-title="Lithuania" value="LT">
	Lithuania
</option>
<option data-title="Luxembourg" value="LU">
	Luxembourg
</option>
<option data-title="Macau SAR China" value="MO">
	Macau SAR China
</option>
<option data-title="Macedonia" value="MK">
	Macedonia
</option>
<option data-title="Madagascar" value="MG">
	Madagascar
</option>
<option data-title="Malawi" value="MW">Malawi
</option>
<option data-title="Malaysia" value="MY">Malaysia
</option>
<option data-title="Maldives" value="MV">Maldives
</option>
<option data-title="Mali" value="ML">Mali</option>
<option data-title="Malta" value="MT">Malta</option>
<option data-title="Marshall Islands" value="MH">
	Marshall Islands
</option>
<option data-title="Martinique" value="MQ">
	Martinique
</option>
<option data-title="Mauritania" value="MR">
	Mauritania
</option>
<option data-title="Mauritius" value="MU">
	Mauritius
</option>
<option data-title="Mayotte" value="YT">Mayotte
</option>
<option data-title="Mexico" value="MX">Mexico
</option>
<option data-title="Micronesia" value="FM">
	Micronesia
</option>
<option data-title="Moldova" value="MD">Moldova
</option>
<option data-title="Monaco" value="MC">Monaco
</option>
<option data-title="Mongolia" value="MN">Mongolia
</option>
<option data-title="Montenegro" value="ME">
	Montenegro
</option>
<option data-title="Montserrat" value="MS">
	Montserrat
</option>
<option data-title="Morocco" value="MA">Morocco
</option>
<option data-title="Mozambique" value="MZ">
	Mozambique
</option>
<option data-title="Myanmar (Burma)" value="MM">
	Myanmar (Burma)
</option>
<option data-title="Namibia" value="NA">Namibia
</option>
<option data-title="Nauru" value="NR">Nauru</option>
<option data-title="Nepal" value="NP">Nepal</option>
<option data-title="Netherlands" value="NL">
	Netherlands
</option>
<option data-title="New Caledonia" value="NC">New
	Caledonia
</option>
<option data-title="New Zealand" value="NZ">New
	Zealand
</option>
<option data-title="Nicaragua" value="NI">
	Nicaragua
</option>
<option data-title="Niger" value="NE">Niger</option>
<option data-title="Nigeria" value="NG">Nigeria
</option>
<option data-title="Niue" value="NU">Niue</option>
<option data-title="Norfolk Island" value="NF">
	Norfolk Island
</option>
<option data-title="Northern Mariana Islands"
value="MP">Northern Mariana Islands
</option>
<option data-title="North Korea" value="KP">North
	Korea
</option>
<option data-title="Norway" value="NO">Norway
</option>
<option data-title="Oman" value="OM">Oman</option>
<option data-title="Pakistan" value="PK">Pakistan
</option>
<option data-title="Palau" value="PW">Palau</option>
<option data-title="Palestinian Territories"
value="PS">Palestinian Territories
</option>
<option data-title="Panama" value="PA">Panama
</option>
<option data-title="Papua New Guinea" value="PG">
	Papua New Guinea
</option>
<option data-title="Paraguay" value="PY">Paraguay
</option>
<option data-title="Peru" value="PE">Peru</option>
<option data-title="Philippines" value="PH">
	Philippines
</option>
<option data-title="Pitcairn Islands" value="PN">
	Pitcairn Islands
</option>
<option data-title="Poland" value="PL">Poland
</option>
<option data-title="Portugal" value="PT">Portugal
</option>
<option data-title="Qatar" value="QA">Qatar</option>
<option data-title="Réunion" value="RE">Réunion
</option>
<option data-title="Romania" value="RO">Romania
</option>
<option data-title="Russia" value="RU">Russia
</option>
<option data-title="Rwanda" value="RW">Rwanda
</option>
<option data-title="Samoa" value="WS">Samoa</option>
<option data-title="San Marino" value="SM">San
	Marino
</option>
<option data-title="São Tomé &amp; Príncipe"
value="ST">São Tomé &amp; Príncipe
</option>
<option data-title="Saudi Arabia" value="SA">Saudi
	Arabia
</option>
<option data-title="Senegal" value="SN">Senegal
</option>
<option data-title="Serbia" value="RS">Serbia
</option>
<option data-title="Seychelles" value="SC">
	Seychelles
</option>
<option data-title="Sierra Leone" value="SL">Sierra
	Leone
</option>
<option data-title="Singapore" value="SG">
	Singapore
</option>
<option data-title="Slovakia" value="SK">Slovakia
</option>
<option data-title="Slovenia" value="SI">Slovenia
</option>
<option data-title="Solomon Islands" value="SB">
	Solomon Islands
</option>
<option data-title="Somalia" value="SO">Somalia
</option>
<option data-title="South Africa" value="ZA">South
	Africa
</option>
<option
data-title="South Georgia &amp; South Sandwich Islands"
value="GS">South Georgia &amp; South Sandwich
Islands
</option>
<option data-title="South Korea" value="KR">South
	Korea
</option>
<option data-title="Spain" value="ES">Spain</option>
<option data-title="Sri Lanka" value="LK">Sri
	Lanka
</option>
<option data-title="St. Barthélemy" value="BL">St.
	Barthélemy
</option>
<option data-title="St. Helena" value="SH">St.
	Helena
</option>
<option data-title="St. Kitts &amp; Nevis"
value="KN">St. Kitts &amp; Nevis
</option>
<option data-title="St. Lucia" value="LC">St.
	Lucia
</option>
<option data-title="St. Martin" value="MF">St.
	Martin
</option>
<option data-title="St. Pierre &amp; Miquelon"
value="PM">St. Pierre &amp; Miquelon
</option>
<option data-title="St. Vincent &amp; Grenadines"
value="VC">St. Vincent &amp; Grenadines
</option>
<option data-title="Sudan" value="SD">Sudan</option>
<option data-title="Suriname" value="SR">Suriname
</option>
<option data-title="Svalbard &amp; Jan Mayen"
value="SJ">Svalbard &amp; Jan Mayen
</option>
<option data-title="Swaziland" value="SZ">
	Swaziland
</option>
<option data-title="Sweden" value="SE">Sweden
</option>
<option data-title="Switzerland" value="CH">
	Switzerland
</option>
<option data-title="Syria" value="SY">Syria</option>
<option data-title="Taiwan" value="TW">Taiwan
</option>
<option data-title="Tajikistan" value="TJ">
	Tajikistan
</option>
<option data-title="Tanzania" value="TZ">Tanzania
</option>
<option data-title="Thailand" value="TH">Thailand
</option>
<option data-title="Timor-Leste" value="TL">
	Timor-Leste
</option>
<option data-title="Togo" value="TG">Togo</option>
<option data-title="Tokelau" value="TK">Tokelau
</option>
<option data-title="Tonga" value="TO">Tonga</option>
<option data-title="Trinidad &amp; Tobago"
value="TT">Trinidad &amp; Tobago
</option>
<option data-title="Tunisia" value="TN">Tunisia
</option>
<option data-title="Turkey" value="TR">Turkey
</option>
<option data-title="Turkmenistan" value="TM">
	Turkmenistan
</option>
<option data-title="Turks &amp; Caicos Islands"
value="TC">Turks &amp; Caicos Islands
</option>
<option data-title="Tuvalu" value="TV">Tuvalu
</option>
<option data-title="Uganda" value="UG">Uganda
</option>
<option data-title="Ukraine" value="UA">Ukraine
</option>
<option data-title="United Arab Emirates"
value="AE">United Arab Emirates
</option>
<option data-title="United Kingdom" value="GB">
	United Kingdom
</option>
<option data-title="United States" value="US">United
	States
</option>
<option data-title="Uruguay" value="UY">Uruguay
</option>
<option data-title="U.S. Outlying Islands"
value="UM">U.S. Outlying Islands
</option>
<option data-title="U.S. Virgin Islands" value="VI">
	U.S. Virgin Islands
</option>
<option data-title="Uzbekistan" value="UZ">
	Uzbekistan
</option>
<option data-title="Vanuatu" value="VU">Vanuatu
</option>
<option data-title="Vatican City" value="VA">Vatican
	City
</option>
<option data-title="Venezuela" value="VE">
	Venezuela
</option>
<option data-title="Vietnam" value="VN">Vietnam
</option>
<option data-title="Wallis &amp; Futuna" value="WF">
	Wallis &amp; Futuna
</option>
<option data-title="Western Sahara" value="EH">
	Western Sahara
</option>
<option data-title="Yemen" value="YE">Yemen</option>
<option data-title="Zambia" value="ZM">Zambia
</option>
<option data-title="Zimbabwe" value="ZW">Zimbabwe
</option>
</select>
<!-- /ko -->
<!-- /ko -->

<!-- ko if: element.hasAddons() --><!-- /ko -->

<!-- ko if: element.tooltip --><!-- /ko -->

<!-- ko if: element.notice --><!-- /ko -->

<!-- ko if: element.error() --><!-- /ko -->

<!-- ko if: element.warn() --><!-- /ko -->
</div>
</div>
<!-- /ko -->
<!-- /ko --><!-- /ko -->

<!-- ko if: hasTemplate() --><!-- /ko -->

<!-- ko if: hasTemplate() --><!-- ko template: getTemplate() -->
<div class="field"
data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses"
name="shippingAddress.region_id">

<label class="label" data-bind="attr: { for: element.uid }"
for="NOF03AF">
<!-- ko if: element.label -->
<span
data-bind="i18n: element.label">State/Province</span>
<!-- /ko -->
</label>

<div class="control"
data-bind="css: {'_with-tooltip': element.tooltip}">
<!-- ko ifnot: element.hasAddons() -->
<!-- ko template: element.elementTmpl -->
<select class="select" name="region_id" id="NOF03AF" aria-invalid="false">
	<option value="">Please select a region, state or
		province.
	</option>
	<option data-title="Andaman and Nicobar Islands"
	value="533">Andaman and Nicobar Islands
</option>
<option data-title="Andhra Pradesh" value="534">
	Andhra Pradesh
</option>
<option data-title="Arunachal Pradesh" value="535">
	Arunachal Pradesh
</option>
<option data-title="Assam" value="536">Assam
</option>
<option data-title="Bihar" value="537">Bihar
</option>
<option data-title="Chandigarh" value="538">
	Chandigarh
</option>
<option data-title="Chhattisgarh" value="539">
	Chhattisgarh
</option>
<option data-title="Dadra and Nagar Haveli"
value="540">Dadra and Nagar Haveli
</option>
<option data-title="Daman and Diu" value="541">Daman
	and Diu
</option>
<option data-title="Delhi" value="542">Delhi
</option>
<option data-title="Goa" value="543">Goa</option>
<option data-title="Gujarat" value="544">Gujarat
</option>
<option data-title="Haryana" value="545">Haryana
</option>
<option data-title="Himachal Pradesh" value="546">
	Himachal Pradesh
</option>
<option data-title="Jammu and Kashmir" value="547">
	Jammu and Kashmir
</option>
<option data-title="Jharkhand" value="548">
	Jharkhand
</option>
<option data-title="Karnataka" value="549">
	Karnataka
</option>
<option data-title="Kerala" value="550">Kerala
</option>
<option data-title="Lakshadweep" value="551">
	Lakshadweep
</option>
<option data-title="Madhya Pradesh" value="552">
	Madhya Pradesh
</option>
<option data-title="Maharashtra" value="553">
	Maharashtra
</option>
<option data-title="Manipur" value="554">Manipur
</option>
<option data-title="Meghalaya" value="555">
	Meghalaya
</option>
<option data-title="Mizoram" value="556">Mizoram
</option>
<option data-title="Nagaland" value="557">Nagaland
</option>
<option data-title="Odisha" value="558">Odisha
</option>
<option data-title="Puducherry" value="559">
	Puducherry
</option>
<option data-title="Punjab" value="560">Punjab
</option>
<option data-title="Rajasthan" value="561">
	Rajasthan
</option>
<option data-title="Sikkim" value="562">Sikkim
</option>
<option data-title="Tamil Nadu" value="563">Tamil
	Nadu
</option>
<option data-title="Telangana" value="564">
	Telangana
</option>
<option data-title="Tripura" value="565">Tripura
</option>
<option data-title="Uttar Pradesh" value="566">Uttar
	Pradesh
</option>
<option data-title="Uttarakhand" value="567">
	Uttarakhand
</option>
<option data-title="West Bengal" value="568">West
	Bengal
</option>
</select>
<!-- /ko -->
<!-- /ko -->

<!-- ko if: element.hasAddons() --><!-- /ko -->

<!-- ko if: element.tooltip --><!-- /ko -->

<!-- ko if: element.notice --><!-- /ko -->

<!-- ko if: element.error() --><!-- /ko -->

<!-- ko if: element.warn() --><!-- /ko -->
</div>
</div>
<!-- /ko -->
<!-- /ko --><!-- /ko -->

<!-- ko if: hasTemplate() --><!-- ko template: getTemplate() -->
<div class="field"
data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses"
name="shippingAddress.region" style="display: none;">

<label class="label" data-bind="attr: { for: element.uid }"
for="EXQGPYJ">
<!-- ko if: element.label -->
<span
data-bind="i18n: element.label">State/Province</span>
<!-- /ko -->
</label>

<div class="control"
data-bind="css: {'_with-tooltip': element.tooltip}">
<!-- ko ifnot: element.hasAddons() -->
<!-- ko template: element.elementTmpl -->
<input class="input-text" type="text" data-bind="
value: value,
valueUpdate: 'keyup',
hasFocus: focused,
attr: {
name: inputName,
placeholder: placeholder,
'aria-describedby': getDescriptionId(),
'aria-required': required,
'aria-invalid': error() ? true : 'false',
id: uid,
disabled: disabled
}" name="region" aria-invalid="false" id="EXQGPYJ">
<!-- /ko -->
<!-- /ko -->

<!-- ko if: element.hasAddons() --><!-- /ko -->

<!-- ko if: element.tooltip --><!-- /ko -->

<!-- ko if: element.notice --><!-- /ko -->

<!-- ko if: element.error() --><!-- /ko -->

<!-- ko if: element.warn() --><!-- /ko -->
</div>
</div>
<!-- /ko -->
<!-- /ko --><!-- /ko -->

<!-- ko if: hasTemplate() --><!-- ko template: getTemplate() -->
<div class="field"
data-bind="visible: visible, attr: {'name': element.dataScope}, css: additionalClasses"
name="shippingAddress.postcode">

<label class="label" data-bind="attr: { for: element.uid }"
for="DAQQECQ">
<!-- ko if: element.label -->
<span
data-bind="i18n: element.label">Zip/Postal Code</span>
<!-- /ko -->
</label>

<div class="control"
data-bind="css: {'_with-tooltip': element.tooltip}">
<!-- ko ifnot: element.hasAddons() -->
<!-- ko template: element.elementTmpl -->
<input class="input-text" type="text" data-bind="
value: value,
valueUpdate: 'keyup',
hasFocus: focused,
attr: {
name: inputName,
placeholder: placeholder,
'aria-describedby': getDescriptionId(),
'aria-required': required,
'aria-invalid': error() ? true : 'false',
id: uid,
disabled: disabled
}" name="postcode" aria-invalid="false" id="DAQQECQ">
<!-- /ko -->
<!-- /ko -->

<!-- ko if: element.hasAddons() --><!-- /ko -->

<!-- ko if: element.tooltip --><!-- /ko -->

<!-- ko if: element.notice --><!-- /ko -->

<!-- ko if: element.error() --><!-- /ko -->

<!-- ko if: element.warn() --><!-- /ko -->
</div>
</div>
<!-- /ko -->
<!-- /ko --><!-- /ko -->
<!-- /ko -->
<!-- /ko -->
<!--/ko-->
</fieldset>
</form>
<!-- /ko --><!-- /ko -->

<!-- ko if: hasTemplate() --><!-- ko template: getTemplate() -->
<form id="co-shipping-method-form"
data-bind="blockLoader: isLoading, visible: isVisible()" class="">
<p class="field note"
data-bind="visible: (!isLoading() &amp;&amp; shippingRates().length <= 0)"
style="">
<!-- ko text: $t('Sorry, no quotes are available for this order at this time')-->
Sorry, no quotes are available for this order at this time
<!-- /ko -->
</p>
<fieldset class="fieldset rate"
data-bind="visible: (shippingRates().length > 0)"
style="display: none;">
<dl class="items methods"
data-bind="foreach: shippingRateGroups"></dl>
</fieldset>
</form>
<!-- /ko --><!-- /ko -->
<!-- /ko -->
<!-- /ko -->
<script>
	window.checkoutConfig = {
		"payment": {
			"ccform": {
				"icons": {
					"AE": {
						"url": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/pub\/static\/frontend\/Sm\/market\/en_US\/Magento_Payment\/images\/cc\/ae.png",
						"width": 46,
						"height": 30,
						"title": "American Express"
					},
					"VI": {
						"url": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/pub\/static\/frontend\/Sm\/market\/en_US\/Magento_Payment\/images\/cc\/vi.png",
						"width": 46,
						"height": 30,
						"title": "Visa"
					},
					"MC": {
						"url": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/pub\/static\/frontend\/Sm\/market\/en_US\/Magento_Payment\/images\/cc\/mc.png",
						"width": 46,
						"height": 30,
						"title": "MasterCard"
					},
					"DI": {
						"url": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/pub\/static\/frontend\/Sm\/market\/en_US\/Magento_Payment\/images\/cc\/di.png",
						"width": 46,
						"height": 30,
						"title": "Discover"
					},
					"JCB": {
						"url": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/pub\/static\/frontend\/Sm\/market\/en_US\/Magento_Payment\/images\/cc\/jcb.png",
						"width": 46,
						"height": 30,
						"title": "JCB"
					},
					"SM": {
						"url": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/pub\/static\/frontend\/Sm\/market\/en_US\/Magento_Payment\/images\/cc\/sm.png",
						"width": 46,
						"height": 30,
						"title": "Switch\/Maestro"
					},
					"DN": {
						"url": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/pub\/static\/frontend\/Sm\/market\/en_US\/Magento_Payment\/images\/cc\/dn.png",
						"width": 46,
						"height": 30,
						"title": "Diners"
					},
					"SO": {
						"url": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/pub\/static\/frontend\/Sm\/market\/en_US\/Magento_Payment\/images\/cc\/so.png",
						"width": 46,
						"height": 30,
						"title": "Solo"
					},
					"MI": {
						"url": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/pub\/static\/frontend\/Sm\/market\/en_US\/Magento_Payment\/images\/cc\/mi.png",
						"width": 46,
						"height": 30,
						"title": "Maestro International"
					},
					"MD": {
						"url": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/pub\/static\/frontend\/Sm\/market\/en_US\/Magento_Payment\/images\/cc\/md.png",
						"width": 46,
						"height": 30,
						"title": "Maestro Domestic"
					},
					"HC": {
						"url": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/pub\/static\/frontend\/Sm\/market\/en_US\/Magento_Payment\/images\/cc\/hc.png",
						"width": 46,
						"height": 30,
						"title": "Hipercard"
					},
					"ELO": {
						"url": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/pub\/static\/frontend\/Sm\/market\/en_US\/Magento_Payment\/images\/cc\/elo.png",
						"width": 46,
						"height": 30,
						"title": "Elo"
					},
					"AU": {
						"url": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/pub\/static\/frontend\/Sm\/market\/en_US\/Magento_Payment\/images\/cc\/au.png",
						"width": 46,
						"height": 30,
						"title": "Aura"
					}
				}
			},
			"checkmo": {"mailingAddress": "", "payableTo": null},
			"iframe": {
				"timeoutTime": {
					"authorizenet_directpost": 30000,
					"payflowpro": 30000
				},
				"dateDelim": {
					"authorizenet_directpost": "",
					"payflowpro": ""
				},
				"cardFieldsMap": {
					"authorizenet_directpost": [],
					"payflowpro": []
				},
				"source": {
					"authorizenet_directpost": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/pub\/static\/frontend\/Sm\/market\/en_US\/blank.html",
					"payflowpro": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/pub\/static\/frontend\/Sm\/market\/en_US\/blank.html"
				},
				"controllerName": {
					"authorizenet_directpost": "checkout_flow",
					"payflowpro": "checkout_flow"
				},
				"cgiUrl": {
					"authorizenet_directpost": "https:\/\/secure.authorize.net\/gateway\/transact.dll",
					"payflowpro": "https:\/\/payflowlink.paypal.com"
				},
				"placeOrderUrl": {
					"authorizenet_directpost": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/thailand\/authorizenet\/directpost_payment\/place\/",
					"payflowpro": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/thailand\/paypal\/transparent\/requestSecureToken\/"
				},
				"saveOrderUrl": {
					"authorizenet_directpost": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/thailand\/checkout\/onepage\/saveOrder\/",
					"payflowpro": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/thailand\/checkout\/onepage\/saveOrder\/"
				},
				"expireYearLength": {
					"authorizenet_directpost": 2,
					"payflowpro": 2
				}
			},
			"paypalExpress": {
				"paymentAcceptanceMarkHref": "https:\/\/www.paypal.com\/us\/cgi-bin\/webscr?cmd=xpt\/Marketing\/popup\/OLCWhatIsPayPal-outside",
				"paymentAcceptanceMarkSrc": "https:\/\/www.paypalobjects.com\/webstatic\/en_US\/i\/buttons\/pp-acceptance-medium.png",
				"isContextCheckout": false,
				"inContextConfig": []
			},
			"paypalIframe": [],
			"paypalBillingAgreement": {
				"agreements": [],
				"transportName": "ba_agreement_id"
			},
			"authorizenet_acceptjs": {
				"clientKey": null,
				"apiLoginID": "",
				"environment": "production",
				"useCvv": true
			},
			"braintree": {
				"isActive": false,
				"clientToken": null,
				"ccTypesMapper": {
					"american-express": "AE",
					"discover": "DI",
					"jcb": "JCB",
					"mastercard": "MC",
					"master-card": "MC",
					"visa": "VI",
					"maestro": "MI",
					"diners-club": "DN",
					"unionpay": "CUP"
				},
				"sdkUrl": "https:\/\/js.braintreegateway.com\/web\/3.44.1\/js\/client.min.js",
				"hostedFieldsSdkUrl": "https:\/\/js.braintreegateway.com\/web\/3.44.1\/js\/hosted-fields.min.js",
				"countrySpecificCardTypes": [],
				"availableCardTypes": ["AE", "VI", "MC", "DI", "JCB", "CUP", "DN", "MI"],
				"useCvv": true,
				"environment": "sandbox",
				"hasFraudProtection": false,
				"merchantId": null,
				"ccVaultCode": "braintree_cc_vault"
			},
			"three_d_secure": {
				"enabled": false,
				"thresholdAmount": 0,
				"specificCountries": []
			},
			"braintree_paypal": {
				"isActive": false,
				"title": "PayPal (Braintree)",
				"isAllowShippingAddressOverride": true,
				"merchantName": null,
				"locale": "en_US",
				"paymentAcceptanceMarkSrc": "https:\/\/www.paypalobjects.com\/webstatic\/en_US\/i\/buttons\/pp-acceptance-medium.png",
				"vaultCode": "braintree_paypal_vault",
				"skipOrderReview": false,
				"paymentIcon": {
					"url": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/pub\/static\/frontend\/Sm\/market\/en_US\/Magento_Braintree\/images\/paypal.png",
					"width": 54,
					"height": 32
				},
				"isRequiredBillingAddress": false
			},
			"klarna_kp": {
				"client_token": null,
				"message": "Klarna Payments is not enabled",
				"success": 0,
				"debug": true,
				"enabled": false,
				"b2b_enabled": false,
				"available_methods": {
					"type": "klarna_kp",
					"component": "Klarna_Kp\/js\/view\/payments\/kp"
				}
			}
		},
		"formKey": "8vQwRtClfafwZh3a",
		"customerData": [],
		"quoteData": {
			"entity_id": "ijvGTaVslrTxeSUiQeZAHIIkVEVtWPSD",
			"store_id": 17,
			"created_at": "2020-02-22 14:11:49",
			"updated_at": "2020-02-22 14:12:04",
			"converted_at": null,
			"is_active": "1",
			"is_virtual": 0,
			"is_multi_shipping": "0",
			"items_count": "2",
			"items_qty": "2.0000",
			"orig_order_id": "0",
			"store_to_base_rate": "0.0000",
			"store_to_quote_rate": "0.0000",
			"base_currency_code": "USD",
			"store_currency_code": "USD",
			"quote_currency_code": "USD",
			"grand_total": "456.0000",
			"base_grand_total": "456.0000",
			"checkout_method": null,
			"customer_id": null,
			"customer_tax_class_id": "3",
			"customer_group_id": "0",
			"customer_email": null,
			"customer_prefix": null,
			"customer_firstname": null,
			"customer_middlename": null,
			"customer_lastname": null,
			"customer_suffix": null,
			"customer_dob": null,
			"customer_note": null,
			"customer_note_notify": "1",
			"customer_is_guest": "0",
			"remote_ip": "27.60.96.157",
			"applied_rule_ids": "2,3",
			"reserved_order_id": null,
			"password_hash": null,
			"coupon_code": null,
			"global_currency_code": "USD",
			"base_to_global_rate": "1.0000",
			"base_to_quote_rate": "1.0000",
			"customer_taxvat": null,
			"customer_gender": null,
			"subtotal": "570.0000",
			"base_subtotal": "570.0000",
			"subtotal_with_discount": "456.0000",
			"base_subtotal_with_discount": "456.0000",
			"is_changed": "1",
			"trigger_recollect": "0",
			"ext_shipping_info": null,
			"is_persistent": "0",
			"gift_message_id": null,
			"items": [{}, {}],
			"extension_attributes": {},
			"x_forwarded_for": null,
			"messages": []
		},
		"quoteItemData": [{
			"item_id": "2835",
			"quote_id": "1733",
			"created_at": "2020-02-22 14:11:49",
			"updated_at": "2020-02-22 14:11:49",
			"product_id": "2280",
			"store_id": 17,
			"parent_item_id": null,
			"is_virtual": "0",
			"sku": "MK-8593105",
			"name": "Acer Aspire S24 All In One PC",
			"description": null,
			"applied_rule_ids": "2,3",
			"additional_data": null,
			"is_qty_decimal": false,
			"no_discount": "0",
			"weight": null,
			"qty": 1,
			"price": "400.0000",
			"base_price": "400.0000",
			"custom_price": null,
			"discount_percent": "20.0000",
			"discount_amount": "80.0000",
			"base_discount_amount": "80.0000",
			"tax_percent": "0.0000",
			"tax_amount": "0.0000",
			"base_tax_amount": "0.0000",
			"row_total": "400.0000",
			"base_row_total": "400.0000",
			"row_total_with_discount": "0.0000",
			"row_weight": "0.0000",
			"product_type": "simple",
			"base_tax_before_discount": null,
			"tax_before_discount": null,
			"original_custom_price": null,
			"redirect_url": null,
			"base_cost": null,
			"price_incl_tax": "400.0000",
			"base_price_incl_tax": "400.0000",
			"row_total_incl_tax": "400.0000",
			"base_row_total_incl_tax": "400.0000",
			"discount_tax_compensation_amount": "0.0000",
			"base_discount_tax_compensation_amount": "0.0000",
			"free_shipping": "0",
			"gift_message_id": null,
			"weee_tax_applied": null,
			"weee_tax_applied_amount": null,
			"weee_tax_applied_row_amount": null,
			"weee_tax_disposition": null,
			"weee_tax_row_disposition": null,
			"base_weee_tax_applied_amount": null,
			"base_weee_tax_applied_row_amnt": null,
			"base_weee_tax_disposition": null,
			"base_weee_tax_row_disposition": null,
			"is_excluded_product": "0",
			"qty_options": [],
			"product": {
				"entity_id": "2280",
				"attribute_set_id": "4",
				"type_id": "simple",
				"sku": "MK-8593105",
				"has_options": "0",
				"required_options": "0",
				"created_at": "2018-03-14 04:00:13",
				"updated_at": "2019-03-27 06:52:53",
				"price": "450.000000",
				"special_price": "400.000000",
				"name": "Acer Aspire S24 All In One PC",
				"small_image": "\/\/a\/c\/acer_aspire_s24_all-in-one_pc_2.jpg",
				"thumbnail": "\/\/a\/c\/acer_aspire_s24_all-in-one_pc_2.jpg",
				"msrp_display_actual_price_type": "0",
				"url_key": "acer-all-in-one-computers",
				"gift_message_available": "2",
				"status": "1",
				"visibility": "4",
				"tax_class_id": "2",
				"special_from_date": "2018-03-12 00:00:00",
				"special_to_date": "2020-03-21 00:00:00",
				"store_id": 17,
				"request_path": "acer-all-in-one-computers.html",
				"extension_attributes": {},
				"customer_group_id": "0",
				"final_price": null
			},
			"tax_class_id": "2",
			"has_error": false,
			"stock_state_result": {},
			"options": [],
			"thumbnail": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/pub\/media\/catalog\/product\/cache\/f6ec09cc41f55b89dac6889be607a2b9\/a\/c\/acer_aspire_s24_all-in-one_pc_2.jpg",
			"message": ""
		}, {
			"item_id": "2836",
			"quote_id": "1733",
			"created_at": "2020-02-22 14:12:04",
			"updated_at": "2020-02-22 14:12:04",
			"product_id": "2275",
			"store_id": 17,
			"parent_item_id": null,
			"is_virtual": "0",
			"sku": "MK-7485962",
			"name": "Philips HR1861 Whole Fruit Juicer",
			"description": null,
			"applied_rule_ids": "2,3",
			"additional_data": null,
			"is_qty_decimal": false,
			"no_discount": "0",
			"weight": null,
			"qty": 1,
			"price": "170.0000",
			"base_price": "170.0000",
			"custom_price": null,
			"discount_percent": "20.0000",
			"discount_amount": "34.0000",
			"base_discount_amount": "34.0000",
			"tax_percent": "0.0000",
			"tax_amount": "0.0000",
			"base_tax_amount": "0.0000",
			"row_total": "170.0000",
			"base_row_total": "170.0000",
			"row_total_with_discount": "0.0000",
			"row_weight": "0.0000",
			"product_type": "simple",
			"base_tax_before_discount": null,
			"tax_before_discount": null,
			"original_custom_price": null,
			"redirect_url": null,
			"base_cost": null,
			"price_incl_tax": "170.0000",
			"base_price_incl_tax": "170.0000",
			"row_total_incl_tax": "170.0000",
			"base_row_total_incl_tax": "170.0000",
			"discount_tax_compensation_amount": "0.0000",
			"base_discount_tax_compensation_amount": "0.0000",
			"free_shipping": "0",
			"gift_message_id": null,
			"weee_tax_applied": null,
			"weee_tax_applied_amount": null,
			"weee_tax_applied_row_amount": null,
			"weee_tax_disposition": null,
			"weee_tax_row_disposition": null,
			"base_weee_tax_applied_amount": null,
			"base_weee_tax_applied_row_amnt": null,
			"base_weee_tax_disposition": null,
			"base_weee_tax_row_disposition": null,
			"is_excluded_product": "0",
			"qty_options": [],
			"product": {
				"entity_id": "2275",
				"attribute_set_id": "4",
				"type_id": "simple",
				"sku": "MK-7485962",
				"has_options": "0",
				"required_options": "0",
				"created_at": "2018-03-14 03:31:42",
				"updated_at": "2019-03-27 06:55:47",
				"price": "180.000000",
				"special_price": "170.000000",
				"name": "Philips HR1861 Whole Fruit Juicer",
				"small_image": "\/\/p\/h\/philips_hr1861_whole_fruit_juicer.jpg",
				"thumbnail": "\/\/p\/h\/philips_hr1861_whole_fruit_juicer.jpg",
				"msrp_display_actual_price_type": "0",
				"url_key": "electrolux-efls61-washing-machine",
				"gift_message_available": "2",
				"status": "1",
				"visibility": "4",
				"tax_class_id": "2",
				"special_from_date": "2018-03-12 00:00:00",
				"special_to_date": "2020-03-29 00:00:00",
				"store_id": 17,
				"request_path": "electrolux-efls61-washing-machine.html",
				"extension_attributes": {},
				"customer_group_id": "0",
				"final_price": null
			},
			"tax_class_id": "2",
			"has_error": false,
			"stock_state_result": {},
			"options": [],
			"thumbnail": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/pub\/media\/catalog\/product\/cache\/f6ec09cc41f55b89dac6889be607a2b9\/p\/h\/philips_hr1861_whole_fruit_juicer.jpg",
			"message": ""
		}],
		"quoteMessages": {"2835": "", "2836": ""},
		"isCustomerLoggedIn": false,
		"selectedShippingMethod": null,
		"storeCode": "thailand",
		"isGuestCheckoutAllowed": true,
		"isCustomerLoginRequired": false,
		"registerUrl": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/thailand\/customer\/account\/create\/",
		"checkoutUrl": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/thailand\/checkout\/",
		"defaultSuccessPageUrl": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/thailand\/checkout\/onepage\/success\/",
		"pageNotFoundUrl": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/thailand\/checkout\/noroute\/",
		"forgotPasswordUrl": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/thailand\/customer\/account\/forgotpassword\/",
		"staticBaseUrl": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/pub\/static\/",
		"priceFormat": {
			"pattern": "$%s",
			"precision": 2,
			"requiredPrecision": 2,
			"decimalSymbol": ".",
			"groupSymbol": ",",
			"groupLength": 3,
			"integerRequired": false
		},
		"basePriceFormat": {
			"pattern": "$%s",
			"precision": 2,
			"requiredPrecision": 2,
			"decimalSymbol": ".",
			"groupSymbol": ",",
			"groupLength": 3,
			"integerRequired": false
		},
		"postCodes": {
			"DZ": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"AS": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"AR": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"AM": {
				"pattern_1": {
					"example": "123456",
					"pattern": "^[0-9]{6}$"
				}
			},
			"AU": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"AT": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"AZ": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				},
				"pattern_2": {
					"example": "123456",
					"pattern": "^[0-9]{6}$"
				}
			},
			"BD": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"BY": {
				"pattern_1": {
					"example": "123456",
					"pattern": "^[0-9]{6}$"
				}
			},
			"BE": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"BA": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"BR": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				},
				"pattern_2": {
					"example": "12345-678",
					"pattern": "^[0-9]{5}\\-[0-9]{3}$"
				}
			},
			"BN": {
				"pattern_1": {
					"example": "AB1234",
					"pattern": "^[a-zA-z]{2}[0-9]{4}$"
				}
			},
			"BG": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"CA": {
				"pattern_1": {
					"example": "A1B 2C3",
					"pattern": "^[a-zA-z]{1}[0-9]{1}[a-zA-z]{1}\\s[0-9]{1}[a-zA-z]{1}[0-9]{1}$"
				},
				"pattern_2": {
					"example": "A1B2C3",
					"pattern": "^[a-zA-z]{1}[0-9]{1}[a-zA-z]{1}[0-9]{1}[a-zA-z]{1}[0-9]{1}$"
				}
			},
			"IC": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"CN": {
				"pattern_1": {
					"example": "123456",
					"pattern": "^[0-9]{6}$"
				}
			},
			"HR": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"CU": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"CY": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"CZ": {
				"pattern_1": {
					"example": "123 45",
					"pattern": "^[0-9]{3}\\s[0-9]{2}$"
				}
			},
			"DK": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"EE": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"FI": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"FR": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"GF": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"GE": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"DE": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"GR": {
				"pattern_1": {
					"example": "123 45",
					"pattern": "^[0-9]{3}\\s[0-9]{2}$"
				}
			},
			"GL": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"GP": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"GU": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"GG": {
				"pattern_1": {
					"example": "AB1 2CD",
					"pattern": "^[a-zA-Z]{2}[0-9]{1}\\s[0-9]{1}[a-zA-Z]{2}$"
				}
			},
			"HU": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"IS": {
				"pattern_1": {
					"example": "123",
					"pattern": "^[0-9]{3}$"
				}
			},
			"IN": {
				"pattern_1": {
					"example": "123456",
					"pattern": "^[0-9]{6}$"
				}
			},
			"ID": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"IL": {
				"pattern_1": {
					"example": "6687865",
					"pattern": "^[0-9]{7}$"
				}
			},
			"IT": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"JP": {
				"pattern_1": {
					"example": "123-4567",
					"pattern": "^[0-9]{3}-[0-9]{4}$"
				},
				"pattern_2": {
					"example": "1234567",
					"pattern": "^[0-9]{7}$"
				}
			},
			"JE": {
				"pattern_1": {
					"example": "AB1 2CD",
					"pattern": "^[a-zA-Z]{2}[0-9]{1}\\s[0-9]{1}[a-zA-Z]{2}$"
				}
			},
			"KZ": {
				"pattern_1": {
					"example": "123456",
					"pattern": "^[0-9]{6}$"
				}
			},
			"KE": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"KR": {
				"pattern_1": {
					"example": "123-456",
					"pattern": "^[0-9]{3}-[0-9]{3}$"
				}
			},
			"KG": {
				"pattern_1": {
					"example": "123456",
					"pattern": "^[0-9]{6}$"
				}
			},
			"LV": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"LI": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"LT": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"LU": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"MK": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"MG": {
				"pattern_1": {
					"example": "123",
					"pattern": "^[0-9]{3}$"
				}
			},
			"MY": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"MV": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				},
				"pattern_2": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"MT": {
				"pattern_1": {
					"example": "ABC 1234",
					"pattern": "^[a-zA-Z]{3}\\s[0-9]{4}$"
				},
				"pattern_2": {
					"example": "ABC 123",
					"pattern": "^[a-zA-Z]{3}\\s[0-9]{3}$"
				},
				"pattern_3": {
					"example": "ABC 12",
					"pattern": "^[a-zA-Z]{3}\\s[0-9]{2}$"
				}
			},
			"MH": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"MQ": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"MX": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"MD": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"MC": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"MN": {
				"pattern_1": {
					"example": "123456",
					"pattern": "^[0-9]{6}$"
				}
			},
			"MA": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"NL": {
				"pattern_1": {
					"example": "1234 AB\/1234AB",
					"pattern": "^[1-9][0-9]{3}\\s?[a-zA-Z]{2}$"
				}
			},
			"NO": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"PK": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"PH": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"PL": {
				"pattern_1": {
					"example": "12-345",
					"pattern": "^[0-9]{2}-[0-9]{3}$"
				}
			},
			"PT": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				},
				"pattern_2": {
					"example": "1234-567",
					"pattern": "^[0-9]{4}-[0-9]{3}$"
				}
			},
			"PR": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"RE": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"RO": {
				"pattern_1": {
					"example": "123456",
					"pattern": "^[0-9]{6}$"
				}
			},
			"RU": {
				"pattern_1": {
					"example": "123456",
					"pattern": "^[0-9]{6}$"
				}
			},
			"MP": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"CS": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"SG": {
				"pattern_1": {
					"example": "123456",
					"pattern": "^[0-9]{6}$"
				}
			},
			"SK": {
				"pattern_1": {
					"example": "123 45",
					"pattern": "^[0-9]{3}\\s[0-9]{2}$"
				}
			},
			"SI": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"ZA": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"ES": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"XY": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"SZ": {
				"pattern_1": {
					"example": "A123",
					"pattern": "^[a-zA-Z]{1}[0-9]{3}$"
				}
			},
			"SE": {
				"pattern_1": {
					"example": "123 45",
					"pattern": "^[0-9]{3}\\s[0-9]{2}$"
				}
			},
			"CH": {
				"pattern_1": {
					"example": "1234",
					"pattern": "^[0-9]{4}$"
				}
			},
			"TW": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				},
				"pattern_2": {"example": "123", "pattern": "^[0-9]{3}$"}
			},
			"TJ": {
				"pattern_1": {
					"example": "123456",
					"pattern": "^[0-9]{6}$"
				}
			},
			"TH": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"TR": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"TM": {
				"pattern_1": {
					"example": "123456",
					"pattern": "^[0-9]{6}$"
				}
			},
			"UA": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"GB": {
				"pattern_1": {
					"example": "AB12 3CD",
					"pattern": "^[a-zA-Z]{2}[0-9]{2}\\s?[0-9]{1}[a-zA-Z]{2}$"
				},
				"pattern_2": {
					"example": "A1B 2CD",
					"pattern": "^[a-zA-Z]{1}[0-9]{1}[a-zA-Z]{1}\\s?[0-9]{1}[a-zA-Z]{2}$"
				},
				"pattern_3": {
					"example": "AB1 2CD",
					"pattern": "^[a-zA-Z]{2}[0-9]{1}\\s?[0-9]{1}[a-zA-Z]{2}$"
				},
				"pattern_4": {
					"example": "AB1C 2DF",
					"pattern": "^[a-zA-Z]{2}[0-9]{1}[a-zA-Z]{1}\\s?[0-9]{1}[a-zA-Z]{2}$"
				},
				"pattern_5": {
					"example": "A12 3BC",
					"pattern": "^[a-zA-Z]{1}[0-9]{2}\\s?[0-9]{1}[a-zA-Z]{2}$"
				},
				"pattern_6": {
					"example": "A1 2BC",
					"pattern": "^[a-zA-Z]{1}[0-9]{1}\\s?[0-9]{1}[a-zA-Z]{2}$"
				}
			},
			"US": {
				"pattern_1": {
					"example": "12345-6789",
					"pattern": "^[0-9]{5}\\-[0-9]{4}$"
				},
				"pattern_2": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"UY": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			},
			"UZ": {
				"pattern_1": {
					"example": "123456",
					"pattern": "^[0-9]{6}$"
				}
			},
			"VI": {
				"pattern_1": {
					"example": "12345",
					"pattern": "^[0-9]{5}$"
				}
			}
		},
		"imageData": {
			"2835": {
				"src": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/pub\/media\/catalog\/product\/cache\/50d5888c8afc80ebd84fb3665a54966c\/a\/c\/acer_aspire_s24_all-in-one_pc_2.jpg",
				"alt": "Acer Aspire S24 All In One PC",
				"width": 80,
				"height": 80
			},
			"2836": {
				"src": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/pub\/media\/catalog\/product\/cache\/50d5888c8afc80ebd84fb3665a54966c\/p\/h\/philips_hr1861_whole_fruit_juicer.jpg",
				"alt": "Philips HR1861 Whole Fruit Juicer",
				"width": 80,
				"height": 80
			}
		},
		"totalsData": {
			"subtotal": "570.0000",
			"base_subtotal": "570.0000",
			"subtotal_with_discount": "456.0000",
			"base_subtotal_with_discount": "456.0000",
			"tax_amount": "0.0000",
			"base_tax_amount": "0.0000",
			"shipping_amount": "0.0000",
			"base_shipping_amount": "0.0000",
			"shipping_tax_amount": "0.0000",
			"base_shipping_tax_amount": "0.0000",
			"discount_amount": "-114.0000",
			"base_discount_amount": "-114.0000",
			"grand_total": 456,
			"base_grand_total": "456.0000",
			"shipping_discount_amount": "0.0000",
			"base_shipping_discount_amount": "0.0000",
			"subtotal_incl_tax": "570.0000",
			"shipping_incl_tax": "0.0000",
			"base_shipping_incl_tax": "0.0000",
			"total_segments": [{
				"code": "subtotal",
				"title": "Subtotal",
				"value": "570.0000",
				"area": null,
				"extension_attributes": []
			}, {
				"code": "discount",
				"title": "Discount",
				"value": "-114.0000",
				"area": null,
				"extension_attributes": []
			}, {
				"code": "shipping",
				"title": "Shipping & Handling",
				"value": "0.0000",
				"area": null,
				"extension_attributes": []
			}, {
				"code": "tax",
				"title": "Tax",
				"value": "0.0000",
				"area": null,
				"extension_attributes": {"tax_grandtotal_details": []}
			}, {
				"code": "grand_total",
				"title": "Grand Total",
				"value": "456.0000",
				"area": "footer",
				"extension_attributes": []
			}],
			"coupon_code": null,
			"items": [{
				"item_id": "2835",
				"name": "Acer Aspire S24 All In One PC",
				"qty": 1,
				"price": "400.0000",
				"base_price": "400.0000",
				"discount_percent": "20.0000",
				"discount_amount": "80.0000",
				"base_discount_amount": "80.0000",
				"tax_percent": "0.0000",
				"tax_amount": "0.0000",
				"base_tax_amount": "0.0000",
				"row_total": "400.0000",
				"base_row_total": "400.0000",
				"row_total_with_discount": "0.0000",
				"price_incl_tax": "400.0000",
				"base_price_incl_tax": "400.0000",
				"row_total_incl_tax": "400.0000",
				"base_row_total_incl_tax": "400.0000",
				"weee_tax_applied": null,
				"weee_tax_applied_amount": null,
				"options": "[]"
			}, {
				"item_id": "2836",
				"name": "Philips HR1861 Whole Fruit Juicer",
				"qty": 1,
				"price": "170.0000",
				"base_price": "170.0000",
				"discount_percent": "20.0000",
				"discount_amount": "34.0000",
				"base_discount_amount": "34.0000",
				"tax_percent": "0.0000",
				"tax_amount": "0.0000",
				"base_tax_amount": "0.0000",
				"row_total": "170.0000",
				"base_row_total": "170.0000",
				"row_total_with_discount": "0.0000",
				"price_incl_tax": "170.0000",
				"base_price_incl_tax": "170.0000",
				"row_total_incl_tax": "170.0000",
				"base_row_total_incl_tax": "170.0000",
				"weee_tax_applied": null,
				"weee_tax_applied_amount": null,
				"options": "[]"
			}],
			"items_qty": "2.0000",
			"base_currency_code": "USD",
			"quote_currency_code": "USD",
			"extension_attributes": []
		},
		"shippingPolicy": {
			"isEnabled": false,
			"shippingPolicyContent": ""
		},
		"useQty": true,
		"activeCarriers": ["flatrate", "tablerate"],
		"originCountryCode": "US",
		"paymentMethods": [],
		"autocomplete": "off",
		"displayBillingOnPaymentMethod": true,
		"maxCartItemsToDisplay": 10,
		"cartUrl": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/thailand\/checkout\/cart\/",
		"captcha": {
			"user_login": {
				"isCaseSensitive": false,
				"imageHeight": 50,
				"imageSrc": "",
				"refreshUrl": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/thailand\/captcha\/refresh\/",
				"isRequired": false,
				"timestamp": 1582380739
			},
			"sales_rule_coupon_request": {
				"isCaseSensitive": false,
				"imageHeight": 50,
				"imageSrc": "",
				"refreshUrl": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/thailand\/captcha\/refresh\/",
				"isRequired": false,
				"timestamp": 1582380739
			}
		},
		"cardinal": {
			"environment": "production",
			"requestJWT": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJqdGkiOiI0MmU1ZmRlYy1jYmM2LTQxYmYtOTYyYi04M2IzMjhlMDdhN2EiLCJpc3MiOiIiLCJpYXQiOjE1ODIzODA3MzksIk9yZ1VuaXRJZCI6IiIsIlBheWxvYWQiOnsiT3JkZXJEZXRhaWxzIjp7Ik9yZGVyTnVtYmVyIjoiMTczMyIsIkFtb3VudCI6NDU2MDAsIkN1cnJlbmN5Q29kZSI6IlVTRCJ9fSwiT2JqZWN0aWZ5UGF5bG9hZCI6dHJ1ZX0.uAcAgEr23i5Tmvqnsc6EXyZnpdq6fwp0Od38ydwrCE4",
			"isActiveFor": {"authorizenet": false}
		},
		"vault": [],
		"captchaPayments": {
			"co-payment-form": {
				"isCaseSensitive": false,
				"imageHeight": 50,
				"imageSrc": "",
				"refreshUrl": "http:\/\/magento2.flytheme.net\/themes\/sm_market2\/thailand\/captcha\/refresh\/",
				"isRequired": false,
				"timestamp": 1582380739
			}
		},
		"persistenceConfig": {
			"isRememberMeCheckboxVisible": false,
			"isRememberMeCheckboxChecked": true
		},
		"checkoutAgreements": {
			"isEnabled": false,
			"agreements": [{
				"content": "Content",
				"checkboxText": "\r\nCheckbox Text\r\n",
				"mode": "0",
				"agreementId": "2"
			}]
		},
		"isDisplayShippingPriceExclTax": true,
		"isDisplayShippingBothPrices": false,
		"reviewShippingDisplayMode": "excluding",
		"reviewItemPriceDisplayMode": "excluding",
		"reviewTotalsDisplayMode": "excluding",
		"includeTaxInGrandTotal": false,
		"isFullTaxSummaryDisplayed": false,
		"isZeroTaxDisplayed": false,
		"reloadOnBillingAddress": false,
		"defaultCountryId": "US",
		"defaultRegionId": null,
		"defaultPostcode": null,
		"isDisplayPriceWithWeeeDetails": false,
		"isDisplayFinalPrice": false,
		"isWeeeEnabled": "0",
		"isIncludedInSubtotal": false,
		"getIncludeWeeeFlag": false,
		"amazonLogin": {"amazon_customer_email": null},
		"msp_recaptcha": {
			"siteKey": "",
			"size": "normal",
			"badge": null,
			"theme": "light",
			"lang": null,
			"enabled": {
				"login": false,
				"create": false,
				"forgot": false,
				"contact": false,
				"review": false,
				"newsletter": false,
				"sendfriend": false,
				"paypal": false
			}
		},
		"countries": [],
		"delivery-options": []
	};
	window.customerData = window.checkoutConfig.customerData;
	window.isCustomerLoggedIn = window.checkoutConfig.isCustomerLoggedIn;
	require([
		'mage/url',
		'Magento_Ui/js/block-loader'
		], function (url, blockLoader) {
			blockLoader(
				"http\u003A\u002F\u002Fmagento2.flytheme.net\u002Fthemes\u002Fsm_market2\u002Fpub\u002Fstatic\u002Ffrontend\u002FSm\u002Fmarket\u002Fen_US\u002Fimages\u002Floader\u002D1.gif"
				);
			return url.setBaseUrl('http\u003A\u002F\u002Fmagento2.flytheme.net\u002Fthemes\u002Fsm_market2\u002Fthailand\u002F');
		})</script>
	</div>
</div>
<div id="cart-totals" class="cart-totals" data-bind="scope:'block-totals'">
	<!-- ko template: getTemplate() -->
	<div class="table-wrapper" data-bind="blockLoader: isLoading">
		<table class="data table totals">
			<caption class="table-caption" data-bind="text: $t('Total')">Total
			</caption>
			<tbody>
				<!-- ko foreach: elems() -->
				<!-- ko template: getTemplate() -->
				<!-- ko if: isBothPricesDisplayed() --><!-- /ko -->
				<!-- ko if: !isBothPricesDisplayed() && isIncludingTaxDisplayed() -->
				<!-- /ko -->
				<!-- ko if: !isBothPricesDisplayed() && !isIncludingTaxDisplayed() -->
				<?php
				$arr=json_decode($_COOKIE['orders']);
				for($i=0;$i<count($arr);$i++) {
					$total=$total+$arr[$i]->price;
				}
				?>
				<tr class="totals sub">
					<th data-bind="i18n: title" class="mark" scope="row">Subtotal
					</th>
					<td class="amount">
						<span class="price"
						data-bind="text: getValue(), attr: {'data-th': title}"
						data-th="Subtotal">€ <?php echo number_format($total,2)?></span>
					</td>
				</tr>
				<!-- /ko -->
				<!-- /ko -->

				<!-- ko template: getTemplate() -->
				<!-- ko if: isDisplayed() -->
				<tr class="totals">
					<th colspan="1" style="" class="mark" scope="row">
						<span class="title"
						data-bind="text: getTitle()">Discount</span>
						<span class="discount coupon"
						data-bind="text: getCouponLabel()"></span>
					</th>
					<td class="amount" data-bind="attr: {'data-th': title}"
					data-th="Discount">
					<span><span class="price" data-bind="text: getValue()">-€0.00</span></span>
				</td>
			</tr>
			<!-- /ko -->
			<!-- /ko -->

			<!-- ko template: getTemplate() -->
			<!-- ko foreach: {data: elems, as: 'element'} --><!-- /ko -->
			<!-- /ko -->

			<!-- ko template: getTemplate() -->
			<!-- ko if: isCalculated() && quoteIsVirtual == 0 --><!-- /ko -->
			<!-- /ko -->

			<!-- ko template: getTemplate() -->
			<!-- ko if: isDisplayed() --><!-- /ko -->
			<!-- /ko -->

			<!-- ko template: getTemplate() -->

			<!-- ko if: ifShowValue() && !ifShowDetails() -->
                                <!-- <tr class="totals-tax">
                                    <th data-bind="text: title" class="mark" colspan="1"
                                        scope="row">Tax
                                    </th>
                                    <td data-bind="attr: {'data-th': title}" class="amount"
                                        data-th="Tax">
                                                            <span class="price"
                                                                  data-bind="text: getValue()">$0.00</span>
                                    </td>
                                </tr> -->
                                <!-- /ko -->
                                <!-- ko if: ifShowValue() && ifShowDetails() --><!-- /ko -->
                                <!-- /ko -->

                                <!-- ko template: getTemplate() -->
                                <!-- ko if: isTaxDisplayedInGrandTotal && isDisplayed() -->
                                <!-- /ko -->
                                <!-- ko if: !isTaxDisplayedInGrandTotal && isDisplayed() -->
                                
                                <tr class="grand totals">
                                	<th class="mark" scope="row">
                                		<strong data-bind="i18n: title">Order Total</strong>
                                	</th>
                                	<td data-bind="attr: {'data-th': title}" class="amount"
                                	data-th="Order Total">
                                	<strong><span class="price" data-bind="text: getValue()">€<?php echo number_format($total,2)?></span></strong>
                                </td>
                            </tr>
                            <!-- /ko -->
                            <!-- /ko -->

                            <!-- ko template: getTemplate() -->
                            <!-- ko foreach: messages --><!-- /ko -->
                            <!-- /ko -->
                            <!-- /ko -->
                        </tbody>
                    </table>
                </div>
                <!-- /ko --></div>

                <div class="block discount active" id="block-discount" data-collapsible="true"
                role="tablist">
                <div class="title" data-role="title" role="tab" aria-selected="true"
                aria-expanded="true" tabindex="0"><strong id="block-discount-heading"
                role="heading"
                aria-level="2">Apply Discount
            Code</strong></div>
            <div class="content" data-role="content"
            aria-labelledby="block-discount-heading" role="tabpanel"
            aria-hidden="false" style="display: block;">
            <form id="discount-coupon-form"
            action="http://magento2.flytheme.net/themes/sm_market2/thailand/checkout/cart/couponPost/"
            method="post">
            <div class="fieldset coupon"><input type="hidden" name="remove"
            	id="remove-coupon" value="0">
            	<div class="field"><label for="coupon_code"
            		class="label"><span>Enter discount code</span></label>
            		<div class="control"><input type="text" class="input-text"
            			id="coupon_code"
            			name="coupon_code" value=""
            			placeholder="Enter discount code">
            		</div>
            	</div>
            	<div class="actions-toolbar">
            		<div class="primary">
            			<button class="action apply primary" type="button"
            			value="Apply Discount">
            			<span>Apply Discount</span></button>
            		</div>
            	</div>
            </div>
        </form>
    </div>
</div>
<ul class="checkout methods items checkout-methods-items">
	<li class="item">
		<?php if(isset($_SESSION['user'])): ?>

			<form action="check_stripe_token.php" method="post">
				<noscript>You must <a href="http://www.enable-javascript.com" target="_blank">enable JavaScript</a> in your web browser in order to pay via Stripe.</noscript>

				<input 
				type="submit" 
				value="Proceed to Payment (Stripe)"
				class="action primary checkout stripe_btn"
				data-key="pk_test_oq9RKMCohfqrsRF1tcJTXJWg"
				data-amount="<?php echo number_format($total,2) * 100?>"
				data-currency="EUR"
				data-name="BYGO"
				data-description="Stripe payment for €<?php echo number_format($total,2)?>"
				/>  

				<input type="hidden" name="amount" value="<?php echo number_format($total,2) * 100?>">
				<input type="hidden" name="orders" value='<?php echo $_COOKIE['orders'] ?>'>
				<script src="https://checkout.stripe.com/v2/checkout.js"></script>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
				<script>
					$(document).ready(function() {
						$('.stripe_btn').on('click', function(event) {
							event.preventDefault();

							var $button = $(this),
							$form = $button.parents('form');

							var opts = $.extend({}, $button.data(), {
								token: function(result) {
									$form.append($('<input>').attr({ type: 'hidden', name: 'stripeToken', value: result.id })).submit();
								}
							});

							StripeCheckout.open(opts);
						});
					});
				</script>
			</form>
			<?php else: ?>
				<a href="login.php?redirect_back=cart.php">
						<button type="button" data-role="proceed-to-checkout"
						title="Proceed to Payment" class="action primary checkout">
							<span>Proceed to Payment (Stripe)</span>
						</button>
				</a>
				<?php endif; ?>
			</li><br>

			<!-- START NEW CODE -->
			<li class="item">
			<?php if(isset($_SESSION['user'])): ?>

				<form action="https://www.sandbox.paypal.com/cgi-bin/webscr"  method="post">
					<input type="submit" value="Proceed to Payment(Paypal)" class="action primary checkout" border="0">
					<input type="hidden" name="cmd" value="_xclick">
					<input type="hidden" name="business" value="akbarmaknojiya-business@gmail.com">
					<input type="hidden" name="item_name" value="BYGO">
					<!-- <input type="hidden" name="item_number" value="1"> -->
					<input type="hidden" name="custom" value='<?php echo $_COOKIE['orders'] ?>'>
					<input type="hidden" name="return" value="<?php echo SITE_URL."check_stripe_token.php" ?>">
					<input type="hidden" name="amount" value="<?php echo number_format($total,2)?>">
					<input type="hidden" name="currency_code" value="EUR">
					<input type="hidden" name="rm" value="2">
				</form>
			<?php else: ?>
				<a href="login.php?redirect_back=cart.php"><button type="button" data-role="proceed-to-checkout"
					title="Proceed to Payment" class="action primary checkout">
					<span>Proceed to Payment (Paypal)</span></button></a>
				<?php endif; ?>
			</li>


			<!-- end new code -->
                        <!-- <li class="item"><a class="action multicheckout"
                                            href="http://magento2.flytheme.net/themes/sm_market2/thailand/multishipping/checkout/"><span>Check Out with Multiple Addresses</span></a>
                                        </li> -->
                                    </ul>
                                </div>
                                <form
                                action="http://magento2.flytheme.net/themes/sm_market2/thailand/checkout/cart/updatePost/"
                                method="post" id="form-validate"
                                data-mage-init='{"Magento_Checkout/js/action/update-shopping-cart": {"validationURL" : "http://magento2.flytheme.net/themes/sm_market2/thailand/checkout/cart/updateItemQty/", "updateCartActionContainer": "#update_cart_action_container"} }'
                                class="form form-cart"><input name="form_key" type="hidden"
                                value="8vQwRtClfafwZh3a"/>
                                <div class="cart table-wrapper">


                                	<table id="shopping-cart-table" class="cart items data table"
                                	data-mage-init='{"shoppingCart":{"emptyCartButton": ".action.clear", "updateCartActionContainer": "#update_cart_action_container"}}'>

                                	<caption class="table-caption">Shopping Cart Items</caption>
                                	<thead>
                                		<tr>
                                			<th class="col item">
                                				<span>Item</span>

                                			</th>


                                			<th class="col subtotal" scope="col"><span>Subtotal</span></th>
                                		</tr>
                                	</thead>






                                	<?php
                                	$total=0;
                                	$arr=json_decode($_COOKIE['orders']);
                                	for($i=0;$i<count($arr);$i++) {

                                		$total=$total+$arr[$i]->price;

                                		?>


                                		<tbody class="cart item">


                                			<tr class="item-info">
                                				<td data-th="Item" class="col item">
                                					<a href="http://magento2.flytheme.net/themes/sm_market2/thailand/acer-all-in-one-computers.html"
                                					title="<?php echo $arr[$i]->description?>" tabindex="-1"
                                					class="product-item-photo">
                                					<span class="product-image-container" style="width:150px;"><span
                                						class="product-image-wrapper"
                                						style="padding-bottom: 100%;">
                                						<img class="product-image-photo lazyload"
                                						src="http://magento2.flytheme.net/themes/sm_market2/pub/media/lazyloading/blank.png"
                                						data-src="<?php echo $arr[$i]->img_path?>"
                                						width="" height=""
                                						alt="<?php echo $arr[$i]->description?>"/></span></span>
                                					</a>
                                					<div class="product-item-details">
                                						<strong class="product-item-name">
                                							<a href="http://magento2.flytheme.net/themes/sm_market2/thailand/acer-all-in-one-computers.html">Acer
                                								<?php echo $arr[$i]->description?></a>
                                							</strong>
                                							<div class="form-group" style="margin-top: 10px">
                                								<span style="margin-top: 10px">Offer Type</span> &nbsp;&nbsp;&nbsp;<br><br>
                                								<select class="form-control" style="font-size: 12px;width: 60%">
                                									<option>One Package € <?php echo number_format($arr[$i]->price,2)?></option>
                                								</select>
                                							</div>
                                						</div>
                                					</td>
                                					<td class="col subtotal" data-th="Subtotal">
                                						<span class="price-excluding-tax" data-label="Excl.&#x20;Tax">
                                							<span class="cart-price"> <span
                                								class="price">€<?php echo number_format($arr[$i]->price,2)?></span></span>
                                							</span></td>
                                						</tr>
                                						<tr class="item-actions">
                                							<td colspan="4">
                                								<div class="actions-toolbar">
                                									<div id="gift-options-cart-item-2835"
                                									data-bind="scope:'giftOptionsCartItem-2835'"
                                									class="gift-options-cart-item">

                                								</div>

                                								<a href="" onclick="remove_me(this.id);load_data()" id="<?php echo $arr[$i]->id?>" title="Remove item" class="action action-delete"
                                									data-post=''><span> Remove item</span></a>
                                								</div>
                                							</td>
                                						</tr>
                                					</tbody>

                                					<?php


                                				}

                                				?>

                                				<tfoot>
                                					<tr>
                                						<td colspan="1" style="text-align: right">
                                							<span style="font-weight: bolder;font-size: 18px">Subtotal</span>
                                						</td><td><span style="font-weight: bold;font-size: 16px">€<?php echo number_format($total,2)?></span></td>
                                					</tr>

                                				</tfoot>
                                			</table>
                                		</div>
                                		<div class="cart main actions"><a class="action continue"
                                			href="http://magento2.flytheme.net/themes/sm_market2/thailand/"
                                			title="Continue Shopping"><span>Continue Shopping</span></a>
                                			<button type="submit" name="update_cart_action" data-cart-empty=""
                                			value="empty_cart" title="Clear Shopping Cart" class="action clear"
                                			id="empty_cart_button"><span>Clear Shopping Cart</span></button>
                                			<button type="submit" name="update_cart_action" data-cart-item-update=""
                                			value="update_qty" title="Update Shopping Cart"
                                			class="action update"><span>Update Shopping Cart</span></button>
                                			<input type="hidden" value="" id="update_cart_action_container"
                                			data-cart-item-update=""/></div>
                                		</form>
                                		<div id="gift-options-cart" data-bind="scope:'giftOptionsCart'">
                                		</div>
                                	</div>
                                </div>
                            </div>
                            <?php

                        }else {


                        	?>

                        	<h1>Shoping Error</h1>
                        	<?php

                        }
