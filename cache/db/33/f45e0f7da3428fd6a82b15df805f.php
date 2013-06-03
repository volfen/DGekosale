<?php

/* productbox/index/opinions.tpl */
class __TwigTemplate_db33f45e0f7da3428fd6a82b15df805f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (array_key_exists("opinionadded", $context)) {
            // line 2
            echo "<div class=\"alert scroll alert-success scroll\">
\t<strong>";
            // line 3
            if (isset($context["opinionadded"])) { $_opinionadded_ = $context["opinionadded"]; } else { $_opinionadded_ = null; }
            echo $_opinionadded_;
            echo "</strong>
</div>
";
        }
        // line 5
        echo " 
<div class=\"well well-small product-details review\">
\t<h2>Opinie</h2>
    <div class=\"alert alert-block alert-success\" id=\"review-alert\">
    \t<a href=\"#review\" title=\"\" class=\"btn btn-primary btn-large pull-right\" data-toggle=\"collapse\" data-target=\"#review\"><i class=\"icon-inbox icon-white\"></i> Dodaj opinię</a>
        <p><strong>Pomóż podjąć decyzję innym - wystaw ocenę i komentarz</strong></p>
        <p>Twoja ocena pomoże innym podjąć decyzję o wyborze odpowiedniego produktu.</p>
\t</div>
    
    <form class=\"form-horizontal collapse\" id=\"review\" method=\"get\" action=\"#\">
    \t<fieldset>
    \t\t";
        // line 16
        if (isset($context["range"])) { $_range_ = $context["range"]; } else { $_range_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_range_);
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 17
            echo "        \t<div class=\"control-group nomarginbt\">
            \t<label class=\"control-label\">";
            // line 18
            if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
            echo $this->getAttribute($_r_, "name");
            echo ":</label>
                <div class=\"controls\"><div class=\"star\" data-rating=\"0\" data-target=\"#rating-";
            // line 19
            if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
            echo $this->getAttribute($_r_, "id");
            echo "\" style=\"cursor: pointer; width: 100px; \"></div></div>
                <input type=\"hidden\" name=\"";
            // line 20
            if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
            echo $this->getAttribute($_r_, "id");
            echo "\" id=\"rating-";
            if (isset($context["r"])) { $_r_ = $context["r"]; } else { $_r_ = null; }
            echo $this->getAttribute($_r_, "id");
            echo "\"> 
            </div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "            <div class=\"control-group nomarginbt\">
            \t<label class=\"control-label\">Co sądzisz o produkcie?</label>
                <div class=\"controls\">
                \t<textarea class=\"span8\" id=\"htmlopinion\" name=\"htmlopinion\" rows=\"4\"></textarea>
               \t</div>
            </div>
            <div class=\"hr\"></div>
            <div class=\"control-group\">
            \t<label class=\"control-label\">Wpisz imię/nick</label>
                <div class=\"controls\">
                \t<div class=\"input-inline\"><input class=\"span12\" type=\"text\" name=\"nick\" id=\"nick\" value=\"";
        // line 33
        if (isset($context["clientdata"])) { $_clientdata_ = $context["clientdata"]; } else { $_clientdata_ = null; }
        echo $this->getAttribute($_clientdata_, "firstname");
        echo "\"></div> 
                \t";
        // line 34
        if (isset($context["clientdata"])) { $_clientdata_ = $context["clientdata"]; } else { $_clientdata_ = null; }
        if (twig_test_empty($_clientdata_)) {
            echo " 
                \t<span class=\"help-inline\">lub <a href=\"";
            // line 35
            echo Gekosale\Template::getPathFromRoute("frontend.clientlogin");
            echo "\" title=\"\">Zaloguj się</a> / <a href=\"";
            echo Gekosale\Template::getPathFromRoute("frontend.registration");
            echo "\" title=\"\">Zarejestruj się</a></span>
                \t";
        }
        // line 37
        echo "                </div>
            </div>
            <div class=\"control-group error\" id=\"review-errors\" style=\"padding-left: 48px;\"></div>
            <div class=\"form-actions form-actions-clean\">
            \t<button class=\"btn btn-primary btn-large\"><i class=\"icon-inbox icon-white\"></i> Dodaj opinię</button>
            </div>
\t\t</fieldset>
\t</form>
\t";
        // line 45
        if (isset($context["productreview"])) { $_productreview_ = $context["productreview"]; } else { $_productreview_ = null; }
        if ((twig_length_filter($this->env, $_productreview_) > 0)) {
            echo "                         
    <h3>";
            // line 46
            if (isset($context["humanProductReviewCount"])) { $_humanProductReviewCount_ = $context["humanProductReviewCount"]; } else { $_humanProductReviewCount_ = null; }
            echo $_humanProductReviewCount_;
            echo "</h3>
\t";
            // line 48
            echo "    ";
            if (isset($context["productreview"])) { $_productreview_ = $context["productreview"]; } else { $_productreview_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_productreview_);
            foreach ($context['_seq'] as $context["_key"] => $context["opinion"]) {
                // line 49
                echo "\t<div class=\"comment\">
\t\t<div class=\"rate-block\">
\t\t\t";
                // line 51
                if (isset($context["opinion"])) { $_opinion_ = $context["opinion"]; } else { $_opinion_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_opinion_, "ranges"));
                foreach ($context['_seq'] as $context["_key"] => $context["range"]) {
                    // line 52
                    echo "\t\t\t<h4>";
                    if (isset($context["range"])) { $_range_ = $context["range"]; } else { $_range_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_range_, "name"), "html", null, true);
                    echo "</h4>
\t\t\t<div class=\"star readonly\" data-rating=\"";
                    // line 53
                    if (isset($context["range"])) { $_range_ = $context["range"]; } else { $_range_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_range_, "value"), "html", null, true);
                    echo "\" style=\"cursor: pointer; width: 100px; \"></div>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['range'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 54
                echo "\t
\t\t\t<h3 class=\"nick\">";
                // line 55
                if (isset($context["opinion"])) { $_opinion_ = $context["opinion"]; } else { $_opinion_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_opinion_, "nick"), "html", null, true);
                echo "</h4>
\t\t\t<span class=\"date\">";
                // line 56
                if (isset($context["opinion"])) { $_opinion_ = $context["opinion"]; } else { $_opinion_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_opinion_, "adddate"), "html", null, true);
                echo "</span>
\t\t</div>
\t\t<div class=\"text-block\">
\t\t\t";
                // line 59
                if (isset($context["opinion"])) { $_opinion_ = $context["opinion"]; } else { $_opinion_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_opinion_, "review"), "html", null, true);
                echo "
\t\t</div>
\t\t<div class=\"clearfix\"></div>
\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opinion'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 64
            echo "\t";
            // line 65
            echo "\t";
        }
        // line 66
        echo "</div>

<script>
\$(document).ready(function(){
\t\$('#review').on('show', function () {
\t\t\$('#review-alert').alert('close');
\t});
\t
\tif(\$('.scroll').length != 0){
\t\t\$.scrollTo(\$('.scroll'));
\t}

\t\$('#review').validate({
\t\terrorLabelContainer: \$(\"#review-errors\"),
\t\terrorElement: 'span',
\t\terrorClass: 'error',
\t\twrapClass: 'help-block',
\t\trules: {
\t\t\t\"nick\":{
\t\t\t\t\"required\":true,
\t\t\t},
\t\t\t\"htmlopinion\":{
\t\t\t\t\"required\":true,
\t\t\t},
\t\t},
\t\tmessages: {
\t\t\t\"nick\":{
\t\t\t\t\"required\":\"Aby dodać opinię, musisz podać swój nick.\",
\t\t\t},
\t\t\t\"htmlopinion\":{
\t\t\t\t\"required\":\"";
        // line 96
        echo Gekosale\Translation::get("ERR_FILL_AN_OPINION");
        echo "\",
\t\t\t},
\t\t},
\t\thighlight: function(label) {
\t\t\t\$('#errors').addClass('error');
\t\t},
\t\tsubmitHandler: function(form) {
\t\t\tvar params = {};
\t\t\tvar form = \$('form#review').serializeArray();
\t\t\t\$.each(form, function(index,value) {
\t\t\t\tparams[value.name] = value.value;
\t\t\t});
\t\t\treturn xajax_addOpinion(";
        // line 108
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($_product_, "idproduct");
        echo ", params);
\t\t}
\t});
});
</script>";
    }

    public function getTemplateName()
    {
        return "productbox/index/opinions.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 108,  216 => 96,  184 => 66,  181 => 65,  179 => 64,  167 => 59,  160 => 56,  155 => 55,  128 => 49,  122 => 48,  117 => 46,  102 => 37,  95 => 35,  90 => 34,  85 => 33,  55 => 19,  47 => 17,  42 => 16,  22 => 3,  19 => 2,  105 => 33,  103 => 32,  100 => 31,  96 => 29,  88 => 26,  83 => 23,  73 => 23,  68 => 19,  54 => 14,  51 => 13,  40 => 9,  27 => 4,  23 => 3,  17 => 1,  92 => 35,  84 => 29,  74 => 21,  65 => 18,  61 => 15,  59 => 14,  46 => 9,  44 => 10,  39 => 7,  36 => 6,  33 => 5,  506 => 156,  496 => 148,  488 => 144,  485 => 143,  482 => 142,  474 => 138,  467 => 134,  461 => 132,  452 => 127,  437 => 118,  433 => 117,  426 => 114,  418 => 113,  414 => 112,  410 => 110,  406 => 109,  399 => 107,  386 => 105,  381 => 104,  373 => 103,  367 => 102,  361 => 101,  358 => 100,  353 => 99,  348 => 98,  342 => 94,  335 => 92,  332 => 91,  322 => 90,  316 => 88,  306 => 86,  303 => 85,  299 => 83,  286 => 81,  274 => 79,  262 => 78,  259 => 77,  245 => 70,  238 => 65,  223 => 63,  220 => 62,  215 => 61,  212 => 60,  202 => 57,  194 => 56,  191 => 55,  188 => 54,  185 => 53,  168 => 51,  162 => 50,  156 => 48,  152 => 54,  146 => 45,  143 => 53,  137 => 52,  132 => 51,  126 => 35,  112 => 45,  107 => 32,  99 => 31,  94 => 28,  91 => 27,  81 => 24,  76 => 23,  71 => 20,  64 => 18,  60 => 20,  53 => 12,  50 => 18,  41 => 7,  34 => 7,  31 => 4,  29 => 5,  26 => 2,);
    }
}
