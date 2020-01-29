$(document).ready(function() {

});


$('#Input-Execute-Button').on("click", function (event) {

	var LanguageList = document.getElementById("Language-List"); //Gets UL var 
	var selectedLanguage = $(LanguageList).find('input[type=radio]:checked').val();

	var OutputHeader = document.getElementById("Problem-Output-Heading");
	$(OutputHeader).text(selectedLanguage);
	var OutputText = document.getElementById("Problem-Output-Console");

	//0 on Mobile
	var codeMirror = document.getElementsByClassName("CodeMirror");
	if(codeMirror.length == 0) 
	{
		//On Mobile
		var InputTextArea = document.getElementById("Input-Area");
		$(OutputText).text($(InputTextArea).val())
	}
	else
	{
		// Managed in scripts/codeMirror/main.js
	}
	return false;
});