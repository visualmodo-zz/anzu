!function(){function t(t,i){var n=wp.customize.control(t);if(void 0!==n){var o=(i=i||n.setting.get())["font-family"]&&kirkiGoogleFonts.items[i["font-family"]],a=i.variant?i.variant.toString():"regular",e=wp.customize.control(t+"[variant]"),r=[];if(o){var l=kirkiGoogleFonts.items[i["font-family"]].variants;l.sort((function(t,i){return t<i?-1:t>i?1:0})),kirkiFontVariants.complete.forEach((function(t){-1!==l.indexOf(t.value)&&r.push({value:t.value,label:t.label})}))}else{var c=t.replace(/]/g,"");c=c.replace(/\[/g,"_"),r=kirkiCustomVariants[c][i["font-family"]]?kirkiCustomVariants[c][i["font-family"]]:kirkiFontVariants.standard}-1!==a.indexOf("i")?i["font-style"]="italic":i["font-style"]="normal",i["font-weight"]="regular"===a||"italic"===a?400:parseInt(a,10),e&&(1<r.length&&n.active()?e.activate():e.deactivate(),e.params.choices=r,e.formattedOptions=[],e.destroy(),r.includes(a)?e.doSelectAction("selectOption",a):e.doSelectAction("selectOption","regular")),wp.hooks.addAction("kirki.dynamicControl.initKirkiControl","kirki",(function(t){e&&t.id}))}}jQuery(document).ready((function(){_.each(kirkiTypographyControls,(function(i){t(i),wp.customize(i,(function(n){n.bind((function(n){t(i,n)}))}))}))}))}();