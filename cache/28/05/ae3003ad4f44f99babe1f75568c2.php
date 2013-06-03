<?php

/* footer.tpl */
class __TwigTemplate_2805ae3003ad4f44f99babe1f75568c2 extends Twig_Template
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
        echo "\t</div>
    <footer class=\"footer\">
        <div class=\"container border\">
            <div class=\"row\">
                <div class=\"span5\">
                    ";
        // line 6
        $this->env->loadTemplate("newsletter.tpl")->display($context);
        // line 7
        echo "                </div>
                <div class=\"span7\">
                    <div class=\"row-fluid\">
                    \t";
        // line 10
        if (isset($context["contentcategory"])) { $_contentcategory_ = $context["contentcategory"]; } else { $_contentcategory_ = null; }
        if ((!twig_test_empty($_contentcategory_))) {
            // line 11
            echo "\t\t\t\t\t\t";
            if (isset($context["contentcategory"])) { $_contentcategory_ = $context["contentcategory"]; } else { $_contentcategory_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_contentcategory_);
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                if (($this->getAttribute($_cat_, "footer") == 1)) {
                    // line 12
                    echo "                        <div class=\"span4\">
                            <h3 class=\"font\">";
                    // line 13
                    if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                    echo $this->getAttribute($_cat_, "name");
                    echo "</h3>
                            <ul class=\"nav nav-pills nav-stacked\">
                            \t";
                    // line 15
                    if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                    if ((!twig_test_empty($this->getAttribute($_cat_, "children")))) {
                        // line 16
                        echo "\t\t\t\t\t\t\t\t";
                        if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_cat_, "children"));
                        foreach ($context['_seq'] as $context["_key"] => $context["subcat"]) {
                            if (isset($context["subcat"])) { $_subcat_ = $context["subcat"]; } else { $_subcat_ = null; }
                            if (($this->getAttribute($_subcat_, "footer") == 1)) {
                                // line 17
                                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                                if (isset($context["subcat"])) { $_subcat_ = $context["subcat"]; } else { $_subcat_ = null; }
                                echo $this->getAttribute($_subcat_, "link");
                                echo "\">";
                                if (isset($context["subcat"])) { $_subcat_ = $context["subcat"]; } else { $_subcat_ = null; }
                                echo $this->getAttribute($_subcat_, "name");
                                echo "</a></li>
\t\t\t\t\t\t\t\t";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcat'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 19
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 20
                    echo "                            </ul>
                        </div>
\t\t\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 23
            echo "\t\t\t\t\t\t";
        }
        // line 24
        echo "                        <div class=\"span4\">
                            <h3 class=\"font\">";
        // line 25
        echo Gekosale\Translation::get("TXT_YOUR_ACCOUNT");
        echo "</h3>
                            <ul class=\"nav nav-pills nav-stacked\">
                            ";
        // line 27
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if ((!twig_test_empty($_client_))) {
            // line 28
            echo "                                <li><a href=\"";
            echo Gekosale\Template::getPathFromRoute("frontend.clientsettings");
            echo "\">";
            echo Gekosale\Translation::get("TXT_SETTINGS");
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 29
            echo Gekosale\Template::getPathFromRoute("frontend.clientorder");
            echo "\">";
            echo Gekosale\Translation::get("TXT_ORDERS");
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 30
            echo Gekosale\Template::getPathFromRoute("frontend.clientaddress");
            echo "\">";
            echo Gekosale\Translation::get("TXT_CLIENT_ADDRESS");
            echo "</a></li>\t\t\t\t\t\t\t\t
                            ";
        } else {
            // line 32
            echo "                            \t<li><a href=\"";
            echo Gekosale\Template::getPathFromRoute("frontend.clientlogin");
            echo "\">";
            echo Gekosale\Translation::get("TXT_LOGIN_TO_YOUR_ACCOUNT");
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 33
            echo Gekosale\Template::getPathFromRoute("frontend.registration");
            echo "\">";
            echo Gekosale\Translation::get("TXT_REGISTER");
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 34
            echo Gekosale\Template::getPathFromRoute("frontend.clientorder");
            echo "\">";
            echo Gekosale\Translation::get("TXT_ORDER_STATUS");
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        // line 36
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container copy\">
            <div class=\"row\">
                <div class=\"span6\">
                    2012 © <span>";
        // line 45
        if (isset($context["SHOP_NAME"])) { $_SHOP_NAME_ = $context["SHOP_NAME"]; } else { $_SHOP_NAME_ = null; }
        echo $_SHOP_NAME_;
        echo "</span> / Wszystkie prawa zastrzeżone.
                </div>
                <div class=\"span6 pull-right alignright\">
                    <a href=\"http://www.gekosale.pl/\" title=\"Gekosale.pl - bezpĹ‚atne oprogramowanie sklepu internetowego\" target=\"_blank\"><img src=\"";
        // line 48
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_frontend/core/logos/gekosale.png\" alt=\"Gekosale\" width=\"110\" height=\"21\" /></a>
                </div>
            </div>
        </div>
    </footer>
\t<div id=\"basketModal\" class=\"modal fade hide\"></div>
\t<div id=\"productModal\" class=\"modal fade hide\"></div>
\t";
        // line 55
        $this->env->loadTemplate("modal_gallery.tpl")->display($context);
        // line 56
        echo "\t";
        if (isset($context["footerJS"])) { $_footerJS_ = $context["footerJS"]; } else { $_footerJS_ = null; }
        echo $_footerJS_;
        echo "
\t";
        // line 57
        if (isset($context["affirmeo"])) { $_affirmeo_ = $context["affirmeo"]; } else { $_affirmeo_ = null; }
        echo $_affirmeo_;
        echo "
\t";
        // line 58
        if (isset($context["modulesettings"])) { $_modulesettings_ = $context["modulesettings"]; } else { $_modulesettings_ = null; }
        if (($this->getAttribute($this->getAttribute($_modulesettings_, "ceneo"), "ceneoguid") != "")) {
            // line 59
            echo "\t<script type=\"text/javascript\" src=\"http://ssl.ceneo.pl/shops/v3/script.js?accountGuid=";
            if (isset($context["modulesettings"])) { $_modulesettings_ = $context["modulesettings"]; } else { $_modulesettings_ = null; }
            echo $this->getAttribute($this->getAttribute($_modulesettings_, "ceneo"), "ceneoguid");
            echo "\"></script>
\t";
        }
        // line 61
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 61,  187 => 59,  184 => 58,  179 => 57,  173 => 56,  171 => 55,  160 => 48,  153 => 45,  142 => 36,  135 => 34,  129 => 33,  122 => 32,  115 => 30,  109 => 29,  102 => 28,  99 => 27,  94 => 25,  91 => 24,  88 => 23,  79 => 20,  76 => 19,  62 => 17,  54 => 16,  51 => 15,  45 => 13,  42 => 12,  34 => 11,  31 => 10,  26 => 7,  24 => 6,  17 => 1,);
    }
}
