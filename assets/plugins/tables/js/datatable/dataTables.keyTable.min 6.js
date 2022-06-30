/*!
 KeyTable 2.1.3
 Â©2009-2016 SpryMedia Ltd - datatables.net/license
*/
(function(e){"function"===typeof define&&define.amd?define(["jquery","datatables.net"],function(m){return e(m,window,document)}):"object"===typeof exports?module.exports=function(m,k){m||(m=window);if(!k||!k.fn.dataTable)k=require("datatables.net")(m,k).$;return e(k,m,m.document)}:e(jQuery,window,document)})(function(e,m,k,o){var l=e.fn.dataTable,n=function(a,b){if(!l.versionCheck||!l.versionCheck("1.10.8"))throw"KeyTable requires DataTables 1.10.8 or newer";this.c=e.extend(!0,{},l.defaults.keyTable,
n.defaults,b);this.s={dt:new l.Api(a),enable:!0,focusDraw:!1};this.dom={};var c=this.s.dt.settings()[0],d=c.keytable;if(d)return d;c.keytable=this;this._constructor()};e.extend(n.prototype,{blur:function(){this._blur()},enable:function(a){this.s.enable=a},focus:function(a,b){this._focus(this.s.dt.cell(a,b))},focused:function(a){if(!this.s.lastFocus)return!1;var b=this.s.lastFocus.index();return a.row===b.row&&a.column===b.column},_constructor:function(){this._tabInput();var a=this,b=this.s.dt,c=e(b.table().node());
"static"===c.css("position")&&c.css("position","relative");e(b.table().body()).on("click.keyTable","th, td",function(c){if(!1!==a.s.enable){var d=b.cell(this);d.any()&&a._focus(d,null,!1,c)}});e(k).on("keydown.keyTable",function(b){a._key(b)});if(this.c.blurable)e(k).on("click.keyTable",function(c){e(c.target).parents(".dataTables_filter").length&&a._blur();e(c.target).parents().filter(b.table().container()).length||e(c.target).parents("div.DTE").length||e(c.target).parents().filter(".DTFC_Cloned").length||
a._blur()});if(this.c.editor)b.on("key.keyTable",function(b,c,d,e,j){a._editor(d,j)});if(b.settings()[0].oFeatures.bStateSave)b.on("stateSaveParams.keyTable",function(b,c,d){d.keyTable=a.s.lastFocus?a.s.lastFocus.index():null});b.on("xhr.keyTable",function(){if(!a.s.focusDraw){var c=a.s.lastFocus;c&&(a.s.lastFocus=null,b.one("draw",function(){a._focus(c)}))}});b.on("destroy.keyTable",function(){b.off(".keyTable");e(b.table().body()).off("click.keyTable","th, td");e(k.body).off("keydown.keyTable").off("click.keyTable")});
var d=b.state.loaded();if(d&&d.keyTable)b.one("init",function(){var a=b.cell(d.keyTable);a.any()&&a.focus()});else this.c.focus&&b.cell(this.c.focus).focus()},_blur:function(){if(this.s.enable&&this.s.lastFocus){var a=this.s.lastFocus;e(a.node()).removeClass(this.c.className);this.s.lastFocus=null;this._updateFixedColumns(a.index().column);this._emitEvent("key-blur",[this.s.dt,a])}},_columns:function(){var a=this.s.dt,b=a.columns(this.c.columns).indexes(),c=[];a.columns(":visible").every(function(a){-1!==
b.indexOf(a)&&c.push(a)});return c},_editor:function(a,b){var c=this.s.dt,d=this.c.editor;b.stopPropagation();13===a&&b.preventDefault();d.inline(this.s.lastFocus.index());e("div.DTE input, div.DTE textarea").select();c.keys.enable(this.c.editorKeys);c.one("key-blur.editor",function(){d.displayed()&&d.submit()});d.one("close",function(){c.keys.enable(!0);c.off("key-blur.editor")})},_emitEvent:function(a,b){this.s.dt.iterator("table",function(c){e(c.nTable).triggerHandler(a,b)})},_focus:function(a,
b,c,d){var i=this,g=this.s.dt,f=g.page.info(),h=this.s.lastFocus;d||(d=null);if(this.s.enable){if("number"!==typeof a){var j=a.index(),b=j.column,a=g.rows({filter:"applied",order:"applied"}).indexes().indexOf(j.row);f.serverSide&&(a+=f.start)}if(-1!==f.length&&(a<f.start||a>=f.start+f.length))this.s.focusDraw=!0,g.one("draw",function(){i.s.focusDraw=!1;i._focus(a,b)}).page(Math.floor(a/f.length)).draw(!1);else if(-1!==e.inArray(b,this._columns())){f.serverSide&&(a-=f.start);f=g.cell(":eq("+a+")",
b,{search:"applied"});if(h){if(h.node()===f.node())return;this._blur()}h=e(f.node());h.addClass(this.c.className);this._updateFixedColumns(b);if(c===o||!0===c)this._scroll(e(m),e(k.body),h,"offset"),c=g.table().body().parentNode,c!==g.table().header().parentNode&&(c=e(c.parentNode),this._scroll(c,c,h,"position"));this.s.lastFocus=f;this._emitEvent("key-focus",[this.s.dt,f,d||null]);g.state.save()}}},_key:function(a){var b=this.s.enable,c=!0===b||"navigation-only"===b;if(b&&!(0===a.keyCode||a.ctrlKey||
a.metaKey||a.altKey)){var d=this.s.lastFocus;if(d){var i=this,g=this.s.dt;if(!(this.c.keys&&-1===e.inArray(a.keyCode,this.c.keys)))switch(a.keyCode){case 9:this._shift(a,a.shiftKey?"left":"right",!0);break;case 27:this.s.blurable&&!0===b&&this._blur();break;case 33:case 34:if(c){a.preventDefault();var f=g.cells({page:"current"}).nodes().indexOf(d.node());g.one("draw",function(){var b=g.cells({page:"current"}).nodes();i._focus(g.cell(f<b.length?b[f]:b[b.length-1]),null,!0,a)}).page(33===a.keyCode?
"previous":"next").draw(!1)}break;case 35:case 36:c&&(a.preventDefault(),b=g.cells({page:"current"}).indexes(),this._focus(g.cell(b[35===a.keyCode?b.length-1:0]),null,!0,a));break;case 37:c&&this._shift(a,"left");break;case 38:c&&this._shift(a,"up");break;case 39:c&&this._shift(a,"right");break;case 40:c&&this._shift(a,"down");break;default:!0===b&&this._emitEvent("key",[g,a.keyCode,this.s.lastFocus,a])}}}},_scroll:function(a,b,c,d){var d=c[d](),e=c.outerHeight(),c=c.outerWidth(),g=b.scrollTop(),
f=b.scrollLeft(),h=a.height(),a=a.width();d.top<g&&b.scrollTop(d.top);d.left<f&&b.scrollLeft(d.left);d.top+e>g+h&&e<h&&b.scrollTop(d.top+e-h);d.left+c>f+a&&c<a&&b.scrollLeft(d.left+c-a)},_shift:function(a,b,c){var d=this.s.dt,i=d.page.info(),g=i.recordsDisplay,f=this.s.lastFocus,h=this._columns();if(f){var j=d.rows({filter:"applied",order:"applied"}).indexes().indexOf(f.index().row);i.serverSide&&(j+=i.start);d=d.columns(h).indexes().indexOf(f.index().column);i=h[d];"right"===b?d>=h.length-1?(j++,
i=h[0]):i=h[d+1]:"left"===b?0===d?(j--,i=h[h.length-1]):i=h[d-1]:"up"===b?j--:"down"===b&&j++;0<=j&&j<g&&-1!==e.inArray(i,h)?(a.preventDefault(),this._focus(j,i,!0,a)):!c||!this.c.blurable?a.preventDefault():this._blur()}},_tabInput:function(){var a=this,b=this.s.dt,c=null!==this.c.tabIndex?this.c.tabIndex:b.settings()[0].iTabIndex;if(-1!=c)e('<div><input type="text" tabindex="'+c+'"/></div>').css({position:"absolute",height:1,width:0,overflow:"hidden"}).insertBefore(b.table().node()).children().on("focus",
function(c){a._focus(b.cell(":eq(0)","0:visible",{page:"current"}),null,!0,c)})},_updateFixedColumns:function(a){var b=this.s.dt,c=b.settings()[0];if(c._oFixedColumns){var d=c.aoColumns.length-c._oFixedColumns.s.iRightColumns;(a<c._oFixedColumns.s.iLeftColumns||a>d)&&b.fixedColumns().update()}}});n.defaults={blurable:!0,className:"focus",columns:"",editor:null,editorKeys:"navigation-only",focus:null,keys:null,tabIndex:null};n.version="2.1.3";e.fn.dataTable.KeyTable=n;e.fn.DataTable.KeyTable=n;l.Api.register("cell.blur()",
function(){return this.iterator("table",function(a){a.keytable&&a.keytable.blur()})});l.Api.register("cell().focus()",function(){return this.iterator("cell",function(a,b,c){a.keytable&&a.keytable.focus(b,c)})});l.Api.register("keys.disable()",function(){return this.iterator("table",function(a){a.keytable&&a.keytable.enable(!1)})});l.Api.register("keys.enable()",function(a){return this.iterator("table",function(b){b.keytable&&b.keytable.enable(a===o?!0:a)})});l.ext.selector.cell.push(function(a,b,
c){var b=b.focused,a=a.keytable,d=[];if(!a||b===o)return c;for(var e=0,g=c.length;e<g;e++)(!0===b&&a.focused(c[e])||!1===b&&!a.focused(c[e]))&&d.push(c[e]);return d});e(k).on("preInit.dt.dtk",function(a,b){if("dt"===a.namespace){var c=b.oInit.keys,d=l.defaults.keys;if(c||d)d=e.extend({},d,c),!1!==c&&new n(b,d)}});return n});