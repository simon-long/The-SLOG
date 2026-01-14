// <![CDATA[  
jQuery.noConflict();
jQuery(document).ready(function(){
	jQuery('#publish').click(function(){
		var ddConfirmPublish = confirm('You are about to publish the current content.\n Are you sure you wish to proceed?\n\n Press \'OK\' to publish. Press \'cancel\' to go back and continue editing.');
		if(ddConfirmPublish){
			return true;
		}
		else{
			alert('Post was not published. Whew. That was close!');
			return false;
		}
	});
});
// ]]>