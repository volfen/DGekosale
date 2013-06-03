<?php

/* product\index\index.tpl */
class __TwigTemplate_1635d24e61063d27b18c05100917fb6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.tpl");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h2><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/modules/product-list.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_PRODUCTS_LIST");
        echo "</h2>
<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 5
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/add\" class=\"button\" title=\"";
        echo Gekosale\Translation::get("TXT_ADD_PRODUCT");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/add.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_ADD_PRODUCT");
        echo "</span></a></li>
</ul>
<div class=\"block\">
\t<div id=\"list-products\"></div>
</div>
<script type=\"text/javascript\">
/*<![CDATA[*/

function processProduct(row) {

\tif (row.thumb != '') {
\t\trow.name = '<a title=\"\" href=\"' + row.thumb + '\" class=\"show-thumb\"><img src=\"";
        // line 16
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/datagrid/details.png\" style=\"vertical-align: middle;\" /></a> '+ row.name;
\t}else{
\t\trow.name = '<img style=\"opacity: 0.2;vertical-align: middle;\" src=\"";
        // line 18
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/datagrid/details.png\" style=\"vertical-align: middle;\" /> '+ row.name;
\t}
\treturn {
\t\tidproduct: row.idproduct,
\t\thierarchy: row.hierarchy,
\t\ttrackstock: row.trackstock,
\t\tdisableatstockenabled: row.disableatstockenabled,
\t\tattributes: row.attributes,
\t\tname: row.name,
\t\tseo: row.seo,
\t\tthumb: row.thumb,
\t\tname: row.name,
\t\tdelivelercode: row.delivelercode,
\t\tean: row.ean,
\t\tproducer: row.producer,
\t\tdeliverer: row.deliverer,
\t\tbuyprice: row.buyprice,
\t\tbuyprice_gross: row.buyprice_gross,
\t\tstock: row.stock,
\t\tsellprice: row.sellprice,
\t\tsellprice_gross: row.sellprice_gross,
\t\tweight: row.weight,
\t\tstatus: row.status,
\t\tadddate: row.adddate,
\t\tenable: row.enable,
\t\tcategoriesname: row.categoriesname
\t};
};

function dataLoaded(dDg) {
\tdDg.m_jBody.find('.show-thumb').mouseenter(GTooltip.ShowThumbForThis).mouseleave(GTooltip.HideThumbForThis);
};
 
function editProduct(dg, id) {
\tlocation.href = '";
        // line 52
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/edit/' + id + '';
};

function editProductTab(dg, id) {
\twindow.open('";
        // line 56
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/edit/' + id);
};

function viewProduct(dg, id) {
\tvar oRow = theDatagrid.GetRow(id);
\twindow.open(oRow.seo);
};

function duplicateProduct(dg, id) {
\tlocation.href = '";
        // line 65
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        echo $_CURRENT_CONTROLLER_;
        echo "/duplicate/' + id + '';
};

function deleteProduct(dg, id) {
\tvar oRow = theDatagrid.GetRow(id);
\tvar title = '";
        // line 70
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\tvar msg = '";
        // line 71
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " ' + oRow.name + '?';
\tvar params = {
\t\tdg: dg,
\t\tid: id,
\t\tview: ";
        // line 75
        if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
        echo $_view_;
        echo "
\t};
\tvar func = function(p) {
\t\treturn xajax_doDeleteProduct(p.id, p.dg);
\t};
\tnew GF_Alert(title, msg, func, true, params);
};

function deleteMultipleProducts(dg, ids) {
\tvar title = '";
        // line 84
        echo Gekosale\Translation::get("TXT_DELETE");
        echo "';
\tvar msg = '";
        // line 85
        echo Gekosale\Translation::get("TXT_DELETE_CONFIRM");
        echo " ' + ids.join(', ') + '?';
\tvar params = {
\t\tdg: dg,
\t\tids: ids,
\t\tview: ";
        // line 89
        if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
        echo $_view_;
        echo "
\t};
\tvar func = function(p) {
\t\treturn xajax_doDeleteProduct(p.ids, p.dg, p.view);
\t};
\tnew GF_Alert(title, msg, func, true, params);
};

function disableProduct(dg, id) {
 \tvar oRow = theDatagrid.GetRow(id);
\tvar title = '";
        // line 99
        echo Gekosale\Translation::get("TXT_PUBLISH");
        echo "';
\tvar msg = '";
        // line 100
        echo Gekosale\Translation::get("TXT_DISABLE_PRODUCT");
        echo " <strong>' + oRow.name +'</strong> ?';
\tvar params = {
\t\tdg: dg,
\t\tid: id
\t};
\tvar func = function(p) {
\t\treturn xajax_setProductEnable(p.dg, p.id,0);
\t};
\tnew GF_Alert(title, msg, func, true, params);
 };\t
 
 function enableProduct(dg, id) {
 \tvar oRow = theDatagrid.GetRow(id);
\tvar title = '";
        // line 113
        echo Gekosale\Translation::get("TXT_PUBLISH");
        echo "';
\tvar msg = '";
        // line 114
        echo Gekosale\Translation::get("TXT_ENABLE_PRODUCT");
        echo " <strong>' + oRow.name +'</strong> ?';
\tvar params = {
\t\tdg: dg,
\t\tid: id
\t};
\tvar func = function(p) {
\t\treturn xajax_setProductEnable(p.dg, p.id,1);
\t};
\tnew GF_Alert(title, msg, func, true, params);
 };
 
var theDatagrid;

\$(document).ready(function() {

\tvar column_id = new GF_Datagrid_Column({
\t\tid: 'idproduct',
\t\tcaption: '";
        // line 131
        echo Gekosale\Translation::get("TXT_ID");
        echo "',
\t\tsorting: {
\t\t\tdefault_order: GF_Datagrid.SORT_DIR_DESC
\t\t},
\t\tappearance: {
\t\t\twidth: 40,
\t\t\tvisible: false
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t}
\t});

\tvar column_name = new GF_Datagrid_Column({
\t\tid: 'name',
\t\tcaption: '";
        // line 146
        echo Gekosale\Translation::get("TXT_NAME");
        echo "',
\t\tappearance: {
\t\t\twidth: 160,
\t\t\talign: GF_Datagrid.ALIGN_LEFT
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_AUTOSUGGEST,
\t\t\tsource: xajax_GetNameSuggestions,
\t\t}
\t});

\tvar column_delivelercode = new GF_Datagrid_Column({
\t\tid: 'delivelercode',
\t\tcaption: '";
        // line 159
        echo Gekosale\Translation::get("TXT_DELIVELERCODE");
        echo "',
\t\tappearance: {
\t\t\twidth: 80,
\t\t\talign: GF_Datagrid.ALIGN_RIGHT,
\t\t\tvisible: false
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_INPUT,
\t\t}
\t});
\t
\tvar column_ean = new GF_Datagrid_Column({
\t\tid: 'ean',
\t\tcaption: '";
        // line 172
        echo Gekosale\Translation::get("TXT_EAN");
        echo "',
\t\teditable: true,
\t\tappearance: {
\t\t\twidth: 60,
\t\t\talign: GF_Datagrid.ALIGN_RIGHT
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_INPUT,
\t\t}
\t});
\t
\tvar column_hierarchy = new GF_Datagrid_Column({
\t\tid: 'hierarchy',
\t\tcaption: '";
        // line 185
        echo Gekosale\Translation::get("TXT_HIERARCHY");
        echo "',
\t\teditable: true,
\t\tappearance: {
\t\t\twidth: 40,
\t\t\talign: GF_Datagrid.ALIGN_RIGHT
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t}
\t});

\tvar column_weight = new GF_Datagrid_Column({
\t\tid: 'weight',
\t\tcaption: '";
        // line 198
        echo Gekosale\Translation::get("TXT_WEIGHT");
        echo "',
\t\tappearance: {
\t\t\twidth: 40,
\t\t\talign: GF_Datagrid.ALIGN_RIGHT,
\t\t\tvisible: false
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t}
\t});

\tvar column_price_gross = new GF_Datagrid_Column({
\t\tid: 'sellprice_gross',
\t\tcaption: '";
        // line 211
        echo Gekosale\Translation::get("TXT_JS_PRODUCT_SELECT_SUBSUM");
        echo "',
\t\teditable: true,
\t\tappearance: {
\t\t\twidth: 40,
\t\t\talign: GF_Datagrid.ALIGN_RIGHT
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t}
\t});

\tvar column_buyprice_gross = new GF_Datagrid_Column({
\t\tid: 'buyprice_gross',
\t\tcaption: '";
        // line 224
        echo Gekosale\Translation::get("TXT_BUYPRICE_GROSS");
        echo "',
\t\tappearance: {
\t\t\twidth: 60,
\t\t\tvisible: false,
\t\t\talign: GF_Datagrid.ALIGN_RIGHT
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t}
\t});

\tvar column_stock = new GF_Datagrid_Column({
\t\tid: 'stock',
\t\tcaption: '";
        // line 237
        echo Gekosale\Translation::get("TXT_JS_PRODUCT_VARIANTS_EDITOR_STOCK");
        echo "',
\t\teditable: true,
\t\tappearance: {
\t\t\twidth: 40,
\t\t\talign: GF_Datagrid.ALIGN_RIGHT
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t}
\t});

\tvar column_status = new GF_Datagrid_Column({
\t\tid: 'status',
\t\tcaption: '";
        // line 250
        echo Gekosale\Translation::get("TXT_STATUS");
        echo "',
\t\tappearance: {
\t\t\twidth: 60
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_SELECT,
\t\t\toptions: ";
        // line 256
        if (isset($context["status_filter"])) { $_status_filter_ = $context["status_filter"]; } else { $_status_filter_ = null; }
        echo twig_jsonencode_filter($_status_filter_);
        echo "
\t\t}
\t});
\t
\tvar column_enable = new GF_Datagrid_Column({
\t\tid: 'enable',
\t\tcaption: '";
        // line 262
        echo Gekosale\Translation::get("TXT_PUBLISH");
        echo "',
\t\tselectable: true,
\t\tappearance: {
\t\t\twidth: 40
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_SELECT,
\t\t\toptions: [
\t\t\t\t{id: '', caption: ''}, {id: '1', caption: '";
        // line 270
        echo Gekosale\Translation::get("TXT_YES");
        echo "'}, {id: '0', caption: '";
        echo Gekosale\Translation::get("TXT_NO");
        echo "'}
\t\t\t],
\t\t}
\t});
\t
\tvar column_producer = new GF_Datagrid_Column({
\t\tid: 'producer',
\t\tcaption: '";
        // line 277
        echo Gekosale\Translation::get("TXT_PRODUCER");
        echo "',
\t\tselectable: true,
\t\tappearance: {
\t\t\twidth: 70
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_SELECT,
\t\t\toptions: [
\t\t\t\t";
        // line 285
        if (isset($context["datagrid_filter"])) { $_datagrid_filter_ = $context["datagrid_filter"]; } else { $_datagrid_filter_ = null; }
        echo $this->getAttribute($_datagrid_filter_, "producer");
        echo "
\t\t\t],
\t\t}
\t});

\tvar column_deliverer = new GF_Datagrid_Column({
\t\tid: 'deliverer',
\t\tcaption: '";
        // line 292
        echo Gekosale\Translation::get("TXT_DELIVERER");
        echo "',
\t\tappearance: {
\t\t\twidth: 60,
\t\t\tvisible: false
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_SELECT,
\t\t\toptions: [";
        // line 299
        if (isset($context["datagrid_filter"])) { $_datagrid_filter_ = $context["datagrid_filter"]; } else { $_datagrid_filter_ = null; }
        echo $this->getAttribute($_datagrid_filter_, "deliverer");
        echo "],
\t\t}
\t});

\tvar column_category = new GF_Datagrid_Column({
\t\tid: 'categoriesname',
\t\tcaption: '";
        // line 305
        echo Gekosale\Translation::get("TXT_CATEGORY");
        echo "',
\t\tappearance: {
\t\t\twidth: 120
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_TREE,
\t\t\tfiltered_column: 'ancestorcategoryid',
\t\t\toptions: ";
        // line 312
        if (isset($context["datagrid_filter"])) { $_datagrid_filter_ = $context["datagrid_filter"]; } else { $_datagrid_filter_ = null; }
        echo $this->getAttribute($_datagrid_filter_, "categoryid");
        echo ",
\t\t\tload_children: xajax_LoadCategoryChildren
\t\t}
\t});
\t
\tvar column_adddate = new GF_Datagrid_Column({
\t\tid: 'adddate',
\t\tcaption: '";
        // line 319
        echo Gekosale\Translation::get("TXT_ADDDATE");
        echo "',
\t\tappearance: {
\t\t\twidth: 140,
\t\t\tvisible: false
\t\t},
\t\tfilter: {
\t\t\ttype: GF_Datagrid.FILTER_BETWEEN,
\t\t}
\t});

\tvar action_enableProduct = new GF_Action({
\t\tcaption: '";
        // line 330
        echo Gekosale\Translation::get("TXT_PUBLISH");
        echo "',
\t\taction: enableProduct,
\t\timg: '";
        // line 332
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/datagrid/off.png',
\t\tcondition: function(oR) { return oR['enable'] == '0'; }
\t});
\t 
\tvar action_disableProduct= new GF_Action({
\t\tcaption: '";
        // line 337
        echo Gekosale\Translation::get("TXT_NOT_PUBLISH");
        echo "',
\t\taction: disableProduct,
\t\timg: '";
        // line 339
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/datagrid/on.png',
\t\tcondition: function(oR) { return oR['enable'] == '1'; }
\t});
\t
\tvar action_duplicate = new GF_Action({
\t\timg: '";
        // line 344
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "/_images_panel/datagrid/duplicate-row.png',
\t\tcaption: '";
        // line 345
        echo Gekosale\Translation::get("TXT_JS_TREE_DUPLICATE_ITEM");
        echo "',
\t\taction: duplicateProduct
\t});
\t
\tvar action_edittab = new GF_Action({
\t\timg: '";
        // line 350
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "/_images_panel/icons/datagrid/edit.png',
\t\tcaption: '";
        // line 351
        echo Gekosale\Translation::get("TXT_EDIT_NEW_TAB");
        echo "',
\t\taction: editProductTab
\t});

\tvar options = {
\t\tid: 'product',
\t\tmechanics: {
\t\t\tkey: 'idproduct',
\t\t\trows_per_page: ";
        // line 359
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        echo $this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_rows_per_page");
        echo "
\t\t},
\t\tevent_handlers: {
\t\t\tload: xajax_LoadAllProduct,
\t\t\tprocess: processProduct,
\t\t\tdelete_row: deleteProduct,
\t\t\tloaded: dataLoaded,
\t\t\tedit_row: editProduct,
\t\t\tview_row: viewProduct,
\t\t\tdelete_group: deleteMultipleProducts,
\t\t\tupdate_row: function(sId, oRow, sColumn, sPreviousValue) {
\t\t\t\tif(sColumn == 'stock' && parseInt(oRow.attributes) > 0){
\t\t\t\t\toRow.stock = sPreviousValue;
\t\t\t\t\ttheDatagrid.Rewrite();
\t\t\t\t\treturn GError('Niemożliwa aktualizacja stanu magazynowego.', 'Ten produkt zawiera warianty. Stan magazynowy obliczany jest automatycznie jako suma stanów wszystkich wariantów produktu.');
\t\t\t\t}else if(sColumn == 'enable' && parseInt(oRow.disableatstockenabled) == 1){
\t\t\t\t\ttheDatagrid.Rewrite();
\t\t\t\t\treturn GError('Niemożliwa aktualizacja widoczności produktu.', 'Ten produkt ma włączone śledzenie stanu magazynowego. Jego widoczność określana jest automatycznie na podstawie stanu magazynowego.');
\t\t\t\t}else{
\t\t\t\t\txajax_doUpdateProduct({
\t\t\t\t\t\tid: sId,
\t\t\t\t\t\tproduct: oRow
\t\t\t\t\t}, GCallback(function(eEvent) {
\t\t\t\t\t\ttheDatagrid.LoadData();
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t},
\t\t\t";
        // line 386
        if (isset($context["globalsettings"])) { $_globalsettings_ = $context["globalsettings"]; } else { $_globalsettings_ = null; }
        if (($this->getAttribute($this->getAttribute($_globalsettings_, "interface"), "datagrid_click_row_action") == "edit")) {
            // line 387
            echo "\t\t\tclick_row: editProduct
\t\t\t";
        }
        // line 389
        echo "\t\t},
\t\tcolumns: [
\t\t\tcolumn_id,
\t\t\tcolumn_name,
\t\t\tcolumn_category,
\t\t\tcolumn_delivelercode,
\t\t\tcolumn_ean,
\t\t\tcolumn_hierarchy,
\t\t\tcolumn_producer,
\t\t\tcolumn_deliverer,
\t\t\tcolumn_buyprice_gross,
\t\t\tcolumn_price_gross,
\t\t\tcolumn_stock,
\t\t\tcolumn_weight,
\t\t\tcolumn_status,
\t\t\tcolumn_enable,
\t\t\tcolumn_adddate,
\t\t],
\t\trow_actions: [
\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\t//action_enableProduct,
\t\t\t//action_disableProduct,
\t\t\taction_duplicate,
\t\t\tGF_Datagrid.ACTION_VIEW,
\t\t\tGF_Datagrid.ACTION_DELETE
\t\t],
\t\tgroup_actions: [
\t\t\tGF_Datagrid.ACTION_DELETE
\t\t],
\t\tcontext_actions: [
\t\t\tGF_Datagrid.ACTION_EDIT,
\t\t\tGF_Datagrid.ACTION_DELETE,
\t\t\tGF_Datagrid.ACTION_VIEW,
\t\t\taction_duplicate,
\t\t\taction_edittab,
\t\t]
\t};

\ttheDatagrid = new GF_Datagrid(\$('#list-products'), options);

});

/*]]>*/



  </script>
";
    }

    public function getTemplateName()
    {
        return "product\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  595 => 389,  591 => 387,  588 => 386,  557 => 359,  546 => 351,  541 => 350,  533 => 345,  528 => 344,  519 => 339,  514 => 337,  505 => 332,  500 => 330,  486 => 319,  475 => 312,  465 => 305,  455 => 299,  445 => 292,  434 => 285,  423 => 277,  411 => 270,  400 => 262,  390 => 256,  381 => 250,  365 => 237,  349 => 224,  333 => 211,  317 => 198,  301 => 185,  285 => 172,  269 => 159,  253 => 146,  235 => 131,  215 => 114,  211 => 113,  195 => 100,  191 => 99,  177 => 89,  170 => 85,  166 => 84,  153 => 75,  146 => 71,  142 => 70,  131 => 65,  116 => 56,  106 => 52,  68 => 18,  62 => 16,  38 => 5,  29 => 3,  26 => 2,);
    }
}
