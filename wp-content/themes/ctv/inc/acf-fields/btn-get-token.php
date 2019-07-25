<?php defined( 'ABSPATH' ) || exit; ?>

<button type="button" class="button-secondary" id="my-ajax-trigger" data-action="myajaxaction">Generate Token</button>

<script type="text/javascript">
	(function($){
	    $(document).ready(function(){
	        $('#my-ajax-trigger').click(function(){
		    	System.message_success('Test.',function(){
					//$('#result_ajax').html(json.data);
				});
		    })
    	});
    })(jQuery);
</script>