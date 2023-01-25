/*!
 ColReorder 1.3.2
 Â©2010-2015 SpryMedia Ltd - datatables.net/license
*/
(function(f){"function"===typeof define&&define.amd?define(["jquery","datatables.net"],function(o){return f(o,window,document)}):"object"===typeof exports?module.exports=function(o,l){o||(o=window);if(!l||!l.fn.dataTable)l=require("datatables.net")(o,l).$;return f(l,o,o.document)}:f(jQuery,window,document)})(function(f,o,l,r){function q(a){for(var b=[],d=0,e=a.length;d<e;d++)b[a[d]]=d;return b}function p(a,b,d){b=a.splice(b,1)[0];a.splice(d,0,b)}function s(a,b,d){for(var e=[],f=0,c=a.childNodes.length;f<
c;f++)1==a.childNodes[f].nodeType&&e.push(a.childNodes[f]);b=e[b];null!==d?a.insertBefore(b,e[d]):a.appendChild(b)}var t=f.fn.dataTable;f.fn.dataTableExt.oApi.fnColReorder=function(a,b,d,e,g){var c,h,j,m,i,l=a.aoColumns.length,k;i=function(a,b,c){if(a[b]&&"function"!==typeof a[b]){var d=a[b].split("."),e=d.shift();isNaN(1*e)||(a[b]=c[1*e]+"."+d.join("."))}};if(b!=d)if(0>b||b>=l)this.oApi._fnLog(a,1,"ColReorder 'from' index is out of bounds: "+b);else if(0>d||d>=l)this.oApi._fnLog(a,1,"ColReorder 'to' index is out of bounds: "+
d);else{j=[];c=0;for(h=l;c<h;c++)j[c]=c;p(j,b,d);var n=q(j);c=0;for(h=a.aaSorting.length;c<h;c++)a.aaSorting[c][0]=n[a.aaSorting[c][0]];if(null!==a.aaSortingFixed){c=0;for(h=a.aaSortingFixed.length;c<h;c++)a.aaSortingFixed[c][0]=n[a.aaSortingFixed[c][0]]}c=0;for(h=l;c<h;c++){k=a.aoColumns[c];j=0;for(m=k.aDataSort.length;j<m;j++)k.aDataSort[j]=n[k.aDataSort[j]];k.idx=n[k.idx]}f.each(a.aLastSort,function(b,c){a.aLastSort[b].src=n[c.src]});c=0;for(h=l;c<h;c++)k=a.aoColumns[c],"number"==typeof k.mData?
k.mData=n[k.mData]:f.isPlainObject(k.mData)&&(i(k.mData,"_",n),i(k.mData,"filter",n),i(k.mData,"sort",n),i(k.mData,"type",n));if(a.aoColumns[b].bVisible){i=this.oApi._fnColumnIndexToVisible(a,b);m=null;for(c=d<b?d:d+1;null===m&&c<l;)m=this.oApi._fnColumnIndexToVisible(a,c),c++;j=a.nTHead.getElementsByTagName("tr");c=0;for(h=j.length;c<h;c++)s(j[c],i,m);if(null!==a.nTFoot){j=a.nTFoot.getElementsByTagName("tr");c=0;for(h=j.length;c<h;c++)s(j[c],i,m)}c=0;for(h=a.aoData.length;c<h;c++)null!==a.aoData[c].nTr&&
s(a.aoData[c].nTr,i,m)}p(a.aoColumns,b,d);c=0;for(h=l;c<h;c++)a.oApi._fnColumnOptions(a,c,{});p(a.aoPreSearchCols,b,d);c=0;for(h=a.aoData.length;c<h;c++){m=a.aoData[c];if(k=m.anCells){p(k,b,d);j=0;for(i=k.length;j<i;j++)k[j]&&k[j]._DT_CellIndex&&(k[j]._DT_CellIndex.column=j)}"dom"!==m.src&&f.isArray(m._aData)&&p(m._aData,b,d)}c=0;for(h=a.aoHeader.length;c<h;c++)p(a.aoHeader[c],b,d);if(null!==a.aoFooter){c=0;for(h=a.aoFooter.length;c<h;c++)p(a.aoFooter[c],b,d)}(g||g===r)&&f.fn.dataTable.Api(a).rows().invalidate();
c=0;for(h=l;c<h;c++)f(a.aoColumns[c].nTh).off("click.DT"),this.oApi._fnSortAttachListener(a,a.aoColumns[c].nTh,c);f(a.oInstance).trigger("column-reorder.dt",[a,{from:b,to:d,mapping:n,drop:e,iFrom:b,iTo:d,aiInvertMapping:n}])}};var i=function(a,b){var d=(new f.fn.dataTable.Api(a)).settings()[0];if(d._colReorder)return d._colReorder;!0===b&&(b={});var e=f.fn.dataTable.camelToHungarian;e&&(e(i.defaults,i.defaults,!0),e(i.defaults,b||{}));this.s={dt:null,init:f.extend(!0,{},i.defaults,b),fixed:0,fixedRight:0,
reorderCallback:null,mouse:{startX:-1,startY:-1,offsetX:-1,offsetY:-1,target:-1,targetIndex:-1,fromIndex:-1},aoTargets:[]};this.dom={drag:null,pointer:null};this.s.dt=d;this.s.dt._colReorder=this;this._fnConstruct();return this};f.extend(i.prototype,{fnReset:function(){this._fnOrderColumns(this.fnOrder());return this},fnGetCurrentOrder:function(){return this.fnOrder()},fnOrder:function(a,b){var d=[],e,g,c=this.s.dt.aoColumns;if(a===r){e=0;for(g=c.length;e<g;e++)d.push(c[e]._ColReorder_iOrigCol);return d}if(b){c=
this.fnOrder();e=0;for(g=a.length;e<g;e++)d.push(f.inArray(a[e],c));a=d}this._fnOrderColumns(q(a));return this},fnTranspose:function(a,b){b||(b="toCurrent");var d=this.fnOrder(),e=this.s.dt.aoColumns;return"toCurrent"===b?!f.isArray(a)?f.inArray(a,d):f.map(a,function(a){return f.inArray(a,d)}):!f.isArray(a)?e[a]._ColReorder_iOrigCol:f.map(a,function(a){return e[a]._ColReorder_iOrigCol})},_fnConstruct:function(){var a=this,b=this.s.dt.aoColumns.length,d=this.s.dt.nTable,e;this.s.init.iFixedColumns&&
(this.s.fixed=this.s.init.iFixedColumns);this.s.init.iFixedColumnsLeft&&(this.s.fixed=this.s.init.iFixedColumnsLeft);this.s.fixedRight=this.s.init.iFixedColumnsRight?this.s.init.iFixedColumnsRight:0;this.s.init.fnReorderCallback&&(this.s.reorderCallback=this.s.init.fnReorderCallback);for(e=0;e<b;e++)e>this.s.fixed-1&&e<b-this.s.fixedRight&&this._fnMouseListener(e,this.s.dt.aoColumns[e].nTh),this.s.dt.aoColumns[e]._ColReorder_iOrigCol=e;this.s.dt.oApi._fnCallbackReg(this.s.dt,"aoStateSaveParams",function(b,
c){a._fnStateSave.call(a,c)},"ColReorder_State");var g=null;this.s.init.aiOrder&&(g=this.s.init.aiOrder.slice());this.s.dt.oLoadedState&&("undefined"!=typeof this.s.dt.oLoadedState.ColReorder&&this.s.dt.oLoadedState.ColReorder.length==this.s.dt.aoColumns.length)&&(g=this.s.dt.oLoadedState.ColReorder);if(g)if(a.s.dt._bInitComplete)b=q(g),a._fnOrderColumns.call(a,b);else{var c=!1;f(d).on("draw.dt.colReorder",function(){if(!a.s.dt._bInitComplete&&!c){c=true;var b=q(g);a._fnOrderColumns.call(a,b)}})}else this._fnSetColumnIndexes();
f(d).on("destroy.dt.colReorder",function(){f(d).off("destroy.dt.colReorder draw.dt.colReorder");f(a.s.dt.nTHead).find("*").off(".ColReorder");f.each(a.s.dt.aoColumns,function(a,b){f(b.nTh).removeAttr("data-column-index")});a.s.dt._colReorder=null;a.s=null})},_fnOrderColumns:function(a){var b=!1;if(a.length!=this.s.dt.aoColumns.length)this.s.dt.oInstance.oApi._fnLog(this.s.dt,1,"ColReorder - array reorder does not match known number of columns. Skipping.");else{for(var d=0,e=a.length;d<e;d++){var g=
f.inArray(d,a);d!=g&&(p(a,g,d),this.s.dt.oInstance.fnColReorder(g,d,!0,!1),b=!0)}f.fn.dataTable.Api(this.s.dt).rows().invalidate();this._fnSetColumnIndexes();b&&((""!==this.s.dt.oScroll.sX||""!==this.s.dt.oScroll.sY)&&this.s.dt.oInstance.fnAdjustColumnSizing(!1),this.s.dt.oInstance.oApi._fnSaveState(this.s.dt),null!==this.s.reorderCallback&&this.s.reorderCallback.call(this))}},_fnStateSave:function(a){var b,d,e,g=this.s.dt.aoColumns;a.ColReorder=[];if(a.aaSorting){for(b=0;b<a.aaSorting.length;b++)a.aaSorting[b][0]=
g[a.aaSorting[b][0]]._ColReorder_iOrigCol;var c=f.extend(!0,[],a.aoSearchCols);b=0;for(d=g.length;b<d;b++)e=g[b]._ColReorder_iOrigCol,a.aoSearchCols[e]=c[b],a.abVisCols[e]=g[b].bVisible,a.ColReorder.push(e)}else if(a.order){for(b=0;b<a.order.length;b++)a.order[b][0]=g[a.order[b][0]]._ColReorder_iOrigCol;c=f.extend(!0,[],a.columns);b=0;for(d=g.length;b<d;b++)e=g[b]._ColReorder_iOrigCol,a.columns[e]=c[b],a.ColReorder.push(e)}},_fnMouseListener:function(a,b){var d=this;f(b).on("mousedown.ColReorder",
function(a){a.preventDefault();d._fnMouseDown.call(d,a,b)})},_fnMouseDown:function(a,b){var d=this,e=f(a.target).closest("th, td").offset(),g=parseInt(f(b).attr("data-column-index"),10);g!==r&&(this.s.mouse.startX=a.pageX,this.s.mouse.startY=a.pageY,this.s.mouse.offsetX=a.pageX-e.left,this.s.mouse.offsetY=a.pageY-e.top,this.s.mouse.target=this.s.dt.aoColumns[g].nTh,this.s.mouse.targetIndex=g,this.s.mouse.fromIndex=g,this._fnRegions(),f(l).on("mousemove.ColReorder",function(a){d._fnMouseMove.call(d,
a)}).on("mouseup.ColReorder",function(a){d._fnMouseUp.call(d,a)}))},_fnMouseMove:function(a){if(null===this.dom.drag){if(5>Math.pow(Math.pow(a.pageX-this.s.mouse.startX,2)+Math.pow(a.pageY-this.s.mouse.startY,2),0.5))return;this._fnCreateDragNode()}this.dom.drag.css({left:a.pageX-this.s.mouse.offsetX,top:a.pageY-this.s.mouse.offsetY});for(var b=!1,d=this.s.mouse.toIndex,e=1,f=this.s.aoTargets.length;e<f;e++)if(a.pageX<this.s.aoTargets[e-1].x+(this.s.aoTargets[e].x-this.s.aoTargets[e-1].x)/2){this.dom.pointer.css("left",
this.s.aoTargets[e-1].x);this.s.mouse.toIndex=this.s.aoTargets[e-1].to;b=!0;break}b||(this.dom.pointer.css("left",this.s.aoTargets[this.s.aoTargets.length-1].x),this.s.mouse.toIndex=this.s.aoTargets[this.s.aoTargets.length-1].to);this.s.init.bRealtime&&d!==this.s.mouse.toIndex&&(this.s.dt.oInstance.fnColReorder(this.s.mouse.fromIndex,this.s.mouse.toIndex,!1),this.s.mouse.fromIndex=this.s.mouse.toIndex,this._fnRegions())},_fnMouseUp:function(){f(l).off("mousemove.ColReorder mouseup.ColReorder");null!==
this.dom.drag&&(this.dom.drag.remove(),this.dom.pointer.remove(),this.dom.drag=null,this.dom.pointer=null,this.s.dt.oInstance.fnColReorder(this.s.mouse.fromIndex,this.s.mouse.toIndex,!0),this._fnSetColumnIndexes(),(""!==this.s.dt.oScroll.sX||""!==this.s.dt.oScroll.sY)&&this.s.dt.oInstance.fnAdjustColumnSizing(!1),this.s.dt.oInstance.oApi._fnSaveState(this.s.dt),null!==this.s.reorderCallback&&this.s.reorderCallback.call(this))},_fnRegions:function(){var a=this.s.dt.aoColumns;this.s.aoTargets.splice(0,
this.s.aoTargets.length);this.s.aoTargets.push({x:f(this.s.dt.nTable).offset().left,to:0});for(var b=0,d=this.s.aoTargets[0].x,e=0,g=a.length;e<g;e++)e!=this.s.mouse.fromIndex&&b++,a[e].bVisible&&"none"!==a[e].nTh.style.display&&(d+=f(a[e].nTh).outerWidth(),this.s.aoTargets.push({x:d,to:b}));0!==this.s.fixedRight&&this.s.aoTargets.splice(this.s.aoTargets.length-this.s.fixedRight);0!==this.s.fixed&&this.s.aoTargets.splice(0,this.s.fixed)},_fnCreateDragNode:function(){var a=""!==this.s.dt.oScroll.sX||
""!==this.s.dt.oScroll.sY,b=this.s.dt.aoColumns[this.s.mouse.targetIndex].nTh,d=b.parentNode,e=d.parentNode,g=e.parentNode,c=f(b).clone();this.dom.drag=f(g.cloneNode(!1)).addClass("DTCR_clonedTable").append(f(e.cloneNode(!1)).append(f(d.cloneNode(!1)).append(c[0]))).css({position:"absolute",top:0,left:0,width:f(b).outerWidth(),height:f(b).outerHeight()}).appendTo("body");this.dom.pointer=f("<div></div>").addClass("DTCR_pointer").css({position:"absolute",top:a?f("div.dataTables_scroll",this.s.dt.nTableWrapper).offset().top:
f(this.s.dt.nTable).offset().top,height:a?f("div.dataTables_scroll",this.s.dt.nTableWrapper).height():f(this.s.dt.nTable).height()}).appendTo("body")},_fnSetColumnIndexes:function(){f.each(this.s.dt.aoColumns,function(a,b){f(b.nTh).attr("data-column-index",a)})}});i.defaults={aiOrder:null,bRealtime:!0,iFixedColumnsLeft:0,iFixedColumnsRight:0,fnReorderCallback:null};i.version="1.3.2";f.fn.dataTable.ColReorder=i;f.fn.DataTable.ColReorder=i;"function"==typeof f.fn.dataTable&&"function"==typeof f.fn.dataTableExt.fnVersionCheck&&
f.fn.dataTableExt.fnVersionCheck("1.10.8")?f.fn.dataTableExt.aoFeatures.push({fnInit:function(a){var b=a.oInstance;a._colReorder?b.oApi._fnLog(a,1,"ColReorder attempted to initialise twice. Ignoring second"):(b=a.oInit,new i(a,b.colReorder||b.oColReorder||{}));return null},cFeature:"R",sFeature:"ColReorder"}):alert("Warning: ColReorder requires DataTables 1.10.8 or greater - www.datatables.net/download");f(l).on("preInit.dt.colReorder",function(a,b){if("dt"===a.namespace){var d=b.oInit.colReorder,
e=t.defaults.colReorder;if(d||e)e=f.extend({},d,e),!1!==d&&new i(b,e)}});f.fn.dataTable.Api.register("colReorder.reset()",function(){return this.iterator("table",function(a){a._colReorder.fnReset()})});f.fn.dataTable.Api.register("colReorder.order()",function(a,b){return a?this.iterator("table",function(d){d._colReorder.fnOrder(a,b)}):this.context.length?this.context[0]._colReorder.fnOrder():null});f.fn.dataTable.Api.register("colReorder.transpose()",function(a,b){return this.context.length&&this.context[0]._colReorder?
this.context[0]._colReorder.fnTranspose(a,b):a});return i});