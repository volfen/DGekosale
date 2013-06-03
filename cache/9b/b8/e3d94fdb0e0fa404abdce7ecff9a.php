<?php

/* productdescriptionbox\index\index.tpl */
class __TwigTemplate_9bb8e3d94fdb0e0fa404abdce7ecff9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layoutbox.tpl");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutbox.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<article id=\"productInfo\" class=\"article marginbt20\">
\t<div class=\"row-fluid row-form\">
\t\t";
        // line 5
        if (isset($context["tabbed"])) { $_tabbed_ = $context["tabbed"]; } else { $_tabbed_ = null; }
        if (($_tabbed_ == 1)) {
            // line 6
            echo "\t\t<div class=\"relative\">
\t\t\t<a href=\"";
            // line 7
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo Gekosale\Template::getPathFromRoute("frontend.productprint", array("param" => $this->getAttribute($_product_, "idproduct")));
            echo "\" title=\"\" class=\"print\"><i class=\"icon-print\"></i> Wydrukuj ofertę</a>
\t\t\t";
            // line 8
            $this->env->loadTemplate("productbox/index/info_tabs.tpl")->display($context);
            // line 9
            echo "\t\t</div>
\t\t";
        } else {
            // line 11
            echo "\t\t<div>
\t\t\t<a href=\"";
            // line 12
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo Gekosale\Template::getPathFromRoute("frontend.productprint", array("param" => $this->getAttribute($_product_, "idproduct")));
            echo "\" title=\"\" class=\"print\"><i class=\"icon-print\"></i> Wydrukuj ofertę</a>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
            // line 14
            $this->env->loadTemplate("productbox/index/info_notabs.tpl")->display($context);
            // line 15
            echo "\t\t</div>
\t\t";
        }
        // line 16
        echo "\t
\t</div>
</article>
<script type=\"text/javascript\">
";
        // line 20
        if (isset($context["tabbed"])) { $_tabbed_ = $context["tabbed"]; } else { $_tabbed_ = null; }
        if (($_tabbed_ == 1)) {
            // line 21
            echo "\$('#intro-links a').each(function(){
\t\$(this).click(function(){
\t\t\$('a[href='+ \$(this).attr('href') +']').tab('show');
\t\treturn false;
\t});
});

";
        }
        // line 29
        echo "\$('#add-review').unbind('click').bind('click',function(){
\tvar params = {};
\tvar form = \$('form#review').serializeArray();
\t\$.each(form, function(index,value) {
\t\tparams[value.name] = value.value;
\t});
\treturn xajax_addOpinion(";
        // line 35
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($_product_, "idproduct");
        echo ", params);
});
</script>
";
    }

    public function getTemplateName()
    {
        return "productdescriptionbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 35,  84 => 29,  74 => 21,  65 => 16,  61 => 15,  59 => 14,  46 => 9,  44 => 8,  39 => 7,  36 => 6,  33 => 5,  535 => 162,  525 => 154,  517 => 150,  514 => 149,  511 => 148,  503 => 144,  496 => 140,  490 => 138,  481 => 133,  466 => 124,  462 => 123,  455 => 120,  447 => 119,  443 => 118,  439 => 116,  435 => 115,  428 => 113,  415 => 111,  410 => 110,  402 => 109,  396 => 108,  390 => 107,  387 => 106,  382 => 105,  377 => 104,  371 => 100,  364 => 98,  361 => 97,  351 => 96,  345 => 94,  335 => 92,  332 => 91,  328 => 89,  315 => 87,  303 => 85,  291 => 84,  288 => 83,  274 => 76,  269 => 73,  265 => 71,  262 => 70,  258 => 68,  255 => 67,  240 => 65,  237 => 64,  223 => 63,  220 => 62,  215 => 61,  212 => 60,  202 => 57,  194 => 56,  191 => 55,  188 => 54,  185 => 53,  168 => 51,  162 => 50,  156 => 48,  152 => 47,  146 => 45,  143 => 44,  137 => 42,  132 => 39,  126 => 35,  112 => 33,  107 => 32,  99 => 31,  94 => 28,  91 => 27,  81 => 24,  76 => 23,  71 => 20,  64 => 18,  60 => 17,  53 => 12,  50 => 11,  41 => 7,  34 => 5,  31 => 4,  29 => 3,  26 => 2,);
    }
}
