<?php

/* productdescriptionbox\index\index.tpl */
class __TwigTemplate_022ec2ab9444b497163a78866691acda extends Twig_Template
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
        return array (  92 => 35,  84 => 29,  74 => 21,  65 => 16,  61 => 15,  59 => 14,  46 => 9,  44 => 8,  39 => 7,  36 => 6,  33 => 5,  506 => 156,  496 => 148,  488 => 144,  485 => 143,  482 => 142,  474 => 138,  467 => 134,  461 => 132,  452 => 127,  437 => 118,  433 => 117,  426 => 114,  418 => 113,  414 => 112,  410 => 110,  406 => 109,  399 => 107,  386 => 105,  381 => 104,  373 => 103,  367 => 102,  361 => 101,  358 => 100,  353 => 99,  348 => 98,  342 => 94,  335 => 92,  332 => 91,  322 => 90,  316 => 88,  306 => 86,  303 => 85,  299 => 83,  286 => 81,  274 => 79,  262 => 78,  259 => 77,  245 => 70,  238 => 65,  223 => 63,  220 => 62,  215 => 61,  212 => 60,  202 => 57,  194 => 56,  191 => 55,  188 => 54,  185 => 53,  168 => 51,  162 => 50,  156 => 48,  152 => 47,  146 => 45,  143 => 44,  137 => 42,  132 => 39,  126 => 35,  112 => 33,  107 => 32,  99 => 31,  94 => 28,  91 => 27,  81 => 24,  76 => 23,  71 => 20,  64 => 18,  60 => 17,  53 => 12,  50 => 11,  41 => 7,  34 => 5,  31 => 4,  29 => 3,  26 => 2,);
    }
}
