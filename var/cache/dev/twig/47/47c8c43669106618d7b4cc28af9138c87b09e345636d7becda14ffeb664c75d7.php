<?php

/* PublicationBundle:Chercheur:publications.html.twig */
class __TwigTemplate_db3d8805e2102146d8df9d0cc9e8cbfbf350733f1bfe272ec9deef300c5f06c3 extends Twig_Template
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
        $__internal_8160816fb24dfc4dd5436e5e6ab0c30ac88371935f52f7728b51fd4fa908c29a = $this->env->getExtension("native_profiler");
        $__internal_8160816fb24dfc4dd5436e5e6ab0c30ac88371935f52f7728b51fd4fa908c29a->enter($__internal_8160816fb24dfc4dd5436e5e6ab0c30ac88371935f52f7728b51fd4fa908c29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicationBundle:Chercheur:publications.html.twig"));

        // line 1
        echo "<html>
  <head>
    <meta charset=\"utf-8\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("main.css"), "html", null, true);
        echo "\" />
    <title>Publications</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />
  </head>
  
  <body>
    <div id=\"container\">
     <header><center><h1>Articles dans des revues répertoriées dans les bases de données internationales</h1></center></header>
  <form id=\"header\" class=\"menu\" method=\"get\">
    <label for=\"actor\">Publications de</label>&nbsp;
    <select id=\"actor\" name=\"by\">
      <option value=\"\">tous</option>
      <optgroup label=\"Équipes de recherche\">
          <option>CREIDD</option>
          <option>ERA</option>
          <option>GAMMA3</option>
          <option>LASMIS</option>
          <option>LM2S</option>
          <option>LNIO</option>
          <option>LOSI</option>
          <option>TECH-CICO</option>
      </optgroup>
      <optgroup label=\"Programmes de recherche\">
          <option value=\"RESILIENCE ET GESTION DE CRISE\">Résilience et gestion de crise</option>
          <option value=\"SURVEILLANCE ET SURETE DES GRANDS SYSTEMES\">Surveillance et sûreté des grands systèmes</option>
          <option value=\"CYBER-SECURITE\">Cyber-sécurité</option>
          <option value=\"E-SANTE\">E-santé</option>
          <option value=\"ECO-CONCEPTION\">Éco-conception</option>
      </optgroup>
      <optgroup id=\"creator\" label=\"Auteurs\" />
    </select>&nbsp;
    <label for=\"issued\">depuis</label>&nbsp;
    <select id=\"issued\" name=\"since\"></select>&nbsp;
    <a id=\"help\" href=\"https://github.com/benel/Tire-a-part/wiki\" target=\"_blank\">?&nbsp;</a>
  </form>
  <script src=\"included/lib/chosen.jquery.min.js\"></script>


  <script type=\"text/javascript\">



    function normalize(string) {
      return string.toUpperCase()
        .replace(/[ÂÄÀ]/g, \"A\")
        .replace(/[ÉÊËÈ]/g, \"E\")
        .replace(/[ÎÏ]/g, \"I\")
        .replace(/[ÔÖ]/g, \"O\")
        .replace(/[ÛÜÙ]/g, \"U\")
        .replace(/Ç/g, \"C\")
        .replace(/Ñ/g, \"N\");
    }

    \$(document).ready(function() {
      \$(\"[name=by]\").chosen();
      \$(\"[name=since]\").chosen({disable_search_threshold: 999, width: \"7%\"});
      \$.ajax({
        url: \"attribute\",
        type: \"GET\",
        dataType: \"json\",
        success: function(result) {
          const BY = \"\"; 
          const SINCE = \"\"; 
          \$.each(result.rows, function(i, o) {
            if (o.key[0]==\"issued\" || o.value>1) {
              var key = (o.key[2]?o.key[2]+\" \":\"\") + o.key[1];
              \$(\"#\" + o.key[0]).append(
                '<option value=\"' + normalize(key) + '\">' + key + '</option>'
              );
            }
          });
          \$(\"[name=by]\").val(BY);
          \$(\"[name=since]\").val(SINCE);
          \$(\"select\")
            .trigger(\"liszt:updated\")
            .change(function() {
              \$(\"#header\").submit();
            });
        }
      });
    });

  </script>    <div id=\"content\">
         
  \t<form id=\"option\" class=\"menu\">
        <button type=\"button\" id=\"create\">Créer...</button></br>
        <button type=\"button\" id=\"export\">Exporter</button></br>
        <button type=\"button\" id=\"count\">Compter</button></br>
        <button type=\"button\" id=\"check_creators\">Vérifier les auteurs...</button></br>
        <button type=\"button\" id=\"check_titles\">Vérifier les titres...</button>
      </form>
          <table>
              <tr ><td id=\"article\">
                <div>Celso Satoshi Sakuraba, Andréa Cynthia Santos, Christian Prins, </div>
                    <div><a href=\"52147e4bf4d14892fcdb4ca30e80417c\">Work-troop scheduling for road network accessibility after a major earthquake.</a></div>
                    <div><i>Electronic Notes in Discrete Mathematics</i>.
                    </div>
                <div>2016.</div>
                <div>
                  <img height=\"20\" src=\"included/DBLP.png\" title=\"Référencé par : DBLP\" />
                </div>
              </td></tr>
                 
              <tr><td id=\"article\">
                <div>Marc Lemercier, </div>
                    <div><a href=\"785cebca0a02472b6fe221832759daad\">Modélisation du routage et des hand-overs dans une constellation de satellites quelconque à l&#39;aide de la plate-forme MadKit.</a></div>
                    <div><i>rapport d&#39;avancement de projet RNRT</i>.
                    </div>
                <div>2002.</div>
                <div>
                  
                </div>
              </td></tr>
              
          </table>
      </div>
      
    </div>
  </body>
</html>";
        
        $__internal_8160816fb24dfc4dd5436e5e6ab0c30ac88371935f52f7728b51fd4fa908c29a->leave($__internal_8160816fb24dfc4dd5436e5e6ab0c30ac88371935f52f7728b51fd4fa908c29a_prof);

    }

    public function getTemplateName()
    {
        return "PublicationBundle:Chercheur:publications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  27 => 4,  22 => 1,);
    }
}
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset("main.css") }}" />*/
/*     <title>Publications</title>*/
/*     <link rel="stylesheet" href="{{ asset("css/main.css") }}" />*/
/*   </head>*/
/*   */
/*   <body>*/
/*     <div id="container">*/
/*      <header><center><h1>Articles dans des revues répertoriées dans les bases de données internationales</h1></center></header>*/
/*   <form id="header" class="menu" method="get">*/
/*     <label for="actor">Publications de</label>&nbsp;*/
/*     <select id="actor" name="by">*/
/*       <option value="">tous</option>*/
/*       <optgroup label="Équipes de recherche">*/
/*           <option>CREIDD</option>*/
/*           <option>ERA</option>*/
/*           <option>GAMMA3</option>*/
/*           <option>LASMIS</option>*/
/*           <option>LM2S</option>*/
/*           <option>LNIO</option>*/
/*           <option>LOSI</option>*/
/*           <option>TECH-CICO</option>*/
/*       </optgroup>*/
/*       <optgroup label="Programmes de recherche">*/
/*           <option value="RESILIENCE ET GESTION DE CRISE">Résilience et gestion de crise</option>*/
/*           <option value="SURVEILLANCE ET SURETE DES GRANDS SYSTEMES">Surveillance et sûreté des grands systèmes</option>*/
/*           <option value="CYBER-SECURITE">Cyber-sécurité</option>*/
/*           <option value="E-SANTE">E-santé</option>*/
/*           <option value="ECO-CONCEPTION">Éco-conception</option>*/
/*       </optgroup>*/
/*       <optgroup id="creator" label="Auteurs" />*/
/*     </select>&nbsp;*/
/*     <label for="issued">depuis</label>&nbsp;*/
/*     <select id="issued" name="since"></select>&nbsp;*/
/*     <a id="help" href="https://github.com/benel/Tire-a-part/wiki" target="_blank">?&nbsp;</a>*/
/*   </form>*/
/*   <script src="included/lib/chosen.jquery.min.js"></script>*/
/* */
/* */
/*   <script type="text/javascript">*/
/* */
/* */
/* */
/*     function normalize(string) {*/
/*       return string.toUpperCase()*/
/*         .replace(/[ÂÄÀ]/g, "A")*/
/*         .replace(/[ÉÊËÈ]/g, "E")*/
/*         .replace(/[ÎÏ]/g, "I")*/
/*         .replace(/[ÔÖ]/g, "O")*/
/*         .replace(/[ÛÜÙ]/g, "U")*/
/*         .replace(/Ç/g, "C")*/
/*         .replace(/Ñ/g, "N");*/
/*     }*/
/* */
/*     $(document).ready(function() {*/
/*       $("[name=by]").chosen();*/
/*       $("[name=since]").chosen({disable_search_threshold: 999, width: "7%"});*/
/*       $.ajax({*/
/*         url: "attribute",*/
/*         type: "GET",*/
/*         dataType: "json",*/
/*         success: function(result) {*/
/*           const BY = ""; */
/*           const SINCE = ""; */
/*           $.each(result.rows, function(i, o) {*/
/*             if (o.key[0]=="issued" || o.value>1) {*/
/*               var key = (o.key[2]?o.key[2]+" ":"") + o.key[1];*/
/*               $("#" + o.key[0]).append(*/
/*                 '<option value="' + normalize(key) + '">' + key + '</option>'*/
/*               );*/
/*             }*/
/*           });*/
/*           $("[name=by]").val(BY);*/
/*           $("[name=since]").val(SINCE);*/
/*           $("select")*/
/*             .trigger("liszt:updated")*/
/*             .change(function() {*/
/*               $("#header").submit();*/
/*             });*/
/*         }*/
/*       });*/
/*     });*/
/* */
/*   </script>    <div id="content">*/
/*          */
/*   	<form id="option" class="menu">*/
/*         <button type="button" id="create">Créer...</button></br>*/
/*         <button type="button" id="export">Exporter</button></br>*/
/*         <button type="button" id="count">Compter</button></br>*/
/*         <button type="button" id="check_creators">Vérifier les auteurs...</button></br>*/
/*         <button type="button" id="check_titles">Vérifier les titres...</button>*/
/*       </form>*/
/*           <table>*/
/*               <tr ><td id="article">*/
/*                 <div>Celso Satoshi Sakuraba, Andréa Cynthia Santos, Christian Prins, </div>*/
/*                     <div><a href="52147e4bf4d14892fcdb4ca30e80417c">Work-troop scheduling for road network accessibility after a major earthquake.</a></div>*/
/*                     <div><i>Electronic Notes in Discrete Mathematics</i>.*/
/*                     </div>*/
/*                 <div>2016.</div>*/
/*                 <div>*/
/*                   <img height="20" src="included/DBLP.png" title="Référencé par : DBLP" />*/
/*                 </div>*/
/*               </td></tr>*/
/*                  */
/*               <tr><td id="article">*/
/*                 <div>Marc Lemercier, </div>*/
/*                     <div><a href="785cebca0a02472b6fe221832759daad">Modélisation du routage et des hand-overs dans une constellation de satellites quelconque à l&#39;aide de la plate-forme MadKit.</a></div>*/
/*                     <div><i>rapport d&#39;avancement de projet RNRT</i>.*/
/*                     </div>*/
/*                 <div>2002.</div>*/
/*                 <div>*/
/*                   */
/*                 </div>*/
/*               </td></tr>*/
/*               */
/*           </table>*/
/*       </div>*/
/*       */
/*     </div>*/
/*   </body>*/
/* </html>*/
