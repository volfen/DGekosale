<?php

/* pagination.tpl */
class __TwigTemplate_7ed23b56ec616c1d3f14e66ca373477f extends Twig_Template
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
        if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
        if (isset($context["dataset"])) { $_dataset_ = $context["dataset"]; } else { $_dataset_ = null; }
        if ((($_pagination_ == 1) && (twig_length_filter($this->env, $this->getAttribute($_dataset_, "totalPages")) > 1))) {
            // line 2
            echo "<div class=\"pagination pagination-centered\">
\t<ul>
\t\t";
            // line 4
            if (isset($context["paginationLinks"])) { $_paginationLinks_ = $context["paginationLinks"]; } else { $_paginationLinks_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_paginationLinks_);
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 5
                echo "\t\t\t<li class=\"";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo $this->getAttribute($_link_, "class");
                echo "\"><a href=\"";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo $this->getAttribute($_link_, "link");
                echo "\">";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo $this->getAttribute($_link_, "label");
                echo "</a></li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 7
            echo "\t</ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "pagination.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  30 => 5,  25 => 4,  21 => 2,  17 => 1,  202 => 54,  200 => 53,  196 => 52,  191 => 49,  170 => 47,  163 => 46,  154 => 39,  120 => 28,  116 => 26,  108 => 23,  92 => 21,  87 => 20,  83 => 18,  78 => 17,  75 => 16,  67 => 12,  60 => 10,  53 => 8,  50 => 7,  35 => 4,  173 => 50,  164 => 44,  148 => 42,  138 => 41,  135 => 40,  130 => 36,  125 => 36,  122 => 35,  118 => 33,  106 => 27,  80 => 24,  77 => 23,  72 => 15,  66 => 20,  58 => 18,  48 => 12,  43 => 11,  140 => 25,  137 => 37,  127 => 21,  103 => 19,  98 => 18,  93 => 17,  90 => 25,  86 => 15,  82 => 13,  71 => 12,  63 => 19,  54 => 10,  49 => 9,  44 => 8,  41 => 7,  38 => 5,  32 => 4,  29 => 3,  26 => 2,);
    }
}
