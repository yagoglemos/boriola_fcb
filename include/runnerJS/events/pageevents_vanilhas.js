
Runner.pages.PageSettings.addPageEvent('vanilhas',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){if((proxy['saved'])){alert('Vinculação feita com sucesso!');window.parent.close();window.parent.location.reload();};});Runner.pages.PageSettings.addPageEvent('vanilhas',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){if(proxy['delete']==true){window.location.reload();};});Runner.pages.fieldsEvents["quantidade_event"]=function(pageObj,pageid,row){if(row){row=new Runner.AjaxRow(pageObj,row);}
var ret,reqParams,ctrl=this,fieldsData={},params={},ajax=new Runner.form.Button({id:'quantidade_event',btnName:'quantidade_event'}),before=function(){let quantidade=Runner.getControl(pageid,'quantidade');if(quantidade.getValue()>0){let sinicio=Runner.getControl(pageid,'fcbinicio');let sfim=Runner.getControl(pageid,'fcbfimbase');let sfimo=Runner.getControl(pageid,'fcbfim');let fims=(parseInt(sinicio.getValue())+parseInt(quantidade.getValue())-1)
if(sfim.getValue()>=fims){}else{}
let minicio=Runner.getControl(pageid,'mapainicio');let mfim=Runner.getControl(pageid,'mapafimbase');let mfimo=Runner.getControl(pageid,'mapafim');let fimm=(parseInt(minicio.getValue())+parseInt(quantidade.getValue())-1)
if(mfim.getValue()>=fimm){}else{}
if((sfim.getValue()>=fims)&&(mfim.getValue()>=fimm)){sfimo.setValue(fims)
mfimo.setValue(fimm)}else{alert('Ultrapassou o limite disponível mapa!')
quantidade.setValue('1')
sfimo.setValue(parseInt(sinicio.getValue()))
mfimo.setValue(parseInt(minicio.getValue()))}}else{alert('A quantidade precisa ser maior do que zero!')
quantidade.setValue('1')
sfimo.setValue(parseInt(sinicio.getValue()))
mfimo.setValue(parseInt(minicio.getValue()))}
return false;},after=function(result){ctrl.setValue(result["upper"]);},submit=function(){params["table"]="vanilhas";params["field"]=ctrl.fieldName;params.page=pageObj.pageName;(Runner.controls.ControlStorage.byId(pageid)||[]).forEach(function(ctrl){if(!(ctrl instanceof Runner.controls.MultiUploadField)&&!(ctrl instanceof Runner.controls.FileControl)){fieldsData[ctrl.fieldName]=ctrl.getStringValue();}});reqParams={params:JSON.stringify(params),event:"quantidade_event",pageType:pageObj.pageType,keys:JSON.stringify(pageObj.keys?pageObj.keys:(row&&row.getKeys())),fieldsData:JSON.stringify(fieldsData)};if(pageObj.masterTable){reqParams.masterTable=pageObj.masterTable;reqParams=Runner.apply(reqParams,pageObj.masterKeys);}
$.post(Runner.getPageUrl("buttonhandler"),reqParams,function(result){var _result;try{_result=JSON.parse(result);}catch(e){Runner.displayGenericAjaxError(result);}
after.call(ctrl,_result);}).fail(function(jqXHR,textStatus,errorThrown){Runner.displayGenericAjaxError(jqXHR.responseText||textStatus+' '+errorThrown);});submit=function(){};};ajax.submitHandler=submit;ajax.submit=submit;ret=before.call(this);if(ret===false){return;}
submit();};