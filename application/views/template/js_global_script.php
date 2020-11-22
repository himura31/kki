<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="<?php echo ROOT_URL ?>/assets/assets/global/scripts/scripts.bundle.js" type="text/javascript"></script>
<script src="<?php echo ROOT_URL ?>/assets/assets/global/plugins/jquery-priceformat/jquery-priceformat.js" type="text/javascript"></script>
		<script type="text/javascript">
			$('.price-format').priceFormat({
		          prefix: 'Rp.',
		          thousandsSeparator: ',',
		          centsLimit: 0
		    });
		    $('.number-format').priceFormat({
		          prefix: '',
		          thousandsSeparator: '',
		          centsLimit: 0
		    });

		jQuery(document).ready(function(){
			IdleTimeoutPlus.start({
				redirectUrl:'<?php echo site_url('auth/logout'); ?> ',
				idleTimeLimit: 600,
				idleCallback: false,

				idleCheckHeartbeat:2,
				bootstrap: true,
				activityEvents: 'click keypress scroll wheel mousewheel touchmove',

				// Warning settings
				warnEnabled:          true,                               // set to false to skip warning period
				warnTimeLimit:        30,                                // 3 Minutes
				warnCallback:         false,                              // Called when warning timer starts (wait dialog will only be shown if this returns true)
				warnContentCallback:  false,                              // Called for content of warning dialog box (SEE DOCUMENTATION!)
				warnTitle:            '<i class="fa fa-exclamation"> </i> Logout Automatically',                  // setting to null will remove the title bar
				warnMessage:          '<font size="3"> Your will return to the login page </font>',
				warnStayAliveButton:  'Stay Connected',
				warnLogoutButton:     'Logout',                           // Set to null to disable
				warnCountdownMessage: 'Time remaining: {timer}',          // Set to null to disable see doc on how to set
				warnCountdownBar:     true,
				logoutUrl: '<?php echo site_url('auth/logout'); ?> ',

				// Session keep alive settings
				keepAliveInterval: 600,                   // ping the server at this interval in seconds. 600 = 10 Minutes. Set to false to disable pings
				keepAliveUrl:      window.location.href,  // set URL to ping - does not apply if keepAliveInterval: false
				keepAliveAjaxType: 'GET',
				keepAliveAjaxData: '',
			});
		});

			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#2c77f4",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>
		<!-- END NUMBER AND PRICE FORMAT PLUGINS -->