(function($){$('#modal-launcher, #modal-background, .escape').on('click',function(){$('#modal-background, #modal-content').toggleClass("active");});$("input:checkbox").change(function(){var group=":checked[name='"+$(this).attr("name")+"']";if($(this).is(":checked")){$(group).not($(this)).attr("checked",false);}});$(".submitForm").on("click",function(){$(".contact-form").submit();});$(".submitForm").on("keypress",function(e){if(e.keyCode=13){$(".contact-form").submit();}});})(jQuery);