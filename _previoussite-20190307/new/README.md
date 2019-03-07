# Introduction

## CSS syntax

This site uses the Lunia UI Library. This library is based on generic, re-usable modular CSS classes. Where specific, single-use design patterns are needed, these are declared using BEM syntax, and no block-level modular helper classes are used in the same block (as it becomes confusing and specificity problems arise when classes for a specific context are mixed with block-level generic, re-usable classes).

Modular CSS classes are declared in the html in order from: structure/layout > spacing > alignment > text options > colour.

For example:

```<div class="flow-ltr-mob pad-xy-mob align-c-mob text-r-mob theme-red">```

## Responsive

The Lunia UI Library has responsiveness baked in. Modular CSS helper classes often end in "mob", "tab" and "des".


## Folder structure

All assets are placed under the "assets" folder. Minified CSS is kept directly inside the "assets" folder so styles can reference assets simply, without using "../". The original SASS sheets are kept in the "assets/sheets" folder. These are ignored in production as they are compiled into minified CSS sheets.

Partials are called using PHP file_get_contents.

Critical CSS is inlined in the body (for better performance).

Non-critical CSS is async loaded using loadCSS.

Non-critical scripts are combined and deferred.


## BEM syntax

Learn about syntax at https://www.youtube.com/watch?v=Ty5jtMZXbmk

- .block (a generic block level parent)
- .block__element (an element is a component that cannot be used outside of its block level parent)
- .block--modifier or .block__element--modifier (a modifier is a specific iteration of a block parent or element)

### BEM syntax example:

- .container
- .container__button
- .container__button--red
- .container--red