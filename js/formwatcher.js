$(document).ready(function () {
	var UPDATE_INTERVAL = 100; // 1 second
	
	if($("form.watchable").length == 1)
	{
		var topDiv = $("<div></div>");
		var btnShare = $("<button class='btn btn-info'><i class='icon-share'></i> Share Link</button>");
		var input = $("<input />");
		input.val(document.location.toString().replace("/type/","/watch/"));
		input.css({"width":"100%","padding":"5px 10px"});
		input.click(function(){
			return false;
		});
		//input.prepend($("<span>Copy and share URL</span>").hide());
		inputSpan = $("<div/>");
		inputSpan.append($("<span>Copy and share URL</span>"));
		inputSpan.click(function(e){
			return false;
		},false);
		inputSpan.append(input);
		inputSpan.hide();
		btnShare.after(inputSpan);
		btnShare.click(function(){
			inputSpan.toggle();
		});
		topDiv.append(btnShare);
		$("form.watchable").each(function(){
			$(this).before(topDiv);
		});
	}
	
    var formWatcherTime = window.setInterval(function () {
        $("form.watchable").each(function () {
            var formString = $(this).serialize();
            formString = escape(formString);
            formString = "data=" + formString;
            console.debug("FORMSTRING" + formString);

            $.post("../transponder/", formString, function (data) {
                console.debug(data);
            });

        });
    }, UPDATE_INTERVAL);

    var formTransmittedTime = window.setInterval(function () {
        $("form.watching").each(function () {
        	var formElement = $(this);
            $.get("../transponder/", (new Date().getTime()) , function (data) {
                console.log(data);
                formElement.deserialize(data,function() {
                	console.log("Form Updated");
					});
            });
        });
    }, UPDATE_INTERVAL);

});