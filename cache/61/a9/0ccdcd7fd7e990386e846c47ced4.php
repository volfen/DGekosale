<?php

/* producerlistbox\index\list.tpl */
class __TwigTemplate_61a90ccdcd7fd7e990386e846c47ced4 extends Twig_Template
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
        echo "\t\t<article class=\"article category-list producerlistbox\">
\t\t\t<h1>";
        // line 4
        if (isset($context["box"])) { $_box_ = $context["box"]; } else { $_box_ = null; }
        echo $this->getAttribute($_box_, "heading");
        echo "</h1>
\t\t\t<table>
\t\t\t";
        // line 6
        if (isset($context["producers"])) { $_producers_ = $context["producers"]; } else { $_producers_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_producers_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["producer"]) {
            // line 7
            echo "\t\t\t\t";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "first")) {
                // line 8
                echo "\t\t\t\t<tr>
\t\t\t\t";
            }
            // line 10
            echo "\t\t\t\t\t<td class=\"valignmiddle aligncenter\">
\t\t\t\t\t\t";
            // line 11
            if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
            if (($this->getAttribute($_producer_, "photo") != "")) {
                // line 12
                echo "\t\t\t\t\t\t\t<a href=\"";
                if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
                echo $this->getAttribute($_producer_, "link");
                echo "\" title=\"";
                if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
                echo $this->getAttribute($_producer_, "name");
                echo "\" class=\"aligncenter\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 13
                if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
                echo $this->getAttribute($_producer_, "photo");
                echo "\" alt=\"";
                if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
                echo $this->getAttribute($_producer_, "name");
                echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            } else {
                // line 16
                echo "\t\t\t\t\t\t\t<a href=\"";
                if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
                echo $this->getAttribute($_producer_, "link");
                echo "\" title=\"";
                if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
                echo $this->getAttribute($_producer_, "name");
                echo "\" class=\"aligncenter\">
\t\t\t\t\t\t\t\t<h2 class=\"noborder\">";
                // line 17
                if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
                echo $this->getAttribute($_producer_, "name");
                echo "</h2>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 20
            echo "\t\t\t\t\t</td>
\t\t\t\t";
            // line 21
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ((0 == $this->getAttribute($_loop_, "index") % 3)) {
                // line 22
                echo "\t\t\t\t</tr>
    \t\t\t<tr>
\t\t\t\t";
            }
            // line 24
            echo "\t
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producer'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "\t\t\t</table>
\t\t</article>
";
    }

    public function getTemplateName()
    {
        return "producerlistbox\\index\\list.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 26,  116 => 24,  111 => 22,  108 => 21,  105 => 20,  98 => 17,  89 => 16,  79 => 13,  70 => 12,  67 => 11,  64 => 10,  60 => 8,  56 => 7,  38 => 6,  32 => 4,  29 => 3,  26 => 2,);
    }
}
