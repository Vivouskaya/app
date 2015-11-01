<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a35c14bbbb592eb7813ef05855d1efcf8398e734a3cc3d698b8a63c1c2a96c7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d411d7b56da643bd850b4c248069d21062b575b80482764b3de405c8d4a953e4 = $this->env->getExtension("native_profiler");
        $__internal_d411d7b56da643bd850b4c248069d21062b575b80482764b3de405c8d4a953e4->enter($__internal_d411d7b56da643bd850b4c248069d21062b575b80482764b3de405c8d4a953e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d411d7b56da643bd850b4c248069d21062b575b80482764b3de405c8d4a953e4->leave($__internal_d411d7b56da643bd850b4c248069d21062b575b80482764b3de405c8d4a953e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4bb236430c8b52550dd1528d91faa95d2d5ec2086658d5cff95f94c5a9d95b4d = $this->env->getExtension("native_profiler");
        $__internal_4bb236430c8b52550dd1528d91faa95d2d5ec2086658d5cff95f94c5a9d95b4d->enter($__internal_4bb236430c8b52550dd1528d91faa95d2d5ec2086658d5cff95f94c5a9d95b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4bb236430c8b52550dd1528d91faa95d2d5ec2086658d5cff95f94c5a9d95b4d->leave($__internal_4bb236430c8b52550dd1528d91faa95d2d5ec2086658d5cff95f94c5a9d95b4d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2183cbf61668ebec94493bffb1fd6a18d2d2a243b4448fdba08d869a9234a972 = $this->env->getExtension("native_profiler");
        $__internal_2183cbf61668ebec94493bffb1fd6a18d2d2a243b4448fdba08d869a9234a972->enter($__internal_2183cbf61668ebec94493bffb1fd6a18d2d2a243b4448fdba08d869a9234a972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2183cbf61668ebec94493bffb1fd6a18d2d2a243b4448fdba08d869a9234a972->leave($__internal_2183cbf61668ebec94493bffb1fd6a18d2d2a243b4448fdba08d869a9234a972_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_69a029eebfa035aa9b3da56e8d14961a62fb81dbd9b816443905d4d0cd23841d = $this->env->getExtension("native_profiler");
        $__internal_69a029eebfa035aa9b3da56e8d14961a62fb81dbd9b816443905d4d0cd23841d->enter($__internal_69a029eebfa035aa9b3da56e8d14961a62fb81dbd9b816443905d4d0cd23841d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_69a029eebfa035aa9b3da56e8d14961a62fb81dbd9b816443905d4d0cd23841d->leave($__internal_69a029eebfa035aa9b3da56e8d14961a62fb81dbd9b816443905d4d0cd23841d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
