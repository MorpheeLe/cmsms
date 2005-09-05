﻿/*
 * FCKeditor - The text editor for internet
 * Copyright (C) 2003-2005 Frederico Caldeira Knabben
 * 
 * Licensed under the terms of the GNU Lesser General Public License:
 * 		http://www.opensource.org/licenses/lgpl-license.php
 * 
 * For further information visit:
 * 		http://www.fckeditor.net/
 * 
 * This file has been compacted for best loading performance.
 */
var FCKDebug=new Object();if (FCKConfig.Debug){FCKDebug.Output=function(message,color){if (!FCKConfig.Debug) return;if (message!=null&&isNaN(message)) message=message.replace(/</g,"&lt;");if (!this.DebugWindow||this.DebugWindow.closed) this.DebugWindow=window.open('fckdebug.html','FCKeditorDebug','menubar=no,scrollbars=no,resizable=yes,location=no,toolbar=no,width=600,height=500',true);if (this.DebugWindow.Output) this.DebugWindow.Output(message,color);};}else FCKDebug.Output=function() {};
var FCKTools=new Object();FCKTools.GetLinkedFieldValue=function(){return FCK.LinkedField.value;};FCKTools.SetLinkedFieldValue=function(value){if (FCKConfig.FormatOutput) FCK.LinkedField.value=FCKCodeFormatter.Format(value);else FCK.LinkedField.value=value;};FCKTools.AttachToLinkedFieldFormSubmit=function(functionPointer){var oForm=FCK.LinkedField.form;if (!oForm) return;if (FCKBrowserInfo.IsIE) oForm.attachEvent("onsubmit",functionPointer);else oForm.addEventListener('submit',functionPointer,true);if (!oForm.updateFCKeditor) oForm.updateFCKeditor=new Array();oForm.updateFCKeditor[oForm.updateFCKeditor.length]=functionPointer;if (!oForm.originalSubmit&&(typeof(oForm.submit)=='function'||(!oForm.submit.tagName&&!oForm.submit.length))){oForm.originalSubmit=oForm.submit;oForm.submit=FCKTools_SubmitReplacer;};};function FCKTools_SubmitReplacer(){if (this.updateFCKeditor){for (var i=0;i<this.updateFCKeditor.length;i++) this.updateFCKeditor[i]();};this.originalSubmit();};FCKTools.AddSelectOption=function(targetDocument,selectElement,optionText,optionValue){var oOption=targetDocument.createElement("OPTION");oOption.text=optionText;oOption.value=optionValue;selectElement.options.add(oOption);return oOption;};FCKTools.RemoveAllSelectOptions=function(selectElement){for (var i=selectElement.options.length-1;i>=0;i--){selectElement.options.remove(i);};};FCKTools.SelectNoCase=function(selectElement,value,defaultValue){var sNoCaseValue=value.toString().toLowerCase();for (var i=0;i<selectElement.options.length;i++){if (sNoCaseValue==selectElement.options[i].value.toLowerCase()){selectElement.selectedIndex=i;return;};};if (defaultValue!=null) FCKTools.SelectNoCase(selectElement,defaultValue);};FCKTools.HTMLEncode=function(text){if (!text) return '';text=text.replace(/&/g,"&amp;");text=text.replace(/"/g,"&quot;");text=text.replace(/</g,"&lt;");text=text.replace(/>/g,"&gt;");text=text.replace(/'/g,"&#39;");return text;};FCKTools.GetResultingArray=function(arraySource,separator){switch (typeof(arraySource)){case "string":return arraySource.split(separator);case "function":return separator();default:if (isArray(arraySource)) return arraySource;else return new Array();};};FCKTools.GetElementPosition=function(el){var c={ X:0,Y:0 };while (el){c.X+=el.offsetLeft;c.Y+=el.offsetTop;el=el.offsetParent;};return c;};FCKTools.GetElementAscensor=function(element,ascensorTagName){var e=element.parentNode;while (e){if (e.nodeName==ascensorTagName) return e;e=e.parentNode;};};FCKTools.Pause=function(miliseconds){var oStart=new Date();while (true){var oNow=new Date();if (miliseconds<oNow-oStart) return;};};FCKTools.ConvertStyleSizeToHtml=function(size){return size.endsWith('%')?size:parseInt(size);};FCKTools.ConvertHtmlSizeToStyle=function(size){return size.endsWith('%')?size:(size+'px');}
FCKTools.AppendStyleSheet=function(documentElement,cssFileUrl){var e=documentElement.createElement('LINK');e.rel='stylesheet';e.type='text/css';e.href=cssFileUrl;documentElement.getElementsByTagName("HEAD")[0].appendChild(e);return e;};FCKTools.ClearElementAttributes=function(element){for (var i=0;i<element.attributes.length;i++){element.removeAttribute(element.attributes[i].name,0);};};FCKTools.GetAllChildrenIds=function(parentElement){var aIds=new Array();var fGetIds=function(parent){for (var i=0;i<parent.childNodes.length;i++){var sId=parent.childNodes[i].id;if (sId&&sId.length>0) aIds[aIds.length]=sId;fGetIds(parent.childNodes[i]);};};fGetIds(parentElement);return aIds;};FCKTools.RemoveOuterTags=function(e){var oFragment=e.ownerDocument.createDocumentFragment();for (var i=0;i<e.childNodes.length;i++) oFragment.appendChild(e.childNodes[i]);e.parentNode.replaceChild(oFragment,e);};FCKTools.CreateXmlObject=function(object){switch (object){case 'XmlHttp':return new XMLHttpRequest();case 'DOMDocument':return document.implementation.createDocument('','',null);};}
var FCKRegexLib=new Object();FCKRegexLib.AposEntity=/&apos;/gi;FCKRegexLib.ObjectElements=/^(?:IMG|TABLE|TR|TD|INPUT|SELECT|TEXTAREA|HR|OBJECT)$/i;FCKRegexLib.BlockElements=/^(?:P|DIV|H1|H2|H3|H4|H5|H6|ADDRESS|PRE|OL|UL|LI|TD)$/i;FCKRegexLib.EmptyElements=/^(?:BASE|META|LINK|HR|BR|PARAM|IMG|AREA|INPUT)$/i;FCKRegexLib.NamedCommands=/^(?:Cut|Copy|Paste|Print|SelectAll|RemoveFormat|Unlink|Undo|Redo|Bold|Italic|Underline|StrikeThrough|Subscript|Superscript|JustifyLeft|JustifyCenter|JustifyRight|JustifyFull|Outdent|Indent|InsertOrderedList|InsertUnorderedList|InsertHorizontalRule)$/i;FCKRegexLib.BodyContents=/([\s\S]*\<body[^\>]*\>)([\s\S]*)(\<\/body\>[\s\S]*)/i;FCKRegexLib.ToReplace=/___fcktoreplace:([\w]+)/ig;FCKRegexLib.MetaHttpEquiv=/http-equiv\s*=\s*["']?([^"' ]+)/i;FCKRegexLib.HasBaseTag=/<base /i;FCKRegexLib.HeadCloser=/<\/head\s*>/i;FCKRegexLib.TableBorderClass=/\s*FCK__ShowTableBorders\s*/;FCKRegexLib.ElementName=/^[A-Za-z_:][\w.-:]*$/;FCKRegexLib.ForceSimpleAmpersand=/___FCKAmp___/g;FCKRegexLib.SpaceNoClose=/\/>/g;FCKRegexLib.EmptyParagraph=/^<(p|div)>\s*<\/\1>$/i;FCKRegexLib.TagBody=/></;
FCKLanguageManager.GetActiveLanguage=function(){if (FCKConfig.AutoDetectLanguage){var sUserLang;if (navigator.userLanguage) sUserLang=navigator.userLanguage.toLowerCase();else if (navigator.language) sUserLang=navigator.language.toLowerCase();else{return FCKConfig.DefaultLanguage;};if (sUserLang.length>=5){sUserLang=sUserLang.substr(0,5);if (this.AvailableLanguages[sUserLang]) return sUserLang;};if (sUserLang.length>=2){sUserLang=sUserLang.substr(0,2);if (this.AvailableLanguages[sUserLang]) return sUserLang;};};return this.DefaultLanguage;};FCKLanguageManager.TranslateElements=function(targetDocument,tag,propertyToSet){var aInputs=targetDocument.getElementsByTagName(tag);for (var i=0;i<aInputs.length;i++){var sKey=aInputs[i].getAttribute('fckLang');if (sKey){var s=FCKLang[sKey];if (s) eval('aInputs[i].'+propertyToSet+' = s');};};};FCKLanguageManager.TranslatePage=function(targetDocument){this.TranslateElements(targetDocument,'INPUT','value');this.TranslateElements(targetDocument,'SPAN','innerHTML');this.TranslateElements(targetDocument,'LABEL','innerHTML');this.TranslateElements(targetDocument,'OPTION','innerHTML');};if (FCKLanguageManager.AvailableLanguages[FCKConfig.DefaultLanguage]) FCKLanguageManager.DefaultLanguage=FCKConfig.DefaultLanguage;else FCKLanguageManager.DefaultLanguage='en';FCKLanguageManager.ActiveLanguage=new Object();FCKLanguageManager.ActiveLanguage.Code=FCKLanguageManager.GetActiveLanguage();FCKLanguageManager.ActiveLanguage.Name=FCKLanguageManager.AvailableLanguages[FCKLanguageManager.ActiveLanguage.Code];FCK.Language=FCKLanguageManager;LoadLanguageFile();
var FCKEvents;if (!(FCKEvents=NS.FCKEvents)){FCKEvents=NS.FCKEvents=function(eventsOwner){this.Owner=eventsOwner;this.RegisteredEvents=new Object();};FCKEvents.prototype.AttachEvent=function(eventName,functionPointer){if (!this.RegisteredEvents[eventName]) this.RegisteredEvents[eventName]=new Array();this.RegisteredEvents[eventName][this.RegisteredEvents[eventName].length]=functionPointer;};FCKEvents.prototype.FireEvent=function(eventName,params){var bReturnValue=true;var oCalls=this.RegisteredEvents[eventName];if (oCalls){for (var i=0;i<oCalls.length;i++) bReturnValue=(oCalls[i](this.Owner,params)&&bReturnValue);};return bReturnValue;};}
if (FCKConfig.ProcessHTMLEntities){FCKXHtmlEntities=new Object();FCKXHtmlEntities.Entities={' ':'nbsp','¡':'iexcl','¢':'cent','£':'pound','¤':'curren','¥':'yen','¦':'brvbar','§':'sect','¨':'uml','©':'copy','ª':'ordf','«':'laquo','¬':'not','­':'shy','®':'reg','¯':'macr','°':'deg','±':'plusmn','²':'sup2','³':'sup3','´':'acute','µ':'micro','¶':'para','·':'middot','¸':'cedil','¹':'sup1','º':'ordm','»':'raquo','¼':'frac14','½':'frac12','¾':'frac34','¿':'iquest','×':'times','÷':'divide','ƒ':'fnof','•':'bull','…':'hellip','′':'prime','″':'Prime','‾':'oline','⁄':'frasl','℘':'weierp','ℑ':'image','ℜ':'real','™':'trade','ℵ':'alefsym','←':'larr','↑':'uarr','→':'rarr','↓':'darr','↔':'harr','↵':'crarr','⇐':'lArr','⇑':'uArr','⇒':'rArr','⇓':'dArr','⇔':'hArr','∀':'forall','∂':'part','∃':'exist','∅':'empty','∇':'nabla','∈':'isin','∉':'notin','∋':'ni','∏':'prod','∑':'sum','−':'minus','∗':'lowast','√':'radic','∝':'prop','∞':'infin','∠':'ang','∧':'and','∨':'or','∩':'cap','∪':'cup','∫':'int','∴':'there4','∼':'sim','≅':'cong','≈':'asymp','≠':'ne','≡':'equiv','≤':'le','≥':'ge','⊂':'sub','⊃':'sup','⊄':'nsub','⊆':'sube','⊇':'supe','⊕':'oplus','⊗':'otimes','⊥':'perp','⋅':'sdot','◊':'loz','♠':'spades','♣':'clubs','♥':'hearts','♦':'diams','ˆ':'circ','˜':'tilde',' ':'ensp',' ':'emsp',' ':'thinsp','‌':'zwnj','‍':'zwj','‎':'lrm','‏':'rlm','–':'ndash','—':'mdash','‘':'lsquo','’':'rsquo','‚':'sbquo','“':'ldquo','”':'rdquo','„':'bdquo','†':'dagger','‡':'Dagger','‰':'permil','‹':'lsaquo','›':'rsaquo','€':'euro'};FCKXHtmlEntities.Chars='';for (var e in FCKXHtmlEntities.Entities) FCKXHtmlEntities.Chars+=e;if (FCKConfig.IncludeLatinEntities){var oEntities={'À':'Agrave','Á':'Aacute','Â':'Acirc','Ã':'Atilde','Ä':'Auml','Å':'Aring','Æ':'AElig','Ç':'Ccedil','È':'Egrave','É':'Eacute','Ê':'Ecirc','Ë':'Euml','Ì':'Igrave','Í':'Iacute','Î':'Icirc','Ï':'Iuml','Ð':'ETH','Ñ':'Ntilde','Ò':'Ograve','Ó':'Oacute','Ô':'Ocirc','Õ':'Otilde','Ö':'Ouml','Ø':'Oslash','Ù':'Ugrave','Ú':'Uacute','Û':'Ucirc','Ü':'Uuml','Ý':'Yacute','Þ':'THORN','ß':'szlig','à':'agrave','á':'aacute','â':'acirc','ã':'atilde','ä':'auml','å':'aring','æ':'aelig','ç':'ccedil','è':'egrave','é':'eacute','ê':'ecirc','ë':'euml','ì':'igrave','í':'iacute','î':'icirc','ï':'iuml','ð':'eth','ñ':'ntilde','ò':'ograve','ó':'oacute','ô':'ocirc','õ':'otilde','ö':'ouml','ø':'oslash','ù':'ugrave','ú':'uacute','û':'ucirc','ü':'uuml','ý':'yacute','þ':'thorn','ÿ':'yuml','Œ':'OElig','œ':'oelig','Š':'Scaron','š':'scaron','Ÿ':'Yuml'};for (var e in oEntities){FCKXHtmlEntities.Entities[e]=oEntities[e];FCKXHtmlEntities.Chars+=e;};oEntities=null;};if (FCKConfig.IncludeGreekEntities){var oEntities={'Α':'Alpha','Β':'Beta','Γ':'Gamma','Δ':'Delta','Ε':'Epsilon','Ζ':'Zeta','Η':'Eta','Θ':'Theta','Ι':'Iota','Κ':'Kappa','Λ':'Lambda','Μ':'Mu','Ν':'Nu','Ξ':'Xi','Ο':'Omicron','Π':'Pi','Ρ':'Rho','Σ':'Sigma','Τ':'Tau','Υ':'Upsilon','Φ':'Phi','Χ':'Chi','Ψ':'Psi','Ω':'Omega','α':'alpha','β':'beta','γ':'gamma','δ':'delta','ε':'epsilon','ζ':'zeta','η':'eta','θ':'theta','ι':'iota','κ':'kappa','λ':'lambda','μ':'mu','ν':'nu','ξ':'xi','ο':'omicron','π':'pi','ρ':'rho','ς':'sigmaf','σ':'sigma','τ':'tau','υ':'upsilon','φ':'phi','χ':'chi','ψ':'psi','ω':'omega'};for (var e in oEntities){FCKXHtmlEntities.Entities[e]=oEntities[e];FCKXHtmlEntities.Chars+=e;};oEntities=null;};FCKXHtmlEntities.EntitiesRegex=new RegExp('','');FCKXHtmlEntities.EntitiesRegex.compile('['+FCKXHtmlEntities.Chars+']|[^'+FCKXHtmlEntities.Chars+']+','g');FCKXHtmlEntities.GeckoEntitiesMarkerRegex=/#\?-\:/g;}
var FCKXHtml=new Object();FCKXHtml.CurrentJobNum=0;FCKXHtml.GetXHTML=function(node,includeNode,format){FCKXHtml.SpecialBlocks=new Array();this.XML=FCKTools.CreateXmlObject('DOMDocument');this.MainNode=this.XML.appendChild(this.XML.createElement('xhtml'));FCKXHtml.CurrentJobNum++;if (includeNode) this._AppendNode(this.MainNode,node);else this._AppendChildNodes(this.MainNode,node,false);var sXHTML=this._GetMainXmlString();sXHTML=sXHTML.substr(7,sXHTML.length-15).trim();if (FCKBrowserInfo.IsGecko) sXHTML=sXHTML.replace(/<br\/>$/,'');sXHTML=sXHTML.replace(FCKRegexLib.SpaceNoClose,' />');if (FCKConfig.ForceSimpleAmpersand) sXHTML=sXHTML.replace(FCKRegexLib.ForceSimpleAmpersand,'&');if (format) sXHTML=FCKCodeFormatter.Format(sXHTML);for (var i=0;i<FCKXHtml.SpecialBlocks.length;i++){var oRegex=new RegExp('___FCKsi___'+i);sXHTML=sXHTML.replace(oRegex,FCKXHtml.SpecialBlocks[i]);};this.XML=null;return sXHTML};FCKXHtml._AppendAttribute=function(xmlNode,attributeName,attributeValue){try{var oXmlAtt=this.XML.createAttribute(attributeName);oXmlAtt.value=attributeValue?attributeValue:'';xmlNode.attributes.setNamedItem(oXmlAtt);}catch (e){};};FCKXHtml._AppendChildNodes=function(xmlNode,htmlNode,isBlockElement){var iCount=0;if (htmlNode.hasChildNodes()){var oChildren=htmlNode.childNodes;for (var i=0;i<oChildren.length;i++){if (this._AppendNode(xmlNode,oChildren[i])) iCount++;};};if (iCount==0){if (isBlockElement&&FCKConfig.FillEmptyBlocks){this._AppendEntity(xmlNode,'nbsp');return;};if (!FCKRegexLib.EmptyElements.test(htmlNode.nodeName)) xmlNode.appendChild(this.XML.createTextNode(''));};};FCKXHtml._AppendNode=function(xmlNode,htmlNode){switch (htmlNode.nodeType){case 1:if (htmlNode.getAttribute('_fckfakelement')) return FCKXHtml._AppendNode(xmlNode,FCK.GetRealElement(htmlNode));if (FCKBrowserInfo.IsGecko&&htmlNode.hasAttribute('_moz_editor_bogus_node')) return false;if (htmlNode.getAttribute('_fckdelete')) return false;var sNodeName=htmlNode.nodeName;if (!FCKRegexLib.ElementName.test(sNodeName)) return false;sNodeName=sNodeName.toLowerCase();if (FCKBrowserInfo.IsGecko&&sNodeName=='br'&&htmlNode.hasAttribute('type')&&htmlNode.getAttribute('type',2)=='_moz') return false;if (htmlNode._fckxhtmljob==FCKXHtml.CurrentJobNum) return false;else htmlNode._fckxhtmljob=FCKXHtml.CurrentJobNum;var oNode=this.XML.createElement(sNodeName);FCKXHtml._AppendAttributes(xmlNode,htmlNode,oNode,sNodeName);var oTagProcessor=FCKXHtml.TagProcessors[sNodeName];if (oTagProcessor){oNode=oTagProcessor(oNode,htmlNode);if (!oNode) break;}else this._AppendChildNodes(oNode,htmlNode,FCKRegexLib.BlockElements.test(sNodeName));xmlNode.appendChild(oNode);break;case 3:this._AppendTextNode(xmlNode,htmlNode.nodeValue.replaceNewLineChars(' '));break;case 8:xmlNode.appendChild(this.XML.createComment(htmlNode.nodeValue));break;default:xmlNode.appendChild(this.XML.createComment("Element not supported - Type: "+htmlNode.nodeType+" Name: "+htmlNode.nodeName));break;};return true;};FCKXHtml._AppendSpecialItem=function(item){return '___FCKsi___'+FCKXHtml.SpecialBlocks.addItem(item);};if (FCKConfig.ProcessHTMLEntities){FCKXHtml._AppendTextNode=function(targetNode,textValue){var asPieces=textValue.match(FCKXHtmlEntities.EntitiesRegex);if (asPieces){for (var i=0;i<asPieces.length;i++){if (asPieces[i].length==1){var sEntity=FCKXHtmlEntities.Entities[asPieces[i]];if (sEntity!=null){this._AppendEntity(targetNode,sEntity);continue;};};targetNode.appendChild(this.XML.createTextNode(asPieces[i]));};};};}else{FCKXHtml._AppendTextNode=function(targetNode,textValue){targetNode.appendChild(this.XML.createTextNode(textValue));};};FCKXHtml.TagProcessors=new Object();FCKXHtml.TagProcessors['img']=function(node){if (!node.attributes.getNamedItem('alt')) FCKXHtml._AppendAttribute(node,'alt','');return node;};FCKXHtml.TagProcessors['script']=function(node,htmlNode){if (!node.attributes.getNamedItem('type')) FCKXHtml._AppendAttribute(node,'type','text/javascript');node.appendChild(FCKXHtml.XML.createTextNode(FCKXHtml._AppendSpecialItem(htmlNode.text)));return node;};FCKXHtml.TagProcessors['style']=function(node,htmlNode){if (htmlNode.getAttribute('_fcktemp')) return null;if (!node.attributes.getNamedItem('type')) FCKXHtml._AppendAttribute(node,'type','text/css');node.appendChild(FCKXHtml.XML.createTextNode(FCKXHtml._AppendSpecialItem(htmlNode.innerHTML)));return node;};FCKXHtml.TagProcessors['title']=function(node,htmlNode){node.appendChild(FCKXHtml.XML.createTextNode(FCK.EditorDocument.title));return node;};FCKXHtml.TagProcessors['base']=function(node,htmlNode){if (htmlNode.getAttribute('_fcktemp')) return null;return node;};FCKXHtml.TagProcessors['link']=function(node,htmlNode){if (htmlNode.getAttribute('_fcktemp')) return null;return node;};FCKXHtml.TagProcessors['table']=function(node,htmlNode){var oClassAtt=node.attributes.getNamedItem('class');if (oClassAtt&&FCKRegexLib.TableBorderClass.test(oClassAtt.nodeValue)){var sClass=oClassAtt.nodeValue.replace(FCKRegexLib.TableBorderClass,'');if (sClass.length==0) node.attributes.removeNamedItem('class');else FCKXHtml._AppendAttribute(node,'class',sClass);};FCKXHtml._AppendChildNodes(node,htmlNode,false);return node;}
FCKXHtml._GetMainXmlString=function(){var oSerializer=new XMLSerializer();if (FCKConfig.ProcessHTMLEntities){return oSerializer.serializeToString(this.MainNode).replace(FCKXHtmlEntities.GeckoEntitiesMarkerRegex,'&');}else return oSerializer.serializeToString(this.MainNode);};FCKXHtml._AppendEntity=function(xmlNode,entity){xmlNode.appendChild(this.XML.createTextNode('#?-:'+entity+';'));};FCKXHtml._AppendAttributes=function(xmlNode,htmlNode,node){var aAttributes=htmlNode.attributes;for (var n=0;n<aAttributes.length;n++){var oAttribute=aAttributes[n];if (oAttribute.specified){var sAttName=oAttribute.nodeName.toLowerCase();if (sAttName=='_fckxhtmljob') continue;else if (sAttName.indexOf('_moz')==0) continue;else if (sAttName=='class') var sAttValue=oAttribute.nodeValue;else if (oAttribute.nodeValue===true) sAttValue=sAttName;else var sAttValue=htmlNode.getAttribute(sAttName,2);if (FCKConfig.ForceSimpleAmpersand&&sAttValue.replace) sAttValue=sAttValue.replace(/&/g,'___FCKAmp___');this._AppendAttribute(node,sAttName,sAttValue);};};}
var FCKCodeFormatter;if (!(FCKCodeFormatter=NS.FCKCodeFormatter)){FCKCodeFormatter=NS.FCKCodeFormatter=new Object();FCKCodeFormatter.Regex=new Object();FCKCodeFormatter.Regex.BlocksOpener=/\<(P|DIV|H1|H2|H3|H4|H5|H6|ADDRESS|PRE|OL|UL|LI|TITLE|META|LINK|BASE|SCRIPT|LINK|TD|AREA|OPTION)[^\>]*\>/gi;FCKCodeFormatter.Regex.BlocksCloser=/\<\/(P|DIV|H1|H2|H3|H4|H5|H6|ADDRESS|PRE|OL|UL|LI|TITLE|META|LINK|BASE|SCRIPT|LINK|TD|AREA|OPTION)[^\>]*\>/gi;FCKCodeFormatter.Regex.NewLineTags=/\<(BR|HR)[^\>]\>/gi;FCKCodeFormatter.Regex.MainTags=/\<\/?(HTML|HEAD|BODY|FORM|TABLE|TBODY|THEAD|TR)[^\>]*\>/gi;FCKCodeFormatter.Regex.LineSplitter=/\s*\n+\s*/g;FCKCodeFormatter.Regex.IncreaseIndent=/^\<(HTML|HEAD|BODY|FORM|TABLE|TBODY|THEAD|TR|UL|OL)[ \/\>]/i;FCKCodeFormatter.Regex.DecreaseIndent=/^\<\/(HTML|HEAD|BODY|FORM|TABLE|TBODY|THEAD|TR|UL|OL)[ \>]/i;FCKCodeFormatter.Regex.FormatIndentatorRemove=new RegExp(FCKConfig.FormatIndentator);FCKCodeFormatter.Format=function(html){var sFormatted=html.replace(this.Regex.BlocksOpener,'\n$&');;sFormatted=sFormatted.replace(this.Regex.BlocksCloser,'$&\n');sFormatted=sFormatted.replace(this.Regex.NewLineTags,'$&\n');sFormatted=sFormatted.replace(this.Regex.MainTags,'\n$&\n');var sIndentation='';var asLines=sFormatted.split(this.Regex.LineSplitter);sFormatted='';for (var i=0;i<asLines.length;i++){var sLine=asLines[i];if (sLine.length==0) continue;if (this.Regex.DecreaseIndent.test(sLine)) sIndentation=sIndentation.replace(this.Regex.FormatIndentatorRemove,'');sFormatted+=sIndentation+sLine+'\n';if (this.Regex.IncreaseIndent.test(sLine)) sIndentation+=FCKConfig.FormatIndentator;};return sFormatted.trim();};}
var FCKUndo=new Object();FCKUndo.SaveUndoStep=function(){}
FCK.Events=new FCKEvents(FCK);FCK.Toolbar=null;FCK.TempBaseTag=FCKConfig.BaseHref.length>0?'<base href="'+FCKConfig.BaseHref+'" _fcktemp="true"></base>':'';FCK.StartEditor=function(){this.EditorWindow=window.frames['eEditorArea'];this.EditorDocument=this.EditorWindow.document;if (FCKBrowserInfo.IsGecko) this.MakeEditable();this.SetHTML(FCKTools.GetLinkedFieldValue());FCKTools.AttachToLinkedFieldFormSubmit(this.UpdateLinkedField);FCKUndo.SaveUndoStep();this.SetStatus(FCK_STATUS_ACTIVE);};function Window_OnFocus(){FCK.Focus();};FCK.SetStatus=function(newStatus){this.Status=newStatus;if (newStatus==FCK_STATUS_ACTIVE){window.onfocus=window.document.body.onfocus=Window_OnFocus;if (FCKConfig.StartupFocus) FCK.Focus();if (FCKBrowserInfo.IsIE) FCKScriptLoader.AddScript('js/fckeditorcode_ie_2.js');else FCKScriptLoader.AddScript('js/fckeditorcode_gecko_2.js');};this.Events.FireEvent('OnStatusChange',newStatus);};FCK.GetHTML=function(format){var sHTML;if (FCK.EditMode==FCK_EDITMODE_WYSIWYG){if (FCKBrowserInfo.IsIE) sHTML=this.EditorDocument.body.innerHTML.replace(FCKRegexLib.ToReplace,'$1');else sHTML=this.EditorDocument.body.innerHTML;}else sHTML=document.getElementById('eSourceField').value;if (format) return FCKCodeFormatter.Format(sHTML);else return sHTML;};FCK.GetXHTML=function(format){var bSource=(FCK.EditMode==FCK_EDITMODE_SOURCE);if (bSource) this.SwitchEditMode();if (FCKConfig.FullPage) var sXHTML=FCKXHtml.GetXHTML(this.EditorDocument.getElementsByTagName('html')[0],true,format);else{if (FCKConfig.IgnoreEmptyParagraphValue&&this.EditorDocument.body.innerHTML=='<P>&nbsp;</P>') var sXHTML='';else var sXHTML=FCKXHtml.GetXHTML(this.EditorDocument.body,false,format);};if (bSource) this.SwitchEditMode();if (FCKBrowserInfo.IsIE) sXHTML=sXHTML.replace(FCKRegexLib.ToReplace,'$1');if (FCK.DocTypeDeclaration&&FCK.DocTypeDeclaration.length>0) sXHTML=FCK.DocTypeDeclaration+'\n'+sXHTML;if (FCK.XmlDeclaration&&FCK.XmlDeclaration.length>0) sXHTML=FCK.XmlDeclaration+'\n'+sXHTML;return sXHTML;};FCK.UpdateLinkedField=function(){if (FCKConfig.EnableXHTML) FCKTools.SetLinkedFieldValue(FCK.GetXHTML(FCKConfig.FormatOutput));else FCKTools.SetLinkedFieldValue(FCK.GetHTML(FCKConfig.FormatOutput));};FCK.ShowContextMenu=function(x,y){if (this.Status!=FCK_STATUS_COMPLETE) return;FCKContextMenu.Show(x,y);this.Events.FireEvent("OnContextMenu");};FCK.RegisteredDoubleClickHandlers=new Object();FCK.OnDoubleClick=function(element){var oHandler=FCK.RegisteredDoubleClickHandlers[element.tagName];if (oHandler) oHandler(element);};FCK.RegisterDoubleClickHandler=function(handlerFunction,tag){FCK.RegisteredDoubleClickHandlers[tag.toUpperCase()]=handlerFunction;};FCK.OnAfterSetHTML=function(){var oProcessor,i=0;while(oProcessor=FCKDocumentProcessors[i++]) oProcessor.ProcessDocument(FCK.EditorDocument);this.Events.FireEvent('OnAfterSetHTML');};var FCKDocumentProcessors=new Array();var FCKDocumentProcessors_CreateFakeImage=function(fakeClass,realElement){var oImg=FCK.EditorDocument.createElement('IMG');oImg.className=fakeClass;oImg.src=FCKConfig.FullBasePath+'images/spacer.gif';oImg.setAttribute('_fckfakelement','true',0);oImg.setAttribute('_fckrealelement',FCKTempBin.AddElement(realElement),0);return oImg;};var FCKAnchorsProcessor=new Object();FCKAnchorsProcessor.ProcessDocument=function(document){var aLinks=document.getElementsByTagName('A');var oLink;var i=aLinks.length-1;while (i>=0&&(oLink=aLinks[i--])){if (oLink.name.length>0&&(!oLink.getAttribute('href')||oLink.getAttribute('href').length==0)){var oImg=FCKDocumentProcessors_CreateFakeImage('FCK__Anchor',oLink.cloneNode(true));oImg.setAttribute('_fckanchor','true',0);oLink.parentNode.insertBefore(oImg,oLink);oLink.parentNode.removeChild(oLink);};};};FCKDocumentProcessors.addItem(FCKAnchorsProcessor);var FCKFlashProcessor=new Object();FCKFlashProcessor.ProcessDocument=function(document){var aEmbeds=document.getElementsByTagName('EMBED');var oEmbed;var i=aEmbeds.length-1;while (i>=0&&(oEmbed=aEmbeds[i--])){if (oEmbed.src.endsWith('.swf',true)){var oImg=FCKDocumentProcessors_CreateFakeImage('FCK__Flash',oEmbed.cloneNode(true));oImg.setAttribute('_fckflash','true',0);FCKFlashProcessor.RefreshView(oImg,oEmbed);oEmbed.parentNode.insertBefore(oImg,oEmbed);oEmbed.parentNode.removeChild(oEmbed);};};};FCKFlashProcessor.RefreshView=function(placholderImage,originalEmbed){if (originalEmbed.width>0) placholderImage.style.width=FCKTools.ConvertHtmlSizeToStyle(originalEmbed.width);if (originalEmbed.height>0) placholderImage.style.height=FCKTools.ConvertHtmlSizeToStyle(originalEmbed.height);};FCKDocumentProcessors.addItem(FCKFlashProcessor);FCK.GetRealElement=function(fakeElement){var e=FCKTempBin.Elements[fakeElement.getAttribute('_fckrealelement')];if (fakeElement.getAttribute('_fckflash')){if (fakeElement.style.width.length>0) e.width=FCKTools.ConvertStyleSizeToHtml(fakeElement.style.width);if (fakeElement.style.height.length>0) e.height=FCKTools.ConvertStyleSizeToHtml(fakeElement.style.height);};return e;}
FCK.Description="FCKeditor for Gecko Browsers";FCK.InitializeBehaviors=function(){if (FCKConfig.ShowBorders){var oStyle=FCKTools.AppendStyleSheet(this.EditorDocument,FCKConfig.FullBasePath+'css/fck_showtableborders_gecko.css');oStyle.setAttribute('_fcktemp','true');};var oOnContextMenu=function(e){e.preventDefault();FCK.ShowContextMenu(e.clientX,e.clientY);};this.EditorDocument.addEventListener('contextmenu',oOnContextMenu,true);var oOnKeyDown=function(e){if (e.ctrlKey&&!e.shiftKey&&!e.altKey){if (e.which==86||e.which==118){if (FCK.Status!=FCK_STATUS_COMPLETE||!FCK.Events.FireEvent("OnPaste")){e.preventDefault();e.stopPropagation();};};};};this.EditorDocument.addEventListener('keypress',oOnKeyDown,true);this.ExecOnSelectionChange=function(){FCK.Events.FireEvent("OnSelectionChange");};this.ExecOnSelectionChangeTimer=function(){if (FCK.LastOnChangeTimer) window.clearTimeout(FCK.LastOnChangeTimer);FCK.LastOnChangeTimer=window.setTimeout(FCK.ExecOnSelectionChange,100);};this.EditorDocument.addEventListener('mouseup',this.ExecOnSelectionChange,false);this.EditorDocument.addEventListener('keyup',this.ExecOnSelectionChangeTimer,false);this._DblClickListener=function(e){FCK.OnDoubleClick(e.target);e.stopPropagation();};this.EditorDocument.addEventListener('dblclick',this._DblClickListener,true);this._OnLoad=function(){if (this._FCK_HTML){this.document.body.innerHTML=this._FCK_HTML;this._FCK_HTML=null;};};this.EditorWindow.addEventListener('load',this._OnLoad,true);};FCK.MakeEditable=function(){if (this.EditorWindow.document.designMode=='on') return;this.EditorWindow.document.designMode='on';this.EditorWindow.document.execCommand('useCSS',false,!FCKConfig.GeckoUseSPAN);};FCK.Focus=function(){try{FCK.EditorWindow.focus();}catch(e) {};};FCK.SetHTML=function(html,forceWYSIWYG){if (forceWYSIWYG||FCK.EditMode==FCK_EDITMODE_WYSIWYG){if (FCKConfig.FullPage&&FCKRegexLib.BodyContents.test(html)){if (FCK.TempBaseTag.length>0&&!FCKRegexLib.HasBaseTag.test(html)) html=html.replace(FCKRegexLib.HeadCloser,FCK.TempBaseTag+'</head>');html=html.replace(FCKRegexLib.HeadCloser,'<link href="'+FCKConfig.BasePath+'css/fck_internal.css'+'" rel="stylesheet" type="text/css" _fcktemp="true" /></head>');var oMatch=html.match(FCKRegexLib.BodyContents);var sOpener=oMatch[1];var sContents=oMatch[2];var sCloser=oMatch[3];var sHtml=sOpener+'&nbsp;'+sCloser;if (!this._Initialized){FCK.EditorDocument.designMode="on";FCK.EditorDocument.execCommand("useCSS",false,!FCKConfig.GeckoUseSPAN);this._Initialized=true;};this.EditorDocument.open();this.EditorDocument.write(sHtml);this.EditorDocument.close();if (this.EditorDocument.body) this.EditorDocument.body.innerHTML=sContents;else this.EditorWindow._FCK_HTML=sContents;this.InitializeBehaviors();}else{if (!this._Initialized){this.EditorDocument.dir=FCKConfig.ContentLangDirection;var sHtml='<title></title>'+'<link href="'+FCKConfig.EditorAreaCSS+'" rel="stylesheet" type="text/css" />'+'<link href="'+FCKConfig.BasePath+'css/fck_internal.css'+'" rel="stylesheet" type="text/css" _fcktemp="true" />';sHtml+=FCK.TempBaseTag;this.EditorDocument.getElementsByTagName("HEAD")[0].innerHTML=sHtml;this.InitializeBehaviors();this._Initialized=true;};if (html.length==0) FCK.EditorDocument.body.innerHTML='<br _moz_editor_bogus_node="TRUE">';else if (FCKRegexLib.EmptyParagraph.test(html)) FCK.EditorDocument.body.innerHTML=html.replace(FCKRegexLib.TagBody,'><br _moz_editor_bogus_node="TRUE"><');else FCK.EditorDocument.body.innerHTML=html;FCK.EditorDocument.execCommand('useCSS',false,!FCKConfig.GeckoUseSPAN);};FCK.OnAfterSetHTML();}else document.getElementById('eSourceField').value=html;}
