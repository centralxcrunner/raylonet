!function ($) {
	$(window).load(function(){

        

    		//FireFly

    		//$.firefly(); 

            $('.firefly-container').each(function(){

            
            var image1 = $(this).data('image1') || " "
                ,   image2 = $(this).data('image2') || ""
                ,   theNumber = $(this).data('number') || 10
                ,   fullScreen = $(this).data('fullscreen') || "off"

        		$.firefly({
                    images : [image1, image2, image3],   //Fly images        
                    total : 80, //number of flies
                    on: '.firefly-container' //class of div
                });

                //$.firefly({images : ['1.jpg', '2.jpg'],total : 40}); 

            })

	})
}(window.jQuery);