$(document).ready(function() {
	var width = $(window).width();
	if(width >= 1200) 
	{
		var ProblemInputArea = document.getElementById("Input-Area");
		var myCodeMirror = CodeMirror.fromTextArea(ProblemInputArea, { mode:"javascript", lineNumbers: true});
		myCodeMirror.setOption({lineWrapping : true});
	}
	else {
		var ProblemInputArea = document.getElementById("Input-Area");
		var codeMirror = $(ProblemInputArea).parent().children("div");
		if(codeMirror != null) 
		{
			$(codeMirror).remove();
		}
		$(ProblemInputArea).css("display", "block");
	}
});

$(window).resize(function() {
	var width = $(window).width();
	if(width >= 1200) 
	{		
		var ProblemInputArea = document.getElementById("Input-Area");
		if($(ProblemInputArea).parents().children('div.CodeMirror').length) {
			console.log($(ProblemInputArea).parents().children('div.CodeMirror').length);
			return;
		}
		var myCodeMirror = CodeMirror.fromTextArea(ProblemInputArea, { lineWrapping: true, mode:"javascript", lineNumbers: true});
				myCodeMirror.setOption({lineWrapping : true});

	}
	else {
		var ProblemInputArea = document.getElementById("Input-Area");
		var doesCodeMirrorExist = $(ProblemInputArea).parent().children("div.CodeMirror");
		if(doesCodeMirrorExist != 0) 
		{
			$(doesCodeMirrorExist).remove();
		}
		$(ProblemInputArea).css("display", "block");
	}
});
$('#Input-Execute-Button').on("click", function (event){

	if(document.querySelector('.CodeMirror') == null) // If no Code Mirror editor exists
	{
		return false;
	}
	var editor = document.querySelector('.CodeMirror').CodeMirror;
	var OutputText = document.getElementById("Problem-Output-Console");
	var editorText = editor.getValue();
	$(OutputText).text(editorText);
	return false;
});