<?php

/* cmsbox\index\index.tpl */
class __TwigTemplate_67980c689f4d3594e084e73cf35701df extends Twig_Template
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
        echo "<article class=\"article\">
\t<h1>";
        // line 4
        if (isset($context["cms"])) { $_cms_ = $context["cms"]; } else { $_cms_ = null; }
        echo $this->getAttribute($_cms_, "topic");
        echo "</h1>
\t";
        // line 5
        if (isset($context["cms"])) { $_cms_ = $context["cms"]; } else { $_cms_ = null; }
        if ((!twig_test_empty($this->getAttribute($_cms_, "undercategorybox")))) {
            // line 6
            echo "\t<ul>
\t\t";
            // line 7
            if (isset($context["cms"])) { $_cms_ = $context["cms"]; } else { $_cms_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_cms_, "undercategorybox"));
            foreach ($context['_seq'] as $context["_key"] => $context["subpage"]) {
                // line 8
                echo "\t\t<li><a href=\"";
                if (isset($context["subpage"])) { $_subpage_ = $context["subpage"]; } else { $_subpage_ = null; }
                echo Gekosale\Template::getPathFromRoute("frontend.staticcontent", array("param" => $this->getAttribute($_subpage_, "id"), "slug" => $this->getAttribute($_subpage_, "seo")));
                echo "\"><span>";
                if (isset($context["subpage"])) { $_subpage_ = $context["subpage"]; } else { $_subpage_ = null; }
                echo $this->getAttribute($_subpage_, "name");
                echo "</span></a></li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 10
            echo "    </ul>
    ";
        }
        // line 12
        echo "   \t";
        if (isset($context["cms"])) { $_cms_ = $context["cms"]; } else { $_cms_ = null; }
        echo $this->getAttribute($_cms_, "content");
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "cmsbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  61 => 10,  48 => 8,  43 => 7,  40 => 6,  37 => 5,  32 => 4,  29 => 3,  26 => 2,);
    }
}
