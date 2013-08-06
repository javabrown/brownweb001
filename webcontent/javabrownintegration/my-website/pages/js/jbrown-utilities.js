
//$(function(){
  

function formatJson(val) {
	var retval = '';
	var str = val;
    var pos = 0;
    var strLen = str.length;
	var indentStr = '&nbsp;&nbsp;&nbsp;&nbsp;';
    var newLine = '<br />';
	var char = '';
	
	for (var i=0; i<strLen; i++) {
		char = str.substring(i,i+1);
		
		if (char == '}' || char == ']') {
			retval = retval + newLine;
			pos = pos - 1;
			
			for (var j=0; j<pos; j++) {
				retval = retval + indentStr;
			}
		}
		
		retval = retval + char;	
		
		if (char == '{' || char == '[' || char == ',') {
			retval = retval + newLine;
			
			if (char == '{' || char == '[') {
				pos = pos + 1;
			}
			
			for (var k=0; k<pos; k++) {
				retval = retval + indentStr;
			}
		}
	}

	return retval;
}

function isValidateJson(val){
    try {
        var theJson = jQuery.parseJSON(val);
        return true;
    }
    catch (e) {
        //$("#result").append($("<h1>Invalid Json " + $(this).val() + "</h1>").addClass("bad"));
    }
    return false;
}


 function formatXml(xml) {
 
var formatted = '';
var reg = /(>)(<)(\/*)/g;
xml = xml.replace(reg, '$1\r\n$2$3');
var pad = 0;
 
jQuery.each(xml.split('\r\n'), function(index, node)
{
var indent = 0;
if (node.match( /.+<\/\w[^>]*>$/ ))
{
indent = 0;
}
else if (node.match( /^<\/\w/ ))
{
if (pad != 0)
{
pad -= 1;
}
}
else if (node.match( /^<\w[^>]*[^\/]>.*$/ ))
{
indent = 1;
}
else
{
indent = 0;
}
var padding = '';
for (var i = 0; i < pad; i++)
{
padding += ' ';
}
formatted += padding + node + '\r\n';
pad += indent;
});
 
return formatted;
}
  
//});

