
(function() {
  var mode = CodeMirror.getMode({indentUnit: 2}, "css");
  function MT(name) { test.mode(name, mode, Array.prototype.slice.call(arguments, 1)); }

  MT("atMediaUnknownType",
     "[def @media] [attribute screen] [keyword and] [error foobarhello] { }");

  MT("atMediaUnknownProperty",
     "[def @media] [attribute screen] [keyword and] ([error foobarhello]) { }");

  MT("atMediaMaxWidthNested",
     "[def @media] [attribute screen] [keyword and] ([property max-width]: [number 25px]) { [tag foo] { } }");

  MT("atMediaFeatureValueKeyword",
     "[def @media] ([property orientation]: [keyword landscape]) { }");

  MT("atMediaUnknownFeatureValueKeyword",
     "[def @media] ([property orientation]: [error upsidedown]) { }");

  MT("atMediaUppercase",
     "[def @MEDIA] ([property orienTAtion]: [keyword landScape]) { }");

  MT("tagSelector",
     "[tag foo] { }");

  MT("classSelector",
     "[qualifier .foo-bar_hello] { }");

  MT("idSelector",
     "[builtin #foo] { [error #foo] }");

  MT("tagSelectorUnclosed",
     "[tag foo] { [property margin]: [number 0] } [tag bar] { }");

  MT("tagStringNoQuotes",
     "[tag foo] { [property font-family]: [variable hello] [variable world]; }");

  MT("tagStringDouble",
     "[tag foo] { [property font-family]: [string \"hello world\"]; }");

  MT("tagStringSingle",
     "[tag foo] { [property font-family]: [string 'hello world']; }");

  MT("tagColorKeyword",
     "[tag foo] {",
     "  [property color]: [keyword black];",
     "  [property color]: [keyword navy];",
     "  [property color]: [keyword yellow];",
     "}");

  MT("tagColorHex3",
     "[tag foo] { [property background]: [atom #fff]; }");

  MT("tagColorHex4",
     "[tag foo] { [property background]: [atom #ffff]; }");

  MT("tagColorHex6",
     "[tag foo] { [property background]: [atom #ffffff]; }");

  MT("tagColorHex8",
     "[tag foo] { [property background]: [atom #ffffffff]; }");

  MT("tagColorHex5Invalid",
     "[tag foo] { [property background]: [atom&error #fffff]; }");

  MT("tagColorHexInvalid",
     "[tag foo] { [property background]: [atom&error #ffg]; }");

  MT("tagNegativeNumber",
     "[tag foo] { [property margin]: [number -5px]; }");

  MT("tagPositiveNumber",
     "[tag foo] { [property padding]: [number 5px]; }");

  MT("tagVendor",
     "[tag foo] { [meta -foo-][property box-sizing]: [meta -foo-][atom border-box]; }");

  MT("tagBogusProperty",
     "[tag foo] { [property&error barhelloworld]: [number 0]; }");

  MT("tagTwoProperties",
     "[tag foo] { [property margin]: [number 0]; [property padding]: [number 0]; }");

  MT("tagTwoPropertiesURL",
     "[tag foo] { [property background]: [variable&callee url]([string //example.com/foo.png]); [property padding]: [number 0]; }");

  MT("indent_tagSelector",
     "[tag strong], [tag em] {",
     "  [property background]: [variable&callee rgba](",
     "    [number 255], [number 255], [number 0], [number .2]",
     "  );",
     "}");

  MT("indent_atMedia",
     "[def @media] {",
     "  [tag foo] {",
     "    [property color]:",
     "      [keyword yellow];",
     "  }",
     "}");

  MT("indent_comma",
     "[tag foo] {",
     "  [property font-family]: [variable verdana],",
     "    [atom sans-serif];",
     "}");

  MT("indent_parentheses",
     "[tag foo]:[variable-3 before] {",
     "  [property background]: [variable&callee url](",
     "[string     blahblah]",
     "[string     etc]",
     "[string   ]) [keyword !important];",
     "}");

  MT("font_face",
     "[def @font-face] {",
     "  [property font-family]: [string 'myfont'];",
     "  [error nonsense]: [string 'abc'];",
     "  [property src]: [variable&callee url]([string http://blah]),",
     "    [variable&callee url]([string http://foo]);",
     "}");

  MT("empty_url",
     "[def @import] [variable&callee url]() [attribute screen];");

  MT("parens",
     "[qualifier .foo] {",
     "  [property background-image]: [variable&callee fade]([atom #000], [number 20%]);",
     "  [property border-image]: [variable&callee linear-gradient](",
     "    [atom to] [atom bottom],",
     "    [variable&callee fade]([atom #000], [number 20%]) [number 0%],",
     "    [variable&callee fade]([atom #000], [number 20%]) [number 100%]",
     "  );",
     "}");

  MT("css_variable",
     ":[variable-3 root] {",
     "  [variable-2 --main-color]: [atom #06c];",
     "}",
     "[tag h1][builtin #foo] {",
     "  [property color]: [variable&callee var]([variable-2 --main-color]);",
     "}");

  MT("blank_css_variable",
     ":[variable-3 root] {",
     "  [variable-2 --]: [atom #06c];",
     "}",
     "[tag h1][builtin #foo] {",
     "  [property color]: [variable&callee var]([variable-2 --]);",
     "}");

  MT("supports",
     "[def @supports] ([keyword not] (([property text-align-last]: [atom justify]) [keyword or] ([meta -moz-][property text-align-last]: [atom justify])) {",
     "  [property text-align-last]: [atom justify];",
     "}");

   MT("document",
      "[def @document] [variable&callee url]([string http://blah]),",
      "  [variable&callee url-prefix]([string https://]),",
      "  [variable&callee domain]([string blah.com]),",
      "  [variable&callee regexp]([string \".*blah.+\"]) {",
      "    [builtin #id] {",
      "      [property background-color]: [keyword white];",
      "    }",
      "    [tag foo] {",
      "      [property font-family]: [variable Verdana], [atom sans-serif];",
      "    }",
      "}");

   MT("document_url",
      "[def @document] [variable&callee url]([string http://blah]) { [qualifier .class] { } }");

   MT("document_urlPrefix",
      "[def @document] [variable&callee url-prefix]([string https://]) { [builtin #id] { } }");

   MT("document_domain",
      "[def @document] [variable&callee domain]([string blah.com]) { [tag foo] { } }");

   MT("document_regexp",
      "[def @document] [variable&callee regexp]([string \".*blah.+\"]) { [builtin #id] { } }");

   MT("counter-style",
      "[def @counter-style] [variable binary] {",
      "  [property system]: [atom numeric];",
      "  [property symbols]: [number 0] [number 1];",
      "  [property suffix]: [string \".\"];",
      "  [property range]: [atom infinite];",
      "  [property speak-as]: [atom numeric];",
      "}");

   MT("counter-style-additive-symbols",
      "[def @counter-style] [variable simple-roman] {",
      "  [property system]: [atom additive];",
      "  [property additive-symbols]: [number 10] [variable X], [number 5] [variable V], [number 1] [variable I];",
      "  [property range]: [number 1] [number 49];",
      "}");

   MT("counter-style-use",
      "[tag ol][qualifier .roman] { [property list-style]: [variable simple-roman]; }");

   MT("counter-style-symbols",
      "[tag ol] { [property list-style]: [variable&callee symbols]([atom cyclic] [string \"*\"] [string \"\\2020\"] [string \"\\2021\"] [string \"\\A7\"]); }");

  MT("comment-does-not-disrupt",
     "[def @font-face] [comment /* foo */] {",
     "  [property src]: [variable&callee url]([string x]);",
     "  [property font-family]: [variable One];",
     "}")
})();