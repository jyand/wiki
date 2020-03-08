# Style Guide
This is not meant to be authoritative. There may be some points about efficiency but mostly these are my opinions about what looks good in terms of readability. Check out the example source files.

* 8-space tabs
* 1TB curly-brace style
* space before a semicolon (I've never seen anyone else do this but I think it looks better)
* Many like to limit columns to 80, but I have no problem with unbounded width. One's text editor should display line numbers and wrap lines.
* Avoid extensive, and especially unnecessary, commenting. Naming conventions and general readability should be communicative.
* When the intended effect is the same (which is most of the time), pre-increment rather than post-icrement.
* Avoid the elseif keyword. Depending on the situation, a switch statement or additional if statements may be appropriate.
* An empty loop body should have both curly-braces on the same line as it's invocation.
* Logically conjoined conditions should be listed in descending order of restrictiveness.
* Arithmetic should look like algebraic expressions i.e. spaces between operands and operator for addition/subtraction and none for multiplication
* Division should only have spaces between operands and operator when the operands are expressions in parentheses 
* Spaces between operands and operator for assignment *(exception: shell scripts)*, modulo, compound expressions, and comparison/boolean operators *(the exception: '!')*
