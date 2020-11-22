var ComingSoon = function () {

    return {
        //main function to initiate the module
        init: function () {
            var austDay = new Date();
            // alert(austDay);
            austDay = new Date(austDay.getFullYear(), austDay.getMonth(), austDay.getDate(), austDay.getHours() + 5);
            $('#defaultCountdown').countdown({until: austDay});
            // $('#year').text(austDay.getFullYear());

            $.backstretch([
		            "assets/assets/pages/media/bg/1.jpg",
		            "assets/assets/pages/media/bg/2.jpg",
		            "assets/assets/pages/media/bg/3.jpg",
		    		"assets/assets/pages/media/bg/4.jpg"
		        ], {
		        fade: 1000,
		        duration: 10000
		   });
        }

    };

}();

jQuery(document).ready(function() {    
   ComingSoon.init(); 
});