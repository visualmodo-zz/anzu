wp.customize.controlConstructor["kirki-date"]=wp.customize.kirkiDynamicControl.extend({handleWidth:function(e){document.querySelector("#kirki-style-datepicker").innerHTML=".kirki-datepicker-popup {width: "+e.clientWidth.toString()+"px;}"},initKirkiControl:function(e){var t;t=(e=e||this).selector+" input.datepicker";var i=document.querySelector("#kirki-style-datepicker");i||((i=document.createElement("style")).id="kirki-style-datepicker",document.head.appendChild(i)),jQuery(t).datepicker({dateFormat:"yy-mm-dd",duration:200,beforeShow:function(t,i){i.dpDiv[0].classList.add("kirki-datepicker-popup"),e.handleWidth(t)}}),this.container.on("change keyup paste","input.datepicker",(function(){e.setting.set(jQuery(this).val())}))}});
