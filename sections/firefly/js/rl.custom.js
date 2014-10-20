!function ($) {
	$(window).load(function(){

        

    		//FireFly

    		//$.firefly(); 

    		$.firefly({
                images : ['http://www.itsfirefly.com/images/fly1by1.png','http://www.itsfirefly.com/images/fly2by2.png'],   //Fly images        
                total : 165, //number of flies
                on: '.firefly-container' //id of div
            });

    	    //$.firefly({images : ['1.jpg', '2.jpg'],total : 40}); 


    	    //Typed

        $('.firefly-container').each(function(){

            
            var typedText = $(this).data('typedtext') || " "
                ,   theDelay = $(this).data('delay') || 12000
                ,   theHeight = $(this).data('height') || 500
                ,   fullScreen = $(this).data('fullscreen') || "off"



    	    $(".rl-typed").typed({
                strings: [typedText],
                typeSpeed: 60,
                backDelay: 500,
                loop: false,
                // defaults to false for infinite loop
                loopCount: false,
                callback: function(){ foo(); },
                resetCallback: function() { newTyped(); }
            });

            $(".reset").click(function(){
                $(".rl-typed").typed('reset');
            });
        })

	})
}(window.jQuery);