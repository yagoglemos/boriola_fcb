
Runner.buttonEvents["certificado"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='certificado';if(!pageObj.buttonEventBefore['certificado']){pageObj.buttonEventBefore['certificado']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;window.open('certificado_anilha.php?id='+rowData.keys,'blank')
return false;}}
if(!pageObj.buttonEventAfter['certificado']){pageObj.buttonEventAfter['certificado']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;var message=result["txt"]+" !!!";ajax.setMessage(message);}}
$('a[id="certificado"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="certificado"+"_"+Runner.genId();var button_certificado=new Runner.form.Button({id:this.id,btnName:"certificado"});button_certificado.init({args:[pageObj,proxy,pageid]});});};