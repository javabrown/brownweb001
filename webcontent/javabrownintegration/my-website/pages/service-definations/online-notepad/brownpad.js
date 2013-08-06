/* -- jquery.elastic begin-- */

(function(jQuery){jQuery.fn.extend({elastic:function(){var mimics=['paddingTop','paddingRight','paddingBottom','paddingLeft','fontSize','lineHeight','fontFamily','width','fontWeight'];return this.each(function(){if(this.type!='textarea'){return false;}
var $textarea=jQuery(this),$twin=jQuery('<div />').css({'position':'absolute','display':'none','word-wrap':'break-word'}),lineHeight=parseInt($textarea.css('line-height'),10)||parseInt($textarea.css('font-size'),'10'),minheight=parseInt($textarea.css('height'),10)||lineHeight*3,maxheight=parseInt($textarea.css('max-height'),10)||Number.MAX_VALUE,goalheight=0,i=0;if(maxheight<0){maxheight=Number.MAX_VALUE;}
$twin.appendTo($textarea.parent());var i=mimics.length;while(i--){$twin.css(mimics[i].toString(),$textarea.css(mimics[i].toString()));}
function setHeightAndOverflow(height,overflow){curratedHeight=Math.floor(parseInt(height,10));if($textarea.height()!=curratedHeight){$textarea.css({'height':curratedHeight+'px','overflow':overflow});}}
function update(){var textareaContent=$textarea.val().replace(/&/g,'&amp;').replace(/  /g,'&nbsp;').replace(/<|>/g,'&gt;').replace(/\n/g,'<br />');var twinContent=$twin.html();if(textareaContent+'&nbsp;'!=twinContent){$twin.html(textareaContent+'&nbsp;');if(Math.abs($twin.height()+lineHeight-$textarea.height())>3){var goalheight=$twin.height()+lineHeight;if(goalheight>=maxheight){setHeightAndOverflow(maxheight,'auto');}else if(goalheight<=minheight){setHeightAndOverflow(minheight,'hidden');}else{setHeightAndOverflow(goalheight,'hidden');}}}}
$textarea.css({'overflow':'hidden'});$textarea.keyup(function(){update();});$textarea.live('input paste',function(e){setTimeout(update,250);});update();});}});})(jQuery);


/* -- jquery.elastic end-- */

 


/* -- jquery.counter -- */
/*! jQuery.counter.js (jQuery Character and Word Counter plugin)
 v2.0 (c) Wilkins Fernandez
 MIT License
 */
(function($) {
	$.fn.extend({
		counter : function(options) {
			var defaults = {
				type	: 'char',      		// {char || word}
				count	: 'down',        		// count {up || down} from or to the goal number
				goal	: 999999999999999999999999999,        		// count {to || from} this number
				text	: false,				// Show description of counter
				msg		: ''
			}, $countObj = '', countIndex = '',
			// Pass {} as first argument to preserve defaults/options for comparision
			options = $.extend({}, defaults, options), methods = {
				/* Adds the counter to the page and binds counter to user input fields */
				init : function($obj) {
					var objID = $obj.attr('id'), counterID = objID + '_count';
					
					if (options.type == 'word'){
					// Insert counter after text area/box
					$('<div/>').attr('id', objID + '_word').html("<span id=" + counterID + "/> " + methods.setMsg() ).insertAfter($obj);
					}
					else {
					// Insert counter after text area/box
					$('<div/>').attr('id', objID + '_char').html("<span id=" + counterID + "/> " + methods.setMsg() ).insertAfter($obj);
					};
					
					// Set $countObj jQuery object
					$countObj = $('#' + counterID);
					// Bind methods to events
					methods.bind($obj);
				},
				bind : function($obj) {
					$obj.bind("keypress.counter keydown.counter keyup.counter blur.counter focus.counter change.counter paste.counter", methods.updateCounter);
					$obj.bind("keydown.counter", methods.doStopTyping);
					$obj.trigger('keydown');
				},
				/* Sets the appropriate message after counter */
				setMsg : function() {
					if(options.msg !== '') {
						return options.msg;
					}
					this.text = "character word left max".split(' ');
					this.chars = "s ( )".split(' ');
					this.msg = "";
					switch (options.type) {
						case "char":
							if(options.count === defaults.count && options.text) {
								// x character(s) left
								this.msg = this.text[0] + this.chars[1] + this.chars[0] + this.chars[2] + " " + this.text[2];
							} else if(options.count === "up" && options.text) {
								// x characters (x max)
								this.msg = this.text[0] + this.chars[0] + " " + this.chars[1] + options.goal + " " + this.text[3] + this.chars[2];
							}
							break;
						case "word":
							if(options.count === defaults.count && options.text) {
								// x word(s) left
								this.msg = this.text[1] + this.chars[1] + this.chars[0] + this.chars[2] + " " + this.text[2];
							} else if(options.count === "up" && options.text) {
								// x word(s) (x max)
								this.msg = this.text[1] + this.chars[1] + this.chars[0] + this.chars[2] + " " + this.chars[1] + options.goal + " " + this.text[3] + this.chars[2];
							}
							break;
						default:
					}
					return this.msg;
				},
				/* Returns the amount of words passed in the val argument
				 * @param val Words to count */
				getWords : function(val) {
					if(val !== "") {
						return $.trim(val).replace(/\s+/g, " ").split(" ").length;
					} else {
						return 0;
					}
				},
				updateCounter : function(e) {
					// Save reference to $(this)
					var $this = $(this);
					// Is the goal amount passed? (most common when pasting)
					if(countIndex < 0 || countIndex > options.goal) {
						methods.passedGoal($this);
					}
					// Counting characters...
					if(options.type === defaults.type) {
						// ...down
						if(options.count === defaults.count) {
							countIndex = options.goal - $this.val().length;
							// ...up
						} else if(options.count === 'up') {
							countIndex = $this.val().length;
						}
						// Update text
						$countObj.text(countIndex);
						// Counting words...
					} else if(options.type === 'word') {
						// ...down
						if(options.count === defaults.count) {
							// Count words
							countIndex = methods.getWords($this.val());
							// Then subtract
							countIndex = options.goal - countIndex;

							// Update text
							$countObj.text(countIndex);
							// ...up
						} else if(options.count === 'up') {
							countIndex = methods.getWords($this.val());
							$countObj.text(countIndex);
						}
					}
					return;
				},				
				/* Stops the ability to type */
				doStopTyping : function(e) {
					// backspace, delete, tab, left, up, right, down, end, home, spacebar
					var keys = [46, 8, 9, 35, 36, 37, 38, 39, 40, 32], $this = $(this);
					if(methods.isGoalReached(e)) {
						// NOTE: Refactoring this condition into a function	was too slow; it'd let you type 1 more character, THEN stop you and remove it						
						if(e.keyCode !== keys[0] && e.keyCode !== keys[1] && e.keyCode !== keys[2] && e.keyCode !== keys[3] && e.keyCode !== keys[4] && e.keyCode !== keys[5] && e.keyCode !== keys[6] && e.keyCode !== keys[7] && e.keyCode !== keys[8]) {
							// Stop typing when counting characters
							if(options.type === defaults.type) {
								return false;
								// Counting words, only allow backspace & delete
							} else if(e.keyCode !== keys[9] && e.keyCode !== keys[1] && options.type != defaults.type) {									
								return true;
							} else {
								return false;
							}
						}
					}
				},
				/* Checks to see if the goal number has been reached */
				isGoalReached : function(e) {
					var _goal;
					// Counting down
					if(options.count === defaults.count) {
						_goal = 0;
						return (countIndex <= _goal ) ? true : false;
					} else {
						// Counting up
						_goal = options.goal;
						return (countIndex >= _goal ) ? true : false;
					}
				},
				/* Removes extra words when the amount of words in the input go over the desired goal.
				 * @param {Number} numOfWords Amount of words you would like shown
				 * @param {String} text The full text to condense
				 * */
				wordStrip : function(numOfWords, text) {
					var wordCount = text.replace(/\s+/g, ' ').split(' ').length;

					// Get the word count by counting the spaces (after eliminating trailing white space)
					text = $.trim(text);

					// Make it worth executing
					if(numOfWords <= 0 || numOfWords === wordCount) {
						return text;
					} else {
						text = $.trim(text).split(' ');
						text.splice(numOfWords, wordCount, '');
						return $.trim(text.join(' '));
					}
				},
				/* If the goal is passed, trim the chars/words down to what is allowed. Also, reset the counter. */
				passedGoal : function($obj) {
					var userInput = $obj.val();
					if(options.type === 'word') {
						$obj.val(methods.wordStrip(options.goal, userInput));
					}
					if(options.type === 'char') {
						$obj.val(userInput.substring(0, options.goal));
					}
					// Reset to 0
					if(options.type === 'down') {
						$countObj.val('0');
					}
					// Reset to goal
					if(options.type === 'up') {
						$countObj.val(options.goal);
					}
				}
			};
			return this.each(function() {
				methods.init($(this));
			});
		}
	});
})(jQuery);
 
(function($) {
 
	$.fn.tabby = function(options) {
		//debug(this);
		// build main options before element iteration
		var opts = $.extend({}, $.fn.tabby.defaults, options);
		var pressed = $.fn.tabby.pressed; 
		
		// iterate and reformat each matched element
		return this.each(function() {
			$this = $(this);
			
			// build element specific options
			var options = $.meta ? $.extend({}, opts, $this.data()) : opts;
			
			$this.bind('keydown',function (e) {
				var kc = $.fn.tabby.catch_kc(e);
				if (16 == kc) pressed.shft = true;
				/*
				because both CTRL+TAB and ALT+TAB default to an event (changing tab/window) that 
				will prevent js from capturing the keyup event, we'll set a timer on releasing them.
				*/
				if (17 == kc) {pressed.ctrl = true;	setTimeout("$.fn.tabby.pressed.ctrl = false;",1000);}
				if (18 == kc) {pressed.alt = true; 	setTimeout("$.fn.tabby.pressed.alt = false;",1000);}
					
				if (9 == kc && !pressed.ctrl && !pressed.alt) {
					e.preventDefault; // does not work in O9.63 ??
					pressed.last = kc;	setTimeout("$.fn.tabby.pressed.last = null;",0);
					process_keypress ($(e.target).get(0), pressed.shft, options);
					return false;
				}
				
			}).bind('keyup',function (e) {
				if (16 == $.fn.tabby.catch_kc(e)) pressed.shft = false;
			}).bind('blur',function (e) { // workaround for Opera -- http://www.webdeveloper.com/forum/showthread.php?p=806588
				if (9 == pressed.last) $(e.target).one('focus',function (e) {pressed.last = null;}).get(0).focus();
			});
		
		});
	};
	
	// define and expose any extra methods
	$.fn.tabby.catch_kc = function(e) { return e.keyCode ? e.keyCode : e.charCode ? e.charCode : e.which; };
	$.fn.tabby.pressed = {shft : false, ctrl : false, alt : false, last: null};
	
	// private function for debugging
	function debug($obj) {
		if (window.console && window.console.log)
		window.console.log('textarea count: ' + $obj.size());
	};

	function process_keypress (o,shft,options) {
		var scrollTo = o.scrollTop;
		//var tabString = String.fromCharCode(9);
		
		// gecko; o.setSelectionRange is only available when the text box has focus
		if (o.setSelectionRange) gecko_tab (o, shft, options);
		
		// ie; document.selection is always available
		else if (document.selection) ie_tab (o, shft, options);
		
		o.scrollTop = scrollTo;
	}
	
	// plugin defaults
	$.fn.tabby.defaults = {tabString : String.fromCharCode(9)};
	
	function gecko_tab (o, shft, options) {
		var ss = o.selectionStart;
		var es = o.selectionEnd;	
				
		// when there's no selection and we're just working with the caret, we'll add/remove the tabs at the caret, providing more control
		if(ss == es) {
			// SHIFT+TAB
			if (shft) {
				// check to the left of the caret first
				if ("\t" == o.value.substring(ss-options.tabString.length, ss)) {
					o.value = o.value.substring(0, ss-options.tabString.length) + o.value.substring(ss); // put it back together omitting one character to the left
					o.focus();
					o.setSelectionRange(ss - options.tabString.length, ss - options.tabString.length);
				} 
				// then check to the right of the caret
				else if ("\t" == o.value.substring(ss, ss + options.tabString.length)) {
					o.value = o.value.substring(0, ss) + o.value.substring(ss + options.tabString.length); // put it back together omitting one character to the right
					o.focus();
					o.setSelectionRange(ss,ss);
				}
			}
			// TAB
			else {			
				o.value = o.value.substring(0, ss) + options.tabString + o.value.substring(ss);
				o.focus();
	    		o.setSelectionRange(ss + options.tabString.length, ss + options.tabString.length);
			}
		} 
		// selections will always add/remove tabs from the start of the line
		else {
			// split the textarea up into lines and figure out which lines are included in the selection
			var lines = o.value.split("\n");
			var indices = new Array();
			var sl = 0; // start of the line
			var el = 0; // end of the line
			var sel = false;
			for (var i in lines) {
				el = sl + lines[i].length;
				indices.push({start: sl, end: el, selected: (sl <= ss && el > ss) || (el >= es && sl < es) || (sl > ss && el < es)});
				sl = el + 1;// for "\n"
			}
			
			// walk through the array of lines (indices) and add tabs where appropriate						
			var modifier = 0;
			for (var i in indices) {
				if (indices[i].selected) {
					var pos = indices[i].start + modifier; // adjust for tabs already inserted/removed
					// SHIFT+TAB
					if (shft && options.tabString == o.value.substring(pos,pos+options.tabString.length)) { // only SHIFT+TAB if there's a tab at the start of the line
						o.value = o.value.substring(0,pos) + o.value.substring(pos + options.tabString.length); // omit the tabstring to the right
						modifier -= options.tabString.length;
					}
					// TAB
					else if (!shft) {
						o.value = o.value.substring(0,pos) + options.tabString + o.value.substring(pos); // insert the tabstring
						modifier += options.tabString.length;
					}
				}
			}
			o.focus();
			var ns = ss + ((modifier > 0) ? options.tabString.length : (modifier < 0) ? -options.tabString.length : 0);
			var ne = es + modifier;
			o.setSelectionRange(ns,ne);
		}
	}
	
	function ie_tab (o, shft, options) {
		var range = document.selection.createRange();
		
		if (o == range.parentElement()) {
			// when there's no selection and we're just working with the caret, we'll add/remove the tabs at the caret, providing more control
			if ('' == range.text) {
				// SHIFT+TAB
				if (shft) {
					var bookmark = range.getBookmark();
					//first try to the left by moving opening up our empty range to the left
				    range.moveStart('character', -options.tabString.length);
				    if (options.tabString == range.text) {
				    	range.text = '';
				    } else {
				    	// if that didn't work then reset the range and try opening it to the right
				    	range.moveToBookmark(bookmark);
				    	range.moveEnd('character', options.tabString.length);
				    	if (options.tabString == range.text) 
				    		range.text = '';
				    }
				    // move the pointer to the start of them empty range and select it
				    range.collapse(true);
					range.select();
				}
				
				else {
					// very simple here. just insert the tab into the range and put the pointer at the end
					range.text = options.tabString; 
					range.collapse(false);
					range.select();
				}
			}
			// selections will always add/remove tabs from the start of the line
			else {
			
				var selection_text = range.text;
				var selection_len = selection_text.length;
				var selection_arr = selection_text.split("\r\n");
				
				var before_range = document.body.createTextRange();
				before_range.moveToElementText(o);
				before_range.setEndPoint("EndToStart", range);
				var before_text = before_range.text;
				var before_arr = before_text.split("\r\n");
				var before_len = before_text.length; // - before_arr.length + 1;
				
				var after_range = document.body.createTextRange();
				after_range.moveToElementText(o);
				after_range.setEndPoint("StartToEnd", range);
				var after_text = after_range.text; // we can accurately calculate distance to the end because we're not worried about MSIE trimming a \r\n
				
				var end_range = document.body.createTextRange();
				end_range.moveToElementText(o);
				end_range.setEndPoint("StartToEnd", before_range);
				var end_text = end_range.text; // we can accurately calculate distance to the end because we're not worried about MSIE trimming a \r\n
								
				var check_html = $(o).html();
				$("#r3").text(before_len + " + " + selection_len + " + " + after_text.length + " = " + check_html.length);				
				if((before_len + end_text.length) < check_html.length) {
					before_arr.push("");
					before_len += 2; // for the \r\n that was trimmed	
					if (shft && options.tabString == selection_arr[0].substring(0,options.tabString.length))
						selection_arr[0] = selection_arr[0].substring(options.tabString.length);
					else if (!shft) selection_arr[0] = options.tabString + selection_arr[0];	
				} else {
					if (shft && options.tabString == before_arr[before_arr.length-1].substring(0,options.tabString.length)) 
						before_arr[before_arr.length-1] = before_arr[before_arr.length-1].substring(options.tabString.length);
					else if (!shft) before_arr[before_arr.length-1] = options.tabString + before_arr[before_arr.length-1];
				}
				
				for (var i = 1; i < selection_arr.length; i++) {
					if (shft && options.tabString == selection_arr[i].substring(0,options.tabString.length))
						selection_arr[i] = selection_arr[i].substring(options.tabString.length);
					else if (!shft) selection_arr[i] = options.tabString + selection_arr[i];
				}
				
				if (1 == before_arr.length && 0 == before_len) {
					if (shft && options.tabString == selection_arr[0].substring(0,options.tabString.length))
						selection_arr[0] = selection_arr[0].substring(options.tabString.length);
					else if (!shft) selection_arr[0] = options.tabString + selection_arr[0];
				}

				if ((before_len + selection_len + after_text.length) < check_html.length) {
					selection_arr.push("");
					selection_len += 2; // for the \r\n that was trimmed
				}
				
				before_range.text = before_arr.join("\r\n");
				range.text = selection_arr.join("\r\n");
				
				var new_range = document.body.createTextRange();
				new_range.moveToElementText(o);
				
				if (0 < before_len)	new_range.setEndPoint("StartToEnd", before_range);
				else new_range.setEndPoint("StartToStart", before_range);
				new_range.setEndPoint("EndToEnd", range);
				
				new_range.select();
				
			} 
		}
	}

// end of closure
})(jQuery);











/* -- document ready function -- */

		$(document).ready(function(){	
			textarea.init();
					
			$('#textarea').elastic();
			
			$('#textarea').focus();
				
			$("#textarea").tabby();
			
			//$('#help').hide();
			//$('#arrow').hide();
			$('#emphasiser').delay(1000).fadeToggle(2000);
			
			// IE output null bij een empty cookie
			if(document.getElementById("textarea").value == 'null')
			{
				document.getElementById('textarea').value = '';
			}
		 
			$('#toggle').click(function() {
				$('#brown-help').toggle(100);
				$('#arrow').toggle(10);
				$('#emphasiser').fadeToggle(100);
				$(this).text($(this).text() == 'show info' ? 'hide info' : 'show info');
				// +1
			  (function() {
			    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			    po.src = 'https://apis.google.com/js/plusone.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
			  })(); // end +1
				// pinterest
			   var head= document.getElementsByTagName('head')[0];
			   var script= document.createElement('script');
			   script.type= 'text/javascript';
			   script.src= 'http://assets.pinterest.com/js/pinit.js';
			   head.appendChild(script);// end pinterest
				return false;
			});
	
		});
		
		$("#textarea").counter({
			count: 'up',
		});
		
		$("#textarea").counter({
			count: 'up',
			type: 'word',
		});
		
		$(window).keypress(function(event) {
			if (!(event.which == 115 && event.ctrlKey) && !(event.which == 19)) return true;
			textarea.save();
			event.preventDefault();
			return false;
		});
		
		document.addEventListener("keydown", function(e) {
		  if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
			e.preventDefault();
			textarea.save();
		  }
		}, false);