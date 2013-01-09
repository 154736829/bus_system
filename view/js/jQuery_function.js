var test = [
    "C#",
    "C++",
    "Java",
    "JavaScript",
    "ASP",
    "ASP.NET",
    "JSP",
    "PHP",
    "Python",
    "Ruby",
	"林东",
	"呵呵",
];
jQuery(document).ready(function(){
	jQuery('#startStation,#endStations').autocomplete({
		source: test
	});
	//jQuery('#test').datepicker();
});